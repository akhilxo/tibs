<?php
/**
 * TIBS — Shared Header Partial
 * 
 * Usage: Set $page, $pageTitle, and $pageDescription before including this file.
 * Example:
 *   $page = 'home';
 *   $pageTitle = 'TIBS | The Investment Banking School';
 *   $pageDescription = 'Description here.';
 *   include 'header.php';
 * 
 * Valid $page values: 'home', 'about', 'programs', 'ibcp', 'contact'
 */
$b = defined('BASE_PATH') ? BASE_PATH : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($pageTitle ?? 'Investment Banking Course | 100% Placement') ?></title>
  <meta name="description" content="<?= htmlspecialchars($pageDescription ?? 'Join the top investment banking training institute. Master financial modeling, valuation, and M&A with 100% placement support. Apply today!') ?>">

  <!-- Open Graph / Social Media Meta Tags -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?= htmlspecialchars($ogTitle ?? $pageTitle ?? 'Investment Banking Course in Kochi, Kerala | TIBS Certification & Placement') ?>">
  <meta property="og:description" content="<?= htmlspecialchars($ogDescription ?? $pageDescription ?? 'Launch your career in capital markets with TIBS\'s practical investment banking course. Master financial modeling, M&A, derivatives, and KYC/AML operations with industry experts.') ?>">
  <meta property="og:image" content="<?= $b ?>/logo.png">
  <meta property="og:image:alt" content="<?= htmlspecialchars($ogImageAlt ?? 'Investment banking training institute in Kochi Kerala - TIBS logo') ?>">

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="<?= $b ?>/favicon.ico">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= $b ?>/logo.png">
  <link rel="apple-touch-icon" href="<?= $b ?>/logo.png">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <link rel="stylesheet" href="<?= $b ?>/styles.css?v=1.2">
</head>
<body>

  <!-- ======== HEADER ======== -->
  <header class="header" id="header">
    <div class="header__inner">
      <a href="<?= $b ?>/" class="header__logo">
        <img src="<?= $b ?>/logo-no-bg.png" alt="TIBS — The Investment Banking School" class="header__logo-img">
      </a>
      <nav class="header__nav" id="main-nav">
        <div class="header__nav-links">
          <a href="<?= $b ?>/"<?php if ($page === 'home') echo ' class="active"'; ?>>Home</a>
          <a href="<?= $b ?>/about"<?php if ($page === 'about') echo ' class="active"'; ?>>About TIBS</a>
          <a href="<?= $b ?>/programs"<?php if ($page === 'programs' || $page === 'ibcp') echo ' class="active"'; ?>>Programs</a>
          <a href="<?= $b ?>/contact"<?php if ($page === 'contact') echo ' class="active"'; ?>>Contact</a>
        </div>
        <a href="<?= $b ?>/contact" class="btn btn-primary btn-sm">Enquire Now</a>
      </nav>
      <div class="header__hamburger" id="hamburger" aria-label="Toggle menu">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </header>
  <div class="header-spacer"></div>
