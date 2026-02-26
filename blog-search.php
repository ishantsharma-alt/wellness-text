<?php
/**
 * Search Results Page — Geneva Wellness Blog
 * Displays search results in blog layout with sidebar
 */

// Get search query
$search_query = isset($_GET['q']) ? trim(htmlspecialchars($_GET['q'])) : '';

$page_title = $search_query ? "Search Results: " . $search_query : "Blog Search";
$page_subtitle = $search_query ? "Articles matching your search" : "Search our wellness blog";
$breadcrumb = [
  ['label' => 'Blog', 'url' => 'blog.php'],
  ['label' => 'Search', 'url' => null]
];

// Mock search results - In a real implementation, this would query a database
// This simulates searching through blog articles
$all_blogs = [
  ['title' => 'The Complete Guide to HIFU Facial Lifting', 'category' => 'Skincare', 'date' => 'December 15, 2024', 'excerpt' => 'Discover how HIFU (High-Intensity Focused Ultrasound) technology is revolutionizing non-invasive facial treatments. Learn about the benefits, what to expect, and real patient results.', 'url' => 'blog/hifu-complete-guide.php', 'image' => 'img/blog-featured.jpg', 'tags' => ['HIFU', 'Facial', 'Anti-Aging', 'NonInvasive']],
  ['title' => 'Why CO2 Laser Therapy is Perfect for Acne Scars', 'category' => 'Treatment', 'date' => 'December 10, 2024', 'excerpt' => 'Explore how advanced CO2 laser technology can dramatically improve the appearance of acne scars and rejuvenate your skin.', 'url' => 'blog/co2-laser-benefits.php', 'image' => 'img/blog-01.jpg', 'tags' => ['CO2', 'Laser', 'Treatment', 'Acne']],
  ['title' => 'Post-Treatment Skincare: Maximize Your Results', 'category' => 'Skincare', 'date' => 'December 8, 2024', 'excerpt' => 'Learn the essential aftercare routine to maintain and enhance your treatment results. Expert tips from our wellness specialists.', 'url' => 'blog/post-treatment-skincare.php', 'image' => 'img/blog-02.jpg', 'tags' => ['Skincare', 'Aftercare', 'Results', 'Tips']],
  ['title' => 'Hair Restoration: Separating Myth from Reality', 'category' => 'Hair', 'date' => 'November 28, 2024', 'excerpt' => 'Everything you need to know about modern hair restoration techniques. Learn which treatments actually work and what to expect.', 'url' => 'blog/hair-restoration.php', 'image' => 'img/blog-04.jpg', 'tags' => ['Hair', 'Restoration', 'Treatment']],
  ['title' => 'Anti-Aging Treatments: Finding What Works for You', 'category' => 'Treatments', 'date' => 'November 25, 2024', 'excerpt' => 'Discover the most effective anti-aging treatments available and which ones work best for your age and skin type.', 'url' => 'blog/anti-aging-treatments.php', 'image' => 'img/blog-05.jpg', 'tags' => ['Anti-Aging', 'Treatment', 'Skin']],
  ['title' => 'Chemical Peels Explained: Types, Benefits & Aftercare', 'category' => 'Skincare', 'date' => 'November 22, 2024', 'excerpt' => 'Everything you need to know about chemical peels, from the different strength levels to proper aftercare for optimal results.', 'url' => 'blog/chemical-peels.php', 'image' => 'img/blog-06.jpg', 'tags' => ['Chemical', 'Peels', 'Skincare']],
];

// Filter results based on search query
$results = [];
if ($search_query) {
  $search_lower = strtolower($search_query);
  foreach ($all_blogs as $blog) {
    $title_match = strpos(strtolower($blog['title']), $search_lower) !== false;
    $excerpt_match = strpos(strtolower($blog['excerpt']), $search_lower) !== false;
    $category_match = strpos(strtolower($blog['category']), $search_lower) !== false;
    $tags_match = false;
    foreach ($blog['tags'] as $tag) {
      if (strpos(strtolower($tag), $search_lower) !== false) {
        $tags_match = true;
        break;
      }
    }
    
    if ($title_match || $excerpt_match || $category_match || $tags_match) {
      $results[] = $blog;
    }
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="<?php echo $search_query ? 'Search results for ' . htmlspecialchars($search_query) . ' - Articles on wellness, skincare, beauty treatments. Find expert insights from Geneva Wellness Institute.' : 'Search our wellness blog for articles on skincare, beauty treatments, aesthetic procedures, and health tips.'; ?>" />
  <meta name="keywords" content="blog search, wellness articles, skincare tips, beauty treatments, aesthetic procedures, anti-aging, health, search results" />
  <meta name="robots" content="index, follow" />
  <meta property="og:title" content="<?php echo $search_query ? 'Blog Search: ' . htmlspecialchars($search_query) : 'Blog Search'; ?> — Geneva Wellness Institute" />
  <meta property="og:description" content="Discover expert articles on wellness, skincare, and aesthetic treatments. SearchGeneva Wellness blog." />
  <meta property="og:type" content="website" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Blog Search — Geneva Wellness Institute" />
  <meta name="twitter:description" content="Find articles about wellness, skincare, and aesthetic treatments." />
  <link rel="canonical" href="https://genevawellness.com/blog-search.php<?php echo $search_query ? '?q=' . urlencode($search_query) : ''; ?>" />
  <title><?php echo $search_query ? 'Search: ' . htmlspecialchars($search_query) : 'Blog Search'; ?> — Geneva Wellness Institute</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
  <link rel="stylesheet" href="style.css">

  <!-- Structured Data for Search Results -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "SearchResultsPage",
    "name": "<?php echo $search_query ? 'Blog Search: ' . htmlspecialchars($search_query) : 'Blog Search'; ?>",
    "url": "https://genevawellness.com/blog-search.php<?php echo $search_query ? '?q=' . urlencode($search_query) : ''; ?>",
    "publisher": {
      "@type": "Organization",
      "name": "Geneva Wellness Institute",
      "url": "https://genevawellness.com"
    }
  }
  </script>
</head>
<body>

  <div class="cursor" id="cursor"></div>
  <div class="cursor-follower" id="cursor-follower"></div>

  <!-- ── HEADER ────────────────────────────────────────────── -->
  <?php include 'header.php'; ?>

  <!-- ── HERO SECTION ────────────────────────────────– -->
  <?php include 'hero-section.php'; ?>

  <main>

    <!-- ── SEARCH RESULTS ────────────────────────────────– -->
    <section class="section">
      <div class="container blog-layout">
        
        <!-- Main Blog Content -->
        <div class="blog-main">
          
          <!-- Search Info -->
          <div class="search-info" data-aos="fade-up">
            <h2>Search Results</h2>
            <?php if ($search_query): ?>
              <p class="search-query">
                <?php if (count($results) > 0): ?>
                  Found <strong><?php echo count($results); ?></strong> article<?php echo count($results) !== 1 ? 's' : ''; ?> matching <strong>"<?php echo htmlspecialchars($search_query); ?>"</strong>
                <?php else: ?>
                  No articles found matching <strong>"<?php echo htmlspecialchars($search_query); ?>"</strong>
                <?php endif; ?>
              </p>
            <?php endif; ?>
          </div>

          <!-- Search Results Grid -->
          <?php if (count($results) > 0): ?>
            <div class="blog-posts-grid">
              <?php foreach ($results as $index => $blog): ?>
                <article class="blog-post" data-aos="fade-up" data-aos-delay="<?php echo $index * 50; ?>">
                  <div class="post-image">
                    <img src="<?php echo htmlspecialchars($blog['image']); ?>" alt="<?php echo htmlspecialchars($blog['title']); ?>" loading="lazy" width="400" height="250" />
                  </div>
                  <div class="post-content">
                    <div class="post-meta">
                      <span class="category"><?php echo htmlspecialchars($blog['category']); ?></span>
                      <span class="date"><?php echo htmlspecialchars($blog['date']); ?></span>
                    </div>
                    <h3><a href="<?php echo htmlspecialchars($blog['url']); ?>"><?php echo htmlspecialchars($blog['title']); ?></a></h3>
                    <p class="post-excerpt"><?php echo htmlspecialchars($blog['excerpt']); ?></p>
                    <div class="post-tags">
                      <?php foreach ($blog['tags'] as $tag): ?>
                        <a href="blog-tag/<?php echo strtolower(str_replace(' ', '-', $tag)); ?>.php" class="tag-small">#<?php echo htmlspecialchars($tag); ?></a>
                      <?php endforeach; ?>
                    </div>
                    <a href="<?php echo htmlspecialchars($blog['url']); ?>" class="read-more">Read More</a>
                  </div>
                </article>
              <?php endforeach; ?>
            </div>
          <?php else: ?>
            <div class="no-results" data-aos="fade-up">
              <div class="no-results-content">
                <div class="no-results-icon">🔍</div>
                <h3>No Articles Found</h3>
                <p>We couldn't find articles matching your search. Try different keywords or browse our categories below.</p>
                <div class="search-suggestions">
                  <h4>Popular Categories</h4>
                  <ul>
                    <li><a href="blog-category/skincare.php">Skincare Tips</a></li>
                    <li><a href="blog-category/treatments.php">Treatment Guides</a></li>
                    <li><a href="blog-category/beauty.php">Beauty Insights</a></li>
                    <li><a href="blog-category/wellness.php">Wellness Articles</a></li>
                  </ul>
                </div>
              </div>
            </div>
          <?php endif; ?>

        </div>

        <!-- Sidebar -->
        <aside class="blog-sidebar">
          
          <!-- Search -->
          <div class="sidebar-widget search-widget" data-aos="fade-up">
            <h3>Search Articles</h3>
            <form class="search-form" action="blog-search.php" method="get">
              <input type="search" name="q" placeholder="Search blog..." value="<?php echo htmlspecialchars($search_query); ?>" />
              <button type="submit" aria-label="Search">🔍</button>
            </form>
          </div>

          <!-- Categories -->
          <div class="sidebar-widget categories-widget" data-aos="fade-up" data-aos-delay="100">
            <h3>Categories</h3>
            <ul>
              <li><a href="blog-category/skincare.php">Skincare <span class="count">(8)</span></a></li>
              <li><a href="blog-category/treatments.php">Treatments <span class="count">(12)</span></a></li>
              <li><a href="blog-category/beauty.php">Beauty Tips <span class="count">(6)</span></a></li>
              <li><a href="blog-category/hair-health.php">Hair Health <span class="count">(5)</span></a></li>
              <li><a href="blog-category/wellness.php">Wellness <span class="count">(9)</span></a></li>
            </ul>
          </div>

          <!-- Recent Posts -->
          <div class="sidebar-widget recent-posts-widget" data-aos="fade-up" data-aos-delay="200">
            <h3>Recent Posts</h3>
            <ul>
              <li><a href="/blog/hifu-complete-guide.php">The Complete Guide to HIFU Facial Lifting</a></li>
              <li><a href="/blog/co2-laser-benefits.php">Why CO2 Laser Therapy is Perfect for Acne Scars</a></li>
              <li><a href="/blog/post-treatment-skincare.php">Post-Treatment Skincare: Maximize Your Results</a></li>
              <li><a href="/blog/hair-restoration-myths.php">Hair Restoration: Separating Myth from Reality</a></li>
            </ul>
          </div>

          <!-- Tags -->
          <div class="sidebar-widget tags-widget" data-aos="fade-up" data-aos-delay="300">
            <h3>Popular Tags</h3>
            <div class="tags-cloud">
              <a href="/blog-tag/skin.php" class="tag">Skin</a>
              <a href="/blog-tag/treatment.php" class="tag">Treatment</a>
              <a href="/blog-tag/anti-aging.php" class="tag">Anti-Aging</a>
              <a href="/blog-tag/laser.php" class="tag">Laser</a>
              <a href="/blog-tag/natural.php" class="tag">Natural</a>
              <a href="/blog-tag/results.php" class="tag">Results</a>
              <a href="/blog-tag/wellness.php" class="tag">Wellness</a>
            </div>
          </div>

          <!-- Newsletter -->
          <div class="sidebar-widget newsletter-widget" data-aos="fade-up" data-aos-delay="400" style="background: linear-gradient(135deg, rgba(179, 14, 9, 0.1), rgba(202, 174, 95, 0.1)); padding: 1.5rem; border-radius: 12px;">
            <h3>Subscribe</h3>
            <p style="font-size: 0.95rem; margin-bottom: 1rem;">Get wellness tips and treatment insights delivered to your inbox.</p>
            <form class="newsletter-form" action="/newsletter-subscribe.php" method="post">
              <input type="email" name="email" placeholder="Your email..." required />
              <button type="submit" class="btn btn-small">Subscribe</button>
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
  <script src="components.js"></script>
  <!-- Page-specific Scripts -->
  <script src="script.js"></script>
</body>
</html>
