/* ═══════════════════════════════════════════════════════════════════════════
   GENEVA WELLNESS — enhancements.js
   Premium animations, interactions & scroll effects
   ═══════════════════════════════════════════════════════════════════════════ */
'use strict';

/* ── IMAGE PLACEHOLDER HANDLER ──────────────────────────────────────────── */
document.addEventListener('DOMContentLoaded', () => {
  const images = document.querySelectorAll('img');
  images.forEach(img => {
    img.addEventListener('error', function() {
      if (!this.dataset.placeholderSet) {
        this.dataset.placeholderSet = 'true';
        this.style.display = 'none';
        
        // Create placeholder
        const placeholder = document.createElement('div');
        placeholder.style.cssText = `
          background: linear-gradient(135deg, #e5ddd5 0%, #f5f1eb 100%);
          width: ${this.width || '300'}px;
          height: ${this.height || '300'}px;
          border-radius: 12px;
          display: flex;
          align-items: center;
          justify-content: center;
          color: #999;
          font-size: 14px;
          text-align: center;
          padding: 20px;
          box-sizing: border-box;
        `;
        placeholder.textContent = '📷 Image not available';
        this.parentNode.insertBefore(placeholder, this);
      }
    });
  });
});

/* ── AOS INIT ───────────────────────────────────────────────────────────── */
document.addEventListener('DOMContentLoaded', () => {
  if (typeof AOS !== 'undefined') {
    AOS.init({
      duration: 800,
      easing: 'ease-out-cubic',
      once: true,
      offset: 50,
    });
  }
});

/* ── SWIPER TESTIMONIALS ─────────────────────────────────────────────────── */
document.addEventListener('DOMContentLoaded', () => {
  if (typeof Swiper !== 'undefined') {
    const tSwiper = document.querySelector('.testimonials-swiper');
    if (tSwiper) {
      new Swiper('.testimonials-swiper', {
        slidesPerView: 1,
        spaceBetween: 24,
        loop: true,
        autoplay: { delay: 5000, disableOnInteraction: false, pauseOnMouseEnter: true },
        pagination: { el: '.swiper-pagination', clickable: true },
        navigation: { prevEl: '.swiper-button-prev', nextEl: '.swiper-button-next' },
        grabCursor: true,
        speed: 700,
        breakpoints: {
          640: { slidesPerView: 2 },
          1024: { slidesPerView: 3 },
        },
      });
    }
  }
});

/* ── BEFORE/AFTER SLIDER ─────────────────────────────────────────────────── */
document.addEventListener('DOMContentLoaded', () => {
  const sliders = document.querySelectorAll('.ba-slider-wrap');
  
  sliders.forEach(slider => {
    const range = slider.querySelector('.ba-range');
    const after = slider.querySelector('.ba-after');
    const divider = slider.querySelector('.ba-divider');
    
    if (!range || !after || !divider) return;
    
    // Update slider position
    const updateSlider = (e) => {
      const rect = slider.getBoundingClientRect();
      const x = e.type.includes('touch') 
        ? e.touches[0].clientX - rect.left 
        : e.clientX - rect.left;
      
      const percentage = Math.max(0, Math.min(100, (x / rect.width) * 100));
      range.value = percentage;
      after.style.clipPath = `inset(0 ${100 - percentage}% 0 0)`;
      divider.style.left = `${percentage}%`;
    };
    
    // Range input change
    range.addEventListener('input', (e) => {
      const percentage = e.target.value;
      after.style.clipPath = `inset(0 ${100 - percentage}% 0 0)`;
      divider.style.left = `${percentage}%`;
    });
    
    // Mouse events
    slider.addEventListener('mousemove', updateSlider);
    slider.addEventListener('mousedown', () => {
      slider.addEventListener('mousemove', updateSlider);
    });
    document.addEventListener('mouseup', () => {
      slider.removeEventListener('mousemove', updateSlider);
    });
    
    // Touch events
    slider.addEventListener('touchmove', updateSlider);
    slider.addEventListener('touchstart', () => {
      slider.addEventListener('touchmove', updateSlider);
    });
    document.addEventListener('touchend', () => {
      slider.removeEventListener('touchmove', updateSlider);
    });
  });
});

/* ── HERO TITLE STAGGER ──────────────────────────────────────────────────── */
document.addEventListener('DOMContentLoaded', () => {
  // Handle home page hero title lines
  const titleLines = document.querySelectorAll('.hero-title-line');
  titleLines.forEach((line, i) => {
    line.style.opacity = '0';
    line.style.transform = 'translateY(30px)';
    line.style.transition = `all 0.8s cubic-bezier(0.25,0.46,0.45,0.94) ${0.1 + i * 0.12}s`;
    requestAnimationFrame(() => {
      setTimeout(() => {
        line.style.opacity = '1';
        line.style.transform = 'translateY(0)';
      }, 300 + i * 100);
    });
  });

  // Handle inner page hero titles
  const innerHeroTitle = document.querySelector('.inner-hero .hero-title');
  if (innerHeroTitle) {
    innerHeroTitle.style.opacity = '0';
    innerHeroTitle.style.transform = 'translateY(30px)';
    innerHeroTitle.style.transition = 'all 0.8s cubic-bezier(0.25,0.46,0.45,0.94) 0.1s';
    requestAnimationFrame(() => {
      setTimeout(() => {
        innerHeroTitle.style.opacity = '1';
        innerHeroTitle.style.transform = 'translateY(0)';
      }, 300);
    });
  }

  // Handle inner page hero subtitles
  const innerHeroSubtitle = document.querySelector('.inner-hero .hero-subtitle');
  if (innerHeroSubtitle) {
    innerHeroSubtitle.style.opacity = '0';
    innerHeroSubtitle.style.transform = 'translateY(30px)';
    innerHeroSubtitle.style.transition = 'all 0.8s cubic-bezier(0.25,0.46,0.45,0.94) 0.25s';
    requestAnimationFrame(() => {
      setTimeout(() => {
        innerHeroSubtitle.style.opacity = '1';
        innerHeroSubtitle.style.transform = 'translateY(0)';
      }, 300);
    });
  }
});

/* ── HERO CONTENT STAGGER ────────────────────────────────────────────────── */
document.addEventListener('DOMContentLoaded', () => {
  const animatedEls = document.querySelectorAll('[data-delay]');
  animatedEls.forEach((el) => {
    const delay = parseInt(el.dataset.delay, 10) * 120;
    el.style.opacity = '0';
    el.style.transform = 'translateY(20px)';
    el.style.transition = `opacity 0.7s ease ${delay + 400}ms, transform 0.7s ease ${delay + 400}ms`;
    setTimeout(() => {
      el.style.opacity = '1';
      el.style.transform = 'translateY(0)';
    }, 200);
  });
});

/* ── ANIMATED COUNTERS ───────────────────────────────────────────────────── */
const counterObs = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (!entry.isIntersecting) return;
    const el = entry.target;
    const target = parseInt(el.dataset.target, 10);
    const suffix = el.dataset.suffix || '';
    const duration = 2000;
    const start = performance.now();

    const tick = (now) => {
      const progress = Math.min((now - start) / duration, 1);
      const ease = 1 - Math.pow(1 - progress, 4);
      el.textContent = Math.floor(ease * target).toLocaleString() + suffix;
      if (progress < 1) requestAnimationFrame(tick);
      else el.textContent = target.toLocaleString() + suffix;
    };
    requestAnimationFrame(tick);
    counterObs.unobserve(el);
  });
}, { threshold: 0.5 });

document.querySelectorAll('.stat-num[data-target]').forEach(el => {
  const suffix = el.dataset.suffix || '';
  el.textContent = '0' + suffix;
  counterObs.observe(el);
});

/* ── BEFORE / AFTER SLIDERS ──────────────────────────────────────────────── */
document.querySelectorAll('.ba-card').forEach(card => {
  const range = card.querySelector('.ba-range');
  const after = card.querySelector('.ba-after');
  const divider = card.querySelector('.ba-divider');
  const beforeLabel = card.querySelector('.ba-label-before');
  const afterLabel = card.querySelector('.ba-label-after');
  if (!range || !after || !divider) return;

  function updateSlider(val) {
    after.style.clipPath = `inset(0 ${100 - val}% 0 0)`;
    divider.style.left = val + '%';
    
    // When slider left (val <= 50): show before, hide after
    // When slider right (val >= 50): show after, hide before
    if (beforeLabel) {
      beforeLabel.style.display = val > 60 ? 'none' : 'block';
    }
    if (afterLabel) {
      afterLabel.style.display = val < 40 ? 'none' : 'block';
    }
  }
  updateSlider(50);
  range.addEventListener('input', () => updateSlider(+range.value));

  let dragging = false;
  const wrap = card.querySelector('.ba-slider-wrap');
  wrap.addEventListener('mousedown', () => dragging = true);
  document.addEventListener('mouseup', () => dragging = false);
  wrap.addEventListener('mousemove', e => {
    if (!dragging) return;
    const rect = wrap.getBoundingClientRect();
    const pct = Math.max(0, Math.min(100, ((e.clientX - rect.left) / rect.width) * 100));
    range.value = pct;
    updateSlider(pct);
  });
  // Touch support
  wrap.addEventListener('touchmove', e => {
    const rect = wrap.getBoundingClientRect();
    const pct = Math.max(0, Math.min(100, ((e.touches[0].clientX - rect.left) / rect.width) * 100));
    range.value = pct;
    updateSlider(pct);
  }, { passive: true });
});

/* ── PARALLAX HERO ELEMENTS ──────────────────────────────────────────────── */
let ticking = false;
window.addEventListener('scroll', () => {
  if (!ticking) {
    requestAnimationFrame(() => {
      const scrollY = window.scrollY;
      
      // Parallax hero bg orbs
      const orb1 = document.querySelector('.hero-orb-1');
      const orb2 = document.querySelector('.hero-orb-2');
      if (orb1) orb1.style.transform = `translateY(${scrollY * 0.15}px)`;
      if (orb2) orb2.style.transform = `translateY(${scrollY * -0.1}px)`;

      // Hero content slight parallax
      const heroContent = document.querySelector('.hero-content-col');
      if (heroContent && scrollY < window.innerHeight) {
        heroContent.style.transform = `translateY(${scrollY * 0.08}px)`;
      }

      // Scroll down indicator fade
      const scrollHint = document.querySelector('.hero-scroll-hint');
      if (scrollHint) {
        scrollHint.style.opacity = Math.max(0, 1 - scrollY / 200);
      }

      ticking = false;
    });
    ticking = true;
  }
}, { passive: true });

/* ── SMOOTH HOVER MAGNETIC EFFECT ON BUTTONS ─────────────────────────────── */
document.querySelectorAll('.hero-btn-primary, .fcta-btn-primary, .nav-cta-btn').forEach(btn => {
  btn.addEventListener('mousemove', (e) => {
    const rect = btn.getBoundingClientRect();
    const x = e.clientX - rect.left - rect.width / 2;
    const y = e.clientY - rect.top - rect.height / 2;
    const strength = 0.2;
    btn.style.transform = `translateY(-3px) translate(${x * strength}px, ${y * strength}px)`;
  });
  btn.addEventListener('mouseleave', () => {
    btn.style.transform = '';
  });
});

/* ── TREATMENT CARDS STAGGER REVEAL ──────────────────────────────────────── */
const treatmentObs = new IntersectionObserver((entries) => {
  entries.forEach((entry, i) => {
    if (entry.isIntersecting) {
      entry.target.style.animationDelay = `${i * 0.08}s`;
      entry.target.classList.add('revealed');
      treatmentObs.unobserve(entry.target);
    }
  });
}, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

document.querySelectorAll('.more-card, .trust-card, .stat-card-enhanced').forEach(el => {
  treatmentObs.observe(el);
});

/* ── SECTION BACKGROUND TRANSITIONS ──────────────────────────────────────── */
const sectionColorObs = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      const theme = entry.target.dataset.theme;
      if (theme === 'dark') {
        document.querySelector('.site-header')?.classList.add('on-dark-section');
      } else {
        document.querySelector('.site-header')?.classList.remove('on-dark-section');
      }
    }
  });
}, { threshold: 0.5 });

document.querySelectorAll('.stats-section-enhanced, .hero-enhanced').forEach(el => {
  el.dataset.theme = 'dark';
  sectionColorObs.observe(el);
});

/* ── CURSOR ENHANCED ─────────────────────────────────────────────────────── */
const cursor = document.getElementById('cursor');
const cursorFollower = document.getElementById('cursor-follower');
let mouseX = 0, mouseY = 0, followerX = 0, followerY = 0;

// Only show custom cursor on hover-capable devices without reduced motion preference
const shouldShowCursor = window.matchMedia('(hover: hover)').matches && 
                        !window.matchMedia('(prefers-reduced-motion: reduce)').matches;

if (cursor && cursorFollower && shouldShowCursor) {
  document.addEventListener('mousemove', e => {
    mouseX = e.clientX;
    mouseY = e.clientY;
    cursor.style.left = mouseX + 'px';
    cursor.style.top = mouseY + 'px';
  });

  function animateCursor() {
    followerX += (mouseX - followerX) * 0.1;
    followerY += (mouseY - followerY) * 0.1;
    cursorFollower.style.left = followerX + 'px';
    cursorFollower.style.top = followerY + 'px';
    requestAnimationFrame(animateCursor);
  }
  animateCursor();

  // Cursor states
  const hoverEls = document.querySelectorAll('a, button, .more-card, .ba-range, .gallery-item');
  hoverEls.forEach(el => {
    el.addEventListener('mouseenter', () => {
      cursor.style.transform = 'translate(-50%, -50%) scale(2)';
      cursor.style.background = 'transparent';
      cursor.style.border = '1px solid var(--primary)';
      cursorFollower.style.width = '60px';
      cursorFollower.style.height = '60px';
    });
    el.addEventListener('mouseleave', () => {
      cursor.style.transform = 'translate(-50%, -50%) scale(1)';
      cursor.style.background = 'var(--primary)';
      cursor.style.border = 'none';
      cursorFollower.style.width = '36px';
      cursorFollower.style.height = '36px';
    });
  });
} else {
  // Hide custom cursor if prefers-reduced-motion or not hover-capable
  if (cursor) cursor.style.display = 'none';
  if (cursorFollower) cursorFollower.style.display = 'none';
}

/* ── BACK TO TOP ─────────────────────────────────────────────────────────── */
const btt = document.getElementById('back-to-top');
if (btt) {
  window.addEventListener('scroll', () => {
    btt.classList.toggle('visible', window.scrollY > 500);
  }, { passive: true });
  btt.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });
}

/* ── SMOOTH SCROLL ───────────────────────────────────────────────────────── */
document.querySelectorAll('a[href^="#"]').forEach(a => {
  a.addEventListener('click', e => {
    const target = document.querySelector(a.getAttribute('href'));
    if (target) {
      e.preventDefault();
      window.scrollTo({ top: target.getBoundingClientRect().top + window.scrollY - 90, behavior: 'smooth' });
    }
  });
});

/* ── STICKY HEADER SCROLL ────────────────────────────────────────────────── */
const siteHeader = document.getElementById('site-header');
window.addEventListener('scroll', () => {
  const isScrolled = window.scrollY > 80;
  siteHeader?.classList.toggle('scrolled', isScrolled);
}, { passive: true });

/* ── HOMEPAGE POPUP ──────────────────────────────────────────────────────── */
let popupShown = sessionStorage.getItem('popupShown');

function initPopup() {
  const popup = document.getElementById('consultation-popup');
  if (!popup) return;
  
  const isHome = window.location.pathname === '/' || window.location.pathname.endsWith('index.php');
  if (!isHome) return;
  
  if (popupShown || sessionStorage.getItem('popupShown')) {
    return;
  }

  const closeBtn = popup.querySelector('.popup-close');
  const form = popup.querySelector('form');

  const closePopup = () => {
    if (popup) {
      popup.classList.add('closing');
      setTimeout(() => { 
        popup.classList.remove('visible', 'closing');
        popupShown = true;
        sessionStorage.setItem('popupShown', '1'); 
      }, 400);
    }
  };

  // Close button handler
  closeBtn?.addEventListener('click', closePopup);
  
  // Overlay click handler (click outside to close)
  popup?.addEventListener('click', e => { 
    if (e.target === popup) closePopup(); 
  });

  // Form submission handler
  form?.addEventListener('submit', e => {
    e.preventDefault();
    const btn = form.querySelector('[type="submit"]');
    const originalText = btn.textContent;
    btn.textContent = 'Processing...';
    btn.disabled = true;
    setTimeout(() => {
      btn.textContent = '✓ Request Submitted!';
      setTimeout(closePopup, 1500);
    }, 900);
  });

  // Show popup after delay
  setTimeout(() => popup?.classList.add('visible'), 3500);
}

// Trigger popup on 20% scroll
function checkScrollTrigger() {
  if (popupShown || sessionStorage.getItem('popupShown')) return;
  if (!window.location.pathname === '/' && !window.location.pathname.endsWith('index.php')) return;

  const scrollPercentage = (window.scrollY / (document.documentElement.scrollHeight - window.innerHeight)) * 100;
  
  if (scrollPercentage >= 20) {
    const popup = document.getElementById('consultation-popup');
    if (popup && !popup.classList.contains('visible')) {
      popup?.classList.add('visible');
      window.removeEventListener('scroll', checkScrollTrigger, { passive: true });
      popupShown = true;
      sessionStorage.setItem('popupShown', '1');
    }
  }
}

// Initialize popup
if (window.location.pathname === '/' || window.location.pathname.endsWith('index.php')) {
  // Show popup either on time delay or 20% scroll, whichever comes first
  setTimeout(initPopup, 2500);
  window.addEventListener('scroll', checkScrollTrigger, { passive: true });
}

/* ── FREEPIK IMAGE FALLBACK ──────────────────────────────────────────────── */
const gradients = [
  'linear-gradient(135deg, #c94a47 0%, #7b1a18 100%)',
  'linear-gradient(135deg, #D18D46 0%, #a86a2a 100%)',
  'linear-gradient(135deg, #FEB8B8 0%, #B00E09 100%)',
];
document.querySelectorAll('img[src*="freepik"]').forEach((img, i) => {
  img.addEventListener('error', () => {
    const div = document.createElement('div');
    div.style.cssText = `width:100%;height:100%;background:${gradients[i % gradients.length]};display:flex;align-items:center;justify-content:center;`;
    div.innerHTML = `<span style="font-size:3rem;opacity:.3;color:white">✦</span>`;
    img.replaceWith(div);
  });
});

/* ── PAGE LOADER ─────────────────────────────────────────────────────────── */
window.addEventListener('load', () => {
  const loader = document.getElementById('page-loader');
  if (loader) {
    setTimeout(() => loader.classList.add('loaded'), 700);
  }
});

/* ── ANNOUNCEMENT BAR CLOSE ──────────────────────────────────────────────── */
const annClose = document.getElementById('announcement-close');
if (annClose) {
  annClose.addEventListener('click', () => {
    const bar = document.querySelector('.announcement-bar');
    if (bar) {
      bar.style.transition = 'height 0.3s ease, opacity 0.3s ease';
      bar.style.height = bar.offsetHeight + 'px';
      bar.style.overflow = 'hidden';
      requestAnimationFrame(() => {
        bar.style.height = '0';
        bar.style.opacity = '0';
        setTimeout(() => bar.remove(), 300);
      });
    }
  });
}

/* ── GALLERY MASONRY HOVER EFFECT ────────────────────────────────────────── */
document.querySelectorAll('.gallery-masonry').forEach(masonry => {
  masonry.addEventListener('mousemove', e => {
    const rect = masonry.getBoundingClientRect();
    const x = ((e.clientX - rect.left) / rect.width - 0.5) * 10;
    const y = ((e.clientY - rect.top) / rect.height - 0.5) * 10;
    masonry.style.perspective = '1000px';
    masonry.querySelectorAll('.gallery-item').forEach((item, i) => {
      const factor = (i % 2 === 0 ? 1 : -1) * 0.5;
      item.style.transform = `rotateY(${x * factor * 0.5}deg) rotateX(${-y * factor * 0.5}deg)`;
      item.style.transition = 'transform 0.3s ease';
    });
  });
  masonry.addEventListener('mouseleave', () => {
    masonry.querySelectorAll('.gallery-item').forEach(item => {
      item.style.transform = '';
    });
  });
});

/* ── TREATMENT SHOWCASE ROWS — REVEAL ON SCROLL ───────────────────────────── */
const showcaseObs = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.style.opacity = '1';
      entry.target.style.transform = 'translateY(0)';
      showcaseObs.unobserve(entry.target);
    }
  });
}, { threshold: 0.1 });

document.querySelectorAll('.treatment-showcase-row').forEach(row => {
  row.style.opacity = '0';
  row.style.transform = 'translateY(40px)';
  row.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
  showcaseObs.observe(row);
});

/* ── POPUP MODAL FUNCTIONALITY ───────────────────────────────────────────── */
document.addEventListener('DOMContentLoaded', () => {
  const popupOverlay = document.getElementById('consultation-popup');
  const popupTriggers = document.querySelectorAll('.popup-trigger');
  const popupClose = document.querySelector('.popup-close');
  const popupForm = document.getElementById('consultation-form');

  if (!popupOverlay) return;

  // Open popup
  popupTriggers.forEach(trigger => {
    trigger.addEventListener('click', (e) => {
      e.preventDefault();
      popupOverlay.classList.remove('closing');
      popupOverlay.classList.add('visible');
      document.body.style.overflow = 'hidden';
    });
  });

  // Close popup
  const closePopup = () => {
    popupOverlay.classList.add('closing');
    popupOverlay.classList.remove('visible');
    document.body.style.overflow = '';
    
    // Remove closing class after animation
    setTimeout(() => {
      popupOverlay.classList.remove('closing');
    }, 400);
  };

  // Close button
  if (popupClose) {
    popupClose.addEventListener('click', closePopup);
  }

  // Close on overlay click (not on content)
  popupOverlay.addEventListener('click', (e) => {
    if (e.target === popupOverlay) {
      closePopup();
    }
  });

  // Close on Escape key
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && popupOverlay.classList.contains('visible')) {
      closePopup();
    }
  });

  // Form submission
  if (popupForm) {
    popupForm.addEventListener('submit', (e) => {
      e.preventDefault();
      
      // Get form data
      const formData = new FormData(popupForm);
      const data = {
        name: formData.get('name') || document.querySelector('.popup-form input[placeholder*="Name"]')?.value,
        email: formData.get('email') || document.querySelector('.popup-form input[placeholder*="Email"]')?.value,
        phone: formData.get('phone') || document.querySelector('.popup-form input[placeholder*="Phone"]')?.value,
      };

      // Log the data (in production, send to server)
      console.log('Consultation request:', data);

      // Show success message
      const originalContent = popupForm.innerHTML;
      popupForm.innerHTML = `
        <div style="text-align: center; padding: 2rem 0;">
          <div style="font-size: 3rem; margin-bottom: 1rem;">✓</div>
          <h3 style="font-family: 'Lora', serif; color: #1a1a1a; margin-bottom: 0.5rem;">Request Received!</h3>
          <p style="color: #666; margin-bottom: 1.5rem;">We'll contact you within 24 hours to confirm your consultation appointment.</p>
          <button type="button" class="popup-btn" onclick="location.reload()">Close</button>
        </div>
      `;

      // Reset form after 5 seconds
      setTimeout(() => {
        popupForm.innerHTML = originalContent;
        closePopup();
        popupForm.reset();
      }, 5000);
    });
  }
});

/* ── SEARCH RESULTS PAGE ANIMATIONS ──────────────────────────────────────── */
document.addEventListener('DOMContentLoaded', () => {
  // Animate search info box
  const searchInfo = document.querySelector('.search-info');
  if (searchInfo) {
    searchInfo.style.opacity = '0';
    searchInfo.style.transform = 'translateY(20px)';
    searchInfo.style.transition = 'all 0.6s cubic-bezier(0.34, 1.56, 0.64, 1) 0.1s';
    setTimeout(() => {
      searchInfo.style.opacity = '1';
      searchInfo.style.transform = 'translateY(0)';
    }, 100);
  }

  // Stagger animate blog posts on search results
  const blogPosts = document.querySelectorAll('.blog-post');
  blogPosts.forEach((post, index) => {
    post.style.opacity = '0';
    post.style.transform = 'translateY(30px)';
    post.style.transition = `all 0.6s cubic-bezier(0.34, 1.56, 0.64, 1) ${0.15 + index * 0.08}s`;
    setTimeout(() => {
      post.style.opacity = '1';
      post.style.transform = 'translateY(0)';
    }, 200);
  });

  // Animate no results icon floating
  const noResultsIcon = document.querySelector('.no-results-icon');
  if (noResultsIcon) {
    noResultsIcon.style.animation = 'float 3s ease-in-out infinite';
  }
});

/* ── SEARCH FORM ENHANCEMENT ─────────────────────────────────────────────── */
document.addEventListener('DOMContentLoaded', () => {
  const searchForms = document.querySelectorAll('.search-form');
  searchForms.forEach(form => {
    const input = form.querySelector('input[type="search"]');
    const button = form.querySelector('button[type="submit"]');
    
    if (input) {
      // Focus animation
      input.addEventListener('focus', () => {
        form.style.transform = 'scale(1.02)';
      });
      
      input.addEventListener('blur', () => {
        form.style.transform = 'scale(1)';
      });
      
      form.style.transition = 'transform 0.2s ease';
    }
    
    // Button ripple effect
    if (button) {
      button.addEventListener('click', (e) => {
        if (input.value.trim() === '') {
          e.preventDefault();
          input.style.borderColor = 'var(--primary)';
          input.style.transform = 'translateX(-5px)';
          setTimeout(() => {
            input.style.transform = 'translateX(5px)';
          }, 50);
          setTimeout(() => {
            input.style.transform = 'translateX(0)';
            input.style.borderColor = 'var(--border)';
          }, 100);
        }
      });
    }
  });
});

/* ── BLOG CATEGORY LINKS ENHANCEMENT ─────────────────────────────────────── */
document.addEventListener('DOMContentLoaded', () => {
  const categoryLinks = document.querySelectorAll('.categories-widget a, .tags-widget a');
  categoryLinks.forEach(link => {
    link.addEventListener('mouseenter', () => {
      link.style.marginLeft = '8px';
    });
    link.addEventListener('mouseleave', () => {
      link.style.marginLeft = '0';
    });
    link.style.transition = 'margin-left 0.2s ease';
  });
});

/* ── AUTHOR BOX HOVER EFFECT ─────────────────────────────────────────────── */
document.addEventListener('DOMContentLoaded', () => {
  const authorImg = document.querySelector('.author-box img');
  if (authorImg) {
    authorImg.addEventListener('mouseenter', () => {
      authorImg.style.boxShadow = '0 8px 25px rgba(202, 174, 95, 0.4)';
    });
    authorImg.addEventListener('mouseleave', () => {
      authorImg.style.boxShadow = '0 4px 15px rgba(202, 174, 95, 0.3)';
    });
  }
});

/* ── SIDEBAR STAGGER REVEAL ──────────────────────────────────────────────── */
const sidebarObs = new IntersectionObserver((entries) => {
  entries.forEach((entry, i) => {
    if (entry.isIntersecting) {
      entry.target.style.opacity = '1';
      entry.target.style.transform = 'translateX(0)';
      sidebarObs.unobserve(entry.target);
    }
  });
}, { threshold: 0.1 });

document.querySelectorAll('.blog-sidebar .sidebar-widget').forEach((widget, i) => {
  widget.style.opacity = '0';
  widget.style.transform = 'translateX(30px)';
  widget.style.transition = `opacity 0.6s ease ${0.2 + i * 0.1}s, transform 0.6s ease ${0.2 + i * 0.1}s`;
  sidebarObs.observe(widget);
});

