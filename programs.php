<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Programs | TIBS | The Investment Banking School</title>
  <meta name="description" content="Explore programs offered by The Investment Banking School (TIBS). Practitioner-led certificate programs designed for careers in investment banking and corporate finance.">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <link rel="stylesheet" href="styles.css">
</head>
<body>

  <?php $page = 'programs'; include 'header.php'; ?>

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
        <p class="hero__subtitle">Practitioner-led certificate programs designed to equip you with the practical, deal-tested skills that investment banking and corporate finance roles demand.</p>
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

      <!-- IBCP Program Card -->
      <div class="program-listing-card fade-in">
        <div class="program-listing-card__badge">Flagship Program</div>
        <div class="program-listing-card__inner">
          <div class="program-listing-card__content">
            <p class="label label--gold">Certificate Program</p>
            <h3 class="program-listing-card__title">Investment Banking Certificate Program</h3>
            <p class="program-listing-card__acronym">IBCP</p>
            <p class="program-listing-card__text">A comprehensive, practitioner-led certificate program designed to take learners from financial statements to a fully built valuation and deal pitch. Covers financial modelling, valuation, M&A, leveraged buyouts, equity research, and a capstone deal simulation.</p>
            <div class="program-listing-card__highlights">
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
              <a href="/ibcp" class="btn btn-primary">View Program Details <i class="fa-solid fa-arrow-right"></i></a>
              <a href="/contact" class="btn btn-secondary">Enquire Now</a>
            </div>
          </div>
          <div class="program-listing-card__sidebar">
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

      <!-- More Programs Coming Soon -->
      <div class="programs-coming-soon fade-in">
        <div class="programs-coming-soon__inner">
          <i class="fa-solid fa-plus programs-coming-soon__icon"></i>
          <h3 class="programs-coming-soon__title">More Programs Coming Soon</h3>
          <p class="programs-coming-soon__text">New programs are being developed by the TIBS team. Enquire to stay updated on upcoming offerings.</p>
          <a href="/contact" class="btn btn-ghost">Get Notified <i class="fa-solid fa-arrow-right" style="font-size:0.75rem;"></i></a>
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
          <a href="/ibcp" class="btn btn-primary btn-lg">Explore the IBCP <i class="fa-solid fa-arrow-right"></i></a>
          <a href="/contact" class="btn btn-secondary--light btn-lg">Enquire Now</a>
        </div>
      </div>
    </div>
  </section>

  <?php include 'footer.php'; ?>

  <script src="script.js"></script>
</body>
</html>
