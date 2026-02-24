<?php
/**
 * Sidebar Template
 * Included on blog pages and inner pages
 * Usage: <?php include 'sidebar.php'; ?>
 */
?>
<aside class="blog-sidebar" id="page-sidebar">
  <!-- Search Widget -->
  <div class="sidebar-widget search-widget">
    <h4>Search Articles</h4>
    <form class="search-form" role="search">
      <input type="search" placeholder="Search blog..." aria-label="Search blog posts" />
      <button type="submit" aria-label="Search">🔍</button>
    </form>
  </div>

  <!-- Categories Widget -->
  <div class="sidebar-widget categories-widget">
    <h4>Categories</h4>
    <ul class="categories-list">
      <li><a href="blog.php">All Posts</a></li>
      <li><a href="blog.php?cat=skincare">Skincare</a></li>
      <li><a href="blog.php?cat=wellness">Wellness</a></li>
      <li><a href="blog.php?cat=beauty-tips">Beauty Tips</a></li>
      <li><a href="blog.php?cat=featured">Featured</a></li>
    </ul>
  </div>

  <!-- Recent Posts Widget -->
  <div class="sidebar-widget recent-posts-widget">
    <h4>Recent Posts</h4>
    <ul class="recent-posts-list">
      <li>
        <a href="blog/understanding-hyaluronic-acid.php">
          <strong>Understanding Hyaluronic Acid</strong>
          <small>Dec 20, 2024</small>
        </a>
      </li>
      <li>
        <a href="blog/nighttime-skincare-tips.php">
          <strong>5 Nighttime Skincare Tips</strong>
          <small>Dec 18, 2024</small>
        </a>
      </li>
      <li>
        <a href="blog/hifu-treatment-science.php">
          <strong>Science Behind HIFU Treatment</strong>
          <small>Dec 15, 2024</small>
        </a>
      </li>
    </ul>
  </div>

  <!-- Tags Cloud Widget -->
  <div class="sidebar-widget tags-widget">
    <h4>Popular Tags</h4>
    <div class="tags-cloud">
      <a href="blog.php?tag=skincare">#skincare</a>
      <a href="blog.php?tag=wellness">#wellness</a>
      <a href="blog.php?tag=anti-aging">#anti-aging</a>
      <a href="blog.php?tag=beauty">#beauty</a>
      <a href="blog.php?tag=treatments">#treatments</a>
      <a href="blog.php?tag=science">#science</a>
      <a href="blog.php?tag=tips">#tips</a>
      <a href="blog.php?tag=results">#results</a>
    </div>
  </div>

  <!-- Newsletter Widget -->
  <div class="sidebar-widget newsletter-widget">
    <h4>Newsletter</h4>
    <p>Get wellness tips and treatment insights delivered to your inbox.</p>
    <form class="newsletter-form">
      <input type="email" placeholder="Your email" required aria-label="Email address" />
      <button type="submit" class="btn btn-primary btn-sm">Subscribe</button>
    </form>
  </div>

  <!-- CTA Widget -->
  <div class="sidebar-widget cta-widget">
    <div class="cta-box">
      <h4>Ready to Transform?</h4>
      <p>Book your personalized consultation today.</p>
      <a href="contact-us.php#contact-form" class="btn btn-primary btn-sm btn-block">Book Now</a>
    </div>
  </div>
</aside>
