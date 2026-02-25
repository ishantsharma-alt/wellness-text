<?php
$page_title = 'Privacy Policy';
$page_subtitle = 'How we protect your information';
$breadcrumb = [
  ['label' => 'Home', 'url' => 'index.php'],
  ['label' => 'Privacy Policy', 'url' => null]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Privacy Policy for Geneva Wellness Institute. Learn how we collect, use, and protect your personal information." />
  <meta name="robots" content="index, follow" />
  <title>Privacy Policy — Geneva Wellness Institute</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
  <link rel="stylesheet" href="style.css" />
</head>
<body>

  <div class="cursor" id="cursor"></div>
  <div class="cursor-follower" id="cursor-follower"></div>

  <!-- ── DYNAMIC HEADER ────────────────────────────────────────────── -->
  <div id="dynamic-header"></div>

  <!-- ── HERO SECTION ────────────────────────────────– -->
  <?php include 'hero-section.php'; ?>

  <main>
    <section class="section">
      <div class="container page-content">
        <div class="page-section">
          <h1>Privacy Policy</h1>
          <p><strong>Last Updated: December 2024</strong></p>

          <h2>1. Introduction</h2>
          <p>Geneva Wellness Institute ("we," "us," "our," or "Company") is committed to protecting your privacy. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website and use our services.</p>

          <h2>2. Information We Collect</h2>
          <p>We may collect information about you in a variety of ways. The information we may collect on the Site includes:</p>
          <ul>
            <li><strong>Personal Data:</strong> Name, email address, phone number, address, and other contact information you voluntarily provide.</li>
            <li><strong>Medical Information:</strong> Information about your health, treatments, and medical history relevant to our services.</li>
            <li><strong>Usage Data:</strong> Information about how you interact with our website, including IP address, browser type, pages visited, and time spent on pages.</li>
            <li><strong>Cookie Data:</strong> Information collected through cookies and similar technologies.</li>
          </ul>

          <h2>3. How We Use Your Information</h2>
          <p>We use the information we collect in the following ways:</p>
          <ul>
            <li>To provide, operate, and maintain our services</li>
            <li>To process your consultations and appointments</li>
            <li>To send you marketing communications (with your consent)</li>
            <li>To respond to your inquiries and support requests</li>
            <li>To improve our website and services</li>
            <li>To comply with legal obligations</li>
          </ul>

          <h2>4. How We Protect Your Information</h2>
          <p>We implement a variety of security measures to maintain the safety of your personal information. However, no method of transmission over the Internet or electronic storage is 100% secure. We use industry-standard SSL encryption to protect your data during transmission.</p>

          <h2>5. Disclosure of Your Information</h2>
          <p>We do not sell, trade, or rent your personal information to others. We may share your information only in the following circumstances:</p>
          <ul>
            <li>With your explicit consent</li>
            <li>With service providers who assist us in operating our website and conducting our business</li>
            <li>When required by law or legal process</li>
            <li>To protect our rights, privacy, safety, or property</li>
          </ul>

          <h2>6. Third-Party Links</h2>
          <p>Our website may contain links to third-party websites. We are not responsible for the privacy practices of these external sites. We encourage you to review their privacy policies before providing any personal information.</p>

          <h2>7. Cookies and Tracking Technologies</h2>
          <p>We use cookies and similar tracking technologies to enhance your experience on our website. You can control cookie settings through your browser preferences. Some functions of our website may not work properly if cookies are disabled.</p>

          <h2>8. Your Rights</h2>
          <p>You have the right to:</p>
          <ul>
            <li>Access and review the personal information we hold about you</li>
            <li>Request correction of inaccurate information</li>
            <li>Request deletion of your information</li>
            <li>Opt out of marketing communications</li>
          </ul>

          <h2>9. Children's Privacy</h2>
          <p>Our website is not intended for individuals under the age of 18. We do not knowingly collect personal information from children. If we become aware that we have collected information from a child, we will delete such information promptly.</p>

          <h2>10. Changes to This Privacy Policy</h2>
          <p>We may update this Privacy Policy from time to time to reflect changes in our practices or applicable law. We will notify you of any significant changes by updating the "Last Updated" date at the top of this policy.</p>

          <h2>11. Contact Us</h2>
          <p>If you have questions or concerns about this Privacy Policy or our privacy practices, please contact us at:</p>
          <p>
            <strong>Geneva Wellness Institute</strong><br>
            Email: <a href="mailto:hello@genevawellness.com">hello@genevawellness.com</a><br>
            Phone: <a href="tel:+1234567890">(123) 456-7890</a>
          </p>
        </div>
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
