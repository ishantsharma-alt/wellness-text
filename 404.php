<?php 
$page_title = '404 - Page Not Found'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Page not found. The page you're looking for doesn't exist. Return to Geneva Wellness Institute homepage." />
  <meta name="robots" content="noindex, follow" />
  <title>404 - Page Not Found — Geneva Wellness Institute</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet" />

<link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="cursor" id="cursor"></div>
  <div class="cursor-follower" id="cursor-follower"></div>

  <?php include 'header.php'; ?>

  <!-- ── 404 CONTENT ──────────────────────────────────– -->
  <main class="error-page">
    <section class="error-section container">
      <div class="error-content">
        <div class="error-code">404</div>
        <h1>Page Not Found</h1>
        <p class="error-message">
          We're sorry, but the page you're looking for doesn't exist. 
          It may have been moved or deleted.
        </p>
        
        <div class="error-actions">
          <a href="index.php" class="btn btn-primary">Back to Home</a>
          <a href="treatments.php" class="btn btn-secondary">View Treatments</a>
        </div>

        <div class="error-suggestions">
          <h3>Helpful Links</h3>
          <ul>
            <li><a href="index.php">🏠 Home</a></li>
            <li><a href="about-us.php">ℹ️ About Us</a></li>
            <li><a href="treatments.php">💊 Treatments</a></li>
            <li><a href="gallery.php">🖼️ Gallery</a></li>
            <li><a href="testimonials.php">⭐ Testimonials</a></li>
            <li><a href="blog.php">📝 Blog</a></li>
            <li><a href="contact-us.php">📞 Contact</a></li>
          </ul>
        </div>
      </div>

      <div class="error-illustration">
        <svg viewBox="0 0 400 400" xmlns="http://www.w3.org/2000/svg" style="width: 300px; height: 300px;">
          <!-- Decorative circles -->
          <circle cx="200" cy="200" r="180" fill="none" stroke="rgba(202, 174, 95, 0.2)" stroke-width="2" />
          <circle cx="200" cy="200" r="140" fill="none" stroke="rgba(176, 14, 9, 0.15)" stroke-width="2" />
          
          <!-- 404 Text -->
          <text x="200" y="160" font-family="Fraunces, serif" font-size="72" font-weight="600" text-anchor="middle" fill="#B00E09">404</text>
          <text x="200" y="240" font-family="Inter, sans-serif" font-size="24" text-anchor="middle" fill="#6b6360">Not Found</text>
          
          <!-- Decorative line -->
          <line x1="100" y1="270" x2="300" y2="270" stroke="rgba(202, 174, 95, 0.4)" stroke-width="2" />
        </svg>
      </div>
    </section>
  </main>

  <?php include 'footer.php'; ?>

  <!-- AOS JS -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <!-- Dynamic Component Manager -->
  <script src="components.js"></script>
  <!-- Page-specific Scripts -->
  <script src="script.js"></script>
</body>
</html>
