<?php require_once __DIR__ . '/config.php'; $b = BASE_PATH; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About TIBS | The Investment Banking School</title>
  <meta name="description" content="TIBS was built by bankers, for future bankers. Learn about our mission to bridge the gap between classroom finance and real investment banking.">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <link rel="stylesheet" href="<?= $b ?>/styles.css">
</head>
<body>

  <?php $page = 'about'; include 'header.php'; ?>

  <!-- ======== SECTION 1 — HERO ======== -->
  <section class="hero hero--page" id="about-hero">
    <div class="hero__grid-pattern"></div>
    <div class="hero__decoration">
      <div class="hero__shape hero__shape--1"></div>
      <div class="hero__shape hero__shape--2"></div>
      <div class="hero__shape hero__shape--3"></div>
    </div>
    <div class="hero__accent-bar"></div>
    <div class="container">
      <div class="hero__content">
        <p class="label label--gold">About TIBS</p>
        <h1 class="display-md hero__title">Built by Bankers,<br>for <span class="text-gold">Future Bankers</span></h1>
        <p class="hero__subtitle">The Investment Banking School was created with one mission: to bridge the gap between classroom finance education and the practical skills that real banking floors demand.</p>
      </div>
    </div>
  </section>

  <!-- ======== SECTION 2 — WHY TIBS WAS CREATED ======== -->
  <section class="section" id="why-created">
    <div class="container">
      <div class="about-content">
        <div class="about-content__text fade-in-left">
          <p class="label label--gold">The Gap</p>
          <h2 class="heading-lg">Why TIBS Was Created</h2>
          <hr class="gold-rule">
          <p class="body-lg">There is a significant gap between what traditional finance education teaches and what investment banking professionals actually need on the job.</p>
          <p class="body-md mt-base">Most finance programs cover theory, but rarely teach you to build a three-statement model, run a DCF, structure an M&A deal, or present a pitch book to a client.</p>
          <p class="body-md mt-base">TIBS was created to close that gap. Every module, every case study, and every assessment in the IBCP is designed around practical, deal-tested skills used in professional banking environments.</p>
        </div>
        <div class="about-content__visual fade-in-right">
          <div class="about-content__visual-card">
            <div style="position:relative;z-index:1;">
              <p class="label label--gold mb-lg">The Difference</p>
              <div style="display:flex;align-items:flex-start;gap:var(--space-base);margin-bottom:var(--space-xl);">
                <div style="width:40px;height:40px;background:rgba(255,193,7,0.12);border-radius:var(--radius-sm);display:flex;align-items:center;justify-content:center;flex-shrink:0;"><i class="fa-solid fa-xmark" style="color:rgba(255,255,255,0.4);"></i></div>
                <div>
                  <div style="font-weight:600;color:var(--white);margin-bottom:4px;">Classroom Finance</div>
                  <div style="font-size:0.875rem;color:rgba(255,255,255,0.5);">Theory-heavy, textbook-driven, limited practical application</div>
                </div>
              </div>
              <div style="display:flex;align-items:flex-start;gap:var(--space-base);">
                <div style="width:40px;height:40px;background:var(--primary);border-radius:var(--radius-sm);display:flex;align-items:center;justify-content:center;flex-shrink:0;"><i class="fa-solid fa-check" style="color:var(--black);"></i></div>
                <div>
                  <div style="font-weight:600;color:var(--white);margin-bottom:4px;">TIBS: The IBCP</div>
                  <div style="font-size:0.875rem;color:rgba(255,255,255,0.5);">Deal-tested skills, real-company case studies, practitioner-led sessions</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ======== SECTION 3 — LEARNING PHILOSOPHY ======== -->
  <section class="section section--tint" id="philosophy">
    <div class="container">
      <div class="section-header fade-in">
        <p class="label label--gold">Our Approach</p>
        <h2 class="heading-lg">The TIBS Learning Philosophy</h2>
        <p class="body-lg">A learning experience built around practical skills, guided by professionals who have worked on real deals.</p>
      </div>
      <div class="grid grid-3 stagger-children">
        <div class="card">
          <div class="card__icon"><i class="fa-solid fa-user-tie"></i></div>
          <h3 class="card__title">Practitioner-Led</h3>
          <p class="card__text">Learn from professionals with relevant M&A, equity research and corporate finance experience. Not just academics, but practitioners who have worked on real transactions.</p>
        </div>
        <div class="card">
          <div class="card__icon"><i class="fa-solid fa-chart-line"></i></div>
          <h3 class="card__title">Practical Learning</h3>
          <p class="card__text">Focus on real-company case studies, financial models and valuation work. Every assignment is grounded in real-world scenarios, not textbook exercises.</p>
        </div>
        <div class="card">
          <div class="card__icon"><i class="fa-solid fa-bullseye"></i></div>
          <h3 class="card__title">Career-Focused</h3>
          <p class="card__text">Develop practical skills alongside career mentorship and interview preparation. The IBCP is designed to make you employable in investment banking and corporate finance roles.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ======== SECTION 4 — THE TIBS DIFFERENCE ======== -->
  <section class="section" id="difference">
    <div class="container">
      <div class="section-header fade-in">
        <p class="label label--gold">What Sets Us Apart</p>
        <h2 class="heading-lg">The TIBS Difference</h2>
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
          <p class="card__text">Focused cohorts that keep the learning experience personal and interactive.</p>
        </div>
        <div class="card">
          <div class="card__icon"><i class="fa-solid fa-laptop"></i></div>
          <h3 class="card__title">Flexible Format</h3>
          <p class="card__text">Live instructor-led sessions with recordings available to support the cohort.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ======== SECTION 5 — CTA ======== -->
  <section class="cta-band" id="about-cta">
    <div class="cta-band__inner container">
      <div class="fade-in">
        <p class="label label--gold mb-lg">Get Started</p>
        <h2 class="heading-lg cta-band__title">Explore the Investment Banking Certificate Program</h2>
        <p class="cta-band__text">Discover the complete IBCP curriculum, program format, and how it can prepare you for a career in investment banking.</p>
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
