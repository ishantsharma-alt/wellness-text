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

<section class="hero-section inner-hero" style="background: linear-gradient(90deg,rgba(176, 14, 9, 1) 0%, rgba(130, 42, 42, 1) 100%);">
  <div class="hero-overlay"></div>
  <div class="container">
  

    <!-- Hero Content -->
    <div class="hero-content">
      <h1 class="hero-title"><?php echo htmlspecialchars($page_title); ?></h1>
      <p class="hero-subtitle"><?php echo htmlspecialchars($page_subtitle); ?></p>
    </div>


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
        padding-top: 147px;
    padding-bottom: 15px;
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
    font-family: "Lora", serif;
    font-size: clamp(2.6rem, 5.5vw, 4.5rem);
    font-weight: 400;
    line-height: 1.1;
    margin-bottom: 1.5rem;
    animation: fadeInUp 0.9s ease 0.1s forwards;
    color: white;
    margin-top: 0;
  }

  .hero-subtitle {
    font-size: 1.08rem;
    color: rgba(255,255,255,0.72);
    line-height: 1.75;
    max-width: 600px;
    margin-bottom: 2.5rem;
    animation: fadeInUp 0.9s ease 0.2s forwards;
    margin-left: auto;
    margin-right: auto;
    font-weight: 300;
  }

  /* Responsive */
  @media (max-width: 768px) {
    .hero-section.inner-hero {
      min-height: 250px;
    }

    .hero-title {
      font-size: clamp(1.8rem, 5vw, 3rem);
    }

    .hero-subtitle {
      font-size: 0.95rem;
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
      font-size: clamp(1.3rem, 4vw, 2rem);
      margin-bottom: 1rem;
    }

    .hero-subtitle {
      font-size: 0.9rem;
      margin-bottom: 1.5rem;
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
