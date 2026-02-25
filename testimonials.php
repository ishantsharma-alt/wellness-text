<?php 
$page_title = 'Client Testimonials'; 
$page_subtitle = 'Stories of Transformation & Satisfaction'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Read testimonials from satisfied clients at Geneva Wellness Institute. See what our clients have to say about their treatment experiences." />
  <meta name="keywords" content="testimonials, client reviews, success stories, Geneva Wellness feedback" />
  <meta name="robots" content="index, follow" />
  <meta property="og:title" content="Testimonials — Geneva Wellness Institute" />
  <meta property="og:description" content="Real stories from our satisfied clients." />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://genevawellness.com/testimonials" />
  <link rel="canonical" href="https://genevawellness.com/testimonials" />
  <title>Testimonials — Geneva Wellness Institute</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="cursor" id="cursor"></div>
  <div class="cursor-follower" id="cursor-follower"></div>

  <?php include 'header.php'; ?>

  <!-- ── INNER PAGE BANNER ────────────────────────────– -->
  <section class="inner-banner" style="background: linear-gradient(135deg, #B00E09 0%, #FAD2B8 100%);">
    <div class="inner-banner-content container">
      <h1 data-aos="fade-up">Client Testimonials</h1>
      <p class="inner-banner-subtitle" data-aos="fade-up" data-aos-delay="100">Stories of Transformation & Satisfaction</p>
    </div>
  </section>

  <!-- ── BREADCRUMB ────────────────────────────────– -->
  <nav class="breadcrumb container" aria-label="Breadcrumb">
    <a href="index.php">Home</a>
    <span>/</span>
    <span aria-current="page">Testimonials</span>
  </nav>

  <main>

    <!-- ── RATING SUMMARY ────────────────────────────– -->
    <section class="section">
      <div class="container">
        <div class="rating-summary" data-aos="fade-up">
          <div class="rating-score">
            <div class="stars">★★★★★</div>
            <div class="rating-number">4.9/5.0</div>
            <p>Based on 500+ client reviews</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ── TESTIMONIALS GRID ────────────────────────– -->
    <section class="section">
      <div class="container">
        <div class="testimonials-featured">
          <!-- Testimonial 1 -->
          <article class="testimonial-card" data-aos="fade-up">
            <div class="testimonial-header">
              <div class="testimonial-avatar">M</div>
              <div class="testimonial-author">
                <strong>Maria Santos</strong>
                <small>Verified Client</small>
              </div>
              <div class="stars-rating">★★★★★</div>
            </div>
            <p class="testimonial-title">Exceeded My Expectations</p>
            <p class="testimonial-text">"I was nervous about getting HIFU done, but Dr. Rafael made me feel completely at ease. The procedure was painless, and I've never seen my skin look better. The results are natural and beautiful. I'm recommending this clinic to all my friends!"</p>
            <div class="testimonial-meta">
              <span>HIFU Treatment</span>
              <span>•</span>
              <span>6 months ago</span>
            </div>
          </article>

          <!-- Testimonial 2 -->
          <article class="testimonial-card" data-aos="fade-up" data-aos-delay="100">
            <div class="testimonial-header">
              <div class="testimonial-avatar">J</div>
              <div class="testimonial-author">
                <strong>James Rodriguez</strong>
                <small>Verified Client</small>
              </div>
              <div class="stars-rating">★★★★★</div>
            </div>
            <p class="testimonial-title">Hair Restoration is a Game-Changer</p>
            <p class="testimonial-text">"After struggling with hair loss for years, I finally found a solution that actually works. The team at Geneva Wellness was patient in explaining the process, and the results are extraordinary. My confidence is back!"</p>
            <div class="testimonial-meta">
              <span>Hair Restoration</span>
              <span>•</span>
              <span>3 months ago</span>
            </div>
          </article>

          <!-- Testimonial 3 -->
          <article class="testimonial-card" data-aos="fade-up" data-aos-delay="200">
            <div class="testimonial-header">
              <div class="testimonial-avatar">A</div>
              <div class="testimonial-author">
                <strong>Ana Michelle Reyes</strong>
                <small>Verified Client</small>
              </div>
              <div class="stars-rating">★★★★★</div>
            </div>
            <p class="testimonial-title">Professional & Caring Team</p>
            <p class="testimonial-text">"The CO2 laser treatment transformed my skin completely. My acne scars are barely visible now, and my skin tone is so much more even. The staff is incredibly professional and made every visit pleasant."</p>
            <div class="testimonial-meta">
              <span>CO2 Laser Therapy</span>
              <span>•</span>
              <span>4 months ago</span>
            </div>
          </article>

          <!-- Testimonial 4 -->
          <article class="testimonial-card" data-aos="fade-up" data-aos-delay="300">
            <div class="testimonial-header">
              <div class="testimonial-avatar">R</div>
              <div class="testimonial-author">
                <strong>Robert Chen</strong>
                <small>Verified Client</small>
              </div>
              <div class="stars-rating">★★★★★</div>
            </div>
            <p class="testimonial-title">Results Speak for Themselves</p>
            <p class="testimonial-text">"I did the Exilis Ultra for body contouring, and the results are incredible. My body is more toned, and my confidence has skyrocketed. The clinic is luxurious, and the team is genuine and knowledgeable."</p>
            <div class="testimonial-meta">
              <span>Body Contouring</span>
              <span>•</span>
              <span>2 months ago</span>
            </div>
          </article>

          <!-- Testimonial 5 -->
          <article class="testimonial-card" data-aos="fade-up" data-aos-delay="400">
            <div class="testimonial-header">
              <div class="testimonial-avatar">C</div>
              <div class="testimonial-author">
                <strong>Catherine Lopez</strong>
                <small>Verified Client</small>
              </div>
              <div class="stars-rating">★★★★★</div>
            </div>
            <p class="testimonial-title">Worth Every Peso</p>
            <p class="testimonial-text">"I've tried many skincare products and treatments, but nothing compares to the Pico Laser. My tattoo is almost completely gone, and my skin looks amazing. The investment is definitely worth it."</p>
            <div class="testimonial-meta">
              <span>Pico Laser & Skin Treatment</span>
              <span>•</span>
              <span>5 months ago</span>
            </div>
          </article>

          <!-- Testimonial 6 -->
          <article class="testimonial-card" data-aos="fade-up" data-aos-delay="500">
            <div class="testimonial-header">
              <div class="testimonial-avatar">P</div>
              <div class="testimonial-author">
                <strong>Patricia Gonzales</strong>
                <small>Verified Client</small>
              </div>
              <div class="stars-rating">★★★★★</div>
            </div>
            <p class="testimonial-title">Life-Changing Experience</p>
            <p class="testimonial-text">"The microneedling treatment has given my skin a whole new lease on life. My wrinkles are softer, my skin is glowing, and I feel like a new person. The team is so caring and attentive to detail."</p>
            <div class="testimonial-meta">
              <span>Microneedling</span>
              <span>•</span>
              <span>1 month ago</span>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- ── WHY CLIENTS LOVE US ────────────────────────– -->
    <section class="section" style="background: linear-gradient(135deg, rgba(202, 174, 95, 0.08), rgba(250, 210, 184, 0.08));">
      <div class="container">
        <div class="section-header">
          <span class="eyebrow">What Sets Us Apart</span>
          <h2>Why Clients Choose Geneva Wellness</h2>
        </div>
        <div class="features-list">
          <div class="feature-item" data-aos="fade-up">
            <span class="feature-icon">✓</span>
            <div>
              <h3>Expert Professionals</h3>
              <p>Certified doctors and specialists with years of international training and experience.</p>
            </div>
          </div>
          <div class="feature-item" data-aos="fade-up" data-aos-delay="100">
            <span class="feature-icon">✓</span>
            <div>
              <h3>Advanced Technology</h3>
              <p>FDA-approved equipment utilizing the latest advancements in aesthetic medicine.</p>
            </div>
          </div>
          <div class="feature-item" data-aos="fade-up" data-aos-delay="200">
            <span class="feature-icon">✓</span>
            <div>
              <h3>Personalized Care</h3>
              <p>Each client receives a customized treatment plan tailored to their unique goals.</p>
            </div>
          </div>
          <div class="feature-item" data-aos="fade-up" data-aos-delay="300">
            <span class="feature-icon">✓</span>
            <div>
              <h3>Transparent Pricing</h3>
              <p>No hidden fees. Clear, upfront costs with flexible payment options available.</p>
            </div>
          </div>
          <div class="feature-item" data-aos="fade-up" data-aos-delay="400">
            <span class="feature-icon">✓</span>
            <div>
              <h3>Luxurious Environment</h3>
              <p>Comfortable, clean, and private treatment rooms designed for your comfort.</p>
            </div>
          </div>
          <div class="feature-item" data-aos="fade-up" data-aos-delay="500">
            <span class="feature-icon">✓</span>
            <div>
              <h3>Aftercare Support</h3>
              <p>Comprehensive follow-up and guidance to maximize results and ensure satisfaction.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ── CTA SECTION ────────────────────────────────– -->
    <section class="section cta-section" style="background: linear-gradient(135deg, #B00E09 0%, #CAAE5F 100%);">
      <div class="container cta-content">
        <div>
          <h2 style="color: white; margin-bottom: 1rem;">Join Our Satisfied Clients</h2>
          <p style="color: rgba(255, 255, 255, 0.95); font-size: 1.1rem; margin-bottom: 0;">Start your transformation journey today. Schedule a free consultation with our team.</p>
        </div>
        <a href="contact-us.php#contact-form" class="btn btn-white">Book Consultation</a>
      </div>
    </section>

    <?php include 'footer.php'; ?>

  </main>

  <button class="back-to-top" id="back-to-top" aria-label="Back to top">↑</button>

  <!-- AOS JS -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <!-- Dynamic Component Manager -->
  <script src="components.js"></script>
  <!-- Page-specific Scripts -->
  <script src="script.js"></script>
</body>
</html>
