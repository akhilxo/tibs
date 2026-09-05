<?php
require_once __DIR__ . '/config.php';
$page = 'ibcp';
$pageTitle = 'Investment Banking Course in Kochi, Kerala | 100% Placement';
$pageDescription = 'Join the top investment banking training institute in Kochi, Kerala. Master financial modeling, valuation, and M&A with 100% placement support. Apply today!';
$ogTitle = 'Investment Banking Course in Kochi, Kerala | TIBS Certification & Placement';
$ogDescription = 'Launch your career in capital markets with TIBS\'s practical investment banking course in Kochi. Master financial modeling, M&A, derivatives, and KYC/AML operations with industry experts.';
$ogImageAlt = 'Investment banking training institute in Kochi Kerala - TIBS logo';
include 'header.php';
?>

  <!-- ======== SECTION 1 — PROGRAM HERO ======== -->
  <section class="hero" id="ibcp-hero">
    <div class="hero__grid-pattern"></div>
    <div class="hero__decoration">
      <div class="hero__shape hero__shape--1"></div>
      <div class="hero__shape hero__shape--2"></div>
      <div class="hero__shape hero__shape--3"></div>
      <div class="hero__shape hero__shape--4"></div>
    </div>
    <div class="hero__accent-bar"></div>
    <div class="container">
      <div class="hero__content">
        <p class="label label--gold">TIBS Flagship Program</p>
        <h1 class="display-lg hero__title">Investment Banking<br>Certificate <span class="text-gold">Program</span></h1>
        <p class="label" style="color:rgba(255,255,255,0.5);font-size:1.5rem;letter-spacing:0.15em;margin-bottom:var(--space-lg);">IBCP</p>
        <p class="hero__subtitle">A practitioner-led certificate program designed to take learners from financial statements to a fully built valuation and deal pitch.</p>
        <div class="hero__actions">
          <a href="<?= $b ?>/contact" class="btn btn-primary btn-lg">Enquire Now <i class="fa-solid fa-arrow-right"></i></a>
          <a href="#curriculum" class="btn btn-secondary--light btn-lg">Explore Curriculum</a>
        </div>
      </div>
    </div>
  </section>

  <!-- ======== SECTION 2 — PROGRAM AT A GLANCE ======== -->
  <section class="section" id="glance">
    <div class="container">
      <div class="section-header fade-in">
        <p class="label label--gold">Program Overview</p>
        <h2 class="heading-lg">The IBCP at a Glance</h2>
      </div>
      <div class="grid grid-5 stagger-children">
        <div class="highlight-card">
          <div class="highlight-card__icon"><i class="fa-solid fa-layer-group"></i></div>
          <div class="highlight-card__title">8 Core Modules</div>
          <div class="highlight-card__text">End-to-end curriculum</div>
        </div>
        <div class="highlight-card">
          <div class="highlight-card__icon"><i class="fa-solid fa-video"></i></div>
          <div class="highlight-card__title">Live + Recorded</div>
          <div class="highlight-card__text">Flexible learning</div>
        </div>
        <div class="highlight-card">
          <div class="highlight-card__icon"><i class="fa-solid fa-users"></i></div>
          <div class="highlight-card__title">Small Batch Cohorts</div>
          <div class="highlight-card__text">Personal attention</div>
        </div>
        <div class="highlight-card">
          <div class="highlight-card__icon"><i class="fa-solid fa-briefcase"></i></div>
          <div class="highlight-card__title">Capstone Deal Project</div>
          <div class="highlight-card__text">Real-deal simulation</div>
        </div>
        <div class="highlight-card">
          <div class="highlight-card__icon"><i class="fa-solid fa-certificate"></i></div>
          <div class="highlight-card__title">IBCP Certification</div>
          <div class="highlight-card__text">Industry credential</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ======== SECTION 3 — PROGRAM OVERVIEW ======== -->
  <section class="section section--tint" id="overview">
    <div class="container">
      <div class="about-content">
        <div class="about-content__text fade-in-left">
          <p class="label label--gold">The Complete Experience</p>
          <h2 class="heading-lg">From Financial Statements to Deal Pitching</h2>
          <hr class="gold-rule">
          <p class="body-lg">The IBCP is a comprehensive program that walks you through every critical area of investment banking, step by step, with practitioner guidance at every stage.</p>
          <p class="body-md mt-base">Starting from financial accounting fundamentals, you'll progress through modelling, valuation, M&A, leveraged buyouts, equity research, and advanced Excel, culminating in a capstone deal simulation where you present a complete deal to a faculty panel.</p>
        </div>
        <div class="about-content__visual fade-in-right">
          <div class="about-content__visual-card">
            <p class="label label--gold mb-lg">The IBCP Journey</p>
            <div style="position:relative;z-index:1;">
              <div style="display:flex;align-items:center;gap:var(--space-md);margin-bottom:var(--space-base);">
                <div style="width:32px;height:32px;background:var(--primary);border-radius:var(--radius-sm);display:flex;align-items:center;justify-content:center;font-size:0.75rem;font-weight:700;color:var(--black);flex-shrink:0;">1</div>
                <span style="color:rgba(255,255,255,0.8);font-size:0.9375rem;">Financial Statements</span>
              </div>
              <div style="display:flex;align-items:center;gap:var(--space-md);margin-bottom:var(--space-base);">
                <div style="width:32px;height:32px;background:rgba(255,193,7,0.2);border-radius:var(--radius-sm);display:flex;align-items:center;justify-content:center;font-size:0.75rem;font-weight:700;color:var(--primary);flex-shrink:0;">2</div>
                <span style="color:rgba(255,255,255,0.8);font-size:0.9375rem;">Financial Modelling</span>
              </div>
              <div style="display:flex;align-items:center;gap:var(--space-md);margin-bottom:var(--space-base);">
                <div style="width:32px;height:32px;background:rgba(255,193,7,0.2);border-radius:var(--radius-sm);display:flex;align-items:center;justify-content:center;font-size:0.75rem;font-weight:700;color:var(--primary);flex-shrink:0;">3</div>
                <span style="color:rgba(255,255,255,0.8);font-size:0.9375rem;">Valuation</span>
              </div>
              <div style="display:flex;align-items:center;gap:var(--space-md);margin-bottom:var(--space-base);">
                <div style="width:32px;height:32px;background:rgba(255,193,7,0.2);border-radius:var(--radius-sm);display:flex;align-items:center;justify-content:center;font-size:0.75rem;font-weight:700;color:var(--primary);flex-shrink:0;">4</div>
                <span style="color:rgba(255,255,255,0.8);font-size:0.9375rem;">M&A & Leveraged Buyouts</span>
              </div>
              <div style="display:flex;align-items:center;gap:var(--space-md);margin-bottom:var(--space-base);">
                <div style="width:32px;height:32px;background:rgba(255,193,7,0.2);border-radius:var(--radius-sm);display:flex;align-items:center;justify-content:center;font-size:0.75rem;font-weight:700;color:var(--primary);flex-shrink:0;">5</div>
                <span style="color:rgba(255,255,255,0.8);font-size:0.9375rem;">Equity Research & Excel</span>
              </div>
              <div style="display:flex;align-items:center;gap:var(--space-md);">
                <div style="width:32px;height:32px;background:var(--primary);border-radius:var(--radius-sm);display:flex;align-items:center;justify-content:center;font-size:0.75rem;font-weight:700;color:var(--black);flex-shrink:0;"><i class="fa-solid fa-star" style="font-size:0.625rem;"></i></div>
                <span style="color:var(--primary);font-weight:600;font-size:0.9375rem;">Capstone Deal Simulation</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ======== SECTION 4 — CURRICULUM ======== -->
  <section class="section" id="curriculum">
    <div class="container">
      <div class="section-header fade-in">
        <p class="label label--gold">Curriculum</p>
        <h2 class="heading-lg">Inside the IBCP</h2>
        <p class="body-lg">Eight carefully sequenced modules that build on each other, from foundational analysis to a complete deal presentation.</p>
      </div>
      <div class="module-grid stagger-children">
        <div class="module-card">
          <div class="module-card__number">01</div>
          <h3 class="module-card__title">Financial Accounting & Statement Analysis</h3>
          <p class="module-card__text">Read and interpret the three core financial statements like an analyst.</p>
        </div>
        <div class="module-card">
          <div class="module-card__number">02</div>
          <h3 class="module-card__title">Financial Modelling</h3>
          <p class="module-card__text">Build integrated three-statement models from scratch in Excel.</p>
        </div>
        <div class="module-card">
          <div class="module-card__number">03</div>
          <h3 class="module-card__title">Valuation Techniques</h3>
          <p class="module-card__text">Master the core valuation methodologies.</p>
          <ul class="module-card__topics">
            <li>DCF</li>
            <li>Comparable Companies</li>
            <li>Precedent Transaction Analysis</li>
          </ul>
        </div>
        <div class="module-card">
          <div class="module-card__number">04</div>
          <h3 class="module-card__title">Mergers & Acquisitions</h3>
          <p class="module-card__text">Understand the mechanics of M&A deals.</p>
          <ul class="module-card__topics">
            <li>Deal Structuring</li>
            <li>Accretion & Dilution</li>
            <li>Synergy Analysis</li>
          </ul>
        </div>
        <div class="module-card">
          <div class="module-card__number">05</div>
          <h3 class="module-card__title">Leveraged Buyouts</h3>
          <p class="module-card__text">Build LBO models and evaluate private equity return scenarios.</p>
        </div>
        <div class="module-card">
          <div class="module-card__number">06</div>
          <h3 class="module-card__title">Equity Research & Pitch Books</h3>
          <p class="module-card__text">Turn analysis into professional deliverables.</p>
          <ul class="module-card__topics">
            <li>Client-Ready Research Notes</li>
            <li>Professional Pitch Decks</li>
          </ul>
        </div>
        <div class="module-card">
          <div class="module-card__number">07</div>
          <h3 class="module-card__title">Advanced Excel & VBA</h3>
          <p class="module-card__text">Build the technical efficiency demanded in professional finance.</p>
          <ul class="module-card__topics">
            <li>Speed & Shortcuts</li>
            <li>Formatting Standards</li>
            <li>Automation with VBA</li>
          </ul>
        </div>
        <div class="module-card">
          <div class="module-card__number">08</div>
          <h3 class="module-card__title">Capstone Deal Simulation</h3>
          <p class="module-card__text">Present a complete deal, from investment thesis and analysis to valuation, to a faculty panel.</p>
          <ul class="module-card__topics">
            <li>Investment Thesis</li>
            <li>Full Analysis & Valuation</li>
            <li>Faculty Panel Presentation</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ======== SECTION 5 — BEYOND THE CORE ======== -->
  <section class="section section--tint" id="beyond">
    <div class="container">
      <div class="section-header fade-in">
        <p class="label label--gold">Additional Learning</p>
        <h2 class="heading-lg">Beyond the Core Curriculum</h2>
        <p class="body-lg">The IBCP extends beyond the eight core modules with additional workshops and learning experiences, refreshed every cohort.</p>
      </div>
      <div class="extras-grid fade-in">
        <div class="extras-tag"><i class="fa-solid fa-clipboard-check"></i> Interview Preparation</div>
        <div class="extras-tag"><i class="fa-solid fa-magnifying-glass-chart"></i> Sector Deep-Dives</div>
        <div class="extras-tag"><i class="fa-solid fa-microphone"></i> Guest Banker Sessions</div>
        <div class="extras-tag"><i class="fa-solid fa-chalkboard-user"></i> Additional Workshops</div>
        <div class="extras-tag"><i class="fa-solid fa-rotate"></i> Electives Refreshed Every Cohort</div>
      </div>
    </div>
  </section>

  <!-- ======== SECTION 6 — WHO SHOULD JOIN ======== -->
  <section class="section" id="who-should-join">
    <div class="container">
      <div class="section-header fade-in">
        <p class="label label--gold">Who It's For</p>
        <h2 class="heading-lg">Built for Every Stage of the Journey</h2>
        <p class="body-lg">Whether you're starting out, transitioning, or adding skills, the IBCP is designed for you.</p>
      </div>
      <div class="grid grid-3 stagger-children">
        <div class="audience-card">
          <div class="audience-card__icon"><i class="fa-solid fa-graduation-cap"></i></div>
          <h3 class="audience-card__title">Students & Graduates</h3>
          <p class="audience-card__text">Students and graduates aiming for a career in banking, looking to build the skills that employers actually value.</p>
          <ul class="audience-card__list">
            <li>Commerce</li>
            <li>Economics</li>
            <li>Finance</li>
            <li>Engineering</li>
          </ul>
        </div>
        <div class="audience-card">
          <div class="audience-card__icon"><i class="fa-solid fa-briefcase"></i></div>
          <h3 class="audience-card__title">Working Professionals</h3>
          <p class="audience-card__text">Professionals looking to transition into high-impact finance roles where modelling and deal skills are essential.</p>
          <ul class="audience-card__list">
            <li>Investment Banking</li>
            <li>Equity Research</li>
            <li>Corporate Finance</li>
          </ul>
        </div>
        <div class="audience-card">
          <div class="audience-card__icon"><i class="fa-solid fa-building-columns"></i></div>
          <h3 class="audience-card__title">CA / CFA / MBA Aspirants</h3>
          <p class="audience-card__text">Individuals seeking practical modelling and valuation skills alongside their professional credentials. The IBCP complements theoretical qualifications with hands-on deal experience.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ======== SECTION 7 — PROGRAM FORMAT ======== -->
  <section class="section section--sm" id="format">
    <div class="container fade-in">
      <div class="format-strip">
        <div class="format-strip__item">
          <div class="format-strip__label">Format</div>
          <div class="format-strip__value">Live + Recorded</div>
        </div>
        <div class="format-strip__item">
          <div class="format-strip__label">Level</div>
          <div class="format-strip__value">Beginner → Advanced</div>
        </div>
        <div class="format-strip__item">
          <div class="format-strip__label">Certification</div>
          <div class="format-strip__value">IBCP, TIBS</div>
        </div>
        <div class="format-strip__item">
          <div class="format-strip__label">Cohort Size</div>
          <div class="format-strip__value">Small Batches</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ======== SECTION 8 — FINAL CTA ======== -->
  <section class="cta-band" id="ibcp-cta">
    <div class="cta-band__inner container">
      <div class="fade-in">
        <p class="label label--gold mb-lg">Apply Now</p>
        <h2 class="heading-lg cta-band__title">Reserve Your Place in the Next Cohort</h2>
        <p class="cta-band__text">Seats for the next cohort are limited. Take the first step towards a career in investment banking.</p>
        <a href="<?= $b ?>/contact" class="btn btn-primary btn-lg">Enquire Now <i class="fa-solid fa-arrow-right"></i></a>
        <div class="cta-band__contact">
          <div class="cta-band__contact-item">
            <i class="fa-solid fa-phone"></i>
            <a href="tel:+917511193707">+91 75111 93707</a>
          </div>
          <div class="cta-band__contact-item">
            <i class="fa-solid fa-envelope"></i>
            <a href="mailto:info@theinvestmentbankingschool.com">info@theinvestmentbankingschool.com</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include 'footer.php'; ?>

  <script src="<?= $b ?>/script.js"></script>
</body>
</html>
