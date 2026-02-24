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

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,300;0,9..144,400;0,9..144,500;0,9..144,600;0,9..144,700;1,9..144,300;1,9..144,400&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
  <link rel="stylesheet" href="style.css" />
</head>
<body>

  <div class="cursor" id="cursor"></div>
  <div class="cursor-follower" id="cursor-follower"></div>

  <?php include 'header.php'; ?>

  <!-- ── INNER PAGE BANNER ────────────────────────────– -->
  <section class="inner-banner" style="background: linear-gradient(135deg, #CAAE5F 0%, #FAD2B8 100%);">
    <div class="inner-banner-content container">
      <h1 data-aos="fade-up">Gallery</h1>
      <p class="inner-banner-subtitle" data-aos="fade-up" data-aos-delay="100">See Real Results & Transformations</p>
    </div>
  </section>

  <!-- ── BREADCRUMB ────────────────────────────────– -->
  <nav class="breadcrumb container" aria-label="Breadcrumb">
    <a href="index.php">Home</a>
    <span>/</span>
    <span aria-current="page">Gallery</span>
  </nav>

  <main>

    <!-- ── GALLERY SECTION ────────────────────────────– -->
    <section class="section">
      <div class="container">
        <div class="section-header">
          <p class="section-desc">Explore our collection of real client transformations and facility highlights. Each image represents our commitment to excellence and natural-looking results.</p>
        </div>

        <!-- Gallery Grid -->
        <div class="gallery-grid">
          <figure class="gallery-item" data-aos="fade-up">
            <img src="img/gallery-01.jpg" alt="Treatment result - facial skin improvement" loading="lazy" width="400" height="400" />
            <figcaption>HIFU Facial Lifting</figcaption>
          </figure>
          <figure class="gallery-item" data-aos="fade-up" data-aos-delay="50">
            <img src="img/gallery-02.jpg" alt="Treatment result - body contouring" loading="lazy" width="400" height="400" />
            <figcaption>Body Contouring Results</figcaption>
          </figure>
          <figure class="gallery-item" data-aos="fade-up" data-aos-delay="100">
            <img src="img/gallery-03.jpg" alt="Treatment result - skin texture improvement" loading="lazy" width="400" height="400" />
            <figcaption>CO2 Laser Treatment</figcaption>
          </figure>
          <figure class="gallery-item" data-aos="fade-up" data-aos-delay="150">
            <img src="img/gallery-04.jpg" alt="Facility - treatment room" loading="lazy" width="400" height="400" />
            <figcaption>Treatment Room</figcaption>
          </figure>
          <figure class="gallery-item" data-aos="fade-up" data-aos-delay="200">
            <img src="img/gallery-05.jpg" alt="Treatment result - hair restoration" loading="lazy" width="400" height="400" />
            <figcaption>Hair Restoration Success</figcaption>
          </figure>
          <figure class="gallery-item" data-aos="fade-up" data-aos-delay="250">
            <img src="img/gallery-06.jpg" alt="Treatment result - pigmentation removal" loading="lazy" width="400" height="400" />
            <figcaption>Pico Laser Results</figcaption>
          </figure>
          <figure class="gallery-item" data-aos="fade-up" data-aos-delay="300">
            <img src="img/gallery-07.jpg" alt="Treatment result - facial rejuvenation" loading="lazy" width="400" height="400" />
            <figcaption>Facial Rejuvenation</figcaption>
          </figure>
          <figure class="gallery-item" data-aos="fade-up" data-aos-delay="350">
            <img src="img/gallery-08.jpg" alt="Treatment result - microneedling outcome" loading="lazy" width="400" height="400" />
            <figcaption>Microneedling Results</figcaption>
          </figure>
          <figure class="gallery-item" data-aos="fade-up" data-aos-delay="400">
            <img src="img/gallery-09.jpg" alt="Facility - consultation area" loading="lazy" width="400" height="400" />
            <figcaption>Consultation Room</figcaption>
          </figure>
          <figure class="gallery-item" data-aos="fade-up" data-aos-delay="450">
            <img src="img/gallery-10.jpg" alt="Treatment result - skin brightening" loading="lazy" width="400" height="400" />
            <figcaption>Carbon Laser Peel</figcaption>
          </figure>
          <figure class="gallery-item" data-aos="fade-up" data-aos-delay="500">
            <img src="img/gallery-11.jpg" alt="Treatment result - cellulite reduction" loading="lazy" width="400" height="400" />
            <figcaption>Cellulite Treatment</figcaption>
          </figure>
          <figure class="gallery-item" data-aos="fade-up" data-aos-delay="550">
            <img src="img/gallery-12.jpg" alt="Facility - technology showcase" loading="lazy" width="400" height="400" />
            <figcaption>Advanced Technology</figcaption>
          </figure>
        </div>
      </div>
    </section>

    <!-- ── CLIENT TESTIMONIAL SECTION ────────────────– -->
    <section class="section" style="background: linear-gradient(135deg, rgba(202, 174, 95, 0.08), rgba(250, 210, 184, 0.08));">
      <div class="container">
        <div class="section-header">
          <span class="eyebrow">Client Success Stories</span>
          <h2>Real Transformations</h2>
        </div>
        <div class="testimonial-grid">
          <blockquote class="testimonial-item" data-aos="fade-up">
            <p>"My skin has never looked better! The HIFU treatment was painless and the results exceeded my expectations."</p>
            <footer>
              <strong>Maria Santos</strong>
              <span>HIFU Treatment Client</span>
            </footer>
          </blockquote>
          <blockquote class="testimonial-item" data-aos="fade-up" data-aos-delay="100">
            <p>"After just 3 sessions, the difference in my skin texture is remarkable. The team is professional and caring."</p>
            <footer>
              <strong>Ana Michelle</strong>
              <span>CO2 Laser Therapy Client</span>
            </footer>
          </blockquote>
          <blockquote class="testimonial-item" data-aos="fade-up" data-aos-delay="200">
            <p>"I'm so happy with my hair restoration results! The treatment was comfortable and the growth is visible."</p>
            <footer>
              <strong>James Rodriguez</strong>
              <span>Hair Restoration Client</span>
            </footer>
          </blockquote>
        </div>
      </div>
    </section>

    <!-- ── CTA SECTION ────────────────────────────────– -->
    <section class="section cta-section" style="background: linear-gradient(135deg, #B00E09 0%, #CAAE5F 100%);">
      <div class="container cta-content">
        <div>
          <h2 style="color: white; margin-bottom: 1rem;">Inspired by These Results?</h2>
          <p style="color: rgba(255, 255, 255, 0.95); font-size: 1.1rem; margin-bottom: 0;">Schedule your consultation today and start your journey to transformation.</p>
        </div>
        <a href="contact-us.php#contact-form" class="btn btn-white">Book Now</a>
      </div>
    </section>

    <?php include 'footer.php'; ?>

  </main>

  <button class="back-to-top" id="back-to-top" aria-label="Back to top">↑</button>

  <!-- AOS JS -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <!-- Dynamic Component Manager -->
  <script src="components.js"></script>
  <!-- Page-specific Scripts -->
  <script src="script.js"></script>
</body>
</html>
