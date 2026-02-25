/* ═══════════════════════════════════════════════════════════════════════════
   GENEVA WELLNESS — enhancements.js
   Additional enhancements and fixes
   ═══════════════════════════════════════════════════════════════════════════ */
'use strict';

/* ── GALLERY & BEFORE/AFTER ─────────────────────────────────────────────── */
document.addEventListener('DOMContentLoaded', () => {
  // Initialize gallery functionality
  const galleryItems = document.querySelectorAll('[data-gallery]');
  if (galleryItems.length > 0) {
    galleryItems.forEach(item => {
      item.addEventListener('click', function(e) {
        e.preventDefault();
        console.log('Gallery item clicked:', this);
      });
    });
  }

  // Initialize before/after sliders if they exist
  const beforeAfterSliders = document.querySelectorAll('.before-after-slider');
  if (beforeAfterSliders.length > 0) {
    beforeAfterSliders.forEach(slider => {
      const handle = slider.querySelector('.ba-handle');
      if (handle) {
        let isActive = false;
        handle.addEventListener('mousedown', () => { isActive = true; });
        document.addEventListener('mouseup', () => { isActive = false; });
        document.addEventListener('mousemove', (e) => {
          if (!isActive) return;
          const rect = slider.getBoundingClientRect();
          const x = e.clientX - rect.left;
          const percentage = Math.max(0, Math.min(100, (x / rect.width) * 100));
          slider.style.setProperty('--position', `${percentage}%`);
        });
      }
    });
  }
});

/* ── TESTIMONIALS ENHANCEMENT ───────────────────────────────────────────── */
document.addEventListener('DOMContentLoaded', () => {
  const testimonialCards = document.querySelectorAll('.testimonial-card');
  testimonialCards.forEach(card => {
    card.addEventListener('mouseenter', function() {
      this.style.transform = 'translateY(-8px)';
    });
    card.addEventListener('mouseleave', function() {
      this.style.transform = 'translateY(0)';
    });
  });
});

/* ── SMOOTH SCROLL FOR ANCHOR LINKS ─────────────────────────────────────── */
document.addEventListener('DOMContentLoaded', () => {
  const links = document.querySelectorAll('a[href^="#"]');
  links.forEach(link => {
    link.addEventListener('click', function(e) {
      const href = this.getAttribute('href');
      if (href !== '#' && href !== '#!' && href.length > 1) {
        const target = document.querySelector(href);
        if (target) {
          e.preventDefault();
          target.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }
      }
    });
  });
});

/* ── FORM VALIDATION ────────────────────────────────────────────────────── */
document.addEventListener('DOMContentLoaded', () => {
  const forms = document.querySelectorAll('form');
  forms.forEach(form => {
    form.addEventListener('submit', function(e) {
      const inputs = this.querySelectorAll('input[required], textarea[required], select[required]');
      let isValid = true;
      
      inputs.forEach(input => {
        if (!input.value.trim()) {
          isValid = false;
          input.style.borderColor = '#B00E09';
          input.style.boxShadow = '0 0 0 3px rgba(176, 14, 9, 0.1)';
        } else {
          input.style.borderColor = '';
          input.style.boxShadow = '';
        }
      });

      if (!isValid) {
        e.preventDefault();
        console.log('Form validation failed');
      }
    });
  });
});

/* ── BACK TO TOP BUTTON ─────────────────────────────────────────────────── */
document.addEventListener('DOMContentLoaded', () => {
  const backToTop = document.getElementById('back-to-top');
  if (backToTop) {
    window.addEventListener('scroll', () => {
      if (window.pageYOffset > 300) {
        backToTop.style.display = 'block';
      } else {
        backToTop.style.display = 'none';
      }
    });

    backToTop.addEventListener('click', () => {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
  }
});

/* ── MOBILE MENU TOGGLE ──────────────────────────────────────────────────── */
document.addEventListener('DOMContentLoaded', () => {
  const navToggle = document.getElementById('nav-toggle');
  const navMenu = document.getElementById('nav-menu');
  
  if (navToggle && navMenu) {
    navToggle.addEventListener('click', () => {
      const isOpen = navMenu.classList.contains('active');
      navMenu.classList.toggle('active');
      navToggle.setAttribute('aria-expanded', !isOpen);
    });

    // Close menu when link is clicked
    const navLinks = navMenu.querySelectorAll('a');
    navLinks.forEach(link => {
      link.addEventListener('click', () => {
        navMenu.classList.remove('active');
        navToggle.setAttribute('aria-expanded', 'false');
      });
    });
  }
});

/* ── ANNOUNCEMENT BAR CLOSE ──────────────────────────────────────────────── */
document.addEventListener('DOMContentLoaded', () => {
  const closeBtn = document.getElementById('announcement-close');
  if (closeBtn) {
    closeBtn.addEventListener('click', () => {
      const bar = document.getElementById('announcement-bar');
      if (bar) {
        bar.style.display = 'none';
      }
    });
  }
});

console.log('Geneva Wellness Enhancements loaded successfully');
