/* ============================================================
   TIBS — The Investment Banking School
   Shared JavaScript
   ============================================================ */

document.addEventListener('DOMContentLoaded', () => {

  // ---- 1. MOBILE MENU TOGGLE ----
  const hamburger = document.querySelector('.header__hamburger');
  const nav = document.querySelector('.header__nav');

  if (hamburger && nav) {
    hamburger.addEventListener('click', () => {
      hamburger.classList.toggle('open');
      nav.classList.toggle('open');
      document.body.style.overflow = nav.classList.contains('open') ? 'hidden' : '';
    });

    // Close menu when a nav link is clicked
    const navLinks = nav.querySelectorAll('a');
    navLinks.forEach(link => {
      link.addEventListener('click', () => {
        hamburger.classList.remove('open');
        nav.classList.remove('open');
        document.body.style.overflow = '';
      });
    });
  }

  // ---- 2. HEADER SCROLL EFFECT ----
  const header = document.querySelector('.header');

  if (header) {
    const onScroll = () => {
      if (window.scrollY > 20) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
    };
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  }

  // ---- 3. SCROLL-TRIGGERED ANIMATIONS ----
  const animatedElements = document.querySelectorAll('.fade-in, .fade-in-left, .fade-in-right, .stagger-children');

  if (animatedElements.length > 0 && 'IntersectionObserver' in window) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          observer.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.12,
      rootMargin: '0px 0px -40px 0px'
    });

    animatedElements.forEach(el => observer.observe(el));
  }

  // ---- 4. ACTIVE NAV LINK HIGHLIGHT ----
  const currentPath = window.location.pathname.replace(/\/+$/, '') || '/';
  const allNavLinks = document.querySelectorAll('.header__nav-links a, .footer__links a');

  allNavLinks.forEach(link => {
    const href = link.getAttribute('href');
    if (href === currentPath || (currentPath === '/' && href === '/')) {
      link.classList.add('active');
    }
  });

  // ---- 5. SMOOTH SCROLL FOR ANCHOR LINKS ----
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', (e) => {
      const targetId = anchor.getAttribute('href');
      if (targetId === '#') return;
      const target = document.querySelector(targetId);
      if (target) {
        e.preventDefault();
        const headerOffset = parseInt(getComputedStyle(document.documentElement).getPropertyValue('--nav-height')) || 72;
        const elementPosition = target.getBoundingClientRect().top + window.scrollY;
        window.scrollTo({
          top: elementPosition - headerOffset - 16,
          behavior: 'smooth'
        });
      }
    });
  });

  // ---- 6. CONTACT FORM HANDLING ----
  const contactForm = document.getElementById('enquiry-form');

  if (contactForm) {
    contactForm.addEventListener('submit', (e) => {
      e.preventDefault();

      // Basic validation
      const fullName = contactForm.querySelector('#full-name');
      const email = contactForm.querySelector('#email');
      const phone = contactForm.querySelector('#phone');
      const message = contactForm.querySelector('#message');

      let valid = true;

      [fullName, email, phone, message].forEach(field => {
        if (field && !field.value.trim()) {
          field.style.borderColor = '#d30a28';
          valid = false;
        } else if (field) {
          field.style.borderColor = '';
        }
      });

      // Email format check
      if (email && email.value.trim()) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email.value.trim())) {
          email.style.borderColor = '#d30a28';
          valid = false;
        }
      }

      if (!valid) return;

      // Show success state
      const formContainer = document.querySelector('.form-card form');
      const successMessage = document.querySelector('.form-success');

      if (formContainer && successMessage) {
        formContainer.style.display = 'none';
        successMessage.classList.add('show');
      }
    });

    // Clear error styling on input
    contactForm.querySelectorAll('input, textarea').forEach(field => {
      field.addEventListener('input', () => {
        field.style.borderColor = '';
      });
    });
  }

  // ---- 7. COUNTER ANIMATION (for any future stat counters) ----
  const counters = document.querySelectorAll('[data-count]');

  if (counters.length > 0 && 'IntersectionObserver' in window) {
    const counterObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const target = parseInt(entry.target.dataset.count);
          let current = 0;
          const increment = target / 40;
          const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
              entry.target.textContent = target;
              clearInterval(timer);
            } else {
              entry.target.textContent = Math.floor(current);
            }
          }, 30);
          counterObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.5 });

    counters.forEach(c => counterObserver.observe(c));
  }

  // ---- 8. FAQ ACCORDION TOGGLE ----
  const faqCards = document.querySelectorAll('.faq-card');
  faqCards.forEach(card => {
    card.addEventListener('click', () => {
      const isOpen = card.classList.contains('active');
      card.classList.toggle('active');
    });
  });

});

