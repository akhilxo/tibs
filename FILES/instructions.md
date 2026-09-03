# TIBS Website — HTML Design & Development Specification

## Project Reference

Before designing or developing any page, read and follow the existing design language and UI system defined in:

`FILES/coursera.design.md`

This file is the primary reference for:

* Overall visual design language
* Layout principles
* Typography
* Spacing and sizing
* Component styling
* Card design
* Navigation
* Hero sections
* Responsive behaviour
* Button styles
* Form elements
* Section structure
* Animation and interaction patterns

Maintain the same overall design philosophy and quality defined in the reference file.

---

# Brand Colour Changes

The colour system from `FILES/coursera.design.md` must be replaced with the following TIBS colour palette.

## Primary Accent / CTA Colour

```css
rgb(255, 193, 7)
```

Use this colour primarily for:

* Primary CTA buttons
* Important action buttons
* Key highlights
* Small accent elements
* Active states where appropriate
* Important badges or indicators

## Black

Use black for:

* Primary text
* Headings
* Navigation text
* Dark sections
* Borders where appropriate

## White

Use white for:

* Main backgrounds
* Cards
* Light sections
* Text on dark backgrounds
* Button text where appropriate

### Colour Rule

The website should primarily use only:

* `rgb(255, 193, 7)`
* Black
* White

Do not introduce unnecessary additional brand colours.

Shades of black, white and neutral greys may only be used when necessary for:

* Secondary text
* Borders
* Background separation
* Hover states
* Accessibility

The overall appearance should remain premium, professional, minimal and suitable for an investment banking education institution.

---

# Icon System

Use Font Awesome Free for all icons.

Include the Font Awesome Free CDN in every HTML page:

```html
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
```

Do not use:

* Paid Font Awesome icons
* Custom SVG icon libraries
* Emoji icons as interface icons
* Other third-party icon libraries unless absolutely required

Use appropriate Font Awesome Free icons consistently throughout the website.

---

# Website Content Rule

Only create pages and sections supported by the currently available TIBS brochure content.

Do not invent:

* Faculty members
* Founder details
* Student testimonials
* Placement statistics
* Company partnerships
* Course fees
* Course duration
* Batch dates
* Office addresses
* Success stories
* Additional programs

Where information is not available in the brochure, do not fabricate content.

The current brochure establishes TIBS around one primary program:

# Investment Banking Certificate Program — IBCP

The curriculum is part of the IBCP and should not be treated as a separate program.

---

# Pages to Create

Create the following HTML pages:

1. `index.html` — Home
2. `about.html` — About TIBS
3. `ibcp.html` — Investment Banking Certificate Program
4. `contact.html` — Enquire / Contact

Do not create additional pages unless supported by future content.

---

# Shared Header & Navigation

The main navigation should remain simple and focused.

Recommended navigation:

* Home
* About TIBS
* IBCP
* Contact

Primary CTA:

**Enquire Now**

The CTA should link to the contact/enquiry section or `contact.html`.

The header should be:

* Clean
* Minimal
* Professional
* Fully responsive
* Consistent across all pages

Use the design and interaction principles from:

`FILES/coursera.design.md`

for the navigation and responsive mobile menu.

---

# PAGE 1 — HOME

File:

`index.html`

The homepage should be the primary conversion page.

## Section 1 — Hero

### Main Heading

**Where Bankers Are Made.**

### Supporting Content

TIBS equips finance aspirants with practical, deal-tested skills that real banking floors demand, with placement assistance.

### Primary CTA

**Explore the IBCP**

### Secondary CTA

**Enquire Now**

Include a visually strong but professional investment banking / finance-oriented visual treatment consistent with the reference design language.

Avoid generic education website styling.

---

## Section 2 — Program Highlights

Display the key IBCP highlights in a clean grid or horizontal layout:

* 8 Core Modules
* Live + Recorded Classes
* Small Batch Cohorts
* Capstone Deal Project
* IBCP Certification

Use suitable Font Awesome Free icons.

This section should quickly communicate the program's core value.

---

## Section 3 — About TIBS Preview

### Heading

**Built by Bankers, for Future Bankers**

Explain that TIBS was created to bridge the gap between classroom finance and the practical skills required in real investment banking environments.

Highlight the practical nature of the learning experience:

* Financial modelling
* Valuation
* Diligence
* Deal analysis
* Deal pitching

Include a CTA:

**About TIBS**

---

## Section 4 — Why TIBS

### Heading

**A Program Built Around Outcomes**

Create a grid of six feature cards.

### Features

#### Practitioner Faculty

Learn from professionals with real M&A, equity research and corporate finance experience.

#### Deal-Based Learning

Build models and valuations around real-company case studies rather than generic templates.

#### Recognized Certification

Graduate with the IBCP credential and a portfolio-ready capstone deal deck.

#### Career Mentorship

Receive guidance for resumes, interviews and placement into finance roles.

#### Small Batch Sizes

Focused cohorts that keep the learning experience personal.

#### Flexible Format

Live instructor-led sessions with recordings available to support the cohort.

Use appropriate Font Awesome Free icons.

---

## Section 5 — Featured Program

Highlight the:

# Investment Banking Certificate Program

Provide a short introduction to the complete program.

Display key program attributes:

* Format: Live + Recorded
* Level: Beginner → Advanced
* Certification: IBCP, TIBS
* Cohort Size: Small Batches

Primary CTA:

**Explore the Program**

Link to `ibcp.html`.

---

## Section 6 — Who Should Join

### Heading

**Built for Every Stage of the Journey**

Create three distinct audience cards.

### Students & Graduates

Students and graduates in:

* Commerce
* Economics
* Finance
* Engineering

who are aiming for a career in banking.

### Working Professionals

Professionals looking to transition into:

* Investment Banking
* Equity Research
* Corporate Finance

### CA / CFA / MBA Aspirants

Individuals seeking practical modelling and valuation skills alongside their professional credentials.

---

## Section 7 — Curriculum Overview

### Heading

**Inside the IBCP**

Display the eight core modules in a visually engaging sequence, timeline or numbered grid.

### Modules

1. Financial Accounting & Statement Analysis

2. Financial Modelling

3. Valuation Techniques

4. Mergers & Acquisitions

5. Leveraged Buyouts

6. Equity Research & Pitch Books

7. Advanced Excel & VBA

8. Capstone Deal Simulation

Add a CTA:

**View the Complete Program**

Link to `ibcp.html`.

---

## Section 8 — Learning Beyond the Core Modules

Highlight the additional learning experiences mentioned in the brochure:

* Interview preparation
* Sector deep-dives
* Tier 1 Banks
* Hedge funds
* Industrials
* Guest banker sessions
* Electives refreshed every cohort

Do not add unsupported details.

---

## Section 9 — Final CTA

Use a strong conversion-focused section.

### Heading

**Seats for the Next Cohort Are Limited**

Supporting text should encourage prospective students to enquire about the next Investment Banking Certificate Program batch.

Primary CTA:

**Enquire Now**

Display the available phone number and email from the brochure.

---

# PAGE 2 — ABOUT TIBS

File:

`about.html`

## Section 1 — About Hero

### Heading

**Built by Bankers, for Future Bankers**

Introduce TIBS and its purpose.

---

## Section 2 — Why TIBS Was Created

Explain the gap between:

* Classroom finance education
* Real-world banking requirements

Emphasise that TIBS focuses on practical, deal-tested skills used in professional finance environments.

---

## Section 3 — The TIBS Learning Philosophy

Create a visual section explaining the TIBS approach.

### Practitioner-Led

Learn from professionals with relevant M&A, equity research and corporate finance experience.

### Practical Learning

Focus on real-company case studies, financial models and valuation work.

### Career-Focused

Develop practical skills alongside career mentorship and interview preparation.

---

## Section 4 — The TIBS Difference

Reuse the core differentiators from the brochure in a refined layout:

* Practitioner Faculty
* Deal-Based Learning
* Recognized Certification
* Career Mentorship
* Small Batch Sizes
* Flexible Format

---

## Section 5 — CTA

Encourage visitors to explore the IBCP.

Primary CTA:

**Explore the Investment Banking Certificate Program**

---

# PAGE 3 — INVESTMENT BANKING CERTIFICATE PROGRAM

File:

`ibcp.html`

This is the most detailed and important program page.

The page should be designed as a premium, conversion-focused course landing page.

---

## Section 1 — Program Hero

### Heading

**Investment Banking Certificate Program**

Display:

**IBCP**

Supporting description:

A practitioner-led certificate program designed to take learners from financial statements to a fully built valuation and deal pitch.

Primary CTA:

**Enquire Now**

Secondary CTA:

**Explore Curriculum**

---

## Section 2 — Program at a Glance

Display:

* 8 Core Modules
* Live + Recorded Classes
* Small Batch Cohorts
* Capstone Deal Project
* IBCP Certification

Use clear visual cards or a structured information layout.

---

## Section 3 — Program Overview

Explain the complete IBCP experience.

The program takes learners through:

* Financial statements
* Financial modelling
* Valuation
* M&A
* Leveraged buyouts
* Equity research
* Advanced Excel and VBA
* A final capstone deal simulation

---

# Section 4 — Curriculum

This is a major section of the page.

### Heading

**Inside the IBCP**

Present all eight modules.

## Module 01

### Financial Accounting & Statement Analysis

Read and interpret the three core financial statements like an analyst.

---

## Module 02

### Financial Modelling

Build integrated three-statement models from scratch in Excel.

---

## Module 03

### Valuation Techniques

Learn:

* DCF
* Comparable Companies
* Precedent Transaction Analysis

---

## Module 04

### Mergers & Acquisitions

Explore:

* Deal structuring
* Accretion and dilution
* Synergy analysis

---

## Module 05

### Leveraged Buyouts

Build LBO models and evaluate private equity return scenarios.

---

## Module 06

### Equity Research & Pitch Books

Turn analysis into:

* Client-ready research notes
* Professional pitch decks

---

## Module 07

### Advanced Excel & VBA

Develop:

* Speed
* Formatting
* Automation skills

used in professional finance environments.

---

## Module 08

### Capstone Deal Simulation

Present a complete deal from:

* Investment thesis
* Analysis
* Valuation

to a faculty panel.

---

## Section 5 — Beyond the Core Curriculum

Highlight:

* Interview preparation
* Sector deep-dives
* Guest banker sessions
* Additional workshops
* Electives refreshed every cohort

---

## Section 6 — Who Should Join

Use the same three audience categories:

* Students & Graduates
* Working Professionals
* CA / CFA / MBA Aspirants

Present these in more detail while staying within the brochure information.

---

## Section 7 — Program Format

Display:

### Format

Live + Recorded

### Level

Beginner → Advanced

### Certification

IBCP, TIBS

### Cohort Size

Small Batches

---

## Section 8 — Final Conversion CTA

### Heading

**Reserve Your Place in the Next Cohort**

Supporting content:

Seats for the next cohort are limited.

Primary CTA:

**Enquire Now**

The enquiry action should link to `contact.html`.

---

# PAGE 4 — CONTACT / ENQUIRE

File:

`contact.html`

This page should be focused primarily on generating enquiries.

---

## Section 1 — Contact Hero

### Heading

**Take the Next Step Towards a Career in Investment Banking**

Supporting content should encourage prospective students to enquire about the next IBCP cohort.

---

## Section 2 — Enquiry Form

Create a professional enquiry form.

Recommended fields:

* Full Name
* Email Address
* Phone Number
* Message

Do not add unsupported questions such as course fees or specific batch selections unless required by the client later.

Include a clear:

**Submit Enquiry**

button.

---

## Section 3 — Contact Information

Use only the contact information available in the brochure.

### Phone

+91 75111 93707

### Email

[theinvestmentbankingschool@gmail.com](mailto:theinvestmentbankingschool@gmail.com)

### Website

[www.theinvestmentbankingschool.com](http://www.theinvestmentbankingschool.com)

Use Font Awesome Free icons.

---

# Footer

Create a consistent footer for all pages.

Include:

## Brand

The Investment Banking School — TIBS

## Navigation

* Home
* About TIBS
* IBCP
* Contact

## Contact

* Phone
* Email

## CTA

**Enquire Now**

Keep the footer clean and minimal.

---

# Design Principles

The website should communicate:

* Professionalism
* Finance industry credibility
* Premium education
* Practical learning
* Career-focused training

Avoid the appearance of a generic coaching-centre or tuition website.

The overall feeling should be closer to a modern professional education platform or finance institution.

Use:

* Strong typography
* Generous whitespace
* Clear content hierarchy
* Minimal but purposeful visual elements
* Clean card layouts
* Professional imagery or abstract visual treatments where appropriate
* Strong CTA placement

---

# CTA Strategy

Primary CTAs should be consistently placed:

1. Hero section
2. After major program information
3. Near the end of long pages
4. Final CTA section
5. Header navigation

Primary CTA text should generally be:

**Enquire Now**

Secondary CTAs can include:

* Explore the IBCP
* View the Curriculum
* Learn About TIBS

---

# Responsive Requirements

All pages must be fully responsive.

Optimise for:

* Desktop
* Tablet
* Mobile

On mobile:

* Navigation should collapse appropriately
* Cards should stack cleanly
* Buttons should remain easy to tap
* Typography should remain readable
* Long curriculum sections should remain easy to scan

Follow the responsive principles already defined in:

`FILES/coursera.design.md`

---

# Final Development Rule

Before implementing components or pages, use:

`FILES/coursera.design.md`

as the main design-language reference.

Preserve its overall UI and UX approach while adapting the website for TIBS and replacing its colour palette with:

```css
--primary: rgb(255, 193, 7);
--black: #000000;
--white: #ffffff;
```

The final website should be a cohesive, premium, responsive HTML website focused on promoting the **Investment Banking Certificate Program (IBCP)** and generating enquiries.
