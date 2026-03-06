<?php 
$page_title = 'Explore Our Transformations'; 
$page_subtitle = 'Discover the beauty journeys of our clients at Geneva Wellness Institute. From rejuvenated skin to revitalized hair, see the remarkable results our treatments have achieved. Let these transformations inspire your own path to beauty and wellness.'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="View real aesthetic treatment results including laser procedures, skin rejuvenation and body contouring at Geneva Wellness Institute. Explore the gallery today." />
  <meta name="keywords" content="before and after, gallery, results, aesthetic treatments, Geneva Wellness" />
  <meta name="robots" content="index, follow" />
  <meta property="og:title" content="GALLERY PAGE	Geneva Wellness Institute | Aesthetic Treatment Results" />
  <meta property="og:description" content="See real results from our clients and treatments." />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://genevawellness.com/gallery" />
  <link rel="canonical" href="https://genevawellness.com/gallery" />
  <title>GALLERY PAGE	Geneva Wellness Institute | Aesthetic Treatment Results</title>

  <!-- ── STRUCTURED DATA (Schema.org) ───────────────────────────────── -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "MediaGallery",
    "name": "Geneva Wellness Gallery",
    "description": "Gallery of before and after results, treatment outcomes, and facility highlights",
    "url": "https://genevawellness.com/gallery",
    "creator": {
      "@type": "LocalBusiness",
      "name": "Geneva Wellness Institute"
    }
  }
  </script>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
  <link rel="stylesheet" href="style.css">

  <style>

    /* ===== GALLERY SECTION ===== */
    .gallery-section {
      padding: 90px 0;
      background: #ffffff;
      position: relative;
    }
    .gallery-section::before {
      content: '';
      position: absolute;
      inset: 0;
      background:
        radial-gradient(ellipse at 10% 20%, rgba(202,174,95,0.07) 0%, transparent 50%),
        radial-gradient(ellipse at 90% 80%, rgba(253,238,218,0.5) 0%, transparent 50%);
      pointer-events: none;
    }

    /* ===== GRID ===== */
    .gallery8_component {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(380px, 1fr));
      gap: 24px;
      position: relative;
      z-index: 1;
    }

    /* ── GALLERY CARD ── */
    .gallery-item {
      overflow: hidden;
      border-radius: 20px;
      cursor: pointer;
      background: #ffffff;
      border: 1px solid rgba(202,174,95,0.18);
      box-shadow: 0 4px 20px rgba(0,0,0,0.06);
      transition: transform 0.4s cubic-bezier(0.25,0.46,0.45,0.94),
                  box-shadow 0.4s ease,
                  border-color 0.3s ease;
      position: relative;
    }

    /* Gold shimmer on hover */
    .gallery-item::after {
      content: '';
      position: absolute;
      inset: 0;
      background: linear-gradient(to top, rgba(202,174,95,0.18), transparent 55%);
      opacity: 0;
      transition: opacity 0.35s ease;
      border-radius: 20px;
      pointer-events: none;
    }

    .gallery-item:hover {
      transform: translateY(-8px);
      box-shadow: 0 20px 50px rgba(202,174,95,0.2), 0 4px 20px rgba(0,0,0,0.07);
      border-color: rgba(202,174,95,0.45);
    }
    .gallery-item:hover::after { opacity: 1; }

    .gallery-item img {
      width: 100%;
      height: 320px;
      object-fit: cover;
      display: block;
      transition: transform 0.7s cubic-bezier(0.25,0.46,0.45,0.94),
                  filter 0.5s ease;
    }
    .gallery-item:hover img {
      transform: scale(1.08);
      filter: brightness(88%);
    }

    /* Zoom icon overlay */
    .gallery-item-zoom {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%) scale(0.6);
      width: 52px;
      height: 52px;
      border-radius: 50%;
      background: rgba(255,255,255,0.92);
      border: 2px solid rgba(202,174,95,0.5);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.1rem;
      opacity: 0;
      transition: all 0.3s cubic-bezier(0.25,0.46,0.45,0.94);
      z-index: 2;
      pointer-events: none;
      box-shadow: 0 4px 16px rgba(202,174,95,0.2);
    }
    .gallery-item:hover .gallery-item-zoom {
      opacity: 1;
      transform: translate(-50%, -50%) scale(1);
    }

    /* ===== LIGHTBOX ===== */
    .lightbox {
      position: fixed;
      inset: 0;
      background: rgba(10, 7, 3, 0.92);
      backdrop-filter: blur(10px);
      display: none;
      align-items: center;
      justify-content: center;
      z-index: 99999;
      padding: 40px;
    }
    .lightbox.active { display: flex; }

    .lightbox-img {
      max-width: 90%;
      max-height: 85vh;
      border-radius: 18px;
      box-shadow: 0 40px 100px rgba(0,0,0,0.6), 0 0 0 1px rgba(202,174,95,0.2);
      animation: lbZoomIn 0.38s cubic-bezier(0.25,0.46,0.45,0.94);
      display: block;
    }
    @keyframes lbZoomIn {
      from { transform: scale(0.75); opacity: 0; }
      to   { transform: scale(1);    opacity: 1; }
    }

    .lightbox-close {
      position: absolute;
      top: 28px;
      right: 36px;
      width: 44px;
      height: 44px;
      border-radius: 50%;
      background: rgba(255,255,255,0.1);
      border: 1.5px solid rgba(255,255,255,0.28);
      color: #fff;
      font-size: 1.3rem;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      transition: all 0.3s ease;
      line-height: 1;
    }
    .lightbox-close:hover {
      background: rgba(202,174,95,0.3);
      border-color: rgba(202,174,95,0.6);
      transform: rotate(90deg) scale(1.1);
    }

    /* Prev / Next arrows */
    .lightbox-arrow {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      width: 48px;
      height: 48px;
      border-radius: 50%;
      background: rgba(255,255,255,0.1);
      border: 1.5px solid rgba(255,255,255,0.22);
      color: #fff;
      font-size: 1.5rem;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      transition: all 0.3s ease;
      user-select: none;
    }
    .lightbox-arrow:hover {
      background: rgba(202,174,95,0.25);
      border-color: rgba(202,174,95,0.5);
    }
    .lightbox-arrow.prev { left: 28px; }
    .lightbox-arrow.next { right: 28px; }

    /* Counter */
    .lightbox-counter {
      position: absolute;
      bottom: 24px;
      left: 50%;
      transform: translateX(-50%);
      font-size: 0.78rem;
      color: rgba(255,255,255,0.5);
      letter-spacing: 0.1em;
      font-family: "Inter", sans-serif;
    }

    /* ===== MOBILE ===== */
    @media (max-width: 768px) {
      .gallery8_component {
        grid-template-columns: repeat(2, 1fr);
        gap: 14px;
      }
      .gallery-item img { height: 180px; }
      .lightbox-arrow { display: none; }
    }
    @media (max-width: 480px) {
      .gallery8_component {
        grid-template-columns: 1fr;
        gap: 16px;
      }
      .gallery-item img { height: 240px; }
    }

  </style>
</head>
<body>

  <div class="cursor" id="cursor"></div>
  <div class="cursor-follower" id="cursor-follower"></div>

  <?php include 'header.php'; ?>

  <!-- ── INNER PAGE BANNER ─────────────────────────── -->

  <?php include 'hero-section.php'; ?>
  <!-- <section class="inner-banner">
    <div class="inner-banner-content container">
      <h1 data-aos="fade-up">Explore Our Transformations</h1>
      <p class="inner-banner-subtitle" data-aos="fade-up" data-aos-delay="100">Discover the beauty journeys of our clients at Geneva Wellness Institute. From rejuvenated skin to revitalized hair, see the remarkable results our treatments have achieved. Let these transformations inspire your own path to beauty and wellness.</p>
      <nav class="breadcrumb container" aria-label="Breadcrumb">
        <a href="index.php">Home</a>
        <span>/</span>
        <span aria-current="page">Gallery</span>
      </nav>
    </div>
  </section> -->

  <main>

    <!-- ── GALLERY SECTION ──────────────────────────── -->
    <section class="section gallery-section">
      <div class="container">

        <div class="gallery8_component">

          <div class="gallery-item"><img src="img/gallery-img-1.jpg" alt="Gallery Image"><div class="gallery-item-zoom">🔍</div></div>
          <div class="gallery-item"><img src="img/gallery-img-2.jpg" alt="Gallery Image"><div class="gallery-item-zoom">🔍</div></div>
          <div class="gallery-item"><img src="img/gallery-img-3.jpg" alt="Gallery Image"><div class="gallery-item-zoom">🔍</div></div>
          <div class="gallery-item"><img src="img/gallery-img-4.jpg" alt="Gallery Image"><div class="gallery-item-zoom">🔍</div></div>
          <div class="gallery-item"><img src="img/gallery-img-5.jpg" alt="Gallery Image"><div class="gallery-item-zoom">🔍</div></div>
          <div class="gallery-item"><img src="img/gallery-img-6.jpg" alt="Gallery Image"><div class="gallery-item-zoom">🔍</div></div>
          <div class="gallery-item"><img src="img/gallery-img-7.jpg" alt="Gallery Image"><div class="gallery-item-zoom">🔍</div></div>
          <div class="gallery-item"><img src="img/gallery-img-8.jpg" alt="Gallery Image"><div class="gallery-item-zoom">🔍</div></div>
          <div class="gallery-item"><img src="img/gallery-img-9.jpg" alt="Gallery Image"><div class="gallery-item-zoom">🔍</div></div>
          <div class="gallery-item"><img src="img/gallery-img-10.jpg" alt="Gallery Image"><div class="gallery-item-zoom">🔍</div></div>
          <div class="gallery-item"><img src="img/gallery-img-11.jpg" alt="Gallery Image"><div class="gallery-item-zoom">🔍</div></div>
          <div class="gallery-item"><img src="img/gallery-img-12.jpg" alt="Gallery Image"><div class="gallery-item-zoom">🔍</div></div>
          <div class="gallery-item"><img src="img/gallery-img-13.jpg" alt="Gallery Image"><div class="gallery-item-zoom">🔍</div></div>
          <div class="gallery-item"><img src="img/gallery-img-14.jpg" alt="Gallery Image"><div class="gallery-item-zoom">🔍</div></div>
          <div class="gallery-item"><img src="img/gallery-img-15.jpg" alt="Gallery Image"><div class="gallery-item-zoom">🔍</div></div>
          <div class="gallery-item"><img src="img/gallery-img-16.jpg" alt="Gallery Image"><div class="gallery-item-zoom">🔍</div></div>
          <div class="gallery-item"><img src="img/gallery-img-17.jpg" alt="Gallery Image"><div class="gallery-item-zoom">🔍</div></div>

        </div>

      </div>
    </section>

    <!-- ── LIGHTBOX ──────────────────────────────────── -->
    <div class="lightbox" id="lightbox" role="dialog" aria-modal="true" aria-label="Image viewer">
      <button class="lightbox-close" id="lightboxClose" aria-label="Close">✕</button>
      <button class="lightbox-arrow prev" id="lightboxPrev" aria-label="Previous">‹</button>
      <img class="lightbox-img" src="" alt="Expanded Image" id="lightboxImg" />
      <button class="lightbox-arrow next" id="lightboxNext" aria-label="Next">›</button>
      <div class="lightbox-counter" id="lightboxCounter"></div>
    </div>

    <?php include 'footer.php'; ?>

  </main>

  <button class="back-to-top" id="back-to-top" aria-label="Back to top">↑</button>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="components.js"></script>
  <script src="script.js"></script>

  <script>
    (function () {
      const items      = document.querySelectorAll('.gallery-item');
      const lightbox   = document.getElementById('lightbox');
      const lbImg      = document.getElementById('lightboxImg');
      const lbClose    = document.getElementById('lightboxClose');
      const lbPrev     = document.getElementById('lightboxPrev');
      const lbNext     = document.getElementById('lightboxNext');
      const lbCounter  = document.getElementById('lightboxCounter');
      let current = 0;

      function open(index) {
        current = index;
        lbImg.src = items[current].querySelector('img').src;
        lbCounter.textContent = (current + 1) + ' / ' + items.length;
        lightbox.classList.add('active');
        document.body.style.overflow = 'hidden';
      }

      function close() {
        lightbox.classList.remove('active');
        document.body.style.overflow = '';
        lbImg.src = '';
      }

      function go(dir) {
        current = (current + dir + items.length) % items.length;
        lbImg.src = items[current].querySelector('img').src;
        lbCounter.textContent = (current + 1) + ' / ' + items.length;
      }

      items.forEach((item, i) => item.addEventListener('click', () => open(i)));
      lbClose.addEventListener('click', close);
      lbPrev.addEventListener('click', () => go(-1));
      lbNext.addEventListener('click', () => go(1));
      lightbox.addEventListener('click', e => { if (e.target === lightbox || e.target === lbImg) close(); });
      document.addEventListener('keydown', e => {
        if (!lightbox.classList.contains('active')) return;
        if (e.key === 'Escape')      close();
        if (e.key === 'ArrowLeft')   go(-1);
        if (e.key === 'ArrowRight')  go(1);
      });
    })();
  </script>

</body>
</html>