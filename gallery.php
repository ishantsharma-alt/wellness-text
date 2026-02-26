<?php 
$page_title = 'Gallery'; 
$page_subtitle = 'See Real Results & Transformations'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="View our gallery of before and after results, treatment outcomes, and facility highlights at Geneva Wellness Institute." />
  <meta name="keywords" content="before and after, gallery, results, aesthetic treatments, Geneva Wellness" />
  <meta name="robots" content="index, follow" />
  <meta property="og:title" content="Gallery — Geneva Wellness Institute" />
  <meta property="og:description" content="See real results from our clients and treatments." />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://genevawellness.com/gallery" />
  <link rel="canonical" href="https://genevawellness.com/gallery" />
  <title>Gallery — Geneva Wellness Institute</title>

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
    /* ===== AUTO GRID GALLERY ===== */

.gallery-section {
  padding: 90px 0;
}

.gallery8_component {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(380px, 1fr));
  gap: 28px;
}

/* Gallery Card */
.gallery-item {
  overflow: hidden;
  border-radius: 22px;
  cursor: pointer;
  box-shadow: 0 10px 30px rgba(0,0,0,0.08);
  transition: transform 0.4s ease, box-shadow 0.4s ease;
}

.gallery-item img {
  width: 100%;
  height: 320px;
  object-fit: cover;
  transition: transform 0.7s ease, filter 0.5s ease;
  display: block;
}

/* Hover */
.gallery-item:hover {
  transform: translateY(-8px);
  box-shadow: 0 20px 45px rgba(0,0,0,0.18);
}

.gallery-item:hover img {
  transform: scale(1.08);
  filter: brightness(85%);
}

/* ===== LIGHTBOX ===== */

.lightbox {
  position: fixed;
  inset: 0;
  background: rgba(0,0,0,0.85);
  display: none;
  align-items: center;
  justify-content: center;
  z-index: 9999;
  padding: 40px;
}

.lightbox.active {
  display: flex;
}

.lightbox-img {
  max-width: 90%;
  max-height: 85vh;
  border-radius: 18px;
  animation: zoomIn 0.4s ease;
}

.lightbox-close {
  position: absolute;
  top: 30px;
  right: 40px;
  font-size: 40px;
  color: #fff;
  cursor: pointer;
}

/* Zoom animation */
@keyframes zoomIn {
  from { transform: scale(0.7); opacity: 0; }
  to { transform: scale(1); opacity: 1; }
}
/* ===== MOBILE 2x2 GRID ===== */
@media (max-width: 768px) {
  .gallery8_component {
    grid-template-columns: repeat(2, 1fr);
    gap: 15px;
  }

  .gallery-item img {
    height: 180px;
  }
}
    </style>
</head>
<body>

  <div class="cursor" id="cursor"></div>
  <div class="cursor-follower" id="cursor-follower"></div>

  <?php include 'header.php'; ?>

  <!-- ── INNER PAGE BANNER ────────────────────────────– -->
  <section class="inner-banner" style="background: linear-gradient(90deg,rgba(176, 14, 9, 1) 0%, rgba(130, 42, 42, 1) 100%);">
    <div class="inner-banner-content container">
      <h1 data-aos="fade-up">Explore Our Transformations
</h1>
      <p class="inner-banner-subtitle" data-aos="fade-up" data-aos-delay="100">Discover the beauty journeys of our clients at Geneva Wellness Institute. From rejuvenated skin to revitalized hair, see the remarkable results our treatments have achieved. Let these transformations inspire your own path to beauty and wellness.

</p>
 <!-- ── BREADCRUMB ────────────────────────────────– -->
  <nav class="breadcrumb container" aria-label="Breadcrumb">
    <a href="index.php">Home</a>
    <span>/</span>
    <span aria-current="page">Gallery</span>
  </nav>
    </div>
    
  </section>

 

  <main>

    <!-- ── GALLERY SECTION ────────────────────────────– -->
      
    <section class="section gallery-section">
  <div class="container">

    <div class="gallery8_component">

      <!-- 13 Images -->
      <div class="gallery-item"><img src="img\gallery-img-1.jpg" alt="Gallery Image"></div>
      <div class="gallery-item"><img src="img\gallery-img-2.jpg" alt="Gallery Image"></div>
      <div class="gallery-item"><img src="img\gallery-img-3.jpg" alt="Gallery Image"></div>
      <div class="gallery-item"><img src="img\gallery-img-4.jpg" alt="Gallery Image"></div>
      <div class="gallery-item"><img src="img\gallery-img-5.jpg" alt="Gallery Image"></div>
      <div class="gallery-item"><img src="img\gallery-img-6.jpg" alt="Gallery Image"></div>
       <div class="gallery-item"><img src="img\gallery-img-7.jpg" alt="Gallery Image"></div>
      <div class="gallery-item"><img src="img\gallery-img-8.jpg" alt="Gallery Image"></div>
      <div class="gallery-item"><img src="img\gallery-img-9.jpg" alt="Gallery Image"></div>
      <div class="gallery-item"><img src="img\gallery-img-10.jpg" alt="Gallery Image"></div>
      <div class="gallery-item"><img src="img\gallery-img-11.jpg" alt="Gallery Image"></div>
      <div class="gallery-item"><img src="img\gallery-img-12.jpg" alt="Gallery Image"></div>
<div class="gallery-item"><img src="img\gallery-img-13.jpg" alt="Gallery Image"></div>
      <div class="gallery-item"><img src="img\gallery-img-14.jpg" alt="Gallery Image"></div>
      <div class="gallery-item"><img src="img\gallery-img-15.jpg" alt="Gallery Image"></div>
      <div class="gallery-item"><img src="img\gallery-img-16.jpg" alt="Gallery Image"></div>
      <div class="gallery-item"><img src="img\gallery-img-17.jpg" alt="Gallery Image"></div>

    </div>

  </div>
</section>

<!-- Lightbox Popup -->
<div class="lightbox" id="lightbox">
  <span class="lightbox-close">&times;</span>
  <img class="lightbox-img" src="" alt="Expanded Image">
</div>

 
    <?php include 'footer.php'; ?>

  </main>

  <button class="back-to-top" id="back-to-top" aria-label="Back to top">↑</button>

  <!-- AOS JS -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <!-- Dynamic Component Manager -->
  <script src="components.js"></script>
  <!-- Page-specific Scripts -->
  <script src="script.js"></script>

  <script>
const galleryImages = document.querySelectorAll(".gallery-item img");
const lightbox = document.getElementById("lightbox");
const lightboxImg = document.querySelector(".lightbox-img");
const closeBtn = document.querySelector(".lightbox-close");

galleryImages.forEach(img => {
  img.addEventListener("click", () => {
    lightbox.classList.add("active");
    lightboxImg.src = img.src;
  });
});

closeBtn.addEventListener("click", () => {
  lightbox.classList.remove("active");
});

lightbox.addEventListener("click", (e) => {
  if (e.target !== lightboxImg) {
    lightbox.classList.remove("active");
  }
});
  </script>
</body>
</html>
