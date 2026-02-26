<?php
$page_title = 'About Us';
$page_subtitle = 'At Geneva Wellness Institute, we are dedicated to enhancing your natural beauty and well-being through personalized care and advanced treatments. Our expert team combines innovative technologies with a deep commitment to your satisfaction, helping you achieve your beauty and wellness goals in a supportive and luxurious environment.';
$breadcrumb = [
  ['label' => 'About Us', 'url' => null]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="About Geneva Wellness Institute. Founded with excellence in aesthetics and wellness, serving the Philippines community with state-of-the-art treatments." />
  <meta name="keywords" content="Geneva Wellness, about us, medical spa, aesthetic treatments, Muntinlupa" />
  <meta name="robots" content="index, follow" />
  <meta property="og:title" content="About Geneva Wellness Institute" />
  <meta property="og:description" content="Discover our story, mission, and commitment to transformative wellness treatments." />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://genevawellness.com/about-us" />
  <link rel="canonical" href="https://genevawellness.com/about-us" />
  <title>About Us — Geneva Wellness Institute</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet" />

  <!-- Animations CSS -->
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />

  <link rel="stylesheet" href="style.css">

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "Geneva Wellness Institute",
    "description": "Transformative wellness and aesthetic treatments",
    "url": "https://genevawellness.com",
    "address": {"@type":"PostalAddress","streetAddress":"GF Vivere Hotel, 5102 Bridgeway Ave., Filinvest Corporate City","addressLocality":"Alabang, Muntinlupa City","addressCountry":"PH"}
  }
  </script>
</head>
<body>

  <!-- ── CURSOR ────────────────────────────────────────── -->
  <div class="cursor" id="cursor"></div>
  <div class="cursor-follower" id="cursor-follower"></div>

  <!-- ── HEADER ────────────────────────────────────────── -->
  <?php include 'header.php'; ?>
  <?php include 'hero-section.php'; ?>

  <!-- ── MAIN CONTENT ────────────────────────────────── -->
  <main id="main-content">

    <!-- ── ABOUT SECTION ────────────────────────────── -->
    <section class="section">
      <div class="container">
        <div class="about-grid">
          <div class="about-content"  data-aos="fade-right">
            <h2>Welcome to Geneva Wellness Institute</h2>
            <p>At Geneva Wellness Institute, our mission is to empower you to achieve your beauty and wellness goals through personalized care and advanced treatments. We pride ourselves on offering a luxurious and supportive environment where cutting-edge technology meets expert knowledge. Our dedicated team is here to guide you through your journey, ensuring that each treatment is tailored to your unique needs for optimal results. Whether you're seeking to rejuvenate your skin, enhance your body contours, or restore your hair's vitality, Geneva Wellness Institute is committed to helping you look and feel your best.</p>
            
            <ul class="highlights">
              <li><strong>Personalized Care</strong><br><em>Tailored treatments designed to meet your unique beauty and wellness goals.</em></li>
              <li><strong>Advanced Technology</strong><br><em>State-of-the-art equipment and the latest innovations in aesthetic medicine.</em></li>
              <li><strong>Expert Team</strong><br><em>Highly skilled professionals dedicated to your safety and satisfaction.</em></li>
              <li><strong>Luxurious Environment</strong><br><em>Relax in a soothing, elegant space designed to enhance your experience.</em></li>
            </ul>
          </div>
          <div class="about-image" data-aos="fade-left">
 <!-- VIDEO SECTION -->
<div class="video-wrapper">
    <div class="video-thumbnail" id="videoThumb">
        <img src="img/about-video.png" alt="About Video">
        <div class="play-button"></div>
    </div>
</div>

<!-- VIDEO MODAL -->
<div class="video-modal" id="videoModal">
    <div class="video-modal-content">
        <span class="close-video" id="closeVideo">&times;</span>

        <iframe 
            id="youtubeVideo"
            src=""
            title="YouTube video player"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>
        </iframe>
    </div>
</div>


          </div>
        </div>
      </div>
    </section>

    <!-- ── VALUES SECTION ────────────────────────────– -->
    <!-- <section class="section values-section">
      <div class="container">
        <div class="section-header">
          <span class="eyebrow">Our Values</span>
          <h2>What Drives Us</h2>
        </div>
        <div class="values-grid">
          <div class="value-card" data-aos="fade-up">
            <div class="value-icon">✨</div>
            <h3>Excellence</h3>
            <p>We maintain the highest standards in every aspect of care, from equipment to expertise to client experience.</p>
          </div>
          <div class="value-card" data-aos="fade-up" data-aos-delay="100">
            <div class="value-icon">🤝</div>
            <h3>Integrity</h3>
            <p>Honest consultations, transparent procedures, and genuine care for every client's wellbeing and satisfaction.</p>
          </div>
          <div class="value-card" data-aos="fade-up" data-aos-delay="200">
            <div class="value-icon">🎯</div>
            <h3>Innovation</h3>
            <p>Continuously updating our techniques and technology to offer the latest advancements in aesthetic medicine.</p>
          </div>
          <div class="value-card" data-aos="fade-up" data-aos-delay="300">
            <div class="value-icon">❤️</div>
            <h3>Empowerment</h3>
            <p>Helping clients feel confident, beautiful, and comfortable in their own skin through personalized wellness journeys.</p>
          </div>
        </div>
      </div>
    </section> -->

    <!-- ── TEAM SECTION ────────────────────────────────– -->
    <!-- <section class="section team-section">
      <div class="container">
        <div class="section-header">
          <span class="eyebrow">Meet Our Team</span>
          <h2>Expert Professionals</h2>
          <p class="section-desc">Our team combines international training with local expertise.</p>
        </div>
        <div class="team-grid">
          <div class="team-card" data-aos="fade-up">
            <div class="team-image">
              <img src="img/team-member-1.jpg" alt="Medical professional" loading="lazy" width="300" height="350" />
            </div>
            <h3>Dr. Rafael Santos</h3>
            <p class="team-role">Lead Aesthetic Doctor</p>
            <p class="team-bio">15+ years of experience in advanced aesthetic treatments. Board-certified dermatologist with international fellowship.</p>
          </div>
          <div class="team-card" data-aos="fade-up" data-aos-delay="100">
            <div class="team-image">
              <img src="img/team-member-2.jpg" alt="Medical professional" loading="lazy" width="300" height="350" />
            </div>
            <h3>Maria Cruz</h3>
            <p class="team-role">Wellness Specialist</p>
            <p class="team-bio">Certified in advanced injection techniques and body contouring. Passionate about personalized wellness plans.</p>
          </div>
          <div class="team-card" data-aos="fade-up" data-aos-delay="200">
            <div class="team-image">
              <img src="img/team-member-3.jpg" alt="Medical professional" loading="lazy" width="300" height="350" />
            </div>
            <h3>Dr. Stephanie Lee</h3>
            <p class="team-role">Technology Specialist</p>
            <p class="team-bio">Expert in laser and radiofrequency treatments. Continuously trained on latest equipment capabilities.</p>
          </div>
        </div>
      </div>
    </section> -->

    <!-- ── STATS SECTION ────────────────────────────────– -->
    <section class="section stats-section" style="background: linear-gradient(135deg, rgba(250, 210, 184, 0.1), rgba(202, 174, 95, 0.05));">
      <div class="container">
        <div class="stats-grid">
          <div class="stat-item" data-aos="fade-up">
            <div class="stat-number">5000+</div>
            <div class="stat-label">Happy Clients</div>
          </div>
          <div class="stat-item" data-aos="fade-up" data-aos-delay="100">
            <div class="stat-number">10+</div>
            <div class="stat-label">Years Combined Experience</div>
          </div>
          <div class="stat-item" data-aos="fade-up" data-aos-delay="200">
            <div class="stat-number">25+</div>
            <div class="stat-label">Advanced Treatments</div>
          </div>
          <div class="stat-item" data-aos="fade-up" data-aos-delay="300">
            <div class="stat-number">98%</div>
            <div class="stat-label">Client Satisfaction</div>
          </div>
        </div>
      </div>
    </section>

    <!-- ── CTA SECTION ────────────────────────────────– -->
    <!-- Moved to footer.php to display on all pages -->

  </main>

  <!-- ── DYNAMIC FOOTER ───────────────────────────────────────── -->
  <?php include 'footer.php'; ?>

  <button class="back-to-top" id="back-to-top" aria-label="Back to top">↑</button>

  <!-- AOS JS -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <!-- Dynamic Component Manager -->
  <script src="components.js"></script>
  <!-- Page-specific Scripts -->
  <script src="script.js"></script>

  <style>
/* Wrapper */
.video-wrapper {
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Thumbnail */
.video-thumbnail {
    position: relative;
    cursor: pointer;
    max-width: 700px;
    width: 100%;
    border-radius: 12px;
    overflow: hidden;
}

.video-thumbnail img {
    width: 100%;
    display: block;
    transition: 0.4s ease;
}

.video-thumbnail:hover img {
    transform: scale(1.05);
}

/* Play Button */
.play-button {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 80px;
    height: 80px;
    background: rgba(255,255,255,0.9);
    border-radius: 50%;
}

.play-button::before {
    content: "";
    position: absolute;
    left: 32px;
    top: 22px;
    border-style: solid;
    border-width: 18px 0 18px 28px;
    border-color: transparent transparent transparent #000;
}

/* Modal Background */
.video-modal {
    display: none;
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,0.85);
    justify-content: center;
    align-items: center;
    z-index: 9999;
}

/* Modal Content */
.video-modal-content {
    position: relative;
    width: 90%;
    max-width: 900px;
    aspect-ratio: 16 / 9;
}

/* Iframe */
.video-modal-content iframe {
    width: 100%;
    height: 100%;
    border-radius: 10px;
}

/* Close Button */
.close-video {
    position: absolute;
    top: -40px;
    right: 0;
    color: #fff;
    font-size: 32px;
    cursor: pointer;
}
</style>

<script>
const videoThumb = document.getElementById("videoThumb");
const videoModal = document.getElementById("videoModal");
const closeVideo = document.getElementById("closeVideo");
const youtubeVideo = document.getElementById("youtubeVideo");

videoThumb.addEventListener("click", function() {
    videoModal.style.display = "flex";
    youtubeVideo.src = "https://www.youtube.com/embed/GpgTzxevaNQ?autoplay=1";
});

closeVideo.addEventListener("click", closeModal);
videoModal.addEventListener("click", function(e){
    if(e.target === videoModal){
        closeModal();
    }
});

function closeModal(){
    videoModal.style.display = "none";
    youtubeVideo.src = "";
}
</script>
</body>
</html>
