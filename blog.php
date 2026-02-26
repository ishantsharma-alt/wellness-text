<?php
$page_title = 'Geneva Wellness Institute Blog';
$page_subtitle = 'Welcome to our blog, your ultimate resource for beauty, wellness, and self-care insights. Explore expert advice, treatment guides, and the latest trends to help you look and feel your best. Dive into our articles and discover how you can enhance your natural beauty and overall well-being';
$breadcrumb = [
  ['label' => 'Blog', 'url' => null]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Read our latest articles on wellness, beauty treatments, skincare tips, and industry insights. Expert advice from the Geneva Wellness team." />
  <meta name="keywords" content="blog, wellness, skincare, beauty tips, aesthetic treatments, health, articles, expert advice" />
  <meta name="robots" content="index, follow" />
  <meta property="og:title" content="Blog — Geneva Wellness Institute" />
  <meta property="og:description" content="Latest articles on wellness, beauty, and aesthetic treatments." />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://genevawellness.com/blog.php" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Blog — Geneva Wellness Institute" />
  <meta name="twitter:description" content="Expert articles on wellness, skincare, and aesthetic treatments." />
  <link rel="canonical" href="https://genevawellness.com/blog.php" />
  <title>Blog — Geneva Wellness Institute</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
  <link rel="stylesheet" href="style.css">

  <!-- Structured Data for Blog Collection -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "CollectionPage",
    "name": "Wellness Blog",
    "description": "Expert articles on wellness, skincare, beauty treatments, and aesthetic procedures",
    "url": "https://genevawellness.com/blog.php",
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

  <main id="main-content">

    <!-- ── BLOG POSTS ────────────────────────────────– -->
    <section class="section">
      <div class="container blog-layout">
        
        <!-- Main Blog Content -->
        <div class="blog-main">
          
          <!-- Featured Post -->
          <!-- <article class="blog-post featured-post" data-aos="fade-up">
            <div class="post-image">
              <img src="img/blog-featured.jpg" alt="Featured blog post" loading="lazy" width="800" height="450" />
            </div>
            <div class="post-content">
              <div class="post-meta">
                <span class="category">Skincare</span>
                <span class="date">December 15, 2024</span>
              </div>
              <h2><a href="blog/hifu-complete-guide.php">The Complete Guide to HIFU Facial Lifting</a></h2>
              <p class="post-excerpt">Discover how HIFU (High-Intensity Focused Ultrasound) technology is revolutionizing non-invasive facial treatments. Learn about the benefits, what to expect, and real patient results.</p>
              <a href="blog/hifu-complete-guide.php" class="read-more">Read Full Article →</a>
            </div>
          </article> -->

          <!-- Regular Blog Posts Grid -->
          <div class="blog-posts-grid">
            
            <!-- <article class="blog-post" data-aos="fade-up">
              <div class="post-image">
                <img src="img/blog-01.jpg" alt="Blog post about CO2 laser" loading="lazy" width="400" height="250" />
              </div>
              <div class="post-content">
                <div class="post-meta">
                  <span class="category">Treatment</span>
                  <span class="date">December 10, 2024</span>
                </div>
                <h3><a href="blog/co2-laser-benefits.php">Why CO2 Laser Therapy is Perfect for Acne Scars</a></h3>
                <p class="post-excerpt">Explore how advanced CO2 laser technology can dramatically improve the appearance of acne scars and rejuvenate your skin.</p>
                <a href="blog/co2-laser-benefits.php" class="read-more">Read More</a>
              </div>
            </article>

            <article class="blog-post" data-aos="fade-up" data-aos-delay="50">
              <div class="post-image">
                <img src="img/blog-02.jpg" alt="Blog post about skin care routine" loading="lazy" width="400" height="250" />
              </div>
              <div class="post-content">
                <div class="post-meta">
                  <span class="category">Skincare</span>
                  <span class="date">December 8, 2024</span>
                </div>
                <h3><a href="blog/post-treatment-skincare.php">Post-Treatment Skincare: Maximize Your Results</a></h3>
                <p class="post-excerpt">Learn the essential aftercare routine to maintain and enhance your treatment results. Expert tips from our wellness specialists.</p>
                <a href="blog/post-treatment-skincare.php" class="read-more">Read More</a>
              </div>
            </article>

            <article class="blog-post" data-aos="fade-up" data-aos-delay="100">
              <div class="post-image">
                <img src="img/blog-03.jpg" alt="Blog post about hair restoration" loading="lazy" width="400" height="250" />
              </div>
              <div class="post-content">
                <div class="post-meta">
                  <span class="category">Hair Health</span>
                  <span class="date">December 5, 2024</span>
                </div>
                <h3><a href="blog/hair-restoration-myths.php">Hair Restoration: Separating Myth from Reality</a></h3>
                <p class="post-excerpt">Debunking common hair loss myths and explaining how modern hair restoration treatments actually work to regrow hair.</p>
                <a href="blog/hair-restoration-myths.php" class="read-more">Read More</a>
              </div>
            </article>

            <article class="blog-post" data-aos="fade-up" data-aos-delay="150">
              <div class="post-image">
                <img src="img/blog-04.jpg" alt="Blog post about microneedling" loading="lazy" width="400" height="250" />
              </div>
              <div class="post-content">
                <div class="post-meta">
                  <span class="category">Treatment</span>
                  <span class="date">November 28, 2024</span>
                </div>
                <h3><a href="blog/microneedling-guide.php">Microneedling 101: Everything You Need to Know</a></h3>
                <p class="post-excerpt">An in-depth look at microneedling treatment, how it stimulates collagen, and what results you can realistically expect.</p>
                <a href="blog/microneedling-guide.php" class="read-more">Read More</a>
              </div>
            </article>

            <article class="blog-post" data-aos="fade-up" data-aos-delay="200">
              <div class="post-image">
                <img src="img/blog-05.jpg" alt="Blog post about anti-aging" loading="lazy" width="400" height="250" />
              </div>
              <div class="post-content">
                <div class="post-meta">
                  <span class="category">Beauty</span>
                  <span class="date">November 25, 2024</span>
                </div>
                <h3><a href="blog/anti-aging-treatments.php">Best Anti-Aging Treatments for Your 40s and Beyond</a></h3>
                <p class="post-excerpt">Discover the most effective anti-aging treatments available and which ones work best for your age and skin type.</p>
                <a href="blog/anti-aging-treatments.php" class="read-more">Read More</a>
              </div>
            </article>

            <article class="blog-post" data-aos="fade-up" data-aos-delay="250">
              <div class="post-image">
                <img src="img/blog-06.jpg" alt="Blog post about chemical peels" loading="lazy" width="400" height="250" />
              </div>
              <div class="post-content">
                <div class="post-meta">
                  <span class="category">Skincare</span>
                  <span class="date">November 22, 2024</span>
                </div>
                <h3><a href="blog/chemical-peels-explained.php">Chemical Peels Explained: Types, Benefits & Aftercare</a></h3>
                <p class="post-excerpt">Everything you need to know about chemical peels, from the different strength levels to proper aftercare for optimal results.</p>
                <a href="blog/chemical-peels-explained.php" class="read-more">Read More</a>
              </div>
            </article> -->

            <!-- ── NEW POSTS ───────────────────────────────────── -->

            <article class="blog-post " data-aos="fade-up" data-aos-delay="300">
              <div class="post-image">
                <img src="img/blog-1-new.jpg" alt="Woman with healthy, vibrant hair" loading="lazy" width="400" height="250" />
              </div>
              <div class="post-content">
                <div class="post-meta">
                  <span class="category">Hair Health</span>
                  <span class="date">November 18, 2024</span>
                </div>
                <h3><a href="blog/hair-care-tips.php">Hair Care Tips for a Healthier Scalp</a></h3>
                <p class="post-excerpt">Explore essential tips for maintaining a healthy scalp and vibrant hair. Our expert advice covers daily routines, product recommendations, and effective scalp treatments.</p>
                <a href="blog/hair-care-tips.php" class="read-more">Read More</a>
              </div>
            </article>

            <article class="blog-post" data-aos="fade-up" data-aos-delay="350">
              <div class="post-image">
                <img src="img/blog-2-new.jpg" alt="Body contouring treatment in progress" loading="lazy" width="400" height="250" />
              </div>
              <div class="post-content">
                <div class="post-meta">
                  <span class="category">Treatment</span>
                  <span class="date">November 14, 2024</span>
                </div>
                <h3><a href="blog/body-contouring-techniques.php">Top 5 Body Contouring Techniques</a></h3>
                <p class="post-excerpt">Discover the most effective body contouring techniques to achieve your ideal figure — from CoolSculpting and laser treatments to RF and ultrasonic cavitation.</p>
                <a href="blog/body-contouring-techniques.php" class="read-more">Read More</a>
              </div>
            </article>

            <article class="blog-post" data-aos="fade-up" data-aos-delay="400">
              <div class="post-image">
                <img src="img/blog-3-new.jpg" alt="Woman enjoying a relaxing facial treatment" loading="lazy" width="400" height="250" />
              </div>
              <div class="post-content">
                <div class="post-meta">
                  <span class="category">Beauty</span>
                  <span class="date">November 10, 2024</span>
                </div>
                <h3><a href="blog/benefits-of-regular-facials.php">The Benefits of Regular Facials</a></h3>
                <p class="post-excerpt">Unlock the secret to glowing, youthful skin with regular facials. Discover how this essential beauty treatment can transform your complexion and boost your confidence.</p>
                <a href="blog/benefits-of-regular-facials.php" class="read-more">Read More</a>
              </div>
            </article>

          </div>

          <!-- Pagination -->
          <!-- <nav class="pagination" data-aos="fade-up" aria-label="Blog pagination">
            <a href="#" class="prev disabled" aria-disabled="true">← Previous</a>
            <a href="#" class="page active" aria-current="page">1</a>
            <a href="blog-page-2.php" class="page">2</a>
            <a href="blog-page-3.php" class="page">3</a>
            <a href="blog-page-2.php" class="next">Next →</a>
          </nav> -->

        </div>

        <!-- Sidebar -->
        <?php include 'sidebar.php'; ?>

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