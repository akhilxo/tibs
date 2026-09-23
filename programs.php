<?php
require_once __DIR__ . '/config.php';
$page = 'programs';
$pageTitle = 'Programs | Investment Banking Course in Kochi | TIBS';
$pageDescription = 'Explore practitioner-led investment banking certification courses in Kochi, Kerala at TIBS. Hands-on financial modeling, valuation, and placement assistance.';
$ogTitle = 'Investment Banking Programs in Kochi, Kerala | TIBS';
$ogDescription = 'Explore industry-led investment banking training courses in Kochi, Kerala with 100% placement support at TIBS.';
$ogImageAlt = 'Investment banking course programs in Kochi Kerala - TIBS logo';
include 'header.php';
?>

  <!-- ======== HERO ======== -->
  <section class="hero hero--page" id="programs-hero">
    <div class="hero__grid-pattern"></div>
    <div class="hero__decoration">
      <div class="hero__shape hero__shape--1"></div>
      <div class="hero__shape hero__shape--2"></div>
      <div class="hero__shape hero__shape--3"></div>
    </div>
    <div class="hero__accent-bar"></div>
    <div class="container">
      <div class="hero__content">
        <p class="label label--gold">TIBS Programs</p>
        <h1 class="display-md hero__title">Programs Built for <span class="text-gold">Real Banking Careers</span></h1>
        <p class="hero__subtitle">Practitioner-led investment banking courses, designed to equip you with the practical, deal-tested skills that top banking floors and corporate finance roles demand.</p>
      </div>
    </div>
  </section>

  <!-- ======== PROGRAMS LISTING ======== -->
  <section class="section" id="programs-list">
    <div class="container">
      <div class="section-header fade-in">
        <p class="label label--gold">Our Programs</p>
        <h2 class="heading-lg">Explore What We Offer</h2>
        <p class="body-lg">Each program is built around outcomes, guided by practitioners, and focused on career readiness.</p>
      </div>

      <!-- IBCP Flagship Program Card (3 Months Regular) -->
      <div class="program-listing-card fade-in mb-2xl">
        <div class="program-listing-card__badge">Flagship Course</div>
        <div class="program-listing-card__inner">
          <div class="program-listing-card__content">
            <div class="program-listing-card__tags">
              <span class="program-listing-card__tag program-listing-card__tag--primary"><i class="fa-solid fa-clock"></i> 3 Months Duration</span>
              <span class="program-listing-card__tag"><i class="fa-solid fa-calendar-days"></i> Regular Weekday Batch</span>
            </div>
            <h3 class="program-listing-card__title">Investment Banking Certificate Program (IBCP)</h3>
            <p class="program-listing-card__acronym">Flagship Regular Course • 3 Months</p>
            <p class="program-listing-card__text">An intensive 3-month regular program taking learners from financial statement analysis to a fully built valuation model and deal pitch. Covers financial modeling, valuation, M&A, leveraged buyouts, equity research, and a capstone deal simulation designed for fast-track career readiness.</p>
            <div class="program-listing-card__highlights">
              <div class="program-listing-card__highlight">
                <i class="fa-solid fa-clock"></i>
                <span>3 Months Duration</span>
              </div>
              <div class="program-listing-card__highlight">
                <i class="fa-solid fa-calendar-check"></i>
                <span>Regular Batch (Weekdays)</span>
              </div>
              <div class="program-listing-card__highlight">
                <i class="fa-solid fa-layer-group"></i>
                <span>8 Core Modules</span>
              </div>
              <div class="program-listing-card__highlight">
                <i class="fa-solid fa-video"></i>
                <span>Live + Recorded</span>
              </div>
              <div class="program-listing-card__highlight">
                <i class="fa-solid fa-users"></i>
                <span>Small Batches</span>
              </div>
              <div class="program-listing-card__highlight">
                <i class="fa-solid fa-certificate"></i>
                <span>IBCP Certification</span>
              </div>
              <div class="program-listing-card__highlight">
                <i class="fa-solid fa-briefcase"></i>
                <span>Capstone Project</span>
              </div>
            </div>
            <div class="program-listing-card__actions">
              <a href="<?= $b ?>/ibcp" class="btn btn-primary">View Program Details <i class="fa-solid fa-arrow-right"></i></a>
              <a href="<?= $b ?>/contact" class="btn btn-secondary">Enquire Now</a>
            </div>
          </div>
          <div class="program-listing-card__sidebar">
            <div class="program-listing-card__attr">
              <div class="program-listing-card__attr-label">Duration</div>
              <div class="program-listing-card__attr-value">3 Months</div>
            </div>
            <div class="program-listing-card__attr">
              <div class="program-listing-card__attr-label">Schedule / Mode</div>
              <div class="program-listing-card__attr-value">Regular Batch</div>
            </div>
            <div class="program-listing-card__attr">
              <div class="program-listing-card__attr-label">Format</div>
              <div class="program-listing-card__attr-value">Live + Recorded</div>
            </div>
            <div class="program-listing-card__attr">
              <div class="program-listing-card__attr-label">Level</div>
              <div class="program-listing-card__attr-value">Beginner → Advanced</div>
            </div>
            <div class="program-listing-card__attr">
              <div class="program-listing-card__attr-label">Certification</div>
              <div class="program-listing-card__attr-value">IBCP, TIBS</div>
            </div>
            <div class="program-listing-card__attr">
              <div class="program-listing-card__attr-label">Cohort Size</div>
              <div class="program-listing-card__attr-value">Small Batches</div>
            </div>
          </div>
        </div>
      </div>

      <!-- IBCP Weekend Program Card (6 Months Weekend) -->
      <div class="program-listing-card fade-in mb-2xl">
        <div class="program-listing-card__badge program-listing-card__badge--secondary">Weekend Course</div>
        <div class="program-listing-card__inner">
          <div class="program-listing-card__content">
            <div class="program-listing-card__tags">
              <span class="program-listing-card__tag program-listing-card__tag--primary"><i class="fa-solid fa-clock"></i> 6 Months Duration</span>
              <span class="program-listing-card__tag"><i class="fa-solid fa-calendar-week"></i> Weekend Batch (Sat &amp; Sun)</span>
            </div>
            <h3 class="program-listing-card__title">Investment Banking Certificate Program (Weekend)</h3>
            <p class="program-listing-card__acronym">Weekend Batch • 6 Months</p>
            <p class="program-listing-card__text">Specially tailored for working professionals, college graduates, and competitive exam aspirants. Spread comfortably across 6 months of weekend live sessions with extensive practical assignments, 1-on-1 mentorship, financial modeling case studies, and full capstone project guidance.</p>
            <div class="program-listing-card__highlights">
              <div class="program-listing-card__highlight">
                <i class="fa-solid fa-clock"></i>
                <span>6 Months Duration</span>
              </div>
              <div class="program-listing-card__highlight">
                <i class="fa-solid fa-calendar-week"></i>
                <span>Weekend Batch (Sat &amp; Sun)</span>
              </div>
              <div class="program-listing-card__highlight">
                <i class="fa-solid fa-layer-group"></i>
                <span>8 Core Modules</span>
              </div>
              <div class="program-listing-card__highlight">
                <i class="fa-solid fa-video"></i>
                <span>Live + Recorded</span>
              </div>
              <div class="program-listing-card__highlight">
                <i class="fa-solid fa-briefcase"></i>
                <span>Working Professional Friendly</span>
              </div>
              <div class="program-listing-card__highlight">
                <i class="fa-solid fa-certificate"></i>
                <span>IBCP Certification</span>
              </div>
              <div class="program-listing-card__highlight">
                <i class="fa-solid fa-diagram-project"></i>
                <span>Capstone Deal Deck</span>
              </div>
            </div>
            <div class="program-listing-card__actions">
              <a href="<?= $b ?>/ibcp" class="btn btn-primary">View Program Curriculum <i class="fa-solid fa-arrow-right"></i></a>
              <a href="<?= $b ?>/contact" class="btn btn-secondary">Enquire for Weekend Batch</a>
            </div>
          </div>
          <div class="program-listing-card__sidebar">
            <div class="program-listing-card__attr">
              <div class="program-listing-card__attr-label">Duration</div>
              <div class="program-listing-card__attr-value">6 Months</div>
            </div>
            <div class="program-listing-card__attr">
              <div class="program-listing-card__attr-label">Schedule / Mode</div>
              <div class="program-listing-card__attr-value">Weekend Batch</div>
            </div>
            <div class="program-listing-card__attr">
              <div class="program-listing-card__attr-label">Format</div>
              <div class="program-listing-card__attr-value">Live + Recorded</div>
            </div>
            <div class="program-listing-card__attr">
              <div class="program-listing-card__attr-label">Ideal For</div>
              <div class="program-listing-card__attr-value">Working Professionals &amp; Students</div>
            </div>
            <div class="program-listing-card__attr">
              <div class="program-listing-card__attr-label">Certification</div>
              <div class="program-listing-card__attr-value">IBCP, TIBS</div>
            </div>
            <div class="program-listing-card__attr">
              <div class="program-listing-card__attr-label">Cohort Size</div>
              <div class="program-listing-card__attr-value">Small Batches</div>
            </div>
          </div>
        </div>
      </div>

      <!-- More Programs Coming Soon -->
      <div class="programs-coming-soon fade-in">
        <div class="programs-coming-soon__inner">
          <i class="fa-solid fa-plus programs-coming-soon__icon"></i>
          <h3 class="programs-coming-soon__title">More Specialized Programs Coming Soon</h3>
          <p class="programs-coming-soon__text">Advanced electives and executive workshops are being developed by the TIBS team. Enquire to stay updated on upcoming cohorts and tracks.</p>
          <a href="<?= $b ?>/contact" class="btn btn-ghost">Get Notified <i class="fa-solid fa-arrow-right" style="font-size:0.75rem;"></i></a>
        </div>
      </div>
    </div>
  </section>

  <!-- ======== CTA ======== -->
  <section class="cta-band" id="programs-cta">
    <div class="cta-band__inner container">
      <div class="fade-in">
        <p class="label label--gold mb-lg">Get Started</p>
        <h2 class="heading-lg cta-band__title">Ready to Begin Your Journey?</h2>
        <p class="cta-band__text">Explore our flagship program or reach out to learn more about upcoming offerings from TIBS.</p>
        <div class="flex justify-center gap-base flex-wrap">
          <a href="<?= $b ?>/ibcp" class="btn btn-primary btn-lg">Explore the IBCP <i class="fa-solid fa-arrow-right"></i></a>
          <a href="<?= $b ?>/contact" class="btn btn-secondary--light btn-lg">Enquire Now</a>
        </div>
      </div>
    </div>
  </section>

  <?php include 'footer.php'; ?>

  <script src="<?= $b ?>/script.js"></script>
</body>
</html>
