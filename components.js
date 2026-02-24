/**
 * Geneva Wellness — Dynamic Component Manager
 * Centrally manages Header, Footer, Sidebar, and Inner Page Hero
 * Auto-injects on page load to avoid duplication
 */

// ── COMPONENT TEMPLATES ──────────────────────────────────────────

const HEADER_TEMPLATE = `
<header class="site-header" id="site-header">
  <nav class="nav container" aria-label="Primary navigation">
    <a href="/" class="nav-logo">
      <svg class="logo-mark" viewBox="0 0 40 40" fill="none">
        <circle cx="20" cy="20" r="18" stroke="currentColor" stroke-width="1.5" />
        <text x="20" y="24" font-family="Fraunces" font-size="18" font-weight="500" text-anchor="middle" fill="currentColor">GW</text>
      </svg>
      <span>Geneva</span>
    </a>

    <button class="nav-toggle" id="nav-toggle" aria-label="Toggle navigation" aria-expanded="false">
      <span></span>
      <span></span>
      <span></span>
    </button>

    <div class="nav-menu" id="nav-menu">
      <ul class="nav-list">
        <li><a href="/about-us.php" class="nav-link">About Us</a></li>
        <li><a href="/treatments.php" class="nav-link">Treatments</a></li>
        <li><a href="/gallery.php" class="nav-link">Gallery</a></li>
        <li><a href="/testimonials.php" class="nav-link">Testimonials</a></li>
        <li><a href="/blog.php" class="nav-link">Blog</a></li>
        <li><a href="/contact-us.php" class="nav-link">Contact</a></li>
      </ul>
    </div>

    <a href="/contact-us.php#contact-form" class="nav-cta">Book Consultation</a>
  </nav>
</header>
`;

const FOOTER_TEMPLATE = `
<footer class="footer" id="dynamic-footer">
  <div class="container">
    <div class="footer-grid">
      <!-- Brand Column -->
      <div class="footer-column">
        <div class="footer-logo">
          <svg class="logo-mark" viewBox="0 0 40 40" fill="none">
            <circle cx="20" cy="20" r="18" stroke="currentColor" stroke-width="1.5" />
            <text x="20" y="24" font-family="Fraunces" font-size="18" font-weight="500" text-anchor="middle" fill="currentColor">GW</text>
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
      <li><a href="/blog.php">All Posts</a></li>
      <li><a href="/blog.php">Skincare</a></li>
      <li><a href="/blog.php">Wellness</a></li>
      <li><a href="/blog.php">Beauty Tips</a></li>
      <li><a href="/blog.php">Featured</a></li>
    </ul>
  </div>

  <!-- Recent Posts Widget -->
  <div class="sidebar-widget recent-posts-widget">
    <h4>Recent Posts</h4>
    <ul class="recent-posts-list">
      <li>
        <a href="/blog/single.php">
          <strong>Understanding Hyaluronic Acid</strong>
          <small>Dec 20, 2024</small>
        </a>
      </li>
      <li>
        <a href="/blog/single.php">
          <strong>5 Nighttime Skincare Tips</strong>
          <small>Dec 18, 2024</small>
        </a>
      </li>
      <li>
        <a href="/blog/single.php">
          <strong>Science Behind HIFU Treatment</strong>
          <small>Dec 15, 2024</small>
        </a>
      </li>
    </ul>
  </div>

  <!-- Tags Cloud Widget -->
  <div class="sidebar-widget tags-widget">
    <h4>Popular Tags</h4>
    <div class="tags-cloud">
      <a href="/blog.php">#skincare</a>
      <a href="/blog.php">#wellness</a>
      <a href="/blog.php">#anti-aging</a>
      <a href="/blog.php">#beauty</a>
      <a href="/blog.php">#treatments</a>
      <a href="/blog.php">#science</a>
      <a href="/blog.php">#tips</a>
      <a href="/blog.php">#results</a>
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
      <a href="/contact-us.php#contact-form" class="btn btn-primary btn-sm btn-block">Book Now</a>
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
 * Injects header into the page
 * Looks for #dynamic-header container
 */
function injectHeader() {
  const headerContainer = document.getElementById('dynamic-header');
  if (headerContainer) {
    headerContainer.innerHTML = HEADER_TEMPLATE;
    initHeaderFunctionality();
  }
}

/**
 * Injects footer into the page
 * Looks for #dynamic-footer container
 */
function injectFooter() {
  const footerContainer = document.getElementById('dynamic-footer');
  if (footerContainer && footerContainer.innerHTML.trim() === '') {
    footerContainer.innerHTML = FOOTER_TEMPLATE;
  }
}

/**
 * Injects sidebar into the page
 * Looks for #dynamic-sidebar container
 */
function injectSidebar() {
  const sidebarContainer = document.getElementById('dynamic-sidebar');
  if (sidebarContainer && sidebarContainer.innerHTML.trim() === '') {
    sidebarContainer.innerHTML = SIDEBAR_TEMPLATE;
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
  const links = document.querySelectorAll('.nav-link');
  const header = document.getElementById('site-header');

  if (!toggle || !menu) return;

  // Mobile menu toggle
  toggle.addEventListener('click', () => {
    const isOpen = toggle.getAttribute('aria-expanded') === 'true';
    toggle.setAttribute('aria-expanded', !isOpen);
    menu.classList.toggle('active');
  });

  // Close menu when link is clicked
  links.forEach(link => {
    link.addEventListener('click', () => {
      toggle.setAttribute('aria-expanded', 'false');
      menu.classList.remove('active');
    });
  });

  // Close menu when clicking outside
  document.addEventListener('click', (e) => {
    if (!header.contains(e.target)) {
      toggle.setAttribute('aria-expanded', 'false');
      menu.classList.remove('active');
    }
  });

  // Sticky header on scroll
  let lastScroll = 0;
  window.addEventListener('scroll', () => {
    const currentScroll = window.pageYOffset;
    
    if (currentScroll <= 0) {
      header.classList.remove('sticky');
    } else if (currentScroll > lastScroll && currentScroll > 80) {
      header.classList.add('hidden');
    } else {
      header.classList.remove('hidden');
      header.classList.add('sticky');
    }
    
    lastScroll = currentScroll;
  });

  // Set active nav link
  updateActiveNavLink();
  window.addEventListener('hashchange', updateActiveNavLink);
}

/**
 * Update active nav link based on current page
 */
function updateActiveNavLink() {
  const currentPath = window.location.pathname;
  const links = document.querySelectorAll('.nav-link');
  
  links.forEach(link => {
    const href = link.getAttribute('href');
    if (href === currentPath || (currentPath === '/' && href === '/')) {
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
