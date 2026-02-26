/**
 * Geneva Wellness — Dynamic Component Manager
 * Centrally manages Header, Footer, Sidebar, and Inner Page Hero
 * Auto-injects on page load to avoid duplication
 */

// ── COMPONENT TEMPLATES ──────────────────────────────────────────

const HEADER_TEMPLATE = `
<div class="announcement-bar" id="announcement-bar">
  <div class="announcement-inner">
    <span class="announcement-icon">✦</span>
    <span>Exclusive Offer: Get <strong>20% off</strong> your first treatment — Limited time only</span>
    <a href="contact-us.php#contact-form" class="announcement-cta">Book Now →</a>
    <span class="announcement-icon">✦</span>
  </div>
  <button class="announcement-close" id="announcement-close" aria-label="Close announcement">×</button>
</div>

<header class="site-header" id="site-header">
  <nav class="nav container" aria-label="Primary navigation">
    <a href="index.php" class="nav-logo" aria-label="Geneva Wellness Institute - Home">
      <img src="img/geneva-logo.svg" alt="Geneva Wellness Institute Logo" class="logo-emblem" />
    </a>

    <button class="nav-toggle" id="nav-toggle" aria-label="Toggle navigation" aria-expanded="false">
      <span></span>
      <span></span>
      <span></span>
    </button>

    <div class="nav-menu" id="nav-menu">
      <ul class="nav-list">
        <li class="nav-item-has-dropdown">
          <a href="about-us.php" class="nav-link">About Us</a>
        </li>
        <li class="nav-item-has-dropdown">
          <a href="treatments.php" class="nav-link">Treatments <span class="nav-arrow">›</span></a>
          <div class="nav-dropdown">
            <div class="dropdown-inner">
              <div class="dropdown-group">
                <p class="dropdown-label">Face</p>
                <a href="treatments.php#hifu" class="dropdown-link"><span>✦</span> HIFU Lift</a>
                <a href="treatments.php#co2-laser" class="dropdown-link"><span>✦</span> CO2 Laser</a>
                <a href="treatments.php#carbon-laser" class="dropdown-link"><span>✦</span> Carbon Laser</a>
                <a href="treatments.php#hydra-7d" class="dropdown-link"><span>✦</span> HYDRA 7D</a>
              </div>
              <div class="dropdown-group">
                <p class="dropdown-label">Body</p>
                <a href="treatments.php#exilis" class="dropdown-link"><span>✦</span> Exilis</a>
                <a href="treatments.php#hair" class="dropdown-link"><span>✦</span> Hair Restoration</a>
                <a href="treatments.php#pico" class="dropdown-link"><span>✦</span> Pico Laser</a>
              </div>
              <div class="dropdown-promo">
                <p class="promo-tag">✦ New</p>
                <strong>Free Consultation</strong>
                <p>Book your personalized skin assessment today</p>
                <a href="contact-us.php" class="promo-btn">Book Now</a>
              </div>
            </div>
          </div>
        </li>
        <li><a href="gallery.php" class="nav-link">Gallery</a></li>
        <li><a href="testimonials.php" class="nav-link">Testimonials</a></li>
        <li><a href="blog.php" class="nav-link">Blog</a></li>
        <li><a href="contact-us.php" class="nav-link">Contact</a></li>
      </ul>

      <div class="nav-mobile-cta">
        <a href="contact-us.php#contact-form" class="btn btn-primary btn-block">Book Consultation</a>
        <div class="nav-mobile-info">
          <a href="tel:+639XXXXXXXXX">📞 Call Us</a>
          <a href="https://wa.me/639XXXXXXXXX">💬 WhatsApp</a>
        </div>
      </div>
    </div>

    <div class="nav-actions">
      <a href="tel:+639XXXXXXXXX" class="nav-phone" aria-label="Call us">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1-9.4 0-17-7.6-17-17 0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.3 0 .7-.2 1L6.6 10.8z"/></svg>
      </a>
      <a href="contact-us.php#contact-form" class="nav-cta-btn">
        <span>Book Consultation</span>
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      </a>
    </div>
  </nav>
  <div class="nav-scroll-progress" id="nav-progress"></div>
</header>
`;

const FOOTER_TEMPLATE = `
<footer class="footer" id="dynamic-footer">
  <div class="container">
    <div class="footer-grid">
      <!-- Brand Column -->
      <div class="footer-column">
        <div class="footer-logo">
          <img src="img/geneva-logo.svg" alt="Geneva Wellness Institute Logo" class="logo-mark" />
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
          <li><a href="/about-us.php">About Us</a></li>
          <li><a href="/treatments.php">Treatments</a></li>
          <li><a href="/gallery.php">Gallery</a></li>
          <li><a href="/testimonials.php">Testimonials</a></li>
        </ul>
      </div>

      <!-- Resources -->
      <div class="footer-column">
        <h4>Resources</h4>
        <ul class="footer-links">
          <li><a href="/blog.php">Blog</a></li>
          <li><a href="/contact-us.php">Contact</a></li>
          <li><a href="/404.php">Privacy Policy</a></li>
          <li><a href="/404.php">Terms of Service</a></li>
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
        <a href="/404.php">Privacy Policy</a>
        <a href="/404.php">Terms of Service</a>
        <a href="/404.php">Cookie Settings</a>
      </div>
    </div>
  </div>
</footer>
`;

const SIDEBAR_TEMPLATE = `
<aside class="blog-sidebar" id="dynamic-sidebar">
  <!-- Search Widget -->
  <div class="sidebar-widget search-widget">
    <h4>Search Articles</h4>
    <form class="search-form" role="search">
      <input type="search" placeholder="Search blog..." aria-label="Search blog posts" />
      <button type="submit" aria-label="Search">🔍</button>
    </form>
  </div>

  <!-- Categories Widget -->
  <div class="sidebar-widget categories-widget">
    <h4>Categories</h4>
    <ul class="categories-list">
      <li><a href="blog.php">All Posts</a></li>
      <li><a href="blog-category/skincare.php">Skincare</a></li>
      <li><a href="blog-category/treatments.php">Treatments</a></li>
      <li><a href="blog-category/beauty.php">Beauty Tips</a></li>
      <li><a href="blog-category/hair-health.php">Hair Health</a></li>
      <li><a href="blog-category/wellness.php">Wellness</a></li>
    </ul>
  </div>

  <!-- Recent Posts Widget -->
  <div class="sidebar-widget recent-posts-widget">
    <h4>Recent Posts</h4>
    <ul class="recent-posts-list">
      <li>
        <a href="blog/hifu-complete-guide.php">
          <strong>The Complete Guide to HIFU Facial Lifting</strong>
          <small>Dec 15, 2024</small>
        </a>
      </li>
      <li>
        <a href="blog/co2-laser-benefits.php">
          <strong>Why CO2 Laser Therapy is Perfect for Acne Scars</strong>
          <small>Dec 10, 2024</small>
        </a>
      </li>
      <li>
        <a href="blog/post-treatment-skincare.php">
          <strong>Post-Treatment Skincare: Maximize Your Results</strong>
          <small>Dec 8, 2024</small>
        </a>
      </li>
    </ul>
  </div>

  <!-- Tags Cloud Widget -->
  <div class="sidebar-widget tags-widget">
    <h4>Popular Tags</h4>
    <div class="tags-cloud">
      <a href="blog.php?tag=skincare">#skincare</a>
      <a href="blog.php?tag=wellness">#wellness</a>
      <a href="blog.php?tag=anti-aging">#anti-aging</a>
      <a href="blog.php?tag=beauty">#beauty</a>
      <a href="blog.php?tag=treatments">#treatments</a>
      <a href="blog.php?tag=science">#science</a>
      <a href="blog.php?tag=tips">#tips</a>
      <a href="blog.php?tag=results">#results</a>
    </div>
  </div>

  <!-- Newsletter Widget -->
  <div class="sidebar-widget newsletter-widget">
    <h4>Newsletter</h4>
    <p>Get wellness tips and treatment insights delivered to your inbox.</p>
    <form class="newsletter-form">
      <input type="email" placeholder="Your email" required aria-label="Email address" />
      <button type="submit" class="btn btn-primary btn-sm">Subscribe</button>
    </form>
  </div>

  <!-- CTA Widget -->
  <div class="sidebar-widget cta-widget">
    <div class="cta-box">
      <h4>Ready to Transform?</h4>
      <p>Book your personalized consultation today.</p>
      <a href="contact-us.php#contact-form" class="btn btn-primary btn-sm btn-block">Book Now</a>
    </div>
  </div>
</aside>
`;

/**
 * Inner Page Hero/Banner Template
 * Usage: injectInnerBanner(title, subtitle, backgroundGradient)
 */
function createInnerBanner(title, subtitle, gradient = "135deg, #B00E09 0%, #CAAE5F 100%") {
  return `
<section class="inner-banner" style="background: linear-gradient(${gradient});">
  <div class="container">
    <div class="banner-content" data-aos="fade-up">
      <h1>${title}</h1>
      <p>${subtitle}</p>
    </div>
  </div>
</section>
  `;
}

/**
 * Breadcrumb Navigation Template
 * Usage: createBreadcrumb([{label: 'Home', url: '/'}, {label: 'About', url: '/about-us.html'}])
 */
function createBreadcrumb(items) {
  let html = '<nav class="breadcrumb container" aria-label="Breadcrumb"><ol>';
  items.forEach((item, index) => {
    const isLast = index === items.length - 1;
    if (isLast) {
      html += `<li><span aria-current="page">${item.label}</span></li>`;
    } else {
      html += `<li><a href="${item.url}">${item.label}</a></li>`;
    }
  });
  html += '</ol></nav>';
  return html;
}

// ── INJECTION FUNCTIONS ──────────────────────────────────────────

/**
 * Injects header into the page with proper image path handling
 * Looks for #dynamic-header container
 */
function injectHeader() {
  const headerContainer = document.getElementById('dynamic-header');
  if (headerContainer) {
    let headerHTML = HEADER_TEMPLATE;
    
    // Adjust image paths for subdirectories
    if (window.location.pathname.includes('/blog/') || window.location.pathname.includes('/blog-category/')) {
      headerHTML = headerHTML.replace(/src="img\//g, 'src="../img/');
    }
    
    headerContainer.innerHTML = headerHTML;
    
    // Inject header styles if not already present
    if (!document.querySelector('style[data-header-styles]')) {
      const headerStyles = document.createElement('style');
      headerStyles.setAttribute('data-header-styles', 'true');
      headerStyles.textContent = `
/* ── ANNOUNCEMENT BAR ─────────────────────────────────── */
.announcement-bar {
  background: linear-gradient(90deg, var(--primary) 0%, #8a0b07 50%, var(--primary) 100%);
  background-size: 200% 100%;
  animation: announcementShimmer 4s ease infinite;
  color: white;
  font-size: 0.78rem;
  padding: 0.55rem 1rem;
  text-align: center;
  position: relative;
  z-index: 1001;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 0.75rem;
}
@keyframes announcementShimmer {
  0%, 100% { background-position: 0% 0%; }
  50% { background-position: 100% 0%; }
}
.announcement-inner {
  display: flex;
  align-items: center;
  gap: 0.75rem;
  flex-wrap: wrap;
  justify-content: center;
}
.announcement-icon {
  color: var(--accent-gold);
  animation: pulse 2s ease infinite;
}
@keyframes pulse {
  0%, 100% { opacity: 1; }
  50% { opacity: 0.5; }
}
.announcement-cta {
  color: var(--accent-gold) !important;
  font-weight: 700;
  text-decoration: none;
  border-bottom: 1px solid rgba(202, 174, 95, 0.4);
  transition: border-color 0.2s;
}
.announcement-cta:hover { border-color: var(--accent-gold); }
.announcement-close {
  position: absolute;
  right: 1rem;
  top: 50%;
  transform: translateY(-50%);
  background: rgba(255,255,255,0.15);
  border: none;
  color: white;
  width: 22px;
  height: 22px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  font-size: 1rem;
  line-height: 1;
  transition: background 0.2s;
}
.announcement-close:hover { background: rgba(255,255,255,0.3); }
.announcement-bar.hidden { display: none; }

/* ── HEADER ───────────────────────────────────────────── */
.site-header {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 1000;
  transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
  background: linear-gradient(135deg, var(--primary) 0%, rgba(176, 14, 9, 0.95) 100%);
}
.site-header.scrolled {
  background: rgba(255, 255, 255, 0.97);
  backdrop-filter: blur(20px);
  box-shadow: 0 2px 40px rgba(0,0,0,0.08);
}

.nav {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  height: 80px;
  transition: height 0.3s ease;
  padding: 0;
}
.site-header.scrolled .nav { height: 70px; }

/* ── LOGO ─────────────────────────────────────────────── */
.nav-logo {
  display: flex;
  align-items: center;
  gap: 0.75rem;
  text-decoration: none;
  color: white;
  transition: all 0.3s ease;
  margin-right: auto;
}
.site-header.scrolled .nav-logo { color: var(--black); }
.site-header.scrolled .logo-emblem { filter: brightness(0) saturate(100%); }
.logo-emblem {
  width: 50px;
  height: 50px;
  flex-shrink: 0;
  transition: transform 0.6s cubic-bezier(0.34, 1.56, 0.64, 1);
  object-fit: contain;
}
.nav-logo:hover .logo-emblem { transform: rotate(15deg) scale(1.1); }

/* ── NAV TOGGLE (Mobile) ──────────────────────────────── */
.nav-toggle {
  display: none;
  flex-direction: column;
  background: none;
  border: none;
  cursor: pointer;
  gap: 4px;
  margin: 0 1rem;
  color: white;
}
.site-header.scrolled .nav-toggle { color: var(--black); }
.nav-toggle span {
  width: 24px;
  height: 2px;
  background: currentColor;
  border-radius: 2px;
  transition: all 0.3s ease;
}

/* ── NAV MENU ─────────────────────────────────────────── */
.nav-menu {
  display: flex;
  align-items: center;
  gap: 0;
}
.nav-list {
  display: flex;
  align-items: center;
  gap: 0;
  list-style: none;
}
.nav-list li { position: relative; }
.nav-link {
  display: block;
  padding: 0.6rem 0.9rem;
  color: rgba(255,255,255,0.88);
  font-size: 0.875rem;
  font-weight: 500;
  text-decoration: none;
  position: relative;
  transition: color 0.3s ease;
  white-space: nowrap;
}
.site-header.scrolled .nav-link { color: var(--black); }
.nav-link::after {
  content: '';
  position: absolute;
  bottom: 0.3rem;
  left: 0.9rem;
  right: 0.9rem;
  height: 1.5px;
  background: var(--accent-gold);
  transform: scaleX(0);
  transform-origin: right;
  transition: transform 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}
.nav-link:hover::after { transform: scaleX(1); transform-origin: left; }
.site-header.scrolled .nav-link::after { background: var(--primary); }
.nav-link:hover { color: var(--accent-gold); }
.site-header.scrolled .nav-link:hover { color: var(--primary); }
.nav-arrow { font-size: 0.7rem; opacity: 0.6; transition: transform 0.2s; }
.nav-item-has-dropdown:hover .nav-arrow { transform: rotate(90deg); }

/* ── NAV DROPDOWN ─────────────────────────────────────── */
.nav-dropdown {
  position: absolute;
  top: calc(100% + 10px);
  left: 50%;
  transform: translateX(-50%) translateY(-8px);
  background: white;
  border-radius: 20px;
  box-shadow: 0 20px 60px rgba(0,0,0,0.15), 0 0 0 1px rgba(0,0,0,0.05);
  min-width: 480px;
  opacity: 0;
  visibility: hidden;
  pointer-events: none;
  transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
  z-index: 100;
}
.nav-item-has-dropdown:hover .nav-dropdown {
  opacity: 1;
  visibility: visible;
  pointer-events: all;
  transform: translateX(-50%) translateY(0);
}
.dropdown-inner {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 2rem;
  padding: 2rem;
}
.dropdown-group {
  display: flex;
  flex-direction: column;
  gap: 0.75rem;
}
.dropdown-label {
  font-weight: 600;
  color: var(--black);
  font-size: 0.9rem;
  text-transform: uppercase;
  letter-spacing: 0.05em;
  margin: 0;
}
.dropdown-link {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  color: var(--muted);
  font-size: 0.85rem;
  transition: all 0.2s ease;
  text-decoration: none;
}
.dropdown-link:hover {
  color: var(--primary);
  padding-left: 0.5rem;
}
.dropdown-promo {
  grid-column: 1 / -1;
  background: linear-gradient(135deg, rgba(202, 174, 95, 0.15), rgba(176, 14, 9, 0.08));
  padding: 1.5rem;
  border-radius: 12px;
  border-left: 4px solid var(--accent-gold);
}
.promo-tag {
  color: var(--accent-gold);
  font-size: 0.7rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.1em;
  margin: 0 0 0.5rem 0;
}
.promo-btn {
  display: inline-block;
  background: var(--primary);
  color: white;
  padding: 0.6rem 1.2rem;
  border-radius: 6px;
  font-size: 0.8rem;
  text-decoration: none;
  transition: all 0.3s ease;
  margin-top: 0.75rem;
}
.promo-btn:hover {
  background: var(--primary-dark);
}

/* ── NAV ACTIONS ──────────────────────────────────────── */
.nav-actions {
  display: flex;
  align-items: center;
  gap: 1rem;
  margin-left: 1rem;
}
.nav-phone {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background: rgba(255,255,255,0.15);
  color: white;
  text-decoration: none;
  transition: all 0.3s ease;
}
.nav-phone:hover {
  background: rgba(255,255,255,0.25);
  transform: scale(1.1);
}
.site-header.scrolled .nav-phone {
  background: rgba(176, 14, 9, 0.1);
  color: var(--primary);
}
.nav-cta-btn {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  padding: 0.6rem 1.2rem;
  background: var(--accent-gold);
  color: white;
  border-radius: 50px;
  text-decoration: none;
  font-size: 0.85rem;
  font-weight: 600;
  transition: all 0.3s ease;
}
.nav-cta-btn:hover {
  background: #B8955C;
  transform: translateY(-2px);
  box-shadow: 0 6px 25px rgba(202, 174, 95, 0.4);
}

/* ── MOBILE MENU ──────────────────────────────────────── */
.nav-mobile-cta { display: none; }
.nav-mobile-info { display: none; }

/* ── RESPONSIVE ───────────────────────────────────────── */
@media (max-width: 1024px) {
  .nav-toggle { display: flex; }
  .nav-menu {
    position: fixed;
    left: 0;
    top: 120px;
    width: 100%;
    height: calc(100vh - 120px);
    background: white;
    flex-direction: column;
    gap: 1rem;
    padding: 2rem;
    transform: translateX(-100%);
    transition: transform 0.3s ease;
  }
  .nav-menu.active { transform: translateX(0); }
  .nav-mobile-cta { display: block; }
  .nav-actions { display: none; }
}
      `;
      document.head.appendChild(headerStyles);
    }
    
    initHeaderFunctionality();
  }
}

/**
 * Injects footer into the page with proper image path handling
 * Looks for #dynamic-footer container
 */
function injectFooter() {
  const footerContainer = document.getElementById('dynamic-footer');
  if (footerContainer && footerContainer.innerHTML.trim() === '') {
    let footerHTML = FOOTER_TEMPLATE;
    
    // Adjust image paths for subdirectories
    if (window.location.pathname.includes('/blog/') || window.location.pathname.includes('/blog-category/')) {
      footerHTML = footerHTML.replace(/src="img\//g, 'src="../img/');
    }
    
    footerContainer.innerHTML = footerHTML;
  }
}

/**
 * Injects sidebar into the page with path-aware links
 * Looks for #dynamic-sidebar container
 */
function injectSidebar() {
  const sidebarContainer = document.getElementById('dynamic-sidebar');
  if (sidebarContainer && sidebarContainer.innerHTML.trim() === '') {
    // Check if we're in a subdirectory (blog or blog-category)
    const isSubdirectory = window.location.pathname.includes('/blog/') || window.location.pathname.includes('/blog-category/');
    let sidebarHTML = SIDEBAR_TEMPLATE;
    
    if (isSubdirectory) {
      // Replace relative paths with ../ for subdirectory pages
      sidebarHTML = sidebarHTML
        .replace(/href="blog\.php/g, 'href="../blog.php')
        .replace(/href="blog-category\//g, 'href="../blog-category/')
        .replace(/href="contact-us\.php/g, 'href="../contact-us.php')
        .replace(/href="blog\//g, 'href="../blog/');
    }
    
    sidebarContainer.innerHTML = sidebarHTML;
  }
}

/**
 * Injects inner page banner
 * Usage: injectInnerBanner('Page Title', 'Subtitle', 'gradient')
 */
function injectInnerBanner(title, subtitle, gradient = "135deg, #B00E09 0%, #CAAE5F 100%") {
  const bannerContainer = document.getElementById('dynamic-banner');
  if (bannerContainer) {
    bannerContainer.innerHTML = createInnerBanner(title, subtitle, gradient);
  }
}

/**
 * Injects breadcrumb navigation
 * Usage: injectBreadcrumb([{label: 'Home', url: '/'}, {label: 'About', url: '/about-us.html'}])
 */
function injectBreadcrumb(items) {
  // Don't show breadcrumb on home page
  const isHomePage = window.location.pathname === '/' || window.location.pathname === '/index.php';
  if (isHomePage) return;
  
  // Insert breadcrumb after banner-content, at the bottom of hero section
  const bannerContent = document.querySelector('.banner-content');
  if (bannerContent) {
    bannerContent.insertAdjacentHTML('afterend', createBreadcrumb(items));
  }
}

// ── HEADER FUNCTIONALITY ──────────────────────────────────────────

/**
 * Initialize header interactive elements
 */
function initHeaderFunctionality() {
  const toggle = document.getElementById('nav-toggle');
  const menu = document.getElementById('nav-menu');
  const header = document.getElementById('site-header');
  const announcementBar = document.getElementById('announcement-bar');
  const closeBtn = document.getElementById('announcement-close');
  const links = document.querySelectorAll('.nav-link');

  const closeMenu = () => {
    if (!toggle || !menu) return;
    toggle.setAttribute('aria-expanded', 'false');
    menu.classList.remove('active');
    document.body.style.overflow = '';
  };

  // Close announcement bar
  if (closeBtn && announcementBar) {
    closeBtn.addEventListener('click', () => {
      announcementBar.classList.add('hidden');
      document.body.classList.add('announcement-hidden');
    });
  }

  if (toggle && menu) {
    // Mobile menu toggle
    toggle.addEventListener('click', () => {
      const isOpen = toggle.getAttribute('aria-expanded') === 'true';
      const nextState = !isOpen;
      toggle.setAttribute('aria-expanded', String(nextState));
      menu.classList.toggle('active', nextState);
      document.body.style.overflow = nextState ? 'hidden' : '';
    });

    // Close menu when link is clicked
    links.forEach(link => {
      link.addEventListener('click', closeMenu);
    });

    // Close menu when clicking outside
    document.addEventListener('click', (e) => {
      if (header && !header.contains(e.target)) {
        closeMenu();
      }
    });

    // Prevent stale mobile state after resizing to desktop
    window.addEventListener('resize', () => {
      if (window.innerWidth > 1024) {
        closeMenu();
      }
    });
  }

  // Sticky header on scroll
  const handleHeaderScroll = () => {
    if (!header) return;
    const currentScroll = window.pageYOffset;
    if (currentScroll > 50) {
      header.classList.add('scrolled', 'sticky');
    } else {
      header.classList.remove('scrolled', 'sticky');
    }
  };

  window.addEventListener('scroll', handleHeaderScroll, { passive: true });
  handleHeaderScroll();

  // Set active nav link
  updateActiveNavLink();
  window.addEventListener('hashchange', updateActiveNavLink);
}
/**
 * Update active nav link based on current page
 * Enhanced to handle all page types and URL patterns
 */
function updateActiveNavLink() {
  const currentPath = window.location.pathname;
  const currentPathname = currentPath.split('/').pop() || 'index.php'; // Get filename
  const links = document.querySelectorAll('.nav-link');
  
  links.forEach(link => {
    let href = link.getAttribute('href');
    let isActive = false;
    
    if (!href) return;
    
    // Remove any hash anchor from href for comparison
    const hrefBase = href.split('#')[0];
    
    // Homepage detection
    if ((currentPathname === 'index.php' || currentPathname === '' || currentPath === '/') && 
        (hrefBase === '/' || hrefBase === 'index.php' || hrefBase.includes('index'))) {
      isActive = true;
    }
    
    // Direct filename match (handles most pages)
    else if (currentPathname === hrefBase || currentPathname === hrefBase + '.php') {
      isActive = true;
    }
    
    // Path-based match (for nested paths)
    else if (currentPath.includes(hrefBase)) {
      isActive = true;
    }
    
    // Blog section detection (includes blog pages, search, and categories)
    if (!isActive && (href.includes('blog') || hrefBase === 'blog.php')) {
      if (currentPath.includes('/blog') || currentPath.includes('blog.php') || 
          currentPath.includes('search') || currentPathname.includes('search')) {
        isActive = true;
      }
    }
    
    // Apply active state
    if (isActive) {
      link.setAttribute('aria-current', 'page');
      link.classList.add('active');
    } else {
      link.removeAttribute('aria-current');
      link.classList.remove('active');
    }
  });
}

// ── INITIALIZATION ──────────────────────────────────────────────

/**
 * Main initialization function
 * Call this once document is loaded
 */
function initDynamicComponents() {
  // Inject header (all pages)
  injectHeader();
  
  // Inject footer (all pages)
  injectFooter();
  
  // Inject sidebar only on blog pages
  const isBlogPage = window.location.pathname.includes('/blog');
  if (isBlogPage) {
    injectSidebar();
  }
}

/**
 * Auto-initialize when DOM is ready
 */
if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', initDynamicComponents);
} else {
  initDynamicComponents();
}

// ── EXPORTS FOR USE IN PAGES ────────────────────────────────────

// These functions are available globally for use in page-specific scripts
window.ComponentManager = {
  injectHeader,
  injectFooter,
  injectSidebar,
  injectInnerBanner,
  injectBreadcrumb,
  createInnerBanner,
  createBreadcrumb
};





