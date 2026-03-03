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
     Uses same img path: img/facial-treatment-clinic.jpg
═══════════════════════════════════════════════════════════ -->

<style>
/* ─────────────────────────────────────────────────────────
   HERO VARIABLES
───────────────────────────────────────────────────────── */
:root {
  --h-gold:      #CAAE5F;
  --h-gold-dim:  #B8955C;
  --h-gold-pale: rgba(202,174,95,0.18);
  --h-dark:      #090704;
  --h-white:     #ffffff;
  --h-ease:      cubic-bezier(0.22, 1, 0.36, 1);
}

/* ─────────────────────────────────────────────────────────
   OUTER SHELL
───────────────────────────────────────────────────────── */
.gw-hero {
  position: relative;
  width: 100%;
  min-height: 100vh;
  min-height: 100svh;
  overflow: hidden;
  background: var(--h-dark);
  display: flex;
  flex-direction: column;
}

/* ─────────────────────────────────────────────────────────
   FULL-BLEED BG IMAGE
───────────────────────────────────────────────────────── */
.gw-hero__bg {
  position: absolute;
  inset: 0;
  z-index: 0;
}
.gw-hero__bg img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: 68% center;
  display: block;
  animation: gwHeroBgReveal 2.2s var(--h-ease) both;
  transform-origin: center;
}
@keyframes gwHeroBgReveal {
  from { transform: scale(1.12); filter: brightness(0.3); }
  to   { transform: scale(1.0);  filter: brightness(1); }
}

/* ─────────────────────────────────────────────────────────
   OVERLAY STACK  (4 layers for cinematic depth)
───────────────────────────────────────────────────────── */
/* 1. Global dark veil */
.gw-hero__veil {
  position: absolute; inset: 0; z-index: 1;
  background: rgba(9,7,4,0.38);
}
/* 2. Strong left panel for text */
.gw-hero__panel {
  position: absolute; inset: 0; z-index: 2;
  background: linear-gradient(
    108deg,
    rgba(9,7,4,0.92)  0%,
    rgba(9,7,4,0.80)  28%,
    rgba(9,7,4,0.45)  52%,
    rgba(9,7,4,0.05)  70%,
    transparent       82%
  );
}
/* 3. Bottom fade for stats */
.gw-hero__bottom-fade {
  position: absolute; bottom: 0; left: 0; right: 0; z-index: 2;
  height: 42%;
  background: linear-gradient(to top, rgba(9,7,4,0.75) 0%, transparent 100%);
}
/* 4. Atmospheric gold glow top-right */
.gw-hero__glow {
  position: absolute; z-index: 2;
  top: -15%; right: -8%;
  width: 70vw; height: 90vh;
  background: radial-gradient(ellipse 55% 55% at 65% 35%,
    rgba(202,174,95,0.22) 0%, transparent 68%);
  pointer-events: none;
  animation: gwGlowPulse 7s ease-in-out infinite alternate;
}
@keyframes gwGlowPulse {
  from { opacity: 0.65; transform: scale(0.97); }
  to   { opacity: 1;    transform: scale(1.04); }
}

/* ─────────────────────────────────────────────────────────
   FLOATING PARTICLES  (pure CSS)
───────────────────────────────────────────────────────── */
.gw-hero__particles {
  position: absolute; inset: 0; z-index: 3;
  pointer-events: none;
  overflow: hidden;
}
.gw-p {
  position: absolute;
  border-radius: 50%;
  background: var(--h-gold);
  animation: gwParticleDrift linear infinite;
}
.gw-p:nth-child(1){width:3px;height:3px;top:18%;left:62%;opacity:.5;animation-duration:9s;animation-delay:0s;}
.gw-p:nth-child(2){width:2px;height:2px;top:44%;left:74%;opacity:.35;animation-duration:12s;animation-delay:1.5s;}
.gw-p:nth-child(3){width:4px;height:4px;top:30%;left:55%;opacity:.6;animation-duration:7s;animation-delay:3s;}
.gw-p:nth-child(4){width:2px;height:2px;top:60%;left:82%;opacity:.4;animation-duration:10s;animation-delay:0.8s;}
.gw-p:nth-child(5){width:3px;height:3px;top:72%;left:58%;opacity:.45;animation-duration:14s;animation-delay:2.2s;}
.gw-p:nth-child(6){width:2px;height:2px;top:25%;left:88%;opacity:.3;animation-duration:11s;animation-delay:4s;}
.gw-p:nth-child(7){width:5px;height:5px;top:52%;left:67%;opacity:.25;animation-duration:8s;animation-delay:1s;}
@keyframes gwParticleDrift {
  0%   { transform: translateY(0)    scale(1);   box-shadow: 0 0 0 rgba(202,174,95,0); }
  50%  { transform: translateY(-28px) scale(1.4); box-shadow: 0 0 10px rgba(202,174,95,0.7); }
  100% { transform: translateY(0)    scale(1);   box-shadow: 0 0 0 rgba(202,174,95,0); }
}

/* ─────────────────────────────────────────────────────────
   DECORATIVE GEOMETRY
───────────────────────────────────────────────────────── */
/* Thin vertical gold rule — left edge marker */
.gw-hero__rule {
  position: absolute;
  left: clamp(2.5rem, 5.5vw, 5.5rem);
  top: 14%; bottom: 18%;
  width: 1px;
  background: linear-gradient(
    to bottom,
    transparent 0%,
    rgba(202,174,95,0.55) 15%,
    rgba(202,174,95,0.55) 85%,
    transparent 100%
  );
  z-index: 5;
  transform-origin: top;
  animation: gwRuleReveal 1.6s var(--h-ease) 0.4s both;
}
.gw-hero__rule::before {
  content: '';
  position: absolute;
  top: 50%; left: 50%;
  transform: translate(-50%,-50%) rotate(45deg);
  width: 6px; height: 6px;
  background: var(--h-gold);
  box-shadow: 0 0 10px rgba(202,174,95,0.9);
}
@keyframes gwRuleReveal {
  from { transform: scaleY(0); opacity: 0; }
  to   { transform: scaleY(1); opacity: 1; }
}

/* Elegant corner frame — top right of the image area */
.gw-hero__corner {
  position: absolute;
  top: clamp(1.5rem, 4vh, 3.5rem);
  right: clamp(1.5rem, 4vw, 3.5rem);
  z-index: 5;
  pointer-events: none;
}
.gw-hero__corner-svg {
  width: clamp(80px,10vw,140px);
  height: clamp(80px,10vw,140px);
  opacity: 0;
  animation: gwFadeScale 1.2s var(--h-ease) 1.4s both;
}
@keyframes gwFadeScale {
  from { opacity: 0; transform: scale(0.6) rotate(-15deg); }
  to   { opacity: 1; transform: scale(1)   rotate(0deg); }
}

/* Rotating ring ornament */
.gw-hero__ring {
  position: absolute;
  right: clamp(5%,14vw,18%);
  top: 50%;
  transform: translateY(-50%);
  z-index: 4;
  width: clamp(180px,22vw,300px);
  height: clamp(180px,22vw,300px);
  pointer-events: none;
}
.gw-hero__ring-outer {
  position: absolute; inset: 0;
  border-radius: 50%;
  border: 1px solid rgba(202,174,95,0.2);
  animation: gwRingSpin 30s linear infinite;
  opacity: 0;
  animation: gwRingAppear 1.5s var(--h-ease) 1.8s both,
             gwRingSpin 30s linear 3.3s infinite;
}
.gw-hero__ring-inner {
  position: absolute;
  inset: 22%;
  border-radius: 50%;
  border: 1px dashed rgba(202,174,95,0.15);
  animation: gwRingAppear 1.5s var(--h-ease) 2s both,
             gwRingSpinRev 18s linear 3.5s infinite;
}
@keyframes gwRingSpin    { from { transform: rotate(0deg); }   to { transform: rotate(360deg); } }
@keyframes gwRingSpinRev { from { transform: rotate(0deg); }   to { transform: rotate(-360deg); } }
@keyframes gwRingAppear  { from { opacity: 0; transform: scale(0.5); } to { opacity: 1; transform: scale(1); } }

/* ─────────────────────────────────────────────────────────
   MAIN CONTENT
───────────────────────────────────────────────────────── */
.gw-hero__body {
  position: relative;
  z-index: 10;
  flex: 1;
  display: flex;
  align-items: center;
  padding: clamp(6rem, 14vh, 10rem) clamp(1.5rem, 5vw, 3rem) clamp(5rem, 10vh, 7rem);
  padding-left: clamp(4.5rem, 9.5vw, 9rem); /* clear the rule */
}

.gw-hero__content {
  max-width: min(800px, 52vw);
}
@media (max-width: 768px) {
  .gw-hero__content { max-width: 100%; }
}

/* ── EYEBROW PILL ── */
.gw-hero__eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 0.55rem;
  border: 1px solid rgba(202,174,95,0.35);
  border-radius: 40px;
  padding: 0.38rem 1rem 0.38rem 0.55rem;
  background: rgba(202,174,95,0.08);
  backdrop-filter: blur(6px);
  margin-bottom: 1.8rem;
  opacity: 0;
  animation: gwSlideUp 0.9s var(--h-ease) 0.7s both;
}
.gw-hero__eyebrow-dot {
  width: 8px; height: 8px;
  border-radius: 50%;
  background: var(--h-gold);
  flex-shrink: 0;
  box-shadow: 0 0 0 2px rgba(202,174,95,0.3);
  animation: gwDotPulse 2.5s ease-in-out infinite;
}
@keyframes gwDotPulse {
  0%,100% { box-shadow: 0 0 0   2px rgba(202,174,95,0.3); }
  50%      { box-shadow: 0 0 12px 4px rgba(202,174,95,0.7); }
}
.gw-hero__eyebrow span {
  font-family: 'Inter', sans-serif;
  font-size: 0.7rem;
  font-weight: 700;
  letter-spacing: 0.18em;
  text-transform: uppercase;
  color: var(--h-gold);
}

/* ── HEADLINE ── */
.gw-hero__title {
  font-family: 'Lora', serif;
  font-weight: 400;
  font-size: clamp(2.8rem, 5.5vw, 5.4rem);
  line-height: 1.1;
  letter-spacing: -0.025em;
  color: var(--h-white);
  margin: 0 0 1.6rem;
}
.gw-hero__title em {
  font-style: italic;
  color: var(--h-gold);
  display: block;
}
.gw-hero__title-line {
  display: block;
  overflow: hidden;
}
.gw-hero__title-line-inner {
  display: block;
  opacity: 0;
  animation: gwTitleReveal 1s var(--h-ease) both;
}
.gw-hero__title-line:nth-child(1) .gw-hero__title-line-inner { animation-delay: 0.9s; }
.gw-hero__title-line:nth-child(2) .gw-hero__title-line-inner { animation-delay: 1.05s; }
.gw-hero__title-line:nth-child(3) .gw-hero__title-line-inner { animation-delay: 1.2s; }
@keyframes gwTitleReveal {
  from { opacity: 0; transform: translateY(110%) skewY(2deg); }
  to   { opacity: 1; transform: translateY(0)    skewY(0deg); }
}

/* ── SUBTITLE ── */
.gw-hero__sub {
  font-family: 'Inter', sans-serif;
  font-size: clamp(0.9rem, 1.5vw, 1.08rem);
  font-weight: 300;
  line-height: 1.8;
  color: rgba(255,255,255,0.65);
  max-width: 460px;
  margin: 0 0 2.4rem;
  opacity: 0;
  animation: gwSlideUp 0.9s var(--h-ease) 1.35s both;
}

/* ── CTA BUTTONS ── */
.gw-hero__actions {
  display: flex;
  align-items: center;
  gap: 1rem;
  flex-wrap: wrap;
  margin-bottom: 2.8rem;
  opacity: 0;
  animation: gwSlideUp 0.9s var(--h-ease) 1.5s both;
}

.gw-hero__btn-book {
  display: inline-flex;
  align-items: center;
  gap: 0.65rem;
  padding: 1rem 2.2rem;
  background: linear-gradient(135deg, #CAAE5F 0%, #B8955C 100%);
  color: #ffffff;
  font-family: 'Inter', sans-serif;
  font-size: 0.88rem;
  font-weight: 700;
  letter-spacing: 0.05em;
  border-radius: 60px;
  text-decoration: none;
  box-shadow:
    0 8px 28px rgba(202,174,95,0.45),
    0 2px 6px  rgba(0,0,0,0.4),
    inset 0 1px 0 rgba(255,255,255,0.25);
  transition: all 0.35s var(--h-ease);
  white-space: nowrap;
  position: relative;
  overflow: hidden;
}
.gw-hero__btn-book:hover{
  color:#ffffff;
}
.gw-hero__btn-book::before {
  content: '';
  position: absolute; inset: 0;
  background: linear-gradient(135deg, rgba(255,255,255,0.18) 0%, transparent 50%);
  opacity: 0;
  transition: opacity 0.3s ease;
}
.gw-hero__btn-book:hover::before { opacity: 1; }
.gw-hero__btn-book:hover {
  transform: translateY(-3px) scale(1.02);
  box-shadow:
    0 16px 44px rgba(202,174,95,0.55),
    0 4px 12px  rgba(0,0,0,0.4);
}
.gw-hero__btn-book svg {
  transition: transform 0.3s var(--h-ease);
  flex-shrink: 0;
}
.gw-hero__btn-book:hover svg { transform: translateX(5px); }

.gw-hero__btn-explore {
  display: inline-flex;
  align-items: center;
  gap: 0.75rem;
  padding: 1rem 1.75rem;
  border: 1.5px solid rgba(255,255,255,0.22);
  border-radius: 60px;
  background: rgba(255,255,255,0.06);
  color: rgba(255,255,255,0.88);
  font-family: 'Inter', sans-serif;
  font-size: 0.88rem;
  font-weight: 600;
  letter-spacing: 0.03em;
  text-decoration: none;
  backdrop-filter: blur(10px);
  transition: all 0.3s ease;
  white-space: nowrap;
}
.gw-hero__btn-explore:hover {
  border-color: rgba(202,174,95,0.5);
  background: rgba(202,174,95,0.1);
  color: var(--h-gold);
  transform: translateY(-2px);
}
.gw-hero__btn-play {
  width: 30px; height: 30px;
  border-radius: 50%;
  background: rgba(202,174,95,0.18);
  border: 1px solid rgba(202,174,95,0.35);
  display: flex; align-items: center; justify-content: center;
  transition: background 0.3s ease;
  flex-shrink: 0;
}
.gw-hero__btn-explore:hover .gw-hero__btn-play {
  background: rgba(202,174,95,0.3);
}

/* ── SOCIAL PROOF ── */
.gw-hero__proof {
  display: flex;
  align-items: center;
  gap: 1.25rem;
  opacity: 0;
  animation: gwSlideUp 0.9s var(--h-ease) 1.65s both;
}
.gw-hero__avatars {
  display: flex;
  align-items: center;
}
.gw-hero__avatar {
  width: 34px; height: 34px;
  border-radius: 50%;
  border: 2px solid rgba(255,255,255,0.4);
  display: flex; align-items: center; justify-content: center;
  font-family: 'Inter', sans-serif;
  font-size: 0.68rem;
  font-weight: 700;
  color: #fff;
  margin-right: -9px;
  flex-shrink: 0;
  transition: transform 0.2s ease;
}
.gw-hero__avatars:hover .gw-hero__avatar { margin-right: -3px; }
.gw-hero__proof-sep {
  width: 1px; height: 30px;
  background: rgba(255,255,255,0.18);
  flex-shrink: 0;
  margin-left: 9px;
}
.gw-hero__proof-copy {
  display: flex; flex-direction: column; gap: 2px;
}
.gw-hero__stars {
  color: var(--h-gold);
  font-size: 0.7rem;
  letter-spacing: 0.05em;
}
.gw-hero__proof-copy span {
  font-family: 'Inter', sans-serif;
  font-size: 0.8rem;
  color: rgba(255,255,255,0.6);
}
.gw-hero__proof-copy strong { color: rgba(255,255,255,0.9); }

/* ─────────────────────────────────────────────────────────
   FLOATING GLASS CARDS  (desktop only)
───────────────────────────────────────────────────────── */
.gw-hero__cards {
  position: absolute;
  z-index: 10;
  right: clamp(2rem, 5vw, 5rem);
  top: 50%;
  transform: translateY(-50%);
  display: flex;
  flex-direction: column;
  gap: 1rem;
  pointer-events: none;
}

.gw-hero__card {
  display: flex;
  align-items: center;
  gap: 0.75rem;
  padding: 0.9rem 1.2rem;
  background: rgba(9,7,4,0.45);
  backdrop-filter: blur(24px);
  -webkit-backdrop-filter: blur(24px);
  border: 1px solid rgba(202,174,95,0.22);
  border-radius: 14px;
  box-shadow:
    0 8px 32px rgba(0,0,0,0.35),
    inset 0 1px 0 rgba(255,255,255,0.08);
  opacity: 0;
  animation: gwCardReveal 0.9s var(--h-ease) both;
  white-space: nowrap;
  min-width: 190px;
}
.gw-hero__card:nth-child(1) { animation-delay: 1.7s; }
.gw-hero__card:nth-child(2) { animation-delay: 1.9s; }
.gw-hero__card:nth-child(3) { animation-delay: 2.1s; }
@keyframes gwCardReveal {
  from { opacity: 0; transform: translateX(30px); }
  to   { opacity: 1; transform: translateX(0); }
}

/* Idle float after reveal */
.gw-hero__card:nth-child(1) { animation: gwCardReveal 0.9s var(--h-ease) 1.7s both, gwFloat1 5s ease-in-out 2.8s infinite alternate; }
.gw-hero__card:nth-child(2) { animation: gwCardReveal 0.9s var(--h-ease) 1.9s both, gwFloat2 6s ease-in-out 3.2s infinite alternate; }
.gw-hero__card:nth-child(3) { animation: gwCardReveal 0.9s var(--h-ease) 2.1s both, gwFloat3 4.5s ease-in-out 3.6s infinite alternate; }
@keyframes gwFloat1 { from { transform: translateY(0); }  to { transform: translateY(-10px); } }
@keyframes gwFloat2 { from { transform: translateY(0); }  to { transform: translateY(-7px); } }
@keyframes gwFloat3 { from { transform: translateY(0); }  to { transform: translateY(-12px); } }

.gw-hero__card-emoji {
  font-size: 1.4rem;
  flex-shrink: 0;
}
.gw-hero__card-num {
  font-family: 'Lora', serif;
  font-size: 1.3rem;
  font-weight: 600;
  color: var(--h-gold);
  flex-shrink: 0;
}
.gw-hero__card-info strong {
  display: block;
  font-family: 'Inter', sans-serif;
  font-size: 0.83rem;
  font-weight: 700;
  color: #fff;
}
.gw-hero__card-info span {
  font-family: 'Inter', sans-serif;
  font-size: 0.7rem;
  color: rgba(255,255,255,0.52);
}

/* ─────────────────────────────────────────────────────────
   BOTTOM STATS BAR
───────────────────────────────────────────────────────── */
.gw-hero__stats {
  position: relative;
  z-index: 10;
  flex-shrink: 0;
  opacity: 0;
  animation: gwSlideUp 1s var(--h-ease) 2s both;
}
.gw-hero__stats-inner {
  display: flex;
  align-items: stretch;
  border-top: 1px solid rgba(202,174,95,0.18);
  background: rgba(9,7,4,0.6);
  backdrop-filter: blur(20px);
  -webkit-backdrop-filter: blur(20px);
}
.gw-hero__stat {
  flex: 1;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  padding: 1.2rem 0.75rem;
  gap: 0.18rem;
  position: relative;
  cursor: default;
  transition: background 0.3s ease;
}
.gw-hero__stat:hover { background: rgba(202,174,95,0.06); }
.gw-hero__stat + .gw-hero__stat::before {
  content: '';
  position: absolute;
  left: 0; top: 22%; bottom: 22%;
  width: 1px;
  background: rgba(202,174,95,0.18);
}
.gw-hero__stat-num {
  font-family: 'Lora', serif;
  font-size: clamp(1.35rem, 2.4vw, 1.7rem);
  font-weight: 600;
  color: var(--h-gold);
  line-height: 1;
}
.gw-hero__stat-label {
  font-family: 'Inter', sans-serif;
  font-size: 0.68rem;
  font-weight: 600;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: rgba(255,255,255,0.45);
}

/* ─────────────────────────────────────────────────────────
   SCROLL CUE
───────────────────────────────────────────────────────── */
.gw-hero__scroll {
  position: absolute;
  /* Sits just above the stats bar; adjust if stats bar height changes */
  bottom: calc(68px + 1.4rem);
  left: 50%;
  transform: translateX(-50%);
  z-index: 10;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 0.5rem;
  opacity: 0;
  animation: gwSlideUp 1s var(--h-ease) 2.2s both;
}
.gw-hero__scroll-mouse {
  width: 21px; height: 34px;
  border: 1.5px solid rgba(202,174,95,0.4);
  border-radius: 12px;
  display: flex;
  align-items: flex-start;
  justify-content: center;
  padding-top: 5px;
}
.gw-hero__scroll-wheel {
  width: 2.5px; height: 7px;
  background: var(--h-gold);
  border-radius: 3px;
  animation: gwScrollWheel 2s ease-in-out infinite;
}
@keyframes gwScrollWheel {
  0%   { transform: translateY(0);    opacity: 1; }
  55%  { transform: translateY(11px); opacity: 0; }
  56%  { transform: translateY(0);    opacity: 0; }
  100% { opacity: 1; }
}
.gw-hero__scroll-text {
  font-family: 'Inter', sans-serif;
  font-size: 0.58rem;
  letter-spacing: 0.2em;
  text-transform: uppercase;
  color: rgba(255,255,255,0.3);
  writing-mode: vertical-rl;
}

/* ─────────────────────────────────────────────────────────
   SHARED KEYFRAME
───────────────────────────────────────────────────────── */
@keyframes gwSlideUp {
  from { opacity: 0; transform: translateY(26px); }
  to   { opacity: 1; transform: translateY(0); }
}

/* ─────────────────────────────────────────────────────────
   RESPONSIVE
───────────────────────────────────────────────────────── */
@media (max-width: 1100px) {
  .gw-hero__cards { display: none; }
  .gw-hero__ring  { display: none; }
  .gw-hero__panel {
    background: linear-gradient(
      160deg,
      rgba(9,7,4,0.88) 0%,
      rgba(9,7,4,0.70) 50%,
      rgba(9,7,4,0.15) 80%,
      transparent 100%
    );
  }
}
@media (max-width: 768px) {
  .gw-hero__bg img { object-position: 72% center; }
  .gw-hero__title  { font-size: clamp(2.4rem, 9vw, 3.4rem); }
  .gw-hero__rule   { display: none; }
  .gw-hero__scroll { display: none; }
  .gw-hero__body   { padding-left: 1.5rem; padding-right: 1.5rem; }
  .gw-hero__content{ max-width: 100%; }
  .gw-hero__stats-inner { flex-wrap: wrap; }
  .gw-hero__stat   { min-width: 50%; }
  .gw-hero__panel  {
    background: linear-gradient(
      180deg,
      rgba(9,7,4,0.82) 0%,
      rgba(9,7,4,0.65) 55%,
      rgba(9,7,4,0.25) 100%
    );
  }
}
@media (max-width: 480px) {
  .gw-hero__title  { font-size: clamp(2rem, 8vw, 2.8rem); }
  .gw-hero__actions{ gap: 0.7rem; }
  .gw-hero__btn-book,
  .gw-hero__btn-explore { font-size: 0.82rem; padding: 0.85rem 1.4rem; }
  .gw-hero__btn-explore .gw-hero__btn-play { display: none; }
  .gw-hero__stat   { min-width: 50%; padding: 1rem 0.5rem; }
  .gw-hero__corner { display: none; }
}
</style>
</head>
<body class="home-page">


<!-- ═══════════════════════════════════════════════════════
     HERO MARKUP
══════════════════════════════════════════════════════════ -->
<section class="gw-hero" id="hero" aria-label="Hero — Geneva Wellness Institute">

  <!-- Full-bleed photo -->
  <div class="gw-hero__bg" aria-hidden="true">
    <img
      src="img/home-hero-updated-new.png"
      alt="Premium facial treatment at Geneva Wellness Institute"
      loading="eager"
      fetchpriority="high"
    />
  </div>

  <!-- Overlays -->
  <div class="gw-hero__veil"        aria-hidden="true"></div>
  <div class="gw-hero__panel"       aria-hidden="true"></div>
  <div class="gw-hero__bottom-fade" aria-hidden="true"></div>
  <div class="gw-hero__glow"        aria-hidden="true"></div>

  <!-- Particles -->
  <div class="gw-hero__particles" aria-hidden="true">
    <span class="gw-p"></span><span class="gw-p"></span>
    <span class="gw-p"></span><span class="gw-p"></span>
    <span class="gw-p"></span><span class="gw-p"></span>
    <span class="gw-p"></span>
  </div>

  <!-- Geometry -->
  <div class="gw-hero__rule" aria-hidden="true"></div>

  <div class="gw-hero__corner" aria-hidden="true">
    <svg class="gw-hero__corner-svg" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
      <circle cx="60" cy="60" r="57" stroke="rgba(202,174,95,0.22)" stroke-width="1"/>
      <circle cx="60" cy="60" r="44" stroke="rgba(202,174,95,0.12)" stroke-width="1" stroke-dasharray="3 5"/>
      <path d="M60 20 L65 55 L100 60 L65 65 L60 100 L55 65 L20 60 L55 55 Z" fill="rgba(202,174,95,0.15)" stroke="rgba(202,174,95,0.4)" stroke-width="0.8"/>
    </svg>
  </div>

  <div class="gw-hero__ring" aria-hidden="true">
    <div class="gw-hero__ring-outer"></div>
    <div class="gw-hero__ring-inner"></div>
  </div>

  <!-- ── MAIN BODY ── -->
  <div class="gw-hero__body">
    <div class="gw-hero__content">

      <!-- Eyebrow -->
      <div class="gw-hero__eyebrow" role="text">
        <span class="gw-hero__eyebrow-dot"></span>
        <span>Award-Winning Clinic &nbsp;·&nbsp; Alabang, Philippines</span>
      </div>

      <!-- Title -->
      <h1 class="gw-hero__title">
        <span class="gw-hero__title-line">
          <span class="gw-hero__title-line-inner">Transformative</span>
        </span>
        <span class="gw-hero__title-line">
          <span class="gw-hero__title-line-inner"><em>Wellness &amp; Aesthetic</em></span>
        </span>
        <span class="gw-hero__title-line">
          <span class="gw-hero__title-line-inner">Treatments for Everyone</span>
        </span>
      </h1>

      <!-- Subtitle -->
      <p class="gw-hero__sub">
        Premium non-invasive treatments crafted for your unique skin and hair goals —
        backed by 15&plus; years of expertise and cutting-edge technology.
      </p>

      <!-- CTAs -->
      <div class="gw-hero__actions">
        <a href="contact-us.php#contact-form" class="gw-hero__btn-book">
          <span>Book Free Consultation</span>
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
            <path d="M5 12h14M12 5l7 7-7 7"/>
          </svg>
        </a>
        <a href="treatments.php" class="gw-hero__btn-explore">
          <span class="gw-hero__btn-play" aria-hidden="true">
            <svg width="11" height="11" viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
          </span>
          <span>Explore Treatments</span>
        </a>
      </div>

      <!-- Social proof -->
      <div class="gw-hero__proof">
        <div class="gw-hero__avatars" aria-label="Client avatars">
          <div class="gw-hero__avatar" style="background:linear-gradient(135deg,#CAAE5F,#B8955C)" aria-hidden="true">M</div>
          <div class="gw-hero__avatar" style="background:linear-gradient(135deg,#B8955C,#9a7838)" aria-hidden="true">G</div>
          <div class="gw-hero__avatar" style="background:linear-gradient(135deg,#d4956e,#c07840)" aria-hidden="true">R</div>
          <div class="gw-hero__avatar" style="background:linear-gradient(135deg,#CAAE5F,#e0cc90)" aria-hidden="true">A</div>
          <div class="gw-hero__avatar" style="background:rgba(202,174,95,0.2);border-color:rgba(202,174,95,0.4);color:var(--h-gold);font-size:0.62rem" aria-hidden="true">+</div>
        </div>
        <div class="gw-hero__proof-sep" aria-hidden="true"></div>
        <div class="gw-hero__proof-copy">
          <div class="gw-hero__stars" aria-label="5 star rating">★★★★★</div>
          <span>Trusted by <strong>10,000+</strong> clients</span>
        </div>
      </div>

    </div>
  </div><!-- /.gw-hero__body -->

  <!-- Floating stat cards (hidden on small screens) -->
  <div class="gw-hero__cards" aria-hidden="true">
    <div class="gw-hero__card">
      <span class="gw-hero__card-emoji">⭐</span>
      <div class="gw-hero__card-info">
        <strong>5.0 Rating</strong>
        <span>500+ Google Reviews</span>
      </div>
    </div>
    <div class="gw-hero__card">
      <span class="gw-hero__card-num">15+</span>
      <div class="gw-hero__card-info">
        <strong>Years of Excellence</strong>
        <span>Certified Professionals</span>
      </div>
    </div>
    <div class="gw-hero__card">
      <span class="gw-hero__card-emoji">✨</span>
      <div class="gw-hero__card-info">
        <strong>Non-Invasive</strong>
        <span>Zero Downtime</span>
      </div>
    </div>
  </div>

  <!-- Scroll cue -->
  <div class="gw-hero__scroll" aria-hidden="true">
    <div class="gw-hero__scroll-mouse">
      <div class="gw-hero__scroll-wheel"></div>
    </div>
    <span class="gw-hero__scroll-text">Scroll</span>
  </div>

  <!-- Stats bar -->
  <div class="gw-hero__stats">
    <div class="gw-hero__stats-inner">
      <div class="gw-hero__stat">
        <strong class="gw-hero__stat-num">10,000+</strong>
        <span class="gw-hero__stat-label">Happy Clients</span>
      </div>
      <div class="gw-hero__stat">
        <strong class="gw-hero__stat-num">15+</strong>
        <span class="gw-hero__stat-label">Years Experience</span>
      </div>
      <div class="gw-hero__stat">
        <strong class="gw-hero__stat-num">20+</strong>
        <span class="gw-hero__stat-label">Treatments</span>
      </div>
      <div class="gw-hero__stat">
        <strong class="gw-hero__stat-num">5&#9733;</strong>
        <span class="gw-hero__stat-label">Google Rating</span>
      </div>
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

          <div class="hero-proof" data-delay="4">
            <div class="hero-avatars">
              <div class="hero-avatar" style="background: linear-gradient(135deg, #CAAE5F, #B8955C)">M</div>
              <div class="hero-avatar" style="background: linear-gradient(135deg, #B8955C, #a07840)">G</div>
              <div class="hero-avatar" style="background: linear-gradient(135deg, #FAD2B8, #d4956e)">R</div>
              <div class="hero-avatar" style="background: linear-gradient(135deg, #CAAE5F, #e5d5a0)">A</div>
              <div class="hero-avatar hero-avatar-more">+</div>
            </div>
            <div class="hero-proof-text">
              <div class="hero-stars">★★★★★</div>
              <span>Trusted by <strong>10,000+</strong> clients</span>
            </div>
          </div>
        </div>

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
            <span>Latest FDA-approved devices &amp; equipment</span>
          </div>
        </div>
        <div class="trust-card" data-aos="fade-up" data-aos-delay="160">
          <div class="trust-card-icon">👩‍⚕️</div>
          <div class="trust-card-content">
            <strong>Certified Professionals</strong>
            <span>Licensed doctors &amp; expert estheticians</span>
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
              <img src="img\services\hair-restoratial.jpg" alt="Hair Restoration at Geneva Wellness" loading="lazy" />
              <div class="ts-img-overlay"></div>
              <div class="ts-badge">Non-Invasive</div>
              <div class="ts-results-card">
                <div class="ts-results-icon">🌱</div>
                <div>
                  <strong>Thicker Hair</strong>
                  <span>Visible regrowth in weeks</span>
                </div>
              </div>
            </div>
            <div class="ts-img-accent">
              <img src="img/home-hair-1.jpg" alt="Hair restoration detail" loading="lazy" />
            </div>
          </div>
          <div class="ts-content" data-aos="fade-left" data-aos-delay="150">
            <p class="eyebrow">Restore Hair Density</p>
            <h3>Hair Restoration — Regain your confidence with <em>thicker, healthier hair</em></h3>
            <p class="ts-desc">Our Hair Restoration treatments stimulate hair growth and improve scalp health, addressing hair thinning and loss. We offer PRP therapy, laser therapy, and topical solutions to promote natural hair regrowth. These non-invasive treatments are tailored to your specific needs, providing noticeable improvements in hair density and quality.</p>
            <div class="ts-benefits">
              <div class="ts-benefit"><span class="ts-check">✓</span> Stimulates natural hair growth</div>
              <div class="ts-benefit"><span class="ts-check">✓</span> Improves overall scalp condition</div>
              <div class="ts-benefit"><span class="ts-check">✓</span> Comfortable, non-surgical treatments</div>
              <div class="ts-benefit"><span class="ts-check">✓</span> Customized plans for your needs</div>
            </div>
            <div class="treatment-tags">
              <span class="tag">Thicker Hair</span>
              <span class="tag">Scalp Health</span>
              <span class="tag">Personalized Care</span>
            </div>
            <div class="ts-cta-row">
              <a href="contact-us.php#contact-form" class="btn btn-primary">Book Hair Restoration</a>
              <a href="treatments.php#hair-restoration" class="ts-learn-more">Learn more →</a>
            </div>
          </div>
        </div>

        <!-- Treatment 2: Flaky Scalp Therapy -->
        <div class="treatment-showcase-row ts-row-reverse" id="flaky-scalp" data-aos="fade-up">
          <div class="ts-visual" data-aos="fade-left" data-aos-delay="100">
            <div class="ts-img-wrap">
              <img src="img\services\flaky-scalp.jpg" alt="Flaky Scalp Therapy at Geneva Wellness" loading="lazy" />
              <div class="ts-img-overlay"></div>
              <div class="ts-badge">Soothing Treatment</div>
              <div class="ts-results-card">
                <div class="ts-results-icon">❄️</div>
                <div>
                  <strong>Flake-Free</strong>
                  <span>Healthy, refreshed scalp</span>
                </div>
              </div>
            </div>
            <div class="ts-img-accent ts-img-accent-left">
              <img src="img/home-service-2.jpg" alt="Scalp therapy detail" loading="lazy" />
            </div>
          </div>
          <div class="ts-content" data-aos="fade-right" data-aos-delay="150">
            <p class="eyebrow">Soothe and Strengthen</p>
            <h3>Flaky Scalp Therapy — Soothe and <em>revitalize your scalp</em></h3>
            <p class="ts-desc">Flaky Scalp Therapy targets dandruff and other scalp conditions, offering deep cleansing and intense hydration. It removes dead skin cells and excess oil, leaving the scalp healthier and more comfortable. This therapy strengthens hair follicles and promotes shiny, healthy hair.</p>
            <div class="ts-benefits">
              <div class="ts-benefit"><span class="ts-check">✓</span> Treats and prevents dandruff</div>
              <div class="ts-benefit"><span class="ts-check">✓</span> Moisturizes and nourishes the scalp</div>
              <div class="ts-benefit"><span class="ts-check">✓</span> Removes impurities for a healthy scalp</div>
              <div class="ts-benefit"><span class="ts-check">✓</span> Promotes stronger, shinier hair</div>
            </div>
            <div class="treatment-tags">
              <span class="tag">Dandruff Control</span>
              <span class="tag">Deep Cleansing</span>
              <span class="tag">Scalp Hydration</span>
            </div>
            <div class="ts-cta-row">
              <a href="contact-us.php#contact-form" class="btn btn-primary">Book Flaky Scalp Therapy</a>
              <a href="treatments.php#flaky-scalp" class="ts-learn-more">Learn more →</a>
            </div>
          </div>
        </div>

        <!-- Treatment 3: Scalp Psoriasis Therapy -->
        <div class="treatment-showcase-row" id="scalp-psoriasis" data-aos="fade-up">
          <div class="ts-visual" data-aos="fade-right" data-aos-delay="100">
            <div class="ts-img-wrap">
              <img src="img\services\scalp-img.jpg" alt="Scalp Psoriasis Therapy at Geneva Wellness" loading="lazy" />
              <div class="ts-img-overlay"></div>
              <div class="ts-badge">Medicated Care</div>
              <div class="ts-results-card">
                <div class="ts-results-icon">🩺</div>
                <div>
                  <strong>Lasting Relief</strong>
                  <span>Reduced itching &amp; flaking</span>
                </div>
              </div>
            </div>
            <div class="ts-img-accent">
              <img src="img/home-service-3.jpg" alt="Psoriasis therapy detail" loading="lazy" />
            </div>
          </div>
          <div class="ts-content" data-aos="fade-left" data-aos-delay="150">
            <p class="eyebrow">Manage and Relieve Psoriasis</p>
            <h3>Scalp Psoriasis Therapy — Relief for <em>a healthier scalp</em></h3>
            <p class="ts-desc">Scalp Psoriasis Therapy reduces the symptoms of psoriasis, such as itching and flakiness. This treatment combines medicated products and therapeutic techniques to soothe the scalp and promote healthy skin cell turnover. Regular therapy helps manage psoriasis symptoms, providing lasting relief and improving scalp health.</p>
            <div class="ts-benefits">
              <div class="ts-benefit"><span class="ts-check">✓</span> Soothes itching and flakiness</div>
              <div class="ts-benefit"><span class="ts-check">✓</span> Reduces inflammation for a healthier scalp</div>
              <div class="ts-benefit"><span class="ts-check">✓</span> Uses specialized products for psoriasis</div>
              <div class="ts-benefit"><span class="ts-check">✓</span> Promotes healthy skin cell turnover</div>
            </div>
            <div class="treatment-tags">
              <span class="tag">Symptom Relief</span>
              <span class="tag">Anti-Inflammatory</span>
              <span class="tag">Medicated Care</span>
            </div>
            <div class="ts-cta-row">
              <a href="contact-us.php#contact-form" class="btn btn-primary">Book Scalp Psoriasis Therapy</a>
              <a href="treatments.php#scalp-psoriasis" class="ts-learn-more">Learn more →</a>
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
            <img src="img/wellness-treatment-new.jpg" alt="Advanced skin care treatment" loading="lazy" />
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
          <p class="section-desc">Witness the transformative power of our treatments with real client before &amp; after results.</p>
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
            <img src="https://img.youtube.com/vi/bD7H1rx4nOw/maxresdefault.jpg" alt="Geneva Wellness Institute Video" onerror="this.src='https://img.youtube.com/vi/bD7H1rx4nOw/hqdefault.jpg'" />
            <div class="video-thumbnail-overlay"></div>
            <div class="video-play-btn" id="videoPlayBtn">
              <div class="video-play-circle">
                <svg width="28" height="28" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
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
          <p class="eyebrow">Our Achievements</p>
          <h2>Proudly showcasing our excellence in <em>beauty and wellness</em></h2>
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
                  <div class="author-avatar" style="background: linear-gradient(135deg, var(--accent-gold), var(--accent-gold-dark))">G</div>
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
                  <div class="author-avatar" style="background: linear-gradient(135deg, #CAAE5F, #B8955C)">M</div>
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
                <div class="hiw-step-icon">💬</div>
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
                <div class="hiw-step-icon">✨</div>
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
                <div class="hiw-step-icon">📅</div>
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
    <section class="blog section" id="blog" style="background: #ffffff;">
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