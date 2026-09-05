<?php
require_once __DIR__ . '/config.php';
$page = 'contact';
$pageTitle = 'Contact TIBS | Investment Banking Training Institute in Kochi, Kerala';
$pageDescription = 'Get in touch with TIBS, the premier investment banking training institute in Kochi, Kerala. Enquire about upcoming batch dates, fees, and placement assistance.';
$ogTitle = 'Contact TIBS | Investment Banking Course in Kochi, Kerala';
$ogDescription = 'Enquire about the Investment Banking Certificate Program (IBCP) at TIBS in Kochi, Kerala. Contact us for syllabus, fees, and cohort details.';
$ogImageAlt = 'Contact TIBS investment banking training institute in Kochi Kerala';
include 'header.php';
?>

  <!-- ======== SECTION 1 — HERO ======== -->
  <section class="hero hero--page" id="contact-hero">
    <div class="hero__grid-pattern"></div>
    <div class="hero__decoration">
      <div class="hero__shape hero__shape--1"></div>
      <div class="hero__shape hero__shape--2"></div>
      <div class="hero__shape hero__shape--3"></div>
    </div>
    <div class="hero__accent-bar"></div>
    <div class="container">
      <div class="hero__content" style="max-width:780px;">
        <p class="label label--gold">Get in Touch</p>
        <h1 class="display-md hero__title">Take the Next Step Towards a Career in <span class="text-gold">Investment Banking</span></h1>
        <p class="hero__subtitle">Interested in our investment banking course in Kochi, Kerala? Enquire about the next IBCP cohort and take the first step towards a career in banking.</p>
      </div>
    </div>
  </section>

  <!-- ======== SECTION 2 & 3 — FORM + CONTACT INFO ======== -->
  <section class="section" id="enquiry">
    <div class="container">
      <div class="contact-grid">

        <!-- Enquiry Form -->
        <div class="fade-in-left">
          <div class="form-card" id="form-container">
            <div style="margin-bottom:var(--space-xl);">
              <p class="label label--gold">Enquiry Form</p>
              <h2 class="heading-md mt-sm">Send Us Your Enquiry</h2>
              <p class="body-sm mt-sm">Fill in your details below to enquire about investment banking course fees in Kochi, syllabus, and upcoming cohort dates.</p>
            </div>

            <form id="enquiry-form">
              <div class="form-group">
                <label for="full-name" class="form-label">Full Name <span style="color:var(--primary);">*</span></label>
                <input type="text" id="full-name" name="full-name" class="form-input" placeholder="Enter your full name" required>
              </div>
              <div class="form-group">
                <label for="email" class="form-label">Email Address <span style="color:var(--primary);">*</span></label>
                <input type="email" id="email" name="email" class="form-input" placeholder="Enter your email address" required>
              </div>
              <div class="form-group">
                <label for="phone" class="form-label">Phone Number <span style="color:var(--primary);">*</span></label>
                <input type="tel" id="phone" name="phone" class="form-input" placeholder="Enter your phone number" required>
              </div>
              <div class="form-group">
                <label for="message" class="form-label">Message <span style="color:var(--primary);">*</span></label>
                <textarea id="message" name="message" class="form-textarea" placeholder="Tell us what you'd like to know about the IBCP..." required></textarea>
              </div>
              <button type="submit" class="btn btn-primary btn-lg w-full" id="submit-btn">
                <i class="fa-solid fa-paper-plane"></i> Submit Enquiry
              </button>
            </form>

            <!-- Success state -->
            <div class="form-success" id="form-success">
              <div class="form-success__icon"><i class="fa-solid fa-check"></i></div>
              <h3 class="form-success__title">Enquiry Submitted Successfully</h3>
              <p class="form-success__text">Thank you for your interest in the IBCP. Our team will get back to you shortly.</p>
              <div class="mt-xl">
                <a href="<?= $b ?>/ibcp" class="btn btn-secondary">Explore the IBCP <i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>

        <!-- Contact Information -->
        <div class="fade-in-right">
          <div class="contact-info">
            <div style="margin-bottom:var(--space-xl);">
              <p class="label label--gold">Contact Details</p>
              <h3 style="font-size:1.25rem;font-weight:700;color:var(--white);margin-top:var(--space-sm);">Reach Out Directly</h3>
            </div>

            <div class="contact-info__item">
              <div class="contact-info__icon"><i class="fa-solid fa-phone"></i></div>
              <div>
                <div class="contact-info__label">Phone</div>
                <div class="contact-info__value"><a href="tel:+917511193707">+91 75111 93707</a></div>
              </div>
            </div>

            <div class="contact-info__item">
              <div class="contact-info__icon"><i class="fa-solid fa-envelope"></i></div>
              <div>
                <div class="contact-info__label">Email</div>
                <div class="contact-info__value"><a href="mailto:info@theinvestmentbankingschool.com">info@theinvestmentbankingschool.com</a></div>
              </div>
            </div>

            <div class="contact-info__item">
              <div class="contact-info__icon"><i class="fa-solid fa-globe"></i></div>
              <div>
                <div class="contact-info__label">Website</div>
                <div class="contact-info__value"><a href="https://www.theinvestmentbankingschool.com" target="_blank" rel="noopener">www.theinvestmentbankingschool.com</a></div>
              </div>
            </div>
          </div>

          <!-- Quick info card -->
          <div style="background:var(--gray-100);border-radius:var(--radius-xl);padding:var(--space-xl);margin-top:var(--space-lg);">
            <h4 style="font-size:1rem;font-weight:600;color:var(--black);margin-bottom:var(--space-base);">About the IBCP</h4>
            <div style="display:flex;align-items:center;gap:var(--space-sm);margin-bottom:var(--space-sm);">
              <i class="fa-solid fa-check" style="color:var(--primary);font-size:0.75rem;width:16px;text-align:center;"></i>
              <span style="font-size:0.875rem;color:var(--gray-600);">8 Core Modules</span>
            </div>
            <div style="display:flex;align-items:center;gap:var(--space-sm);margin-bottom:var(--space-sm);">
              <i class="fa-solid fa-check" style="color:var(--primary);font-size:0.75rem;width:16px;text-align:center;"></i>
              <span style="font-size:0.875rem;color:var(--gray-600);">Live + Recorded Sessions</span>
            </div>
            <div style="display:flex;align-items:center;gap:var(--space-sm);margin-bottom:var(--space-sm);">
              <i class="fa-solid fa-check" style="color:var(--primary);font-size:0.75rem;width:16px;text-align:center;"></i>
              <span style="font-size:0.875rem;color:var(--gray-600);">Small Batch Cohorts</span>
            </div>
            <div style="display:flex;align-items:center;gap:var(--space-sm);margin-bottom:var(--space-sm);">
              <i class="fa-solid fa-check" style="color:var(--primary);font-size:0.75rem;width:16px;text-align:center;"></i>
              <span style="font-size:0.875rem;color:var(--gray-600);">IBCP Certification</span>
            </div>
            <div style="display:flex;align-items:center;gap:var(--space-sm);">
              <i class="fa-solid fa-check" style="color:var(--primary);font-size:0.75rem;width:16px;text-align:center;"></i>
              <span style="font-size:0.875rem;color:var(--gray-600);">Placement Assistance</span>
            </div>
            <div class="mt-lg">
              <a href="<?= $b ?>/ibcp" class="btn btn-ghost">Explore the IBCP <i class="fa-solid fa-arrow-right" style="font-size:0.75rem;"></i></a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <?php include 'footer.php'; ?>

  <script src="<?= $b ?>/script.js"></script>
</body>
</html>
