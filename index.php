<?php 
$page_title = 'Home'; 
$page_subtitle = 'Premium Wellness & Aesthetic Treatments'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Aesthetic Clinic Alabang | Laser & Anti-Aging</title>

<meta name="description" content="Advanced aesthetic clinic in Alabang offering laser treatments, HIFU, anti-aging & body contouring. Expert specialists. Book your transformation today.">

<meta name="keywords" content="aesthetic clinic, aesthetic clinic Alabang, best aesthetic clinic Alabang, aesthetic clinic in Alabang, aesthetic clinic near me, skin clinic Alabang, laser skin clinic Alabang, medical aesthetic clinic Alabang, advanced aesthetic clinic Alabang, non surgical aesthetic treatments, non invasive aesthetic treatments, anti aging clinic Alabang, skin rejuvenation clinic Alabang, body contouring clinic Alabang, best skin clinic in Alabang, laser treatment clinic Alabang">

<meta name="author" content="Geneva Wellness Institute">

<!-- Open Graph Meta Tags for Social Sharing -->
<meta property="og:title" content="Aesthetic Clinic Alabang | Laser & Anti-Aging" />
<meta property="og:description" content="Advanced aesthetic clinic in Alabang offering laser treatments, HIFU, anti-aging & body contouring. Expert specialists. Book your transformation today." />
<meta property="og:type" content="website" />
<meta property="og:url" content="https://genevawellness.com" />
<meta property="og:image" content="img/feature-img/home.webp" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="630" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:image" content="img/feature-img/home.webp" />
<link rel="canonical" href="https://genevawellness.com" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
    "image": "https://genevawellness.com/img/logo.webp",
    "priceRange": "$$$",
    "areaServed": "PH",
    "serviceType": "Wellness and Aesthetic Services",
    "sameAs": [
      "https://facebook.com/genevawellness",
      "https://instagram.com/genevawellness"
    ]
  }
  </script>

  <!-- Favicon -->
  <link rel="icon" href="img/geneva-favicon.svg" type="image/svg+xml">

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
    /* ── VIDEO SHOWCASE SECTION — light warm palette ────────────────── */
    .video-showcase-section {
      background: linear-gradient(135deg, #fef9f3 0%, #fdeeda 40%, #f9f0e2 100%);
      padding: clamp(4rem, 8vw, 7rem) 0;
      position: relative;
      overflow: hidden;
    }
    .video-showcase-section::before {
      content: '';
      position: absolute;
      inset: 0;
      background: radial-gradient(ellipse at 30% 50%, rgba(202,174,95,0.12) 0%, transparent 60%),
                  radial-gradient(ellipse at 70% 20%, rgba(253,238,218,0.5) 0%, transparent 50%);
      pointer-events: none;
    }
    /* Section header text uses dark colors on light bg */
    .video-showcase-section .section-header h2 { color: #1a1a1a; }
    .video-showcase-section .eyebrow { color: #B8955C; background: rgba(202,174,95,0.1); border-color: rgba(202,174,95,0.3); }
    .video-showcase-section .section-desc { color: #666666; }

    .video-player-wrap {
      position: relative;
      max-width: 860px;
      margin: 0 auto;
      border-radius: 24px;
      overflow: hidden;
      box-shadow: 0 20px 60px rgba(0,0,0,0.12), 0 0 0 1px rgba(202,174,95,0.2);
      cursor: pointer;
    }
    .video-thumbnail {
      position: relative;
      aspect-ratio: 16/9;
      background: #e5ddd5;
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
    }
    .video-thumbnail img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      opacity: 0.85;
      transition: opacity 0.4s ease, transform 0.6s ease;
    }
    .video-player-wrap:hover .video-thumbnail img {
      opacity: 0.75;
      transform: scale(1.03);
    }
    .video-thumbnail-overlay {
      position: absolute;
      inset: 0;
      background: linear-gradient(135deg, rgba(202,174,95,0.25) 0%, rgba(249,240,226,0.3) 100%);
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
      background: rgba(255,255,255,0.75);
      border: 2px solid rgba(202,174,95,0.6);
      backdrop-filter: blur(12px);
      display: flex;
      align-items: center;
      justify-content: center;
      transition: all 0.3s ease;
      position: relative;
      box-shadow: 0 8px 30px rgba(202,174,95,0.25);
    }
    .video-play-circle::before {
      content: '';
      position: absolute;
      inset: -8px;
      border-radius: 50%;
      border: 1px solid rgba(202,174,95,0.35);
      animation: videoPulse 2.5s ease-in-out infinite;
    }
    @keyframes videoPulse {
      0%, 100% { transform: scale(1); opacity: 0.6; }
      50% { transform: scale(1.15); opacity: 0; }
    }
    .video-play-circle svg { margin-left: 6px; fill: #B8955C; }
    .video-player-wrap:hover .video-play-circle {
      background: rgba(202,174,95,0.9);
      border-color: #CAAE5F;
      box-shadow: 0 12px 40px rgba(202,174,95,0.4);
    }
    .video-player-wrap:hover .video-play-circle svg { fill: #fff; }
    .video-play-label {
      color: #1a1a1a;
      font-size: 0.78rem;
      font-weight: 700;
      letter-spacing: 0.15em;
      text-transform: uppercase;
      text-shadow: 0 1px 4px rgba(255,255,255,0.8);
    }
    .video-bottom-bar {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      padding: 1.5rem 2rem;
      background: linear-gradient(to top, rgba(249,240,226,0.9), transparent);
      display: flex;
      align-items: center;
      justify-content: space-between;
      z-index: 2;
    }
    .video-bottom-bar span {
      color: #1a1a1a;
      font-size: 0.85rem;
      font-family: "Lora", serif;
      font-style: italic;
    }
    .video-bottom-bar .video-duration {
      background: rgba(202,174,95,0.15);
      border: 1px solid rgba(202,174,95,0.4);
      color: #B8955C;
      padding: 0.3rem 0.75rem;
      border-radius: 20px;
      font-size: 0.75rem;
      font-weight: 700;
      font-style: normal;
      font-family: "Inter", sans-serif;
    }

    #testimonials .section-header h2{
      color: #ffffff;
    }

    /* VIDEO MODAL — overlay stays dark (functional UI, not a section bg) */
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

    /* ── HOW IT WORKS SECTION — already uses light palette, keep ────── */
    .how-it-works-section {
      background: linear-gradient(160deg, #fef9f3 0%, #f5ede2 50%, #fef9f3 100%);
      padding: clamp(4rem, 8vw, 7rem) 0;
      position: relative;
      overflow: hidden;
    }
    .how-it-works-section::before {
      content: '';
      position: absolute;
      top: -200px; right: -200px;
      width: 600px; height: 600px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(202,174,95,0.08) 0%, transparent 70%);
      pointer-events: none;
    }
    .how-it-works-section::after {
      content: '';
      position: absolute;
      bottom: -150px; left: -150px;
      width: 500px; height: 500px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(253,238,218,0.5) 0%, transparent 70%);
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
      top: 50%; left: 0; right: 0;
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
      width: 80px; height: 80px;
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
      width: 56px; height: 56px;
      border-radius: 50%;
      background: linear-gradient(135deg, #CAAE5F, #B8955C);
      display: flex;
      align-items: center;
      justify-content: center;
      transition: all 0.4s ease;
    }
    .hiw-step:hover .hiw-step-num-inner {
      background: linear-gradient(135deg, #B8955C, #CAAE5F);
    }
    .hiw-step-num-text {
      font-family: "Lora", serif;
      font-size: 1.1rem;
      font-weight: 600;
      color: white;
    }
    .hiw-step-icon {
      position: absolute;
      top: -6px; right: -6px;
      width: 28px; height: 28px;
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
      color: #B8955C;
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

    /* ── TESTIMONIAL CARD HOVER BORDER ──────────────────────────────── */
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
      position: absolute; inset: 0;
      background: linear-gradient(180deg, rgba(249,246,241,0.5) 0%, white 30%);
      pointer-events: none;
    }
    .achievements-inner { position: relative; z-index: 1; }
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
      position: absolute; inset: 0;
      background: linear-gradient(135deg, rgba(202,174,95,0.06), rgba(253,238,218,0.08));
      opacity: 0;
      transition: opacity 0.4s ease;
    }
    .achievement-card:hover::before { opacity: 1; }
    .achievement-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 20px 50px rgba(0,0,0,0.08);
      border-color: rgba(202,174,95,0.4);
    }
    .achievement-icon-wrap {
      width: 72px; height: 72px;
      border-radius: 50%;
      background: linear-gradient(135deg, rgba(202,174,95,0.1), rgba(253,238,218,0.4));
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
      background: linear-gradient(135deg, #CAAE5F, #B8955C);
      transform: scale(1.1) rotate(5deg);
    }
    .achievement-num {
      font-family: "Lora", serif;
      font-size: clamp(2.5rem, 4vw, 3.5rem);
      font-weight: 600;
      background: linear-gradient(135deg, #B8955C, #CAAE5F);
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

    /* ── RESPONSIVE ─────────────────────────────────────────────────── */
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

    /* ── BLOG LINK HOVER ────────────────────────────────────────────── */
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

  <!-- ═══════════════════════════════════════════════════════════
     GENEVA WELLNESS — CINEMATIC HERO SECTION
     Drop-in replacement for .hero-enhanced in index.php
     Uses same img path: img/facial-treatment-clinic.webp
═══════════════════════════════════════════════════════════ -->

<style>
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
body { font-family: 'Inter', sans-serif; overflow-x: hidden; background: #000; }
 
:root {
  --gold:        #CAAE5F;
  --gold-dim:    #B8955C;
  --gold-border: rgba(202,174,95,0.38);
  --dark:        #090704;
  --ease:        cubic-bezier(0.22, 1, 0.36, 1);
  --dur:         750ms;
}
 
/* ════════════════════════════
   HERO SHELL
════════════════════════════ */
.gw-hero {
  position: relative;
  width: 100%;
  height: 100vh;
  min-height: 600px;
  background: var(--dark);
  overflow: hidden;
  display: flex;
  flex-direction: column;
}
 
/* ════════════════════════════
   SLIDE BACKGROUNDS
   Each slide is absolutely positioned and fills the full hero.
   Slide 1 uses your local file; slides 2-4 use Unsplash CDN.
   background-color on slide 1 is a fallback so it's never blank.
════════════════════════════ */
.gw-track {
  position: absolute;
  inset: 0;
  z-index: 0;
}
 
.gw-bg {
  position: absolute;
  inset: 0;
  width: 100%;
  height: 100%;
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
  opacity: 0;
  transform: scale(1.06);
  transition:
    opacity  var(--dur) cubic-bezier(0.4,0,0.2,1),
    transform 8s linear;
  will-change: opacity, transform;
}
.gw-bg.is-active  { opacity:1; transform:scale(1.0); z-index:1; }
.gw-bg.is-leaving { opacity:0; transform:scale(1.03); z-index:2;
  transition: opacity calc(var(--dur)*.8) ease, transform calc(var(--dur)*.8) ease; }
 
/* SLIDE IMAGE ASSIGNMENTS */
.gw-bg[data-slide="0"] {
  background-image: url('img/home-hero-updated-new.webp');
  background-color: #1c1510; /* rich dark fallback when local img not found */
}
.gw-bg[data-slide="1"] { background-image: url('https://images.unsplash.com/photo-1570172619644-dfd03ed5d881?w=1920&q=80'); }
.gw-bg[data-slide="2"] { background-image: url('https://images.unsplash.com/photo-1512290923902-8a9f81dc236c?w=1920&q=80'); }
.gw-bg[data-slide="3"] { background-image: url('https://images.unsplash.com/photo-1600334129128-685c5582fd35?w=1920&q=80'); }
 
/* ════════════════════════════
   OVERLAYS — 3 stacked layers for maximum readability
 
   Layer A: Strong left-column dark panel (text lives here)
   Layer B: Top + bottom cinematic vignette
   Layer C: Extra scrim only for slide 2-4 (applied via JS class)
════════════════════════════ */
.gw-overlay {
  position: absolute;
  inset: 0;
  z-index: 3;
  pointer-events: none;
}
/* Layer A — left gradient: 92% opacity column that fades out right */
.gw-overlay::before {
  content: '';
  position: absolute; inset: 0;
  background:
    linear-gradient(
      105deg,
      rgba(9,7,4,0.94)  0%,
      rgba(9,7,4,0.82)  28%,
      rgba(9,7,4,0.52)  52%,
      rgba(9,7,4,0.18)  70%,
      rgba(9,7,4,0.04) 100%
    );
}
/* Layer B — top + bottom vignette */
.gw-overlay::after {
  content: '';
  position: absolute; inset: 0;
  background:
    linear-gradient(180deg,
      rgba(9,7,4,0.45)  0%,
      rgba(9,7,4,0.00) 20%,
      rgba(9,7,4,0.00) 55%,
      rgba(9,7,4,0.72) 85%,
      rgba(9,7,4,0.90) 100%
    );
}
 
/* Thin cinematic bars */
.gw-bar { position:absolute;left:0;right:0;height:70px;z-index:4;pointer-events:none; }
.gw-bar--top    { top:0;    background:linear-gradient(to bottom,rgba(9,7,4,.55),transparent); }
.gw-bar--bottom { bottom:0; background:linear-gradient(to top,   rgba(9,7,4,.65),transparent); }
 
/* ════════════════════════════
   DECORATIVE ELEMENTS
════════════════════════════ */
.gw-glow {
  position:absolute;z-index:4;top:15%;left:-6%;
  width:720px;height:720px;border-radius:50%;
  background:radial-gradient(circle,rgba(202,174,95,.07) 0%,transparent 60%);
  pointer-events:none;
  animation:glowPulse 9s ease-in-out infinite alternate;
}
@keyframes glowPulse{from{opacity:.5;transform:scale(.88);}to{opacity:.9;transform:scale(1.1);}}
 
.gw-vrule {
  position:absolute;left:clamp(2rem,7.5vw,7rem);top:0;bottom:0;width:1px;
  background:linear-gradient(180deg,transparent 0%,rgba(202,174,95,.35) 20%,rgba(202,174,95,.35) 80%,transparent 100%);
  z-index:5;pointer-events:none;opacity:0;
  animation:fadeIn 1.2s var(--ease) 1.2s both;
}
@keyframes fadeIn{from{opacity:0;}to{opacity:1;}}
 
.gw-particles{position:absolute;inset:0;z-index:4;pointer-events:none;overflow:hidden;}
.gw-p{position:absolute;border-radius:50%;background:var(--gold);animation:pdrift linear infinite;}
.gw-p:nth-child(1){width:2px;height:2px;top:22%;left:18%;opacity:.28;animation-duration:9s;}
.gw-p:nth-child(2){width:1px;height:1px;top:55%;left:12%;opacity:.18;animation-duration:11s;animation-delay:1.3s;}
.gw-p:nth-child(3){width:2px;height:2px;top:68%;left:30%;opacity:.32;animation-duration:13s;animation-delay:2.5s;}
.gw-p:nth-child(4){width:1px;height:1px;top:35%;left:8%; opacity:.16;animation-duration:8s;animation-delay:.8s;}
.gw-p:nth-child(5){width:2px;height:2px;top:48%;left:44%;opacity:.20;animation-duration:10s;animation-delay:1.8s;}
@keyframes pdrift{0%{transform:translateY(0) scale(1);}50%{transform:translateY(-22px) scale(1.5);}100%{transform:translateY(0) scale(1);}}
 
.gw-ring {
  position:absolute;right:clamp(4%,13vw,17%);top:50%;transform:translateY(-50%);
  z-index:5;width:clamp(130px,14vw,200px);height:clamp(130px,14vw,200px);
  pointer-events:none;opacity:0;
  animation:ringIn 1s var(--ease) 2.2s both;
}
@keyframes ringIn{from{opacity:0;transform:translateY(-50%) scale(.4);}to{opacity:.38;transform:translateY(-50%) scale(1);}}
.gw-ring-outer{position:absolute;inset:0;border-radius:50%;border:1px solid rgba(202,174,95,.22);animation:rCW 28s linear infinite;}
.gw-ring-inner{position:absolute;inset:22%;border-radius:50%;border:1px dashed rgba(202,174,95,.13);animation:rCCW 16s linear infinite;}
@keyframes rCW {to{transform:rotate( 360deg);}}
@keyframes rCCW{to{transform:rotate(-360deg);}}
 
/* ════════════════════════════
   SLIDE CONTENT PANELS
   All 4 sit in the same wrapper, absolutely stacked.
   They crossfade/slide independently of the bg.
════════════════════════════ */
.gw-slides-wrap {
  position: absolute;
  inset: 0;
  z-index: 10;
  pointer-events: none;
}
 
.gw-content {
  position: absolute;
  inset: 0;
  display: flex;
  align-items: center;
  /* clear the vrule with left indent */
  padding: clamp(6rem,11vh,10rem)
           clamp(3rem,8.5vw,9rem)
           clamp(6rem,11vh,8rem)
           calc(clamp(2rem,7.5vw,7rem) + 2.8rem);
 
  opacity: 0;
  transform: translateX(44px);
  transition:
    opacity  var(--dur) cubic-bezier(0.4,0,0.2,1),
    transform var(--dur) var(--ease);
  will-change: opacity, transform;
  pointer-events: none;
}
.gw-content.is-active  { opacity:1; transform:translateX(0); pointer-events:auto; }
.gw-content.is-leaving { opacity:0; transform:translateX(-32px); pointer-events:none;
  transition: opacity calc(var(--dur)*.65) ease, transform calc(var(--dur)*.65) ease; }
 
/* Entry animations for slide 1 only */
.gw-content.is-initial .gw-eyebrow { animation:slideUp .8s var(--ease) .65s  both; }
.gw-content.is-initial .gw-title   { animation:slideUp 1s  var(--ease) .8s   both; }
.gw-content.is-initial .gw-sub     { animation:slideUp .8s var(--ease) 1.05s both; }
.gw-content.is-initial .gw-pills   { animation:slideUp .8s var(--ease) 1.18s both; }
.gw-content.is-initial .gw-actions { animation:slideUp .8s var(--ease) 1.32s both; }
.gw-content.is-initial .gw-proof   { animation:slideUp .8s var(--ease) 1.46s both; }
.gw-content.is-initial .gw-certs   { animation:slideUp .8s var(--ease) 1.6s  both; }
/* Non-initial slides skip per-child animation */
.gw-content:not(.is-initial) .gw-eyebrow,
.gw-content:not(.is-initial) .gw-title,
.gw-content:not(.is-initial) .gw-sub,
.gw-content:not(.is-initial) .gw-pills,
.gw-content:not(.is-initial) .gw-actions,
.gw-content:not(.is-initial) .gw-proof,
.gw-content:not(.is-initial) .gw-certs {
  opacity:1!important; animation:none!important; transform:none!important;
}
@keyframes slideUp{from{opacity:0;transform:translateY(28px);}to{opacity:1;transform:translateY(0);}}
 
.gw-inner { max-width: 880px; }
 
/* EYEBROW */
.gw-eyebrow {
  display:inline-flex;align-items:center;gap:.55rem;
  border:1px solid var(--gold-border);border-radius:40px;
  padding:.38rem 1rem .38rem .6rem;
  background:rgba(202,174,95,.09);backdrop-filter:blur(8px);
  margin-bottom:1.5rem;
}
.gw-eyebrow__dot{
  width:8px;height:8px;border-radius:50%;background:var(--gold);flex-shrink:0;
  box-shadow:0 0 0 2px rgba(202,174,95,.3);
  animation:dotPulse 2.5s ease-in-out infinite;
}
@keyframes dotPulse{0%,100%{box-shadow:0 0 0  2px rgba(202,174,95,.3);}50%{box-shadow:0 0 10px 4px rgba(202,174,95,.75);}}
.gw-eyebrow span{font-size:.68rem;font-weight:700;letter-spacing:.17em;text-transform:uppercase;color:var(--gold);}
 
/* HEADLINE
   text-shadow is the key fix for readability on bright images */
.gw-title {
  font-family:'Lora',serif;font-weight:400;
  font-size:clamp(2.8rem,5.2vw,5rem);
  line-height:1.08;letter-spacing:-.02em;
  color:#fff;margin:0 0 1.4rem;
  text-shadow:
    0 2px 18px rgba(0,0,0,0.7),
    0 4px 40px rgba(0,0,0,0.5);
}
.gw-title em{
  font-style:italic;color:var(--gold);display:block;
  text-shadow:0 2px 18px rgba(0,0,0,0.55),0 0 30px rgba(202,174,95,.15);
}
 
/* SUBTITLE */
.gw-sub {
  font-size:clamp(.9rem,1.4vw,1.06rem);font-weight:300;line-height:1.8;
  color:rgba(255,255,255,0.82); /* raised from .62 → .82 */
  max-width:450px;margin:0 0 1.8rem;
  text-shadow:0 1px 12px rgba(0,0,0,0.75);
}
 
/* BENEFIT PILLS */
.gw-pills{display:flex;gap:.7rem;flex-wrap:wrap;margin:0 0 2rem;}
.gw-pill{
  display:flex;align-items:center;gap:.4rem;padding:.5rem .95rem;
  border:1px solid rgba(202,174,95,.25);border-radius:30px;
  background:rgba(9,7,4,.5);backdrop-filter:blur(12px);
  font-size:.78rem;color:rgba(255,255,255,.84);
  transition:all .25s ease;cursor:default;
}
.gw-pill:hover{background:rgba(202,174,95,.14);border-color:rgba(202,174,95,.45);color:var(--gold);}
 
/* CTA BUTTONS */
.gw-actions{display:flex;align-items:center;gap:1rem;flex-wrap:wrap;margin:0 0 2.2rem;}
.gw-btn-primary{
  display:inline-flex;align-items:center;gap:.6rem;padding:1rem 2.2rem;
  background:linear-gradient(135deg,#CAAE5F 0%,#B8955C 100%);
  color:#fff;font-family:'Inter',sans-serif;font-size:.88rem;font-weight:700;
  letter-spacing:.04em;border-radius:60px;text-decoration:none;
  box-shadow:0 8px 30px rgba(202,174,95,.45),0 2px 8px rgba(0,0,0,.55);
  transition:all .3s var(--ease);white-space:nowrap;position:relative;overflow:hidden;
}
.gw-btn-primary::before{content:'';position:absolute;inset:0;background:linear-gradient(135deg,rgba(255,255,255,.2) 0%,transparent 55%);opacity:0;transition:opacity .25s ease;}
.gw-btn-primary:hover::before{opacity:1;}
.gw-btn-primary:hover{transform:translateY(-3px) scale(1.02);box-shadow:0 16px 45px rgba(202,174,95,.55),0 4px 14px rgba(0,0,0,.5);color:#fff;}
.gw-btn-primary svg{transition:transform .3s var(--ease);}
.gw-btn-primary:hover svg{transform:translateX(4px);}
 
.gw-btn-ghost{
  display:inline-flex;align-items:center;gap:.75rem;padding:1rem 1.75rem;
  border:1.5px solid rgba(255,255,255,.22);border-radius:60px;
  background:rgba(255,255,255,.07);
  color:rgba(255,255,255,.88);
  font-family:'Inter',sans-serif;font-size:.88rem;font-weight:600;
  letter-spacing:.02em;text-decoration:none;backdrop-filter:blur(12px);
  transition:all .3s ease;white-space:nowrap;
}
.gw-btn-ghost:hover{border-color:rgba(202,174,95,.5);background:rgba(202,174,95,.1);color:var(--gold);transform:translateY(-2px);}
.gw-btn-ghost__play{width:28px;height:28px;border-radius:50%;background:rgba(202,174,95,.16);border:1px solid var(--gold-border);display:flex;align-items:center;justify-content:center;flex-shrink:0;}
 
/* SOCIAL PROOF */
.gw-proof{display:flex;align-items:center;gap:1rem;margin:0 0 1.8rem;}
.gw-avatars{display:flex;align-items:center;}
.gw-avatar{width:34px;height:34px;border-radius:50%;border:2px solid rgba(255,255,255,.4);display:flex;align-items:center;justify-content:center;font-size:.68rem;font-weight:700;color:#fff;margin-right:-9px;transition:margin-right .25s ease;}
.gw-avatars:hover .gw-avatar{margin-right:-3px;}
.gw-proof-sep{width:1px;height:28px;background:rgba(255,255,255,.2);flex-shrink:0;margin-left:10px;}
.gw-proof-copy{display:flex;flex-direction:column;gap:2px;}
.gw-proof-stars{color:var(--gold);font-size:.7rem;letter-spacing:.05em;}
.gw-proof-copy span{font-size:.8rem;color:rgba(255,255,255,.65);}
.gw-proof-copy strong{color:rgba(255,255,255,.92);}
 
/* CERT BADGES */
.gw-certs{display:flex;gap:.7rem;flex-wrap:wrap;}
.gw-cert{display:flex;align-items:center;gap:.45rem;padding:.5rem .95rem;border:1px solid rgba(202,174,95,.18);border-radius:10px;background:rgba(9,7,4,.5);backdrop-filter:blur(10px);transition:all .25s ease;cursor:default;}
.gw-cert:hover{background:rgba(202,174,95,.09);border-color:var(--gold-border);}
.gw-cert-ico{font-size:1rem;}
.gw-cert-txt{font-size:.68rem;font-weight:600;color:rgba(255,255,255,.65);letter-spacing:.03em;}
 
/* ════════════════════════════
   FLOATING CARDS (desktop)
════════════════════════════ */
.gw-fcards {
  position:absolute;z-index:20;
  right:clamp(2rem,4.5vw,4rem);top:50%;transform:translateY(-50%);
  display:flex;flex-direction:column;gap:1rem;pointer-events:none;
}
.gw-fcard {
  display:flex;align-items:center;gap:.8rem;padding:1rem 1.3rem;
  background:rgba(9,7,4,.62);backdrop-filter:blur(28px);-webkit-backdrop-filter:blur(28px);
  border:1px solid rgba(202,174,95,.25);border-radius:16px;
  box-shadow:0 8px 32px rgba(0,0,0,.45),inset 0 1px 0 rgba(255,255,255,.06);
  white-space:nowrap;min-width:200px;opacity:0;
}
.gw-fcard:nth-child(1){animation:fcIn .8s var(--ease) 1.9s both,ff1 5s ease-in-out 2.9s infinite alternate;}
.gw-fcard:nth-child(2){animation:fcIn .8s var(--ease) 2.1s both,ff2 6s ease-in-out 3.2s infinite alternate;}
.gw-fcard:nth-child(3){animation:fcIn .8s var(--ease) 2.3s both,ff3 4.8s ease-in-out 3.6s infinite alternate;}
@keyframes fcIn{from{opacity:0;transform:translateX(30px);}to{opacity:1;transform:translateX(0);}}
@keyframes ff1{from{transform:translateY(0);}to{transform:translateY(-10px);}}
@keyframes ff2{from{transform:translateY(0);}to{transform:translateY(-7px);}}
@keyframes ff3{from{transform:translateY(0);}to{transform:translateY(-12px);}}
.gw-fcard-ico{font-size:1.4rem;flex-shrink:0;}
.gw-fcard-num{font-family:'Lora',serif;font-size:1.3rem;font-weight:600;color:var(--gold);flex-shrink:0;}
.gw-fcard-info strong{display:block;font-size:.84rem;font-weight:700;color:#fff;}
.gw-fcard-info span{font-size:.7rem;color:rgba(255,255,255,.52);}
 
/* ════════════════════════════
   STATS BAR
════════════════════════════ */
.gw-statsbar{
  position:absolute;bottom:0;left:0;right:0;z-index:20;
  opacity:0;animation:slideUp 1s var(--ease) 2s both;
}
.gw-statsbar-inner{
  display:flex;align-items:stretch;
  border-top:1px solid rgba(202,174,95,.2);
  background:linear-gradient(180deg,rgba(9,7,4,.72) 0%,rgba(9,7,4,.62) 100%);
  backdrop-filter:blur(24px);
}
.gw-stat{flex:1;display:flex;flex-direction:column;align-items:center;justify-content:center;padding:1.3rem 1rem;gap:.2rem;cursor:default;position:relative;transition:background .3s ease;}
.gw-stat:hover{background:rgba(202,174,95,.07);}
.gw-stat::after{content:'';position:absolute;bottom:0;left:0;right:0;height:2px;background:linear-gradient(90deg,transparent,var(--gold),transparent);opacity:0;transition:opacity .3s ease;}
.gw-stat:hover::after{opacity:1;}
.gw-stat + .gw-stat::before{content:'';position:absolute;left:0;top:20%;bottom:20%;width:1px;background:rgba(202,174,95,.15);}
.gw-stat-num{font-family:'Lora',serif;font-size:clamp(1.3rem,2.4vw,1.65rem);font-weight:600;color:var(--gold);line-height:1;}
.gw-stat-lbl{font-size:.65rem;font-weight:700;letter-spacing:.13em;text-transform:uppercase;color:rgba(255,255,255,.42);}
 
/* ════════════════════════════
   NAV ARROWS
════════════════════════════ */
.gw-nav{
  position:absolute;z-index:25;
  width:52px;height:52px;border-radius:50%;
  background:rgba(9,7,4,.4);backdrop-filter:blur(20px);
  border:1.5px solid var(--gold-border);color:var(--gold);
  cursor:pointer;display:flex;align-items:center;justify-content:center;
  transition:all .3s var(--ease);box-shadow:0 8px 32px rgba(0,0,0,.5);outline:none;
  top:calc(50% - 36px);transform:translateY(-50%);
}
.gw-nav:hover{background:rgba(202,174,95,.22);border-color:var(--gold);color:#fff;transform:translateY(-50%) scale(1.12);box-shadow:0 12px 40px rgba(202,174,95,.35);}
.gw-nav:active{transform:translateY(-50%) scale(.97);}
.gw-nav--prev{left:1.25rem;}
.gw-nav--next{right:1.25rem;}
.gw-nav svg{pointer-events:none;transition:transform .25s ease;}
.gw-nav--prev:hover svg{transform:translateX(-3px);}
.gw-nav--next:hover svg{transform:translateX(3px);}
 
/* ════════════════════════════
   DOTS + COUNTER + PROGRESS
════════════════════════════ */
.gw-progress{position:absolute;top:0;left:0;height:3px;width:0%;background:linear-gradient(90deg,var(--gold-dim),var(--gold));z-index:30;transition:width .08s linear;}
 
.gw-dots{
  position:absolute;bottom:calc(68px + 1.4rem);left:50%;transform:translateX(-50%);z-index:25;
  display:flex;align-items:center;gap:.75rem;padding:.85rem 1.75rem;
  background:rgba(9,7,4,.52);backdrop-filter:blur(14px);
  border-radius:50px;border:1px solid rgba(202,174,95,.2);box-shadow:0 8px 32px rgba(0,0,0,.3);
}
.gw-dot{width:11px;height:11px;border-radius:50%;background:rgba(255,255,255,.28);border:2px solid rgba(255,255,255,.18);cursor:pointer;padding:0;transition:all .45s var(--ease);outline:none;flex-shrink:0;}
.gw-dot:hover{background:rgba(255,255,255,.5);border-color:rgba(202,174,95,.6);transform:scale(1.25);}
.gw-dot.is-active{width:32px;height:11px;border-radius:20px;background:linear-gradient(90deg,var(--gold) 0%,#dcc880 100%);border-color:var(--gold);box-shadow:0 0 14px rgba(202,174,95,.55);}
 
.gw-counter{
  position:absolute;bottom:calc(68px + 1.2rem);right:clamp(1.5rem,3vw,2.5rem);z-index:25;
  font-family:'Lora',serif;font-size:.9rem;color:rgba(255,255,255,.55);
  display:flex;align-items:baseline;gap:.3rem;
  padding:.65rem 1.1rem;background:rgba(9,7,4,.48);backdrop-filter:blur(10px);
  border-radius:30px;border:1px solid rgba(202,174,95,.2);letter-spacing:.06em;
  opacity:0;animation:slideUp 1s var(--ease) 1.5s both;
}
.gw-counter strong{font-size:1.3rem;color:var(--gold);font-weight:400;line-height:1;min-width:32px;text-align:center;}
 
/* Scroll cue */
.gw-scroll{
  position:absolute;bottom:calc(68px + 2.2rem);left:calc(clamp(2rem,7.5vw,7rem) + 2.8rem);z-index:20;
  display:flex;align-items:center;gap:.7rem;opacity:0;animation:slideUp 1s var(--ease) 2.4s both;
}
.gw-scroll-mouse{width:22px;height:35px;border:2px solid rgba(202,174,95,.45);border-radius:12px;display:flex;align-items:flex-start;justify-content:center;padding-top:5px;}
.gw-scroll-wheel{width:2px;height:7px;background:var(--gold);border-radius:3px;animation:sWheel 2s ease-in-out infinite;}
@keyframes sWheel{0%{opacity:1;transform:translateY(0);}100%{opacity:0;transform:translateY(10px);}}
.gw-scroll-txt{font-size:.68rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:rgba(202,174,95,.55);}
 
/* ════════════════════════════
   MOBILE / TABLET ≤1024px
   Image on top, text below
════════════════════════════ */
@media (max-width:1024px){
  .gw-hero{height:auto;min-height:auto;flex-direction:column;}
 
  .gw-track{position:relative;inset:auto;width:100%;height:clamp(360px,58vw,540px);flex-shrink:0;overflow:hidden;}
  .gw-bg{position:absolute;inset:0;width:100%;height:100%;}
 
  .gw-overlay::before{background:linear-gradient(180deg,rgba(9,7,4,.25) 0%,rgba(9,7,4,.6) 75%,rgba(9,7,4,.92) 100%);}
  .gw-overlay::after{background:linear-gradient(180deg,rgba(9,7,4,.3) 0%,rgba(9,7,4,0) 30%,rgba(9,7,4,0) 60%,rgba(9,7,4,.75) 100%);}
 
  .gw-slides-wrap{position:relative;inset:auto;z-index:5;background:var(--dark);}
  .gw-content{position:relative;inset:auto;width:100%;padding:2.5rem 1.5rem 2rem;opacity:0;transform:translateY(14px);transition:opacity var(--dur) ease,transform var(--dur) var(--ease);display:none;}
  .gw-content.is-active{display:flex;opacity:1;transform:none;pointer-events:auto;}
  .gw-content.is-leaving{display:flex;opacity:0;transform:translateY(-10px);}
 
  .gw-statsbar{position:relative;bottom:auto;animation:none;opacity:1;}
  .gw-statsbar-inner{flex-wrap:wrap;}
  .gw-stat{min-width:50%;}
 
  .gw-nav{position:absolute;top:clamp(160px,26vw,240px);transform:translateY(-50%);z-index:30;width:42px;height:42px;}
  .gw-nav:hover{transform:translateY(-50%) scale(1.1);}
  .gw-nav--prev{left:.75rem;} .gw-nav--next{right:.75rem;}
 
  .gw-dots{position:absolute;bottom:auto;top:calc(clamp(360px,58vw,540px) - 58px);left:50%;transform:translateX(-50%);z-index:30;padding:.7rem 1.4rem;}
  .gw-counter{position:absolute;bottom:auto;top:calc(clamp(360px,58vw,540px) - 54px);right:1rem;z-index:30;animation:none;opacity:1;font-size:.8rem;padding:.55rem .9rem;}
  .gw-counter strong{font-size:1.1rem;}
  .gw-progress{top:clamp(360px,58vw,540px);}
 
  .gw-fcards,.gw-ring,.gw-glow,.gw-vrule,.gw-particles,.gw-scroll,.gw-bar{display:none;}
  .gw-title{font-size:clamp(2rem,7vw,3rem);}
  .gw-sub{font-size:.92rem;max-width:100%;}
  .gw-inner{max-width:100%;}
}
@media (max-width:600px){
  .gw-track{height:clamp(280px,72vw,400px);}
  .gw-nav{top:clamp(130px,32vw,190px);width:38px;height:38px;}
  .gw-nav svg{width:16px;height:16px;}
  .gw-nav--prev{left:.5rem;}.gw-nav--next{right:.5rem;}
  .gw-dots{top:calc(clamp(280px,72vw,400px) - 54px);padding:.6rem 1rem;}
  .gw-dot{width:9px;height:9px;}.gw-dot.is-active{width:22px;height:9px;}
  .gw-counter{top:calc(clamp(280px,72vw,400px) - 50px);right:.5rem;}
  .gw-progress{top:clamp(280px,72vw,400px);}
  .gw-title{font-size:clamp(1.7rem,6.5vw,2.3rem);}
  .gw-actions{gap:.55rem;}
  .gw-btn-primary,.gw-btn-ghost{font-size:.6rem;padding:.6rem 1rem;}
  .gw-btn-ghost__play{display:none;}
  .gw-stat{min-width:50%;padding:.9rem .4rem;}
  .gw-stat-num{font-size:clamp(1.1rem,2vw,1.35rem);}
  .gw-content{padding:2rem 1.2rem 1.5rem;}
  .gw-eyebrow span{font-size: 0.5rem;}
  .gw-title{font-size:26px!important;}
}
</style>
</head>
<body class="home-page">


<!-- ═══════════════════════════════════════════════════════
     HERO SLIDER MARKUP
══════════════════════════════════════════════════════════ -->
<section class="gw-hero" id="hero" aria-label="Geneva Wellness Institute Hero">
 
  <div class="gw-progress" id="gwProg"></div>
 
  <!-- ══ SLIDE BG IMAGES ══ -->
  <div class="gw-track" aria-hidden="true">
    <div class="gw-bg is-active" data-slide="0"></div>
    <div class="gw-bg"           data-slide="1"></div>
    <div class="gw-bg"           data-slide="2"></div>
    <div class="gw-bg"           data-slide="3"></div>
  </div>
 
  <!-- ── OVERLAYS ── -->
  <div class="gw-overlay" aria-hidden="true"></div>
  <div class="gw-bar gw-bar--top"    aria-hidden="true"></div>
  <div class="gw-bar gw-bar--bottom" aria-hidden="true"></div>
 
  <!-- ── DECORATIVE ── -->
  <div class="gw-glow"      aria-hidden="true"></div>
  <div class="gw-vrule"     aria-hidden="true"></div>
  <div class="gw-particles" aria-hidden="true">
    <span class="gw-p"></span><span class="gw-p"></span>
    <span class="gw-p"></span><span class="gw-p"></span>
    <span class="gw-p"></span>
  </div>
  <div class="gw-ring" aria-hidden="true">
    <div class="gw-ring-outer"></div>
    <div class="gw-ring-inner"></div>
  </div>
 
  <!-- ══ SLIDE TEXT PANELS ══ -->
  <div class="gw-slides-wrap">
 
    <!-- SLIDE 1 -->
    <div class="gw-content is-active is-initial" data-slide="0">
      <div class="gw-inner">
        <div class="gw-eyebrow">
          <span class="gw-eyebrow__dot"></span>
          <span>Award-Winning Clinic &nbsp;·&nbsp; Alabang, Philippines</span>
        </div>
        <h1 class="gw-title">
          Transformative<br>
          <em>Wellness &amp; Aesthetic</em>
          Treatments
        </h1>
        <p class="gw-sub">Premium non-invasive treatments crafted for your unique skin and hair goals. LOCAL PREVIEW TEST. Backed by 15+ years of expertise and cutting-edge technology.</p>
        <div class="gw-pills">
          <div class="gw-pill"><i class="fas fa-bolt"></i><span>Fast Results</span></div>
          <div class="gw-pill"><i class="fas fa-check"></i><span>100% Safe</span></div>
          <div class="gw-pill"><i class="fas fa-clock"></i><span>Zero Downtime</span></div>
        </div>
        <div class="gw-actions">
          <a href="contact-us.php#contact-form" class="gw-btn-primary">
            <span>Book Free Consultation</span>
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
          <a href="treatments.php" class="gw-btn-ghost">
            <span class="gw-btn-ghost__play"><svg width="10" height="10" viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></span>
            <span>Explore Treatments</span>
          </a>
        </div>
        <div class="gw-proof">
          <div class="gw-avatars">
            <div class="gw-avatar" style="background:linear-gradient(135deg,#CAAE5F,#B8955C)">M</div>
            <div class="gw-avatar" style="background:linear-gradient(135deg,#B8955C,#9a7838)">G</div>
            <div class="gw-avatar" style="background:linear-gradient(135deg,#d4956e,#c07840)">R</div>
            <div class="gw-avatar" style="background:linear-gradient(135deg,#CAAE5F,#e0cc90)">A</div>
            <div class="gw-avatar" style="background:rgba(202,174,95,.2);color:var(--gold);font-size:.62rem">+</div>
          </div>
          <div class="gw-proof-sep"></div>
          <div class="gw-proof-copy">
            <div class="gw-proof-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
          </div>
        </div>
        <div class="gw-certs">
          <div class="gw-cert"><i class="fas fa-check gw-cert-ico"></i><span class="gw-cert-txt">Medically Accredited</span></div>
          <div class="gw-cert"><span class="gw-cert-ico">🏆</span><span class="gw-cert-txt">Award Winning</span></div>
          <div class="gw-cert"><span class="gw-cert-ico">⭐</span><span class="gw-cert-txt">5-Star Rated</span></div>
        </div>
      </div>
    </div>
 
    <!-- SLIDE 2 -->
    <div class="gw-content" data-slide="1">
      <div class="gw-inner">
        <div class="gw-eyebrow"><span class="gw-eyebrow__dot"></span><span>Advanced Laser Technology &nbsp;·&nbsp; Proven Results</span></div>
        <h2 class="gw-title">Reveal Radiant Skin<br><em>with Advanced</em>Laser Treatments</h2>
        <p class="gw-sub">State-of-the-art CO2, Carbon &amp; Pico laser therapies designed to restore clarity, reduce pigmentation, and rejuvenate your skin from within.</p>
        <div class="gw-actions">
          <a href="contact-us.php#contact-form" class="gw-btn-primary"><span>Book a Laser Session</span><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
          <a href="treatments.php" class="gw-btn-ghost"><span class="gw-btn-ghost__play"><svg width="10" height="10" viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></span><span>View Laser Treatments</span></a>
        </div>
        <div class="gw-proof">
          <div class="gw-avatars">
            <div class="gw-avatar" style="background:linear-gradient(135deg,#CAAE5F,#B8955C)">S</div>
            <div class="gw-avatar" style="background:linear-gradient(135deg,#B8955C,#9a7838)">L</div>
            <div class="gw-avatar" style="background:linear-gradient(135deg,#d4956e,#c07840)">J</div>
            <div class="gw-avatar" style="background:linear-gradient(135deg,#CAAE5F,#e0cc90)">K</div>
          </div>
          <div class="gw-proof-sep"></div>
          <div class="gw-proof-copy"><div class="gw-proof-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div><span>Over <strong>5,000+</strong> laser sessions</span></div>
        </div>
      </div>
    </div>
 
    <!-- SLIDE 3 -->
    <div class="gw-content" data-slide="2">
      <div class="gw-inner">
        <div class="gw-eyebrow"><span class="gw-eyebrow__dot"></span><span>Non-Surgical Solutions &nbsp;·&nbsp; Zero Downtime</span></div>
        <h2 class="gw-title">Turn Back Time<br><em>with Anti-Aging</em>Solutions</h2>
        <p class="gw-sub">Experience the power of HIFU, bio-stimulation &amp; regenerative therapies that lift, firm, and restore your youthful glow — naturally and safely.</p>
        <div class="gw-actions">
          <a href="contact-us.php#contact-form" class="gw-btn-primary"><span>Discover Anti-Aging</span><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
          <a href="treatments.php" class="gw-btn-ghost"><span class="gw-btn-ghost__play"><svg width="10" height="10" viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></span><span>View Before &amp; After</span></a>
        </div>
        <div class="gw-proof">
          <div class="gw-avatars">
            <div class="gw-avatar" style="background:linear-gradient(135deg,#CAAE5F,#B8955C)">C</div>
            <div class="gw-avatar" style="background:linear-gradient(135deg,#B8955C,#9a7838)">V</div>
            <div class="gw-avatar" style="background:linear-gradient(135deg,#d4956e,#c07840)">N</div>
            <div class="gw-avatar" style="background:linear-gradient(135deg,#CAAE5F,#e0cc90)">P</div>
          </div>
          <div class="gw-proof-sep"></div>
          <div class="gw-proof-copy"><div class="gw-proof-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div><span><strong>15+ years</strong> of excellence</span></div>
        </div>
      </div>
    </div>
 
    <!-- SLIDE 4 -->
    <div class="gw-content" data-slide="3">
      <div class="gw-inner">
        <div class="gw-eyebrow"><span class="gw-eyebrow__dot"></span><span>Body Transformation &nbsp;·&nbsp; Expert Care</span></div>
        <h2 class="gw-title">Transform Body &amp;<br><em>Elevate Your</em>Confidence</h2>
        <p class="gw-sub">Targeted body contouring &amp; slimming treatments using Exilis and RF technology to sculpt the figure you've always desired — no surgery required.</p>
        <div class="gw-actions">
          <a href="contact-us.php#contact-form" class="gw-btn-primary"><span>Book Consultation</span><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
          <a href="treatments.php" class="gw-btn-ghost"><span class="gw-btn-ghost__play"><svg width="10" height="10" viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></span><span>Body Treatments</span></a>
        </div>
        <div class="gw-proof">
          <div class="gw-avatars">
            <div class="gw-avatar" style="background:linear-gradient(135deg,#CAAE5F,#B8955C)">D</div>
            <div class="gw-avatar" style="background:linear-gradient(135deg,#B8955C,#9a7838)">E</div>
            <div class="gw-avatar" style="background:linear-gradient(135deg,#d4956e,#c07840)">F</div>
            <div class="gw-avatar" style="background:linear-gradient(135deg,#CAAE5F,#e0cc90)">H</div>
          </div>
          <div class="gw-proof-sep"></div>
          <div class="gw-proof-copy"><div class="gw-proof-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div><span><strong>20+</strong> body treatments offered</span></div>
        </div>
      </div>
    </div>
 
  </div><!-- /.gw-slides-wrap -->
 
  <!-- ══ FLOATING CARDS ══ -->
  <div class="gw-fcards" aria-hidden="true">
    <div class="gw-fcard"><span class="gw-fcard-ico">⭐</span><div class="gw-fcard-info"><strong>5.0 Rating</strong><span>500+ Google Reviews</span></div></div>
    <div class="gw-fcard"><span class="gw-fcard-num">15+</span><div class="gw-fcard-info"><strong>Years of Excellence</strong><span>Certified Professionals</span></div></div>
    <div class="gw-fcard"><i class="fas fa-sparkles gw-fcard-ico"></i><div class="gw-fcard-info"><strong>Non-Invasive</strong><span>Zero Downtime</span></div></div>
  </div>
 
  <!-- ══ SCROLL CUE ══ -->
  <div class="gw-scroll" aria-hidden="true">
    <div class="gw-scroll-mouse"><div class="gw-scroll-wheel"></div></div>
    <span class="gw-scroll-txt">Scroll</span>
  </div>
 
  <!-- ══ ARROWS ══ -->
  <button class="gw-nav gw-nav--prev" id="gwPrev" aria-label="Previous slide" type="button">
    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 18l-6-6 6-6"/></svg>
  </button>
  <button class="gw-nav gw-nav--next" id="gwNext" aria-label="Next slide" type="button">
    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
  </button>
 
  <!-- ══ DOTS ══ -->
  <div class="gw-dots" role="tablist">
    <button class="gw-dot is-active" data-slide="0" role="tab" aria-label="Slide 1" aria-selected="true"></button>
    <button class="gw-dot"           data-slide="1" role="tab" aria-label="Slide 2" aria-selected="false"></button>
    <button class="gw-dot"           data-slide="2" role="tab" aria-label="Slide 3" aria-selected="false"></button>
    <button class="gw-dot"           data-slide="3" role="tab" aria-label="Slide 4" aria-selected="false"></button>
  </div>
 
  <!-- ══ COUNTER ══ -->
  <div class="gw-counter" aria-live="polite">
    <strong id="gwNum">01</strong><span>&nbsp;/&nbsp;04</span>
  </div>
 
  <!-- ══ STATS BAR ══ -->
  <div class="gw-statsbar">
    <div class="gw-statsbar-inner">
      <div class="gw-stat"><span class="gw-stat-num">10,000+</span><span class="gw-stat-lbl">Happy Clients</span></div>
      <div class="gw-stat"><span class="gw-stat-num">15+</span><span class="gw-stat-lbl">Years Experience</span></div>
      <div class="gw-stat"><span class="gw-stat-num">20+</span><span class="gw-stat-lbl">Treatments</span></div>
      <div class="gw-stat"><span class="gw-stat-num"><i class="fas fa-star"></i> 5</span><span class="gw-stat-lbl">Google Rating</span></div>
    </div>
  </div>
 
</section>











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

  <?php include 'header.php'; ?>

  <main id="main-content">

    <!-- ═══════════════════════════════════════════════
         HERO SECTION
    ═══════════════════════════════════════════════ -->
    <!-- <section class="hero-enhanced" id="hero">
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
        <div class="hero-content-col">
          <div class="hero-eyebrow" data-delay="0">
            <span class="hero-eyebrow-dot"></span>
            <span>Award-Winning Clinic · Alabang, PH</span>
          </div>
          <h1 class="hero-title" data-delay="1">
            <span class="hero-title-line">Transformative </span>
            <span class="hero-title-line hero-title-italic">Wellness and Aesthetic Treatments </span>
            <span class="hero-title-line">for Everyone</span>
          </h1>
          <p class="hero-subtitle" data-delay="2">
            Premium non-invasive aesthetic treatments crafted for your unique skin goals. Backed by 15+ years of expertise and cutting-edge technology.
          </p>
          <div class="hero-actions" data-delay="3">
            <a href="contact-us.php#contact-form" class="hero-btn-primary" title="Book Your Free Consultation">
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

          <div class="hero-proof" data-delay="4">
            <div class="hero-avatars">
              <div class="hero-avatar" style="background: linear-gradient(135deg, #CAAE5F, #B8955C)">M</div>
              <div class="hero-avatar" style="background: linear-gradient(135deg, #B8955C, #a07840)">G</div>
              <div class="hero-avatar" style="background: linear-gradient(135deg, #FAD2B8, #d4956e)">R</div>
              <div class="hero-avatar" style="background: linear-gradient(135deg, #CAAE5F, #e5d5a0)">A</div>
              <div class="hero-avatar hero-avatar-more">+</div>
            </div>
            <div class="hero-proof-text">
              <div class="hero-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
              <span>Trusted by <strong>10,000+</strong> clients</span>
            </div>
          </div>
        </div>

        <div class="hero-visual-col">
          <div class="hero-img-container">
            <div class="hero-img-ring-outer"></div>
            <div class="hero-img-ring-inner"></div>
            <div class="hero-img-frame">
              <img src="img/facial-treatment-clinic.webp" alt="Geneva Wellness Institute Premium Facial Treatment" title="Geneva Wellness Institute Premium Facial Treatment" class="hero-main-img" loading="eager" />
              <div class="hero-img-overlay-grad"></div>
            </div>
            <div class="hero-card hero-card-1">
              <div class="hero-card-icon"><i class="red-red fa-solid fa-star"></i></div>
              <div class="hero-card-info">
                <strong>5.0 Rating</strong>
                <span>500+ Reviews</span>
              </div>
            </div>
            <div class="hero-card hero-card-2">
              <div class="hero-card-icon"><i class="red-red fa-solid fa-sparkles"></i></div>
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
            <div class="hero-img-deco-1"><i class="red-red fa-solid fa-star"></i></div>
            <div class="hero-img-deco-2">○</div>
          </div>
        </div>
      </div>

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
              <strong class="hero-stat-num"><i class="fas fa-star"></i> 5</strong>
              <span>Google Rating</span>
            </div>
          </div>
        </div>
      </div>

      <div class="hero-scroll-hint">
        <div class="scroll-mouse">
          <div class="scroll-wheel"></div>
        </div>
        <span>Scroll to discover</span>
      </div>
    </section> -->

    

    

    <!-- ═══════════════════════════════════════════════
         TRUST BAR
    ═══════════════════════════════════════════════ -->
    <section class="trust-bar-enhanced" aria-label="Trust indicators">
      <div class="container trust-grid">
        <div class="trust-card" data-aos="fade-up" data-aos-delay="0">
          <div class="trust-card-icon"><i class="red-red fa-solid fa-award"></i></div>
          <div class="trust-card-content">
            <strong>Award-Winning Clinic</strong>
            <span>Recognized for excellence in aesthetic care</span>
          </div>
        </div>
        <div class="trust-card" data-aos="fade-up" data-aos-delay="80">
          <div class="trust-card-icon"><i class="red-red fa-solid fa-microscope"></i></div>
          <div class="trust-card-content">
            <strong>Innovative Technology</strong>
            <span>Latest FDA-approved devices &amp; equipment</span>
          </div>
        </div>
        <div class="trust-card" data-aos="fade-up" data-aos-delay="160">
          <div class="trust-card-icon"><i class="red-red fa-solid fa-user-md"></i></div>
          <div class="trust-card-content">
            <strong>Certified Professionals</strong>
            <span>Licensed doctors &amp; expert estheticians</span>
          </div>
        </div>
        <div class="trust-card" data-aos="fade-up" data-aos-delay="240">
          <div class="trust-card-icon"><i class="red-red fa-solid fa-user-spa"></i></div>
          <div class="trust-card-content">
            <strong>Personalized Care</strong>
            <span>Customized treatment plans for every client</span>
          </div>
        </div>
      </div>
    </section>

    <!-- ═══════════════════════════════════════════════
         MARQUEE STRIP
    ═══════════════════════════════════════════════ -->
    <div class="marquee-strip" aria-hidden="true">
      <div class="marquee-track">
        <span>HIFU Lift</span><span class="marquee-sep"><i class="red-red fa-solid fa-star"></i></span>
        <span>CO2 Laser</span><span class="marquee-sep"><i class="red-red fa-solid fa-star"></i></span>
        <span>Carbon Laser</span><span class="marquee-sep"><i class="red-red fa-solid fa-star"></i></span>
        <span>HYDRA 7D</span><span class="marquee-sep"><i class="red-red fa-solid fa-star"></i></span>
        <span>Hair Restoration</span><span class="marquee-sep"><i class="red-red fa-solid fa-star"></i></span>
        <span>Exilis</span><span class="marquee-sep"><i class="red-red fa-solid fa-star"></i></span>
        <span>Pico Laser</span><span class="marquee-sep"><i class="red-red fa-solid fa-star"></i></span>
        <span>Body Contouring</span><span class="marquee-sep"><i class="red-red fa-solid fa-star"></i></span>
        <span>HIFU Lift</span><span class="marquee-sep"><i class="red-red fa-solid fa-star"></i></span>
        <span>CO2 Laser</span><span class="marquee-sep"><i class="red-red fa-solid fa-star"></i></span>
        <span>Carbon Laser</span><span class="marquee-sep"><i class="red-red fa-solid fa-star"></i></span>
        <span>HYDRA 7D</span><span class="marquee-sep"><i class="red-red fa-solid fa-star"></i></span>
        <span>Hair Restoration</span><span class="marquee-sep"><i class="red-red fa-solid fa-star"></i></span>
        <span>Exilis</span><span class="marquee-sep"><i class="red-red fa-solid fa-star"></i></span>
        <span>Pico Laser</span><span class="marquee-sep"><i class="red-red fa-solid fa-star"></i></span>
        <span>Body Contouring</span><span class="marquee-sep"><i class="red-red fa-solid fa-star"></i></span>
      </div>
    </div>

    <!-- ═══════════════════════════════════════════════
         FEATURED TREATMENTS — Hair & Scalp
    ═══════════════════════════════════════════════ -->
    <section class="treatments-showcase section" id="featured-treatments">
      <div class="container">
        <div class="section-header" data-aos="fade-up">
          <p class="eyebrow">Signature Treatments</p>
          <h2>Our <em>advanced procedures</em></h2>
          <p class="section-desc">Clinically proven, non-invasive treatments tailored for your hair and scalp goals.</p>
        </div>

        <!-- Treatment 1: Hair Restoration -->
        <div class="treatment-showcase-row" id="hair-restoration" data-aos="fade-up">
          <div class="ts-visual" data-aos="fade-right" data-aos-delay="100">
            <div class="ts-img-wrap">
              <img src="img\services\hair-restoratial.webp" alt="Hair Restoration at Geneva Wellness" title="Hair Restoration at Geneva Wellness" loading="lazy" />
              <div class="ts-img-overlay"></div>
              <div class="ts-badge">Non-Invasive</div>
              <div class="ts-results-card">
                <div class="ts-results-icon"><i class="red-red fa-solid fa-seedling"></i></div>
                <div>
                  <strong>Thicker Hair</strong>
                  <span>Visible regrowth in weeks</span>
                </div>
              </div>
            </div>
            <div class="ts-img-accent">
              <img src="img/home-hair-1.webp" alt="Hair restoration detail" title="Hair restoration detail" loading="lazy" />
            </div>
          </div>
          <div class="ts-content" data-aos="fade-left" data-aos-delay="150">
            <p class="eyebrow">Restore Hair Density</p>
            <h3>Hair Restoration — Regain your confidence with <em>thicker, healthier hair</em></h3>
            <p class="ts-desc">Our Hair Restoration treatments stimulate hair growth and improve scalp health, addressing hair thinning and loss. We offer PRP therapy, laser therapy, and topical solutions to promote natural hair regrowth. These non-invasive treatments are tailored to your specific needs, providing noticeable improvements in hair density and quality.</p>
            <div class="ts-benefits">
              <div class="ts-benefit"><span class="ts-check"><i class="red-red fa-solid fa-check"></i></span> Stimulates natural hair growth</div>
              <div class="ts-benefit"><span class="ts-check"><i class="red-red fa-solid fa-check"></i></span> Improves overall scalp condition</div>
              <div class="ts-benefit"><span class="ts-check"><i class="red-red fa-solid fa-check"></i></span> Comfortable, non-surgical treatments</div>
              <div class="ts-benefit"><span class="ts-check"><i class="red-red fa-solid fa-check"></i></span> Customized plans for your needs</div>
            </div>
            <div class="treatment-tags">
              <span class="tag">Thicker Hair</span>
              <span class="tag">Scalp Health</span>
              <span class="tag">Personalized Care</span>
            </div>
            <div class="ts-cta-row">
              <a href="contact-us.php#contact-form" class="btn btn-primary" title="Book Hair Restoration Consultation">Book Hair Restoration</a>
              <a href="treatments.php#hair-restoration" class="ts-learn-more" title="Learn More About Hair Restoration">Learn more <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <!-- Treatment 2: Flaky Scalp Therapy -->
        <div class="treatment-showcase-row ts-row-reverse" id="flaky-scalp" data-aos="fade-up">
          <div class="ts-visual" data-aos="fade-left" data-aos-delay="100">
            <div class="ts-img-wrap">
              <img src="img\services\flaky-scalp.webp" alt="Flaky Scalp Therapy at Geneva Wellness" title="Flaky Scalp Therapy at Geneva Wellness" loading="lazy" />
              <div class="ts-img-overlay"></div>
              <div class="ts-badge">Soothing Treatment</div>
              <div class="ts-results-card">
                <div class="ts-results-icon"><i class="red-red fa-solid fa-snowflake"></i></div>
                <div>
                  <strong>Flake-Free</strong>
                  <span>Healthy, refreshed scalp</span>
                </div>
              </div>
            </div>
            <div class="ts-img-accent ts-img-accent-left">
              <img src="img/home-service-2.webp" alt="Scalp therapy detail" title="Scalp therapy detail" loading="lazy" />
            </div>
          </div>
          <div class="ts-content" data-aos="fade-right" data-aos-delay="150">
            <p class="eyebrow">Soothe and Strengthen</p>
            <h3>Flaky Scalp Therapy — Soothe and <em>revitalize your scalp</em></h3>
            <p class="ts-desc">Flaky Scalp Therapy targets dandruff and other scalp conditions, offering deep cleansing and intense hydration. It removes dead skin cells and excess oil, leaving the scalp healthier and more comfortable. This therapy strengthens hair follicles and promotes shiny, healthy hair.</p>
            <div class="ts-benefits">
              <div class="ts-benefit"><span class="ts-check"><i class="red-red fa-solid fa-check"></i></span> Treats and prevents dandruff</div>
              <div class="ts-benefit"><span class="ts-check"><i class="red-red fa-solid fa-check"></i></span> Moisturizes and nourishes the scalp</div>
              <div class="ts-benefit"><span class="ts-check"><i class="red-red fa-solid fa-check"></i></span> Removes impurities for a healthy scalp</div>
              <div class="ts-benefit"><span class="ts-check"><i class="red-red fa-solid fa-check"></i></span> Promotes stronger, shinier hair</div>
            </div>
            <div class="treatment-tags">
              <span class="tag">Dandruff Control</span>
              <span class="tag">Deep Cleansing</span>
              <span class="tag">Scalp Hydration</span>
            </div>
            <div class="ts-cta-row">
              <a href="contact-us.php#contact-form" class="btn btn-primary" title="Book Flaky Scalp Therapy Consultation">Book Flaky Scalp Therapy</a>
              <a href="treatments.php#flaky-scalp" class="ts-learn-more" title="Learn More About Flaky Scalp Therapy">Learn more <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <!-- Treatment 3: Scalp Psoriasis Therapy -->
        <div class="treatment-showcase-row" id="scalp-psoriasis" data-aos="fade-up">
          <div class="ts-visual" data-aos="fade-right" data-aos-delay="100">
            <div class="ts-img-wrap">
              <img src="img\services\scalp-img.webp" alt="Scalp Psoriasis Therapy at Geneva Wellness" title="Scalp Psoriasis Therapy at Geneva Wellness" loading="lazy" />
              <div class="ts-img-overlay"></div>
              <div class="ts-badge">Medicated Care</div>
              <div class="ts-results-card">
                <div class="ts-results-icon"><i class="red-red fa-solid fa-circle-notch"></i></div>
                <div>
                  <strong>Lasting Relief</strong>
                  <span>Reduced itching &amp; flaking</span>
                </div>
              </div>
            </div>
            <div class="ts-img-accent">
              <img src="img/home-service-3.webp" alt="Psoriasis therapy detail" title="Psoriasis therapy detail" loading="lazy" />
            </div>
          </div>
          <div class="ts-content" data-aos="fade-left" data-aos-delay="150">
            <p class="eyebrow">Manage and Relieve Psoriasis</p>
            <h3>Scalp Psoriasis Therapy — Relief for <em>a healthier scalp</em></h3>
            <p class="ts-desc">Scalp Psoriasis Therapy reduces the symptoms of psoriasis, such as itching and flakiness. This treatment combines medicated products and therapeutic techniques to soothe the scalp and promote healthy skin cell turnover. Regular therapy helps manage psoriasis symptoms, providing lasting relief and improving scalp health.</p>
            <div class="ts-benefits">
              <div class="ts-benefit"><span class="ts-check"><i class="red-red fa-solid fa-check"></i></span> Soothes itching and flakiness</div>
              <div class="ts-benefit"><span class="ts-check"><i class="red-red fa-solid fa-check"></i></span> Reduces inflammation for a healthier scalp</div>
              <div class="ts-benefit"><span class="ts-check"><i class="red-red fa-solid fa-check"></i></span> Uses specialized products for psoriasis</div>
              <div class="ts-benefit"><span class="ts-check"><i class="red-red fa-solid fa-check"></i></span> Promotes healthy skin cell turnover</div>
            </div>
            <div class="treatment-tags">
              <span class="tag">Symptom Relief</span>
              <span class="tag">Anti-Inflammatory</span>
              <span class="tag">Medicated Care</span>
            </div>
            <div class="ts-cta-row">
              <a href="contact-us.php#contact-form" class="btn btn-primary" title="Book Scalp Psoriasis Therapy Consultation">Book Scalp Psoriasis Therapy</a>
              <a href="treatments.php#scalp-psoriasis" class="ts-learn-more" title="Learn More About Scalp Psoriasis Therapy">Learn more <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- ═══════════════════════════════════════════════
         TREATMENTS GRID (MORE)
    ═══════════════════════════════════════════════ -->
    <section class="more-treatments section" style="background: var(--ivory);">
      <div class="container">
        <div class="section-header" data-aos="fade-up">
          <p class="eyebrow">More Treatments</p>
          <h2>Complete <em>wellness solutions</em></h2>
        </div>
        <div class="more-grid">
          <div class="more-card" data-aos="fade-up" data-aos-delay="0">
            <div class="more-card-icon"><i class="fas fa-bolt"></i></div>
            <div class="more-card-content">
              <h3>HYDRA 7D</h3>
              <p>Advanced hydration and skin revitalization therapy for a glowing, dewy complexion.</p>
              <a href="treatments.php#hydra-7d" class="more-card-link"><i class="fas fa-arrow-right"></i> Discover</a>
            </div>
            <div class="more-card-bg"></div>
          </div>
          <div class="more-card" data-aos="fade-up" data-aos-delay="80">
            <div class="more-card-icon">🌊</div>
            <div class="more-card-content">
              <h3>Exilis</h3>
              <p>Non-invasive body contouring and face tightening with radiofrequency technology.</p>
              <a href="treatments.php#exilis" class="more-card-link"><i class="fas fa-arrow-right"></i> Discover</a>
            </div>
            <div class="more-card-bg"></div>
          </div>
          <div class="more-card" data-aos="fade-up" data-aos-delay="160">
            <div class="more-card-icon">💇</div>
            <div class="more-card-content">
              <h3>Hair Restoration</h3>
              <p>Specialized scalp treatments to restore hair vitality and promote healthy, thick growth.</p>
              <a href="treatments.php#hair" class="more-card-link" title="Discover Hair Restoration Treatment"><i class="fas fa-arrow-right"></i> Discover</a>
            </div>
            <div class="more-card-bg"></div>
          </div>
        </div>
        <div style="text-align:center; margin-top: 3rem;" data-aos="fade-up" data-aos-delay="240">
          <a href="treatments.php" class="btn btn-primary btn-lg" title="View All Treatments">View All Treatments</a>
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
          <div class="about-deco-pattern" aria-hidden="true"><i class="red-red fa-solid fa-star"></i> <i class="red-red fa-solid fa-star"></i> <i class="red-red fa-solid fa-star"></i></div>
        </div>
      </div>

      <div class="about-main">
        <div class="about-visual-stack" data-aos="fade-right">
          <div class="about-img-primary">
            <video autoplay muted loop playsinline title="About Geneva Wellness Institute - Facial Treatment Video">
              <source src="img/about-video.mp4" type="video/mp4">
              <img src="img/facial-treatment-clinic.webp" alt="Geneva Wellness Institute" title="Geneva Wellness Institute" />
            </video>
          </div>
          <div class="about-img-secondary">
            <img src="img/wellness-treatment-new.webp" alt="Advanced skin care treatment" title="Advanced skin care treatment" loading="lazy" />
          </div>
          <div class="about-floating-badge">
            <div class="afb-icon"><i class="red-red fa-solid fa-trophy"></i></div>
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
              <span class="pillar-icon"><i class="red-red fa-solid fa-microscope"></i></span>
              <div>
                <strong>Advanced Facial Therapies</strong>
                <p>State-of-the-art facials tailored to every skin concern.</p>
              </div>
            </div>
            <div class="about-pillar">
              <span class="pillar-icon"><i class="red-red fa-solid fa-wand-magic-sparkles"></i></span>
              <div>
                <strong>Body Contouring Treatments</strong>
                <p>Non-invasive sculpting and rejuvenation for your body.</p>
              </div>
            </div>
            <div class="about-pillar">
              <span class="pillar-icon"><i class="red-red fa-solid fa-user-md"></i></span>
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
          <p class="section-desc">Witness the transformative power of our treatments with real client before &amp; after results.</p>
        </div>

        <div class="ba-grid">
          <div class="ba-card" data-aos="fade-up" data-aos-delay="0">
            <div class="ba-slider-wrap">
              <div class="ba-before">
                <img src="img/before/clientbefore.webp" alt="Before HIFU treatment" title="Before HIFU treatment" loading="lazy" />
                <span class="ba-label ba-label-before">Before</span>
              </div>
              <div class="ba-after">
                <img src="img/before/clientafter.webp" alt="After HIFU treatment" title="After HIFU treatment" loading="lazy" />
                <span class="ba-label ba-label-after">After</span>
              </div>
              <input type="range" class="ba-range" min="0" max="100" value="50" aria-label="Before/After slider" />
              <div class="ba-divider"><div class="ba-handle"><span>◀▶</span></div></div>
            </div>
            <div class="ba-info">
              <h3>HIFU Face Lift</h3>
              <p>6 weeks post-treatment — visible lift and firming</p>
              <a href="contact-us.php#contact-form" class="btn btn-outline btn-sm" title="Book HIFU Facelift Consultation">Book This Treatment</a>
            </div>
          </div>

          <div class="ba-card" data-aos="fade-up" data-aos-delay="150">
            <div class="ba-slider-wrap">
              <div class="ba-before">
                <img src="img/before/before.webp" alt="Before CO2 Laser" title="Before CO2 Laser" loading="lazy" />
                <span class="ba-label ba-label-before">Before</span>
              </div>
              <div class="ba-after">
                <img src="img/before/after.webp" alt="After CO2 Laser" title="After CO2 Laser" loading="lazy" />
                <span class="ba-label ba-label-after">After</span>
              </div>
              <input type="range" class="ba-range" min="0" max="100" value="50" aria-label="Before/After slider" />
              <div class="ba-divider"><div class="ba-handle"><span>◀▶</span></div></div>
            </div>
            <div class="ba-info">
              <h3>CO2 Laser Resurfacing</h3>
              <p>Dramatic acne scar improvement after 3 sessions</p>
              <a href="contact-us.php#contact-form" class="btn btn-outline btn-sm" title="Book CO2 Laser Consultation">Book This Treatment</a>
            </div>
          </div>
        </div>

        <div style="text-align:center; margin-top:2.5rem; padding-top:2rem; border-top: 1px solid var(--border);" data-aos="fade-up">
          <a href="gallery.php" class="btn btn-primary btn-lg">View More Results</a>
        </div>
      </div>
    </section>

    <!-- ═══════════════════════════════════════════════
         VIDEO SHOWCASE SECTION
    ═══════════════════════════════════════════════ -->
    <section class="video-showcase-section" id="video-showcase">
      <div class="container">
        <div class="section-header" data-aos="fade-up">
          <p class="eyebrow">Watch Our Story</p>
          <h2>Experience <em style="color:#B8955C">Geneva Wellness</em> in action</h2>
          <p class="section-desc">See how we transform lives through science-backed beauty and wellness treatments.</p>
          <div class="section-ornament" style="justify-content:center; margin-top:1rem;">
            <div class="section-ornament-line"></div>
            <div class="section-ornament-diamond"></div>
            <div class="section-ornament-line right"></div>
          </div>
        </div>

        <div class="video-player-wrap" data-aos="fade-up" data-aos-delay="150" id="videoThumbnailWrap">
          <div class="video-thumbnail">
            <img src="https://img.youtube.com/vi/bD7H1rx4nOw/maxresdefault.jpg" alt="Geneva Wellness Institute Video" title="Geneva Wellness Institute Video" onerror="this.src='https://img.youtube.com/vi/bD7H1rx4nOw/hqdefault.webp'" />
            <div class="video-thumbnail-overlay"></div>
            <div class="video-play-btn" id="videoPlayBtn">
              <div class="video-play-circle">
                <svg width="28" height="28" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
              </div>
              <span class="video-play-label">Watch Now</span>
            </div>
            <div class="video-bottom-bar">
              <span>Geneva Wellness Institute — Our Story</span>
              <span class="video-duration"><i class="red-red fa-solid fa-star"></i> Full Tour</span>
            </div>
          </div>
        </div>
      </div>

      <!-- VIDEO MODAL -->
      <div class="video-modal-overlay" id="videoModal">
        <div class="video-modal-inner">
          <button class="video-modal-close" id="videoModalClose" aria-label="Close video"><i class="red-red fa-solid fa-times"></i></button>
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
         GALLERY
    ═══════════════════════════════════════════════ -->
    <section class="gallery-section section" id="gallery" style="background: #ffffff;">
      <div class="container">
        <div class="section-header" data-aos="fade-up">
          <p class="eyebrow">Our Advanced Treatments</p>
          <h2>Explore our serene environment &amp; <em>treatments in action</em></h2>
        </div>
        <div class="gallery-masonry" data-aos="fade-up" data-aos-delay="200">
          <div class="gallery-item g-tall">
            <img src="img/advanced-treatement-1.webp" alt="HYDRA 7D facial treatment" title="HYDRA 7D facial treatment" loading="lazy" />
            <div class="gallery-overlay"><span>HYDRA 7D</span></div>
          </div>
          <div class="gallery-item">
            <img src="img/advanced-treatement-2.webp" alt="CO2 Laser treatment" title="CO2 Laser treatment" loading="lazy" />
            <div class="gallery-overlay"><span>CO2 Laser</span></div>
          </div>
          <div class="gallery-item">
            <img src="img/advanced-treatement-3.webp" alt="Carbon Laser treatment" title="Carbon Laser treatment" loading="lazy" />
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
          <p class="eyebrow">Our Achievements</p>
          <h2>Proudly showcasing our excellence in <em>beauty and wellness</em></h2>
        </div>
        <div class="stats-grid-enhanced">
          <div class="stat-card-enhanced" data-aos="fade-up" data-aos-delay="0">
            <div class="sce-icon"><i class="red-red fa-solid fa-smile"></i></div>
            <div class="stat-num" data-target="10000" data-suffix="+">0+</div>
            <div class="sce-label">Satisfied Clients</div>
            <p>Serving over 10,000 satisfied clients with top-notch treatments and personalized care.</p>
          </div>
          <div class="stat-card-enhanced sce-featured" data-aos="fade-up" data-aos-delay="100">
            <div class="sce-icon"><i class="red-red fa-solid fa-star"></i></div>
            <div class="stat-num" data-target="5" data-suffix="-Star">0-Star</div>
            <div class="sce-label">Client Rating</div>
            <p>Consistent 5-star rating from our valued clients across all platforms.</p>
          </div>
          <div class="stat-card-enhanced" data-aos="fade-up" data-aos-delay="200">
            <div class="sce-icon"><i class="red-red fa-solid fa-trophy"></i></div>
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
                <div class="testimonial-quote"><i class="red-red fa-solid fa-quote-left"></i></div>
                <div class="testimonial-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                <blockquote><p>"Geneva Wellness Institute is my go-to place for all my skincare needs. Their advanced facial therapies have transformed my skin, making it smoother and more radiant. The team is knowledgeable and always makes me feel comfortable. I can't imagine going anywhere else!"</p></blockquote>
                <footer class="testimonial-author">
                  <div class="author-avatar" style="background: linear-gradient(135deg, var(--accent-gold), var(--accent-gold-dark))">G</div>
                  <div><strong>Gerryl Peñaflor</strong><span>Advanced Facial Client</span></div>
                </footer>
              </article>
            </div>
            <div class="swiper-slide">
              <article class="testimonial-card enhanced-testimonial">
                <div class="testimonial-quote"><i class="red-red fa-solid fa-quote-left"></i></div>
                <div class="testimonial-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                <blockquote><p>"The body contouring treatments at Geneva Wellness Institute are amazing. I saw noticeable results after just a few sessions. The staff is incredibly supportive and guided me through the entire process. I feel more confident and happy with my body now."</p></blockquote>
                <footer class="testimonial-author">
                  <div class="author-avatar" style="background: linear-gradient(135deg, #CAAE5F, #B8955C)">M</div>
                  <div><strong>Madelle Ocenar</strong><span>Body Contouring Client</span></div>
                </footer>
              </article>
            </div>
            <div class="swiper-slide">
              <article class="testimonial-card enhanced-testimonial">
                <div class="testimonial-quote"><i class="red-red fa-solid fa-quote-left"></i></div>
                <div class="testimonial-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                <blockquote><p>"I had been struggling with hair loss for years until I discovered Geneva Wellness Institute. Their hair and scalp treatments have made a huge difference. My hair feels thicker and healthier, and I couldn't be happier with the results."</p></blockquote>
                <footer class="testimonial-author">
                  <div class="author-avatar" style="background: linear-gradient(135deg, #B8955C, #CAAE5F)">B</div>
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
         HOW IT WORKS
    ═══════════════════════════════════════════════ -->
    <section class="how-it-works-section" id="how-it-works">
      <div class="container">
        <div class="section-header" data-aos="fade-up">
          <p class="eyebrow">Your Journey With Us</p>
          <h2>Getting started is <em>simple</em></h2>
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

            <div class="hiw-step" data-aos="fade-up" data-aos-delay="0">
              <div class="hiw-step-number-wrap">
                <div class="hiw-step-num-outer">
                  <div class="hiw-step-num-inner"><span class="hiw-step-num-text">01</span></div>
                </div>
                <div class="hiw-step-icon"><i class="red-red fa-solid fa-comments"></i></div>
              </div>
              <p class="hiw-step-subtitle">Get in Touch</p>
              <h3 class="hiw-step-title">Reach out via phone, email, or message</h3>
              <p class="hiw-step-desc">Send us a message through our contact number, email, or social media channels. Let us know the treatment you're interested in and any preferred dates and times.</p>
            </div>

            <div class="hiw-step" data-aos="fade-up" data-aos-delay="100">
              <div class="hiw-step-number-wrap">
                <div class="hiw-step-num-outer">
                  <div class="hiw-step-num-inner"><span class="hiw-step-num-text">02</span></div>
                </div>
                <div class="hiw-step-icon"><i class="red-red fa-solid fa-star"></i></div>
              </div>
              <p class="hiw-step-subtitle">Choose Your Treatment</p>
              <h3 class="hiw-step-title">Select the service that suits your needs</h3>
              <p class="hiw-step-desc">Browse our range of treatments and let our experts guide you toward the best option for your skin type, concerns, and goals.</p>
            </div>

            <div class="hiw-step" data-aos="fade-up" data-aos-delay="200">
              <div class="hiw-step-number-wrap">
                <div class="hiw-step-num-outer">
                  <div class="hiw-step-num-inner"><span class="hiw-step-num-text">03</span></div>
                </div>
                <div class="hiw-step-icon"><i class="red-red fa-solid fa-calendar-day"></i></div>
              </div>
              <p class="hiw-step-subtitle">Confirm Your Appointment</p>
              <h3 class="hiw-step-title">Settle on a date and time</h3>
              <p class="hiw-step-desc">Our team will help you find a convenient slot for your appointment. Confirm the date and time that works best for you, and we will reserve your spot.</p>
            </div>

            <div class="hiw-step" data-aos="fade-up" data-aos-delay="300">
              <div class="hiw-step-number-wrap">
                <div class="hiw-step-num-outer">
                  <div class="hiw-step-num-inner"><span class="hiw-step-num-text">04</span></div>
                </div>
                <div class="hiw-step-icon"><i class="red-red fa-solid fa-star"></i></div>
              </div>
              <p class="hiw-step-subtitle">Visit Us</p>
              <h3 class="hiw-step-title">Enjoy your treatment at Geneva Wellness</h3>
              <p class="hiw-step-desc">Arrive at our state-of-the-art facility at the scheduled time. Our team will be ready to provide you with an exceptional beauty and wellness experience.</p>
            </div>

          </div>
        </div>

        <div class="hiw-cta-wrap" data-aos="fade-up" data-aos-delay="350">
          <a href="contact-us.php#contact-form" class="btn btn-primary btn-lg" title="Start Your Wellness Journey">
            Start Your Journey
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-left:0.25rem"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>
      </div>
    </section>

    <!-- ═══════════════════════════════════════════════
         BLOG
    ═══════════════════════════════════════════════ -->
    <section class="blog section" id="blog" style="background: #ffffff;">
      <div class="container">
        <div class="section-header" data-aos="fade-up">
          <p class="eyebrow">Our Blog</p>
          <h2>Stay updated with the latest in <em>beauty and wellness</em></h2>
        </div>
        <div class="blog-grid">
          <article class="blog-card" data-aos="fade-up" data-aos-delay="0">
            <div class="blog-img-wrap">
              <img src="img/blog-1.webp" alt="Benefits of Regular Facials" title="Benefits of Regular Facials" loading="lazy" />
              <span class="blog-category-badge">Skincare</span>
            </div>
            <div class="blog-content">
              <p class="blog-date">January 15, 2024</p>
              <h3>The Benefits of Regular Facials</h3>
              <p>Discover how regular facial treatments can transform your skin, improve texture, and give you long-lasting radiance.</p>
              <a href="blog/benefits-of-regular-facials.php" class="blog-link" title="Read: The Benefits of Regular Facials">Read More <i class="fas fa-arrow-right"></i></a>
            </div>
          </article>
          <article class="blog-card" data-aos="fade-up" data-aos-delay="100">
            <div class="blog-img-wrap">
              <img src="img/blog-2.webp" alt="Body Contouring Techniques" title="Body Contouring Techniques" loading="lazy" />
              <span class="blog-category-badge">Body</span>
            </div>
            <div class="blog-content">
              <p class="blog-date">February 3, 2024</p>
              <h3>Top 5 Body Contouring Techniques</h3>
              <p>Learn about the most effective body contouring techniques and find out which is best for you.</p>
              <a href="blog/body-contouring-techniques.php" class="blog-link" title="Read: Top 5 Body Contouring Techniques">Read More <i class="fas fa-arrow-right"></i></a>
            </div>
          </article>
          <article class="blog-card" data-aos="fade-up" data-aos-delay="200">
            <div class="blog-img-wrap">
              <img src="img/blog-3.webp" alt="Hair Care Tips" title="Hair Care Tips" loading="lazy" />
              <span class="blog-category-badge">Hair Care</span>
            </div>
            <div class="blog-content">
              <p class="blog-date">March 10, 2024</p>
              <h3>Hair Care Tips for a Healthier Scalp</h3>
              <p>Explore essential tips for maintaining a healthy scalp and vibrant hair with expert advice from our certified therapists.</p>
              <a href="blog/hair-care-tips.php" class="blog-link" title="Read: Hair Care Tips for a Healthier Scalp">Read More <i class="fas fa-arrow-right"></i></a>
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

  <button class="back-to-top" id="back-to-top" aria-label="Back to top"><i class="red-red fa-solid fa-arrow-up"></i></button>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="components.js"></script>
  <script src="script.js"></script>

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

  <!-- ── HERO SLIDER SCRIPT ──────────────────────────── -->
  <script>
(function(){
  'use strict';
  var hero=document.querySelector('.gw-hero'); if(!hero)return;
  var bgs=hero.querySelectorAll('.gw-bg');
  var panels=hero.querySelectorAll('.gw-content');
  var dots=hero.querySelectorAll('.gw-dot');
  var prevBtn=document.getElementById('gwPrev');
  var nextBtn=document.getElementById('gwNext');
  var numEl=document.getElementById('gwNum');
  var progEl=document.getElementById('gwProg');
  var cur=0,total=bgs.length,moving=false;
  var autoTimer=null,progTimer=null,elapsed=0;
  var AUTO=5500,DUR=700,STEP=60;
 
  function pad(n){return n<10?'0'+n:''+n;}
 
  function startProg(){
    stopProg(); elapsed=0;
    if(progEl){progEl.style.transition='none';progEl.style.width='0%';}
    requestAnimationFrame(function(){
      if(progEl) progEl.style.transition='';
      progTimer=setInterval(function(){
        elapsed+=STEP;
        var pct=Math.min((elapsed/AUTO)*100,100);
        if(progEl) progEl.style.width=pct+'%';
      },STEP);
    });
  }
  function stopProg(){
    if(progTimer){clearInterval(progTimer);progTimer=null;}
    if(progEl){progEl.style.transition='none';progEl.style.width='0%';}
  }
 
  function goTo(idx){
    if(moving)return;
    var next=((idx%total)+total)%total;
    if(next===cur)return;
    moving=true;
    var prev=cur; cur=next;
 
    bgs[prev].classList.add('is-leaving');   bgs[prev].classList.remove('is-active');
    bgs[next].classList.add('is-active');
    panels[prev].classList.add('is-leaving'); panels[prev].classList.remove('is-active');
    panels[next].classList.add('is-active');
 
    setTimeout(function(){
      bgs[prev].classList.remove('is-leaving');
      panels[prev].classList.remove('is-leaving');
      moving=false;
    },DUR+100);
 
    dots.forEach(function(d,i){
      var a=i===cur;
      d.classList.toggle('is-active',a);
      d.setAttribute('aria-selected',a?'true':'false');
    });
 
    if(numEl){
      numEl.style.cssText='transform:translateY(-8px);opacity:0;transition:none;';
      setTimeout(function(){
        numEl.textContent=pad(cur+1);
        numEl.style.cssText='transform:translateY(8px);opacity:0;transition:none;';
        requestAnimationFrame(function(){
          numEl.style.cssText='transform:translateY(0);opacity:1;transition:transform .35s ease,opacity .35s ease;';
        });
      },200);
    }
  }
 
  function startAuto(){stopAuto();startProg();autoTimer=setInterval(function(){goTo(cur+1);startProg();},AUTO);}
  function stopAuto(){if(autoTimer){clearInterval(autoTimer);autoTimer=null;}stopProg();}
 
  if(prevBtn)prevBtn.addEventListener('click',function(){stopAuto();goTo(cur-1);startAuto();});
  if(nextBtn)nextBtn.addEventListener('click',function(){stopAuto();goTo(cur+1);startAuto();});
  dots.forEach(function(d){
    d.addEventListener('click',function(){stopAuto();goTo(parseInt(d.getAttribute('data-slide'),10));startAuto();});
  });
 
  hero.addEventListener('mouseenter',stopAuto);
  hero.addEventListener('mouseleave',startAuto);
 
  var tx=0;
  hero.addEventListener('touchstart',function(e){tx=e.touches[0].clientX;stopAuto();},{passive:true});
  hero.addEventListener('touchend',function(e){
    var diff=tx-e.changedTouches[0].clientX;
    if(Math.abs(diff)>48)goTo(diff>0?cur+1:cur-1);
    startAuto();
  },{passive:true});
 
  document.addEventListener('keydown',function(e){
    if(e.key==='ArrowRight'){stopAuto();goTo(cur+1);startAuto();}
    if(e.key==='ArrowLeft'){stopAuto();goTo(cur-1);startAuto();}
  });
 
  setTimeout(function(){
    hero.querySelectorAll('.is-initial').forEach(function(el){el.classList.remove('is-initial');});
  },3600);
 
  startAuto();
})();
</script>
</body>
</html>