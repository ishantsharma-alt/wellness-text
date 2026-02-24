<?php
$page_title = 'Our Treatments';
$page_subtitle = 'Advanced Technology, Proven Results';
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

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,300;0,9..144,400;0,9..144,500;0,9..144,600;0,9..144,700;1,9..144,300;1,9..144,400&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
  <link rel="stylesheet" href="style.css" />

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

  <!-- ── PHP INCLUDES ────────────────────────────────────────────– -->
  <?php include 'header.php'; ?>
  <?php include 'hero-section.php'; ?>

  <main>

    <!-- ── TREATMENT CATEGORIES ────────────────────────– -->
    <section class="section">
      <div class="container">
        <div class="section-header">
          <span class="eyebrow">Our Services</span>
          <h2>Personalized Treatment Solutions</h2>
          <p class="section-desc">We offer a comprehensive range of advanced aesthetic treatments designed to meet your unique wellness goals.</p>
        </div>

        <!-- Face & Skin -->
        <h3 class="treatment-category-title" data-aos="fade-up">Face & Skin Treatments</h3>
        <div class="treatments-grid">
          <article class="treatment-card" data-aos="fade-up">
            <h4>HIFU (High-Intensity Focused Ultrasound)</h4>
            <ul class="treatment-benefits">
              <li>Non-invasive skin tightening</li>
              <li>Reduces fine lines and wrinkles</li>
              <li>Improves skin elasticity</li>
            </ul>
            <p class="treatment-desc">Advanced ultrasound technology for natural-looking lift and rejuvenation without downtime.</p>
            <a href="contact-us.php#contact-form" class="treatment-cta">Learn More</a>
          </article>

          <article class="treatment-card" data-aos="fade-up" data-aos-delay="100">
            <h4>CO2 Laser Therapy</h4>
            <ul class="treatment-benefits">
              <li>Precise skin resurfacing</li>
              <li>Reduces scars and age spots</li>
              <li>Brightens complexion</li>
            </ul>
            <p class="treatment-desc">Powerful laser technology for deep skin renewal and transformation with visible results.</p>
            <a href="contact-us.php#contact-form" class="treatment-cta">Learn More</a>
          </article>

          <article class="treatment-card" data-aos="fade-up" data-aos-delay="200">
            <h4>Carbon Laser Peel</h4>
            <ul class="treatment-benefits">
              <li>Painless skin brightening</li>
              <li>Reduces pores and oil</li>
              <li>Instant results</li>
            </ul>
            <p class="treatment-desc">Gentle yet effective treatment for immediate glow and smooth texture.</p>
            <a href="contact-us.php#contact-form" class="treatment-cta">Learn More</a>
          </article>

          <article class="treatment-card" data-aos="fade-up" data-aos-delay="300">
            <h4>Pico Laser</h4>
            <ul class="treatment-benefits">
              <li>Removes tattoos & pigmentation</li>
              <li>Ultra-fast pulse technology</li>
              <li>Minimal pain and recovery</li>
            </ul>
            <p class="treatment-desc">Revolutionary laser for treating stubborn pigmentation with precision.</p>
            <a href="contact-us.php#contact-form" class="treatment-cta">Learn More</a>
          </article>

          <article class="treatment-card" data-aos="fade-up" data-aos-delay="400">
            <h4>Chemical Peels</h4>
            <ul class="treatment-benefits">
              <li>Exfoliates dead skin</li>
              <li>Improves texture & tone</li>
              <li>Customizable intensity</li>
            </ul>
            <p class="treatment-desc">Professional-grade peels tailored to your skin type for maximum benefit.</p>
            <a href="contact-us.php#contact-form" class="treatment-cta">Learn More</a>
          </article>

          <article class="treatment-card" data-aos="fade-up" data-aos-delay="500">
            <h4>Microneedling</h4>
            <ul class="treatment-benefits">
              <li>Stimulates collagen production</li>
              <li>Reduces scars & wrinkles</li>
              <li>Natural skin rejuvenation</li>
            </ul>
            <p class="treatment-desc">Controlled micro-injuries trigger skin's natural healing and renewal process.</p>
            <a href="contact-us.php#contact-form" class="treatment-cta">Learn More</a>
          </article>
        </div>

        <!-- Body -->
        <h3 class="treatment-category-title" data-aos="fade-up" style="margin-top: 4rem;">Body & Contouring</h3>
        <div class="treatments-grid">
          <article class="treatment-card" data-aos="fade-up">
            <h4>Exilis Ultra</h4>
            <ul class="treatment-benefits">
              <li>Non-invasive fat reduction</li>
              <li>Skin tightening</li>
              <li>Results in 2-4 weeks</li>
            </ul>
            <p class="treatment-desc">Combines radiofrequency and ultrasound for body sculpting and toning.</p>
            <a href="contact-us.php#contact-form" class="treatment-cta">Learn More</a>
          </article>

          <article class="treatment-card" data-aos="fade-up" data-aos-delay="100">
            <h4>Hair Restoration</h4>
            <ul class="treatment-benefits">
              <li>Stimulates hair growth</li>
              <li>Non-surgical solution</li>
              <li>Safe & effective</li>
            </ul>
            <p class="treatment-desc">Advanced technology to reverse hair loss and restore fuller, thicker hair.</p>
            <a href="contact-us.php#contact-form" class="treatment-cta">Learn More</a>
          </article>

          <article class="treatment-card" data-aos="fade-up" data-aos-delay="200">
            <h4>Cellulite Reduction</h4>
            <ul class="treatment-benefits">
              <li>Targets cellulite dimples</li>
              <li>Improves skin texture</li>
              <li>Non-invasive approach</li>
            </ul>
            <p class="treatment-desc">Specialized treatment to reduce the appearance of cellulite effectively.</p>
            <a href="contact-us.php#contact-form" class="treatment-cta">Learn More</a>
          </article>

          <article class="treatment-card" data-aos="fade-up" data-aos-delay="300">
            <h4>Stretch Mark Treatment</h4>
            <ul class="treatment-benefits">
              <li>Reduces stretch marks</li>
              <li>Improves skin quality</li>
              <li>Multi-modal approach</li>
            </ul>
            <p class="treatment-desc">Combination treatments for visible improvement in stretch mark appearance.</p>
            <a href="contact-us.php#contact-form" class="treatment-cta">Learn More</a>
          </article>

          <article class="treatment-card" data-aos="fade-up" data-aos-delay="400">
            <h4>Tattoo Removal</h4>
            <ul class="treatment-benefits">
              <li>Safe & effective removal</li>
              <li>Works on all ink colors</li>
              <li>Minimal scarring</li>
            </ul>
            <p class="treatment-desc">Advanced laser technology for complete and safe tattoo removal.</p>
            <a href="contact-us.php#contact-form" class="treatment-cta">Learn More</a>
          </article>
        </div>
      </div>
    </section>

    <!-- ── WHY CHOOSE US ────────────────────────────────– -->
    <section class="section" style="background: linear-gradient(135deg, rgba(202, 174, 95, 0.08), rgba(250, 210, 184, 0.08));">
      <div class="container">
        <div class="section-header">
          <span class="eyebrow">Our Advantage</span>
          <h2>Why Choose Geneva Wellness</h2>
        </div>
        <div class="advantages-grid">
          <div class="advantage-item" data-aos="fade-up">
            <div class="advantage-icon">🔬</div>
            <h3>Latest Technology</h3>
            <p>FDA-approved equipment updated regularly to offer the most advanced treatments available.</p>
          </div>
          <div class="advantage-item" data-aos="fade-up" data-aos-delay="100">
            <div class="advantage-icon">👨‍⚕️</div>
            <h3>Expert Team</h3>
            <p>Certified professionals with years of experience in aesthetic medicine and wellness.</p>
          </div>
          <div class="advantage-item" data-aos="fade-up" data-aos-delay="200">
            <div class="advantage-icon">🛡️</div>
            <h3>Safety First</h3>
            <p>Strict hygiene protocols and safety standards in every procedure we perform.</p>
          </div>
          <div class="advantage-item" data-aos="fade-up" data-aos-delay="300">
            <div class="advantage-icon">💬</div>
            <h3>Personal Consultation</h3>
            <p>In-depth consultations to understand your goals and create customized treatment plans.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ── CTA SECTION ────────────────────────────────– -->
    <section class="section cta-section" style="background: linear-gradient(135deg, #B00E09 0%, #CAAE5F 100%);">
      <div class="container cta-content">
        <div>
          <h2 style="color: white; margin-bottom: 1rem;">Ready to Begin Your Transformation?</h2>
          <p style="color: rgba(255, 255, 255, 0.95); font-size: 1.1rem; margin-bottom: 0;">Schedule a consultation to discuss which treatment is right for you.</p>
        </div>
        <a href="/contact-us.php#contact-form" class="btn btn-white" data-aos="fade-up">Book Your Consultation</a>
      </div>
    </section>

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
</body>
</html>
