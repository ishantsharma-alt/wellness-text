<?php
$page_title = 'Sitemap';
$page_subtitle = 'Find everything on our website';
$breadcrumb = [
  ['label' => 'Home', 'url' => 'index.php'],
  ['label' => 'Sitemap', 'url' => null]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="img/geneva-favicon.svg" type="image/svg+xml">
  <meta name="description" content="Sitemap for Geneva Wellness Institute. Find all pages and sections of our website." />
  <meta name="robots" content="index, follow" />
  <link rel="canonical" href="https://genevawellness.com/sitemap" />
  <title>Sitemap — Geneva Wellness Institute</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
  <link rel="stylesheet" href="style.css" />
</head>
<body>

  <div class="cursor" id="cursor"></div>
  <div class="cursor-follower" id="cursor-follower"></div>

  <!-- ── HEADER ────────────────────────────────────────────── -->
  <?php include 'header.php'; ?>

  <!-- ── HERO SECTION ────────────────────────────────– -->
  <?php include 'hero-section.php'; ?>

  <main>
    <section class="section">
      <div class="container page-content">
        <div class="page-section">
          <h1>Sitemap</h1>
          <p>A complete overview of all pages available on the Geneva Wellness Institute website.</p>

          <h2>Main Pages</h2>
          <ul>
            <li><a href="index.php" title="Back to Home">Home</a></li>
            <li><a href="about.php" title="Learn About Our Institute">About Us</a></li>
            <li><a href="gallery.php" title="View Our Gallery">Gallery</a></li>
            <li><a href="testimonials.php" title="Read Client Testimonials">Testimonials</a></li>
            <li><a href="blog.php" title="Read Our Blog">Blog</a></li>
            <li><a href="contact-us.php" title="Contact Us">Contact Us</a></li>
          </ul>

          <h2>Treatments</h2>
          <ul>
            <li><a href="treatments.php" title="View All Treatments">All Treatments</a></li>
            <li><a href="treatments.php#hydra-7d" title="HYDRA 7D Facials">HYDRA 7D</a></li>
            <li><a href="treatments.php#co2-laser" title="CO2 Laser Treatment">CO2 Laser</a></li>
            <li><a href="treatments.php#carbon-laser" title="Carbon Laser Peel Treatment">Carbon Laser</a></li>
            <li><a href="treatments.php#pico-laser" title="Pico Laser Treatment">Pico Laser</a></li>
            <li><a href="treatments.php#exilis-face-neck" title="Exilis Face & Neck Treatment">Exilis Face &amp; Neck</a></li>
            <li><a href="treatments.php#cryotherapy" title="Cryotherapy Treatment">Cryotherapy</a></li>
            <li><a href="treatments.php#hifu" title="HIFU Non-Surgical Facelift">HIFU</a></li>
          </ul>

          <h2>Legal &amp; Policies</h2>
          <ul>
            <li><a href="privacy-policy.php" title="Read our Privacy Policy">Privacy Policy</a></li>
            <li><a href="terms.php" title="Read our Terms of Service">Terms of Service</a></li>
            <li><a href="cookie-policy.php" title="Read our Cookie Policy">Cookie Policy</a></li>
            <li><a href="sitemap.php" title="View our Sitemap">Sitemap</a></li>
          </ul>

          <h2>Contact &amp; Location</h2>
          <ul>
            <li><a href="contact-us.php" title="Contact Us">Contact Us</a></li>
            <li>
              <strong>Geneva Wellness Institute</strong><br>
              Email: <a href="mailto:hello@genevawellness.com">hello@genevawellness.com</a><br>
              Phone: <a href="tel:+1234567890">(123) 456-7890</a><br>
              Address: 123 Wellness Ave, Geneva District
            </li>
          </ul>
        </div>
      </div>
    </section>
  </main>

  <!-- ── FOOTER ───────────────────────────────────────── -->
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