<?php
/**
 * Footer Template
 * Included on all pages for consistent footer
 * Usage: <?php include 'footer.php'; ?>
 */
?>

<!-- ── CTA SECTION ────────────────────────────────– -->
<section class="section cta-section" style="background: linear-gradient(135deg, #B00E09 0%, #CAAE5F 100%);">
  <div class="container cta-content">
    <div>
      <h2 style="color: white; margin-bottom: 1rem;">Ready to Transform Your Wellness Journey?</h2>
      <p style="color: rgba(255, 255, 255, 0.95); font-size: 1.1rem; margin-bottom: 0;">Schedule a free consultation with our experts today. Let's discuss your goals and create a personalized treatment plan.</p>
    </div>
    <button class="btn btn-white popup-trigger" data-popup="consultation-popup">Book Your Consultation</button>
  </div>
</section>

<footer class="footer" id="site-footer">
  <div class="container">
    <div class="footer-grid">
      <!-- Brand Column -->
      <div class="footer-column">
        <div class="footer-logo">
          <svg class="logo-mark" viewBox="0 0 40 40" fill="none">
            <circle cx="20" cy="20" r="18" stroke="currentColor" stroke-width="1.5" />
            <text x="20" y="24" font-family="Lora" font-size="18" font-weight="500" text-anchor="middle" fill="currentColor">GW</text>
          </svg>
          <span>Geneva Wellness</span>
        </div>
        <p class="footer-desc">Transformative wellness and aesthetic treatments designed for your unique beauty and confidence.</p>
        <div class="footer-socials">
          <a href="#" aria-label="Facebook" title="Follow on Facebook">f</a>
          <a href="#" aria-label="Instagram" title="Follow on Instagram">📷</a>
          <a href="#" aria-label="LinkedIn" title="Connect on LinkedIn">in</a>
        </div>
      </div>

      <!-- Quick Links -->
      <div class="footer-column">
        <h4>Quick Links</h4>
        <ul class="footer-links">
          <li><a href="about-us.php">About Us</a></li>
          <li><a href="treatments.php">Treatments</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          <li><a href="testimonials.php">Testimonials</a></li>
        </ul>
      </div>

      <!-- Resources -->
      <div class="footer-column">
        <h4>Resources</h4>
        <ul class="footer-links">
          <li><a href="blog.php">Blog</a></li>
          <li><a href="contact-us.php">Contact</a></li>
          <li><a href="privacy-policy.php">Privacy Policy</a></li>
          <li><a href="terms.php">Terms of Service</a></li>
        </ul>
      </div>

      <!-- Contact -->
      <div class="footer-column">
        <h4>Get In Touch</h4>
        <div class="footer-contact">
          <p>
            <strong>Phone:</strong><br>
            <a href="tel:+1234567890">(123) 456-7890</a>
          </p>
          <p>
            <strong>Email:</strong><br>
            <a href="mailto:hello@genevawellness.com">hello@genevawellness.com</a>
          </p>
          <p>
            <strong>Hours:</strong><br>
            Mon-Fri: 9am-6pm<br>
            Sat-Sun: 10am-4pm
          </p>
        </div>
      </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
      <p>&copy; 2024 Geneva Wellness Institute. All rights reserved.</p>
      <div class="footer-bottom-links">
        <a href="privacy-policy.php">Privacy Policy</a>
        <a href="terms.php">Terms of Service</a>
        <a href="cookie-policy.php">Cookie Policy</a>
      </div>
    </div>
  </div>
</footer>

<!-- ── POPUP MODAL ────────────────────────────────────────── -->
<div class="popup-overlay" id="consultation-popup">
  <div class="popup-content">
    <button class="popup-close" aria-label="Close popup">×</button>
    <div class="popup-header">
      <h3>Schedule Your Consultation</h3>
      <p>Fill out the form below and our team will contact you within 24 hours to confirm your appointment.</p>
    </div>
    <form class="popup-form contact-form" id="popup-consultation-form" method="POST" action="">
      <div class="form-row">
        <div class="form-group">
          <label for="popup-name">Full Name <span aria-label="required">*</span></label>
          <input type="text" id="popup-name" name="name" placeholder="Your Full Name" required />
        </div>
        <div class="form-group">
          <label for="popup-email">Email Address <span aria-label="required">*</span></label>
          <input type="email" id="popup-email" name="email" placeholder="your@email.com" required />
        </div>
      </div>

      <div class="form-row">
        <div class="form-group">
          <label for="popup-phone">Phone Number <span aria-label="required">*</span></label>
          <input type="tel" id="popup-phone" name="phone" placeholder="+63 917 XXX XXXX" required />
        </div>
        <div class="form-group">
          <label for="popup-treatment">Preferred Treatment</label>
          <select id="popup-treatment" name="treatment">
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
        <label for="popup-message">Message or Questions</label>
        <textarea id="popup-message" name="message" placeholder="Tell us about your goals or ask any questions..." rows="3"></textarea>
      </div>

      <button type="submit" class="btn btn-primary">Request Consultation</button>
    </form>
  </div>
</div>
