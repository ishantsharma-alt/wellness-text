<?php
$page_title = 'Terms of Service';
$page_subtitle = 'Our terms and conditions';
$breadcrumb = [
  ['label' => 'Home', 'url' => 'index.php'],
  ['label' => 'Terms of Service', 'url' => null]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Terms of Service for Geneva Wellness Institute. Read our terms and conditions for using our website and services." />
  <meta name="robots" content="index, follow" />
  <title>Terms of Service — Geneva Wellness Institute</title>

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
          <h1>Terms of Service</h1>
          <p><strong>Last Updated: December 2024</strong></p>

          <h2>1. Agreement to Terms</h2>
          <p>These Terms of Service constitute a legally binding agreement between you and Geneva Wellness Institute ("Company," "we," "us," or "our"). By accessing and using this website, you accept and agree to be bound by and comply with these terms and our Privacy Policy.</p>

          <h2>2. Intellectual Property Rights</h2>
          <p>Unless otherwise stated, Geneva Wellness Institute owns the intellectual property rights for all material on this website. All intellectual property rights are reserved. You may view and print pages from the website for personal use, subject to restrictions set in these terms and conditions.</p>

          <h2>3. User Responsibilities</h2>
          <p>You agree not to:</p>
          <ul>
            <li>Reproduce, duplicate, copy, or exploit material on this website for commercial purposes</li>
            <li>Transmit obscene, abusive, defamatory, or otherwise illegal material</li>
            <li>Disrupt the normal flow of dialogue within our website</li>
            <li>Conduce any form of harassment or abuse</li>
            <li>Attempt to gain unauthorized access to systems or data</li>
          </ul>

          <h2>4. Medical Disclaimer</h2>
          <p>Information provided on our website is for educational purposes only and does not constitute medical advice. Geneva Wellness Institute does not provide medical diagnoses or treatment recommendations. Always consult with a qualified healthcare professional before undergoing any treatment.</p>

          <h2>5. Treatment and Consultation Terms</h2>
          <p>All treatments and consultations are subject to the following:</p>
          <ul>
            <li>Clients must be 18 years or older to consent to treatments</li>
            <li>Clients must disclose all relevant medical conditions and medications</li>
            <li>A consultation is required before proceeding with most treatments</li>
            <li>Our professionals reserve the right to decline treatment if deemed unsafe</li>
            <li>Results may vary based on individual factors</li>
          </ul>

          <h2>6. Cancellation and Refund Policy</h2>
          <p>Cancellations must be made at least 48 hours in advance to avoid cancellation fees. Refund requests must be submitted within 30 days of service. Our team will evaluate each request on a case-by-case basis.</p>

          <h2>7. Limitation of Liability</h2>
          <p>In no event shall Geneva Wellness Institute, its owners, employees, or agents be liable for any damages (including, without limitation, indirect, incidental, special, or consequential damages) arising from your use of or inability to use the website or services.</p>

          <h2>8. Indemnification</h2>
          <p>You agree to indemnify and hold harmless Geneva Wellness Institute from any claims, damages, costs, or expenses arising from your violation of these terms or your misuse of the website.</p>

          <h2>9. Modification of Terms</h2>
          <p>We reserve the right to modify these terms at any time. Your continued use of the website following any changes constitutes your acceptance of the new terms.</p>

          <h2>10. Governing Law</h2>
          <p>These Terms of Service are governed by and construed in accordance with the laws of the jurisdiction in which Geneva Wellness Institute operates, and you irrevocably submit to the exclusive jurisdiction of the courts in that location.</p>

          <h2>11. Severability</h2>
          <p>If any provision of these terms is found to be invalid or unenforceable, such provision shall be struck, and the remaining provisions shall remain in full force and effect.</p>

          <h2>12. Contact Information</h2>
          <p>If you have questions about these Terms of Service, please contact us at:</p>
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
