<?php
/**
 * Header Template
 * Included on all pages for consistent navigation
 * Usage: <?php include 'header.php'; ?>
 */
?>
<header class="site-header" id="site-header">
  <nav class="nav container" aria-label="Primary navigation">
    <a href="index.php" class="nav-logo">
      <svg class="logo-mark" viewBox="0 0 40 40" fill="none">
        <circle cx="20" cy="20" r="18" stroke="currentColor" stroke-width="1.5" />
        <text x="20" y="24" font-family="Fraunces" font-size="18" font-weight="500" text-anchor="middle" fill="currentColor">GW</text>
      </svg>
      <span>Geneva</span>
    </a>

    <button class="nav-toggle" id="nav-toggle" aria-label="Toggle navigation" aria-expanded="false">
      <span></span>
      <span></span>
      <span></span>
    </button>

    <div class="nav-menu" id="nav-menu">
      <ul class="nav-list">
        <li><a href="index.php" class="nav-link">Home</a></li>
        <li><a href="about-us.php" class="nav-link">About Us</a></li>
        <li><a href="treatments.php" class="nav-link">Treatments</a></li>
        <li><a href="gallery.php" class="nav-link">Gallery</a></li>
        <li><a href="testimonials.php" class="nav-link">Testimonials</a></li>
        <li><a href="blog.php" class="nav-link">Blog</a></li>
        <li><a href="contact-us.php" class="nav-link">Contact</a></li>
      </ul>
    </div>

    <a href="contact-us.php#contact-form" class="nav-cta">Book Consultation</a>
  </nav>
</header>
