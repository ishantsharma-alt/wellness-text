<?php 
$page_title = 'Get In Touch'; 
$page_subtitle = 'We'\''re Here to Help'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Contact Geneva Wellness Institute for consultations, appointments, and inquiries. Visit us in Alabang, Muntinlupa City." />
  <meta name="keywords" content="contact, consultation, appointments, Geneva Wellness, phone, email, address" />
  <meta name="robots" content="index, follow" />
  <meta property="og:title" content="Contact Us — Geneva Wellness Institute" />
  <meta property="og:description" content="Get in touch with our wellness experts. We're here to help." />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://genevawellness.com/contact-us" />
  <link rel="canonical" href="https://genevawellness.com/contact-us" />
  <title>Contact Us — Geneva Wellness Institute</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,300;0,9..144,400;0,9..144,500;0,9..144,600;0,9..144,700;1,9..144,300;1,9..144,400&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
  <link rel="stylesheet" href="style.css" />
</head>
<body>

  <div class="cursor" id="cursor"></div>
  <div class="cursor-follower" id="cursor-follower"></div>

  <?php include 'header.php'; ?>

  <!-- ── INNER PAGE BANNER ────────────────────────────– -->
  <section class="inner-banner" style="background: linear-gradient(135deg, #CAAE5F 0%, #B00E09 100%);">
    <div class="inner-banner-content container">
      <h1 data-aos="fade-up">Get In Touch</h1>
      <p class="inner-banner-subtitle" data-aos="fade-up" data-aos-delay="100">We're Here to Help</p>
    </div>
  </section>

  <!-- ── BREADCRUMB ────────────────────────────────– -->
  <nav class="breadcrumb container" aria-label="Breadcrumb">
    <a href="index.php">Home</a>
    <span>/</span>
    <span aria-current="page">Contact Us</span>
  </nav>

  <main>

    <!-- ── CONTACT INFO ────────────────────────────────– -->
    <section class="section">
      <div class="container">
        <div class="contact-info-grid">
          <div class="contact-info-card" data-aos="fade-up">
            <div class="info-icon">📍</div>
            <h3>Visit Us</h3>
            <address>
              <p>GF Vivere Hotel<br/>5102 Bridgeway Ave.<br/>Filinvest Corporate City<br/>Alabang, Muntinlupa City<br/>1780, Philippines</p>
            </address>
          </div>
          <div class="contact-info-card" data-aos="fade-up" data-aos-delay="100">
            <div class="info-icon">📞</div>
            <h3>Call Us</h3>
            <p>
              <a href="tel:+639175551234">+63 917 555 1234</a><br/>
              <a href="tel:+63245551234">(02) 4555 1234</a><br/>
              <small>Mon–Sun, 11:00 am – 7:00 pm</small>
            </p>
          </div>
          <div class="contact-info-card" data-aos="fade-up" data-aos-delay="200">
            <div class="info-icon">✉️</div>
            <h3>Email Us</h3>
            <p>
              <a href="mailto:hello@genevawellness.com">hello@genevawellness.com</a><br/>
              <a href="mailto:support@genevawellness.com">support@genevawellness.com</a><br/>
              <small>Response within 24 hours</small>
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- ── CONTACT FORM ────────────────────────────────– -->
    <section class="section" id="contact-form" style="background: linear-gradient(135deg, rgba(202, 174, 95, 0.05), rgba(250, 210, 184, 0.05));">
      <div class="container">
        <div class="form-container">
          <div class="form-header" data-aos="fade-up">
            <h2>Schedule Your Consultation</h2>
            <p>Fill out the form below and our team will contact you within 24 hours to confirm your appointment.</p>
          </div>

          <form class="contact-form" id="consultation-form" method="POST" data-aos="fade-up" data-aos-delay="100">
            <div class="form-row">
              <div class="form-group">
                <label for="name">Full Name <span aria-label="required">*</span></label>
                <input type="text" id="name" name="name" placeholder="Your Full Name" required />
              </div>
              <div class="form-group">
                <label for="email">Email Address <span aria-label="required">*</span></label>
                <input type="email" id="email" name="email" placeholder="your@email.com" required />
              </div>
            </div>

            <div class="form-row">
              <div class="form-group">
                <label for="phone">Phone Number <span aria-label="required">*</span></label>
                <input type="tel" id="phone" name="phone" placeholder="+63 917 XXX XXXX" required />
              </div>
              <div class="form-group">
                <label for="treatment">Preferred Treatment</label>
                <select id="treatment" name="treatment">
                  <option>Select a treatment</option>
                  <option>HIFU Facial Lifting</option>
                  <option>CO2 Laser Therapy</option>
                  <option>Carbon Laser Peel</option>
                  <option>Pico Laser</option>
                  <option>Microneedling</option>
                  <option>Exilis Ultra</option>
                  <option>Hair Restoration</option>
                  <option>Other</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label for="message">Message or Questions</label>
              <textarea id="message" name="message" placeholder="Tell us about your goals or ask any questions..." rows="5"></textarea>
            </div>

            <div class="form-group checkbox">
              <input type="checkbox" id="agree" name="agree" required />
              <label for="agree">I agree to the privacy policy and terms of service</label>
            </div>

            <button type="submit" class="btn btn-primary">Request Consultation</button>
            <p class="form-note">We respect your privacy. Your information will only be used to contact you about your consultation.</p>
          </form>
        </div>
      </div>
    </section>

    <!-- ── MAP SECTION ────────────────────────────────– -->
    <section class="section">
      <div class="container">
        <h2 style="text-align: center; margin-bottom: 2rem;">Find Us Here</h2>
        <div class="map-container" data-aos="zoom-in">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3862.1649891842366!2d121.0364!3d14.3523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c9c8f5c5c5c5%3A0x5c5c5c5c5c5c5c5c!2sGF%20Vivere%20Hotel%2C%205102%20Bridgeway%20Ave.%2C%20Filinvest%20Corporate%20City%2C%20Alabang%2C%20Muntinlupa%20City!5e0!3m2!1sen!2sph!4v1234567890"
            width="100%"
            height="500"
            style="border:0; border-radius: 12px;"
            allowFullScreen=""
            loading="lazy"
            referrerPolicy="no-referrer-when-downgrade"
            aria-label="Google Maps location of Geneva Wellness Institute"
          ></iframe>
        </div>
      </div>
    </section>

    <!-- ── FAQ SECTION ────────────────────────────────– -->
    <section class="section" style="background: linear-gradient(135deg, rgba(176, 14, 9, 0.05), rgba(202, 174, 95, 0.05));">
      <div class="container">
        <div class="section-header">
          <span class="eyebrow">Questions?</span>
          <h2>Frequently Asked Questions</h2>
        </div>
        <div class="faq-grid">
          <details class="faq-item" data-aos="fade-up">
            <summary>How do I book a consultation?</summary>
            <p>You can book a consultation by filling out the form above, calling us directly at +63 917 555 1234, or visiting our clinic in person. Our team will confirm your appointment time.</p>
          </details>
          <details class="faq-item" data-aos="fade-up" data-aos-delay="100">
            <summary>Is the consultation free?</summary>
            <p>Yes! Your initial consultation is complimentary. During this time, we'll discuss your goals, examine your concerns, and recommend the best treatment plan for you.</p>
          </details>
          <details class="faq-item" data-aos="fade-up" data-aos-delay="200">
            <summary>What are your operating hours?</summary>
            <p>We're open Monday through Sunday, from 11:00 am to 7:00 pm. We recommend booking appointments in advance to ensure availability.</p>
          </details>
          <details class="faq-item" data-aos="fade-up" data-aos-delay="300">
            <summary>Do you offer payment plans?</summary>
            <p>Yes, we offer flexible payment options and installment plans for most treatments. Ask our team about available payment options during your consultation.</p>
          </details>
          <details class="faq-item" data-aos="fade-up" data-aos-delay="400">
            <summary>How long do results take to appear?</summary>
            <p>Results vary depending on the treatment. Some clients see immediate effects, while others see progressive improvement over weeks. We'll provide a realistic timeline during your consultation.</p>
          </details>
          <details class="faq-item" data-aos="fade-up" data-aos-delay="500">
            <summary>Is there any downtime after treatment?</summary>
            <p>Most of our treatments are non-invasive with minimal to no downtime. You can typically return to your normal activities immediately or within a day. We'll discuss specific aftercare with you.</p>
          </details>
        </div>
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
