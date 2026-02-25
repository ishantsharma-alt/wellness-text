<?php 
$page_title = 'Get In Touch'; 
$page_subtitle = "We're Here to Help";

// Handle form submission
$form_submitted = false;
$form_message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Validate form data
  $name = sanitize_input($_POST['name'] ?? '');
  $email = sanitize_input($_POST['email'] ?? '');
  $phone = sanitize_input($_POST['phone'] ?? '');
  $treatment = sanitize_input($_POST['treatment'] ?? '');
  $message = sanitize_input($_POST['message'] ?? '');
  $agree = isset($_POST['agree']) ? true : false;
  
  // Basic validation
  if (!empty($name) && !empty($email) && !empty($phone) && $agree) {
    // Form is valid - could process here
    $form_submitted = true;
    $form_message = 'Thank you! We will contact you shortly to confirm your consultation.';
  }
}

// Helper function to sanitize input
function sanitize_input($input) {
  return htmlspecialchars(stripslashes(trim($input)), ENT_QUOTES, 'UTF-8');
}
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

  <!-- ── STRUCTURED DATA (Schema.org) ───────────────────────────────── -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "ContactPage",
    "name": "Contact Geneva Wellness Institute",
    "url": "https://genevawellness.com/contact-us",
    "contactPoint": {
      "@type": "ContactPoint",
      "contactType": "Customer Service",
      "telephone": "+63-917-555-1234",
      "email": "hello@genevawellness.com",
      "areaServed": "PH"
    },
    "mainEntity": {
      "@type": "LocalBusiness",
      "name": "Geneva Wellness Institute",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Alabang, Muntinlupa City",
        "addressCountry": "PH"
      }
    }
  }
  </script>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="enhancements.css" />
</head>
<body>

  <div class="cursor" id="cursor"></div>
  <div class="cursor-follower" id="cursor-follower"></div>

  <div id="dynamic-header"></div>

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

    <!-- ── CONTACT INFO & FORM ────────────────────────────────– -->
    <section class="section">
      <div class="container">
        <div class="contact-layout">
          
          <!-- Left: Contact Info -->
          <div class="contact-info-section" data-aos="fade-right">
            <h2>Get In Touch</h2>
            <p style="color: #666; font-size: 1.05rem; margin-bottom: 2.5rem; line-height: 1.7;">Have questions about our treatments? Want to schedule a consultation? We're here to help and look forward to connecting with you.</p>
            
            <div class="contact-info-grid">
              <div class="contact-info-card">
                <div class="info-icon">📍</div>
                <h3>Visit Us</h3>
                <address>
                  <p>GF Vivere Hotel<br/>5102 Bridgeway Ave.<br/>Filinvest Corporate City<br/>Alabang, Muntinlupa City<br/>1780, Philippines</p>
                </address>
              </div>
              <div class="contact-info-card">
                <div class="info-icon">📞</div>
                <h3>Call Us</h3>
                <p>
                  <a href="tel:+639175551234">+63 917 555 1234</a><br/>
                  <a href="tel:+63245551234">(02) 4555 1234</a><br/>
                  <small>Mon–Sun, 11:00 am – 7:00 pm</small>
                </p>
              </div>
              <div class="contact-info-card">
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

          <!-- Right: Contact Form -->
          <div class="contact-form-section" data-aos="fade-left">
            <div class="form-container">
              <div class="form-header">
                <h3>Schedule Your Consultation</h3>
                <p>Fill out the form below and our team will contact you within 24 hours to confirm your appointment.</p>
              </div>

              <?php if ($form_submitted): ?>
                <div class="form-success-message">
                  <strong>✓ <?php echo htmlspecialchars($form_message); ?></strong>
                </div>
              <?php endif; ?>

              <form class="contact-form" id="consultation-form" method="POST" action="">
                <div class="form-row">
                  <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" placeholder="Your Full Name" required />
                  </div>
                  <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="your@email.com" required />
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group">
                    <label for="phone">Phone Number</label>
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

                <button type="submit" class="btn btn-primary btn-block">Request Consultation</button>
                <p class="form-note">We respect your privacy. Your information will only be used to contact you about your consultation.</p>
              </form>
            </div>
          </div>

        </div>
      </div>
    </section>
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
          <details class="faq-item" data-aos="fade-up" open>
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
  <script src="enhancements.js"></script>

  <!-- FAQ Accordion Script -->
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const faqItems = document.querySelectorAll('.faq-item');
      
      faqItems.forEach(item => {
        item.addEventListener('toggle', (e) => {
          if (e.target.open) {
            // Close all other FAQ items
            faqItems.forEach(otherItem => {
              if (otherItem !== e.target) {
                otherItem.open = false;
              }
            });
          }
        });
      });
    });
  </script>
</body>
</html>
