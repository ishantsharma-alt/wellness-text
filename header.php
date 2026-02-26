<?php
/**
 * Header Template — Geneva Wellness Institute
 * Fixed: Mobile flyout slides from LEFT, hamburger/X toggle, logo emblem color
 */
?>

<!-- ── SKIP TO CONTENT ─────────────────────────────────── -->
<a href="#main-content" class="skip-to-content">Skip to main content</a>

<header class="site-header" id="site-header">
  <nav class="nav container" aria-label="Primary navigation">

    <!-- Logo -->
    <a href="index.php" class="nav-logo" aria-label="Geneva Wellness Institute - Home">
        <img src="img/geneva-logo.svg">
    </a>

    <!-- Desktop Nav Links -->
    <ul class="nav-list">
      <li><a href="about-us.php" class="nav-link">About Us</a></li>
      <li class="nav-item-has-dropdown">
        <a href="treatments.php" class="nav-link">Treatments <span class="nav-arrow">›</span></a>
        <div class="nav-dropdown">
          <div class="dropdown-inner">
            <div class="dropdown-group">
              <p class="dropdown-label">Face</p>
              <a href="treatments.php#hifu" class="dropdown-link"><span>✦</span> HIFU Lift</a>
              <a href="treatments.php#co2" class="dropdown-link"><span>✦</span> CO2 Laser</a>
              <a href="treatments.php#carbon" class="dropdown-link"><span>✦</span> Carbon Laser</a>
              <a href="treatments.php#hydrafacial" class="dropdown-link"><span>✦</span> HYDRA 7D</a>
            </div>
            <div class="dropdown-group">
              <p class="dropdown-label">Body</p>
              <a href="treatments.php#exilis-face" class="dropdown-link"><span>✦</span> Exilis</a>
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

    <!-- Desktop CTA -->
    <div class="nav-actions">
      <a href="tel:+639XXXXXXXXX" class="nav-phone" aria-label="Call us">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
          <path d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1-9.4 0-17-7.6-17-17 0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.3 0 .7-.2 1L6.6 10.8z"/>
        </svg>
      </a>
      <a href="contact-us.php#contact-form" class="nav-cta-btn">
        <span>Book Consultation</span>
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <path d="M5 12h14M12 5l7 7-7 7"/>
        </svg>
      </a>
    </div>

    <!-- Hamburger (mobile/tablet only) -->
    <button class="nav-toggle" id="nav-toggle"
            aria-label="Open navigation menu"
            aria-expanded="false"
            aria-controls="mobile-flyout">
      <span></span>
      <span></span>
      <span></span>
    </button>

  </nav>

  <!-- Scroll Progress Bar -->
  <div class="nav-scroll-progress" id="nav-progress"></div>
</header>

<!-- ════════════════════════════════════════════════════
     MOBILE FLYOUT — lives OUTSIDE <header> so it can
     overlay the full viewport height
════════════════════════════════════════════════════ -->

<!-- Dark overlay behind flyout -->
<div class="mobile-overlay" id="mobile-overlay" aria-hidden="true"></div>

<!-- Slide-in panel -->
<div class="mobile-flyout" id="mobile-flyout"
     role="dialog" aria-modal="true" aria-label="Navigation menu">

  <!-- Panel Header -->
  <div class="flyout-header">
    <a href="index.php" class="flyout-logo" tabindex="-1">
      <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" width="30" height="30">
        <circle cx="24" cy="24" r="22" stroke="currentColor" stroke-width="1.5" opacity="0.5"/>
        <circle cx="24" cy="24" r="16" stroke="currentColor" stroke-width="1"/>
        <text x="24" y="29" font-family="Lora,serif" font-size="14" font-weight="500" text-anchor="middle" fill="currentColor">GW</text>
      </svg>
      <span>Geneva Wellness</span>
    </a>
    <button class="flyout-close" id="flyout-close" aria-label="Close menu">
      <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
        <path d="M18 6L6 18M6 6l12 12"/>
      </svg>
    </button>
  </div>

  <!-- Panel Nav -->
  <nav class="flyout-nav" aria-label="Mobile navigation">
    <ul class="flyout-list">
      <li>
        <a href="about-us.php" class="flyout-link">About Us</a>
      </li>

      <!-- Treatments with accordion sub-menu -->
      <li class="flyout-has-sub">
        <button class="flyout-link flyout-toggle-sub" aria-expanded="false">
          Treatments
          <svg class="sub-arrow" width="16" height="16" viewBox="0 0 24 24" fill="none"
               stroke="currentColor" stroke-width="2" stroke-linecap="round">
            <path d="M9 18l6-6-6-6"/>
          </svg>
        </button>
        <ul class="flyout-sub" aria-hidden="true">
          <li class="flyout-sub-label">Face</li>
          <li><a href="treatments.php#hifu"        class="flyout-sub-link">✦ HIFU Lift</a></li>
          <li><a href="treatments.php#co2-laser"   class="flyout-sub-link">✦ CO2 Laser</a></li>
          <li><a href="treatments.php#carbon-laser" class="flyout-sub-link">✦ Carbon Laser</a></li>
          <li><a href="treatments.php#hydra-7d"    class="flyout-sub-link">✦ HYDRA 7D</a></li>
          <li class="flyout-sub-label">Body</li>
          <li><a href="treatments.php#exilis"      class="flyout-sub-link">✦ Exilis</a></li>
          <li><a href="treatments.php#hair"        class="flyout-sub-link">✦ Hair Restoration</a></li>
          <li><a href="treatments.php#pico"        class="flyout-sub-link">✦ Pico Laser</a></li>
        </ul>
      </li>

      <li><a href="gallery.php"      class="flyout-link">Gallery</a></li>
      <li><a href="testimonials.php" class="flyout-link">Testimonials</a></li>
      <li><a href="blog.php"         class="flyout-link">Blog</a></li>
      <li><a href="contact-us.php"   class="flyout-link">Contact</a></li>
    </ul>
  </nav>

  <!-- Panel CTA -->
  <div class="flyout-cta">
    <a href="contact-us.php#contact-form" class="flyout-cta-btn">Book Consultation</a>
    <div class="flyout-cta-links">
      <a href="tel:+639XXXXXXXXX">📞 Call Us</a>
      <a href="https://wa.me/639XXXXXXXXX">💬 WhatsApp</a>
    </div>
  </div>

</div><!-- /.mobile-flyout -->


<style>
/* ══════════════════════════════════════════════════════
   SITE HEADER
══════════════════════════════════════════════════════ */
.site-header {
  position: fixed;
  top: 0; left: 0; right: 0;
  z-index: 1001;
  background: linear-gradient(90deg, var(--primary) 0%, #8a0b07 50%, var(--primary) 100%);
  transition: background .4s cubic-bezier(.25,.46,.45,.94),
              box-shadow .4s ease;
}
.site-header.scrolled .nav-logo img {
  filter: brightness(0) saturate(100%);
}
.site-header .nav-logo{
   width:60px;
}
.site-header.scrolled {
  background: rgba(255,255,255,.97);
  backdrop-filter: blur(20px);
  box-shadow: 0 2px 40px rgba(0,0,0,.08);
}
.nav {
  display: flex;
  align-items: center;
  height: 80px;
  gap: .5rem;
}

/* ── LOGO ──────────────────────────────────────────── */
.nav-logo {
  display: flex;
  align-items: center;
  gap: .75rem;
  text-decoration: none;
  color: #fff;
  margin-right: auto;
  transition: color .3s;
}
.site-header.scrolled .nav-logo { color: var(--black); }
/* Keep emblem red (not black) when header turns white */
.site-header.scrolled .logo-emblem { color: var(--primary); }

.logo-emblem {
  width: 42px; height: 42px;
  flex-shrink: 0;
  transition: transform .5s cubic-bezier(.34,1.56,.64,1);
}
.nav-logo:hover .logo-emblem { transform: rotate(15deg) scale(1.1); }
.logo-text { display: flex; flex-direction: column; line-height: 1.15; }
.logo-name { font-family:"Fraunces",serif; font-size:1.35rem; font-weight:600; letter-spacing:-.01em; }
.logo-tagline { font-size:.58rem; letter-spacing:.18em; text-transform:uppercase; opacity:.65; font-family:"Inter",sans-serif; }

/* ── DESKTOP NAV LIST ──────────────────────────────── */
.nav-list {
  display: flex;
  align-items: center;
  list-style: none;
  margin: 0; padding: 0;
  gap: 0;
}
.nav-list li { position: relative; }
.nav-link {
  display: block;
  padding: .6rem .9rem;
  color: rgba(255,255,255,.88);
  font-size: .875rem; font-weight: 500;
  text-decoration: none;
  white-space: nowrap;
  position: relative;
  transition: color .3s;
}
.site-header.scrolled .nav-link { color: var(--black); }
.nav-link:hover { color: var(--accent-gold); }
.site-header.scrolled .nav-link:hover { color: var(--primary); }
.nav-link::after {
  content:'';
  position:absolute; bottom:.3rem;
  left:.9rem; right:.9rem;
  height:1.5px;
  background: var(--accent-gold);
  transform:scaleX(0); transform-origin:right;
  transition:transform .3s cubic-bezier(.25,.46,.45,.94);
}
.nav-link:hover::after { transform:scaleX(1); transform-origin:left; }
.site-header.scrolled .nav-link::after { background: var(--primary); }
.nav-arrow { font-size:.7rem; opacity:.6; transition:transform .2s; display:inline-block; }
.nav-item-has-dropdown:hover .nav-arrow { transform:rotate(90deg); }

/* ── DESKTOP MEGA DROPDOWN ──────────────────────────── */
.nav-dropdown {
  position: absolute;
  top: 100%; left: 50%;
  transform: translateX(-50%) translateY(8px);
  background: #fff;
  border-radius: 20px;
  box-shadow: 0 20px 60px rgba(0,0,0,.15), 0 0 0 1px rgba(0,0,0,.05);
  min-width: 480px;
  opacity: 0; visibility: hidden; pointer-events: none;
  transition: all .3s cubic-bezier(.34,1.56,.64,1);
  z-index: 200;
}
.nav-item-has-dropdown:hover .nav-dropdown {
  opacity:1; visibility:visible; pointer-events:all;
  transform:translateX(-50%) translateY(0);
}
.dropdown-inner { display:grid; grid-template-columns:1fr 1fr auto; padding:1.5rem; gap:0; }
.dropdown-group { padding:.5rem; }
.dropdown-label { font-size:.65rem; font-weight:800; letter-spacing:.15em; text-transform:uppercase; color:var(--muted); margin-bottom:.75rem; }
.dropdown-link { display:flex; align-items:center; gap:.5rem; padding:.4rem 0; font-size:.875rem; color:var(--black); text-decoration:none; transition:all .2s; border-radius:6px; }
.dropdown-link span { color:var(--accent-gold); font-size:.5rem; }
.dropdown-link:hover { color:var(--primary); padding-left:.5rem; }
.dropdown-promo { background:linear-gradient(135deg,rgba(176,14,9,.05),rgba(202,174,95,.1)); border:1px solid rgba(202,174,95,.2); border-radius:14px; padding:1.25rem; margin-left:.5rem; min-width:150px; }
.promo-tag { font-size:.65rem; font-weight:800; letter-spacing:.1em; text-transform:uppercase; color:var(--primary); margin-bottom:.5rem; }
.dropdown-promo strong { display:block; font-family:"Fraunces",serif; font-size:1rem; margin-bottom:.4rem; color:var(--black); }
.dropdown-promo p { font-size:.78rem; color:var(--muted); margin-bottom:1rem; }
.promo-btn { display:inline-block; padding:.5rem 1rem; background:var(--primary); color:#fff; font-size:.78rem; font-weight:700; border-radius:20px; text-decoration:none; transition:all .2s; }
.promo-btn:hover { background:var(--primary-dark); transform:translateY(-2px); }

/* ── DESKTOP NAV ACTIONS ──────────────────────────── */
.nav-actions { display:flex; align-items:center; gap:.75rem; margin-left:1rem; }
.nav-phone {
  width:38px; height:38px; border-radius:50%;
  border:1.5px solid rgba(255,255,255,.35);
  display:flex; align-items:center; justify-content:center;
  color:#fff; text-decoration:none; transition:all .3s;
}
.site-header.scrolled .nav-phone { border-color:rgba(0,0,0,.15); color:var(--black); }
.nav-phone:hover { background:rgba(255,255,255,.15); transform:scale(1.05); }
.nav-cta-btn {
  display:inline-flex; align-items:center; gap:.5rem;
  padding:.65rem 1.4rem;
  background:#fff; color:var(--primary);
  font-size:.83rem; font-weight:700; border-radius:30px;
  text-decoration:none; white-space:nowrap;
  box-shadow:0 4px 15px rgba(0,0,0,.15);
  transition:all .35s cubic-bezier(.25,.46,.45,.94);
}
.site-header.scrolled .nav-cta-btn { background:var(--primary); color:#fff; box-shadow:0 4px 20px rgba(176,14,9,.35); }
.nav-cta-btn:hover { transform:translateY(-2px); box-shadow:0 8px 25px rgba(0,0,0,.2); }
.nav-cta-btn svg { transition:transform .3s; }
.nav-cta-btn:hover svg { transform:translateX(3px); }

/* Scroll progress bar */
.nav-scroll-progress {
  height:2px;
  background:linear-gradient(90deg,var(--primary),var(--accent-gold));
  width:0%;
  position:absolute; bottom:0; left:0;
  transition:width .1s linear;
}

/* ══════════════════════════════════════════════════════
   HAMBURGER BUTTON  (hidden on desktop)
══════════════════════════════════════════════════════ */
.nav-toggle {
  display: none;          /* shown via media query below */
  flex-direction: column;
  justify-content: center;
  align-items: center;
  gap: 5px;
  width: 44px; height: 44px;
  background: rgba(255,255,255,.12);
  border: 1.5px solid rgba(255,255,255,.28);
  border-radius: 8px;
  cursor: pointer;
  flex-shrink: 0;
  transition: background .25s, border-color .25s;
  z-index: 1001;
  margin-left: auto;
}
.site-header.scrolled .nav-toggle {
  background: rgba(0,0,0,.05);
  border-color: rgba(0,0,0,.14);
}
.nav-toggle:hover { background: rgba(255,255,255,.24); }
.site-header.scrolled .nav-toggle:hover { background: rgba(0,0,0,.09); }

.nav-toggle span {
  display: block;
  width: 22px; height: 2px;
  background: #fff;
  border-radius: 2px;
  transition: all .35s cubic-bezier(.25,.46,.45,.94);
  transform-origin: center;
}
.site-header.scrolled .nav-toggle span { background: var(--black); }

/* Animated → X when open */
.nav-toggle[aria-expanded="true"] span:nth-child(1) { transform: translateY(7px) rotate(45deg); }
.nav-toggle[aria-expanded="true"] span:nth-child(2) { opacity:0; transform:scaleX(0); }
.nav-toggle[aria-expanded="true"] span:nth-child(3) { transform: translateY(-7px) rotate(-45deg); }

/* ══════════════════════════════════════════════════════
   DARK OVERLAY
══════════════════════════════════════════════════════ */
.mobile-overlay {
  display: none;
  position: fixed; inset: 0;
  background: rgba(0,0,0,.52);
  z-index: 999;
  opacity: 0;
  transition: opacity .35s ease;
  backdrop-filter: blur(3px);
  pointer-events: none;
}
.mobile-overlay.active { 
  display: block; 
  opacity: 1; 
  pointer-events: all;
}

/* ══════════════════════════════════════════════════════
   MOBILE FLYOUT  — slides in from LEFT
══════════════════════════════════════════════════════ */
.mobile-flyout {
  position: fixed;
  top: 0; left: 0; bottom: 0;
  width: min(320px, 88vw);
  background: #fff;
  z-index: 1000;
  display: flex;
  flex-direction: column;
  transform: translateX(-100%);
  transition: transform .38s cubic-bezier(.25,.46,.45,.94);
  box-shadow: 4px 0 40px rgba(0,0,0,.18);
  overflow-y: auto;
  overflow-x: hidden;
  visibility: visible !important;
  will-change: transform;
}
.mobile-flyout.active { 
  transform: translateX(0) !important;
  left: 0 !important;
}

/* Backup for older browsers that don't support transform */
@supports not (transform: translateX(0)) {
  .mobile-flyout {
    left: -100vw;
  }
  .mobile-flyout.active {
    left: 0 !important;
  }
}

/* Flyout header row */
.flyout-header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 1.2rem 1.4rem;
  background: linear-gradient(135deg, var(--primary) 0%, #8a0b07 100%);
  flex-shrink: 0;
  visibility: visible !important;
}
.flyout-logo {
  display: flex; align-items: center; gap: .6rem;
  text-decoration: none; color: #fff;
  font-family:"Fraunces",serif; font-size:1.1rem; font-weight:600;
}
.flyout-close {
  width:36px; height:36px; border-radius:50%;
  border:1.5px solid rgba(255,255,255,.35);
  background:rgba(255,255,255,.1);
  color:#fff;
  display:flex; align-items:center; justify-content:center;
  cursor:pointer; flex-shrink:0;
  transition:background .2s;
}
.flyout-close:hover { background:rgba(255,255,255,.28); }

/* Flyout nav body */
.flyout-nav { 
  flex: 1; 
  padding: .5rem 0;
  display: flex !important;
  flex-direction: column;
  width: 100%;
  overflow-y: auto;
}
.flyout-list { 
  list-style: none; 
  margin: 0; 
  padding: 0;
  display: flex !important;
  flex-direction: column;
  width: 100%;
}

/* Each top-level item */
.flyout-list li {
  display: flex !important;
  flex-direction: column;
  width: 100%;
}

.flyout-link {
  display: flex !important;
  align-items: center;
  justify-content: space-between;
  width: 100%;
  padding: .88rem 1.5rem;
  font-size: .975rem; 
  font-weight: 500;
  color: var(--black);
  text-decoration: none;
  background: none !important; 
  border: none !important;
  cursor: pointer; 
  text-align: left;
  border-bottom: 1px solid rgba(0,0,0,.06);
  transition: background .2s, color .2s, padding-left .2s;
  visibility: visible !important;
  -webkit-appearance: none;
  appearance: none;
}
.flyout-link:hover {
  background: rgba(176,14,9,.04);
  color: var(--primary);
  padding-left: 2rem;
}

/* Sub-arrow */
.sub-arrow { flex-shrink:0; transition:transform .3s ease; }
.flyout-toggle-sub[aria-expanded="true"] .sub-arrow { transform:rotate(90deg); }

/* Treatments accordion */
.flyout-sub {
  list-style:none; margin:0; padding:0;
  max-height:0; overflow:hidden;
  background:rgba(248,244,240,.8);
  transition:max-height .4s ease;
}
.flyout-sub.open { max-height:600px; }
.flyout-sub-label {
  padding:.55rem 2rem .2rem;
  font-size:.62rem; font-weight:800; letter-spacing:.15em;
  text-transform:uppercase; color:var(--muted,#666);
}
.flyout-sub-link {
  display:block;
  padding:.6rem 2rem .6rem 2.5rem;
  font-size:.875rem; color:#444;
  text-decoration:none;
  border-bottom:1px solid rgba(0,0,0,.04);
  transition:color .2s, padding-left .2s;
}
.flyout-sub-link:hover { color:var(--primary); padding-left:3rem; }

/* Flyout CTA footer */
.flyout-cta {
  padding:1.4rem;
  border-top:1px solid rgba(0,0,0,.08);
  background:var(--cream,#f9f6f1);
  flex-shrink:0;
}
.flyout-cta-btn {
  display:block; width:100%;
  padding:.82rem;
  background:var(--primary); color:#fff;
  font-weight:700; font-size:.9rem;
  text-align:center; border-radius:30px;
  text-decoration:none; margin-bottom:1rem;
  transition:background .2s, transform .2s;
}
.flyout-cta-btn:hover { background:var(--primary-dark,#8a0708); transform:translateY(-2px); }
.flyout-cta-links { display:flex; justify-content:center; gap:1.5rem; }
.flyout-cta-links a { font-size:.85rem; color:var(--muted,#666); text-decoration:none; transition:color .2s; }
.flyout-cta-links a:hover { color:var(--primary); }

/* ══════════════════════════════════════════════════════
   RESPONSIVE — ≤ 1024 px : show hamburger, hide desktop nav
══════════════════════════════════════════════════════ */
@media (max-width: 1024px) {
  .nav-list    { display: none; }
  .nav-actions { display: none; }
  .nav-toggle  { display: flex; }
  /* Push logo left, toggle right */
  .nav-logo { margin-right: auto; }
}

/* Skip link */
.skip-to-content {
  position:absolute; top:-40px; left:0;
  background:var(--primary); color:#fff;
  padding:8px 16px; font-size:.9rem; font-weight:600;
  text-decoration:none; z-index:10000;
}
.skip-to-content:focus { top:0; }

/* ══════════════════════════════════════════════════════
   MOBILE RESPONSIVE — enhanced for smaller screens
══════════════════════════════════════════════════════ */
@media (max-width: 768px) {
  .site-header {
    z-index: 1001;
  }
  
  .nav {
    height: 60px;
  }
  
  .site-header.scrolled .nav {
    height: 60px;
  }
  
  .logo-name {
    font-size: 1.1rem;
  }
  
  .logo-tagline {
    font-size: 0.5rem;
  }
  
  .logo-emblem {
    width: 40px;
    height: 40px;
  }
}

@media (max-width: 480px) {
  .site-header {
    z-index: 1001;
  }
  
  .nav {
    height: 55px;
    padding: 0 0.5rem;
  }
  
  .site-header.scrolled .nav {
    height: 55px;
  }
  
  .logo-name {
    font-size: 0.95rem;
  }
  
  .logo-tagline {
    font-size: 0.45rem;
  }
  
  .logo-emblem {
    width: 35px;
    height: 35px;
  }
  
  .logo-text {
    display: none;
  }
  
  .nav-toggle {
    width: 40px;
    height: 40px;
    margin: 0 0.5rem;
  }
  
  .nav-toggle span {
    width: 20px;
  }
  
  .mobile-flyout {
    width: min(280px, 85vw);
  }
  
  .flyout-header {
    padding: 1rem;
  }
  
  .flyout-link {
    padding: 0.75rem 1.25rem;
    font-size: 0.9rem;
  }
  
  .flyout-sub-link {
    padding: 0.5rem 1.75rem 0.5rem 2rem;
    font-size: 0.8rem;
  }
}
</style>

<script>
/* ══════════════════════════════════════════════════════
   HEADER — self-contained IIFE
   Safe alongside components.js & enhancements.js:
   - Only touches IDs defined in this file
   - Does NOT redeclare any global variables
   - Uses a flag to prevent double-init
══════════════════════════════════════════════════════ */
(function () {
  'use strict';

  if (window.__gwiHeaderInit) return;   // prevent double-init if PHP partial is included twice
  window.__gwiHeaderInit = true;

  function init() {
    var header   = document.getElementById('site-header');
    var toggle   = document.getElementById('nav-toggle');
    var flyout   = document.getElementById('mobile-flyout');
    var overlay  = document.getElementById('mobile-overlay');
    var closeBtn = document.getElementById('flyout-close');
    var progress = document.getElementById('nav-progress');

    console.log('✓ Header init:', { found: !!header, toggle: !!toggle, flyout: !!flyout, overlay: !!overlay });

    /* ─── Sticky header + scroll progress ─────── */
    function onScroll() {
      if (header) header.classList.toggle('scrolled', window.scrollY > 20);
      if (progress) {
        var d = document.documentElement;
        progress.style.width = ((d.scrollTop / (d.scrollHeight - d.clientHeight)) * 100) + '%';
      }
    }
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();

    /* ─── Flyout open / close helpers ─────────── */
    function openFlyout() {
      if (!flyout || !toggle || !overlay) return;
      flyout.classList.add('active');
      overlay.classList.add('active');
      toggle.setAttribute('aria-expanded', 'true');
      toggle.setAttribute('aria-label', 'Close navigation menu');
      document.body.style.overflow = 'hidden';
      console.log('✓ Flyout opened. Classes:', flyout.className);
      /* focus first focusable element for a11y */
      var first = flyout.querySelector('button, a');
      if (first) { setTimeout(function(){ first.focus(); }, 50); }
    }

    function closeFlyout() {
      if (!flyout || !toggle || !overlay) return;
      flyout.classList.remove('active');
      overlay.classList.remove('active');
      toggle.setAttribute('aria-expanded', 'false');
      toggle.setAttribute('aria-label', 'Open navigation menu');
      document.body.style.overflow = '';
      console.log('✓ Flyout closed');
    }

    /* ─── Hamburger click ──────────────────────── */
    if (toggle) {
      toggle.addEventListener('click', function (e) {
        e.stopPropagation();
        console.log('🔘 Hamburger clicked. aria-expanded:', toggle.getAttribute('aria-expanded'));
        toggle.getAttribute('aria-expanded') === 'true' ? closeFlyout() : openFlyout();
      });
    }

    /* ─── Overlay click → close ────────────────── */
    if (overlay) overlay.addEventListener('click', closeFlyout);

    /* ─── X button → close ─────────────────────── */
    if (closeBtn) closeBtn.addEventListener('click', closeFlyout);

    /* ─── Escape key → close ────────────────────── */
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && flyout && flyout.classList.contains('active')) closeFlyout();
    });

    /* ─── Any flyout link click → close ─────────── */
    if (flyout) {
      flyout.querySelectorAll('a').forEach(function (link) {
        link.addEventListener('click', closeFlyout);
      });
    }

    /* ─── Resize to desktop → reset ────────────── */
    window.addEventListener('resize', function () {
      if (window.innerWidth > 1024) closeFlyout();
    });

    /* ─── Treatments accordion (sub-menu) ───────── */
    if (flyout) {
      flyout.querySelectorAll('.flyout-toggle-sub').forEach(function (btn) {
        btn.addEventListener('click', function (e) {
          e.preventDefault();
          e.stopPropagation();
          var open    = btn.getAttribute('aria-expanded') === 'true';
          var subList = btn.closest('.flyout-has-sub').querySelector('.flyout-sub');
          btn.setAttribute('aria-expanded', open ? 'false' : 'true');
          subList.setAttribute('aria-hidden', open ? 'true' : 'false');
          subList.classList.toggle('open', !open);
        });
      });
    }
  }

  /* Run after DOM is ready */
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }

}());
</script>