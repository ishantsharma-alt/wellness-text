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

  <?php include 'header.php'; ?>

  <main>

    <!-- ═══════════════════════════════════════════════
         HERO SECTION
    ═══════════════════════════════════════════════ -->
    <section class="hero-enhanced" id="hero">
      <!-- Background Layers -->
      <div class="hero-bg-layer">
        <div class="hero-gradient-mesh"></div>
        <div class="hero-noise"></div>
        <!-- Floating orbs -->
        <div class="hero-orb hero-orb-1"></div>
        <div class="hero-orb hero-orb-2"></div>
        <div class="hero-orb hero-orb-3"></div>
        <!-- Decorative lines -->
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
            <span class="hero-title-line">Your journey</span>
            <span class="hero-title-line hero-title-italic">to radiant</span>
            <span class="hero-title-line">confidence</span>
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
          <!-- Main image -->
          <div class="hero-img-container">
            <div class="hero-img-ring-outer"></div>
            <div class="hero-img-ring-inner"></div>
            <div class="hero-img-frame">
              <img src="img/facial-treatment-clinic.jpg" alt="Geneva Wellness Institute Premium Facial Treatment" class="hero-main-img" loading="eager" />
              <div class="hero-img-overlay-grad"></div>
            </div>

            <!-- Floating cards -->
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

            <!-- Decorative elements -->
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
        <!-- Duplicate for seamless loop -->
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
      <!-- Left: decorative -->
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

      <!-- Right: content -->
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
          <!-- BA Card 1 -->
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

          <!-- BA Card 2 -->
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
                <blockquote><p>"The HIFU treatment results exceeded my expectations. My skin feels tighter and more lifted. The doctors are highly professional and take time to explain everything. I'm already recommending them to all my friends!"</p></blockquote>
                <footer class="testimonial-author">
                  <div class="author-avatar" style="background: linear-gradient(135deg, #CAAE5F, var(--primary))">M</div>
                  <div><strong>Maria Santos</strong><span>HIFU Treatment Client</span></div>
                </footer>
              </article>
            </div>
            <div class="swiper-slide">
              <article class="testimonial-card enhanced-testimonial">
                <div class="testimonial-quote">❝</div>
                <div class="testimonial-stars">★★★★★</div>
                <blockquote><p>"The expertise and care at Geneva Wellness is unmatched. From the consultation to post-treatment follow-up, everything was seamless. I've seen visible improvements in my skin texture and tone. Highly recommended!"</p></blockquote>
                <footer class="testimonial-author">
                  <div class="author-avatar" style="background: linear-gradient(135deg, #8a0b07, #CAAE5F)">R</div>
                  <div><strong>Rachel Tan</strong><span>CO2 Laser Client</span></div>
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
              <a href="#" class="blog-link">Read More →</a>
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
              <a href="#" class="blog-link">Read More →</a>
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
              <a href="#" class="blog-link">Read More →</a>
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
</body>
</html>