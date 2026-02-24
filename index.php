<?php 
$page_title = 'Home'; 
$page_subtitle = 'Premium Wellness & Aesthetic Treatments'; 
$breadcrumb = []; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Geneva Wellness Institute — transformative wellness and aesthetic treatments including HIFU, CO2 Laser, Carbon Laser, Hair Restoration and more in Alabang, Muntinlupa City." />
  <meta name="keywords" content="Geneva Wellness Institute, HIFU, CO2 Laser, Carbon Laser, Pico Laser, Exilis, hair restoration, body contouring, facial treatment, wellness, Alabang, Muntinlupa" />
  <meta name="robots" content="index, follow" />
  <meta property="og:title" content="Geneva Wellness Institute — Transformative Wellness & Aesthetic Treatments" />
  <meta property="og:description" content="Discover exceptional beauty and wellness treatments in Alabang, Muntinlupa City." />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://genevawellness.com" />
  <meta name="twitter:card" content="summary_large_image" />
  <link rel="canonical" href="https://genevawellness.com" />
  <title>Geneva Wellness Institute — Transformative Wellness & Aesthetic Treatments</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,300;0,9..144,400;0,9..144,500;0,9..144,600;0,9..144,700;1,9..144,300;1,9..144,400&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet" />

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <!-- AOS CSS -->
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />

  <link rel="stylesheet" href="style.css" />

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "MedicalSpa",
    "name": "Geneva Wellness Institute",
    "description": "Transformative wellness and aesthetic treatments in Alabang, Muntinlupa City.",
    "url": "https://genevawellness.com",
    "address": {"@type":"PostalAddress","streetAddress":"GF Vivere Hotel, 5102 Bridgeway Ave., Filinvest Corporate City","addressLocality":"Alabang, Muntinlupa City","addressCountry":"PH"},
    "openingHours": "Mo-Su 11:00-19:00",
    "aggregateRating": {"@type":"AggregateRating","ratingValue":"5","reviewCount":"500"}
  }
  </script>
</head>
<body>

  <!-- ── CURSOR ────────────────────────────────────────── -->
  <div class="cursor" id="cursor"></div>
  <div class="cursor-follower" id="cursor-follower"></div>

  <?php include 'header.php'; ?>
  <?php include 'hero-section.php'; ?>

  <!-- ── LOADER ────────────────────────────────────────── -->
  <div class="page-loader" id="page-loader">
    <div class="loader-inner">
      <div class="loader-logo">✦</div>
      <div class="loader-bar"><div class="loader-progress"></div></div>
    </div>
  </div>

  <main>

    <!-- ── TRUST BAR ─────────────────────────────────── -->
    <section class="trust-bar" aria-label="Trust indicators">
      <div class="container trust-inner">
        <div class="trust-item" data-aos="fade-up" data-aos-delay="0">
          <span class="trust-icon">🏆</span><span>Award-Winning Clinic</span>
        </div>
        <div class="trust-item" data-aos="fade-up" data-aos-delay="100">
          <span class="trust-icon">🔬</span><span>Innovative Technologies</span>
        </div>
        <div class="trust-item" data-aos="fade-up" data-aos-delay="200">
          <span class="trust-icon">👩‍⚕️</span><span>Certified Professionals</span>
        </div>
        <div class="trust-item" data-aos="fade-up" data-aos-delay="300">
          <span class="trust-icon">💆</span><span>Personalized Care</span>
        </div>
      </div>
    </section>



    <!-- ── FEATURED TREATMENTS ────────────────────────── -->
    <section class="featured-treatments section" id="featured-treatments">
      <div class="container">
        <div class="section-header" data-aos="fade-up">
          <p class="eyebrow">Signature Treatments</p>
          <h2>Our <em>advanced procedures</em></h2>
          <p class="section-desc">Clinically proven, non-invasive treatments tailored for your skin goals.</p>
        </div>

        <!-- HIFU -->
        <article class="treatment-feature" id="hifu" data-aos="fade-right">
          <div class="treatment-feature-visual">
            <div class="treatment-img-wrap">
              <img src="img/facial-treatment-clinic.jpg" alt="HIFU Treatment" loading="lazy" />
              <span class="treatment-tech-badge">Non-Invasive</span>
            </div>
          </div>
          <div class="treatment-feature-content">
            <p class="eyebrow">Face &amp; Neck Lifting</p>
            <h3>HIFU — Achieve a youthful, firmer appearance <em>without surgery</em></h3>
            <p>Experience the power of HIFU (High-Intensity Focused Ultrasound), a non-invasive treatment designed to lift and tighten your skin naturally. HIFU targets deep layers of the skin, stimulating collagen production to reduce wrinkles and enhance your overall facial contours.</p>
            <p>Ideal for treating the forehead, cheeks, jawline, and neck — with no downtime required.</p>
            <div class="treatment-tags">
              <span class="tag">No Downtime</span>
              <span class="tag">Long-Lasting</span>
              <span class="tag">Collagen Boost</span>
            </div>
            <a href="#book" class="btn btn-primary">Book HIFU Treatment</a>
          </div>
        </article>

        <!-- CO2 Laser -->
        <article class="treatment-feature treatment-feature-reverse" id="co2-laser" data-aos="fade-left">
          <div class="treatment-feature-visual">
            <div class="treatment-img-wrap">
              <img src="img/co2-laser-treatement.jpg" alt="CO2 Laser" loading="lazy" />
              <span class="treatment-tech-badge">Advanced Laser</span>
            </div>
          </div>
          <div class="treatment-feature-content">
            <p class="eyebrow">Skin Renewal</p>
            <h3>CO2 Laser — Rejuvenate your skin with <em>advanced laser therapy</em></h3>
            <p>Rejuvenate your skin with our CO2 Laser treatment, designed to improve acne scars, fine lines, and pigmentation. This powerful laser therapy targets specific skin concerns, promoting smoother texture and a more even tone.</p>
            <p>Stimulates collagen production and reduces visible signs of aging for firmer, more youthful skin.</p>
            <div class="treatment-tags">
              <span class="tag">Acne Scars</span>
              <span class="tag">Fine Lines</span>
              <span class="tag">Pigmentation</span>
            </div>
            <a href="#book" class="btn btn-primary">Book CO2 Laser</a>
          </div>
        </article>

        <!-- Carbon Laser -->
        <article class="treatment-feature" id="carbon-laser" data-aos="fade-right">
          <div class="treatment-feature-visual">
            <div class="treatment-img-wrap">
              <img src="img/carbon-laser.jpg" alt="Carbon Laser" loading="lazy" />
              <span class="treatment-tech-badge">Non-Invasive</span>
            </div>
          </div>
          <div class="treatment-feature-content">
            <p class="eyebrow">Pore Refinement</p>
            <h3>Carbon Laser — Achieve smoother, clearer skin <em>without discomfort</em></h3>
            <p>Achieve clearer, smoother skin with our non-invasive Carbon Laser treatment. This innovative procedure uses a carbon lotion and laser to remove impurities, dead skin cells, and excess oil, while stimulating collagen production.</p>
            <p>Perfect for addressing acne, large pores, and uneven skin tone with minimal discomfort.</p>
            <div class="treatment-tags">
              <span class="tag">Acne Control</span>
              <span class="tag">Pore Reduction</span>
              <span class="tag">Even Skin Tone</span>
            </div>
            <a href="#book" class="btn btn-primary">Book Carbon Laser</a>
          </div>
        </article>
      </div>
    </section>

    <!-- ── TREATMENTS GRID ──────────────────────────── -->
    <section class="treatments-grid section">
      <div class="container">
        <div class="treatments-grid-wrapper">
          <div class="treatment-grid-card" data-aos="fade-up" data-aos-delay="0">
            <div class="treatment-grid-icon">⚡</div>
            <h3>HYDRA 7D</h3>
            <p>Advanced hydration and skin revitalization therapy for a glowing complexion.</p>
            <a href="treatments.php#hydra-7d" class="btn btn-outline btn-sm">Learn More</a>
          </div>
          <div class="treatment-grid-card" data-aos="fade-up" data-aos-delay="100">
            <div class="treatment-grid-icon">🌊</div>
            <h3>Exilis</h3>
            <p>Non-invasive body contouring and face tightening with radiofrequency technology.</p>
            <a href="treatments.php#exilis" class="btn btn-outline btn-sm">Learn More</a>
          </div>
          <div class="treatment-grid-card" data-aos="fade-up" data-aos-delay="200">
            <div class="treatment-grid-icon">💇</div>
            <h3>Hair Restoration</h3>
            <p>Specialized scalp treatments to restore hair vitality and promote healthy growth.</p>
            <a href="treatments.php#hair" class="btn btn-outline btn-sm">Learn More</a>
          </div>
        </div>
        <div class="treatments-cta" data-aos="fade-up" data-aos-delay="300">
          <a href="treatments.php" class="btn btn-primary btn-lg">View All Treatments</a>
        </div>
      </div>
    </section>

    <!-- ── ABOUT ─────────────────────────────────────── -->
    <section class="about section" id="about">
      <div class="section-deco section-deco-about-leaf" aria-hidden="true">
        <img src="https://img.freepik.com/free-png/pink-sakura-branch_53876-115564.png" alt="" />
      </div>
      <div class="container about-inner">
        <div class="about-visual" data-aos="fade-right">
          <div class="about-img-main">
  <video autoplay muted loop playsinline>
    <source src="img/about-video.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>
</div>
          <div class="about-img-accent">
            <img src="img/advanced-skin-care.jpg" alt="Treatment close-up" loading="lazy" />
          </div>
          <div class="about-badge">
            <strong>15+</strong>
            <span>Years of Excellence</span>
          </div>
        </div>
        <div class="about-content" data-aos="fade-left">
          <p class="eyebrow">About Geneva Wellness Institute</p>
          <h2>Your journey to becoming <em>the best version of yourself</em></h2>
          <p>At Geneva Wellness Institute, we provide exceptional beauty and wellness treatments in a serene and luxurious environment. Our highly skilled team of expert estheticians and certified therapists is dedicated to helping you achieve your beauty and wellness goals.</p>
          <ul class="about-features">
            <li><span class="feature-check">✓</span><div><strong>Advanced Facial Therapies</strong><p>State-of-the-art facials tailored to every skin concern.</p></div></li>
            <li><span class="feature-check">✓</span><div><strong>Body Contouring Treatments</strong><p>Non-invasive sculpting and rejuvenation for your body.</p></div></li>
          </ul>
          <a href="about-us.php" class="btn btn-primary">Read More About Us</a>
        </div>
      </div>
    </section>

    <!-- ── BEFORE & AFTER ─────────────────────────────── -->
    <section class="before-after section" id="before-after">
      <div class="section-deco ba-deco-1" aria-hidden="true">
        <img src="https://img.freepik.com/free-png/lotus-flower-pink-watercolor_53876-115599.png" alt="" />
      </div>
      <div class="container">
        <div class="section-header" data-aos="fade-up">
          <p class="eyebrow">Real Results</p>
          <h2>Our Advanced Treatments — <em>See the Difference</em></h2>
          <p class="section-desc">Witness the transformative power of our treatments with real client before &amp; after results.</p>
        </div>

        <div class="ba-grid">
          <!-- BA Card 1 -->
          <div class="ba-card" data-aos="fade-up" data-aos-delay="0">
            <div class="ba-slider-wrap">
              <div class="ba-before">
                <img src="https://img.freepik.com/free-photo/woman-skin-before-treatment_53876-128520.jpg" alt="Before HIFU treatment" loading="lazy" />
                <span class="ba-label ba-label-before">Before</span>
              </div>
              <div class="ba-after">
                <img src="https://img.freepik.com/free-photo/woman-skin-after-treatment_53876-128518.jpg" alt="After HIFU treatment" loading="lazy" />
                <span class="ba-label ba-label-after">After</span>
              </div>
              <input type="range" class="ba-range" min="0" max="100" value="50" aria-label="Before/After slider" />
              <div class="ba-divider">
                <div class="ba-handle"><span>◀ ▶</span></div>
              </div>
            </div>
            <div class="ba-info">
              <h3>HIFU Face Lift</h3>
              <p>6 weeks post-treatment — visible lift and firming.</p>
              <a href="contact-us.php#contact-form" class="btn btn-outline btn-sm">Book This Treatment</a>
            </div>
          </div>

          <!-- BA Card 2 -->
          <div class="ba-card" data-aos="fade-up" data-aos-delay="150">
            <div class="ba-slider-wrap">
              <div class="ba-before">
                <img src="https://img.freepik.com/free-photo/woman-acne-skin-before-treatment_53876-128522.jpg" alt="Before CO2 Laser" loading="lazy" />
                <span class="ba-label ba-label-before">Before</span>
              </div>
              <div class="ba-after">
                <img src="https://img.freepik.com/free-photo/woman-clear-skin-after-treatment_53876-128516.jpg" alt="After CO2 Laser" loading="lazy" />
                <span class="ba-label ba-label-after">After</span>
              </div>
              <input type="range" class="ba-range" min="0" max="100" value="50" aria-label="Before/After slider" />
              <div class="ba-divider">
                <div class="ba-handle"><span>◀ ▶</span></div>
              </div>
            </div>
            <div class="ba-info">
              <h3>CO2 Laser Resurfacing</h3>
              <p>Dramatic acne scar improvement after 3 sessions.</p>
              <a href="contact-us.php#contact-form" class="btn btn-outline btn-sm">Book This Treatment</a>
            </div>
          </div>
        </div>
        <div class="ba-more-cta" data-aos="fade-up" data-aos-delay="300">
          <a href="gallery.php" class="btn btn-primary btn-lg">View More Results</a>
        </div>
      </div>
    </section>

    <!-- ── GALLERY ───────────────────────────────────── -->
    <section class="gallery section" id="gallery">
      <div class="container">
        <div class="section-header" data-aos="fade-up">
          <p class="eyebrow">Our Advanced Treatments</p>
          <h2>Explore our serene environment &amp; <em>treatments in action</em></h2>
        </div>
        <div class="gallery-masonry" data-aos="fade-up" data-aos-delay="200">
          <div class="gallery-item g-tall">
            <img src="img/advanced-treatement-1.jpg" alt="Facial treatment" loading="lazy" />
            <div class="gallery-overlay"><span>HYDRA 7D</span></div>
          </div>
          <div class="gallery-item">
            <img src="img/advanced-treatement-2.jpg" alt="HIFU treatment" loading="lazy" />
            <div class="gallery-overlay"><span>CO2 Laser</span></div>
          </div>
          <div class="gallery-item">
            <img src="img/advanced-treatement-3.jpg" alt="Laser treatment" loading="lazy" />
            <div class="gallery-overlay"><span>Carbon Laser</span></div>
          </div>
          <div class="gallery-item g-wide">
            <img src="img/advanced-treatement-4.webp" alt="Body treatment" loading="lazy" />
            <div class="gallery-overlay"><span>Pico Laser</span></div>
          </div>
        
        </div>
        <div class="gallery-cta" data-aos="fade-up" data-aos-delay="300">
          <a href="#book" class="btn btn-outline">View All Treatments</a>
        </div>
      </div>
    </section>

    <!-- ── ACHIEVEMENTS ───────────────────────────────── -->
    <section class="stats-section section">
      <div class="container">
        <div class="section-header" data-aos="fade-up">
          <p class="eyebrow">Our Achievements</p>
          <h2>Proudly showcasing our excellence in <em>beauty and wellness</em></h2>
        </div>
        <div class="stats-grid" data-aos="fade-up" data-aos-delay="150">
          <div class="stat-card">
            <div class="stat-num" data-target="10000" data-suffix="+">0+</div>
            <div class="stat-label">Satisfied Clients</div>
            <p>We take pride in having served over 10,000 satisfied clients with top-notch treatments and personalized care.</p>
          </div>
          <div class="stat-card">
            <div class="stat-num" data-target="15" data-suffix=" Yrs">0 Yrs</div>
            <div class="stat-label">Industry Experience</div>
            <p>With 15 years of experience, our team brings unparalleled knowledge and skill to every treatment.</p>
          </div>
          <div class="stat-card">
            <div class="stat-num" data-target="5" data-suffix="-Star">0-Star</div>
            <div class="stat-label">Client Rating</div>
            <p>Our commitment to quality has earned us a consistent 5-star rating from our valued clients.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ── BLOG ──────────────────────────────────────── -->
    <section class="blog section" id="blog">
      <div class="container">
        <div class="section-header" data-aos="fade-up">
          <p class="eyebrow">Our Blog</p>
          <h2>Stay updated with the latest in <em>beauty and wellness</em></h2>
        </div>
        <div class="blog-grid">
          <article class="blog-card" data-aos="fade-up" data-aos-delay="0">
            <div class="blog-img-wrap">
              <img src="img/blog-1.jpg" alt="Benefits of Regular Facials" loading="lazy" />
              <span class="blog-category-badge">Skincare</span>
            </div>
            <div class="blog-content">
              <p class="blog-date">January 15, 2024</p>
              <h3>The Benefits of Regular Facials</h3>
              <p>Discover how regular facial treatments can transform your skin, improve texture, and give you long-lasting radiance.</p>
              <a href="#" class="blog-link">Read More →</a>
            </div>
          </article>

          <article class="blog-card" data-aos="fade-up" data-aos-delay="100">
            <div class="blog-img-wrap">
              <img src="img/blog-2.jpg" alt="Body Contouring Techniques" loading="lazy" />
              <span class="blog-category-badge">Body</span>
            </div>
            <div class="blog-content">
              <p class="blog-date">February 3, 2024</p>
              <h3>Top 5 Body Contouring Techniques</h3>
              <p>Learn about the most effective body contouring techniques. From CoolSculpting to laser treatments, find out which is best for you.</p>
              <a href="#" class="blog-link">Read More →</a>
            </div>
          </article>

          <article class="blog-card" data-aos="fade-up" data-aos-delay="200">
            <div class="blog-img-wrap">
              <img src="img/blog-3.jpg" alt="Hair Care Tips" loading="lazy" />
              <span class="blog-category-badge">Hair Care</span>
            </div>
            <div class="blog-content">
              <p class="blog-date">March 10, 2024</p>
              <h3>Hair Care Tips for a Healthier Scalp</h3>
              <p>Explore essential tips for maintaining a healthy scalp and vibrant hair with expert advice from our certified therapists.</p>
              <a href="#" class="blog-link">Read More →</a>
            </div>
          </article>
        </div>
        <div class="blog-cta" data-aos="fade-up" data-aos-delay="300">
          <a href="/blog.php" class="btn btn-primary btn-lg">View All Blog Posts</a>
        </div>
      </div>
    </section>

    <!-- ── TESTIMONIALS (SWIPER) ──────────────────────── -->
    <section class="testimonials section" id="testimonials">
      <div class="section-deco testimonials-deco" aria-hidden="true">
        <img src="https://img.freepik.com/free-png/pink-sakura-branch_53876-115564.png" alt="" />
      </div>
      <div class="container">
        <div class="section-header" data-aos="fade-up">
          <p class="eyebrow">Client Love</p>
          <h2>What our clients say about <em>their experience</em></h2>
        </div>

        <div class="swiper testimonials-swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <article class="testimonial-card">
                <div class="testimonial-quote">❝</div>
                <div class="testimonial-stars">★★★★★</div>
                <blockquote><p>"Geneva Wellness Institute is my go-to place for all my skincare needs. Their advanced facial therapies have transformed my skin, making it smoother and more radiant. The team is knowledgeable and always makes me feel comfortable. I can't imagine going anywhere else!"</p></blockquote>
                <footer class="testimonial-author">
                  <div class="author-avatar">G</div>
                  <div><strong>Gerryl Peñaflor</strong><span>Advanced Facial Client</span></div>
                </footer>
              </article>
            </div>
          </div>
        </div>
      </div>

      <div class="container testimonials-cta" data-aos="fade-up">
        <a href="/testimonials.php" class="btn btn-outline">Read More Testimonials</a>
      </div>
    </section>

    <!-- ── CTA SECTION ────────────────────────────────– -->
    <section class="section cta-section" style="background: linear-gradient(135deg, #B00E09 0%, #CAAE5F 100%);">
      <div class="container cta-content">
        <div>
          <h2 style="color: white; margin-bottom: 1rem;">Ready to Transform?</h2>
          <p style="color: rgba(255, 255, 255, 0.95); font-size: 1.1rem; margin-bottom: 0;">Schedule your consultation today and begin your wellness journey with our expert team.</p>
        </div>
        <a href="/contact-us.php#contact-form" class="btn btn-white">Book Consultation</a>
      </div>
    </section>

    <?php include 'footer.php'; ?>

  </main>

  <button class="back-to-top" id="back-to-top" aria-label="Back to top">↑</button>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <!-- AOS JS -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <!-- Page-specific Scripts -->
  <script src="script.js"></script>
</body>
</html>
