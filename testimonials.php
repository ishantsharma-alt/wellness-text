<?php 
$page_title = 'Client Testimonials'; 
$page_subtitle = 'Real stories from patients who transformed their beauty and confidence'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="img/geneva-favicon.svg" type="image/svg+xml">
  <meta name="description" content="Read real client testimonials and before-after results from our aesthetic clinic. Discover why patients choose Geneva Wellness for laser treatments and body contouring." />
  <meta name="keywords" content="client testimonials, treatment results, aesthetic reviews, before after, laser treatment results, Alabang clinic" />
  <meta name="robots" content="index, follow" />
  <meta property="og:title" content="Client Testimonials | Aesthetic Results" />
  <meta property="og:description" content="Real client testimonials and before-after treatment results from Geneva Wellness aesthetic clinic. See transformation results from laser and body treatments." />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://genevawellness.com/testimonials" /><meta property="og:image" content="img/feature-img/testimonials.webp" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="630" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:image" content="img/feature-img/testimonials.webp" />
<link rel="canonical" href="https://genevawellness.com/testimonials" />
  <title>Client Testimonials | Aesthetic Results</title>

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

   <?php include 'hero-section.php'; ?>

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
    <img src="https://img.youtube.com/vi/ww-OefRLgiQ/hqdefault.jpg" alt="Client Testimonial - Facial Treatment Results" title="Client Testimonial - Facial Treatment Results">
    <div class="play-btn">▶</div>
  </div>

  <div class="video-card" data-video="xMq9w8a81bo">
    <img src="https://img.youtube.com/vi/xMq9w8a81bo/hqdefault.jpg" alt="Client Testimonial - Skin Rejuvenation" title="Client Testimonial - Skin Rejuvenation">
    <div class="play-btn">▶</div>
  </div>

  <div class="video-card" data-video="8ER__ofvhEQ">
    <img src="https://img.youtube.com/vi/8ER__ofvhEQ/hqdefault.jpg" alt="Client Testimonial - Anti-Aging Treatment" title="Client Testimonial - Anti-Aging Treatment">
    <div class="play-btn">▶</div>
  </div>

  <div class="video-card" data-video="PYHIzG4w2HY">
    <img src="https://img.youtube.com/vi/PYHIzG4w2HY/hqdefault.jpg" alt="Client Testimonial - Body Contouring" title="Client Testimonial - Body Contouring">
    <div class="play-btn">▶</div>
  </div>

  <div class="video-card" data-video="sUaxQuCmmXg">
    <img src="https://img.youtube.com/vi/sUaxQuCmmXg/hqdefault.jpg" alt="Client Testimonial - Laser Treatment" title="Client Testimonial - Laser Treatment">
    <div class="play-btn">▶</div>
  </div>

  <div class="video-card" data-video="BN-SkkUI7jE">
    <img src="https://img.youtube.com/vi/BN-SkkUI7jE/hqdefault.jpg" alt="Client Testimonial - Hair Restoration" title="Client Testimonial - Hair Restoration">
    <div class="play-btn">▶</div>
  </div>

  <div class="video-card" data-video="A-0R_S9fliw">
    <img src="https://img.youtube.com/vi/A-0R_S9fliw/hqdefault.jpg" alt="Client Testimonial - Beauty Transformation" title="Client Testimonial - Beauty Transformation">
    <div class="play-btn">▶</div>
  </div>

  <div class="video-card" data-video="w-dkEQi-LTE">
    <img src="https://img.youtube.com/vi/w-dkEQi-LTE/hqdefault.jpg" alt="Client Testimonial - Wellness Results" title="Client Testimonial - Wellness Results">
    <div class="play-btn">▶</div>
  </div>

  <div class="video-card" data-video="PXNpnWjP3DM">
    <img src="https://img.youtube.com/vi/PXNpnWjP3DM/hqdefault.jpg" alt="Client Testimonial - Aesthetic Results" title="Client Testimonial - Aesthetic Results">
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
      title="Client Testimonial Video - Geneva Wellness"
      frameborder="0"
      allow="autoplay; encrypted-media"
      allowfullscreen>
    </iframe>
  </div>
</div>

   

    <?php include 'footer.php'; ?>

  </main>

  <button class="back-to-top" id="back-to-top" aria-label="Back to top"><i class="fas fa-arrow-up"></i></button>

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
