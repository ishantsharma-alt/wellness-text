<?php
$page_title = 'Our Advanced Treatments';
$page_subtitle = 'At Geneva Wellness Institute, we offer a wide range of innovative treatments to enhance your natural beauty and well-being. From rejuvenating facial therapies to effective slimming solutions and specialized hair and scalp care, our expert team is dedicated to providing personalized care that delivers exceptional results. Explore our treatments and find the perfect solution for your unique needs.';
$breadcrumb = [
  ['label' => 'Treatments', 'url' => null]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Explore premium aesthetic treatments at Geneva Wellness Institute. From HIFU to laser therapy, discover advanced procedures for your wellness goals." />
  <meta name="keywords" content="aesthetic treatments, HIFU, laser therapy, body contouring, skin treatments, Geneva Wellness" />
  <meta name="robots" content="index, follow" />
  <meta property="og:title" content="Advanced Treatments — Geneva Wellness Institute" />
  <meta property="og:description" content="Premium aesthetic and wellness treatments using state-of-the-art technology." />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://genevawellness.com/treatments" />
  <link rel="canonical" href="https://genevawellness.com/treatments" />
  <title>Treatments — Geneva Wellness Institute</title>

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,600;0,700;1,400;1,600&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
  <link rel="stylesheet" href="style.css">

  <!-- ── SCOPED TREATMENTS CSS — all classes prefixed gwi- ── -->
  <style>

    /* Scroll offset so sticky nav + filter bar don't cover anchored treatment cards */
    [id].gwi-card {
      scroll-margin-top: 130px;
    }

    /* FILTER NAV */
    .gwi-filter-bar {
      background: #1a0808;
      position: sticky; top: 0; z-index: 90;
      border-bottom: 1px solid rgba(202,174,95,0.2);
      box-shadow: 0 4px 24px rgba(0,0,0,0.38);
    }
 
    .gwi-filter-inner {
      max-width: 1200px; margin: 0 auto;
      display: flex; align-items: center;
      overflow-x: auto; scrollbar-width: none; padding: 0 24px;
    }
    .gwi-filter-inner::-webkit-scrollbar { display: none; }
    .gwi-filter-btn {
      flex-shrink: 0; background: none; border: none;
      color: rgba(255,255,255,0.42);
      font-family: 'Inter', sans-serif; font-size: 0.76rem;
      font-weight: 600; letter-spacing: 0.14em; text-transform: uppercase;
      padding: 18px 22px; cursor: pointer;
      transition: color 0.3s; position: relative; white-space: nowrap;
    }
    .gwi-filter-btn::after {
      content: ''; position: absolute; bottom: 0; left: 50%;
      transform: translateX(-50%); width: 0; height: 2px;
      background: linear-gradient(to right, #c9a96e, #e8d5b0);
      transition: width 0.35s ease; border-radius: 2px;
    }
    .gwi-filter-btn:hover { color: rgba(255,255,255,0.78); }
    .gwi-filter-btn.gwi-active { color: #c9a96e; }
    .gwi-filter-btn.gwi-active::after { width: 55%; }
    .gwi-filter-sep { width: 1px; height: 14px; background: rgba(255,255,255,0.1); flex-shrink: 0; }

    /* SECTION */
    .gwi-treatments { padding: 72px 20px 30px; background: #faf6f0; }
    .gwi-container { max-width: 1200px; margin: 0 auto; }

    /* CATEGORY BLOCK */
    .gwi-cat-block { display: none; margin-bottom: 72px; }
    .gwi-cat-block.gwi-visible { display: block; }
    .gwi-cat-head { display: flex; align-items: center; gap: 16px; margin-bottom: 36px; }
    .gwi-cat-icon {
      width: 44px; height: 44px; border-radius: 50%;
      background: linear-gradient(135deg, #6b1a1a, #c04040);
      display: flex; align-items: center; justify-content: center;
      font-size: 1.1rem; flex-shrink: 0;
      box-shadow: 0 4px 18px rgba(107,26,26,0.28);
    }
    .gwi-cat-title {
      font-family: 'Lora', serif; font-size: clamp(1.3rem,2.5vw,1.8rem);
      font-weight: 600; color: #2a1a1a; line-height: 1.2;
    }
    .gwi-cat-count { font-size: 0.7rem; letter-spacing: 0.16em; text-transform: uppercase; color: #a07840; font-weight: 600; margin-top: 3px; }
    .gwi-cat-line { flex: 1; height: 1px; background: linear-gradient(to right, rgba(201,169,110,0.55), transparent); min-width: 40px; }

    /* GRID */
    .gwi-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: 22px; }

    /* CARD */
    .gwi-card {
      background: #fff; border-radius: 14px; overflow: hidden;
      position: relative; box-shadow: 0 2px 18px rgba(0,0,0,0.07);
      transition: transform 0.38s cubic-bezier(0.165,0.84,0.44,1), box-shadow 0.38s ease;
      display: flex; flex-direction: column;
    }
    .gwi-card:hover { transform: translateY(-7px); box-shadow: 0 18px 52px rgba(107,26,26,0.14); }
    .gwi-card::before {
      content: ''; position: absolute; top: 0; left: 0; right: 0; height: 3px;
      background: linear-gradient(to right, #a07840, #c9a96e, #e8d5b0);
      transform: scaleX(0); transform-origin: left; transition: transform 0.38s ease; z-index: 2;
    }
    .gwi-card:hover::before { transform: scaleX(1); }
    .gwi-card.gwi-featured { grid-column: span 2; }

    /* CARD IMAGE */
    .gwi-card-img { position: relative; height: 300px; overflow: hidden; background: #ede4db; flex-shrink: 0; }
    .gwi-card.gwi-featured .gwi-card-img { height: 350px; }
    .gwi-card-img img { width: 100%; height: 100%; object-fit: cover; display: block; transition: transform 0.55s ease; }
    .gwi-card:hover .gwi-card-img img { transform: scale(1.06); }
    .gwi-badge {
      position: absolute; top: 10px; right: 10px;
      background: rgba(26,8,8,0.72); backdrop-filter: blur(6px);
      color: #e8d5b0; font-size: 0.65rem; font-weight: 700;
      letter-spacing: 0.12em; text-transform: uppercase;
      padding: 4px 10px; border-radius: 20px;
      border: 1px solid rgba(201,169,110,0.3); z-index: 3;
    }

    /* CARD BODY */
    .gwi-card-body { padding: 20px 20px 16px; flex: 1; display: flex; flex-direction: column; }
    .gwi-card-eyebrow { font-size: 0.65rem; font-weight: 700; letter-spacing: 0.18em; text-transform: uppercase; color: #a07840; margin-bottom: 5px; }
    .gwi-card-title { font-family: 'Lora', serif; font-size: 1.05rem; font-weight: 600; color: #2a1a1a; margin-bottom: 8px; line-height: 1.3; }
    .gwi-card-desc { font-size: 0.83rem; color: #7a6060; line-height: 1.65; margin-bottom: 14px; flex: 1; }
    .gwi-pills { display: flex; flex-wrap: wrap; gap: 5px; margin-bottom: 16px; list-style: none; padding: 0; }
    .gwi-pills li {
      background: rgba(201,169,110,0.1); border: 1px solid rgba(201,169,110,0.28);
      color: #8a6030; font-size: 0.68rem; font-weight: 600; letter-spacing: 0.04em;
      padding: 4px 10px; border-radius: 20px;
    }

    /* DUAL BUTTONS */
    .gwi-card-foot { display: flex; align-items: center; gap: 8px; padding-top: 14px; border-top: 1px solid rgba(0,0,0,0.06); flex-wrap: wrap; }
    .gwi-btn-book {
      display: inline-flex; align-items: center; gap: 5px;
      background: linear-gradient(135deg, #6b1a1a, #c04040); color: #fff;
      font-family: 'Inter', sans-serif; font-size: 0.71rem; font-weight: 700;
      letter-spacing: 0.09em; text-transform: uppercase; text-decoration: none;
      padding: 9px 14px; border-radius: 40px;
      transition: all 0.28s ease; box-shadow: 0 4px 14px rgba(107,26,26,0.22); white-space: nowrap;
          cursor: pointer;
              border: none;
    }
    .gwi-btn-book:hover { background: linear-gradient(135deg, #c04040, #a07840); box-shadow: 0 6px 22px rgba(107,26,26,0.36); transform: translateY(-1px); color: #fff; }
    .gwi-btn-learn {
      display: inline-flex; align-items: center; gap: 5px;
      background: transparent; color: #6b1a1a;
      border: 1.5px solid rgba(107,26,26,0.35);
      font-family: 'Inter', sans-serif; font-size: 0.71rem; font-weight: 700;
      letter-spacing: 0.09em; text-transform: uppercase;
      padding: 9px 14px; border-radius: 40px; cursor: pointer;
      transition: all 0.28s ease; white-space: nowrap;
    }
    .gwi-btn-learn:hover { background: #6b1a1a; color: #fff; border-color: #6b1a1a; transform: translateY(-1px); }
    .gwi-btn-book svg, .gwi-btn-learn svg { transition: transform 0.28s; }
    .gwi-btn-book:hover svg, .gwi-btn-learn:hover svg { transform: translateX(2px); }

    /* MODAL OVERLAY */
    .gwi-modal-overlay {
      display: none; position: fixed; inset: 0;
      background: rgba(10,3,3,0.72); backdrop-filter: blur(6px);
      z-index: 9999; align-items: center; justify-content: center; padding: 20px;
    }
    .gwi-modal-overlay.gwi-open { display: flex; animation: gwiFadeModal 0.22s ease; }
    @keyframes gwiFadeModal { from { opacity: 0; } to { opacity: 1; } }

    .gwi-modal {
      background: #fff; border-radius: 18px; max-width: 680px; width: 100%;
      max-height: 90vh; overflow-y: auto;
      box-shadow: 0 32px 80px rgba(0,0,0,0.4); position: relative;
      animation: gwiSlideModal 0.3s cubic-bezier(0.165,0.84,0.44,1);
    }
    @keyframes gwiSlideModal { from { opacity: 0; transform: translateY(28px) scale(0.97); } to { opacity: 1; transform: translateY(0) scale(1); } }
    .gwi-modal::-webkit-scrollbar { width: 4px; }
    .gwi-modal::-webkit-scrollbar-track { background: #f5f0eb; }
    .gwi-modal::-webkit-scrollbar-thumb { background: rgba(160,120,64,0.4); border-radius: 4px; }

    .gwi-modal-close {
      position: absolute; top: 12px; right: 12px;
      width: 34px; height: 34px; border-radius: 50%;
      background: rgba(255,255,255,0.92); backdrop-filter: blur(4px);
      border: none; cursor: pointer; display: flex; align-items: center; justify-content: center;
      font-size: 1rem; color: #3a1a1a; box-shadow: 0 2px 12px rgba(0,0,0,0.18);
      transition: all 0.2s; z-index: 10; line-height: 1;
    }
    .gwi-modal-close:hover { background: #6b1a1a; color: #fff; }

    .gwi-modal-body { padding: 26px 30px 30px; }
    .gwi-modal-eyebrow { font-size: 0.68rem; font-weight: 700; letter-spacing: 0.2em; text-transform: uppercase; color: #a07840; margin-bottom: 6px; }
    .gwi-modal-title { font-family: 'Lora', serif; font-size: clamp(1.2rem,3vw,1.6rem); font-weight: 700; color: #1a0808; line-height: 1.25; margin-bottom: 12px; }
    .gwi-modal-desc { font-size: 0.89rem; color: #6a5050; line-height: 1.78; margin-bottom: 22px; }
    .gwi-modal-benefits-title { font-family: 'Lora', serif; font-size: 0.95rem; font-weight: 600; color: #2a1a1a; margin-bottom: 12px; }
    .gwi-modal-benefits { display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 26px; list-style: none; padding: 0; }
    .gwi-modal-benefits li {
      background: linear-gradient(135deg, rgba(201,169,110,0.08), rgba(201,169,110,0.14));
      border: 1px solid rgba(201,169,110,0.25); border-radius: 10px; padding: 12px 14px;
    }
    .gwi-modal-benefits li strong { display: block; font-size: 0.79rem; font-weight: 700; color: #6b1a1a; margin-bottom: 3px; }
    .gwi-modal-benefits li span { font-size: 0.78rem; color: #7a6060; line-height: 1.5; }
    .gwi-modal-foot { display: flex; gap: 10px; padding-top: 18px; border-top: 1px solid rgba(0,0,0,0.07); flex-wrap: wrap; }
    .gwi-modal-book {
      display: inline-flex; align-items: center; gap: 6px;
      background: linear-gradient(135deg, #6b1a1a, #c04040); color: #fff;
      font-family: 'Inter', sans-serif; font-size: 0.78rem; font-weight: 700;
      letter-spacing: 0.1em; text-transform: uppercase; text-decoration: none;
      padding: 12px 24px; border-radius: 40px; box-shadow: 0 4px 18px rgba(107,26,26,0.26);
      transition: all 0.28s;
    }
    .gwi-modal-book:hover { background: linear-gradient(135deg, #c04040, #a07840); transform: translateY(-2px); box-shadow: 0 8px 28px rgba(107,26,26,0.38); }
    .gwi-modal-dismiss {
      display: inline-flex; align-items: center; background: none;
      border: 1.5px solid rgba(107,26,26,0.3); color: #6b1a1a;
      font-family: 'Inter', sans-serif; font-size: 0.78rem; font-weight: 600;
      letter-spacing: 0.08em; text-transform: uppercase;
      padding: 12px 24px; border-radius: 40px; cursor: pointer; transition: all 0.28s;
    }
    .gwi-modal-dismiss:hover { background: #6b1a1a; color: #fff; }

    /* ANIMATIONS */
    @keyframes gwiFadeUp { from { opacity: 0; transform: translateY(28px); } to { opacity: 1; transform: translateY(0); } }
    .gwi-cat-block.gwi-visible .gwi-card { animation: gwiFadeUp 0.5s ease both; }
    .gwi-cat-block.gwi-visible .gwi-card:nth-child(1) { animation-delay: 0.04s; }
    .gwi-cat-block.gwi-visible .gwi-card:nth-child(2) { animation-delay: 0.09s; }
    .gwi-cat-block.gwi-visible .gwi-card:nth-child(3) { animation-delay: 0.14s; }
    .gwi-cat-block.gwi-visible .gwi-card:nth-child(4) { animation-delay: 0.19s; }
    .gwi-cat-block.gwi-visible .gwi-card:nth-child(5) { animation-delay: 0.24s; }
    .gwi-cat-block.gwi-visible .gwi-card:nth-child(6) { animation-delay: 0.29s; }
    .gwi-cat-block.gwi-visible .gwi-card:nth-child(7) { animation-delay: 0.34s; }

    /* RESPONSIVE */
    @media (max-width: 1024px) {
      .gwi-grid { grid-template-columns: repeat(2,1fr); }
      .gwi-card.gwi-featured { grid-column: span 1; }
      .gwi-card.gwi-featured .gwi-card-img { height: 190px; }
    }
    @media (max-width: 640px) {
      .gwi-grid { grid-template-columns: 1fr; }
      .gwi-filter-btn { padding: 14px 13px; font-size: 0.7rem; }
      .gwi-modal-body { padding: 18px 18px 22px; }
      .gwi-modal-benefits { grid-template-columns: 1fr; }
      .gwi-card-img { height: 219px; }
    }
  </style>

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "MedicalBusiness",
    "name": "Geneva Wellness Institute - Treatments",
    "description": "Advanced aesthetic and wellness treatments",
    "url": "https://genevawellness.com/treatments"
  }
  </script>
</head>
<body>

  <div class="cursor" id="cursor"></div>
  <div class="cursor-follower" id="cursor-follower"></div>
  <?php include 'header.php'; ?>
  <?php include 'hero-section.php'; ?>

  <main id="main-content">

    <!-- ═══════════════════════════════════════════════════
         FILTER NAV (sticky, right after hero)
    ═══════════════════════════════════════════════════ -->
    <nav class="gwi-filter-bar" id="gwi-filter-bar" aria-label="Treatment categories">
      <div class="gwi-filter-inner">
        <button class="gwi-filter-btn gwi-active" onclick="gwiFilter(this,'all')">All Treatments</button>
        <div class="gwi-filter-sep"></div>
        <button class="gwi-filter-btn" onclick="gwiFilter(this,'face')">✦ Face &amp; Skin</button>
        <div class="gwi-filter-sep"></div>
        <button class="gwi-filter-btn" onclick="gwiFilter(this,'body')">✦ Body &amp; Contouring</button>
        <div class="gwi-filter-sep"></div>
        <button class="gwi-filter-btn" onclick="gwiFilter(this,'hair')">✦ Hair &amp; Scalp</button>
      </div>
    </nav>

    <!-- ═══════════════════════════════════════════════════
         TREATMENTS SECTION
    ═══════════════════════════════════════════════════ -->
    <section class="gwi-treatments" id="gwi-treatments" aria-label="Our Treatments">
      <div class="gwi-container">

        <!-- ───────────────────────────────────────────────
             FACE & SKIN — 7 treatments
        ─────────────────────────────────────────────────── -->
        <div class="gwi-cat-block gwi-visible" id="gwi-block-face">
          <div class="gwi-cat-head">
            <div class="gwi-cat-icon">✨</div>
            <div><div class="gwi-cat-title">Face &amp; Skin Treatments</div><div class="gwi-cat-count">7 Treatments Available</div></div>
            <div class="gwi-cat-line"></div>
          </div>
          <div class="gwi-grid">

            <!-- 1. HydraFacial -->
            <article id="hydrafacial" class="gwi-card gwi-featured">
              <div class="gwi-card-img"><img src="img\services\hydrafacial-img.jpg" alt="HydraFacial" onerror="this.style.display='none'" /><span class="gwi-badge">Most Popular</span></div>
              <div class="gwi-card-body">
                <div class="gwi-card-eyebrow">Renew Your Complexion</div>
                <div class="gwi-card-title">HydraFacial — The Ultimate Skin Rejuvenation</div>
                <div class="gwi-card-desc">A non-invasive treatment that deeply cleanses, exfoliates, and hydrates the skin. Addresses fine lines, acne, and dullness — instant, visible results with zero downtime.</div>
                <ul class="gwi-pills"><li>Deep Cleansing</li><li>Exfoliation</li><li>Hydration</li><li>Antioxidant Protection</li></ul>
                <div class="gwi-card-foot">
                  <button class="gwi-btn-book popup-trigger" data-popup="consultation-popup">Book Your Consultation <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></button>
                  <button class="gwi-btn-learn" onclick="gwiOpenModal('hydrafacial')">Learn More <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg></button>
                </div>
              </div>
            </article>

            <!-- 2. HIFU -->
            <article id="hifu" class="gwi-card">
              <div class="gwi-card-img"><img src="img\services\hifu-img.jpg" alt="HIFU" onerror="this.style.display='none'" /></div>
              <div class="gwi-card-body">
                <div class="gwi-card-eyebrow">Lift and Tighten Without Surgery</div>
                <div class="gwi-card-title">HIFU — Non-Surgical Facelift</div>
                <div class="gwi-card-desc">Focused ultrasound energy stimulates collagen production, reducing wrinkles and sagging with no downtime. Results continue to improve as collagen builds.</div>
                <ul class="gwi-pills"><li>Non-Surgical Facelift</li><li>Collagen Boost</li><li>Natural Results</li></ul>
                <div class="gwi-card-foot">
                  <button class="gwi-btn-book popup-trigger" data-popup="consultation-popup">Book Your Consultation <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></button>
                  <button class="gwi-btn-learn" onclick="gwiOpenModal('hifu')">Learn More <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg></button>
                </div>
              </div>
            </article>

            <!-- 3. CO2 Laser -->
            <article id="co2" class="gwi-card">
              <div class="gwi-card-img"><img src="img\services\co2-img.jpg" alt="CO2 Laser" onerror="this.style.display='none'" /></div>
              <div class="gwi-card-body">
                <div class="gwi-card-eyebrow">Resurface and Rejuvenate</div>
                <div class="gwi-card-title">CO₂ Laser Therapy</div>
                <div class="gwi-card-desc">Resurfaces the skin to address fine lines, wrinkles, scars, and sun damage — revealing smoother, younger-looking skin and stimulating collagen production.</div>
                <ul class="gwi-pills"><li>Skin Resurfacing</li><li>Wrinkle Reduction</li><li>Scar Treatment</li></ul>
                <div class="gwi-card-foot">
                  <button class="gwi-btn-book popup-trigger" data-popup="consultation-popup">Book Your Consultation <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></button>
                  <button class="gwi-btn-learn" onclick="gwiOpenModal('co2')">Learn More <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg></button>
                </div>
              </div>
            </article>

            <!-- 4. Pico Laser -->
            <article id="pico" class="gwi-card">
              <div class="gwi-card-img"><img src="img\services\pico.jpg" alt="Pico Laser" onerror="this.style.display='none'" /></div>
              <div class="gwi-card-body">
                <div class="gwi-card-eyebrow">Target Pigmentation and Scars</div>
                <div class="gwi-card-title">Pico Laser — Precision Treatment</div>
                <div class="gwi-card-desc">Ultra-short laser pulses break down pigment particles for clearer, brighter skin. Treats melasma, sunspots, acne scars — ideal for all skin types with minimal downtime.</div>
                <ul class="gwi-pills"><li>Pigmentation Removal</li><li>Scar Reduction</li><li>Quick Recovery</li></ul>
                <div class="gwi-card-foot">
                  <button class="gwi-btn-book popup-trigger" data-popup="consultation-popup">Book Your Consultation <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></button>
                  <button class="gwi-btn-learn" onclick="gwiOpenModal('pico')">Learn More <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg></button>
                </div>
              </div>
            </article>

            <!-- 5. Carbon Laser -->
            <article id="carbon" class="gwi-card">
              <div class="gwi-card-img"><img src="img\services\carbon-img.jpg" alt="Carbon Laser Peel" onerror="this.style.display='none'" /></div>
              <div class="gwi-card-body">
                <div class="gwi-card-eyebrow">Achieve a Hollywood Glow</div>
                <div class="gwi-card-title">Carbon Laser — Hollywood Peel</div>
                <div class="gwi-card-desc">Exfoliates and purifies the skin, reducing pore size and controlling oil while leaving your skin bright and glowing — perfect with absolutely no downtime.</div>
                <ul class="gwi-pills"><li>Deep Cleansing</li><li>Pore Reduction</li><li>Radiant Glow</li></ul>
                <div class="gwi-card-foot">
                  <button class="gwi-btn-book popup-trigger" data-popup="consultation-popup">Book Your Consultation <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></button>
                  <button class="gwi-btn-learn" onclick="gwiOpenModal('carbon')">Learn More <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg></button>
                </div>
              </div>
            </article>

            <!-- 6. Exilis Face & Neck -->
            <article id="exilis-face" class="gwi-card">
              <div class="gwi-card-img"><img src="img\services\exilis-img.jpg" alt="Exilis Face and Neck" onerror="this.style.display='none'" /></div>
              <div class="gwi-card-body">
                <div class="gwi-card-eyebrow">Tighten and Contour</div>
                <div class="gwi-card-title">Exilis Face &amp; Neck</div>
                <div class="gwi-card-desc">Combines radiofrequency and ultrasound to tighten skin, reduce wrinkles, and contour the face and neck — no surgery, no downtime, lasting results.</div>
                <ul class="gwi-pills"><li>Skin Tightening</li><li>Wrinkle Reduction</li><li>Dual Technology</li></ul>
                <div class="gwi-card-foot">
                  <button class="gwi-btn-book popup-trigger" data-popup="consultation-popup">Book Your Consultation <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></button>
                  <button class="gwi-btn-learn" onclick="gwiOpenModal('exilis-face')">Learn More <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg></button>
                </div>
              </div>
            </article>

            <!-- 7. Intimate Whitening -->
            <article id="intimate" class="gwi-card">
              <div class="gwi-card-img"><img src="img\services\cryotherapy-img.jpg" alt="Intimate Whitening" onerror="this.style.display='none'" /></div>
              <div class="gwi-card-body">
                <div class="gwi-card-eyebrow">Brighten and Even Skin Tone</div>
                <div class="gwi-card-title">Intimate Whitening</div>
                <div class="gwi-card-desc">Lightens skin in sensitive areas, reducing hyperpigmentation for a brighter, more even tone using gentle, safe formulations suitable for all genders.</div>
                <ul class="gwi-pills"><li>Safe &amp; Gentle</li><li>Effective Whitening</li><li>No Downtime</li></ul>
                <div class="gwi-card-foot">
                  <button class="gwi-btn-book popup-trigger" data-popup="consultation-popup">Book Your Consultation <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></button>
                  <button class="gwi-btn-learn" onclick="gwiOpenModal('intimate')">Learn More <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg></button>
                </div>
              </div>
            </article>

          </div>
        </div><!-- /face block -->


        <!-- ───────────────────────────────────────────────
             BODY & CONTOURING — 4 treatments
        ─────────────────────────────────────────────────── -->
        <div class="gwi-cat-block gwi-visible" id="gwi-block-body">
          <div class="gwi-cat-head">
            <div class="gwi-cat-icon">💎</div>
            <div><div class="gwi-cat-title">Body &amp; Contouring</div><div class="gwi-cat-count">4 Treatments Available</div></div>
            <div class="gwi-cat-line"></div>
          </div>
          <div class="gwi-grid">

            <!-- 8. Cryotherapy -->
            <article id="cryotherapy" class="gwi-card gwi-featured">
              <div class="gwi-card-img"><img src="img\services\cryotherapy-img.jpg" alt="Cryotherapy" onerror="this.style.display='none'" /><span class="gwi-badge">Top Rated</span></div>
              <div class="gwi-card-body">
                <div class="gwi-card-eyebrow">Freeze Away Stubborn Fat</div>
                <div class="gwi-card-title">Cryotherapy — Freeze Away Stubborn Fat</div>
                <div class="gwi-card-desc">Uses extreme cold to target and destroy fat cells in specific body areas. Non-invasive, no-downtime alternative to liposuction. Your body naturally eliminates treated fat cells over time for a slimmer, contoured appearance.</div>
                <ul class="gwi-pills"><li>Fat Reduction</li><li>No Surgery</li><li>Quick Sessions</li><li>Natural Elimination</li></ul>
                <div class="gwi-card-foot">
                  <button class="gwi-btn-book popup-trigger" data-popup="consultation-popup">Book Your Consultation <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></button>
                  <button class="gwi-btn-learn" onclick="gwiOpenModal('cryo')">Learn More <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg></button>
                </div>
              </div>
            </article>

            <!-- 9. EMS -->
            <article id="ems" class="gwi-card">
              <div class="gwi-card-img"><img src="img\services\ems.jpg" alt="EMS" onerror="this.style.display='none'" /></div>
              <div class="gwi-card-body">
                <div class="gwi-card-eyebrow">Tone and Strengthen</div>
                <div class="gwi-card-title">EMS — Electrical Muscle Stimulation</div>
                <div class="gwi-card-desc">Mimics a high-intensity workout with electrical impulses to tone muscles while reducing fat. Fully customizable — target specific muscle groups for personalized results.</div>
                <ul class="gwi-pills"><li>Muscle Toning</li><li>Fat Reduction</li><li>Targeted Treatment</li></ul>
                <div class="gwi-card-foot">
                  <button class="gwi-btn-book popup-trigger" data-popup="consultation-popup">Book Your Consultation <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></button>
                  <button class="gwi-btn-learn" onclick="gwiOpenModal('ems')">Learn More <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg></button>
                </div>
              </div>
            </article>

            <!-- 10. Exilis Body -->
            <article id="exilis-body" class="gwi-card">
              <div class="gwi-card-img"><img src="img\services\exilis-body.jpg" alt="Exilis Body" onerror="this.style.display='none'" /></div>
              <div class="gwi-card-body">
                <div class="gwi-card-eyebrow">Contour and Tighten</div>
                <div class="gwi-card-title">Exilis Body Contouring</div>
                <div class="gwi-card-desc">Combines radiofrequency and ultrasound to contour body areas — abdomen, thighs, arms, buttocks. Non-invasive, no downtime, visible improvements in firmness over time.</div>
                <ul class="gwi-pills"><li>Body Contouring</li><li>Skin Tightening</li><li>Customizable</li></ul>
                <div class="gwi-card-foot">
                  <button class="gwi-btn-book popup-trigger" data-popup="consultation-popup">Book Your Consultation <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></button>
                  <button class="gwi-btn-learn" onclick="gwiOpenModal('exilis-body')">Learn More <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg></button>
                </div>
              </div>
            </article>

            <!-- 11. Laser Hair Removal -->
            <article id="laser-hair" class="gwi-card">
              <div class="gwi-card-img"><img src="img\services\laser-hair-remove.jpg" alt="Laser Hair Removal" onerror="this.style.display='none'" /></div>
              <div class="gwi-card-body">
                <div class="gwi-card-eyebrow">Achieve Long-Lasting Smoothness</div>
                <div class="gwi-card-title">Laser Hair Removal</div>
                <div class="gwi-card-desc">Long-term solution for unwanted hair — targets follicles to inhibit future growth. Suitable for all skin types, multiple body areas, minimal discomfort, no downtime.</div>
                <ul class="gwi-pills"><li>Long-Term Results</li><li>All Skin Types</li><li>Multiple Areas</li></ul>
                <div class="gwi-card-foot">
                  <button class="gwi-btn-book popup-trigger" data-popup="consultation-popup">Book Your Consultation <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></button>
                  <button class="gwi-btn-learn" onclick="gwiOpenModal('laser-hair')">Learn More <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg></button>
                </div>
              </div>
            </article>

          </div>
        </div><!-- /body block -->


        <!-- ───────────────────────────────────────────────
             HAIR & SCALP — 3 treatments
        ─────────────────────────────────────────────────── -->
        <div class="gwi-cat-block gwi-visible" id="gwi-block-hair">
          <div class="gwi-cat-head">
            <div class="gwi-cat-icon">🌿</div>
            <div><div class="gwi-cat-title">Hair &amp; Scalp Care</div><div class="gwi-cat-count">3 Treatments Available</div></div>
            <div class="gwi-cat-line"></div>
          </div>
          <div class="gwi-grid">

            <!-- 12. Hair Restoration -->
            <article id="hair-restore" class="gwi-card gwi-featured">
              <div class="gwi-card-img"><img src="img\services\hair-restoratial.jpg" alt="Hair Restoration" onerror="this.style.display='none'" /><span class="gwi-badge">Most Requested</span></div>
              <div class="gwi-card-body">
                <div class="gwi-card-eyebrow">Restore Hair Density</div>
                <div class="gwi-card-title">Hair Restoration — Thicker, Healthier Hair</div>
                <div class="gwi-card-desc">Stimulates hair growth and improves scalp health using PRP therapy, laser therapy, and topical solutions. Tailored plans for noticeable improvements in hair density and quality — regular sessions give you thicker, healthier hair that boosts your confidence.</div>
                <ul class="gwi-pills"><li>Thicker Hair</li><li>Scalp Health</li><li>Non-Invasive</li><li>Personalized Care</li></ul>
                <div class="gwi-card-foot">
                  <button class="gwi-btn-book popup-trigger" data-popup="consultation-popup">Book Your Consultation <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></button>
                  <button class="gwi-btn-learn" onclick="gwiOpenModal('hair-restore')">Learn More <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg></button>
                </div>
              </div>
            </article>

            <!-- 13. Flaky Scalp Therapy -->
            <article id="scalp-flaky" class="gwi-card">
              <div class="gwi-card-img"><img src="img\services\flaky-scalp.jpg" alt="Flaky Scalp Therapy" onerror="this.style.display='none'" /></div>
              <div class="gwi-card-body">
                <div class="gwi-card-eyebrow">Soothe and Strengthen</div>
                <div class="gwi-card-title">Flaky Scalp Therapy</div>
                <div class="gwi-card-desc">Targets dandruff and scalp conditions with deep cleansing and intense hydration. Removes dead cells and excess oil — strengthens follicles, promotes shiny, healthy hair.</div>
                <ul class="gwi-pills"><li>Dandruff Control</li><li>Scalp Hydration</li><li>Stronger Hair</li></ul>
                <div class="gwi-card-foot">
                  <button class="gwi-btn-book popup-trigger" data-popup="consultation-popup">Book Your Consultation <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></button>
                  <button class="gwi-btn-learn" onclick="gwiOpenModal('scalp-flaky')">Learn More <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg></button>
                </div>
              </div>
            </article>

            <!-- 14. Scalp Psoriasis Therapy -->
            <article id="scalp-psoriasis" class="gwi-card">
              <div class="gwi-card-img"><img src="img\services\scalp-img.jpg" alt="Scalp Psoriasis Therapy" onerror="this.style.display='none'" /></div>
              <div class="gwi-card-body">
                <div class="gwi-card-eyebrow">Manage and Relieve Psoriasis</div>
                <div class="gwi-card-title">Scalp Psoriasis Therapy</div>
                <div class="gwi-card-desc">Reduces psoriasis symptoms using medicated products and therapeutic techniques to soothe the scalp and promote healthy skin cell turnover for daily comfort.</div>
                <ul class="gwi-pills"><li>Symptom Relief</li><li>Anti-Inflammatory</li><li>Scalp Health</li></ul>
                <div class="gwi-card-foot">
                  <button class="gwi-btn-book popup-trigger" data-popup="consultation-popup">Book Your Consultation <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></button>
                  <button class="gwi-btn-learn" onclick="gwiOpenModal('scalp-psoriasis')">Learn More <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg></button>
                </div>
              </div>
            </article>

          </div>
        </div><!-- /hair block -->

      </div><!-- /gwi-container -->
    </section>


    <!-- ═══════════════════════════════════════════════════
         MODAL — Image Removed (Clean Version)
    ═══════════════════════════════════════════════════ -->
    <div class="gwi-modal-overlay" id="gwi-modal-overlay"
         onclick="gwiCloseOnBackdrop(event)"
         role="dialog"
         aria-modal="true"
         aria-labelledby="gwi-modal-title">

      <div class="gwi-modal" id="gwi-modal">

        <button class="gwi-modal-close"
                onclick="gwiCloseModal()"
                aria-label="Close">✕</button>

        <div class="gwi-modal-body">

          <div class="gwi-modal-eyebrow" id="gwi-modal-eyebrow"></div>

          <h2 class="gwi-modal-title" id="gwi-modal-title"></h2>

          <p class="gwi-modal-desc" id="gwi-modal-desc"></p>

          <div class="gwi-modal-benefits-title">Key Benefits</div>

          <ul class="gwi-modal-benefits" id="gwi-modal-benefits"></ul>

          <div class="gwi-modal-foot">
            <a href="contact-us.php#contact-form" class="gwi-modal-book">
              Book Consultation
              <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <path d="M5 12h14M12 5l7 7-7 7"/>
              </svg>
            </a>

            <button class="gwi-modal-dismiss" onclick="gwiCloseModal()">
              Close
            </button>
          </div>

        </div>
      </div>
    </div>


    <!-- ── WHY CHOOSE US — completely untouched ────────── -->
    <section class="section" style="background: #ffffff">
      <div class="container">
        <div class="section-header">
          <span class="eyebrow">Our Advantage</span>
          <h2>Why Choose Geneva Wellness</h2>
        </div>
        <div class="advantages-grid">
          <div class="advantage-item" data-aos="fade-up">
            <div class="advantage-icon">🎯</div>
            <h3>Personalized Care</h3>
            <p>Tailored treatments designed to meet your unique beauty and wellness goals</p>
          </div>
          <div class="advantage-item" data-aos="fade-up" data-aos-delay="100">
            <div class="advantage-icon">⚙️</div>
            <h3>Advanced Technology</h3>
            <p>State-of-the-art equipment and techniques for optimal results</p>
          </div>
          <div class="advantage-item" data-aos="fade-up" data-aos-delay="200">
            <div class="advantage-icon">🩺</div>
            <h3>Expert Team</h3>
            <p>Highly skilled professionals dedicated to your well-being</p>
          </div>
        </div>
      </div>
    </section>

  </main>

  <?php include 'footer.php'; ?>
  <button class="back-to-top" id="back-to-top" aria-label="Back to top">↑</button>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="components.js"></script>
  <script src="script.js"></script>

  <!-- ── TREATMENTS JS — scoped, no conflicts ────────── -->
  <script>
    /* All 14 treatments data */
    var GWI = {
      hydrafacial: {
        eyebrow: 'Renew Your Complexion',
        title: 'HydraFacial: The Ultimate Skin Rejuvenation',
        desc: 'HydraFacial is a non-invasive treatment that deeply cleanses, exfoliates, and hydrates the skin. It addresses concerns like fine lines, acne, and dullness, delivering instant, visible results. The unique Vortex-Fusion system ensures effective cleansing while nourishing the skin with antioxidants and hyaluronic acid. Gentle yet powerful, HydraFacial is suitable for all skin types and leaves your skin refreshed and radiant with no downtime. Whether you\'re preparing for a big event or seeking ongoing skin maintenance, HydraFacial offers a quick and effective solution.',
        benefits: [
          {t:'Deep Cleansing', d:'Removes impurities and excess oil, leaving your skin refreshed'},
          {t:'Exfoliation', d:'Gently sheds dead skin cells, unveiling a smoother, brighter complexion'},
          {t:'Hydration', d:'Infuses the skin with moisture, ensuring it remains plump and hydrated'},
          {t:'Antioxidant Protection', d:'Provides a shield against environmental damage, keeping your skin healthy'}
        ]
      },
      hifu: {
        eyebrow: 'Lift and Tighten Without Surgery',
        title: 'HIFU: Non-Surgical Facelift with Lasting Results',
        desc: 'HIFU offers a non-invasive solution to lift and tighten the skin. It uses focused ultrasound energy to stimulate collagen production, reducing wrinkles and sagging. The treatment targets deep skin layers, providing a natural-looking lift over time. With no downtime, HIFU allows you to return to your daily activities immediately. Results continue to improve as collagen builds, giving you a firmer, more youthful appearance.',
        benefits: [
          {t:'Non-Surgical Facelift', d:'Lift and tighten skin without surgery'},
          {t:'Collagen Boost', d:'Enhances skin firmness over time'},
          {t:'Precise Targeting', d:'Focuses on deep skin layers for optimal results'},
          {t:'Natural Results', d:'Achieves a youthful look while maintaining a natural appearance'}
        ]
      },
      co2: {
        eyebrow: 'Resurface and Rejuvenate',
        title: 'CO₂ Laser: Resurface Your Skin for a Smoother, Youthful Look',
        desc: 'CO2 Laser is a powerful treatment that resurfaces the skin, addressing fine lines, wrinkles, scars, and sun damage. By removing damaged layers, it reveals smoother, younger-looking skin beneath. This treatment also stimulates collagen production, improving skin texture and elasticity over time. While more intensive, CO2 Laser delivers significant results with minimal downtime.',
        benefits: [
          {t:'Skin Resurfacing', d:'Removes damaged skin layers for a fresh look'},
          {t:'Wrinkle Reduction', d:'Reduces fine lines and deep wrinkles'},
          {t:'Scar Treatment', d:'Minimizes acne scars and other imperfections'},
          {t:'Collagen Stimulation', d:'Boosts skin elasticity and firmness'}
        ]
      },
      pico: {
        eyebrow: 'Target Pigmentation and Scars',
        title: 'Pico Laser: Precision Treatment for Clearer, Brighter Skin',
        desc: 'Pico Laser treats pigmentation, acne scars, and signs of aging with ultra-short pulses of laser energy. It breaks down pigment particles safely and effectively, making it ideal for all skin types. This treatment also improves skin texture and tone, leaving your skin clearer and more radiant with minimal downtime. Over a series of sessions, expect a smoother, more even complexion.',
        benefits: [
          {t:'Pigmentation Removal', d:'Treats melasma and sunspots'},
          {t:'Scar Reduction', d:'Reduces acne scars and blemishes'},
          {t:'Quick Recovery', d:'Minimal downtime, quick return to daily life'},
          {t:'All Skin Types', d:'Safe and effective for everyone'}
        ]
      },
      carbon: {
        eyebrow: 'Achieve a Hollywood Glow',
        title: 'Carbon Laser: Instant Glow with the Hollywood Peel',
        desc: 'Carbon Laser, also known as the "Hollywood Peel," delivers immediate skin rejuvenation. The treatment exfoliates and purifies the skin, reducing pore size and controlling oil while leaving your skin bright and glowing. This quick, no-downtime treatment is perfect for those looking to refresh their skin for a special occasion or simply maintain a radiant complexion. Regular sessions improve skin texture and tone over time.',
        benefits: [
          {t:'Deep Cleansing', d:'Purifies the skin, removing impurities'},
          {t:'Pore Reduction', d:'Minimizes the appearance of large pores'},
          {t:'Radiant Glow', d:'Leaves skin bright and rejuvenated'},
          {t:'No Downtime', d:'Enjoy instant results without recovery time'}
        ]
      },
      'exilis-face': {
        eyebrow: 'Tighten and Contour',
        title: 'Exilis Face & Neck: Non-Invasive Skin Tightening for a Youthful Appearance',
        desc: 'Exilis Face & Neck combines radiofrequency and ultrasound to tighten skin, reduce wrinkles, and contour the face and neck. The treatment heats deep skin layers, stimulating collagen production for firmer, smoother skin. With no downtime, Exilis allows you to enhance your appearance without surgery. Results improve over time as collagen builds, providing a more youthful, contoured look.',
        benefits: [
          {t:'Skin Tightening', d:'Firms and lifts sagging skin'},
          {t:'Wrinkle Reduction', d:'Smooths fine lines and wrinkles'},
          {t:'Non-Invasive', d:'Effective results without surgery'},
          {t:'Dual Technology', d:'Combines radiofrequency and ultrasound for optimal results'}
        ]
      },
      intimate: {
        eyebrow: 'Brighten and Even Skin Tone',
        title: 'Intimate Whitening: Enhance Your Confidence with Brighter, Even-Toned Skin',
        desc: 'Intimate Whitening lightens skin in sensitive areas, reducing hyperpigmentation for a brighter, more even tone. The treatment uses gentle, effective formulations that are safe for delicate skin. Ideal for both men and women, Intimate Whitening boosts confidence and comfort. With minimal discomfort and no downtime, it\'s a discreet and effective way to enhance your appearance.',
        benefits: [
          {t:'Safe & Gentle', d:'Designed for sensitive areas'},
          {t:'Effective Whitening', d:'Reduces hyperpigmentation for even skin tone'},
          {t:'Non-Invasive', d:'No downtime required'},
          {t:'Boost Confidence', d:'Feel more confident and comfortable in your skin'}
        ]
      },
      cryo: {
        eyebrow: 'Freeze Away Stubborn Fat',
        title: 'Cryotherapy: Freeze Away Stubborn Fat',
        desc: 'Cryotherapy uses extreme cold to target and destroy fat cells in specific body areas. This non-invasive treatment is ideal for those struggling with stubborn fat resistant to diet and exercise. Cryotherapy sessions are quick and require no downtime, making it easy to fit into your routine. Over time, your body naturally eliminates the treated fat cells, resulting in a slimmer, more contoured appearance.',
        benefits: [
          {t:'Fat Reduction', d:'Targets and reduces stubborn fat'},
          {t:'No Surgery', d:'Non-invasive alternative to liposuction'},
          {t:'Quick Sessions', d:'Fast treatment with no recovery time'},
          {t:'Natural Elimination', d:'Fat cells are naturally eliminated by the body'}
        ]
      },
      ems: {
        eyebrow: 'Tone and Strengthen',
        title: 'EMS: Tone and Strengthen with Electrical Muscle Stimulation',
        desc: 'EMS mimics a high-intensity workout by using electrical impulses to stimulate muscle contractions. This non-invasive treatment tones and strengthens muscles while reducing fat, enhancing muscle definition. EMS sessions are customizable, targeting specific muscle groups for personalized results. It\'s a perfect option for those looking to maintain muscle tone without spending hours in the gym.',
        benefits: [
          {t:'Muscle Toning', d:'Enhances muscle definition'},
          {t:'Fat Reduction', d:'Reduces body fat and builds muscle'},
          {t:'Non-Invasive', d:'Achieve results without physical exertion'},
          {t:'Targeted Treatment', d:'Focuses on specific muscle groups'}
        ]
      },
      'exilis-body': {
        eyebrow: 'Contour and Tighten',
        title: 'Exilis Body: Contour and Tighten with Radiofrequency and Ultrasound',
        desc: 'Exilis Body combines radiofrequency and ultrasound to contour the body by targeting fat deposits and tightening the skin. It\'s ideal for areas like the abdomen, thighs, arms, and buttocks, offering a smoother, more toned appearance. The treatment is non-invasive, with no downtime required, allowing you to return to your daily activities immediately. Over time, you\'ll notice significant improvements in body contours and skin firmness.',
        benefits: [
          {t:'Body Contouring', d:'Reduces fat and tightens skin'},
          {t:'Non-Invasive', d:'Achieve results without surgery'},
          {t:'Skin Tightening', d:'Improves skin elasticity and firmness'},
          {t:'Customizable', d:'Tailored to target specific areas'}
        ]
      },
      'laser-hair': {
        eyebrow: 'Achieve Long-Lasting Smoothness',
        title: 'Laser Hair Removal: Long-Lasting Smoothness with Advanced Technology',
        desc: 'Laser Hair Removal offers a long-term solution to unwanted hair, providing smooth, hair-free skin. The treatment targets hair follicles, inhibiting future growth and significantly reducing hair over time. Suitable for all skin types, Laser Hair Removal can be used on various areas of the body. With minimal discomfort and no downtime, it\'s a convenient option for achieving lasting smoothness.',
        benefits: [
          {t:'Long-Term Results', d:'Reduces hair growth after several treatments'},
          {t:'All Skin Types', d:'Effective for all skin tones and types'},
          {t:'Quick & Comfortable', d:'Fast sessions with minimal discomfort'},
          {t:'Multiple Areas', d:'Can be used on various body parts'}
        ]
      },
      'hair-restore': {
        eyebrow: 'Restore Hair Density',
        title: 'Hair Restoration: Regain Your Confidence with Thicker, Healthier Hair',
        desc: 'Our Hair Restoration treatments stimulate hair growth and improve scalp health, addressing hair thinning and loss. We offer PRP therapy, laser therapy, and topical solutions to promote natural hair regrowth. These non-invasive treatments are tailored to your specific needs, providing noticeable improvements in hair density and quality. With regular sessions, you\'ll enjoy thicker, healthier hair that boosts your confidence.',
        benefits: [
          {t:'Thicker Hair', d:'Stimulates natural hair growth'},
          {t:'Scalp Health', d:'Improves overall scalp condition'},
          {t:'Non-Invasive', d:'Comfortable, non-surgical treatments'},
          {t:'Personalized Care', d:'Customized plans for your needs'}
        ]
      },
      'scalp-flaky': {
        eyebrow: 'Soothe and Strengthen',
        title: 'Flaky Scalp Therapy: Soothe and Revitalize Your Scalp',
        desc: 'Flaky Scalp Therapy targets dandruff and other scalp conditions, offering deep cleansing and intense hydration. It removes dead skin cells and excess oil, leaving the scalp healthier and more comfortable. This therapy strengthens hair follicles and promotes shiny, healthy hair. Regular sessions help maintain a flake-free scalp, enhancing both your comfort and appearance.',
        benefits: [
          {t:'Dandruff Control', d:'Treats and prevents dandruff'},
          {t:'Scalp Hydration', d:'Moisturizes and nourishes the scalp'},
          {t:'Deep Cleansing', d:'Removes impurities for a healthy scalp'},
          {t:'Stronger Hair', d:'Promotes stronger, shinier hair'}
        ]
      },
      'scalp-psoriasis': {
        eyebrow: 'Manage and Relieve Psoriasis',
        title: 'Scalp Psoriasis Therapy: Relief for a Healthier Scalp',
        desc: 'Scalp Psoriasis Therapy reduces the symptoms of psoriasis, such as itching and flakiness. This treatment combines medicated products and therapeutic techniques to soothe the scalp and promote healthy skin cell turnover. Regular therapy helps manage psoriasis symptoms, providing relief and improving scalp health. It\'s an effective solution for maintaining comfort and confidence in your daily life.',
        benefits: [
          {t:'Symptom Relief', d:'Soothes itching and flakiness'},
          {t:'Anti-Inflammatory', d:'Reduces inflammation for a healthier scalp'},
          {t:'Medicated Care', d:'Uses specialized products for psoriasis'},
          {t:'Scalp Health', d:'Promotes healthy skin cell turnover'}
        ]
      }
    };

    /* FILTER */
    function gwiFilter(btn, target) {
      document.querySelectorAll('.gwi-filter-btn').forEach(function(b){ b.classList.remove('gwi-active'); });
      btn.classList.add('gwi-active');
      var blocks = { face: document.getElementById('gwi-block-face'), body: document.getElementById('gwi-block-body'), hair: document.getElementById('gwi-block-hair') };
      function show(el){ el.classList.remove('gwi-visible'); void el.offsetWidth; el.classList.add('gwi-visible'); }
      Object.keys(blocks).forEach(function(k){ blocks[k].classList.remove('gwi-visible'); });
      if (target === 'all') { Object.keys(blocks).forEach(function(k){ show(blocks[k]); }); }
      else if (blocks[target]) { show(blocks[target]); }
      document.getElementById('gwi-treatments').scrollIntoView({ behavior: 'smooth', block: 'start' });
    }

    /* MODAL OPEN */
    function gwiOpenModal(id) {
      var d = GWI[id];
      if (!d) return;

      document.getElementById('gwi-modal-eyebrow').textContent = d.eyebrow;
      document.getElementById('gwi-modal-title').textContent   = d.title;
      document.getElementById('gwi-modal-desc').textContent    = d.desc;

      var ul = document.getElementById('gwi-modal-benefits');
      ul.innerHTML = '';

      d.benefits.forEach(function(b){
        var li = document.createElement('li');
        li.innerHTML = '<strong>' + b.t + '</strong><span>' + b.d + '</span>';
        ul.appendChild(li);
      });

      document.getElementById('gwi-modal-overlay').classList.add('gwi-open');
      document.body.style.overflow = 'hidden';
    }

    /* MODAL CLOSE */
    function gwiCloseModal() {
      document.getElementById('gwi-modal-overlay').classList.remove('gwi-open');
      document.body.style.overflow = '';
    }

    function gwiCloseOnBackdrop(e) {
      if (e.target.id === 'gwi-modal-overlay') {
        gwiCloseModal();
      }
    }

    document.addEventListener('keydown', function(e){
      if (e.key === 'Escape') {
        gwiCloseModal();
      }
    });

    /* Smooth scroll for footer anchor links — offset for sticky nav + filter bar */
    (function(){
      function scrollToHash() {
        var hash = window.location.hash;
        if (!hash) return;
        setTimeout(function(){
          var target = document.querySelector(hash);
          if (!target) return;
          var top = target.getBoundingClientRect().top + window.scrollY - 130;
          window.scrollTo({ top: top, behavior: 'smooth' });
        }, 350);
      }
      window.addEventListener('load', scrollToHash);
      window.addEventListener('hashchange', scrollToHash);
    })();

  </script>

</body>
</html>