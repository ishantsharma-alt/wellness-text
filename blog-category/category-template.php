<?php
/**
 * Blog Category Archive Template
 * Usage: Set $category_title and $category_slug before including
 */

// Set default category values if not provided
$category_title = $category_title ?? 'Blog Category';
$category_slug = $category_slug ?? 'category';
$page_title = $category_title . ' Articles';
$page_subtitle = 'Curated posts on ' . strtolower($category_title);
$breadcrumb = [
  ['label' => 'Blog', 'url' => '../blog.php'],
  ['label' => $category_title, 'url' => null]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Browse our <?php echo htmlspecialchars($category_title); ?> articles and insights. Expert advice from Geneva Wellness Institute." />
  <meta name="keywords" content="blog, wellness, skincare, <?php echo htmlspecialchars(strtolower($category_title)); ?>, beauty tips, articles" />
  <meta name="robots" content="index, follow" />
  <meta property="og:title" content="<?php echo htmlspecialchars($category_title); ?> — Geneva Wellness Institute" />
  <meta property="og:description" content="Explore our collection of articles on <?php echo htmlspecialchars(strtolower($category_title)); ?>." />
  <meta property="og:type" content="website" />
  <link rel="canonical" href="https://genevawellness.com/blog-category/<?php echo htmlspecialchars($category_slug); ?>.php" />
  <title><?php echo htmlspecialchars($category_title); ?> Articles — Geneva Wellness Institute</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
  <link rel="stylesheet" href="../style.css">
</head>
<body>

  <div class="cursor" id="cursor"></div>
  <div class="cursor-follower" id="cursor-follower"></div>

  <!-- ── HEADER ────────────────────────────────────────────── -->
  <?php include '../header.php'; ?>

  <!-- ── HERO SECTION ────────────────────────────────– -->
  <?php include '../hero-section.php'; ?>

  <main>

    <!-- ── BLOG POSTS ────────────────────────────────– -->
    <section class="section">
      <div class="container blog-layout">
        
        <!-- Main Blog Content -->
        <div class="blog-main">
          
          <!-- Category Description -->
          <div class="category-description" data-aos="fade-up" style="margin-bottom: 3rem; padding: 2rem; background: rgba(202, 174, 95, 0.1); border-radius: 12px; border-left: 4px solid var(--accent-gold);">
            <p style="margin: 0; font-size: 1.05rem; color: var(--black); line-height: 1.6;">
              Welcome to our <?php echo htmlspecialchars($category_title); ?> collection. Here you'll find expert articles, tips, and insights about <?php echo htmlspecialchars(strtolower($category_title)); ?> treatments and wellness practices from our experienced team.
            </p>
          </div>

          <!-- Blog Posts Grid -->
          <div class="blog-posts-grid">
            
            <article class="blog-post" data-aos="fade-up">
              <div class="post-image">
                <img src="../img/blog-01.jpg" alt="Blog post" loading="lazy" width="400" height="250" />
              </div>
              <div class="post-content">
                <div class="post-meta">
                  <span class="category"><?php echo htmlspecialchars($category_title); ?></span>
                  <span class="date">December 15, 2024</span>
                </div>
                <h3><a href="../blog/single.php">Article Title Goes Here</a></h3>
                <p class="post-excerpt">Brief article description and excerpt that entices readers to click and learn more about this topic.</p>
                <a href="../blog/single.php" class="read-more">Read Full Article →</a>
              </div>
            </article>

            <article class="blog-post" data-aos="fade-up" data-aos-delay="50">
              <div class="post-image">
                <img src="../img/blog-02.jpg" alt="Blog post" loading="lazy" width="400" height="250" />
              </div>
              <div class="post-content">
                <div class="post-meta">
                  <span class="category"><?php echo htmlspecialchars($category_title); ?></span>
                  <span class="date">December 10, 2024</span>
                </div>
                <h3><a href="../blog/single.php">Another Article in This Category</a></h3>
                <p class="post-excerpt">Discover important information and expert advice on this topic. Learn more by reading the full article.</p>
                <a href="../blog/single.php" class="read-more">Read More</a>
              </div>
            </article>

            <article class="blog-post" data-aos="fade-up" data-aos-delay="100">
              <div class="post-image">
                <img src="../img/blog-03.jpg" alt="Blog post" loading="lazy" width="400" height="250" />
              </div>
              <div class="post-content">
                <div class="post-meta">
                  <span class="category"><?php echo htmlspecialchars($category_title); ?></span>
                  <span class="date">December 5, 2024</span>
                </div>
                <h3><a href="../blog/single.php">More Articles from This Category</a></h3>
                <p class="post-excerpt">Explore more related articles on this topic. Our experts share valuable insights and practical advice.</p>
                <a href="../blog/single.php" class="read-more">Read More</a>
              </div>
            </article>

          </div>

          <!-- Pagination -->
          <nav class="pagination" data-aos="fade-up" aria-label="Page navigation">
            <a href="#" class="page-link" aria-disabled="true">← Previous</a>
            <a href="#" class="page-link active" aria-current="page">1</a>
            <a href="#" class="page-link">2</a>
            <a href="#" class="page-link">3</a>
            <a href="#" class="page-link">Next →</a>
          </nav>

        </div>

        <!-- Sidebar -->
        <aside class="blog-sidebar">

          <!-- Search -->
          <div class="sidebar-widget search-widget" data-aos="fade-up">
            <h3>Search Articles</h3>
            <form class="search-form" method="get" action="../blog-search.php">
              <input type="search" name="q" placeholder="Search blog..." />
              <button type="submit" aria-label="Search">🔍</button>
            </form>
          </div>

          <!-- Categories -->
          <div class="sidebar-widget categories-widget" data-aos="fade-up" data-aos-delay="100">
            <h3>Categories</h3>
            <ul>
              <li><a href="../blog.php">All Posts</a></li>
              <li><a href="skincare.php">Skincare <span class="count">(8)</span></a></li>
              <li><a href="treatments.php">Treatments <span class="count">(12)</span></a></li>
              <li><a href="beauty.php">Beauty Tips <span class="count">(6)</span></a></li>
              <li><a href="hair-health.php">Hair Health <span class="count">(5)</span></a></li>
              <li><a href="wellness.php">Wellness <span class="count">(9)</span></a></li>
            </ul>
          </div>

          <!-- Recent Posts -->
          <div class="sidebar-widget recent-posts-widget" data-aos="fade-up" data-aos-delay="200">
            <h3>Recent Posts</h3>
            <ul>
              <li><a href="../blog/hifu-complete-guide.php">The Complete Guide to HIFU Facial Lifting</a></li>
              <li><a href="../blog/co2-laser-benefits.php">Why CO2 Laser Therapy is Perfect for Acne Scars</a></li>
              <li><a href="../blog/post-treatment-skincare.php">Post-Treatment Skincare: Maximize Your Results</a></li>
            </ul>
          </div>

          <!-- Newsletter -->
          <div class="sidebar-widget newsletter-widget" data-aos="fade-up" data-aos-delay="300" style="background: linear-gradient(135deg, rgba(179, 14, 9, 0.1), rgba(202, 174, 95, 0.1)); padding: 1.5rem; border-radius: 12px;">
            <h3>Subscribe</h3>
            <p style="font-size: 0.95rem; margin-bottom: 1rem;">Get wellness tips and treatment insights delivered to your inbox.</p>
            <form class="newsletter-form" method="post" action="../newsletter-subscribe.php">
              <input type="email" name="email" placeholder="Your email..." required />
              <button type="submit" class="btn btn-primary btn-sm">Subscribe</button>
            </form>
          </div>

        </aside>

      </div>
    </section>

  </main>

  <!-- ── DYNAMIC FOOTER ───────────────────────────────────────── -->
  <div id="dynamic-footer"></div>

  <button class="back-to-top" id="back-to-top" aria-label="Back to top">↑</button>

  <!-- AOS JS -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <!-- Dynamic Component Manager -->
  <script src="../components.js"></script>
  <!-- Page-specific Scripts -->
  <script src="../script.js"></script>
</body>
</html>
