/**
 * Geneva Wellness — Dynamic Component Manager
 * Centrally manages Header, Footer, Sidebar, and Inner Page Hero
 * Auto-injects on page load to avoid duplication
 */

// ── COMPONENT TEMPLATES ──────────────────────────────────────────

// ── HEADER: Now included via header.php (removed from here to avoid duplication)
// The header is managed dynamically via header.php with self-contained scripts

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

  <!-- Social Media Chat Widget (sitewide) -->
  <div class="sidebar-widget social-media-widget" id="social-media-widget">
    <div class="social-media_messenger-wrapper">
      <a href="http://m.me/genevawellnessinstitute?ref=website" target="_blank" class="w-inline-block" title="Message us on Messenger">
        <img src="https://cdn.prod.website-files.com/666fb632420e69e2710c8201/668f748ec6aca41df9b913a2_Company%3DMessenger%2C%20Style%3DColour%2C%20Background%3DCircular.svg" loading="lazy" alt="Messenger" class="social-media_icon">
      </a>
      <a href="https://wa.me/+639153960593?text=Hello,%20I%20came%20from%20the%20website" target="_blank" class="w-inline-block" title="Chat with us on WhatsApp">
        <img src="https://cdn.prod.website-files.com/666fb632420e69e2710c8201/668f7485800c13b6c96360b1_Company%3DWhatsapp%2C%20Style%3DColour%2C%20Background%3DCircular.svg" loading="lazy" alt="WhatsApp" class="social-media_icon">
      </a>
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
 * Initialize header interactive elements.
 *
 * IMPORTANT: header.php includes a self-contained IIFE that registers ALL
 * flyout/overlay/toggle listeners and sets window.__gwiHeaderInit = true.
 * If we add a SECOND click listener on #nav-toggle here, both handlers fire
 * on every click — the net effect is the flyout opens and immediately closes.
 *
 * Fix: if window.__gwiHeaderInit is truthy, skip all toggle/flyout wiring
 * and only handle the parts components.js exclusively owns (announcement bar,
 * active nav link). This resolves the home-page flyout bug without breaking
 * any other page.
 */
function initHeaderFunctionality() {

  // ── GUARD ────────────────────────────────────────────────────────────────
  // header.php's IIFE already wired up the flyout on this page.
  // Only do the lightweight work that belongs to components.js.
  if (window.__gwiHeaderInit) {
    // Announcement bar close (components.js owns this)
    const closeBtn  = document.getElementById('announcement-close');
    const annBar    = document.getElementById('announcement-bar');
    if (closeBtn && annBar) {
      closeBtn.addEventListener('click', () => {
        annBar.classList.add('hidden');
        document.body.classList.add('announcement-hidden');
      });
    }

    // Active nav-link highlighting
    updateActiveNavLink();
    window.addEventListener('hashchange', updateActiveNavLink);

    return; // ← EXIT: do NOT add any more listeners to #nav-toggle
  }
  // ── END GUARD ────────────────────────────────────────────────────────────

  // Fallback path: header.php IIFE did not run (e.g. server-side error or
  // a page that uses a different header include). Wire everything up here.
  const toggle   = document.getElementById('nav-toggle');
  const menu     = document.getElementById('nav-menu') || document.getElementById('mobile-flyout');
  const overlay  = document.getElementById('mobile-overlay');
  const header   = document.getElementById('site-header');
  const annBar   = document.getElementById('announcement-bar');
  const closeBtn = document.getElementById('announcement-close');
  const links    = document.querySelectorAll('.nav-link');

  const closeMenu = () => {
    if (!toggle || !menu) return;
    toggle.setAttribute('aria-expanded', 'false');
    toggle.setAttribute('aria-label', 'Open navigation menu');
    menu.classList.remove('active');
    if (overlay) overlay.classList.remove('active');
    document.body.style.overflow = '';
  };

  // Announcement bar close
  if (closeBtn && annBar) {
    closeBtn.addEventListener('click', () => {
      annBar.classList.add('hidden');
      document.body.classList.add('announcement-hidden');
    });
  }

  if (toggle && menu) {
    // Hamburger toggle
    toggle.addEventListener('click', () => {
      const isOpen   = toggle.getAttribute('aria-expanded') === 'true';
      const nextOpen = !isOpen;
      toggle.setAttribute('aria-expanded', String(nextOpen));
      toggle.setAttribute('aria-label', nextOpen ? 'Close navigation menu' : 'Open navigation menu');
      menu.classList.toggle('active', nextOpen);
      if (overlay) overlay.classList.toggle('active', nextOpen);
      document.body.style.overflow = nextOpen ? 'hidden' : '';
    });

    // Close when overlay is clicked
    if (overlay) overlay.addEventListener('click', closeMenu);

    // Close on nav-link click
    links.forEach(link => link.addEventListener('click', closeMenu));

    // Close when clicking outside header + menu
    document.addEventListener('click', (e) => {
      if (header && !header.contains(e.target) && !menu.contains(e.target)) {
        closeMenu();
      }
    });

    // Reset on resize to desktop
    window.addEventListener('resize', () => {
      if (window.innerWidth > 1024) closeMenu();
    });
  }

  // Sticky header scroll class
  const handleHeaderScroll = () => {
    if (!header) return;
    header.classList.toggle('scrolled', window.pageYOffset > 50);
  };
  window.addEventListener('scroll', handleHeaderScroll, { passive: true });
  handleHeaderScroll();

  // Active nav link
  updateActiveNavLink();
  window.addEventListener('hashchange', updateActiveNavLink);
}

/**
 * Update active nav link based on current page
 * Enhanced to handle all page types and URL patterns
 */
function updateActiveNavLink() {
  const currentPath     = window.location.pathname;
  const currentPathname = currentPath.split('/').pop() || 'index.php';
  const links           = document.querySelectorAll('.nav-link');

  links.forEach(link => {
    let href    = link.getAttribute('href');
    let isActive = false;

    if (!href) return;

    const hrefBase = href.split('#')[0];

    // Homepage detection
    if (
      (currentPathname === 'index.php' || currentPathname === '' || currentPath === '/') &&
      (hrefBase === '/' || hrefBase === 'index.php' || hrefBase.includes('index'))
    ) {
      isActive = true;
    }
    // Direct filename match
    else if (currentPathname === hrefBase || currentPathname === hrefBase + '.php') {
      isActive = true;
    }
    // Path-based match
    else if (currentPath.includes(hrefBase)) {
      isActive = true;
    }

    // Blog section detection
    if (!isActive && (href.includes('blog') || hrefBase === 'blog.php')) {
      if (
        currentPath.includes('/blog') ||
        currentPath.includes('blog.php') ||
        currentPath.includes('search') ||
        currentPathname.includes('search')
      ) {
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
  // Inject footer (all pages)
  injectFooter();

  // Inject sidebar only on blog pages
  const isBlogPage = window.location.pathname.includes('/blog');
  if (isBlogPage) {
    injectSidebar();
  }

  // Initialize header interactivity
  initHeaderFunctionality();
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
  injectFooter,
  injectSidebar,
  injectInnerBanner,
  injectBreadcrumb,
  createInnerBanner,
  createBreadcrumb
};