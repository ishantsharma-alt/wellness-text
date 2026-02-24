/* ═══════════════════════════════════════════════════════════════════════════
   GENEVA WELLNESS INSTITUTE — script.js
   ═══════════════════════════════════════════════════════════════════════════ */
'use strict';

/* ── 1. PAGE LOADER ─────────────────────────────────────────────────────── */
window.addEventListener('load', () => {
  const loader = document.getElementById('page-loader');
  if (loader) {
    setTimeout(() => loader.classList.add('loaded'), 600);
  }
});

/* ── 1.5 HOMEPAGE POPUP ────────────────────────────────────────────────── */
function initHomepagePopup() {
  // Only show popup on homepage
  if (window.location.pathname !== '/' && window.location.pathname !== '/index.html') return;
  
  // Check if already shown in this session
  if (sessionStorage.getItem('popupShown')) return;
  
  // Create popup markup
  const popupHTML = `
    <div class="popup-overlay" id="popup-overlay">
      <div class="popup-content" role="dialog" aria-modal="true">
        <button class="popup-close" id="popup-close" aria-label="Close popup">×</button>
        
        <div class="popup-header">
          <h3>Exclusive Offer</h3>
          <p>Get 20% off your first treatment</p>
        </div>
        
        <form class="popup-form" id="popup-form">
          <div class="popup-form-group">
            <input type="text" placeholder="Your Name" name="popup-name" required />
          </div>
          <div class="popup-form-group">
            <input type="email" placeholder="your@email.com" name="popup-email" required />
          </div>
          <div class="popup-form-group">
            <input type="tel" placeholder="+63 917 XXX XXXX" name="popup-phone" required />
          </div>
          <button type="submit" class="popup-btn">Claim My Offer</button>
          <p class="popup-privacy">We respect your privacy. No spam, just wellness.</p>
        </form>
      </div>
    </div>
  `;
  
  // Add popup to page
  document.body.insertAdjacentHTML('beforeend', popupHTML);
  
  const overlay = document.getElementById('popup-overlay');
  const closeBtn = document.getElementById('popup-close');
  const form = document.getElementById('popup-form');
  
  // Close popup handlers
  const closePopup = () => {
    overlay.classList.add('closing');
    setTimeout(() => {
      overlay.remove();
      sessionStorage.setItem('popupShown', 'true');
    }, 400);
  };
  
  closeBtn.addEventListener('click', closePopup);
  
  overlay.addEventListener('click', (e) => {
    if (e.target === overlay) closePopup();
  });
  
  // Form submission
  form.addEventListener('submit', (e) => {
    e.preventDefault();
    const name = form.querySelector('[name="popup-name"]').value;
    const submitBtn = form.querySelector('button[type="submit"]');
    
    submitBtn.textContent = 'Processing...';
    submitBtn.disabled = true;
    
    // Simulate sending (replace with actual API call if needed)
    setTimeout(() => {
      submitBtn.textContent = '✓ Offer Applied!';
      setTimeout(() => {
        closePopup();
        sessionStorage.setItem('popupShown', 'true');
      }, 1000);
    }, 800);
  });
  
  // Show popup after 3 seconds
  setTimeout(() => {
    overlay.classList.add('visible');
  }, 3000);
}

// Initialize popup on page load
window.addEventListener('load', initHomepagePopup);


/* ── 2. AOS INIT ────────────────────────────────────────────────────────── */
if (typeof AOS !== 'undefined') {
  AOS.init({
    duration: 750,
    easing: 'ease-out-cubic',
    once: true,
    offset: 60,
  });
}


/* ── 3. GSAP HERO ANIMATIONS ────────────────────────────────────────────── */
if (typeof gsap !== 'undefined') {
  // Stagger hero blobs
  gsap.to('.hero-blob-1', { x: 40, y: 30, duration: 12, repeat: -1, yoyo: true, ease: 'sine.inOut' });
  gsap.to('.hero-blob-2', { x: -30, y: -40, duration: 15, repeat: -1, yoyo: true, ease: 'sine.inOut' });
  gsap.to('.hero-blob-3', { x: 20, y: -30, duration: 9, repeat: -1, yoyo: true, ease: 'sine.inOut' });
}


/* ── 4. CUSTOM CURSOR ───────────────────────────────────────────────────── */
const cursor = document.getElementById('cursor');
const cursorFollower = document.getElementById('cursor-follower');
let mouseX = 0, mouseY = 0, followerX = 0, followerY = 0;

if (cursor && cursorFollower && window.matchMedia('(hover: hover)').matches) {
  document.addEventListener('mousemove', e => {
    mouseX = e.clientX;
    mouseY = e.clientY;
    cursor.style.left = mouseX + 'px';
    cursor.style.top = mouseY + 'px';
  });

  function animateCursor() {
    followerX += (mouseX - followerX) * 0.12;
    followerY += (mouseY - followerY) * 0.12;
    cursorFollower.style.left = followerX + 'px';
    cursorFollower.style.top = followerY + 'px';
    requestAnimationFrame(animateCursor);
  }
  animateCursor();
}


/* ── 5. STICKY HEADER ───────────────────────────────────────────────────── */
const header = document.getElementById('site-header');
window.addEventListener('scroll', () => {
  const isScrolled = window.scrollY > 70;
  header.classList.toggle('scrolled', isScrolled);
  header.classList.toggle('sticky', isScrolled);
}, { passive: true });


/* ── 6. HAMBURGER & MOBILE MENU ──────────────────────────────────────────── */
const hamburger = document.getElementById('hamburger');
const mobileMenu = document.getElementById('mobile-menu');

hamburger && hamburger.addEventListener('click', () => {
  const open = hamburger.classList.toggle('active');
  hamburger.setAttribute('aria-expanded', open);
  mobileMenu.classList.toggle('open', open);
  mobileMenu.setAttribute('aria-hidden', !open);
  document.body.style.overflow = open ? 'hidden' : '';
});

mobileMenu && mobileMenu.querySelectorAll('a').forEach(a => {
  a.addEventListener('click', () => {
    hamburger.classList.remove('active');
    mobileMenu.classList.remove('open');
    document.body.style.overflow = '';
  });
});

document.addEventListener('click', e => {
  if (header && !header.contains(e.target) && mobileMenu && mobileMenu.classList.contains('open')) {
    hamburger.classList.remove('active');
    mobileMenu.classList.remove('open');
    document.body.style.overflow = '';
  }
});


/* ── 7. SWIPER TESTIMONIALS ─────────────────────────────────────────────── */
if (typeof Swiper !== 'undefined') {
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


/* ── 8. BEFORE/AFTER SLIDER ─────────────────────────────────────────────── */
document.querySelectorAll('.ba-card').forEach(card => {
  const range   = card.querySelector('.ba-range');
  const after   = card.querySelector('.ba-after');
  const divider = card.querySelector('.ba-divider');
  if (!range || !after || !divider) return;

  function updateSlider(val) {
    const pct = val + '%';
    after.style.clipPath = `inset(0 ${100 - val}% 0 0)`;
    divider.style.left = pct;
  }

  updateSlider(50);

  range.addEventListener('input', () => updateSlider(+range.value));

  // Touch drag support
  let dragging = false;
  card.addEventListener('mousedown', () => dragging = true);
  document.addEventListener('mouseup', () => dragging = false);
  card.addEventListener('mousemove', e => {
    if (!dragging) return;
    const rect = card.querySelector('.ba-slider-wrap').getBoundingClientRect();
    const pct = Math.max(0, Math.min(100, ((e.clientX - rect.left) / rect.width) * 100));
    range.value = pct;
    updateSlider(pct);
  });
});


/* ── 9. ANIMATED COUNTERS ───────────────────────────────────────────────── */
const counterObs = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (!entry.isIntersecting) return;
    const el     = entry.target;
    const target = parseInt(el.dataset.target, 10);
    const suffix = el.dataset.suffix || '';
    const dur    = 1800;
    const start  = performance.now();

    const tick = now => {
      const p = Math.min((now - start) / dur, 1);
      const ease = 1 - Math.pow(1 - p, 3);
      el.textContent = Math.floor(ease * target).toLocaleString() + suffix;
      if (p < 1) requestAnimationFrame(tick);
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


/* ── 10. SMOOTH SCROLL ──────────────────────────────────────────────────── */
document.querySelectorAll('a[href^="#"]').forEach(a => {
  a.addEventListener('click', e => {
    const target = document.querySelector(a.getAttribute('href'));
    if (target) {
      e.preventDefault();
      window.scrollTo({ top: target.getBoundingClientRect().top + window.scrollY - 90, behavior: 'smooth' });
    }
  });
});


/* ── 11. BACK TO TOP ────────────────────────────────────────────────────── */
const btt = document.getElementById('back-to-top');
if (btt) {
  window.addEventListener('scroll', () => btt.classList.toggle('visible', window.scrollY > 500), { passive: true });
  btt.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
}


/* ── 12. BOOKING FORM ───────────────────────────────────────────────────── */
const bookingForm = document.querySelector('.booking-form');
if (bookingForm) {
  const dtInput = bookingForm.querySelector('#datetime');
  if (dtInput) {
    const now = new Date();
    now.setMinutes(now.getMinutes() - now.getTimezoneOffset());
    dtInput.min = now.toISOString().slice(0, 16);
  }

  bookingForm.addEventListener('submit', e => {
    e.preventDefault();
    const name = bookingForm.querySelector('#name').value.trim();
    const phone = bookingForm.querySelector('#phone').value.trim();
    const datetime = bookingForm.querySelector('#datetime').value;
    const treatment = bookingForm.querySelector('#treatment').value;
    const btn = bookingForm.querySelector('[type="submit"]');

    if (!name || !phone || !datetime || !treatment) {
      showMsg(bookingForm, 'Please fill in all required fields.', 'error');
      return;
    }

    btn.textContent = 'Sending…';
    btn.disabled = true;
    setTimeout(() => {
      btn.textContent = '✓ Booking Requested!';
      btn.style.background = '#2d8f4e';
      btn.style.boxShadow = '0 4px 20px rgba(45,143,78,.35)';
      showMsg(bookingForm, `Thank you, ${name}! We'll confirm your ${treatment} appointment within 24 hours.`, 'success');
      bookingForm.reset();
    }, 1400);
  });
}

function showMsg(parent, text, type) {
  parent.querySelector('.form-msg')?.remove();
  const msg = document.createElement('p');
  msg.className = 'form-msg';
  msg.textContent = text;
  Object.assign(msg.style, {
    marginTop: '.75rem', padding: '.75rem 1rem', borderRadius: '10px',
    fontSize: '.85rem', textAlign: 'center',
    background: type === 'success' ? 'rgba(45,143,78,.1)' : 'rgba(176,14,9,.1)',
    color: type === 'success' ? '#2d8f4e' : '#B00E09',
    border: `1px solid ${type === 'success' ? 'rgba(45,143,78,.3)' : 'rgba(176,14,9,.3)'}`,
  });
  parent.appendChild(msg);
  if (type === 'error') setTimeout(() => msg.remove(), 4000);
}


/* ── 13. PARALLAX HERO DECO ─────────────────────────────────────────────── */
const decos = document.querySelectorAll('.hero-deco');
window.addEventListener('scroll', () => {
  const scrollY = window.scrollY;
  decos.forEach((deco, i) => {
    const speed = .08 + i * .04;
    deco.style.transform = `translateY(${scrollY * speed}px)`;
  });
}, { passive: true });


/* ── 14. FREEPIK IMAGE FALLBACK ─────────────────────────────────────────── */
// If any Freepik image fails to load, replace with a beautiful gradient
const freepikImgs = document.querySelectorAll('img[src*="freepik"]');
const gradients = [
  'linear-gradient(135deg, #c94a47 0%, #7b1a18 100%)',
  'linear-gradient(135deg, #D18D46 0%, #a86a2a 100%)',
  'linear-gradient(135deg, #FEB8B8 0%, #B00E09 100%)',
  'linear-gradient(135deg, #1a0505 0%, #5a2020 100%)',
  'linear-gradient(135deg, #2d1a1a 0%, #D18D46 100%)',
];
freepikImgs.forEach((img, i) => {
  img.addEventListener('error', () => {
    const div = document.createElement('div');
    div.style.cssText = `width:100%;height:100%;background:${gradients[i % gradients.length]};display:flex;align-items:center;justify-content:center;`;
    div.innerHTML = `<span style="font-size:3rem;opacity:.3">✦</span>`;
    img.replaceWith(div);
  });
});