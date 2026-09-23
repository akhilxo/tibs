<?php
/**
 * Simple Lightweight SMTP Client
 * 
 * Supports SSL (port 465), TLS (port 587 / STARTTLS), and plain text.
 * Requires OpenSSL extension for SSL/TLS encryption.
 */
class SmtpMailer
{
    private string $host;
    private int $port;
    private string $encryption; // 'ssl', 'tls', or ''
    private string $username;
    private string $password;
    private int $timeout;
    private string $lastError = '';

    /**
     * @param string $host SMTP Host (e.g. smtp.gmail.com, mail.domain.com)
     * @param int $port SMTP Port (465 for SSL, 587 for TLS, 25 for plain)
     * @param string $encryption 'ssl', 'tls', or ''
     * @param string $username SMTP Username
     * @param string $password SMTP Password
     * @param int $timeout Connection timeout in seconds
     */
    public function __construct(
        string $host,
        int $port = 587,
        string $encryption = 'tls',
        string $username = '',
        string $password = '',
        int $timeout = 20
    ) {
        $this->host = $host;
        $this->port = $port;
        $this->encryption = strtolower($encryption);
        $this->username = $username;
        $this->password = $password;
        $this->timeout = $timeout;
    }

    public function getLastError(): string
    {
        return $this->lastError;
    }

    /**
     * Send email via SMTP
     * 
     * @param string $to Recipient email address
     * @param string $toName Recipient name
     * @param string $from Sender email address
     * @param string $fromName Sender name
     * @param string $replyTo Reply-to email address
     * @param string $replyToName Reply-to name
     * @param string $subject Email subject
     * @param string $htmlBody HTML body content
     * @param string $textBody Plain text body content
     * @return bool True if sent, false otherwise
     */
    public function send(
        string $to,
        string $toName,
        string $from,
        string $fromName,
        string $replyTo,
        string $replyToName,
        string $subject,
        string $htmlBody,
        string $textBody = ''
    ): bool {
        $this->lastError = '';

        $remote = ($this->encryption === 'ssl' ? 'ssl://' : '') . $this->host;
        $context = stream_context_create([
            'ssl' => [
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true,
            ]
        ]);

        $socket = @stream_socket_client(
            $remote . ':' . $this->port,
            $errno,
            $errstr,
            $this->timeout,
            STREAM_CLIENT_CONNECT,
            $context
        );

        if (!$socket) {
            $this->lastError = "Connection failed: $errstr ($errno)";
            return false;
        }

        stream_set_timeout($socket, $this->timeout);

        // Read initial welcome response (220)
        $resp = $this->readResponse($socket);
        if (!$this->isCode($resp, '220')) {
            $this->close($socket);
            return false;
        }

        $clientName = gethostname() ?: 'localhost';

        // EHLO
        $this->sendCommand($socket, "EHLO $clientName");
        $resp = $this->readResponse($socket);
        if (!$this->isCode($resp, '250')) {
            $this->sendCommand($socket, "HELO $clientName");
            $resp = $this->readResponse($socket);
            if (!$this->isCode($resp, '250')) {
                $this->close($socket);
                return false;
            }
        }

        // STARTTLS if TLS encryption requested
        if ($this->encryption === 'tls') {
            $this->sendCommand($socket, "STARTTLS");
            $resp = $this->readResponse($socket);
            if (!$this->isCode($resp, '220')) {
                $this->close($socket);
                return false;
            }

            $cryptoMethod = STREAM_CRYPTO_METHOD_TLS_CLIENT |
                            STREAM_CRYPTO_METHOD_TLSv1_2_CLIENT |
                            STREAM_CRYPTO_METHOD_TLSv1_3_CLIENT;

            $cryptoOk = @stream_socket_enable_crypto($socket, true, $cryptoMethod);
            if (!$cryptoOk) {
                $this->lastError = "TLS handshake failed";
                $this->close($socket);
                return false;
            }

            // Resend EHLO after STARTTLS
            $this->sendCommand($socket, "EHLO $clientName");
            $resp = $this->readResponse($socket);
            if (!$this->isCode($resp, '250')) {
                $this->close($socket);
                return false;
            }
        }

        // AUTH LOGIN if credentials are provided
        if ($this->username !== '') {
            $this->sendCommand($socket, "AUTH LOGIN");
            $resp = $this->readResponse($socket);
            if (!$this->isCode($resp, '334')) {
                $this->close($socket);
                return false;
            }

            $this->sendCommand($socket, base64_encode($this->username));
            $resp = $this->readResponse($socket);
            if (!$this->isCode($resp, '334')) {
                $this->close($socket);
                return false;
            }

            $this->sendCommand($socket, base64_encode($this->password));
            $resp = $this->readResponse($socket);
            if (!$this->isCode($resp, '235')) {
                $this->close($socket);
                return false;
            }
        }

        // MAIL FROM
        $this->sendCommand($socket, "MAIL FROM:<$from>");
        $resp = $this->readResponse($socket);
        if (!$this->isCode($resp, '250')) {
            $this->close($socket);
            return false;
        }

        // RCPT TO
        $this->sendCommand($socket, "RCPT TO:<$to>");
        $resp = $this->readResponse($socket);
        if (!$this->isCode($resp, '250')) {
            $this->close($socket);
            return false;
        }

        // DATA
        $this->sendCommand($socket, "DATA");
        $resp = $this->readResponse($socket);
        if (!$this->isCode($resp, '354')) {
            $this->close($socket);
            return false;
        }

        // Build MIME payload
        $boundary = '=_tibs_' . md5((string)microtime(true));
        $date = date('r');
        $subjectEncoded = '=?UTF-8?B?' . base64_encode($subject) . '?=';
        $fromEncoded = $fromName !== '' ? '=?UTF-8?B?' . base64_encode($fromName) . '?= <' . $from . '>' : $from;
        $toEncoded = $toName !== '' ? '=?UTF-8?B?' . base64_encode($toName) . '?= <' . $to . '>' : $to;
        $replyToEncoded = $replyToName !== '' ? '=?UTF-8?B?' . base64_encode($replyToName) . '?= <' . $replyTo . '>' : $replyTo;

        $headers = [];
        $headers[] = "Date: $date";
        $headers[] = "To: $toEncoded";
        $headers[] = "From: $fromEncoded";
        if ($replyTo !== '') {
            $headers[] = "Reply-To: $replyToEncoded";
        }
        $headers[] = "Subject: $subjectEncoded";
        $headers[] = "MIME-Version: 1.0";
        $headers[] = "Content-Type: multipart/alternative; boundary=\"$boundary\"";
        $headers[] = "X-Mailer: TIBS Mailer PHP";

        $body = implode("\r\n", $headers) . "\r\n\r\n";

        // Plain text section
        if ($textBody === '') {
            $textBody = strip_tags($htmlBody);
        }
        $body .= "--$boundary\r\n";
        $body .= "Content-Type: text/plain; charset=UTF-8\r\n";
        $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
        $body .= chunk_split(base64_encode($textBody)) . "\r\n";

        // HTML section
        $body .= "--$boundary\r\n";
        $body .= "Content-Type: text/html; charset=UTF-8\r\n";
        $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
        $body .= chunk_split(base64_encode($htmlBody)) . "\r\n";

        $body .= "--$boundary--\r\n";

        // Escape leading dots in mail body as per RFC
        $body = preg_replace('/^\./m', '..', $body);

        // Send payload and terminating period
        fwrite($socket, $body . "\r\n.\r\n");
        $resp = $this->readResponse($socket);
        if (!$this->isCode($resp, '250')) {
            $this->close($socket);
            return false;
        }

        // QUIT
        $this->sendCommand($socket, "QUIT");
        $this->readResponse($socket);
        $this->close($socket);

        return true;
    }

    private function sendCommand($socket, string $command): void
    {
        fwrite($socket, $command . "\r\n");
    }

    private function readResponse($socket): string
    {
        $response = '';
        while (!feof($socket)) {
            $line = fgets($socket, 1024);
            if ($line === false) {
                break;
            }
            $response .= $line;
            // Check if this is the final line of multiline response (code followed by space)
            if (preg_match('/^\d{3}\s/', $line)) {
                break;
            }
        }
        return trim($response);
    }

    private function isCode(string $response, string $expectedCode): bool
    {
        if (substr($response, 0, 3) !== $expectedCode) {
            $this->lastError = "Expected $expectedCode, got: $response";
            return false;
        }
        return true;
    }

    private function close($socket): void
    {
        if (is_resource($socket)) {
            fclose($socket);
        }
    }
}
