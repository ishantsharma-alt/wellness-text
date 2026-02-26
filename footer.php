<?php
/**
 * footer.php — Geneva Wellness Institute
 * Enhanced footer: 7 featured treatments, social icons, clinic hours
 * Usage: <?php include 'footer.php'; ?>
 */
?>

<!-- ── CTA BAND ─────────────────────────────────────── -->
<section class="section cta-section" style="background: linear-gradient(135deg, #B00E09 0%, #CAAE5F 100%);">
  <div class="container cta-content">
    <div>
      <h2 style="color: white; margin-bottom: 1rem;">Ready to Transform Your Wellness Journey?</h2>
      <p style="color: rgba(255,255,255,0.95); font-size: 1.1rem; margin-bottom: 0;">Schedule a free consultation with our experts today. Let's discuss your goals and create a personalized treatment plan.</p>
    </div>
    <button class="btn btn-white popup-trigger" data-popup="consultation-popup">Book Your Consultation</button>
  </div>
</section>

<!-- ════════════════════════════════════════════════════
     FOOTER STYLES
════════════════════════════════════════════════════ -->
<style>
  /* ── ROOT ── */
  .gwi-footer {
    background: linear-gradient(180deg, #0f0404 0%, #1a0808 60%, #140505 100%);
    color: #fff;
    font-family: 'Inter', sans-serif;
    position: relative;
    overflow: hidden;
  }
  .gwi-footer::before {
    content: '';
    position: absolute; inset: 0; pointer-events: none;
    background:
      radial-gradient(circle at 8% 18%, rgba(201,169,110,0.055) 0%, transparent 38%),
      radial-gradient(circle at 92% 82%, rgba(176,14,9,0.07) 0%, transparent 38%);
  }
  .gwi-footer::after {
    content: '';
    position: absolute; inset: 0; pointer-events: none; z-index: 0;
    background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M30 0v60M0 30h60' stroke='rgba(201,169,110,0.025)' stroke-width='0.4'/%3E%3C/svg%3E");
    background-size: 60px 60px;
  }

  /* ── TOP BADGE BAR ── */
  .gwi-footer-topbar {
    position: relative; z-index: 1;
    border-bottom: 1px solid rgba(201,169,110,0.1);
    padding: 0.85rem 0;
  }
  .gwi-footer-topbar-inner {
    max-width: 1360px; margin: 0 auto; padding: 0 2rem;
    display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 0.75rem;
  }
  .gwi-footer-tagline {
    font-size: 0.7rem; letter-spacing: 0.22em; text-transform: uppercase;
    color: rgba(201,169,110,0.6); font-weight: 600;
  }
  .gwi-footer-badges { display: flex; align-items: center; gap: 1.8rem; }
  .gwi-footer-badge {
    display: flex; align-items: center; gap: 0.38rem;
    font-size: 0.69rem; color: rgba(255,255,255,0.32); letter-spacing: 0.03em;
  }
  .gwi-footer-badge span { font-size: 0.82rem; }

  /* ── MAIN GRID ── */
  .gwi-footer-body { position: relative; z-index: 1; padding: 4rem 0 3rem; }
  .gwi-footer-grid {
    max-width: 1360px; margin: 0 auto; padding: 0 2rem;
    display: grid;
    grid-template-columns: 1.5fr 1fr 1.1fr 1fr;
    gap: 3rem;
  }

  /* ── COLUMN HEADING ── */
  .gwi-footer-col-title {
    font-family: 'Lora', serif;
    font-size: 0.95rem; font-weight: 600; color: #c9a96e;
    margin: 0 0 1.4rem; padding-bottom: 0.7rem; position: relative;
  }
  .gwi-footer-col-title::after {
    content: ''; position: absolute; bottom: 0; left: 0;
    width: 26px; height: 1.5px;
    background: linear-gradient(to right, #c9a96e, transparent); border-radius: 2px;
  }

  /* ── BRAND COLUMN ── */
  .gwi-footer-brand { display: flex; flex-direction: column; gap: 1.45rem; }
  .gwi-footer-logo-link { display: inline-flex; align-items: center; gap: 0.85rem; text-decoration: none; }
  .gwi-footer-logo-mark {
    width: 46px; height: 46px; border-radius: 50%; flex-shrink: 0;
    background: linear-gradient(135deg, #6b1a1a, #c9a96e);
    display: flex; align-items: center; justify-content: center;
    box-shadow: 0 4px 18px rgba(201,169,110,0.22);
  }
  .gwi-footer-logo-mark svg { width: 30px; height: 30px; }
  .gwi-footer-logo-text .fn {
    display: block; font-family: 'Lora', serif;
    font-size: 1.18rem; font-weight: 600; color: #c9a96e; line-height: 1; margin-bottom: 2px;
  }
  .gwi-footer-logo-text .fs {
    display: block; font-size: 0.6rem; letter-spacing: 0.2em;
    text-transform: uppercase; color: rgba(255,255,255,0.28);
  }
  .gwi-footer-desc { font-size: 0.845rem; color: rgba(255,255,255,0.44); line-height: 1.84; margin: 0; }

  .gwi-footer-contacts { display: flex; flex-direction: column; gap: 0.65rem; }
  .gwi-footer-contact-row {
    display: flex; align-items: flex-start; gap: 0.55rem;
    font-size: 0.8rem; color: rgba(255,255,255,0.42); line-height: 1.5;
  }
  .gwi-footer-contact-row .ico { font-size: 0.85rem; flex-shrink: 0; margin-top: 0.05rem; }
  .gwi-footer-contact-row a { color: rgba(255,255,255,0.42); text-decoration: none; transition: color 0.25s; }
  .gwi-footer-contact-row a:hover { color: #c9a96e; }

  /* Social */
  .gwi-footer-soc-label {
    font-size: 0.61rem; letter-spacing: 0.2em; text-transform: uppercase;
    color: rgba(201,169,110,0.52); font-weight: 700; margin-bottom: 0.65rem;
  }
  .gwi-footer-socials { display: flex; gap: 0.5rem; flex-wrap: wrap; }
  .gwi-fsoc {
    width: 38px; height: 38px; border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    border: 1px solid rgba(201,169,110,0.16);
    background: rgba(255,255,255,0.04);
    text-decoration: none; overflow: hidden; flex-shrink: 0;
    transition: all 0.32s cubic-bezier(0.34, 1.56, 0.64, 1);
  }
  .gwi-fsoc svg { width: 18px; height: 18px; }
  .gwi-fsoc:hover { transform: translateY(-4px) scale(1.1); border-color: transparent; }
  .gwi-fsoc.fb:hover { background: #1877F2; box-shadow: 0 6px 18px rgba(24,119,242,0.42); }
  .gwi-fsoc.ig:hover {
    background: linear-gradient(135deg,#f09433,#e6683c,#dc2743,#cc2366,#bc1888);
    box-shadow: 0 6px 18px rgba(220,39,67,0.38);
  }
  .gwi-fsoc.yt:hover { background: #FF0000; box-shadow: 0 6px 18px rgba(255,0,0,0.38); }
  .gwi-fsoc.tk:hover { background: #000; box-shadow: 0 6px 18px rgba(37,244,238,0.28); }

  /* ── NAV LISTS ── */
  .gwi-footer-nav { list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 0.5rem; }
  .gwi-footer-nav li a {
    font-size: 0.835rem; color: rgba(255,255,255,0.44);
    text-decoration: none; display: flex; align-items: center; gap: 0.4rem;
    padding: 0.06rem 0; transition: all 0.25s;
  }
  .gwi-footer-nav li a .arr {
    font-size: 0.62rem; color: #c9a96e;
    opacity: 0; transform: translateX(-4px); transition: all 0.25s;
  }
  .gwi-footer-nav li a:hover { color: rgba(255,255,255,0.82); padding-left: 5px; }
  .gwi-footer-nav li a:hover .arr { opacity: 1; transform: translateX(0); }

  /* ── HOURS ── */
  .gwi-footer-hours { display: flex; flex-direction: column; }
  .gwi-footer-hour-row {
    display: flex; justify-content: space-between; align-items: center;
    font-size: 0.795rem; padding: 0.46rem 0;
    border-bottom: 1px solid rgba(255,255,255,0.04);
  }
  .gwi-footer-hour-row:last-of-type { border-bottom: none; }
  .fhd { color: rgba(255,255,255,0.36); }
  .fht { color: rgba(255,255,255,0.66); font-weight: 500; }
  .fht.closed { color: rgba(176,14,9,0.65); }
  .gwi-footer-map-link {
    display: inline-flex; align-items: center; gap: 0.4rem;
    font-size: 0.74rem; color: #c9a96e; font-weight: 600; letter-spacing: 0.05em;
    text-decoration: none; margin-top: 1rem; transition: gap 0.25s, color 0.25s;
  }
  .gwi-footer-map-link:hover { gap: 0.65rem; color: #e8d5b0; }

  /* ── DIVIDER ── */
  .gwi-footer-divider { position: relative; z-index: 1; max-width: 1360px; margin: 0 auto; padding: 0 2rem; }
  .gwi-footer-divider hr {
    border: none; height: 1px;
    background: linear-gradient(to right, transparent, rgba(201,169,110,0.18), rgba(201,169,110,0.18), transparent);
  }

  /* ── BOTTOM BAR ── */
  .gwi-footer-bottom { position: relative; z-index: 1; padding: 1.55rem 0; }
  .gwi-footer-bottom-inner {
    max-width: 1360px; margin: 0 auto; padding: 0 2rem;
    display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 1rem;
  }
  .gwi-footer-copy { font-size: 0.77rem; color: rgba(255,255,255,0.27); margin: 0; }
  .gwi-footer-copy strong { color: rgba(201,169,110,0.52); font-weight: 600; }
  .gwi-footer-legal { display: flex; gap: 1.5rem; flex-wrap: wrap; }
  .gwi-footer-legal a { font-size: 0.73rem; color: rgba(255,255,255,0.27); text-decoration: none; transition: color 0.25s; }
  .gwi-footer-legal a:hover { color: #c9a96e; }

  /* ── RESPONSIVE ── */
  @media (max-width: 1100px) {
    .gwi-footer-grid { grid-template-columns: 1fr 1fr; gap: 2.5rem; }
  }
  @media (max-width: 640px) {
    .gwi-footer-grid { grid-template-columns: 1fr; gap: 2rem; padding: 0 1.25rem; }
    .gwi-footer-topbar-inner { padding: 0 1.25rem; }
    .gwi-footer-badges { display: none; }
    .gwi-footer-divider { padding: 0 1.25rem; }
    .gwi-footer-bottom-inner { padding: 0 1.25rem; flex-direction: column; text-align: center; }
    .gwi-footer-legal { justify-content: center; }
    .gwi-footer-body { padding: 2.5rem 0 2rem; }
  }
</style>

<!-- ════════════════════════════════════════════════════
     FOOTER HTML
════════════════════════════════════════════════════ -->
<footer class="gwi-footer" id="site-footer">

  <!-- Top bar -->
  <div class="gwi-footer-topbar">
    <div class="gwi-footer-topbar-inner">
      <span class="gwi-footer-tagline">✦ Excellence in Aesthetic &amp; Wellness Care ✦</span>
      <div class="gwi-footer-badges">
        <div class="gwi-footer-badge"><span>🏅</span> Certified Practitioners</div>
        <div class="gwi-footer-badge"><span>⚕️</span> Medical Grade Treatments</div>
        <div class="gwi-footer-badge"><span>🌟</span> Award-Winning Clinic</div>
      </div>
    </div>
  </div>

  <!-- Main body -->
  <div class="gwi-footer-body">
    <div class="gwi-footer-grid">

      <!-- ── COL 1: BRAND ── -->
      <div class="gwi-footer-brand">

        <a href="index.php" class="gwi-footer-logo-link">
          <img src="img/geneva-logo.svg">
        </a>

        <p class="gwi-footer-desc">
          Transformative aesthetic and wellness treatments designed for your unique beauty and confidence.
          We combine science, technology, and artistry to help you look and feel your very best.
        </p>

        <div class="gwi-footer-contacts">
          <div class="gwi-footer-contact-row">
            <span class="ico">📞</span>
            <a href="tel:+1234567890">(123) 456-7890</a>
          </div>
          <div class="gwi-footer-contact-row">
            <span class="ico">✉️</span>
            <a href="mailto:hello@genevawellness.com">hello@genevawellness.com</a>
          </div>
          <div class="gwi-footer-contact-row">
            <span class="ico">📍</span>
            <span>123 Wellness Ave, Geneva District</span>
          </div>
        </div>

        <!-- Social Icons -->
        <div>
          <div class="gwi-footer-soc-label">Follow Us</div>
          <div class="gwi-footer-socials">

            <!-- Facebook -->
            <a href="https://www.facebook.com/genevawellnessinstitute"
               target="_blank" rel="noopener" class="gwi-fsoc fb" aria-label="Facebook">
              <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 12C0 18.6274 5.37258 24 12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12Z" fill="#1877F2"/>
                <path d="M18 12C18 8.7 15.3 6 12 6C8.7 6 6 8.7 6 12C6 15 8.175 17.475 11.025 17.925V13.725H9.525V12H11.025V10.65C11.025 9.15 11.925 8.325 13.275 8.325C13.95 8.325 14.625 8.475 14.625 8.475V9.975H13.875C13.125 9.975 12.9 10.425 12.9 10.875V12H14.55L14.25 13.725H12.825V18C15.825 17.55 18 15 18 12Z" fill="white"/>
              </svg>
            </a>

            <!-- Instagram -->
            <a href="https://www.instagram.com/genevawellnessinstitute/"
               target="_blank" rel="noopener" class="gwi-fsoc ig" aria-label="Instagram">
              <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 12C0 18.6274 5.37258 24 12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12Z" fill="#F00073"/>
                <path d="M12 6.9C13.65 6.9 13.875 6.9 14.55 6.9C15.15 6.9 15.45 7.05 15.675 7.125C15.975 7.275 16.2 7.35 16.425 7.575C16.65 7.8 16.8 8.025 16.875 8.325C16.95 8.55 17.025 8.85 17.1 9.45C17.1 10.125 17.1 10.275 17.1 12C17.1 13.725 17.1 13.875 17.1 14.55C17.1 15.15 16.95 15.45 16.875 15.675C16.725 15.975 16.65 16.2 16.425 16.425C16.2 16.65 15.975 16.8 15.675 16.875C15.45 16.95 15.15 17.025 14.55 17.1C13.875 17.1 13.725 17.1 12 17.1C10.275 17.1 10.125 17.1 9.45 17.1C8.85 17.1 8.55 16.95 8.325 16.875C8.025 16.725 7.8 16.65 7.575 16.425C7.35 16.2 7.2 15.975 7.125 15.675C7.05 15.45 6.975 15.15 6.9 14.55C6.9 13.875 6.9 13.725 6.9 12C6.9 10.275 6.9 10.125 6.9 9.45C6.9 8.85 7.05 8.55 7.125 8.325C7.275 8.025 7.35 7.8 7.575 7.575C7.8 7.35 8.025 7.2 8.325 7.125C8.55 7.05 8.85 6.975 9.45 6.9C10.125 6.9 10.35 6.9 12 6.9ZM12 5.775C10.275 5.775 10.125 5.775 9.45 5.775C8.775 5.775 8.325 5.925 7.95 6.075C7.575 6.225 7.2 6.45 6.825 6.825C6.45 7.2 6.3 7.5 6.075 7.95C5.925 8.325 5.85 8.775 5.775 9.45C5.775 10.125 5.775 10.35 5.775 12C5.775 13.725 5.775 13.875 5.775 14.55C5.775 15.225 5.925 15.675 6.075 16.05C6.225 16.425 6.45 16.8 6.825 17.175C7.2 17.55 7.5 17.7 7.95 17.925C8.325 18.075 8.775 18.15 9.45 18.225C10.125 18.225 10.35 18.225 12 18.225C13.65 18.225 13.875 18.225 14.55 18.225C15.225 18.225 15.675 18.075 16.05 17.925C16.425 17.775 16.8 17.55 17.175 17.175C17.55 16.8 17.7 16.5 17.925 16.05C18.075 15.675 18.15 15.225 18.225 14.55C18.225 13.875 18.225 13.65 18.225 12C18.225 10.35 18.225 10.125 18.225 9.45C18.225 8.775 18.075 8.325 17.925 7.95C17.775 7.575 17.55 7.2 17.175 6.825C16.8 6.45 16.5 6.3 16.05 6.075C15.675 5.925 15.225 5.85 14.55 5.775C13.875 5.775 13.725 5.775 12 5.775Z" fill="white"/>
                <path d="M12 8.775C10.2 8.775 8.775 10.2 8.775 12C8.775 13.8 10.2 15.225 12 15.225C13.8 15.225 15.225 13.8 15.225 12C15.225 10.2 13.8 8.775 12 8.775ZM12 14.1C10.875 14.1 9.9 13.2 9.9 12C9.9 10.875 10.8 9.9 12 9.9C13.125 9.9 14.1 10.8 14.1 12C14.1 13.125 13.125 14.1 12 14.1Z" fill="white"/>
                <path d="M15.3 9.45C15.7142 9.45 16.05 9.11421 16.05 8.7C16.05 8.28579 15.7142 7.95 15.3 7.95C14.8858 7.95 14.55 8.28579 14.55 8.7C14.55 9.11421 14.8858 9.45 15.3 9.45Z" fill="white"/>
              </svg>
            </a>

            <!-- YouTube -->
            <a href="https://www.youtube.com/@GenevaWellnessInstitute"
               target="_blank" rel="noopener" class="gwi-fsoc yt" aria-label="YouTube">
              <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 12C0 18.6274 5.37258 24 12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12Z" fill="#FF0000"/>
                <path d="M17.7 9.075C17.55 8.55 17.175 8.175 16.65 8.025C15.75 7.8 11.925 7.8 11.925 7.8C11.925 7.8 8.175 7.8 7.2 8.025C6.675 8.175 6.3 8.55 6.15 9.075C6 10.05 6 12 6 12C6 12 6 13.95 6.225 14.925C6.375 15.45 6.75 15.825 7.275 15.975C8.175 16.2 12 16.2 12 16.2C12 16.2 15.75 16.2 16.725 15.975C17.25 15.825 17.625 15.45 17.775 14.925C18 13.95 18 12 18 12C18 12 18 10.05 17.7 9.075ZM10.8 13.8V10.2L13.95 12L10.8 13.8Z" fill="white"/>
              </svg>
            </a>

            <!-- TikTok -->
            <a href="https://www.tiktok.com/@genevawellnessinstitute"
               target="_blank" rel="noopener" class="gwi-fsoc tk" aria-label="TikTok">
              <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 12C0 5.37258 5.37258 0 12 0C18.6274 0 24 5.37258 24 12C24 18.6274 18.6274 24 12 24C5.37258 24 0 18.6274 0 12Z" fill="black"/>
                <path d="M10.8738 10.7252V10.2581C10.7137 10.2367 10.551 10.2233 10.383 10.2233C8.37977 10.2207 6.75 11.8518 6.75 13.8594C6.75 15.0901 7.3635 16.1793 8.30242 16.8387C7.69692 16.19 7.32615 15.317 7.32615 14.3613C7.32615 12.3831 8.91058 10.7706 10.8738 10.7252Z" fill="#25F4EE"/>
                <path d="M10.962 16.0218C11.8556 16.0218 12.5865 15.309 12.6185 14.4227L12.6212 6.50189H14.0669C14.0375 6.33904 14.0215 6.17086 14.0215 6H12.0477L12.045 13.9208C12.013 14.8071 11.2821 15.5199 10.3885 15.5199C10.1111 15.5199 9.84974 15.4505 9.61768 15.3277C9.91642 15.7468 10.4072 16.0218 10.962 16.0218Z" fill="#25F4EE"/>
                <path d="M16.7689 9.1902V8.74973C16.2167 8.74973 15.7046 8.58687 15.2725 8.30388C15.6566 8.74439 16.1767 9.06476 16.7689 9.1902Z" fill="#25F4EE"/>
                <path d="M15.2723 8.30388C14.8508 7.82069 14.5975 7.19066 14.5975 6.50189H14.0693C14.2053 7.25473 14.6535 7.90079 15.2723 8.30388Z" fill="#FE2C55"/>
                <path d="M10.3857 12.1962C9.47076 12.1962 8.72656 12.941 8.72656 13.8567C8.72656 14.4948 9.08932 15.05 9.61746 15.3277C9.42008 15.0554 9.30272 14.7217 9.30272 14.3586C9.30272 13.4429 10.0469 12.6981 10.9618 12.6981C11.1326 12.6981 11.2979 12.7274 11.4526 12.7755V10.7573C11.2926 10.7359 11.1299 10.7225 10.9618 10.7225C10.9325 10.7225 10.9058 10.7252 10.8765 10.7252V12.2736C10.7191 12.2255 10.5564 12.1962 10.3857 12.1962Z" fill="#FE2C55"/>
                <path d="M16.7685 9.19019V10.7252C15.7443 10.7252 14.7947 10.3969 14.0211 9.84157V13.8594C14.0211 15.8643 12.3914 17.4981 10.3855 17.4981C9.61193 17.4981 8.89174 17.2525 8.30225 16.8387C8.96642 17.5515 9.91334 18 10.9616 18C12.9648 18 14.5973 16.3688 14.5973 14.3613V10.3435C15.3708 10.8988 16.3204 11.2271 17.3447 11.2271V9.25161C17.1446 9.25161 16.9526 9.23023 16.7685 9.19019Z" fill="#FE2C55"/>
                <path d="M14.0213 13.8594V9.84158C14.7949 10.3969 15.7444 10.7252 16.7687 10.7252V9.1902C16.1766 9.06475 15.6564 8.74439 15.2723 8.30388C14.6535 7.90079 14.208 7.25473 14.0666 6.50189H12.6209L12.6183 14.4227C12.5863 15.309 11.8554 16.0218 10.9618 16.0218C10.407 16.0218 9.91887 15.7468 9.61479 15.3304C9.08664 15.05 8.72388 14.4975 8.72388 13.8594C8.72388 12.9437 9.46808 12.1989 10.383 12.1989C10.5537 12.1989 10.7191 12.2282 10.8738 12.2763V10.7279C8.9106 10.7706 7.32617 12.3831 7.32617 14.3613C7.32617 15.317 7.69694 16.1873 8.30243 16.8387C8.89192 17.2525 9.61212 17.4981 10.3857 17.4981C12.3889 17.4981 14.0213 15.8643 14.0213 13.8594Z" fill="white"/>
              </svg>
            </a>

          </div>
        </div>

      </div><!-- /col 1 brand -->


      <!-- ── COL 2: QUICK LINKS ── -->
      <div>
        <h4 class="gwi-footer-col-title">Quick Links</h4>
        <ul class="gwi-footer-nav">
          <li><a href="index.php"><span class="arr">›</span> Home</a></li>
          <li><a href="about-us.php"><span class="arr">›</span> About Us</a></li>
          <li><a href="treatments.php"><span class="arr">›</span> All Treatments</a></li>
          <li><a href="gallery.php"><span class="arr">›</span> Gallery</a></li>
          <li><a href="testimonials.php"><span class="arr">›</span> Testimonials</a></li>
          <li><a href="blog.php"><span class="arr">›</span> Blog</a></li>
          <li><a href="contact-us.php"><span class="arr">›</span> Contact Us</a></li>
        </ul>
      </div>


      <!-- ── COL 3: TREATMENTS — 7 items only ── -->
      <div>
        <h4 class="gwi-footer-col-title">Treatments</h4>
        <ul class="gwi-footer-nav">
          <li><a href="treatments.php#hydrafacial"><span class="arr">›</span> HYDRA 7D</a></li>
          <li><a href="treatments.php#co2"><span class="arr">›</span> CO2 Laser</a></li>
          <li><a href="treatments.php#carbon"><span class="arr">›</span> Carbon Laser</a></li>
          <li><a href="treatments.php#pico"><span class="arr">›</span> Pico Laser</a></li>
          <li><a href="treatments.php#exilis-face"><span class="arr">›</span> Exilis Face &amp; Neck</a></li>
          <li><a href="treatments.php#cryotherapy"><span class="arr">›</span> Cryotherapy</a></li>
          <li><a href="treatments.php#hifu"><span class="arr">›</span> HIFU</a></li>
        </ul>
      </div>


      <!-- ── COL 4: CLINIC HOURS ── -->
      <div>
        <h4 class="gwi-footer-col-title">Clinic Hours</h4>
        <div class="gwi-footer-hours">
          <div class="gwi-footer-hour-row"><span class="fhd">Monday</span>   <span class="fht">9:00 AM – 6:00 PM</span></div>
          <div class="gwi-footer-hour-row"><span class="fhd">Tuesday</span>  <span class="fht">9:00 AM – 6:00 PM</span></div>
          <div class="gwi-footer-hour-row"><span class="fhd">Wednesday</span><span class="fht">9:00 AM – 6:00 PM</span></div>
          <div class="gwi-footer-hour-row"><span class="fhd">Thursday</span> <span class="fht">9:00 AM – 6:00 PM</span></div>
          <div class="gwi-footer-hour-row"><span class="fhd">Friday</span>   <span class="fht">9:00 AM – 6:00 PM</span></div>
          <div class="gwi-footer-hour-row"><span class="fhd">Saturday</span> <span class="fht">10:00 AM – 4:00 PM</span></div>
          <div class="gwi-footer-hour-row"><span class="fhd">Sunday</span>   <span class="fht closed">Closed</span></div>
        </div>
        <a href="https://maps.app.goo.gl/neNdyjEWcqyL7R2aA" target="_blank" rel="noopener" class="gwi-footer-map-link">
          📍 Get Directions →
        </a>
      </div>

    </div><!-- /gwi-footer-grid -->
  </div><!-- /gwi-footer-body -->

  <!-- Gold gradient divider -->
  <div class="gwi-footer-divider"><hr /></div>

  <!-- Bottom bar -->
  <div class="gwi-footer-bottom">
    <div class="gwi-footer-bottom-inner">
      <p class="gwi-footer-copy">
        &copy; <?php echo date('Y'); ?> <strong>Geneva Wellness Institute</strong>. All rights reserved.
      </p>
      <nav class="gwi-footer-legal" aria-label="Legal links">
        <a href="privacy-policy.php">Privacy Policy</a>
        <a href="terms.php">Terms of Service</a>
        <a href="cookie-policy.php">Cookie Policy</a>
        <a href="sitemap.php">Sitemap</a>
      </nav>
    </div>
  </div>

</footer><!-- /gwi-footer -->


<!-- ════════════════════════════════════════════════════
     CONSULTATION POPUP
════════════════════════════════════════════════════ -->
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
            <option value="">Select a treatment</option>
            <optgroup label="Face &amp; Skin">
              <option>HYDRA 7D</option>
              <option>HIFU Non-Surgical Facelift</option>
              <option>CO2 Laser Therapy</option>
              <option>Pico Laser</option>
              <option>Carbon Laser Peel</option>
              <option>Exilis Face &amp; Neck</option>
              <option>Intimate Whitening</option>
            </optgroup>
            <optgroup label="Body &amp; Contouring">
              <option>Cryotherapy</option>
              <option>EMS Muscle Stimulation</option>
              <option>Exilis Body Contouring</option>
              <option>Laser Hair Removal</option>
            </optgroup>
            <optgroup label="Hair &amp; Scalp">
              <option>Hair Restoration</option>
              <option>Flaky Scalp Therapy</option>
              <option>Scalp Psoriasis Therapy</option>
            </optgroup>
            <option>Other</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="popup-message">Message or Questions</label>
        <textarea id="popup-message" name="message"
                  placeholder="Tell us about your goals or ask any questions..." rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Request Consultation</button>
    </form>
  </div>
</div>