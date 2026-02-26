<?php 
$page_title = 'Home'; 
$page_subtitle = 'Premium Wellness & Aesthetic Treatments'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Geneva Wellness Institute — transformative wellness and aesthetic treatments including HIFU, CO2 Laser, Carbon Laser, Hair Restoration and more in Alabang, Muntinlupa City." />
  <meta name="robots" content="index, follow" />
  <meta property="og:title" content="Geneva Wellness Institute — Transformative Wellness & Aesthetic Treatments" />
  <meta property="og:description" content="Discover exceptional beauty and wellness treatments in Alabang, Muntinlupa City." />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://genevawellness.com" />
  <meta name="twitter:card" content="summary_large_image" />
  <link rel="canonical" href="https://genevawellness.com" />
  <title>Geneva Wellness Institute — Transformative Wellness & Aesthetic Treatments</title>

  <!-- ── STRUCTURED DATA (Schema.org) ───────────────────────────────── -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "Geneva Wellness Institute",
    "description": "Premium wellness and aesthetic treatments including HIFU, CO2 Laser, Carbon Laser, Hair Restoration, HYDRA 7D, Exilis, and Pico Laser.",
    "url": "https://genevawellness.com",
    "telephone": "+63-917-555-1234",
    "email": "hello@genevawellness.com",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Alabang, Muntinlupa City",
      "addressCountry": "PH"
    },
    "image": "https://genevawellness.com/img/logo.png",
    "priceRange": "$$$",
    "areaServed": "PH",
    "serviceType": "Wellness and Aesthetic Services",
    "sameAs": [
      "https://facebook.com/genevawellness",
      "https://instagram.com/genevawellness"
    ]
  }
  </script>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet" />

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <!-- AOS CSS -->
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />

  <!-- Main CSS (ONLY ONCE) -->
  <link rel="stylesheet" href="style.css">

  <style>
    /* ── VIDEO SECTION ───────────────────────────────────────────────── */
    .video-showcase-section {
      background: linear-gradient(135deg, #0d0202 0%, #1a0303 40%, #2a0505 100%);
      padding: clamp(4rem, 8vw, 7rem) 0;
      position: relative;
      overflow: hidden;
    }
    .video-showcase-section::before {
      content: '';
      position: absolute;
      inset: 0;
      background: radial-gradient(ellipse at 30% 50%, rgba(202,174,95,0.08) 0%, transparent 60%),
                  radial-gradient(ellipse at 70% 20%, rgba(176,14,9,0.12) 0%, transparent 50%);
      pointer-events: none;
    }
    .video-showcase-section .section-header h2 { color: white; }
    .video-showcase-section .eyebrow { color: #CAAE5F; background: rgba(202,174,95,0.1); border-color: rgba(202,174,95,0.3); }
    .video-showcase-section .section-desc { color: rgba(255,255,255,0.6); }

    .video-player-wrap {
      position: relative;
      max-width: 860px;
      margin: 0 auto;
      border-radius: 24px;
      overflow: hidden;
      box-shadow: 0 40px 100px rgba(0,0,0,0.6), 0 0 0 1px rgba(202,174,95,0.15);
      cursor: pointer;
    }
    .video-thumbnail {
      position: relative;
      aspect-ratio: 16/9;
      background: #000;
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
    }
    .video-thumbnail img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      opacity: 0.75;
      transition: opacity 0.4s ease, transform 0.6s ease;
    }
    .video-player-wrap:hover .video-thumbnail img {
      opacity: 0.6;
      transform: scale(1.03);
    }
    .video-thumbnail-overlay {
      position: absolute;
      inset: 0;
      background: linear-gradient(135deg, rgba(176,14,9,0.35) 0%, rgba(0,0,0,0.4) 100%);
    }
    .video-play-btn {
      position: absolute;
      z-index: 3;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 1rem;
      transition: transform 0.3s ease;
    }
    .video-player-wrap:hover .video-play-btn { transform: scale(1.08); }
    .video-play-circle {
      width: 90px;
      height: 90px;
      border-radius: 50%;
      background: rgba(255,255,255,0.15);
      border: 2px solid rgba(255,255,255,0.5);
      backdrop-filter: blur(12px);
      display: flex;
      align-items: center;
      justify-content: center;
      transition: all 0.3s ease;
      position: relative;
    }
    .video-play-circle::before {
      content: '';
      position: absolute;
      inset: -8px;
      border-radius: 50%;
      border: 1px solid rgba(202,174,95,0.3);
      animation: videoPulse 2.5s ease-in-out infinite;
    }
    @keyframes videoPulse {
      0%, 100% { transform: scale(1); opacity: 0.6; }
      50% { transform: scale(1.15); opacity: 0; }
    }
    .video-play-circle svg { margin-left: 6px; }
    .video-player-wrap:hover .video-play-circle {
      background: rgba(202,174,95,0.3);
      border-color: rgba(202,174,95,0.8);
    }
    .video-play-label {
      color: rgba(255,255,255,0.85);
      font-size: 0.78rem;
      font-weight: 700;
      letter-spacing: 0.15em;
      text-transform: uppercase;
    }
    .video-bottom-bar {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      padding: 1.5rem 2rem;
      background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);
      display: flex;
      align-items: center;
      justify-content: space-between;
      z-index: 2;
    }
    .video-bottom-bar span {
      color: rgba(255,255,255,0.8);
      font-size: 0.85rem;
      font-family: "Lora", serif;
      font-style: italic;
    }
    .video-bottom-bar .video-duration {
      background: rgba(202,174,95,0.2);
      border: 1px solid rgba(202,174,95,0.4);
      color: #CAAE5F;
      padding: 0.3rem 0.75rem;
      border-radius: 20px;
      font-size: 0.75rem;
      font-weight: 700;
      font-style: normal;
      font-family: "Inter", sans-serif;
    }

    /* VIDEO MODAL */
    .video-modal-overlay {
      position: fixed;
      inset: 0;
      background: rgba(0,0,0,0.92);
      backdrop-filter: blur(8px);
      z-index: 10000;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 1.5rem;
      opacity: 0;
      visibility: hidden;
      transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }
    .video-modal-overlay.active {
      opacity: 1;
      visibility: visible;
    }
    .video-modal-inner {
      position: relative;
      width: 100%;
      max-width: 900px;
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 50px 120px rgba(0,0,0,0.8);
      transform: scale(0.88) translateY(30px);
      transition: transform 0.45s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }
    .video-modal-overlay.active .video-modal-inner { transform: scale(1) translateY(0); }
    .video-modal-inner iframe {
      width: 100%;
      aspect-ratio: 16/9;
      display: block;
      border: none;
    }
    .video-modal-close {
      position: absolute;
      top: -50px;
      right: 0;
      width: 42px;
      height: 42px;
      border-radius: 50%;
      background: rgba(255,255,255,0.1);
      border: 1.5px solid rgba(255,255,255,0.3);
      color: white;
      font-size: 1.4rem;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      transition: all 0.3s ease;
    }
    .video-modal-close:hover {
      background: rgba(202,174,95,0.3);
      border-color: rgba(202,174,95,0.6);
      transform: rotate(90deg) scale(1.1);
    }

    /* ── HOW IT WORKS SECTION ───────────────────────────────────────── */
    .how-it-works-section {
      background: linear-gradient(160deg, #fef9f3 0%, #f5ede2 50%, #fef9f3 100%);
      padding: clamp(4rem, 8vw, 7rem) 0;
      position: relative;
      overflow: hidden;
    }
    .how-it-works-section::before {
      content: '';
      position: absolute;
      top: -200px;
      right: -200px;
      width: 600px;
      height: 600px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(202,174,95,0.08) 0%, transparent 70%);
      pointer-events: none;
    }
    .how-it-works-section::after {
      content: '';
      position: absolute;
      bottom: -150px;
      left: -150px;
      width: 500px;
      height: 500px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(176,14,9,0.05) 0%, transparent 70%);
      pointer-events: none;
    }
    .hiw-steps-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 0;
      position: relative;
      z-index: 1;
      margin-top: 4rem;
    }
    .hiw-connector {
      position: absolute;
      top: 56px;
      left: calc(12.5% + 36px);
      right: calc(12.5% + 36px);
      height: 2px;
      background: linear-gradient(90deg, transparent, rgba(202,174,95,0.4) 15%, rgba(202,174,95,0.4) 85%, transparent);
      z-index: 0;
    }
    .hiw-connector::before {
      content: '';
      position: absolute;
      top: 50%;
      left: 0;
      right: 0;
      height: 1px;
      background: repeating-linear-gradient(90deg, #CAAE5F 0, #CAAE5F 8px, transparent 8px, transparent 18px);
      transform: translateY(-50%);
    }
    .hiw-step {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
      padding: 0 1.5rem;
      position: relative;
      z-index: 1;
    }
    .hiw-step-number-wrap {
      position: relative;
      margin-bottom: 1.75rem;
    }
    .hiw-step-num-outer {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      background: white;
      border: 2px solid rgba(202,174,95,0.25);
      box-shadow: 0 8px 30px rgba(0,0,0,0.08);
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
      transition: all 0.4s ease;
    }
    .hiw-step:hover .hiw-step-num-outer {
      border-color: #CAAE5F;
      box-shadow: 0 12px 40px rgba(202,174,95,0.2);
      transform: translateY(-4px);
    }
    .hiw-step-num-inner {
      width: 56px;
      height: 56px;
      border-radius: 50%;
      background: linear-gradient(135deg, #B00E09, #8a0b07);
      display: flex;
      align-items: center;
      justify-content: center;
      transition: all 0.4s ease;
    }
    .hiw-step:hover .hiw-step-num-inner {
      background: linear-gradient(135deg, #CAAE5F, #B8955C);
    }
    .hiw-step-num-text {
      font-family: "Lora", serif;
      font-size: 1.1rem;
      font-weight: 600;
      color: white;
    }
    .hiw-step-icon {
      position: absolute;
      top: -6px;
      right: -6px;
      width: 28px;
      height: 28px;
      border-radius: 50%;
      background: #CAAE5F;
      border: 2px solid white;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 0.75rem;
    }
    .hiw-step-title {
      font-family: "Lora", serif;
      font-size: 1.1rem;
      font-weight: 600;
      color: #1a1a1a;
      margin-bottom: 0.5rem;
      line-height: 1.3;
    }
    .hiw-step-subtitle {
      font-size: 0.75rem;
      font-weight: 700;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      color: #CAAE5F;
      margin-bottom: 0.85rem;
    }
    .hiw-step-desc {
      font-size: 0.85rem;
      color: #666;
      line-height: 1.7;
    }
    .hiw-cta-wrap {
      text-align: center;
      margin-top: 3.5rem;
    }

    /* ── UPDATED TESTIMONIALS ───────────────────────────────────────── */
    .testimonial-card {
      border-top: 3px solid transparent;
      transition: all 0.4s ease;
    }
    .testimonial-card:hover {
      border-top-color: #CAAE5F;
    }

    /* ── ACHIEVEMENTS SECTION ───────────────────────────────────────── */
    .achievements-section {
      background: white;
      padding: clamp(4rem, 8vw, 7rem) 0;
      position: relative;
      overflow: hidden;
    }
    .achievements-section::before {
      content: '';
      position: absolute;
      inset: 0;
      background: linear-gradient(180deg, rgba(249,246,241,0.5) 0%, white 30%);
      pointer-events: none;
    }
    .achievements-inner {
      position: relative;
      z-index: 1;
    }
    .achievements-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 2rem;
      margin-top: 3.5rem;
    }
    .achievement-card {
      background: white;
      border: 1px solid rgba(202,174,95,0.15);
      border-radius: 24px;
      padding: 2.5rem 2rem;
      text-align: center;
      box-shadow: 0 4px 20px rgba(0,0,0,0.05);
      transition: all 0.45s cubic-bezier(0.25, 0.46, 0.45, 0.94);
      position: relative;
      overflow: hidden;
    }
    .achievement-card::before {
      content: '';
      position: absolute;
      inset: 0;
      background: linear-gradient(135deg, rgba(202,174,95,0.06), rgba(176,14,9,0.04));
      opacity: 0;
      transition: opacity 0.4s ease;
    }
    .achievement-card:hover::before { opacity: 1; }
    .achievement-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 20px 50px rgba(0,0,0,0.1);
      border-color: rgba(202,174,95,0.4);
    }
    .achievement-icon-wrap {
      width: 72px;
      height: 72px;
      border-radius: 50%;
      background: linear-gradient(135deg, rgba(176,14,9,0.08), rgba(202,174,95,0.08));
      margin: 0 auto 1.5rem;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 2rem;
      transition: all 0.4s ease;
      position: relative;
      z-index: 1;
    }
    .achievement-card:hover .achievement-icon-wrap {
      background: linear-gradient(135deg, #B00E09, #CAAE5F);
      transform: scale(1.1) rotate(5deg);
    }
    .achievement-num {
      font-family: "Lora", serif;
      font-size: clamp(2.5rem, 4vw, 3.5rem);
      font-weight: 600;
      background: linear-gradient(135deg, #B00E09, #CAAE5F);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      line-height: 1;
      margin-bottom: 0.5rem;
      display: block;
      position: relative;
      z-index: 1;
    }
    .achievement-label {
      font-size: 1rem;
      font-weight: 700;
      color: #1a1a1a;
      margin-bottom: 0.75rem;
      position: relative;
      z-index: 1;
    }
    .achievement-desc {
      font-size: 0.85rem;
      color: #666;
      line-height: 1.7;
      position: relative;
      z-index: 1;
    }

    /* ── VIDEO SECTION RESPONSIVE ───────────────────────────────────── */
    @media (max-width: 768px) {
      .hiw-steps-grid { grid-template-columns: repeat(2, 1fr); gap: 2rem; }
      .hiw-connector { display: none; }
      .achievements-grid { grid-template-columns: repeat(2, 1fr); }
      .video-play-circle { width: 70px; height: 70px; }
    }
    @media (max-width: 480px) {
      .hiw-steps-grid { grid-template-columns: 1fr; gap: 1.5rem; }
      .achievements-grid { grid-template-columns: 1fr; }
      .video-bottom-bar { padding: 1rem; }
    }

    /* ── BLOG LINK HOVER ENHANCEMENT ───────────────────────────────── */
    .blog-card .blog-link:hover { gap: 0.75rem; }

    /* ── SECTION DIVIDER ORNAMENT ───────────────────────────────────── */
    .section-ornament {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 1rem;
      margin-top: 1.5rem;
    }
    .section-ornament-line { flex: 1; max-width: 80px; height: 1px; background: linear-gradient(90deg, transparent, rgba(202,174,95,0.5)); }
    .section-ornament-line.right { background: linear-gradient(90deg, rgba(202,174,95,0.5), transparent); }
    .section-ornament-diamond { width: 8px; height: 8px; background: #CAAE5F; transform: rotate(45deg); }
  </style>
</head>
<body class="home-page">

  <!-- ── CURSOR ──────────────────────────────────────── -->
  <div class="cursor" id="cursor"></div>
  <div class="cursor-follower" id="cursor-follower"></div>

  <!-- ── LOADER (HIDDEN) ──────────────────────────────────── -->
  <div class="page-loader" id="page-loader" style="display: none;">
    <div class="loader-inner">
      <div class="loader-logo-wrap">
        <svg class="loader-emblem" viewBox="0 0 60 60" fill="none">
          <circle cx="30" cy="30" r="28" stroke="#CAAE5F" stroke-width="1" stroke-dasharray="4 4"/>
          <circle cx="30" cy="30" r="20" stroke="rgba(202,174,95,0.4)" stroke-width="0.8"/>
          <text x="30" y="36" font-family="Fraunces, serif" font-size="18" font-weight="500" text-anchor="middle" fill="#CAAE5F">GW</text>
        </svg>
        <div class="loader-ring"></div>
      </div>
      <p class="loader-text">Geneva Wellness Institute</p>
      <div class="loader-bar"><div class="loader-progress"></div></div>
    </div>
  </div>

  <div id="dynamic-header"></div>

  <main id="main-content">

    <!-- ═══════════════════════════════════════════════
         HERO SECTION
    ═══════════════════════════════════════════════ -->
    <section class="hero-enhanced" id="hero">
      <!-- Background Layers -->
      <div class="hero-bg-layer">
        <div class="hero-gradient-mesh"></div>
        <div class="hero-noise"></div>
        <div class="hero-orb hero-orb-1"></div>
        <div class="hero-orb hero-orb-2"></div>
        <div class="hero-orb hero-orb-3"></div>
        <div class="hero-lines" aria-hidden="true">
          <div class="hero-line hero-line-1"></div>
          <div class="hero-line hero-line-2"></div>
        </div>
      </div>

      <div class="container hero-grid">
        <!-- Content -->
        <div class="hero-content-col">
          <div class="hero-eyebrow" data-delay="0">
            <span class="hero-eyebrow-dot"></span>
            <span>Award-Winning Clinic · Alabang, PH</span>
          </div>
          <h1 class="hero-title" data-delay="1">
            <span class="hero-title-line">Transformative </span>
            <span class="hero-title-line hero-title-italic">Wellness and  Aesthetic Treatments </span>
            <span class="hero-title-line">or Everyone</span>
          </h1>
          <p class="hero-subtitle" data-delay="2">
            Premium non-invasive aesthetic treatments crafted for your unique skin goals. Backed by 15+ years of expertise and cutting-edge technology.
          </p>
          <div class="hero-actions" data-delay="3">
            <a href="contact-us.php#contact-form" class="hero-btn-primary">
              <span>Book Free Consultation</span>
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="treatments.php" class="hero-btn-ghost">
              <span class="hero-btn-play">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
              </span>
              <span>Explore Treatments</span>
            </a>
          </div>

          <!-- Trust proof -->
          <div class="hero-proof" data-delay="4">
            <div class="hero-avatars">
              <div class="hero-avatar" style="background: linear-gradient(135deg, #B00E09, #e03030)">M</div>
              <div class="hero-avatar" style="background: linear-gradient(135deg, #CAAE5F, #a88a3a)">G</div>
              <div class="hero-avatar" style="background: linear-gradient(135deg, #FAD2B8, #B00E09)">R</div>
              <div class="hero-avatar" style="background: linear-gradient(135deg, #8a0b07, #CAAE5F)">A</div>
              <div class="hero-avatar hero-avatar-more">+</div>
            </div>
            <div class="hero-proof-text">
              <div class="hero-stars">★★★★★</div>
              <span>Trusted by <strong>10,000+</strong> clients</span>
            </div>
          </div>
        </div>

        <!-- Visual -->
        <div class="hero-visual-col">
          <div class="hero-img-container">
            <div class="hero-img-ring-outer"></div>
            <div class="hero-img-ring-inner"></div>
            <div class="hero-img-frame">
              <img src="img/facial-treatment-clinic.jpg" alt="Geneva Wellness Institute Premium Facial Treatment" class="hero-main-img" loading="eager" />
              <div class="hero-img-overlay-grad"></div>
            </div>
            <div class="hero-card hero-card-1">
              <div class="hero-card-icon">⭐</div>
              <div class="hero-card-info">
                <strong>5.0 Rating</strong>
                <span>500+ Reviews</span>
              </div>
            </div>
            <div class="hero-card hero-card-2">
              <div class="hero-card-icon">✨</div>
              <div class="hero-card-info">
                <strong>Non-Invasive</strong>
                <span>Zero Downtime</span>
              </div>
            </div>
            <div class="hero-card hero-card-3">
              <div class="hero-card-icon-lg">15+</div>
              <div class="hero-card-info">
                <strong>Years of Excellence</strong>
                <span>Certified Professionals</span>
              </div>
            </div>
            <div class="hero-img-deco-1">✦</div>
            <div class="hero-img-deco-2">○</div>
          </div>
        </div>
      </div>

      <!-- Stats bar at bottom -->
      <div class="hero-stats-bar">
        <div class="container">
          <div class="hero-stats-inner">
            <div class="hero-stat">
              <strong class="hero-stat-num">10,000+</strong>
              <span>Happy Clients</span>
            </div>
            <div class="hero-stat-divider"></div>
            <div class="hero-stat">
              <strong class="hero-stat-num">15+</strong>
              <span>Years Experience</span>
            </div>
            <div class="hero-stat-divider"></div>
            <div class="hero-stat">
              <strong class="hero-stat-num">20+</strong>
              <span>Treatments Offered</span>
            </div>
            <div class="hero-stat-divider"></div>
            <div class="hero-stat">
              <strong class="hero-stat-num">5★</strong>
              <span>Google Rating</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Scroll indicator -->
      <div class="hero-scroll-hint">
        <div class="scroll-mouse">
          <div class="scroll-wheel"></div>
        </div>
        <span>Scroll to discover</span>
      </div>
    </section>

    <!-- ═══════════════════════════════════════════════
         VIDEO SHOWCASE SECTION (NEW — after hero)
    ═══════════════════════════════════════════════ -->
    <section class="video-showcase-section" id="video-showcase">
      <div class="container">
        <div class="section-header" data-aos="fade-up">
          <p class="eyebrow">Watch Our Story</p>
          <h2>Experience <em style="color:#CAAE5F">Geneva Wellness</em> in action</h2>
          <p class="section-desc" style="color:rgba(255,255,255,0.6);">See how we transform lives through science-backed beauty and wellness treatments.</p>
          <div class="section-ornament" style="justify-content:center; margin-top:1rem;">
            <div class="section-ornament-line"></div>
            <div class="section-ornament-diamond"></div>
            <div class="section-ornament-line right"></div>
          </div>
        </div>

        <div class="video-player-wrap" data-aos="fade-up" data-aos-delay="150" id="videoThumbnailWrap">
          <div class="video-thumbnail">
            <!-- YouTube default thumbnail -->
            <img src="https://img.youtube.com/vi/bD7H1rx4nOw/maxresdefault.jpg" alt="Geneva Wellness Institute Video" onerror="this.src='https://img.youtube.com/vi/bD7H1rx4nOw/hqdefault.jpg'" />
            <div class="video-thumbnail-overlay"></div>
            <div class="video-play-btn" id="videoPlayBtn">
              <div class="video-play-circle">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="white"><path d="M8 5v14l11-7z"/></svg>
              </div>
              <span class="video-play-label">Watch Now</span>
            </div>
            <div class="video-bottom-bar">
              <span>Geneva Wellness Institute — Our Story</span>
              <span class="video-duration">✦ Full Tour</span>
            </div>
          </div>
        </div>
      </div>

      <!-- VIDEO MODAL -->
      <div class="video-modal-overlay" id="videoModal">
        <div class="video-modal-inner">
          <button class="video-modal-close" id="videoModalClose" aria-label="Close video">✕</button>
          <iframe
            id="videoIframe"
            width="560"
            height="315"
            src=""
            data-src="https://www.youtube.com/embed/bD7H1rx4nOw?si=in7SM0y-i5vqDhVu&autoplay=1"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin"
            allowfullscreen>
          </iframe>
        </div>
      </div>
    </section>

    <!-- ═══════════════════════════════════════════════
         MARQUEE STRIP
    ═══════════════════════════════════════════════ -->
    <div class="marquee-strip" aria-hidden="true">
      <div class="marquee-track">
        <span>HIFU Lift</span><span class="marquee-sep">✦</span>
        <span>CO2 Laser</span><span class="marquee-sep">✦</span>
        <span>Carbon Laser</span><span class="marquee-sep">✦</span>
        <span>HYDRA 7D</span><span class="marquee-sep">✦</span>
        <span>Hair Restoration</span><span class="marquee-sep">✦</span>
        <span>Exilis</span><span class="marquee-sep">✦</span>
        <span>Pico Laser</span><span class="marquee-sep">✦</span>
        <span>Body Contouring</span><span class="marquee-sep">✦</span>
        <span>HIFU Lift</span><span class="marquee-sep">✦</span>
        <span>CO2 Laser</span><span class="marquee-sep">✦</span>
        <span>Carbon Laser</span><span class="marquee-sep">✦</span>
        <span>HYDRA 7D</span><span class="marquee-sep">✦</span>
        <span>Hair Restoration</span><span class="marquee-sep">✦</span>
        <span>Exilis</span><span class="marquee-sep">✦</span>
        <span>Pico Laser</span><span class="marquee-sep">✦</span>
        <span>Body Contouring</span><span class="marquee-sep">✦</span>
      </div>
    </div>

    <!-- ═══════════════════════════════════════════════
         TRUST BAR
    ═══════════════════════════════════════════════ -->
    <section class="trust-bar-enhanced" aria-label="Trust indicators">
      <div class="container trust-grid">
        <div class="trust-card" data-aos="fade-up" data-aos-delay="0">
          <div class="trust-card-icon">🏆</div>
          <div class="trust-card-content">
            <strong>Award-Winning Clinic</strong>
            <span>Recognized for excellence in aesthetic care</span>
          </div>
        </div>
        <div class="trust-card" data-aos="fade-up" data-aos-delay="80">
          <div class="trust-card-icon">🔬</div>
          <div class="trust-card-content">
            <strong>Innovative Technology</strong>
            <span>Latest FDA-approved devices & equipment</span>
          </div>
        </div>
        <div class="trust-card" data-aos="fade-up" data-aos-delay="160">
          <div class="trust-card-icon">👩‍⚕️</div>
          <div class="trust-card-content">
            <strong>Certified Professionals</strong>
            <span>Licensed doctors & expert estheticians</span>
          </div>
        </div>
        <div class="trust-card" data-aos="fade-up" data-aos-delay="240">
          <div class="trust-card-icon">💆</div>
          <div class="trust-card-content">
            <strong>Personalized Care</strong>
            <span>Customized treatment plans for every client</span>
          </div>
        </div>
      </div>
    </section>

    <!-- ═══════════════════════════════════════════════
         FEATURED TREATMENTS
    ═══════════════════════════════════════════════ -->
    <section class="treatments-showcase section" id="featured-treatments">
      <div class="container">
        <div class="section-header" data-aos="fade-up">
          <p class="eyebrow">Signature Treatments</p>
          <h2>Our <em>advanced procedures</em></h2>
          <p class="section-desc">Clinically proven, non-invasive treatments tailored for your skin goals.</p>
        </div>

        <!-- Treatment 1: HIFU -->
        <div class="treatment-showcase-row" id="hifu" data-aos="fade-up">
          <div class="ts-visual" data-aos="fade-right" data-aos-delay="100">
            <div class="ts-img-wrap">
              <img src="img/facial-treatment-clinic.jpg" alt="HIFU Treatment at Geneva Wellness" loading="lazy" />
              <div class="ts-img-overlay"></div>
              <div class="ts-badge">Non-Invasive</div>
              <div class="ts-results-card">
                <div class="ts-results-icon">📈</div>
                <div>
                  <strong>95% Satisfaction</strong>
                  <span>Visible lift in 4–8 weeks</span>
                </div>
              </div>
            </div>
            <div class="ts-img-accent">
              <img src="img/advanced-skin-care.jpg" alt="Skin care detail" loading="lazy" />
            </div>
          </div>
          <div class="ts-content" data-aos="fade-left" data-aos-delay="150">
            <p class="eyebrow">Face & Neck Lifting</p>
            <h3>HIFU — Achieve a youthful, firmer appearance <em>without surgery</em></h3>
            <p class="ts-desc">Experience the power of HIFU (High-Intensity Focused Ultrasound), a non-invasive treatment designed to lift and tighten your skin naturally. HIFU targets deep layers of the skin, stimulating collagen production to reduce wrinkles.</p>
            <div class="ts-benefits">
              <div class="ts-benefit"><span class="ts-check">✓</span> Forehead & brow lifting</div>
              <div class="ts-benefit"><span class="ts-check">✓</span> Cheek & jawline firming</div>
              <div class="ts-benefit"><span class="ts-check">✓</span> Neck tightening</div>
              <div class="ts-benefit"><span class="ts-check">✓</span> No anesthesia needed</div>
            </div>
            <div class="treatment-tags">
              <span class="tag">No Downtime</span>
              <span class="tag">Long-Lasting</span>
              <span class="tag">Collagen Boost</span>
            </div>
            <div class="ts-cta-row">
              <a href="contact-us.php#contact-form" class="btn btn-primary">Book HIFU Treatment</a>
              <a href="treatments.php#hifu" class="ts-learn-more">Learn more →</a>
            </div>
          </div>
        </div>

        <!-- Treatment 2: CO2 Laser -->
        <div class="treatment-showcase-row ts-row-reverse" id="co2-laser" data-aos="fade-up">
          <div class="ts-visual" data-aos="fade-left" data-aos-delay="100">
            <div class="ts-img-wrap">
              <img src="img/co2-laser-treatement.jpg" alt="CO2 Laser Treatment" loading="lazy" />
              <div class="ts-img-overlay"></div>
              <div class="ts-badge">Advanced Laser</div>
              <div class="ts-results-card">
                <div class="ts-results-icon">🌟</div>
                <div>
                  <strong>3 Sessions</strong>
                  <span>Dramatic scar improvement</span>
                </div>
              </div>
            </div>
            <div class="ts-img-accent ts-img-accent-left">
              <img src="img/advanced-skin-care.jpg" alt="CO2 detail" loading="lazy" />
            </div>
          </div>
          <div class="ts-content" data-aos="fade-right" data-aos-delay="150">
            <p class="eyebrow">Skin Renewal</p>
            <h3>CO2 Laser — Rejuvenate your skin with <em>advanced laser therapy</em></h3>
            <p class="ts-desc">Rejuvenate your skin with our CO2 Laser treatment. This powerful laser therapy targets acne scars, fine lines, and pigmentation, promoting smoother texture and a more even tone with long-lasting results.</p>
            <div class="ts-benefits">
              <div class="ts-benefit"><span class="ts-check">✓</span> Acne scar reduction</div>
              <div class="ts-benefit"><span class="ts-check">✓</span> Fine lines & wrinkles</div>
              <div class="ts-benefit"><span class="ts-check">✓</span> Pigmentation correction</div>
              <div class="ts-benefit"><span class="ts-check">✓</span> Skin texture improvement</div>
            </div>
            <div class="treatment-tags">
              <span class="tag">Acne Scars</span>
              <span class="tag">Fine Lines</span>
              <span class="tag">Pigmentation</span>
            </div>
            <div class="ts-cta-row">
              <a href="contact-us.php#contact-form" class="btn btn-primary">Book CO2 Laser</a>
              <a href="treatments.php#co2-laser" class="ts-learn-more">Learn more →</a>
            </div>
          </div>
        </div>

        <!-- Treatment 3: Carbon Laser -->
        <div class="treatment-showcase-row" id="carbon-laser" data-aos="fade-up">
          <div class="ts-visual" data-aos="fade-right" data-aos-delay="100">
            <div class="ts-img-wrap">
              <img src="img/carbon-laser.jpg" alt="Carbon Laser Treatment" loading="lazy" />
              <div class="ts-img-overlay"></div>
              <div class="ts-badge">Non-Invasive</div>
              <div class="ts-results-card">
                <div class="ts-results-icon">💎</div>
                <div>
                  <strong>Instant Glow</strong>
                  <span>No downtime treatment</span>
                </div>
              </div>
            </div>
            <div class="ts-img-accent">
              <img src="img/advanced-skin-care.jpg" alt="Carbon treatment detail" loading="lazy" />
            </div>
          </div>
          <div class="ts-content" data-aos="fade-left" data-aos-delay="150">
            <p class="eyebrow">Pore Refinement</p>
            <h3>Carbon Laser — Smoother, clearer skin <em>without discomfort</em></h3>
            <p class="ts-desc">Achieve clearer, smoother skin with our non-invasive Carbon Laser treatment. This innovative procedure uses carbon lotion and laser to remove impurities, dead skin cells, and excess oil while stimulating collagen production.</p>
            <div class="ts-benefits">
              <div class="ts-benefit"><span class="ts-check">✓</span> Acne & blemish control</div>
              <div class="ts-benefit"><span class="ts-check">✓</span> Pore size reduction</div>
              <div class="ts-benefit"><span class="ts-check">✓</span> Even skin tone</div>
              <div class="ts-benefit"><span class="ts-check">✓</span> Oil control</div>
            </div>
            <div class="treatment-tags">
              <span class="tag">Acne Control</span>
              <span class="tag">Pore Reduction</span>
              <span class="tag">Even Skin Tone</span>
            </div>
            <div class="ts-cta-row">
              <a href="contact-us.php#contact-form" class="btn btn-primary">Book Carbon Laser</a>
              <a href="treatments.php#carbon-laser" class="ts-learn-more">Learn more →</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ═══════════════════════════════════════════════
         TREATMENTS GRID (MORE)
    ═══════════════════════════════════════════════ -->
    <section class="more-treatments section" style="background: var(--cream);">
      <div class="container">
        <div class="section-header" data-aos="fade-up">
          <p class="eyebrow">More Treatments</p>
          <h2>Complete <em>wellness solutions</em></h2>
        </div>
        <div class="more-grid">
          <div class="more-card" data-aos="fade-up" data-aos-delay="0">
            <div class="more-card-icon">⚡</div>
            <div class="more-card-content">
              <h3>HYDRA 7D</h3>
              <p>Advanced hydration and skin revitalization therapy for a glowing, dewy complexion.</p>
              <a href="treatments.php#hydra-7d" class="more-card-link">Discover →</a>
            </div>
            <div class="more-card-bg"></div>
          </div>
          <div class="more-card" data-aos="fade-up" data-aos-delay="80">
            <div class="more-card-icon">🌊</div>
            <div class="more-card-content">
              <h3>Exilis</h3>
              <p>Non-invasive body contouring and face tightening with radiofrequency technology.</p>
              <a href="treatments.php#exilis" class="more-card-link">Discover →</a>
            </div>
            <div class="more-card-bg"></div>
          </div>
          <div class="more-card" data-aos="fade-up" data-aos-delay="160">
            <div class="more-card-icon">💇</div>
            <div class="more-card-content">
              <h3>Hair Restoration</h3>
              <p>Specialized scalp treatments to restore hair vitality and promote healthy, thick growth.</p>
              <a href="treatments.php#hair" class="more-card-link">Discover →</a>
            </div>
            <div class="more-card-bg"></div>
          </div>
        </div>
        <div style="text-align:center; margin-top: 3rem;" data-aos="fade-up" data-aos-delay="240">
          <a href="treatments.php" class="btn btn-primary btn-lg">View All Treatments</a>
        </div>
      </div>
    </section>

    <!-- ═══════════════════════════════════════════════
         ABOUT SECTION — SPLIT LAYOUT
    ═══════════════════════════════════════════════ -->
    <section class="about-split section" id="about">
      <div class="about-deco-panel">
        <div class="about-deco-content">
          <div class="about-deco-year">
            <span class="deco-year-num">15+</span>
            <span class="deco-year-label">Years of<br>Excellence</span>
          </div>
          <div class="about-deco-line"></div>
          <div class="about-deco-quote">
            <span>"Where science meets beauty"</span>
          </div>
          <div class="about-deco-pattern" aria-hidden="true">✦ ✦ ✦</div>
        </div>
      </div>

      <div class="about-main">
        <div class="about-visual-stack" data-aos="fade-right">
          <div class="about-img-primary">
            <video autoplay muted loop playsinline>
              <source src="img/about-video.mp4" type="video/mp4">
              <img src="img/facial-treatment-clinic.jpg" alt="Geneva Wellness Institute" />
            </video>
          </div>
          <div class="about-img-secondary">
            <img src="img/advanced-skin-care.jpg" alt="Advanced skin care treatment" loading="lazy" />
          </div>
          <div class="about-floating-badge">
            <div class="afb-icon">🏆</div>
            <div class="afb-text">
              <strong>Award Winning</strong>
              <span>Best Aesthetic Clinic 2024</span>
            </div>
          </div>
        </div>

        <div class="about-text-col" data-aos="fade-left" data-aos-delay="100">
          <p class="eyebrow">About Geneva Wellness Institute</p>
          <h2>Your journey to becoming <em>the best version of yourself</em></h2>
          <p>At Geneva Wellness Institute, we provide exceptional beauty and wellness treatments in a serene and luxurious environment. Our highly skilled team of expert estheticians and certified therapists is dedicated to helping you achieve your beauty and wellness goals.</p>
          <p>Every treatment is personalized to your unique skin type and concerns, ensuring optimal results that look natural and feel transformative.</p>

          <div class="about-pillars">
            <div class="about-pillar">
              <span class="pillar-icon">🔬</span>
              <div>
                <strong>Advanced Facial Therapies</strong>
                <p>State-of-the-art facials tailored to every skin concern.</p>
              </div>
            </div>
            <div class="about-pillar">
              <span class="pillar-icon">💆</span>
              <div>
                <strong>Body Contouring Treatments</strong>
                <p>Non-invasive sculpting and rejuvenation for your body.</p>
              </div>
            </div>
            <div class="about-pillar">
              <span class="pillar-icon">👩‍⚕️</span>
              <div>
                <strong>Certified Expert Team</strong>
                <p>Licensed professionals with years of specialized training.</p>
              </div>
            </div>
          </div>

          <a href="about-us.php" class="btn btn-primary">Read More About Us</a>
        </div>
      </div>
    </section>

    <!-- ═══════════════════════════════════════════════
         BEFORE & AFTER
    ═══════════════════════════════════════════════ -->
    <section class="before-after-section section" id="before-after">
      <div class="container">
        <div class="section-header" data-aos="fade-up">
          <p class="eyebrow">Real Results</p>
          <h2>See the <em>transformation</em></h2>
          <p class="section-desc">Witness the transformative power of our treatments with real client before & after results.</p>
        </div>

        <div class="ba-grid">
          <div class="ba-card" data-aos="fade-up" data-aos-delay="0">
            <div class="ba-slider-wrap">
              <div class="ba-before">
                <img src="https://img.freepik.com/free-photo/woman-skin-before-treatment_53876-128520.jpg" alt="Before HIFU treatment" loading="lazy" />
                <span class="ba-label ba-label-before">Before</span>
              </div>
              <div class="ba-after">
                <img src="https://img.freepik.com/free-photo/woman-skin-after-treatment_53876-128518.jpg" alt="After HIFU treatment" loading="lazy" />
                <span class="ba-label ba-label-after">After</span>
              </div>
              <input type="range" class="ba-range" min="0" max="100" value="50" aria-label="Before/After slider" />
              <div class="ba-divider"><div class="ba-handle"><span>◀▶</span></div></div>
            </div>
            <div class="ba-info">
              <h3>HIFU Face Lift</h3>
              <p>6 weeks post-treatment — visible lift and firming</p>
              <a href="contact-us.php#contact-form" class="btn btn-outline btn-sm">Book This Treatment</a>
            </div>
          </div>

          <div class="ba-card" data-aos="fade-up" data-aos-delay="150">
            <div class="ba-slider-wrap">
              <div class="ba-before">
                <img src="https://img.freepik.com/free-photo/woman-acne-skin-before-treatment_53876-128522.jpg" alt="Before CO2 Laser" loading="lazy" />
                <span class="ba-label ba-label-before">Before</span>
              </div>
              <div class="ba-after">
                <img src="https://img.freepik.com/free-photo/woman-clear-skin-after-treatment_53876-128516.jpg" alt="After CO2 Laser" loading="lazy" />
                <span class="ba-label ba-label-after">After</span>
              </div>
              <input type="range" class="ba-range" min="0" max="100" value="50" aria-label="Before/After slider" />
              <div class="ba-divider"><div class="ba-handle"><span>◀▶</span></div></div>
            </div>
            <div class="ba-info">
              <h3>CO2 Laser Resurfacing</h3>
              <p>Dramatic acne scar improvement after 3 sessions</p>
              <a href="contact-us.php#contact-form" class="btn btn-outline btn-sm">Book This Treatment</a>
            </div>
          </div>
        </div>

        <div style="text-align:center; margin-top:2.5rem; padding-top:2rem; border-top: 1px solid var(--border);" data-aos="fade-up">
          <a href="gallery.php" class="btn btn-primary btn-lg">View More Results</a>
        </div>
      </div>
    </section>

    <!-- ═══════════════════════════════════════════════
         GALLERY
    ═══════════════════════════════════════════════ -->
    <section class="gallery-section section" id="gallery" style="background: var(--cream);">
      <div class="container">
        <div class="section-header" data-aos="fade-up">
          <p class="eyebrow">Our Advanced Treatments</p>
          <h2>Explore our serene environment &amp; <em>treatments in action</em></h2>
        </div>
        <div class="gallery-masonry" data-aos="fade-up" data-aos-delay="200">
          <div class="gallery-item g-tall">
            <img src="img/advanced-treatement-1.jpg" alt="HYDRA 7D facial treatment" loading="lazy" />
            <div class="gallery-overlay"><span>HYDRA 7D</span></div>
          </div>
          <div class="gallery-item">
            <img src="img/advanced-treatement-2.jpg" alt="CO2 Laser treatment" loading="lazy" />
            <div class="gallery-overlay"><span>CO2 Laser</span></div>
          </div>
          <div class="gallery-item">
            <img src="img/advanced-treatement-3.jpg" alt="Carbon Laser treatment" loading="lazy" />
            <div class="gallery-overlay"><span>Carbon Laser</span></div>
          </div>
        </div>
        <div style="text-align:center; margin-top:2.5rem;" data-aos="fade-up">
          <a href="gallery.php" class="btn btn-outline">View Full Gallery</a>
        </div>
      </div>
    </section>

    <!-- ═══════════════════════════════════════════════
         STATS / ACHIEVEMENTS
    ═══════════════════════════════════════════════ -->
    <section class="stats-section-enhanced section">
      <div class="stats-bg-layer" aria-hidden="true">
        <div class="stats-orb stats-orb-1"></div>
        <div class="stats-orb stats-orb-2"></div>
      </div>
      <div class="container">
        <div class="section-header" data-aos="fade-up">
          <p class="eyebrow" style="color: var(--accent-gold); background: rgba(202,174,95,0.1); border-color: rgba(202,174,95,0.3);">Our Achievements</p>
          <h2 style="color: white;">Proudly showcasing our excellence in <em style="color:var(--accent-gold)">beauty and wellness</em></h2>
        </div>
        <div class="stats-grid-enhanced">
          <div class="stat-card-enhanced" data-aos="fade-up" data-aos-delay="0">
            <div class="sce-icon">😊</div>
            <div class="stat-num" data-target="10000" data-suffix="+">0+</div>
            <div class="sce-label">Satisfied Clients</div>
            <p>Serving over 10,000 satisfied clients with top-notch treatments and personalized care.</p>
          </div>
          <div class="stat-card-enhanced sce-featured" data-aos="fade-up" data-aos-delay="100">
            <div class="sce-icon">⭐</div>
            <div class="stat-num" data-target="5" data-suffix="-Star">0-Star</div>
            <div class="sce-label">Client Rating</div>
            <p>Consistent 5-star rating from our valued clients across all platforms.</p>
          </div>
          <div class="stat-card-enhanced" data-aos="fade-up" data-aos-delay="200">
            <div class="sce-icon">🏆</div>
            <div class="stat-num" data-target="15" data-suffix=" Yrs">0 Yrs</div>
            <div class="sce-label">Industry Experience</div>
            <p>Unparalleled knowledge and skill built over 15 years of dedicated practice.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ═══════════════════════════════════════════════
         TESTIMONIALS
    ═══════════════════════════════════════════════ -->
    <section class="testimonials section" id="testimonials">
      <div class="container">
        <div class="section-header" data-aos="fade-up">
          <p class="eyebrow">Client Love</p>
          <h2>What our clients say about <em>their experience</em></h2>
        </div>

        <div class="swiper testimonials-swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <article class="testimonial-card enhanced-testimonial">
                <div class="testimonial-quote">❝</div>
                <div class="testimonial-stars">★★★★★</div>
                <blockquote><p>"Geneva Wellness Institute is my go-to place for all my skincare needs. Their advanced facial therapies have transformed my skin, making it smoother and more radiant. The team is knowledgeable and always makes me feel comfortable. I can't imagine going anywhere else!"</p></blockquote>
                <footer class="testimonial-author">
                  <div class="author-avatar" style="background: linear-gradient(135deg, var(--primary), var(--accent-gold))">G</div>
                  <div><strong>Gerryl Peñaflor</strong><span>Advanced Facial Client</span></div>
                </footer>
              </article>
            </div>
            <div class="swiper-slide">
              <article class="testimonial-card enhanced-testimonial">
                <div class="testimonial-quote">❝</div>
                <div class="testimonial-stars">★★★★★</div>
                <blockquote><p>"The body contouring treatments at Geneva Wellness Institute are amazing. I saw noticeable results after just a few sessions. The staff is incredibly supportive and guided me through the entire process. I feel more confident and happy with my body now."</p></blockquote>
                <footer class="testimonial-author">
                  <div class="author-avatar" style="background: linear-gradient(135deg, #CAAE5F, var(--primary))">M</div>
                  <div><strong>Madelle Ocenar</strong><span>Body Contouring Client</span></div>
                </footer>
              </article>
            </div>
            <div class="swiper-slide">
              <article class="testimonial-card enhanced-testimonial">
                <div class="testimonial-quote">❝</div>
                <div class="testimonial-stars">★★★★★</div>
                <blockquote><p>"I had been struggling with hair loss for years until I discovered Geneva Wellness Institute. Their hair and scalp treatments have made a huge difference. My hair feels thicker and healthier, and I couldn't be happier with the results."</p></blockquote>
                <footer class="testimonial-author">
                  <div class="author-avatar" style="background: linear-gradient(135deg, #8a0b07, #CAAE5F)">B</div>
                  <div><strong>Benedict Aydalla</strong><span>Hair Restoration Client</span></div>
                </footer>
              </article>
            </div>
          </div>
          <div class="swiper-pagination"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </div>
      <div class="container" style="text-align:center; margin-top:2rem;" data-aos="fade-up">
        <a href="testimonials.php" class="btn btn-outline">Read More Testimonials</a>
      </div>
    </section>

    <!-- ═══════════════════════════════════════════════
         HOW IT WORKS — NEW SECTION (after testimonials)
    ═══════════════════════════════════════════════ -->
    <section class="how-it-works-section" id="how-it-works">
      <div class="container">
        <div class="section-header" data-aos="fade-up">
          <p class="eyebrow">Our Achievements</p>
          <h2>Proudly showcasing our excellence in <em>beauty and wellness</em></h2>
          <p class="section-desc">From your first message to your first treatment — here's how easy it is to start your transformation.</p>
          <div class="section-ornament">
            <div class="section-ornament-line"></div>
            <div class="section-ornament-diamond"></div>
            <div class="section-ornament-line right"></div>
          </div>
        </div>

        <div style="position:relative;">
          <div class="hiw-connector"></div>
          <div class="hiw-steps-grid">

            <!-- Step 01 -->
            <div class="hiw-step" data-aos="fade-up" data-aos-delay="0">
              <div class="hiw-step-number-wrap">
                <div class="hiw-step-num-outer">
                  <div class="hiw-step-num-inner">
                    <span class="hiw-step-num-text">01</span>
                  </div>
                </div>
                <div class="hiw-step-icon">💬</div>
              </div>
              <p class="hiw-step-subtitle">Hair & Scalp Treatment</p>
              <h3 class="hiw-step-title">Reach out via phone, email, or message</h3>
              <p class="hiw-step-desc">Send us a message through our contact number, email, or social media channels. Let us know the treatment you're interested in and any preferred dates and times.</p>
            </div>

            <!-- Step 02 -->
            <div class="hiw-step" data-aos="fade-up" data-aos-delay="100">
              <div class="hiw-step-number-wrap">
                <div class="hiw-step-num-outer">
                  <div class="hiw-step-num-inner">
                    <span class="hiw-step-num-text">02</span>
                  </div>
                </div>
                <div class="hiw-step-icon">✨</div>
              </div>
              <p class="hiw-step-subtitle">Choose Your Treatment</p>
              <h3 class="hiw-step-title">Select the service that suits your needs</h3>
              <p class="hiw-step-desc">Send us a message through our contact number, email, or social media channels. Let us know the treatment you're interested in and any preferred dates and times.</p>
            </div>

            <!-- Step 03 -->
            <div class="hiw-step" data-aos="fade-up" data-aos-delay="200">
              <div class="hiw-step-number-wrap">
                <div class="hiw-step-num-outer">
                  <div class="hiw-step-num-inner">
                    <span class="hiw-step-num-text">03</span>
                  </div>
                </div>
                <div class="hiw-step-icon">📅</div>
              </div>
              <p class="hiw-step-subtitle">Confirm Your Appointment</p>
              <h3 class="hiw-step-title">Settle on a date and time</h3>
              <p class="hiw-step-desc">Our team will help you find a convenient slot for your appointment. Confirm the date and time that works best for you, and we will reserve your spot.</p>
            </div>

            <!-- Step 04 -->
            <div class="hiw-step" data-aos="fade-up" data-aos-delay="300">
              <div class="hiw-step-number-wrap">
                <div class="hiw-step-num-outer">
                  <div class="hiw-step-num-inner">
                    <span class="hiw-step-num-text">04</span>
                  </div>
                </div>
                <div class="hiw-step-icon">🌟</div>
              </div>
              <p class="hiw-step-subtitle">Visit Us</p>
              <h3 class="hiw-step-title">Enjoy your treatment at Geneva Wellness</h3>
              <p class="hiw-step-desc">Arrive at our state-of-the-art facility at the scheduled time. Our team will be ready to provide you with an exceptional beauty and wellness experience.</p>
            </div>

          </div>
        </div>

        <div class="hiw-cta-wrap" data-aos="fade-up" data-aos-delay="350">
          <a href="contact-us.php#contact-form" class="btn btn-primary btn-lg">
            Start Your Journey
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-left:0.25rem"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>
      </div>
    </section>

    <!-- ═══════════════════════════════════════════════
         BLOG
    ═══════════════════════════════════════════════ -->
    <section class="blog section" id="blog" style="background: var(--ivory);">
      <div class="container">
        <div class="section-header" data-aos="fade-up">
          <p class="eyebrow">Our Blog</p>
          <h2>Stay updated with the latest in <em>beauty and wellness</em></h2>
        </div>
        <div class="blog-grid">
          <article class="blog-card" data-aos="fade-up" data-aos-delay="0">
            <div class="blog-img-wrap">
              <img src="img/blog-1.jpg" alt="Benefits of Regular Facials" loading="lazy" />
              <span class="blog-category-badge">Skincare</span>
            </div>
            <div class="blog-content">
              <p class="blog-date">January 15, 2024</p>
              <h3>The Benefits of Regular Facials</h3>
              <p>Discover how regular facial treatments can transform your skin, improve texture, and give you long-lasting radiance.</p>
              <a href="blog/benefits-of-regular-facials.php" class="blog-link">Read More →</a>
            </div>
          </article>
          <article class="blog-card" data-aos="fade-up" data-aos-delay="100">
            <div class="blog-img-wrap">
              <img src="img/blog-2.jpg" alt="Body Contouring Techniques" loading="lazy" />
              <span class="blog-category-badge">Body</span>
            </div>
            <div class="blog-content">
              <p class="blog-date">February 3, 2024</p>
              <h3>Top 5 Body Contouring Techniques</h3>
              <p>Learn about the most effective body contouring techniques and find out which is best for you.</p>
              <a href="blog/body-contouring-techniques.php" class="blog-link">Read More →</a>
            </div>
          </article>
          <article class="blog-card" data-aos="fade-up" data-aos-delay="200">
            <div class="blog-img-wrap">
              <img src="img/blog-3.jpg" alt="Hair Care Tips" loading="lazy" />
              <span class="blog-category-badge">Hair Care</span>
            </div>
            <div class="blog-content">
              <p class="blog-date">March 10, 2024</p>
              <h3>Hair Care Tips for a Healthier Scalp</h3>
              <p>Explore essential tips for maintaining a healthy scalp and vibrant hair with expert advice from our certified therapists.</p>
              <a href="blog/hair-care-tips.php" class="blog-link">Read More →</a>
            </div>
          </article>
        </div>
        <div style="text-align:center; margin-top:2.5rem; padding-top:2rem; border-top: 1px solid var(--border);" data-aos="fade-up">
          <a href="blog.php" class="btn btn-primary btn-lg">View All Blog Posts</a>
        </div>
      </div>
    </section>

    <?php include 'footer.php'; ?>

  </main>

  <button class="back-to-top" id="back-to-top" aria-label="Back to top">↑</button>

  <!-- WhatsApp Float -->
  <a href="https://wa.me/639XXXXXXXXX" class="whatsapp-float" target="_blank" rel="noopener" aria-label="Chat on WhatsApp">
    <svg width="26" height="26" viewBox="0 0 24 24" fill="white"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
  </a>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="components.js"></script>
  <script src="script.js"></script>
  <script src="enhancements.js"></script>

  <!-- ── VIDEO MODAL SCRIPT ─────────────────────────── -->
  <script>
    (function() {
      const thumbnailWrap = document.getElementById('videoThumbnailWrap');
      const modal = document.getElementById('videoModal');
      const modalClose = document.getElementById('videoModalClose');
      const iframe = document.getElementById('videoIframe');

      function openVideo() {
        iframe.src = iframe.dataset.src;
        modal.classList.add('active');
        document.body.style.overflow = 'hidden';
      }

      function closeVideo() {
        modal.classList.remove('active');
        iframe.src = '';
        document.body.style.overflow = '';
      }

      if (thumbnailWrap) thumbnailWrap.addEventListener('click', openVideo);
      if (modalClose) modalClose.addEventListener('click', closeVideo);
      if (modal) {
        modal.addEventListener('click', function(e) {
          if (e.target === modal) closeVideo();
        });
      }
      document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && modal.classList.contains('active')) closeVideo();
      });
    })();
  </script>
</body>
</html>