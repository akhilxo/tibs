<?php require_once __DIR__ . '/config.php'; $b = BASE_PATH; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TIBS | The Investment Banking School | Where Bankers Are Made</title>
  <meta name="description" content="TIBS equips finance aspirants with practical, deal-tested skills that real banking floors demand. Explore the Investment Banking Certificate Program (IBCP).">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <link rel="stylesheet" href="<?= $b ?>/styles.css">
</head>
<body>

  <?php $page = 'home'; include 'header.php'; ?>

  <!-- ======== SECTION 1 — HERO ======== -->
  <section class="hero" id="hero">
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
        <p class="label label--gold">The Investment Banking School</p>
        <h1 class="display-lg hero__title">Where Bankers<br>Are <span class="text-gold">Made.</span></h1>
        <p class="hero__subtitle">TIBS equips finance aspirants with practical, deal-tested skills that real banking floors demand, with placement assistance.</p>
        <div class="hero__actions">
          <a href="<?= $b ?>/ibcp" class="btn btn-primary btn-lg">Explore the IBCP <i class="fa-solid fa-arrow-right"></i></a>
          <a href="<?= $b ?>/contact" class="btn btn-secondary--light btn-lg">Enquire Now</a>
        </div>
      </div>
    </div>
  </section>

  <!-- ======== SECTION 2 — PROGRAM HIGHLIGHTS ======== -->
  <section class="section" id="highlights">
    <div class="container">
      <div class="section-header fade-in">
        <p class="label label--gold">Program Highlights</p>
        <h2 class="heading-lg">The IBCP at a Glance</h2>
      </div>
      <div class="grid grid-5 stagger-children">
        <div class="highlight-card">
          <div class="highlight-card__icon"><i class="fa-solid fa-layer-group"></i></div>
          <div class="highlight-card__title">8 Core Modules</div>
          <div class="highlight-card__text">Comprehensive curriculum</div>
        </div>
        <div class="highlight-card">
          <div class="highlight-card__icon"><i class="fa-solid fa-video"></i></div>
          <div class="highlight-card__title">Live + Recorded</div>
          <div class="highlight-card__text">Flexible class format</div>
        </div>
        <div class="highlight-card">
          <div class="highlight-card__icon"><i class="fa-solid fa-users"></i></div>
          <div class="highlight-card__title">Small Batch Cohorts</div>
          <div class="highlight-card__text">Focused learning</div>
        </div>
        <div class="highlight-card">
          <div class="highlight-card__icon"><i class="fa-solid fa-briefcase"></i></div>
          <div class="highlight-card__title">Capstone Deal Project</div>
          <div class="highlight-card__text">Real-deal simulation</div>
        </div>
        <div class="highlight-card">
          <div class="highlight-card__icon"><i class="fa-solid fa-certificate"></i></div>
          <div class="highlight-card__title">IBCP Certification</div>
          <div class="highlight-card__text">Recognized credential</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ======== SECTION 3 — ABOUT TIBS PREVIEW ======== -->
  <section class="section section--tint" id="about-preview">
    <div class="container">
      <div class="about-content">
        <div class="about-content__text fade-in-left">
          <p class="label label--gold">About TIBS</p>
          <h2 class="heading-lg">Built by Bankers,<br>for Future Bankers</h2>
          <hr class="gold-rule">
          <p class="body-lg">TIBS was created to bridge the gap between classroom finance and the practical skills required in real investment banking environments.</p>
          <ul class="about-content__highlight-list">
            <li><i class="fa-solid fa-check"></i> Financial Modelling</li>
            <li><i class="fa-solid fa-check"></i> Valuation</li>
            <li><i class="fa-solid fa-check"></i> Diligence</li>
            <li><i class="fa-solid fa-check"></i> Deal Analysis</li>
            <li><i class="fa-solid fa-check"></i> Deal Pitching</li>
          </ul>
          <a href="<?= $b ?>/about" class="btn btn-secondary">About TIBS <i class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="about-content__visual fade-in-right">
          <div class="about-content__visual-card">
            <div class="about-content__visual-stat">
              <div class="stat-number" data-count="8">8</div>
              <div class="stat-label">Core Modules</div>
            </div>
            <div class="about-content__visual-stat">
              <div class="stat-number">IBCP</div>
              <div class="stat-label">Certification</div>
            </div>
            <div class="about-content__visual-stat">
              <div class="stat-number" style="font-size:1.5rem;">Deal-Tested</div>
              <div class="stat-label">Practical Skills</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ======== SECTION 4 — WHY TIBS ======== -->
  <section class="section" id="why-tibs">
    <div class="container">
      <div class="section-header fade-in">
        <p class="label label--gold">Why TIBS</p>
        <h2 class="heading-lg">A Program Built Around Outcomes</h2>
        <p class="body-lg">Every element of the IBCP is designed to prepare you for a career in investment banking.</p>
      </div>
      <div class="grid grid-3 stagger-children">
        <div class="card">
          <div class="card__icon"><i class="fa-solid fa-user-tie"></i></div>
          <h3 class="card__title">Practitioner Faculty</h3>
          <p class="card__text">Learn from professionals with real M&A, equity research and corporate finance experience.</p>
        </div>
        <div class="card">
          <div class="card__icon"><i class="fa-solid fa-chart-line"></i></div>
          <h3 class="card__title">Deal-Based Learning</h3>
          <p class="card__text">Build models and valuations around real-company case studies rather than generic templates.</p>
        </div>
        <div class="card">
          <div class="card__icon"><i class="fa-solid fa-award"></i></div>
          <h3 class="card__title">Recognized Certification</h3>
          <p class="card__text">Graduate with the IBCP credential and a portfolio-ready capstone deal deck.</p>
        </div>
        <div class="card">
          <div class="card__icon"><i class="fa-solid fa-compass"></i></div>
          <h3 class="card__title">Career Mentorship</h3>
          <p class="card__text">Receive guidance for resumes, interviews and placement into finance roles.</p>
        </div>
        <div class="card">
          <div class="card__icon"><i class="fa-solid fa-user-group"></i></div>
          <h3 class="card__title">Small Batch Sizes</h3>
          <p class="card__text">Focused cohorts that keep the learning experience personal.</p>
        </div>
        <div class="card">
          <div class="card__icon"><i class="fa-solid fa-laptop"></i></div>
          <h3 class="card__title">Flexible Format</h3>
          <p class="card__text">Live instructor-led sessions with recordings available to support the cohort.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ======== SECTION 5 — FEATURED PROGRAM ======== -->
  <section class="section section--tint" id="featured-program">
    <div class="container">
      <div class="featured-program">
        <div class="featured-program__content fade-in-left">
          <p class="label label--gold">Featured Program</p>
          <h2 class="heading-lg">Investment Banking<br>Certificate Program</h2>
          <hr class="gold-rule">
          <p class="body-lg">A comprehensive, practitioner-led certificate program designed to take learners from financial statements to a fully built valuation and deal pitch.</p>
          <div class="mt-xl">
            <a href="<?= $b ?>/ibcp" class="btn btn-primary">Explore the Program <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
        <div class="featured-program__visual fade-in-right">
          <div class="featured-program__attr">
            <div class="featured-program__attr-icon"><i class="fa-solid fa-video"></i></div>
            <div>
              <div class="featured-program__attr-label">Format</div>
              <div class="featured-program__attr-value">Live + Recorded</div>
            </div>
          </div>
          <div class="featured-program__attr">
            <div class="featured-program__attr-icon"><i class="fa-solid fa-signal"></i></div>
            <div>
              <div class="featured-program__attr-label">Level</div>
              <div class="featured-program__attr-value">Beginner → Advanced</div>
            </div>
          </div>
          <div class="featured-program__attr">
            <div class="featured-program__attr-icon"><i class="fa-solid fa-certificate"></i></div>
            <div>
              <div class="featured-program__attr-label">Certification</div>
              <div class="featured-program__attr-value">IBCP, TIBS</div>
            </div>
          </div>
          <div class="featured-program__attr">
            <div class="featured-program__attr-icon"><i class="fa-solid fa-users"></i></div>
            <div>
              <div class="featured-program__attr-label">Cohort Size</div>
              <div class="featured-program__attr-value">Small Batches</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ======== SECTION 6 — WHO SHOULD JOIN ======== -->
  <section class="section" id="who-should-join">
    <div class="container">
      <div class="section-header fade-in">
        <p class="label label--gold">Who It's For</p>
        <h2 class="heading-lg">Built for Every Stage of the Journey</h2>
      </div>
      <div class="grid grid-3 stagger-children">
        <div class="audience-card">
          <div class="audience-card__icon"><i class="fa-solid fa-graduation-cap"></i></div>
          <h3 class="audience-card__title">Students & Graduates</h3>
          <p class="audience-card__text">Students and graduates aiming for a career in banking.</p>
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
          <p class="audience-card__text">Professionals looking to transition into high-impact finance roles.</p>
          <ul class="audience-card__list">
            <li>Investment Banking</li>
            <li>Equity Research</li>
            <li>Corporate Finance</li>
          </ul>
        </div>
        <div class="audience-card">
          <div class="audience-card__icon"><i class="fa-solid fa-building-columns"></i></div>
          <h3 class="audience-card__title">CA / CFA / MBA Aspirants</h3>
          <p class="audience-card__text">Individuals seeking practical modelling and valuation skills alongside their professional credentials.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ======== SECTION 7 — CURRICULUM OVERVIEW ======== -->
  <section class="section section--tint" id="curriculum">
    <div class="container">
      <div class="section-header fade-in">
        <p class="label label--gold">Curriculum</p>
        <h2 class="heading-lg">Inside the IBCP</h2>
        <p class="body-lg">Eight carefully sequenced modules that take you from foundational analysis to a complete deal presentation.</p>
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
          <p class="module-card__text">Learn DCF, Comparable Companies, and Precedent Transaction Analysis.</p>
        </div>
        <div class="module-card">
          <div class="module-card__number">04</div>
          <h3 class="module-card__title">Mergers & Acquisitions</h3>
          <p class="module-card__text">Explore deal structuring, accretion and dilution, and synergy analysis.</p>
        </div>
        <div class="module-card">
          <div class="module-card__number">05</div>
          <h3 class="module-card__title">Leveraged Buyouts</h3>
          <p class="module-card__text">Build LBO models and evaluate private equity return scenarios.</p>
        </div>
        <div class="module-card">
          <div class="module-card__number">06</div>
          <h3 class="module-card__title">Equity Research & Pitch Books</h3>
          <p class="module-card__text">Turn analysis into client-ready research notes and professional pitch decks.</p>
        </div>
        <div class="module-card">
          <div class="module-card__number">07</div>
          <h3 class="module-card__title">Advanced Excel & VBA</h3>
          <p class="module-card__text">Develop speed, formatting and automation skills used in professional finance environments.</p>
        </div>
        <div class="module-card">
          <div class="module-card__number">08</div>
          <h3 class="module-card__title">Capstone Deal Simulation</h3>
          <p class="module-card__text">Present a complete deal, from investment thesis and analysis to valuation, to a faculty panel.</p>
        </div>
      </div>
      <div class="text-center mt-2xl fade-in">
        <a href="<?= $b ?>/ibcp" class="btn btn-primary">View the Complete Program <i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div>
  </section>

  <!-- ======== SECTION 8 — BEYOND THE CORE ======== -->
  <section class="section" id="beyond">
    <div class="container">
      <div class="section-header fade-in">
        <p class="label label--gold">Beyond the Core Modules</p>
        <h2 class="heading-lg">Learning That Goes Further</h2>
        <p class="body-lg">The IBCP extends beyond the eight core modules with additional learning experiences.</p>
      </div>
      <div class="extras-grid fade-in">
        <div class="extras-tag"><i class="fa-solid fa-clipboard-check"></i> Interview Preparation</div>
        <div class="extras-tag"><i class="fa-solid fa-magnifying-glass-chart"></i> Sector Deep-Dives</div>
        <div class="extras-tag"><i class="fa-solid fa-landmark"></i> Tier 1 Banks</div>
        <div class="extras-tag"><i class="fa-solid fa-chart-pie"></i> Hedge Funds</div>
        <div class="extras-tag"><i class="fa-solid fa-industry"></i> Industrials</div>
        <div class="extras-tag"><i class="fa-solid fa-microphone"></i> Guest Banker Sessions</div>
        <div class="extras-tag"><i class="fa-solid fa-rotate"></i> Electives Refreshed Every Cohort</div>
      </div>
    </div>
  </section>

  <!-- ======== SECTION 9 — FINAL CTA ======== -->
  <section class="cta-band" id="cta">
    <div class="cta-band__inner container">
      <div class="fade-in">
        <p class="label label--gold mb-lg">Limited Seats</p>
        <h2 class="heading-lg cta-band__title">Seats for the Next Cohort Are Limited</h2>
        <p class="cta-band__text">Take the first step towards a career in investment banking. Enquire about the next Investment Banking Certificate Program batch.</p>
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
