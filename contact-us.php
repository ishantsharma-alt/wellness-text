<?php 
$page_title = 'Get In Touch'; 
$page_subtitle = "We're Here to Help";

$form_submitted = false;
$form_message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name      = sanitize_input($_POST['name']      ?? '');
  $email     = sanitize_input($_POST['email']     ?? '');
  $phone     = sanitize_input($_POST['phone']     ?? '');
  $treatment = sanitize_input($_POST['treatment'] ?? '');
  $message   = sanitize_input($_POST['message']   ?? '');
  $agree     = isset($_POST['agree']);

  if (!empty($name) && !empty($email) && !empty($phone) && $agree) {
    $form_submitted = true;
    $form_message   = 'Thank you! We will contact you shortly to confirm your consultation.';
  }
}

function sanitize_input($input) {
  return htmlspecialchars(stripslashes(trim($input)), ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Get in touch with Geneva Wellness Institute for aesthetic clinic contact details, consultation bookings and treatment inquiries. schedule your appointment today" />
  <meta name="keywords" content="aesthetic clinic Alabang contact,aesthetic clinic near me,book aesthetic clinic appointment,aesthetic clinic consultation,contact aesthetic clinic Alabang,schedule aesthetic consultation,skin clinic contact details,aesthetic clinic phone number,visit aesthetic clinic today,aesthetic clinic near Alabang" />
  <meta name="robots" content="index, follow" />
  <meta property="og:title" content="Geneva Wellness Institute | Aesthetic Clinic Contact" />
  <meta property="og:description" content="Get in touch with our wellness experts. We're here to help." />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://genevawellness.com/contact-us" />
  <link rel="canonical" href="https://genevawellness.com/contact-us" />
  <title>Geneva Wellness Institute | Aesthetic Clinic Contact</title>

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

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="enhancements.css" />

  <style>
    /* ── CSS VARIABLES ─────────────────────────────── */
    :root {
      --gold:       #CAAE5F;
      --gold-light: #e0ca8a;
      --gold-dark:  #B8955C;
      --cream:      #FAF7F2;
      --ivory:      #fef9f3;
      --sand:       #e5ddd5;
      --cream-alt:  #f9f6f1;
      --dark:       #1a1a1a;
      --mid:        #444;
      --muted:      #777;
      --border:     rgba(202,174,95,0.2);
      --border-soft: #ede8df;
      --white:      #ffffff;
      --shadow-sm:  0 2px 12px rgba(0,0,0,.05);
      --shadow-md:  0 8px 32px rgba(0,0,0,.08);
      --shadow-lg:  0 20px 60px rgba(0,0,0,.10);
      --radius:     14px;
      --radius-sm:  8px;
      --transition: 0.3s cubic-bezier(.4,0,.2,1);
    }

    *, *::before, *::after { box-sizing: border-box; }

    body {
      font-family: 'Inter', sans-serif;
      color: var(--dark);
      background: var(--cream-alt);
      margin: 0;
    }

    /* ── INNER BANNER — light palette ──────────────── */
    .inner-banner {
      position: relative;
      padding: 100px 0 70px;
      overflow: hidden;
      text-align: center;
      background: linear-gradient(135deg, #fdeeda 0%, #f9f0e2 50%, #e5ddd5 100%);
    }
    .inner-banner::before {
      content: '';
      position: absolute;
      inset: 0;
      background:
        radial-gradient(ellipse 60% 80% at 80% 20%, rgba(202,174,95,0.15) 0%, transparent 60%),
        radial-gradient(ellipse 40% 60% at 10% 80%, rgba(253,238,218,0.5) 0%, transparent 50%);
      pointer-events: none;
    }
    .inner-banner::after {
      content: '';
      position: absolute;
      width: 400px;
      height: 400px;
      border-radius: 50%;
      border: 1px solid rgba(202,174,95,0.2);
      right: -80px;
      top: -80px;
      pointer-events: none;
    }
    .inner-banner-content h1 {
      font-family: 'Lora', serif;
      font-size: clamp(2.2rem, 5vw, 3.5rem);
      color: var(--dark);
      margin: 0 0 .5rem;
      letter-spacing: -.5px;
    }
    .inner-banner-subtitle {
      color: #666;
      font-size: 1.1rem;
      font-weight: 300;
      letter-spacing: .5px;
      margin: 0;
    }

    /* ── BREADCRUMB ────────────────────────────────── */
    .breadcrumb {
      display: block;
      padding-top: 20px !important;
      text-align: center;
      font-size: .85rem;
      color: var(--muted);
    }
    .breadcrumb a {
      color: var(--gold-dark);
      text-decoration: none;
      transition: color var(--transition);
    }
    .breadcrumb a:hover { color: var(--gold); }
    .breadcrumb span[aria-current] { color: var(--dark); font-weight: 500; }

    /* ── CONTAINER ─────────────────────────────────── */
    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 24px;
    }

    /* ── SECTION ───────────────────────────────────── */
    .section {
      padding: 80px 0;
      background: var(--ivory);
    }

    /* ── CONTACT LAYOUT ────────────────────────────── */
    .contact-layout {
      display: grid;
      grid-template-columns: 1fr 1.1fr;
      gap: 60px;
      align-items: start;
    }
    @media (max-width: 900px) {
      .contact-layout { grid-template-columns: 1fr; gap: 40px; }
    }

    /* ── CONTACT INFO ──────────────────────────────── */
    .contact-info-section h2 {
      font-family: 'Lora', serif;
      font-size: 2rem;
      color: var(--dark);
      margin: 0 0 .75rem;
    }
    .contact-info-grid {
      display: flex;
      flex-direction: column;
      gap: 18px;
    }
    .contact-info-card {
      display: grid;
      grid-template-columns: 52px 1fr;
      column-gap: 18px;
      align-items: start;
      background: var(--white);
      border: 1px solid var(--border-soft);
      border-radius: var(--radius);
      padding: 22px 24px;
      transition: box-shadow var(--transition), transform var(--transition), border-color var(--transition);
    }
    .contact-info-card:hover {
      box-shadow: 0 8px 30px rgba(202,174,95,0.15);
      transform: translateY(-3px);
      border-color: rgba(202,174,95,0.4);
    }
    .info-icon {
      width: 52px;
      height: 52px;
      background: linear-gradient(135deg, #fdeeda 0%, #e5ddd5 100%);
      border: 1px solid rgba(202,174,95,0.3);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.3rem;
      flex-shrink: 0;
    }
    .contact-info-card h3 {
      font-family: 'Lora', serif;
      font-size: 1rem;
      color: var(--dark);
      margin: 0 0 6px;
    }
    .contact-info-card p,
    .contact-info-card address {
      font-style: normal;
      font-size: .9rem;
      color: var(--mid);
      line-height: 1.7;
      margin: 0;
    }
    .contact-info-card a {
      color: var(--mid);
      text-decoration: none;
      transition: color var(--transition);
    }
    .contact-info-card a:hover { color: var(--gold-dark); }
    .contact-info-card small {
      display: block;
      margin-top: 4px;
      font-size: .78rem;
      color: var(--gold-dark);
      font-weight: 500;
    }

    /* ── FORM CONTAINER ────────────────────────────── */
    .form-container {
      background: var(--white);
      border-radius: var(--radius);
      box-shadow: 0 20px 60px rgba(202,174,95,0.12), 0 4px 20px rgba(0,0,0,0.06);
      border: 1px solid var(--border-soft);
      overflow: hidden;
    }

    /* Form header — warm cream gradient instead of red/gold */
    .form-header {
      background: linear-gradient(135deg, #fdeeda 0%, #f9f0e2 100%);
      border-bottom: 1px solid rgba(202,174,95,0.2);
      padding: 30px 36px;
    }
    .form-header h3 {
      font-family: 'Lora', serif;
      font-size: 1.45rem;
      color: var(--dark);
      margin: 0 0 6px;
    }
    .form-header p {
      color: #666;
      font-size: .88rem;
      margin: 0;
      line-height: 1.6;
    }

  
    @media (max-width: 540px) {
      .form-header  { padding: 24px 20px; }
    }

    .form-row {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 16px;
    }
    @media (max-width: 540px) {
      .form-row { grid-template-columns: 1fr; }
    }

    .form-group {
      display: flex;
      flex-direction: column;
      margin-bottom: 18px;
    }
    .form-group label {
      font-size: .8rem;
      font-weight: 600;
      color: var(--dark);
      letter-spacing: .4px;
      text-transform: uppercase;
      margin-bottom: 7px;
    }
    .form-group input,
    .form-group select,
    .form-group textarea {
      border: 1.5px solid var(--border-soft);
      border-radius: var(--radius-sm);
      padding: 11px 14px;
      font-size: .92rem;
      font-family: 'Inter', sans-serif;
      color: var(--dark);
      background: #fef9f3;
      transition: border-color var(--transition), box-shadow var(--transition);
      outline: none;
      width: 100%;
    }
    .form-group input:focus,
    .form-group select:focus,
    .form-group textarea:focus {
      border-color: var(--gold);
      box-shadow: 0 0 0 3px rgba(202,174,95,0.15);
      background: var(--white);
    }
    .form-group textarea { resize: vertical; min-height: 120px; }

    .form-group.checkbox {
      flex-direction: row;
      align-items: flex-start;
      gap: 10px;
      margin-bottom: 22px;
    }
    .form-group.checkbox input[type="checkbox"] {
      width: 18px;
      height: 18px;
      flex-shrink: 0;
      margin-top: 2px;
      accent-color: var(--gold-dark);
      cursor: pointer;
    }
    .form-group.checkbox label {
      font-size: .85rem;
      font-weight: 400;
      text-transform: none;
      letter-spacing: 0;
      color: var(--muted);
      line-height: 1.5;
      cursor: pointer;
    }

    /* ── SUBMIT BUTTON — gold instead of red ───────── */
    .btn {
      display: inline-block;
      font-family: 'Inter', sans-serif;
      font-weight: 600;
      font-size: .92rem;
      letter-spacing: .5px;
      text-decoration: none;
      border: none;
      border-radius: var(--radius-sm);
      cursor: pointer;
      transition: all var(--transition);
    }
    .btn-primary {
      background: linear-gradient(135deg, #CAAE5F 0%, #B8955C 100%);
      color: var(--white);
      padding: 14px 28px;
      box-shadow: 0 4px 18px rgba(202,174,95,0.3);
    }
    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 28px rgba(202,174,95,0.45);
      background: linear-gradient(135deg, #B8955C 0%, #CAAE5F 100%);
    }
    .btn-block { width: 100%; text-align: center; }

    .form-note {
      font-size: .78rem;
      color: var(--muted);
      text-align: center;
      margin: 14px 0 0;
      line-height: 1.5;
    }

    /* ── SUCCESS MESSAGE ───────────────────────────── */
    .form-success-message {
      background: linear-gradient(135deg, rgba(202,174,95,.12), rgba(202,174,95,.05));
      border: 1.5px solid rgba(202,174,95,0.4);
      border-radius: var(--radius-sm);
      padding: 16px 20px;
      color: var(--gold-dark);
      font-size: .92rem;
      margin: 0 36px 20px;
    }

    /* ── TRUSTED BY ────────────────────────────────── */
    .trusted-section {
      padding: 48px 0;
      background: var(--white);
      border-top: 1px solid var(--border-soft);
      border-bottom: 1px solid var(--border-soft);
    }
    .trusted-label {
      text-align: center;
      font-size: .78rem;
      font-weight: 700;
      letter-spacing: 2px;
      text-transform: uppercase;
      color: var(--muted);
      margin: 0 0 28px;
    }
    .trusted-logos {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-wrap: wrap;
      gap: 40px 56px;
    }
    .logo-item {
      color: #c0b49a;
      opacity: .75;
      transition: opacity var(--transition), color var(--transition);
      height: 36px;
      display: flex;
      align-items: center;
    }
    .logo-item svg { height: 100%; width: auto; max-width: 130px; }
    .logo-item:hover { opacity: 1; color: var(--gold-dark); }

    /* ── CONTACT CHANNELS ──────────────────────────── */
    .channels-section {
      padding: 72px 0;
      background: linear-gradient(135deg, #fef9f3 0%, #fdeeda 50%, #f9f6f1 100%);
    }
    .channels-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 24px;
    }
    @media (max-width: 1000px) { .channels-grid { grid-template-columns: repeat(2, 1fr); } }
    @media (max-width: 540px)  { .channels-grid { grid-template-columns: 1fr; } }

    .channel-card {
      background: var(--white);
      border: 1px solid var(--border-soft);
      border-radius: var(--radius);
      padding: 28px 24px;
      display: flex;
      flex-direction: column;
      gap: 10px;
      transition: box-shadow var(--transition), transform var(--transition), border-color var(--transition);
    }
    .channel-card:hover {
      box-shadow: 0 12px 40px rgba(202,174,95,0.15);
      transform: translateY(-4px);
      border-color: rgba(202,174,95,0.4);
    }
    .channel-icon {
      width: 50px;
      height: 50px;
      background: linear-gradient(135deg, #fdeeda 0%, #e5ddd5 100%);
      border: 1px solid rgba(202,174,95,0.3);
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--gold-dark);
      margin-bottom: 4px;
    }
    .channel-icon svg { width: 22px; height: 22px; }
    .channel-card h4 {
      font-family: 'Lora', serif;
      font-size: 1.05rem;
      color: var(--dark);
      margin: 0;
    }
    .channel-card p {
      font-size: .86rem;
      color: var(--muted);
      line-height: 1.6;
      margin: 0;
    }
    .channel-link {
      display: block;
      font-size: .86rem;
      font-weight: 600;
      color: var(--gold-dark);
      text-decoration: none;
      transition: color var(--transition);
      line-height: 1.5;
      word-break: break-all;
    }
    .channel-link:hover { color: var(--gold); }
    .channel-phones { display: flex; flex-direction: column; gap: 4px; }
    .channel-address { font-style: normal; display: flex; flex-direction: column; gap: 6px; }
    .channel-link-static { font-size: .84rem; color: var(--mid); line-height: 1.55; }

    /* ── MAP SECTION ───────────────────────────────── */
    .map-section { padding: 54px 0 80px; background: var(--cream-alt); }
    .map-section-heading {
      font-family: 'Lora', serif;
      font-size: 2rem;
      text-align: center;
      color: var(--dark);
      margin: 0 0 2rem;
    }
    .map-wrapper {
      position: relative;
      border-radius: var(--radius);
      overflow: hidden;
      box-shadow: 0 20px 60px rgba(202,174,95,0.12), 0 4px 20px rgba(0,0,0,0.06);
      border: 1px solid var(--border-soft);
    }
    /* Gold accent bar — no red */
    .map-wrapper::before {
      content: '';
      position: absolute;
      top: 0; left: 0; right: 0;
      height: 4px;
      background: linear-gradient(90deg, #CAAE5F 0%, #B8955C 100%);
      z-index: 1;
    }
    .map-wrapper iframe { display: block; width: 100%; height: 480px; border: 0; }

    /* ── BACK TO TOP ───────────────────────────────── */
    .back-to-top {
      position: fixed;
      bottom: 28px;
      right: 28px;
      width: 46px;
      height: 46px;
      border-radius: 50%;
      background: linear-gradient(135deg, #CAAE5F 0%, #B8955C 100%);
      color: var(--white);
      border: none;
      font-size: 1.1rem;
      cursor: pointer;
      box-shadow: 0 4px 18px rgba(202,174,95,.35);
      display: none;
      align-items: center;
      justify-content: center;
      transition: all var(--transition);
      z-index: 999;
    }
    .back-to-top:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 24px rgba(202,174,95,.5);
    }
    .back-to-top.visible { display: flex; }
  </style>
</head>
<body>

  <div class="cursor" id="cursor"></div>
  <div class="cursor-follower" id="cursor-follower"></div>

  <?php include 'header.php'; ?>
  <?php include 'hero-section.php'; ?>

  <main>

    <!-- ── CONTACT INFO & FORM ──────────────────────── -->
    <section class="section" id="contact-form">
      <div class="container">
        <div class="contact-layout">

          <!-- Left: Contact Info -->
          <div class="contact-info-section" data-aos="fade-right">
            <h2>Get In Touch</h2>
            <p style="color:#666; font-size:1.05rem; margin-bottom:2.5rem; line-height:1.7;">
              Have questions about our treatments? Want to schedule a consultation?
              We're here to help and look forward to connecting with you.
            </p>

            <div class="contact-info-grid">

              <div class="contact-info-card">
                <div class="info-icon"><i class="red-red fa-solid fa-location-dot"></i></div>
                <div>
                  <h3>Visit Us</h3>
                  <address>
                    <p>GF Vivere Hotel<br/>
                      5102 Bridgeway Ave.<br/>
                      Filinvest Corporate City<br/>
                      Alabang, Muntinlupa City<br/>
                      1780, Philippines
                    </p>
                  </address>
                </div>
              </div>

              <div class="contact-info-card">
                <div class="info-icon"><i class="red-red fa-solid fa-phone"></i></div>
                <div>
                  <h3>Call Us</h3>
                  <p>
                    <a href="tel:+639175551234">+63 917 555 1234</a><br/>
                    <a href="tel:+63245551234">(02) 4555 1234</a><br/>
                    <small>Mon–Sun, 11:00 am – 7:00 pm</small>
                  </p>
                </div>
              </div>

              <div class="contact-info-card">
                <div class="info-icon"><i class="red-red fa-solid fa-envelope"></i></div>
                <div>
                  <h3>Email Us</h3>
                  <p>
                    <a href="mailto:hello@genevawellness.com">hello@genevawellness.com</a><br/>
                    <a href="mailto:support@genevawellness.com">support@genevawellness.com</a><br/>
                    <small>Response within 24 hours</small>
                  </p>
                </div>
              </div>

            </div>
          </div>

          <!-- Right: Consultation Form -->
          <div class="contact-form-section" data-aos="fade-left">
            <div class="form-container">

              <div class="form-header">
                <h3>Schedule Your Consultation</h3>
                <p>Fill out the form below and our team will contact you within 24 hours to confirm your appointment.</p>
              </div>

              <?php if ($form_submitted): ?>
                <div class="form-success-message">
                  <strong><i class="red-red fa-solid fa-check"></i> <?php echo htmlspecialchars($form_message); ?></strong>
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
                      <option value="">Select a treatment</option>
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

    <!-- ── TRUSTED BY SECTION ──────────────────────── -->
    <section class="trusted-section">
      <div class="container">
        <p class="trusted-label" data-aos="fade-up">Trusted by the world's best companies</p>
        <div class="trusted-logos" data-aos="fade-up" data-aos-delay="100">
          <div class="logo-item">
            <svg viewBox="0 0 120 40" fill="none" xmlns="http://www.w3.org/2000/svg" aria-label="L'Oréal">
              <text x="0" y="30" font-family="Georgia,serif" font-size="26" font-weight="700" fill="currentColor">L'ORÉAL</text>
            </svg>
          </div>
          <div class="logo-item">
            <svg viewBox="0 0 80 40" fill="none" xmlns="http://www.w3.org/2000/svg" aria-label="P&G">
              <circle cx="20" cy="20" r="18" stroke="currentColor" stroke-width="2"/>
              <text x="8" y="26" font-family="Arial,sans-serif" font-size="16" font-weight="800" fill="currentColor">P&amp;G</text>
            </svg>
          </div>
          <div class="logo-item">
            <svg viewBox="0 0 120 40" fill="none" xmlns="http://www.w3.org/2000/svg" aria-label="Cutera">
              <text x="0" y="29" font-family="Arial,sans-serif" font-size="22" font-weight="700" letter-spacing="2" fill="currentColor">CUTERA</text>
            </svg>
          </div>
          <div class="logo-item">
            <svg viewBox="0 0 140 40" fill="none" xmlns="http://www.w3.org/2000/svg" aria-label="Estée Lauder">
              <text x="0" y="18" font-family="Georgia,serif" font-size="12" font-weight="600" fill="currentColor">ESTÉE</text>
              <text x="0" y="34" font-family="Georgia,serif" font-size="12" font-weight="600" fill="currentColor">LAUDER</text>
            </svg>
          </div>
          <div class="logo-item">
            <svg viewBox="0 0 60 40" fill="none" xmlns="http://www.w3.org/2000/svg" aria-label="Chanel">
              <text x="0" y="30" font-family="Georgia,serif" font-size="22" font-weight="700" letter-spacing="-1" fill="currentColor">CHANEL</text>
            </svg>
          </div>
        </div>
      </div>
    </section>

    <!-- ── CONTACT CHANNELS ─────────────────────────── -->
    <section class="channels-section">
      <div class="container">
        <div class="channels-grid">

          <div class="channel-card" data-aos="fade-up" data-aos-delay="0">
            <div class="channel-icon">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16" rx="2"/><polyline points="2,4 12,13 22,4"/></svg>
            </div>
            <h4>Email</h4>
            <p>Email us for inquiries or appointments. 24-hour reply.</p>
            <a href="mailto:geneva.institute23@gmail.com" class="channel-link">geneva.institute23@gmail.com</a>
          </div>

          <div class="channel-card" data-aos="fade-up" data-aos-delay="100">
            <div class="channel-icon">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
            </div>
            <h4>Live Chat</h4>
            <p>Chat with us live for instant support and answers to your questions.</p>
            <a href="#" class="channel-link" id="open-live-chat">Start new chat</a>
          </div>

          <div class="channel-card" data-aos="fade-up" data-aos-delay="200">
            <div class="channel-icon">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.62 1h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.6a16 16 0 0 0 6.07 6.07l.96-.96a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            </div>
            <h4>Phone</h4>
            <p>Call us directly for quick assistance and to book your next appointment.</p>
            <div class="channel-phones">
              <a href="tel:+639153960593" class="channel-link">Anne +63 915 396 0593</a>
              <a href="tel:+639667642452" class="channel-link">Claire +63 966 764 2452</a>
              <a href="tel:+639541595764" class="channel-link">Geraldine +63 954 159 5764</a>
            </div>
          </div>

          <div class="channel-card" data-aos="fade-up" data-aos-delay="300">
            <div class="channel-icon">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
            </div>
            <h4>Office</h4>
            <p>Visit us at our office. We look forward to welcoming you!</p>
            <address class="channel-address">
              <span class="channel-link-static"><strong>Located in:</strong> Vivere Hotel</span>
              <span class="channel-link-static"><strong>Address:</strong> 5012 Bridgeway Avenue Alabang, Filinvest City, Muntinlupa, 1781 Metro Manila, Philippines</span>
            </address>
          </div>

        </div>
      </div>
    </section>

    <!-- ── MAP SECTION ──────────────────────────────── -->
    <section class="map-section">
      <div class="container">
        <h2 class="map-section-heading" data-aos="fade-up">Find Us Here</h2>
        <div class="map-wrapper" data-aos="zoom-in">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d30912.77981367029!2d121.03887000000002!3d14.421544!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d1375df3e83f%3A0x787de966c90cfaae!2sGeneva%20Wellness%20Institute!5e0!3m2!1sen!2sil!4v1772097944332!5m2!1sen!2sil"
            width="100%"
            height="450"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            aria-label="Google Maps location of Geneva Wellness Institute"
          ></iframe>
        </div>
      </div>
    </section>

    <?php include 'footer.php'; ?>

  </main>

  <button class="back-to-top" id="back-to-top" aria-label="Back to top"><i class="red-red fa-solid fa-arrow-up"></i></button>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="components.js"></script>
  <script src="script.js"></script>
  <script src="enhancements.js"></script>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      AOS.init({ once: true, duration: 700, offset: 60 });
      const btn = document.getElementById('back-to-top');
      window.addEventListener('scroll', () => {
        btn.classList.toggle('visible', window.scrollY > 400);
      });
      btn.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
    });
  </script>
</body>
</html>