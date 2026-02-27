<?php
$page_title = 'Cookie Policy';
$page_subtitle = 'How we use cookies';
$breadcrumb = [
  ['label' => 'Home', 'url' => 'index.php'],
  ['label' => 'Cookie Policy', 'url' => null]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Cookie Policy for Geneva Wellness Institute. Learn how we use cookies on our website." />
  <meta name="robots" content="index, follow" />
  <title>Cookie Policy — Geneva Wellness Institute</title>

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

  <!-- ── HEADER ────────────────────────────────────────────── -->
  <?php include 'header.php'; ?>

  <!-- ── HERO SECTION ────────────────────────────────– -->
  <?php include 'hero-section.php'; ?>

  <main>
    <section class="section">
      <div class="container page-content">
        <div class="page-section">
          <h1>Cookie Policy</h1>
          <p><strong>Last Updated: December 2024</strong></p>

          <h2>1. What Are Cookies?</h2>
          <p>Cookies are small text files that are stored on your device when you visit our website. They contain information about your browsing preferences and help us improve your user experience. Cookies are used by most modern websites and are essential for many online services.</p>

          <h2>2. Types of Cookies We Use</h2>
          
          <h3>Essential Cookies</h3>
          <p>These cookies are necessary for the website to function properly. They enable basic features such as page navigation and access to secure areas. Without these cookies, the website may not work optimally.</p>

          <h3>Performance Cookies</h3>
          <p>These cookies collect information about how you use our website, including which pages you visit and if you encounter any errors. They do not collect personally identifiable information and are used only to improve website functionality.</p>

          <h3>Functional Cookies</h3>
          <p>These cookies enable the website to provide personalized features. They may store your preferences and selections to remember you on future visits.</p>

          <h3>Marketing Cookies</h3>
          <p>These cookies track your browsing habits and may be used by third-party advertising partners to display relevant advertisements on other websites. You can control these cookies through your browser settings.</p>

          <h2>3. How to Control Cookies</h2>
          <p>You have the right to choose whether or not to accept cookies. Most browsers allow you to:</p>
          <ul>
            <li>View the cookies stored on your device</li>
            <li>Delete cookies from your device</li>
            <li>Block cookies from being stored</li>
            <li>Disable cookies entirely</li>
          </ul>
          <p>However, disabling cookies may affect your ability to use certain features on our website.</p>

          <h2>4. Third-Party Cookies</h2>
          <p>We may use third-party services such as analytics and advertising platforms that place their own cookies on your device. These third parties have their own cookie policies and practices. We recommend reviewing their policies for more information.</p>

          <h2>5. Changes to This Cookie Policy</h2>
          <p>We may update this Cookie Policy from time to time. Any changes will be reflected on this page with an updated "Last Updated" date. Your continued use of the website constitutes acceptance of the updated policy.</p>

          <h2>6. Contact Us</h2>
          <p>If you have questions about our use of cookies or this Cookie Policy, please contact us at:</p>
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
