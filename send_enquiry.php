<?php
/**
 * TIBS — Contact Form Enquiry Handler
 * 
 * Handles POST submissions from contact.php, validates input,
 * and sends formatted emails to the configured recipient via SMTP.
 */

header('Content-Type: application/json; charset=UTF-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'error' => 'Method Not Allowed']);
    exit;
}

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/smtp_mailer.php';

// Honeypot check (anti-spam)
if (!empty($_POST['website'])) {
    // Silent success for bots
    echo json_encode(['success' => true]);
    exit;
}

// Sanitize inputs
$fullName = trim($_POST['full-name'] ?? '');
$email    = trim($_POST['email'] ?? '');
$phone    = trim($_POST['phone'] ?? '');
$course   = trim($_POST['course'] ?? '');
$message  = trim($_POST['message'] ?? '');

// Validation
$errors = [];
if ($fullName === '' || mb_strlen($fullName) < 2) {
    $errors[] = 'Please enter your full name.';
}

if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Please enter a valid email address.';
}

if ($phone === '' || mb_strlen($phone) < 6) {
    $errors[] = 'Please enter a valid phone number.';
}

if ($message === '') {
    $errors[] = 'Please enter your message or question.';
}

if (!empty($errors)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'error' => implode(' ', $errors)]);
    exit;
}

// Course label mapping
$courseLabels = [
    'ibcp-regular' => 'Flagship IBCP — 3 Months Regular (Weekday Batch)',
    'ibcp-weekend' => 'IBCP — 6 Months Weekend (Saturday & Sunday Batch)',
    'undecided'    => 'General Enquiry / Need Guidance',
];
$courseDisplay = $courseLabels[$course] ?? ($course !== '' ? htmlspecialchars($course, ENT_QUOTES, 'UTF-8') : 'Not specified');

// Prepare email content
$subject = "New Course Enquiry: {$fullName} [" . ($course === 'ibcp-weekend' ? '6M Weekend' : ($course === 'ibcp-regular' ? '3M Regular' : 'Enquiry')) . "]";

$ipAddress = $_SERVER['REMOTE_ADDR'] ?? 'Unknown';
$submittedAt = date('d M Y, h:i A (T)');

// Plain text version
$plainText = "TIBS — New Course Enquiry Received\n";
$plainText .= "====================================\n\n";
$plainText .= "Full Name:      {$fullName}\n";
$plainText .= "Email:          {$email}\n";
$plainText .= "Phone:          {$phone}\n";
$plainText .= "Course / Track: {$courseDisplay}\n";
$plainText .= "Submitted At:   {$submittedAt}\n";
$plainText .= "IP Address:     {$ipAddress}\n\n";
$plainText .= "Message / Questions:\n";
$plainText .= "--------------------\n";
$plainText .= "{$message}\n\n";
$plainText .= "---\n";
$plainText .= "The Investment Banking School (TIBS)\n";

// HTML version
$safeFullName = htmlspecialchars($fullName, ENT_QUOTES, 'UTF-8');
$safeEmail    = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
$safePhone    = htmlspecialchars($phone, ENT_QUOTES, 'UTF-8');
$safeCourse   = htmlspecialchars($courseDisplay, ENT_QUOTES, 'UTF-8');
$safeMessage  = nl2br(htmlspecialchars($message, ENT_QUOTES, 'UTF-8'));

$htmlBody = <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>New Course Enquiry</title>
  <style>
    body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background-color: #f4f5f7; margin: 0; padding: 24px; color: #111111; }
    .container { max-width: 600px; margin: 0 auto; background: #ffffff; border-radius: 12px; overflow: hidden; border: 1px solid #e0e0e0; box-shadow: 0 4px 12px rgba(0,0,0,0.05); }
    .header { background: #000000; padding: 24px 32px; border-bottom: 3px solid #ffc107; }
    .header h1 { margin: 0; color: #ffffff; font-size: 20px; font-weight: 700; letter-spacing: 0.02em; }
    .header p { margin: 4px 0 0; color: #ffc107; font-size: 13px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.08em; }
    .content { padding: 32px; }
    .field-row { margin-bottom: 16px; padding-bottom: 12px; border-bottom: 1px solid #f0f0f0; }
    .field-row:last-child { border-bottom: none; }
    .field-label { font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.06em; color: #6b6b6b; margin-bottom: 4px; }
    .field-value { font-size: 15px; color: #111111; font-weight: 500; }
    .field-value a { color: #d49b00; text-decoration: none; }
    .message-box { background: #fafafa; border: 1px solid #e8e8e8; border-left: 4px solid #ffc107; border-radius: 6px; padding: 16px; margin-top: 8px; font-size: 14px; line-height: 1.6; color: #2d2d2d; }
    .footer { background: #fafafa; padding: 16px 32px; text-align: center; font-size: 12px; color: #888888; border-top: 1px solid #e8e8e8; }
  </style>
</head>
<body>
  <div class="container">
    <div class="header">
      <p>TIBS Admissions Portal</p>
      <h1>New Course Enquiry Received</h1>
    </div>
    <div class="content">
      <div class="field-row">
        <div class="field-label">Applicant Name</div>
        <div class="field-value"><strong>{$safeFullName}</strong></div>
      </div>
      <div class="field-row">
        <div class="field-label">Email Address</div>
        <div class="field-value"><a href="mailto:{$safeEmail}">{$safeEmail}</a></div>
      </div>
      <div class="field-row">
        <div class="field-label">Phone Number</div>
        <div class="field-value"><a href="tel:{$safePhone}">{$safePhone}</a></div>
      </div>
      <div class="field-row">
        <div class="field-label">Interested Course &amp; Batch</div>
        <div class="field-value"><strong style="color:#b8860b;">{$safeCourse}</strong></div>
      </div>
      <div class="field-row">
        <div class="field-label">Message / Details</div>
        <div class="message-box">{$safeMessage}</div>
      </div>
      <div class="field-row" style="margin-bottom:0;padding-bottom:0;">
        <div class="field-label">Submission Meta</div>
        <div class="field-value" style="font-size:12px;color:#888;">Time: {$submittedAt} &bull; IP: {$ipAddress}</div>
      </div>
    </div>
    <div class="footer">
      This is an automated notification from The Investment Banking School (TIBS) contact enquiry system.
    </div>
  </div>
</body>
</html>
HTML;

// Initialize SMTP Client from config
$smtpHost       = defined('SMTP_HOST') ? SMTP_HOST : '';
$smtpPort       = defined('SMTP_PORT') ? (int)SMTP_PORT : 587;
$smtpEncryption = defined('SMTP_ENCRYPTION') ? SMTP_ENCRYPTION : 'tls';
$smtpUsername   = defined('SMTP_USERNAME') ? SMTP_USERNAME : '';
$smtpPassword   = defined('SMTP_PASSWORD') ? SMTP_PASSWORD : '';
$smtpFromEmail  = defined('SMTP_FROM_EMAIL') ? SMTP_FROM_EMAIL : (defined('CONTACT_TO_EMAIL') ? CONTACT_TO_EMAIL : 'no-reply@theinvestmentbankingschool.com');
$smtpFromName   = defined('SMTP_FROM_NAME') ? SMTP_FROM_NAME : 'TIBS Admissions';
$toEmail        = defined('CONTACT_TO_EMAIL') ? CONTACT_TO_EMAIL : 'info@theinvestmentbankingschool.com';
$toName         = defined('CONTACT_TO_NAME') ? CONTACT_TO_NAME : 'The Investment Banking School';

$mailer = new SmtpMailer(
    $smtpHost,
    $smtpPort,
    $smtpEncryption,
    $smtpUsername,
    $smtpPassword,
    20
);

$sent = $mailer->send(
    $toEmail,
    $toName,
    $smtpFromEmail,
    $smtpFromName,
    $email,
    $fullName,
    $subject,
    $htmlBody,
    $plainText
);

if (!$sent) {
    error_log('TIBS SMTP Send Error: ' . $mailer->getLastError());
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'error' => 'Unable to send message at this moment. Please reach out to us directly via phone or email.'
    ]);
    exit;
}

echo json_encode([
    'success' => true,
    'message' => 'Thank you! Your enquiry has been sent successfully.'
]);
