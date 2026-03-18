<?php
/**
 * Sidebar Template
 * Included on blog pages and inner pages
 */

$sidebar_depth = (strpos($_SERVER['PHP_SELF'], '/blog/') !== false || strpos($_SERVER['PHP_SELF'], '/blog-category/') !== false) ? '../' : '';
?>
<aside class="blog-sidebar" id="page-sidebar">

  <!-- Search Widget -->
  <div class="sidebar-widget search-widget" data-aos="fade-up">
    <h4>Search Articles</h4>
    <form class="search-form" role="search" action="<?= $sidebar_depth ?>blog-search.php" method="get">
      <input type="search" name="q" placeholder="Search blog..." aria-label="Search blog posts" />
      <button type="submit" aria-label="Search"><i class="fas fa-search"></i></button>
    </form>
  </div>

  <!-- Categories Widget -->
  <div class="sidebar-widget categories-widget" data-aos="fade-up" data-aos-delay="50">
    <h4>Categories</h4>
    <ul class="categories-list">
      <li><a href="<?= $sidebar_depth ?>blog.php">All Posts</a></li>
      <li><a href="<?= $sidebar_depth ?>blog-category/skincare.php">Skincare <span class="count">(8)</span></a></li>
      <li><a href="<?= $sidebar_depth ?>blog-category/treatments.php">Treatments <span class="count">(12)</span></a></li>
      <li><a href="<?= $sidebar_depth ?>blog-category/beauty.php">Beauty Tips <span class="count">(6)</span></a></li>
      <li><a href="<?= $sidebar_depth ?>blog-category/hair-health.php">Hair Health <span class="count">(5)</span></a></li>
      <li><a href="<?= $sidebar_depth ?>blog-category/wellness.php">Wellness <span class="count">(9)</span></a></li>
    </ul>
  </div>

  <!-- Recent Posts Widget -->
  <div class="sidebar-widget recent-posts-widget" data-aos="fade-up" data-aos-delay="100">
    <h4>Recent Posts</h4>
    <ul class="recent-posts-list">
      <li>
        <a href="<?= $sidebar_depth ?>blog/hair-care-tips.php" title="Read: Hair Care Tips for a Healthier Scalp">
          <strong>Hair Care Tips for a Healthier Scalp</strong>
          <small>Nov 18, 2024</small>
        </a>
      </li>
      <li>
        <a href="<?= $sidebar_depth ?>blog/body-contouring-techniques.php" title="Read: Top 5 Body Contouring Techniques">
          <strong>Top 5 Body Contouring Techniques</strong>
          <small>Nov 14, 2024</small>
        </a>
      </li>
      <li>
        <a href="<?= $sidebar_depth ?>blog/benefits-of-regular-facials.php" title="Read: The Benefits of Regular Facials">
          <strong>The Benefits of Regular Facials</strong>
          <small>Nov 10, 2024</small>
        </a>
      </li>
    </ul>
  </div>

  <!-- Tags Cloud Widget — pointing to existing category pages -->
  <div class="sidebar-widget tags-widget" data-aos="fade-up" data-aos-delay="150">
    <h4>Popular Tags</h4>
    <div class="tags-cloud">
      <a href="<?= $sidebar_depth ?>blog-category/skincare.php" class="tag">#Skin</a>
      <a href="<?= $sidebar_depth ?>blog-category/treatments.php" class="tag">#Treatment</a>
      <a href="<?= $sidebar_depth ?>blog-category/treatments.php" class="tag">#Anti-Aging</a>
      <a href="<?= $sidebar_depth ?>blog-category/treatments.php" class="tag">#Laser</a>
      <a href="<?= $sidebar_depth ?>blog-category/wellness.php" class="tag">#Wellness</a>
      <a href="<?= $sidebar_depth ?>blog-category/beauty.php" class="tag">#Beauty</a>
      <a href="<?= $sidebar_depth ?>blog-category/hair-health.php" class="tag">#HairHealth</a>
      <a href="<?= $sidebar_depth ?>blog-category/skincare.php" class="tag">#Results</a>
    </div>
  </div>

  <!-- Newsletter Widget -->
  <div class="sidebar-widget newsletter-widget" data-aos="fade-up" data-aos-delay="200">
    <h4>Newsletter</h4>
    <p>Get wellness tips and treatment insights delivered to your inbox.</p>
    <form class="newsletter-form" action="<?= $sidebar_depth ?>newsletter-subscribe.php" method="post">
      <input type="email" name="email" placeholder="Your email" required aria-label="Email address" />
      <button type="submit" class="btn btn-primary btn-sm">Subscribe</button>
    </form>
  </div>

  <!-- CTA Widget -->
  <div class="sidebar-widget cta-widget" data-aos="fade-up" data-aos-delay="250">
    <div class="cta-box">
      <h4>Ready to Transform?</h4>
      <p>Book your personalized consultation today.</p>
      <a href="<?= $sidebar_depth ?>contact-us.php#contact-form" class="btn btn-primary btn-sm btn-block" title="Book Your Consultation">Book Now</a>
    </div>
  </div>

</aside>