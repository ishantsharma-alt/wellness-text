# Geneva Wellness — Dynamic Components & Design System

Comprehensive guide to the centralized component system and responsive design enhancements.

---

## 🎯 Overview

The website now uses a **centralized dynamic component system** that automatically injects Header, Footer, Sidebar, and Inner Page Banners across all pages. This eliminates code duplication, makes updates easier, and ensures consistent styling across the entire site.

### Key Benefits
✅ **Single source of truth** - Update header/footer in one place, changes apply everywhere  
✅ **Reduced code duplication** - No need to manually update each page  
✅ **Easier maintenance** - Centralized management of navigation and footer  
✅ **Consistent styling** - All pages share the same design and interactions  
✅ **Better performance** - Shared CSS and JS for components  
✅ **Full responsiveness** - Works perfectly on desktop, tablet, and mobile  

---

## 📦 Component System Architecture

### Core Files

**components.js** (314 lines)
- Central manager for all dynamic components
- Auto-initializes on DOM ready
- Provides component templates and injection functions
- Exports to global `window.ComponentManager`

**style.css** (Enhanced with 400+ lines of component styles)
- Dynamic component styling
- Responsive styles for all breakpoints (480px, 768px, 1024px, 1920px)
- Hover effects, animations, and transitions
- Mobile-first approach

**script.js** (Updated)
- Enhanced to work with new navigation structure
- Sticky header detection using `scrolled` class
- Mobile menu handling
- Scroll event listeners

---

## 🔌 How It Works

### Automatic Injection Flow

```
Page Load
    ↓
DOM Ready
    ↓
components.js initializes
    ↓
Checks for #dynamic-header container → Injects header
    ↓
Checks for #dynamic-footer container → Injects footer
    ↓
Checks for #dynamic-sidebar container (blog pages only) → Injects sidebar
    ↓
Initializes header functionality (menu, scroll, active links)
    ↓
All interactive elements fully functional
```

### What Gets Injected

#### Header (All Pages)
- Professional navigation bar
- Mobile hamburger menu
- Active page highlighting
- Smooth scroll effects
- Brand logo and CTA button

#### Footer (All Pages)
- Company information
- Quick navigation links
- Resource links
- Social media icons
- Contact information
- Legal links

#### Sidebar (Blog Pages Only)
- Search widget
- Category navigation
- Recent posts
- Tags cloud
- Newsletter signup
- CTA box

#### Inner Page Banner (Inner Pages)
- Gradient background with brand colors
- Page title with animation
- Page subtitle
- Breadcrumb navigation below

---

## 📄 Page Structure

### Homepage (index.html)
```html
<div id="dynamic-header"></div>  <!-- Header auto-injected -->

<main>
  <!-- Hero section -->
  <!-- Featured sections -->
  <!-- Testimonials -->
  <!-- etc -->
</main>

<div id="dynamic-footer"></div>  <!-- Footer auto-injected -->
```

### Inner Pages (about-us.html, treatments.html, etc.)
```html
<div id="dynamic-header"></div>  <!-- Header auto-injected -->

<div id="dynamic-banner"></div>  <!-- Inner banner auto-injected -->
<!-- Breadcrumb auto-injected after banner -->

<main>
  <!-- Page-specific content -->
</main>

<aside id="dynamic-sidebar"></aside>  <!-- Sidebar on blog pages only -->

<div id="dynamic-footer"></div>  <!-- Footer auto-injected -->
```

### Blog Pages (blog.php, blog/single.php)
```html
<div id="dynamic-header"></div>

<div id="dynamic-banner"></div>

<main>
  <article>
    <!-- Blog content -->
  </article>
  
  <aside id="dynamic-sidebar"></aside>  <!-- Auto-injected -->
</main>

<div id="dynamic-footer"></div>
```

---

## 🎨 Enhanced Design Features

### Header Enhancements
- **Gradient awareness**: Text color changes from white to primary color on scroll
- **Smooth transitions**: 0.3s ease transitions on all interactive elements
- **Underline animation**: Navigation links have animated underline on hover
- **Mobile optimization**: Hamburger menu with smooth animations
- **Active state**: Current page is highlighted with underline
- **Backdrop blur**: Semi-transparent header on scroll with blur effect (iOS-style)

### Footer Enhancements
- **Dark gradient background**: Professional dark theme matching brand
- **Top border accent**: Subtle golden line separating footer from content
- **Hover effects**: Links have arrow animations on hover
- **Social icons**: Circular badges with hover lift effect
- **Contact section**: Organized contact information with icons
- **Responsive columns**: Adapts from 4 columns (desktop) to 1 column (mobile)
- **Typography hierarchy**: Clear section headings in accent gold color

### Navigation Features
- **Active page highlighting**: Current page shows with gold underline
- **Scroll awareness**: Header background changes on scroll
- **Mobile menu**: Full-screen menu on tablet/mobile with smooth animations
- **Touch-friendly**: Buttons and touches targets are 44px+ minimum
- **Accessibility**: ARIA labels, keyboard navigation, semantic HTML

---

## 📱 Responsive Design System

### Breakpoints

| Device | Width | Features |
|--------|-------|----------|
| **Mobile** | < 480px | Single column, full-width navigation, stacked footer |
| **Tablet** | 480px - 768px | Two-column grids, hamburger menu, optimized spacing |
| **Laptop** | 768px - 1024px | Three-column grids, full navigation, side-by-side footer |
| **Desktop** | > 1024px | Full grid layouts, wide side-by-side sections |

### Responsive Features

**Mobile (< 480px)**
- Navigation toggle visible
- Full-screen mobile menu
- Single column layouts
- Compact footer
- Smaller font sizes
- Reduced padding and spacing
- Images scale proportionally
- Forms stack vertically

**Tablet (480px - 768px)**
- Navigation still toggleable
- Two-column grids for some components
- Adjusted spacing
- Medium font sizes
- Cards stack on one side

**Laptop (768px+)**
- Full horizontal navigation
- Multi-column grids (2-3 columns)
- Full footer with 4 column grid
- Larger font sizes
- Optimal spacing and whitespace

**Desktop (1024px+)**
- Maximum content width (1280px)
- Full gallery grids
- Optimal typography
- Complete animations and visual effects

### Mobile-First Approach
All CSS is built mobile-first:
1. Base styles for mobile (smallest screen)
2. Enhanced styles at 480px (tablet)
3. Further enhanced at 768px (laptop)
4. Final optimization at 1024px+ (desktop)

---

## 🔧 Using the Component Manager

### In Your Page Scripts

```javascript
// Inject inner page banner
ComponentManager.injectInnerBanner(
  'Page Title',
  'Page Subtitle',
  '135deg, #B00E09 0%, #CAAE5F 100%'
);

// Inject breadcrumb
ComponentManager.injectBreadcrumb([
  { label: 'Home', url: '/' },
  { label: 'About', url: '/about-us.html' },
  { label: 'Our Values', url: null }
]);
```

### Creating Custom Components

To add a new component:

1. **Add template to components.js**
```javascript
const MY_COMPONENT = `<div>...</div>`;
```

2. **Create injection function**
```javascript
function injectMyComponent() {
  const container = document.getElementById('dynamic-component');
  if (container) {
    container.innerHTML = MY_COMPONENT;
  }
}
```

3. **Call in initDynamicComponents()**
```javascript
injectMyComponent();
```

4. **Add styles to style.css**
```css
/* Component styles */
.my-component { /* styles */ }

@media (max-width: 768px) {
  .my-component { /* responsive */ }
}
```

---

## 🎯 CSS Classes Reference

### Navigation Classes
```css
.nav-logo          /* Logo/brand section */
.nav-menu          /* Navigation menu container */
.nav-list          /* Navigation list */
.nav-link          /* Individual nav links */
.nav-toggle        /* Mobile hamburger button */
.nav-cta           /* Call-to-action button */
```

### Header States
```css
.site-header        /* Main header container */
.site-header.scrolled  /* Header after scrolling */
.site-header.sticky    /* Sticky state (alias for scrolled) */
```

### Footer Classes
```css
.footer             /* Main footer */
.footer-grid        /* Column grid layout */
.footer-column      /* Individual columns */
.footer-logo        /* Footer branding */
.footer-links       /* Link lists */
.footer-socials     /* Social icons */
.footer-contact     /* Contact information */
.footer-bottom      /* Bottom section with copyright */
```

### Inner Page Classes
```css
.inner-banner       /* Top banner on inner pages */
.breadcrumb         /* Breadcrumb navigation */
.blog-sidebar       /* Sidebar on blog pages */
.sidebar-widget     /* Individual sidebar widgets */
```

---

## 🚀 Performance Optimizations

### Code Reuse
- Header/footer code loaded once, injected on all pages
- Shared CSS for all components
- No duplicate HTML across pages

### Lazy Loading
- Images use `loading="lazy"` attribute
- Sidebar and components load on demand
- Scripts loaded in correct order

### CSS Optimizations
- CSS variables for consistent values
- Minimal specificity for faster matching
- Grouped related styles for better compression
- Media queries at end of file

### JavaScript Optimizations
- Event delegation where possible
- Passive event listeners for scroll
- No render-blocking scripts
- Efficient DOM queries

---

## 🔐 Browser Support

✅ **Chrome/Edge** (v88+)  
✅ **Firefox** (v85+)  
✅ **Safari** (v14+)  
✅ **Mobile Safari** (iOS 14+)  
✅ **Chrome Mobile** (Latest)  

**Features with fallback:**
- CSS Grid → Flex fallback
- CSS Variables → Calculated values
- Viewport units → Pixel fallback
- Backdrop filter → Regular background

---

## 📋 Maintenance Guide

### Updating Navigation

1. Edit `components.js` - Update `HEADER_TEMPLATE`
2. Change applies to all pages automatically
3. No need to update individual HTML files

```javascript
const HEADER_TEMPLATE = `
  <!-- Your updated header HTML -->
`;
```

### Updating Footer

1. Edit `components.js` - Update `FOOTER_TEMPLATE`
2. Changes apply sitewide
3. Maintains all links and styling

```javascript
const FOOTER_TEMPLATE = `
  <!-- Your updated footer HTML -->
`;
```

### Adding New Navigation Link

1. Add `<li><a href="path">Label</a></li>` to nav-list in `HEADER_TEMPLATE`
2. Update active link logic in `updateActiveNavLink()` function
3. Add responsive styles if needed in media queries

### Customizing Colors

1. Edit `:root` in `style.css`
2. Modify brand colors:
```css
--primary: #B00E09;           /* Brand red */
--secondary-warm: #FAD2B8;    /* Brand peach */
--accent-gold: #CAAE5F;       /* Brand gold */
--accent-light: #FDEEDA;      /* Brand cream */
```

---

## ✅ Checklist for New Pages

When creating a new page that uses the component system:

- [ ] Include `components.js` before `script.js`
- [ ] Add `<div id="dynamic-header"></div>` at top of body
- [ ] Add `<div id="dynamic-footer"></div>` before closing body
- [ ] Add `<div id="dynamic-banner"></div>` for inner pages
- [ ] Call `ComponentManager.injectInnerBanner()` if needed
- [ ] Call `ComponentManager.injectBreadcrumb()` if needed
- [ ] Add page-specific CSS to style.css
- [ ] Test on mobile, tablet, and desktop
- [ ] Test responsive menu on all breakpoints
- [ ] Verify all links navigate correctly
- [ ] Check footer links and styling
- [ ] Validate HTML and CSS

---

## 🐛 Troubleshooting

### Header/Footer Not Appearing
**Problem:** Dynamic components not injected  
**Solution:** Check that `components.js` is loaded before `script.js`  
```html
<script src="components.js"></script>
<script src="script.js"></script>
```

### Mobile Menu Not Opening
**Problem:** Hamburger button not triggering menu  
**Solution:** Verify `.nav-toggle` and `.nav-menu` elements exist  
**Check:** Header CSS media queries for `display: flex` on `.nav-toggle`

### Styles Not Applying
**Problem:** Component styles not visible  
**Solution:** Ensure `style.css` is loaded in `<head>`  
**Check:** Browser DevTools for CSS errors or specificity issues

### Active Nav Link Not Highlighting
**Problem:** Current page link doesn't show as active  
**Solution:** Check `updateActiveNavLink()` function in components.js  
**Verify:** `window.location.pathname` matches href attribute

### Responsive Breakpoints Not Working
**Problem:** Styles don't change on smaller screens  
**Solution:** Check viewport meta tag: `<meta name="viewport" content="width=device-width, initial-scale=1.0" />`  
**Verify:** Media query syntax with exact pixel values

---

## 📊 File Structure

```
geneva-wellness/
├── components.js            ← Component manager & templates
├── style.css               ← All styling including responsive
├── script.js               ← Enhanced with scroll handling
├── index.html              ← Homepage with containers
├── about-us.html           ← Uses dynamic components
├── treatments.html         ← Uses dynamic components
├── gallery.html            ← Uses dynamic components
├── testimonials.html       ← Uses dynamic components
├── contact-us.html         ← Uses dynamic components
├── blog.php                ← Uses dynamic header/footer + sidebar
├── blog/
│   └── single.php          ← Blog post template
├── 404.html                ← Error page
├── img/                    ← All images
└── README.md               ← Documentation
```

---

## 🎓 Learning Resources

For developers extending this system:

1. **Understanding the Flow**: Read `components.js` top to bottom
2. **CSS Architecture**: Review style.css section by section
3. **Responsive Design**: Study media queries from mobile-first approach
4. **JavaScript Events**: Check scroll and click event handlers in script.js

---

**Questions or Issues?**  
Refer to the DEPLOYMENT_GUIDE.md for deployment instructions.  
Check QUICK_START.md for common tasks.
