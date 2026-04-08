<?php
/**
 * ============================================================
 *  Geneva Wellness Institute — Popup Booking Component (All-in-One)
 *  File: popup-booking.php
 *
 *  HOW TO USE — just ONE line before </body> on every page:
 *    <?php require_once 'popup-booking.php'; ?>
 *
 *  To open from any button/link, add this attribute:
 *    data-bk-open="direct"        → opens Direct Booking tab
 *    data-bk-open="consultation"  → opens Consultation tab
 *
 *  Via JavaScript anywhere:
 *    BookingPopup.open('direct');
 *    BookingPopup.open('consultation');
 * ============================================================
 */

/* ── Treatments list (edit freely) ───────────────────────── */
$bk_treatments = [
  'Face' => [
    '7D Hifu Anti-Aging (Per Area)',
    'Pico Laser',
    'CO2 Laser',
    'Exilis Pro',
  ],
  'Body' => [
    'Cryo Belly',
    'EMSCULPT',
    'Excimer RX Laser (Per Area)',
    'Arm Slimming',
  ],
  'Hair & Scalp' => [
    'Advanced Hairloss Solution',
    'Scalp Psoriasis Therapy',
    'Dandruff Scalp Solution',
  ],
];

/* ── Helper: grouped <select> ─────────────────────────────── */
function bk_select(string $id, array $groups): string {
  $html = '<select id="'.$id.'" name="treatment" class="form-ctrl">';
  $html .= '<option value="">Select a Treatment</option>';
  foreach ($groups as $group => $items) {
    $html .= '<optgroup label="'.htmlspecialchars($group).'">';
    foreach ($items as $item) {
      $html .= '<option value="'.htmlspecialchars($item).'">'.htmlspecialchars($item).'</option>';
    }
    $html .= '</optgroup>';
  }
  $html .= '</select>';
  return $html;
}
?>

<!-- ══════════════════════════════════════════════════════════
     POPUP CSS
     ══════════════════════════════════════════════════════════ -->
<style>
/* ── Overlay ─────────────────────────────────────────────── */
.bk-overlay{position:fixed;inset:0;background:rgba(26,15,10,.68);z-index:3000;display:flex;align-items:center;justify-content:center;padding:20px;backdrop-filter:blur(10px);opacity:0;pointer-events:none;transition:opacity .42s ease}
.bk-overlay.show{opacity:1;pointer-events:all}

/* ── Modal box ───────────────────────────────────────────── */
.bk-box{background:#fff;border-radius:26px;width:100%;max-width:640px;max-height:92vh;overflow-y:auto;transform:translateY(32px) scale(.96);transition:transform .42s cubic-bezier(.34,1.56,.64,1);box-shadow:0 40px 120px rgba(42,31,26,.3);scrollbar-width:none}
.bk-box::-webkit-scrollbar{display:none}
.bk-overlay.show .bk-box{transform:translateY(0) scale(1)}

/* ── Header ──────────────────────────────────────────────── */
.bk-head{background:linear-gradient(135deg,#CAAE5F 0%,#B8955C 100%);padding:32px 44px 0;position:relative;border-radius:26px 26px 0 0;overflow:hidden}
.bk-head::before{content:'';position:absolute;inset:-50%;background:radial-gradient(ellipse at 80% 20%,rgba(255,255,255,.12) 0%,transparent 60%);pointer-events:none}
.bk-head-top{display:flex;align-items:flex-start;justify-content:space-between;gap:16px;margin-bottom:6px}
.bk-head-text h3{font-family:'Lora',serif;font-size:2rem;color:#fff;font-weight:600;margin-bottom:4px;line-height:1.15}
.bk-head-text h3 em{font-style:italic}
.bk-head-text p{color:rgba(255,255,255,.85);font-size:.86rem;font-family:'Inter',sans-serif}

/* ── Close btn ───────────────────────────────────────────── */
.bk-close{width:38px;height:38px;border-radius:50%;background:rgba(255,255,255,.2);color:#fff;display:flex;align-items:center;justify-content:center;cursor:pointer;font-size:.95rem;transition:background .18s ease,transform .18s ease;flex-shrink:0;border:none;font-family:inherit}
.bk-close:hover{background:rgba(255,255,255,.36);transform:rotate(90deg)}

/* ── Tabs ────────────────────────────────────────────────── */
.bk-tabs{display:flex;background:rgba(0,0,0,.12);border-radius:50px;padding:4px;margin:22px 0 0}
.bk-tab-btn{flex:1;padding:10px 18px;border-radius:44px;font-family:'Inter',sans-serif;font-size:.72rem;font-weight:600;letter-spacing:.08em;text-transform:uppercase;color:rgba(255,255,255,.7);cursor:pointer;transition:color .28s ease,background .28s ease,box-shadow .28s ease;background:transparent;border:none;text-align:center}
.bk-tab-btn.active{background:#fff;color:#B8955C;box-shadow:0 4px 18px rgba(42,31,26,.22)}
.bk-tab-btn:not(.active):hover{color:rgba(255,255,255,.95)}

/* ── Tab indicator bar ───────────────────────────────────── */
.bk-tab-bar{height:3px;background:rgba(255,255,255,.18);border-radius:2px;margin-top:18px;position:relative;overflow:hidden}
.bk-tab-bar::after{content:'';position:absolute;top:0;bottom:0;width:50%;background:rgba(255,255,255,.7);border-radius:2px;transition:left .32s cubic-bezier(.25,.46,.45,.94);left:0}
.bk-tab-bar[data-active="consultation"]::after{left:0%}

/* ── Body ────────────────────────────────────────────────── */
.bk-body{padding:32px 44px 40px}

/* ── Panels ──────────────────────────────────────────────── */
.bk-panel{display:none;animation:bkFadeIn .28s ease forwards}
.bk-panel.active{display:block}
@keyframes bkFadeIn{from{opacity:0;transform:translateY(8px)}to{opacity:1;transform:translateY(0)}}

/* ── Form elements ───────────────────────────────────────── */
.bk-form .form-group{display:flex;flex-direction:column;gap:7px;margin-bottom:18px}
.bk-form .form-row{display:grid;grid-template-columns:1fr 1fr;gap:18px}
.bk-form .form-label{font-size:.8rem;font-weight:600;letter-spacing:.4px;text-transform:uppercase;color:#1a1a1a;font-family:'Inter',sans-serif}
.bk-form .req{color:#CAAE5F}
.bk-form .form-ctrl{padding:11px 14px;border:1.5px solid #ede8df;border-radius:8px;font-size:.92rem;background:#fef9f3;color:#1a1a1a;transition:border-color 0.3s cubic-bezier(.4,0,.2,1),box-shadow 0.3s cubic-bezier(.4,0,.2,1);width:100%;font-family:'Inter',sans-serif;outline:none}
.bk-form .form-ctrl:focus{border-color:#CAAE5F;box-shadow:0 0 0 3px rgba(202,174,95,0.15);background:#ffffff}
.bk-form .form-ctrl.error{border-color:#e05555;box-shadow:0 0 0 3px rgba(224,85,85,.1)}
.bk-form textarea.form-ctrl{min-height:120px;resize:vertical}
.bk-form select.form-ctrl{appearance:none;background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='14' height='8' viewBox='0 0 14 8'%3E%3Cpath d='M1 1l6 6 6-6' stroke='%23CAAE5F' stroke-width='1.8' fill='none' stroke-linecap='round'/%3E%3C/svg%3E");background-repeat:no-repeat;background-position:right 14px center;padding-right:38px;cursor:pointer}

/* ── Field errors ────────────────────────────────────────── */
.bk-field-err{font-size:.72rem;color:#e05555;font-family:'Inter',sans-serif;font-weight:600;margin-top:-4px;display:none}
.bk-form .form-ctrl.error + .bk-field-err,
.bk-form .form-group.has-error .bk-field-err{display:block}

/* ── reCAPTCHA ───────────────────────────────────────────── */
.g-recaptcha{margin:14px 0 16px 0;transform:scale(0.98);transform-origin:0}

/* ── Submit ──────────────────────────────────────────────── */
.bk-submit{display:flex;align-items:center;justify-content:center;gap:10px;width:100%;padding:14px 28px;border-radius:8px;background:linear-gradient(135deg,#CAAE5F 0%,#B8955C 100%);color:#fff;font-family:'Inter',sans-serif;font-size:.92rem;font-weight:600;letter-spacing:.5px;text-transform:uppercase;cursor:pointer;border:none;box-shadow:0 4px 18px rgba(202,174,95,0.3);transition:transform 0.3s cubic-bezier(.4,0,.2,1),box-shadow 0.3s cubic-bezier(.4,0,.2,1);margin-top:6px;position:relative;overflow:hidden}
.bk-submit::after{content:'';position:absolute;inset:0;background:rgba(255,255,255,.13);transform:translateX(-101%);transition:transform .34s ease}
.bk-submit:hover{transform:translateY(-2px);box-shadow:0 8px 28px rgba(202,174,95,0.45)}
.bk-submit:hover::after{transform:translateX(0)}
.bk-submit i{font-size:.8rem;transition:transform .18s ease}
.bk-submit:hover i{transform:translateX(3px)}
.bk-submit:disabled{opacity:.6;cursor:not-allowed;transform:none}

/* ── Success screen ──────────────────────────────────────── */
.bk-success{display:none;flex-direction:column;align-items:center;text-align:center;padding:20px 0 12px;animation:bkFadeIn .4s ease forwards}
.bk-success.show{display:flex}
.bk-success-icon{width:72px;height:72px;border-radius:50%;background:linear-gradient(135deg,#CAAE5F,#B8955C);display:flex;align-items:center;justify-content:center;color:#fff;font-size:1.8rem;margin-bottom:20px;box-shadow:0 12px 32px rgba(202,174,95,0.35);animation:bkPop .5s cubic-bezier(.34,1.56,.64,1) forwards}
@keyframes bkPop{from{transform:scale(0);opacity:0}to{transform:scale(1);opacity:1}}
.bk-success h4{font-family:'Lora',serif;font-size:1.7rem;color:#1a1a1a;margin-bottom:8px}
.bk-success p{font-family:'Inter',sans-serif;color:#666;font-size:.91rem;line-height:1.7;max-width:380px}

/* ── Responsive ──────────────────────────────────────────── */
@media(max-width:640px){
  .bk-box{max-height:85vh}
  .bk-head{padding:12px 12px 0}
  .bk-body{padding:12px 12px 16px}
  .bk-head-text h3{font-size:1.1rem;margin-bottom:1px;line-height:1.2}
  .bk-head-text p{font-size:.7rem;line-height:1.3}
  .bk-form .form-group{margin-bottom:8px;gap:2px}
  .bk-form .form-row{grid-template-columns:1fr;gap:0}
  .bk-form .form-label{font-size:.65rem;margin-bottom:2px}
  .bk-form .form-ctrl{padding:6px 8px;font-size:.75rem;height:32px}
  .bk-form textarea.form-ctrl{min-height:60px;height:auto}
  .bk-submit{padding:8px 16px;font-size:.75rem;margin-top:3px;gap:6px}
  .bk-tab-btn{font-size:.55rem;padding:7px 6px;gap:4px}
  .bk-head-top{gap:8px}
  .bk-close{width:32px;height:32px;font-size:.8rem}
  .bk-tabs{margin:12px 0 0}
  .bk-tab-bar{margin-top:12px}
  .g-recaptcha{margin:6px 0 8px 0;transform:scale(0.75);transform-origin:0;padding:8px 0}
  .bk-success h4{font-size:1.3rem;margin-bottom:6px}
  .bk-success p{font-size:.8rem}
  .bk-success-icon{width:60px;height:60px;font-size:1.5rem;margin-bottom:12px}
  .bk-form textarea.form-ctrl{resize:none}
}
@media(max-width:400px){
  .bk-box{border-radius:16px;max-height:80vh}
  .bk-head{border-radius:16px 16px 0 0;padding:10px 10px 0}
  .bk-body{padding:10px 10px 12px}
  .bk-head-text h3{font-size:1rem;margin-bottom:0}
  .bk-head-text p{font-size:.65rem}
  .bk-form .form-label{font-size:.6rem}
  .bk-form .form-ctrl{padding:5px 7px;font-size:.7rem;height:30px}
  .bk-form textarea.form-ctrl{min-height:50px}
  .bk-close{width:28px;height:28px;font-size:.7rem}
  .bk-submit{padding:7px 14px;font-size:.7rem}
  .bk-tab-btn{font-size:.5rem;padding:6px 4px}
  .g-recaptcha{transform:scale(0.65);transform-origin:0;margin:4px 0 6px 0}
}
</style>

<!-- ══════════════════════════════════════════════════════════
     POPUP HTML
     ══════════════════════════════════════════════════════════ -->
<div class="bk-overlay" id="bkBookingPopup" role="dialog" aria-modal="true" aria-labelledby="bkPopupTitle">
  <div class="bk-box">

    <!-- Header -->
    <div class="bk-head">
      <div class="bk-head-top">
        <div class="bk-head-text">
          <h3 id="bkPopupTitle">Book Your <em>Treatment</em></h3>
          <p>Reserve your slot at Geneva Wellness Institute &mdash; it only takes a moment.</p>
        </div>
        <button class="bk-close" aria-label="Close popup">
          X
        </button>
      </div>
      <!-- Tabs -->
      <div class="bk-tabs" role="tablist">
        <button class="bk-tab-btn active" role="tab" aria-selected="true"
                aria-controls="panel-consult" data-tab="consultation" id="tab-consultation">
          <i class="fas fa-comments" aria-hidden="true"></i>&nbsp; Consultation
        </button>
        <button class="bk-tab-btn" role="tab" aria-selected="false"
                aria-controls="panel-direct" data-tab="direct" id="tab-direct">
          <i class="fas fa-calendar-check" aria-hidden="true"></i>&nbsp; Direct Booking
        </button>
      </div>
      <div class="bk-tab-bar" data-active="consultation" aria-hidden="true"></div>
    </div>

    <!-- Body -->
    <div class="bk-body">

      <!-- ── Panel: Consultation ───────────────────────────── -->
      <div class="bk-panel active" id="panel-consult" data-panel="consultation"
           role="tabpanel" aria-labelledby="tab-consultation">

        <div class="bk-success" aria-live="polite">
          <div class="bk-success-icon"><i class="fas fa-check" aria-hidden="true"></i></div>
          <h4>Consultation Requested!</h4>
          <p>We&rsquo;ve received your request. A team member will reach out to confirm your preferred schedule.</p>
        </div>

        <form class="bk-form" id="bk-consult-form" novalidate autocomplete="on">
          <div class="form-row">
            <div class="form-group">
              <label class="form-label" for="cs-name">Full Name <span class="req">*</span></label>
              <input type="text" id="cs-name" name="name" class="form-ctrl"
                     placeholder="Your full name" required autocomplete="name" />
              <span class="bk-field-err" role="alert"></span>
            </div>
            <div class="form-group">
              <label class="form-label" for="cs-email">Email <span class="req">*</span></label>
              <input type="email" id="cs-email" name="email" class="form-ctrl"
                     placeholder="your@email.com" required autocomplete="email" />
              <span class="bk-field-err" role="alert"></span>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label class="form-label" for="cs-phone">Phone <span class="req">*</span></label>
              <input type="tel" id="cs-phone" name="phone" class="form-ctrl"
                     placeholder="+63 9XX XXX XXXX" required autocomplete="tel" />
              <span class="bk-field-err" role="alert"></span>
            </div>
            <div class="form-group">
              <label class="form-label" for="cs-treatment">Interest or Treatment</label>
              <?= bk_select('cs-treatment', $bk_treatments) ?>
            </div>
          </div>
          <div class="form-group">
            <label class="form-label" for="cs-msg">Message <span class="req">*</span></label>
            <textarea id="cs-msg" name="message" class="form-ctrl"
                      placeholder="Tell us about your concerns or questions&hellip;" required></textarea>
            <span class="bk-field-err" role="alert"></span>
          </div>
          <!-- Google reCAPTCHA -->
          <div class="g-recaptcha" data-sitekey="6Le4Ho0sAAAAAB8laKgSVW8HCDQO3m2hT5Fehopn"></div>
          <button type="submit" class="bk-submit">
            Request Consultation <i class="fas fa-arrow-right" aria-hidden="true"></i>
          </button>
        </form>
      </div>

      <!-- ── Panel: Direct Booking ─────────────────────────── -->
      <div class="bk-panel" id="panel-direct" data-panel="direct"
           role="tabpanel" aria-labelledby="tab-direct">

        <div class="bk-success" aria-live="polite">
          <div class="bk-success-icon"><i class="fas fa-check" aria-hidden="true"></i></div>
          <h4>Booking Received!</h4>
          <p>Thank you! Your booking has been sent. We&rsquo;ll confirm your slot as soon as possible via phone or email.</p>
        </div>

        <form class="bk-form" id="bk-direct-form" novalidate autocomplete="on">
          <div class="form-row">
            <div class="form-group">
              <label class="form-label" for="db-name">Full Name <span class="req">*</span></label>
              <input type="text" id="db-name" name="name" class="form-ctrl"
                     placeholder="Your full name" required autocomplete="name" />
              <span class="bk-field-err" role="alert"></span>
            </div>
            <div class="form-group">
              <label class="form-label" for="db-age">Age</label>
              <input type="number" id="db-age" name="age" class="form-ctrl"
                     placeholder="Your age" min="1" max="120" />
              <span class="bk-field-err" role="alert"></span>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label class="form-label" for="db-treatment">Treatment</label>
              <?= bk_select('db-treatment', $bk_treatments) ?>
            </div>
            <div class="form-group">
              <label class="form-label" for="db-phone">Contact # <span class="req">*</span></label>
              <input type="tel" id="db-phone" name="phone" class="form-ctrl"
                     placeholder="+63 9XX XXX XXXX" required autocomplete="tel" />
              <span class="bk-field-err" role="alert"></span>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label class="form-label" for="db-email">Email <span class="req">*</span></label>
              <input type="email" id="db-email" name="email" class="form-ctrl"
                     placeholder="your@email.com" required autocomplete="email" />
              <span class="bk-field-err" role="alert"></span>
            </div>
            <div class="form-group">
              <label class="form-label" for="db-schedule">Preferred Schedule</label>
              <input type="datetime-local" id="db-schedule" name="preferred_schedule" class="form-ctrl" />
            </div>
          </div>
          <div class="form-group">
            <label class="form-label" for="db-payment">Payment Method</label>
            <select id="db-payment" name="payment_method" class="form-ctrl">
              <option value="">Select Payment Method</option>
              <option value="cash">Cash</option>
              <option value="debit">Debit Card</option>
              <option value="credit">Credit Card</option>
            </select>
          </div>
          <!-- Google reCAPTCHA -->
          <div class="g-recaptcha" data-sitekey="6Le4Ho0sAAAAAB8laKgSVW8HCDQO3m2hT5Fehopn"></div>
          <button type="submit" class="bk-submit">
            Confirm Booking <i class="fas fa-arrow-right" aria-hidden="true"></i>
          </button>
        </form>
      </div>

    </div><!-- /.bk-body -->
  </div><!-- /.bk-box -->
</div><!-- /#bkBookingPopup -->

<!-- ══════════════════════════════════════════════════════════
     POPUP JS
     ══════════════════════════════════════════════════════════ -->
<script>
(function () {
  'use strict';

  /* ── State ───────────────────────────────────────────── */
  const state = {};

  const $  = (sel, ctx = document) => ctx.querySelector(sel);
  const $$ = (sel, ctx = document) => [...ctx.querySelectorAll(sel)];

  /* ── Validate single field ───────────────────────────── */
  function validateField(input) {
    const grp = input.closest('.form-group');
    const err = grp ? grp.querySelector('.bk-field-err') : null;
    let valid = true, msg = '';
    input.classList.remove('error');
    if (grp) grp.classList.remove('has-error');
    if (input.hasAttribute('required') && !input.value.trim()) {
      valid = false; msg = 'This field is required.';
    } else if (input.type === 'email' && input.value.trim()) {
      if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(input.value.trim())) {
        valid = false; msg = 'Please enter a valid email address.';
      }
    } else if (input.type === 'tel' && input.hasAttribute('required') && input.value.trim()) {
      if (!/^[+\d\s\-().]{7,20}$/.test(input.value.trim())) {
        valid = false; msg = 'Please enter a valid phone number.';
      }
    }
    if (!valid) {
      input.classList.add('error');
      if (grp) grp.classList.add('has-error');
      if (err) err.textContent = msg;
    }
    return valid;
  }

  /* ── Validate panel ──────────────────────────────────── */
  function validatePanel(panelId) {
    const panel = document.getElementById(panelId);
    if (!panel) return true;
    let ok = true;
    $$('input[required], select[required], textarea[required]', panel)
      .forEach(inp => { if (!validateField(inp)) ok = false; });
    return ok;
  }

  /* ── Tab switch ──────────────────────────────────────── */
  function switchTab(tab) {
    $$('.bk-tab-btn').forEach(b => {
      const active = b.dataset.tab === tab;
      b.classList.toggle('active', active);
      b.setAttribute('aria-selected', active);
    });
    $$('.bk-panel').forEach(p => p.classList.toggle('active', p.dataset.panel === tab));
    const bar = document.querySelector('.bk-tab-bar');
    if (bar) bar.dataset.active = tab;
  }

  /* ── Open / Close ────────────────────────────────────── */
  function openPopup(tab) {
    tab = tab || 'consultation';
    const overlay = document.getElementById('bkBookingPopup');
    if (!overlay) return;
    switchTab(tab);
    hideSuccess('panel-direct');
    hideSuccess('panel-consult');
    overlay.classList.add('show');
    document.body.style.overflow = 'hidden';
  }

  function closePopup() {
    const overlay = document.getElementById('bkBookingPopup');
    if (!overlay) return;
    overlay.classList.remove('show');
    document.body.style.overflow = '';
  }

  /* ── Success helpers ─────────────────────────────────── */
  function showSuccess(panelId) {
    const panel = document.getElementById(panelId);
    if (!panel) return;
    const form = panel.querySelector('.bk-form');
    const suc  = panel.querySelector('.bk-success');
    if (form) form.style.display = 'none';
    if (suc)  suc.classList.add('show');
  }

  function hideSuccess(panelId) {
    const panel = document.getElementById(panelId);
    if (!panel) return;
    const form = panel.querySelector('.bk-form');
    const suc  = panel.querySelector('.bk-success');
    if (form) form.style.display = '';
    if (suc)  suc.classList.remove('show');
    if (form) form.reset();
    $$('.error', panel).forEach(el => el.classList.remove('error'));
    $$('.has-error', panel).forEach(el => el.classList.remove('has-error'));
  }

  /* ── CRM API ─────────────────────────────────────────── */
  var CRM_BASE = 'https://cc-crm-backend-production.up.railway.app/api/leads';

  function formatScheduleAPI(value) {
    if (!value) return "";
    var date = new Date(value);
    var year = date.getFullYear();
    var month = String(date.getMonth() + 1).padStart(2, '0');
    var day = String(date.getDate()).padStart(2, '0');
    var hours = date.getHours();
    var minutes = String(date.getMinutes()).padStart(2, '0');
    var ampm = hours >= 12 ? 'PM' : 'AM';
    hours = hours % 12 || 12;
    return year + '-' + month + '-' + day + ' at ' + hours + ':' + minutes + ' ' + ampm;
  }

  function mapPayment(value) {
    if (!value) return '';
    if (value === 'cash') return 'Cash';
    if (value === 'debit' || value === 'credit') return 'Card';
    return value;
  }

  /* ── Submit ──────────────────────────────────────────── */
  function handleSubmit(e, panelId) {
    e.preventDefault();
    if (!validatePanel(panelId)) return;

    var btn = e.target.querySelector('.bk-submit');
    if (btn) {
      btn.disabled = true;
      btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending\u2026';
    }

    var form = e.target;
    var isBooking = (panelId === 'panel-direct');
    var type   = isBooking ? 'booking' : 'call';
    var center = 'GENEVA';

    var url = new URL(CRM_BASE);
    url.searchParams.set('type', type);
    url.searchParams.set('center', center);

    var body;
    if (isBooking) {
      body = {
        fullname:       (form.querySelector('[name="name"]')               || {}).value || '',
        email:          (form.querySelector('[name="email"]')              || {}).value || '',
        phone:          (form.querySelector('[name="phone"]')              || {}).value || '',
        treatment:      (form.querySelector('[name="treatment"]')          || {}).value || '',
        age:            (form.querySelector('[name="age"]')                || {}).value || '',
        schedule:       formatScheduleAPI((form.querySelector('[name="preferred_schedule"]') || {}).value),
        payment_method: mapPayment((form.querySelector('[name="payment_method"]') || {}).value)
      };
    } else {
      body = {
        fullname:  (form.querySelector('[name="name"]')      || {}).value || '',
        email:     (form.querySelector('[name="email"]')     || {}).value || '',
        phone:     (form.querySelector('[name="phone"]')     || {}).value || '',
        treatment: (form.querySelector('[name="treatment"]') || {}).value || '',
        message:   (form.querySelector('[name="message"]')   || {}).value || ''
      };
    }

    fetch(url.toString(), {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify(body)
    })
    .then(function (res) {
      if (!res.ok) throw new Error('Server responded with ' + res.status);
      return res.text();
    })
    .then(function () {
      showSuccess(panelId);
    })
    .catch(function (err) {
      console.error('CRM submission error:', err);
      var panel = document.getElementById(panelId);
      if (panel) {
        var existing = panel.querySelector('.bk-error-msg');
        if (existing) existing.remove();
        var errDiv = document.createElement('div');
        errDiv.className = 'bk-error-msg';
        errDiv.style.cssText = 'background:#fff5f5;border:1.5px solid #e05555;border-radius:8px;padding:12px 16px;color:#c53030;font-size:.88rem;font-family:Inter,sans-serif;margin-bottom:14px;text-align:center;';
        errDiv.textContent = 'Something went wrong. Please try again or contact us directly.';
        var formEl = panel.querySelector('.bk-form');
        if (formEl) formEl.prepend(errDiv);
      }
    })
    .finally(function () {
      if (btn) {
        btn.disabled = false;
        btn.innerHTML = isBooking
          ? 'Confirm Booking <i class="fas fa-arrow-right"></i>'
        : 'Request Consultation <i class="fas fa-arrow-right"></i>';
    }
  });
}

  /* ── Init ────────────────────────────────────────────── */
  function init() {
    const overlay = document.getElementById('bkBookingPopup');
    if (!overlay) return;

    overlay.addEventListener('click', function (e) {
      if (e.target === overlay) closePopup();
    });

    const closeBtn = overlay.querySelector('.bk-close');
    if (closeBtn) closeBtn.addEventListener('click', closePopup);

    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && overlay.classList.contains('show')) closePopup();
    });

    $$('.bk-tab-btn', overlay).forEach(function (btn) {
      btn.addEventListener('click', function () { switchTab(btn.dataset.tab); });
    });

    $$('input[required], select[required], textarea[required]', overlay).forEach(function (inp) {
      inp.addEventListener('blur', function () { validateField(inp); });
      inp.addEventListener('input', function () { if (inp.classList.contains('error')) validateField(inp); });
    });

    const df = document.getElementById('bk-direct-form');
    const cf = document.getElementById('bk-consult-form');
    if (df) df.addEventListener('submit', function (e) { handleSubmit(e, 'panel-direct'); });
    if (cf) cf.addEventListener('submit', function (e) { handleSubmit(e, 'panel-consult'); });

    /* Any element with data-bk-open triggers the popup */
    document.addEventListener('click', function (e) {
      const trigger = e.target.closest('[data-bk-open]');
      if (trigger) { e.preventDefault(); openPopup(trigger.dataset.bkOpen); }
      if (e.target.closest('[data-bk-close]')) closePopup();
    });
  }

  /* ── Public API ──────────────────────────────────────── */
  window.BookingPopup = { open: openPopup, close: closePopup };

  /* ── Boot ────────────────────────────────────────────── */
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }

  /* ── Auto-open on every page load after 3 seconds ───── */
  window.addEventListener('load', function () {
    setTimeout(function () { openPopup('consultation'); }, 3000);
  });

})();
</script>

<!-- Google reCAPTCHA Script -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>


