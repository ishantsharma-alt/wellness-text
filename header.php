<?php
/**
 * Header Template — Geneva Wellness Institute
 * Enhanced with premium animations and interactions
 */
?>

<!-- ── SKIP TO CONTENT (Keyboard Navigation) ────────────────────────── -->
<a href="#main-content" class="skip-to-content">Skip to main content</a>

<!-- ── ANNOUNCEMENT BAR (BEFORE HEADER) ──────────────── -->
<div class="announcement-bar" id="announcement-bar">
  <div class="announcement-inner">
    <span class="announcement-icon">✦</span>
    <span>Exclusive Offer: Get <strong>20% off</strong> your first treatment — Limited time only</span>
    <a href="contact-us.php#contact-form" class="announcement-cta">Book Now →</a>
    <span class="announcement-icon">✦</span>
  </div>
  <button class="announcement-close" id="announcement-close" aria-label="Close announcement">×</button>
</div>

<header class="site-header" id="site-header">
  <nav class="nav container" aria-label="Primary navigation">
    <!-- Logo -->
    <a href="index.php" class="nav-logo" aria-label="Geneva Wellness Institute - Home">
      <div class="logo-emblem">
        <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="24" cy="24" r="22" stroke="currentColor" stroke-width="1.5" opacity="0.4"/>
          <circle cx="24" cy="24" r="16" stroke="currentColor" stroke-width="1"/>
          <path d="M24 8 L24 40 M8 24 L40 24" stroke="currentColor" stroke-width="0.8" opacity="0.3"/>
          <text x="24" y="29" font-family="Lora, serif" font-size="14" font-weight="500" text-anchor="middle" fill="currentColor">GW</text>
        </svg>
      </div>
      <div class="logo-text">
        <span class="logo-name">Geneva</span>
        <span class="logo-tagline">Wellness Institute</span>
      </div>
    </a>

    <!-- Mobile Toggle -->
    <button class="nav-toggle" id="nav-toggle" aria-label="Toggle navigation" aria-expanded="false">
      <span></span>
      <span></span>
      <span></span>
    </button>

    <!-- Navigation Menu -->
    <div class="nav-menu" id="nav-menu">
      <ul class="nav-list">
        <li class="nav-item-has-dropdown">
          <a href="about-us.php" class="nav-link">About Us</a>
        </li>
        <li class="nav-item-has-dropdown">
          <a href="treatments.php" class="nav-link">Treatments <span class="nav-arrow">›</span></a>
          <div class="nav-dropdown">
            <div class="dropdown-inner">
              <div class="dropdown-group">
                <p class="dropdown-label">Face</p>
                <a href="treatments.php#hifu" class="dropdown-link"><span>✦</span> HIFU Lift</a>
                <a href="treatments.php#co2-laser" class="dropdown-link"><span>✦</span> CO2 Laser</a>
                <a href="treatments.php#carbon-laser" class="dropdown-link"><span>✦</span> Carbon Laser</a>
                <a href="treatments.php#hydra-7d" class="dropdown-link"><span>✦</span> HYDRA 7D</a>
              </div>
              <div class="dropdown-group">
                <p class="dropdown-label">Body</p>
                <a href="treatments.php#exilis" class="dropdown-link"><span>✦</span> Exilis</a>
                <a href="treatments.php#hair" class="dropdown-link"><span>✦</span> Hair Restoration</a>
                <a href="treatments.php#pico" class="dropdown-link"><span>✦</span> Pico Laser</a>
              </div>
              <div class="dropdown-promo">
                <p class="promo-tag">✦ New</p>
                <strong>Free Consultation</strong>
                <p>Book your personalized skin assessment today</p>
                <a href="contact-us.php" class="promo-btn">Book Now</a>
              </div>
            </div>
          </div>
        </li>
        <li><a href="gallery.php" class="nav-link">Gallery</a></li>
        <li><a href="testimonials.php" class="nav-link">Testimonials</a></li>
        <li><a href="blog.php" class="nav-link">Blog</a></li>
        <li><a href="contact-us.php" class="nav-link">Contact</a></li>
      </ul>

      <!-- Mobile CTA -->
      <div class="nav-mobile-cta">
        <a href="contact-us.php#contact-form" class="btn btn-primary btn-block">Book Consultation</a>
        <div class="nav-mobile-info">
          <a href="tel:+639XXXXXXXXX">📞 Call Us</a>
          <a href="https://wa.me/639XXXXXXXXX">💬 WhatsApp</a>
        </div>
      </div>
    </div>

    <!-- Desktop CTA -->
    <div class="nav-actions">
      <a href="tel:+639XXXXXXXXX" class="nav-phone" aria-label="Call us">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1-9.4 0-17-7.6-17-17 0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.3 0 .7-.2 1L6.6 10.8z"/></svg>
      </a>
      <a href="contact-us.php#contact-form" class="nav-cta-btn">
        <span>Book Consultation</span>
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      </a>
    </div>
  </nav>

  <!-- Nav Progress Line -->
  <div class="nav-scroll-progress" id="nav-progress"></div>
</header>

<style>
/* ── ANNOUNCEMENT BAR ─────────────────────────────────── */
.announcement-bar {
  background: linear-gradient(90deg, var(--primary) 0%, #8a0b07 50%, var(--primary) 100%);
  background-size: 200% 100%;
  animation: announcementShimmer 4s ease infinite;
  color: white;
  font-size: 0.78rem;
  padding: 0.55rem 1rem;
  text-align: center;  position: relative;
  z-index: 999;  position: relative;
  z-index: 1001;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 0.75rem;
}
@keyframes announcementShimmer {
  0%, 100% { background-position: 0% 0%; }
  50% { background-position: 100% 0%; }
}
.announcement-inner {
  display: flex;
  align-items: center;
  gap: 0.75rem;
  flex-wrap: wrap;
  justify-content: center;
}
.announcement-icon {
  color: var(--accent-gold);
  animation: pulse 2s ease infinite;
}
@keyframes pulse {
  0%, 100% { opacity: 1; }
  50% { opacity: 0.5; }
}
.announcement-cta {
  color: var(--accent-gold) !important;
  font-weight: 700;
  text-decoration: none;
  border-bottom: 1px solid rgba(202, 174, 95, 0.4);
  transition: border-color 0.2s;
}
.announcement-cta:hover { border-color: var(--accent-gold); }
.announcement-close {
  position: absolute;
  right: 1rem;
  top: 50%;
  transform: translateY(-50%);
  background: rgba(255,255,255,0.15);
  border: none;
  color: white;
  width: 22px;
  height: 22px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  font-size: 1rem;
  line-height: 1;
  transition: background 0.2s;
}
.announcement-close:hover { background: rgba(255,255,255,0.3); }
.announcement-bar.hidden { display: none; }

/* ── HEADER ───────────────────────────────────────────── */
.site-header {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 1000;
  transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
  background: linear-gradient(90deg, var(--primary) 0%, #8a0b07 50%, var(--primary) 100%);
}
.site-header.scrolled {
  background: rgba(255, 255, 255, 0.97);
  backdrop-filter: blur(20px);
  box-shadow: 0 2px 40px rgba(0,0,0,0.08);
}
.site-header.scrolled.no-bar {
  top: 0;
}

.nav {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  height: 80px;
  transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}
.site-header.scrolled .nav { height: 80px; }

/* ── LOGO ─────────────────────────────────────────────── */
.nav-logo {
  display: flex;
  align-items: center;
  gap: 0.75rem;
  text-decoration: none;
  color: white;
  transition: all 0.3s ease;
  margin-right: auto;
}
.site-header.scrolled .nav-logo { color: var(--black); }
.logo-emblem {
  width: 42px;
  height: 42px;
  flex-shrink: 0;
  transition: transform 0.6s cubic-bezier(0.34, 1.56, 0.64, 1);
}
.nav-logo:hover .logo-emblem { transform: rotate(15deg) scale(1.1); }
.logo-text {
  display: flex;
  flex-direction: column;
  line-height: 1.15;
}
.logo-name {
  font-family: "Fraunces", serif;
  font-size: 1.35rem;
  font-weight: 600;
  letter-spacing: -0.01em;
}
.logo-tagline {
  font-size: 0.58rem;
  letter-spacing: 0.18em;
  text-transform: uppercase;
  opacity: 0.65;
  font-family: "Inter", sans-serif;
}

/* ── NAV LINKS ────────────────────────────────────────── */
.nav-menu {
  display: flex;
  align-items: center;
}
.nav-list {
  display: flex;
  align-items: center;
  gap: 0;
  list-style: none;
}
.nav-list li { position: relative; }
.nav-link {
  display: block;
  padding: 0.6rem 0.9rem;
  color: rgba(255,255,255,0.88);
  font-size: 0.875rem;
  font-weight: 500;
  text-decoration: none;
  position: relative;
  transition: color 0.3s ease;
  white-space: nowrap;
}
.site-header.scrolled .nav-link { color: var(--black); }
.nav-link::after {
  content: '';
  position: absolute;
  bottom: 0.3rem;
  left: 0.9rem;
  right: 0.9rem;
  height: 1.5px;
  background: var(--accent-gold);
  transform: scaleX(0);
  transform-origin: right;
  transition: transform 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}
.nav-link:hover::after { transform: scaleX(1); transform-origin: left; }
.site-header.scrolled .nav-link::after { background: var(--primary); }
.nav-link:hover { color: var(--accent-gold); }
.site-header.scrolled .nav-link:hover { color: var(--primary); }
.nav-arrow { font-size: 0.7rem; opacity: 0.6; transition: transform 0.2s; }
.nav-item-has-dropdown:hover .nav-arrow { transform: rotate(90deg); }

/* ── MEGA DROPDOWN ────────────────────────────────────── */
.nav-dropdown {
  position: absolute;
  top: 100%;
  left: 50%;
  transform: translateX(-50%) translateY(0);
  background: white;
  border-radius: 20px;
  box-shadow: 0 20px 60px rgba(0,0,0,0.15), 0 0 0 1px rgba(0,0,0,0.05);
  min-width: 480px;
  opacity: 0;
  visibility: hidden;
  pointer-events: none;
  transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
  z-index: 100;
  margin-top: -1px;
}
.nav-item-has-dropdown:hover .nav-dropdown {
  opacity: 1;
  visibility: visible;
  pointer-events: all;
  transform: translateX(-50%) translateY(0);
}
.dropdown-inner {
  display: grid;
  grid-template-columns: 1fr 1fr auto;
  gap: 0;
  padding: 1.5rem;
}
.dropdown-group { padding: 0.5rem; }
.dropdown-label {
  font-size: 0.65rem;
  font-weight: 800;
  letter-spacing: 0.15em;
  text-transform: uppercase;
  color: var(--muted);
  margin-bottom: 0.75rem;
}
.dropdown-link {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  padding: 0.4rem 0;
  font-size: 0.875rem;
  color: var(--black);
  text-decoration: none;
  transition: all 0.2s;
  border-radius: 6px;
}
.dropdown-link span { color: var(--accent-gold); font-size: 0.5rem; }
.dropdown-link:hover { color: var(--primary); padding-left: 0.5rem; }
.dropdown-promo {
  background: linear-gradient(135deg, rgba(176,14,9,0.05), rgba(202,174,95,0.1));
  border: 1px solid rgba(202,174,95,0.2);
  border-radius: 14px;
  padding: 1.25rem;
  margin-left: 0.5rem;
  min-width: 150px;
}
.promo-tag {
  font-size: 0.65rem;
  font-weight: 800;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  color: var(--primary);
  margin-bottom: 0.5rem;
}
.dropdown-promo strong {
  display: block;
  font-family: "Fraunces", serif;
  font-size: 1rem;
  margin-bottom: 0.4rem;
  color: var(--black);
}
.dropdown-promo p { font-size: 0.78rem; color: var(--muted); margin-bottom: 1rem; }
.promo-btn {
  display: inline-block;
  padding: 0.5rem 1rem;
  background: var(--primary);
  color: white;
  font-size: 0.78rem;
  font-weight: 700;
  border-radius: 20px;
  text-decoration: none;
  transition: all 0.2s;
}
.promo-btn:hover { background: var(--primary-dark); transform: translateY(-2px); }

/* ── NAV ACTIONS ──────────────────────────────────────── */
.nav-actions {
  display: flex;
  align-items: center;
  gap: 0.75rem;
  margin-left: 1rem;
}
.nav-phone {
  width: 38px;
  height: 38px;
  border-radius: 50%;
  border: 1.5px solid rgba(255,255,255,0.35);
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  text-decoration: none;
  transition: all 0.3s;
}
.site-header.scrolled .nav-phone {
  border-color: rgba(0,0,0,0.15);
  color: var(--black);
}
.nav-phone:hover {
  background: rgba(255,255,255,0.15);
  transform: scale(1.05);
}
.nav-cta-btn {
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
  padding: 0.65rem 1.4rem;
  background: white;
  color: var(--primary);
  font-size: 0.83rem;
  font-weight: 700;
  border-radius: 30px;
  text-decoration: none;
  transition: all 0.35s cubic-bezier(0.25, 0.46, 0.45, 0.94);
  box-shadow: 0 4px 15px rgba(0,0,0,0.15);
  white-space: nowrap;
}
.site-header.scrolled .nav-cta-btn {
  background: var(--primary);
  color: white;
  box-shadow: 0 4px 20px rgba(176,14,9,0.35);
}
.nav-cta-btn:hover {
  transform: translateY(-2px);
  box-shadow: 0 8px 25px rgba(0,0,0,0.2);
}
.site-header.scrolled .nav-cta-btn:hover {
  box-shadow: 0 8px 25px rgba(176,14,9,0.45);
}
.nav-cta-btn svg { transition: transform 0.3s; }
.nav-cta-btn:hover svg { transform: translateX(3px); }

/* ── SCROLL PROGRESS ──────────────────────────────────── */
.nav-scroll-progress {
  height: 2px;
  background: linear-gradient(90deg, var(--primary), var(--accent-gold));
  width: 0%;
  transition: width 0.1s linear;
  position: absolute;
  bottom: 0;
  left: 0;
}

/* ── MOBILE TOGGLE ────────────────────────────────────── */
.nav-toggle {
  display: none;
  flex-direction: column;
  gap: 5px;
  padding: 0.6rem;
  background: rgba(255,255,255,0.1);
  border: none;
  cursor: pointer;
  margin-left: auto;
  border-radius: 6px;
  transition: all 0.3s ease;
  z-index: 1001;
}
.nav-toggle:hover {
  background: rgba(255,255,255,0.2);
}
.site-header.scrolled .nav-toggle {
  background: rgba(0,0,0,0.05);
}
.site-header.scrolled .nav-toggle:hover {
  background: rgba(0,0,0,0.08);
}
.nav-toggle span {
  display: block;
  width: 24px;
  height: 2.5px;
  background: white;
  border-radius: 2px;
  transition: all 0.35s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}
.site-header.scrolled .nav-toggle span { background: var(--black); }
.nav-toggle[aria-expanded="true"] span:nth-child(1) { transform: translateY(8px) rotate(45deg); }
.nav-toggle[aria-expanded="true"] span:nth-child(2) { opacity: 0; transform: scaleX(0); }
.nav-toggle[aria-expanded="true"] span:nth-child(3) { transform: translateY(-8px) rotate(-45deg); }

/* ── MOBILE NAV ───────────────────────────────────────── */
.nav-mobile-cta {
  display: none;
  padding: 1.5rem;
  border-top: 1px solid var(--border);
  margin-top: 1rem;
  flex-direction: column;
  gap: 1rem;
}
.nav-mobile-info {
  display: flex;
  gap: 1rem;
  justify-content: center;
}
.nav-mobile-info a {
  font-size: 0.85rem;
  color: var(--muted);
  text-decoration: none;
  transition: all 0.2s ease;
}
.nav-mobile-info a:hover {
  color: var(--accent-gold);
}

/* ── RESPONSIVE ───────────────────────────────────────── */
@media (max-width: 1024px) {
  .nav-toggle { display: flex; }
  .nav-actions { display: none; }
  .nav-menu {
    display: none;
    position: fixed;
    top: 80px;
    left: 0;
    right: 0;
    bottom: 0;
    background: white;
    backdrop-filter: blur(20px);
    flex-direction: column;
    align-items: stretch;
    padding: 0;
    box-shadow: 0 20px 60px rgba(0,0,0,0.12);
    overflow-y: auto;
    z-index: 999;
    max-height: calc(100vh - 80px);
    overflow-y: auto;
  }
  .nav-menu.active { display: flex; }
  .nav-list { flex-direction: column; padding: 1rem 0; }
  .nav-link { color: var(--black); padding: 0.75rem 1.5rem; font-size: 1rem; }
  .nav-link::after { display: none; }
  .nav-dropdown { position: static; transform: none; opacity: 1; visibility: visible; pointer-events: all; box-shadow: none; border-radius: 0; background: rgba(248,244,240,0.8); margin: 0; min-width: 0; }
  .dropdown-inner { grid-template-columns: 1fr 1fr; gap: 0; padding: 1rem 1.5rem; }
  .dropdown-promo { display: none; }
  .nav-mobile-cta { display: flex; }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', () => {
  // Announcement bar close
  const closeBtn = document.getElementById('announcement-close');
  const bar = document.querySelector('.announcement-bar');
  if (closeBtn && bar) {
    closeBtn.addEventListener('click', () => {
      bar.style.height = bar.offsetHeight + 'px';
      bar.style.overflow = 'hidden';
      bar.style.transition = 'height 0.3s ease, opacity 0.3s ease';
      requestAnimationFrame(() => {
        bar.style.height = '0';
        bar.style.opacity = '0';
        setTimeout(() => bar.remove(), 300);
      });
    });
  }

  // Mobile nav toggle
  const toggle = document.getElementById('nav-toggle');
  const menu = document.getElementById('nav-menu');
  if (toggle && menu) {
    toggle.addEventListener('click', () => {
      const expanded = toggle.getAttribute('aria-expanded') === 'true';
      toggle.setAttribute('aria-expanded', !expanded);
      menu.classList.toggle('active', !expanded);
      document.body.style.overflow = expanded ? '' : 'hidden';
    });
    
    // Close menu on link click
    const navLinks = menu.querySelectorAll('a');
    navLinks.forEach(link => {
      link.addEventListener('click', () => {
        toggle.setAttribute('aria-expanded', 'false');
        menu.classList.remove('active');
        document.body.style.overflow = '';
      });
    });
    
  // Scroll progress
  const progress = document.getElementById('nav-progress');
  if (progress) {
    window.addEventListener('scroll', () => {
      const doc = document.documentElement;
      const scrolled = (doc.scrollTop / (doc.scrollHeight - doc.clientHeight)) * 100;
      progress.style.width = scrolled + '%';
    }, { passive: true });
  }
});
</script>