<?php
/**
 * Dynamic Hero Section Template
 * Displays on all inner pages with automatic title changes
 * Usage: <?php include 'hero-section.php'; ?>
 * 
 * Set $page_title before including this file: $page_title = "About Us";
 */

// Default page title if not set
$page_title = $page_title ?? 'Welcome';
$page_subtitle = $page_subtitle ?? 'Discover our expertise and commitment';
$breadcrumb = $breadcrumb ?? [];
?>

<section class="hero-section inner-hero" style="background: linear-gradient(135deg, #B00E09 0%, #d63c36 100%);">
  <div class="hero-overlay"></div>
  <div class="container">
    <!-- Breadcrumb Navigation -->
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <ol>
        <li><a href="index.php">Home</a></li>
        <?php if (!empty($breadcrumb)): ?>
          <?php foreach ($breadcrumb as $item): ?>
            <li>
              <?php if (isset($item['url'])): ?>
                <a href="<?php echo htmlspecialchars($item['url']); ?>">
                  <?php echo htmlspecialchars($item['label']); ?>
                </a>
              <?php else: ?>
                <span><?php echo htmlspecialchars($item['label']); ?></span>
              <?php endif; ?>
            </li>
          <?php endforeach; ?>
        <?php else: ?>
          <li><span><?php echo htmlspecialchars($page_title); ?></span></li>
        <?php endif; ?>
      </ol>
    </nav>

    <!-- Hero Content -->
    <div class="hero-content">
      <h1 class="hero-title"><?php echo htmlspecialchars($page_title); ?></h1>
      <p class="hero-subtitle"><?php echo htmlspecialchars($page_subtitle); ?></p>
    </div>
  </div>
</section>

<style>
  .hero-section.inner-hero {
    position: relative;
    min-height: 300px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    overflow: hidden;
    margin-bottom: 3rem;
  }

  .hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.3);
    z-index: 1;
  }

  .hero-section.inner-hero .container {
    position: relative;
    z-index: 2;
    max-width: 1000px;
    text-align: center;
  }

  .hero-section.inner-hero .breadcrumb {
    margin-bottom: 2rem;
  }

  .hero-section.inner-hero .breadcrumb ol {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 0.5rem;
    font-size: 0.95rem;
  }

  .hero-section.inner-hero .breadcrumb li {
    display: inline-flex;
    align-items: center;
  }

  .hero-section.inner-hero .breadcrumb li:not(:last-child)::after {
    content: '/';
    margin-left: 0.5rem;
    color: rgba(255, 255, 255, 0.7);
  }

  .hero-section.inner-hero .breadcrumb a {
    color: rgba(255, 255, 255, 0.9);
    text-decoration: none;
    transition: color 0.3s ease;
  }

  .hero-section.inner-hero .breadcrumb a:hover {
    color: #FAD2B8;
  }

  .hero-section.inner-hero .breadcrumb span {
    color: rgba(255, 255, 255, 0.9);
  }

  .hero-title {
    font-size: 3rem;
    font-weight: 700;
    margin-bottom: 1rem;
    text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
    animation: fadeInUp 0.8s ease;
  }

  .hero-subtitle {
    font-size: 1.3rem;
    color: rgba(255, 255, 255, 0.95);
    margin: 0;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
    font-weight: 300;
    animation: fadeInUp 0.8s ease 0.2s both;
  }

  /* Responsive */
  @media (max-width: 768px) {
    .hero-section.inner-hero {
      min-height: 250px;
    }

    .hero-title {
      font-size: 2rem;
    }

    .hero-subtitle {
      font-size: 1rem;
    }

    .hero-section.inner-hero .breadcrumb ol {
      font-size: 0.85rem;
    }
  }

  @media (max-width: 480px) {
    .hero-section.inner-hero {
      min-height: 200px;
      margin-bottom: 2rem;
    }

    .hero-title {
      font-size: 1.5rem;
    }

    .hero-subtitle {
      font-size: 0.9rem;
    }

    .hero-section.inner-hero .breadcrumb ol {
      font-size: 0.75rem;
      gap: 0.25rem;
    }

    .hero-section.inner-hero .breadcrumb li:not(:last-child)::after {
      margin-left: 0.25rem;
    }
  }
</style>
