<?php 
$page_title = 'Client Testimonials'; 
$page_subtitle = 'Stories of Transformation & Satisfaction'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Read testimonials from satisfied clients at Geneva Wellness Institute. See what our clients have to say about their treatment experiences." />
  <meta name="keywords" content="testimonials, client reviews, success stories, Geneva Wellness feedback" />
  <meta name="robots" content="index, follow" />
  <meta property="og:title" content="Testimonials — Geneva Wellness Institute" />
  <meta property="og:description" content="Real stories from our satisfied clients." />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://genevawellness.com/testimonials" />
  <link rel="canonical" href="https://genevawellness.com/testimonials" />
  <title>Testimonials — Geneva Wellness Institute</title>

  <!-- ── STRUCTURED DATA (Schema.org) ───────────────────────────────── -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "ReviewCollection",
    "name": "Geneva Wellness Reviews",
    "description": "Client testimonials and reviews for Geneva Wellness Institute treatments",
    "url": "https://genevawellness.com/testimonials",
    "author": {
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
    .video-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 30px;
}

.video-card {
  position: relative;
  cursor: pointer;
  border-radius: 14px;
  overflow: hidden;
}

.video-card img {
  width: 100%;
  display: block;
}

.play-btn {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background: rgba(176,14,9,0.9);
  color: #fff;
  width: 65px;
  height: 65px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 26px;
}

.video-modal {
  position: fixed;
  inset: 0;
  background: rgba(0,0,0,0.75);
  display: none;
  align-items: center;
  justify-content: center;
  z-index: 9999;
}

.video-modal-content {
  width: 85%;
  max-width: 900px;
  position: relative;
}

.close-video {
  position: absolute;
  top: -40px;
  right: 0;
  font-size: 40px;
  color: white;
  cursor: pointer;
}

@media(max-width: 992px){
  .video-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media(max-width: 576px){
  .video-grid {
    grid-template-columns: 1fr;
  }
}
  </style>
</head>
<body>

  <div class="cursor" id="cursor"></div>
  <div class="cursor-follower" id="cursor-follower"></div>

  <?php include 'header.php'; ?>

  <!-- ── INNER PAGE BANNER ────────────────────────────– -->
  <section class="inner-banner" style="background: linear-gradient(135deg, #B00E09 0%, #FAD2B8 100%);">
    <div class="inner-banner-content container">
      <h1 data-aos="fade-up">What Our Clients Say</h1>
      <p class="inner-banner-subtitle" data-aos="fade-up" data-aos-delay="100">Hear from those who have experienced the transformative power of Geneva Wellness Institute. Our clients share their stories of rejuvenation, confidence, and beauty. Let their words inspire your own journey to wellness

</p>
      <!-- ── BREADCRUMB ────────────────────────────────– -->
  <nav class="breadcrumb container" aria-label="Breadcrumb">
    <a href="index.php">Home</a>
    <span>/</span>
    <span aria-current="page">Testimonials</span>
  </nav>
    </div>
  </section>

  

  <main>

    

    <!-- ── VIDEO TESTIMONIALS ───────────────────────── -->
<section class="section">
  <div class="container">

    <div class="section-header">
      <span class="eyebrow">Real Stories</span>
      <h2>Client Testimonials</h2>
    </div>

    <div class="video-grid">

     <div class="video-card" data-video="ww-OefRLgiQ">
    <img src="https://img.youtube.com/vi/ww-OefRLgiQ/hqdefault.jpg" alt="Video Testimonial">
    <div class="play-btn">▶</div>
  </div>

  <div class="video-card" data-video="xMq9w8a81bo">
    <img src="https://img.youtube.com/vi/xMq9w8a81bo/hqdefault.jpg" alt="Video Testimonial">
    <div class="play-btn">▶</div>
  </div>

  <div class="video-card" data-video="8ER__ofvhEQ">
    <img src="https://img.youtube.com/vi/8ER__ofvhEQ/hqdefault.jpg" alt="Video Testimonial">
    <div class="play-btn">▶</div>
  </div>

  <div class="video-card" data-video="PYHIzG4w2HY">
    <img src="https://img.youtube.com/vi/PYHIzG4w2HY/hqdefault.jpg" alt="Video Testimonial">
    <div class="play-btn">▶</div>
  </div>

  <div class="video-card" data-video="sUaxQuCmmXg">
    <img src="https://img.youtube.com/vi/sUaxQuCmmXg/hqdefault.jpg" alt="Video Testimonial">
    <div class="play-btn">▶</div>
  </div>

  <div class="video-card" data-video="BN-SkkUI7jE">
    <img src="https://img.youtube.com/vi/BN-SkkUI7jE/hqdefault.jpg" alt="Video Testimonial">
    <div class="play-btn">▶</div>
  </div>

  <div class="video-card" data-video="A-0R_S9fliw">
    <img src="https://img.youtube.com/vi/A-0R_S9fliw/hqdefault.jpg" alt="Video Testimonial">
    <div class="play-btn">▶</div>
  </div>

  <div class="video-card" data-video="w-dkEQi-LTE">
    <img src="https://img.youtube.com/vi/w-dkEQi-LTE/hqdefault.jpg" alt="Video Testimonial">
    <div class="play-btn">▶</div>
  </div>

  <div class="video-card" data-video="PXNpnWjP3DM">
    <img src="https://img.youtube.com/vi/PXNpnWjP3DM/hqdefault.jpg" alt="Video Testimonial">
    <div class="play-btn">▶</div>
  </div>
    </div>
  </div>
</section>

<!-- POPUP MODAL -->
<div class="video-modal" id="videoModal">
  <div class="video-modal-content">
    <span class="close-video">&times;</span>
    <iframe id="videoFrame" width="100%" height="500"
      src=""
      frameborder="0"
      allow="autoplay; encrypted-media"
      allowfullscreen>
    </iframe>
  </div>
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
    const videoModal = document.getElementById("videoModal");
const videoFrame = document.getElementById("videoFrame");
const closeVideo = document.querySelector(".close-video");

document.querySelectorAll(".video-card").forEach(card => {
  card.addEventListener("click", function(){
    const id = this.getAttribute("data-video");
    videoFrame.src = `https://www.youtube.com/embed/${id}?autoplay=1`;
    videoModal.style.display = "flex";
  });
});

closeVideo.addEventListener("click", function(){
  videoModal.style.display = "none";
  videoFrame.src = "";
});

window.addEventListener("click", function(e){
  if(e.target === videoModal){
    videoModal.style.display = "none";
    videoFrame.src = "";
  }
});
    </script>
</body>
</html>
