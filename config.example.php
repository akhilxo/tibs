<?php
/**
 * TIBS — Site Configuration Example
 * 
 * Rename or copy this file to config.php and update your settings.
 */

// Base URL path where the site is served
// - Local (Herd root): ''
// - Subdirectory:      '/tibs'
define('BASE_PATH', '');

// Lead recipient email (where course enquiries will be delivered)
define('CONTACT_TO_EMAIL', 'info@theinvestmentbankingschool.com');
define('CONTACT_TO_NAME', 'The Investment Banking School');

// SMTP Email Settings
define('SMTP_HOST', 'smtp.example.com');             // SMTP server hostname (e.g., smtp.gmail.com, mail.yourdomain.com)
define('SMTP_PORT', 587);                           // SMTP port (587 for TLS, 465 for SSL, 25 for unencrypted)
define('SMTP_ENCRYPTION', 'tls');                   // 'tls', 'ssl', or '' (none)
define('SMTP_USERNAME', 'enquiries@yourdomain.com'); // SMTP account username / email address
define('SMTP_PASSWORD', 'your_smtp_password_here');  // SMTP account password or app-specific password
define('SMTP_FROM_EMAIL', 'enquiries@yourdomain.com'); // Outgoing "From" email address
define('SMTP_FROM_NAME', 'TIBS Admissions');         // Outgoing "From" display name
