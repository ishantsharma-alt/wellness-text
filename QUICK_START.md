# Geneva Wellness — Quick Start Guide

Fast reference for common tasks during development and maintenance.

## 🚀 Getting Started

### Local Development
1. Open project folder in VS Code
2. Use Live Server extension to view locally
3. All files update in real-time

### File Locations
```
geneva-wellness/
├── index.html              # Homepage
├── about-us.html           # About page
├── treatments.html         # Treatments catalog
├── gallery.html            # Before/after gallery
├── testimonials.html       # Client testimonials
├── contact-us.html         # Contact & consultation form
├── blog.php                # Blog archive
├── blog/single.php         # Single blog post template
├── 404.html                # Error page
├── style.css               # All styling
├── script.js               # All functionality
├── img/                    # All images
└── README.md               # Project documentation
```

---

## ✏️ Common Tasks

### Update Business Information

**Location 1: Header** (All Pages)
```html
<!-- In header - update logo link -->
<a href="/">Home</a>

<!-- Contact info in header -->
<a href="tel:+1234567890">(123) 456-7890</a>
<a href="mailto:hello@genevawellness.com">hello@genevawellness.com</a>
```

**Location 2: Contact Page** (`contact-us.html`)
```html
<!-- Update contact cards -->
<div class="contact-info-card">
  <h3>📍 Address</h3>
  <p>Your Address Here</p>
  <p>City, State ZIP</p>
</div>

<div class="contact-info-card">
  <h3>📞 Phone</h3>
  <p><a href="tel:+1234567890">(123) 456-7890</a></p>
  <p>Mon-Fri: 9am-6pm</p>
</div>

<div class="contact-info-card">
  <h3>✉️ Email</h3>
  <p><a href="mailto:hello@genevawellness.com">hello@genevawellness.com</a></p>
  <p>Usually reply within 24 hours</p>
</div>
```

**Location 3: Footer** (All Pages)
```html
<footer class="footer">
  <!-- Update business info -->
  <p>&copy; 2024 Geneva Wellness Institute. All rights reserved.</p>
  <p>123 Main Street, City, State 12345</p>
  <p><a href="tel:+1234567890">(123) 456-7890</a> | 
     <a href="mailto:hello@genevawellness.com">hello@genevawellness.com</a></p>
</footer>
```

### Add a New Blog Post

**Option 1: Create Static HTML**
1. Copy `blog/single.php` to `blog/my-post-title.html`
2. Update:
   ```html
   <h1>Your Blog Post Title</h1>
   <div class="post-meta">
     <span class="category">Category Name</span>
     <span class="author">By Author Name</span>
     <span class="date">December 20, 2024</span>
   </div>
   ```
3. Add content between `<div class="article-content">` tags
4. Update featured image
5. Add link in `blog.php` grid

**Option 2: Use Database**
See DEPLOYMENT_GUIDE.md → Database Setup section

### Update Service Treatments

**File:** `treatments.html`
```html
<!-- Find .treatments-grid and add new card -->
<div class="treatment-card">
  <img src="img/treatment-new.jpg" alt="Treatment Name" loading="lazy" width="300" height="300" />
  <h3>Treatment Name</h3>
  <p>Treatment description goes here</p>
  <ul class="treatment-benefits">
    <li>✓ Benefit 1</li>
    <li>✓ Benefit 2</li>
    <li>✓ Benefit 3</li>
  </ul>
  <button class="btn btn-primary">Book Now</button>
</div>
```

### Add Gallery Images

**File:** `gallery.html`
```html
<!-- Find .gallery-grid and add new item -->
<figure class="gallery-item">
  <img src="img/gallery-NEW.jpg" alt="Descriptive text" loading="lazy" width="400" height="400" />
  <figcaption>Result Title</figcaption>
</figure>
```

### Update Testimonials

**File:** `testimonials.html`
```html
<!-- Find .testimonials-featured section and add -->
<div class="testimonial-card">
  <div class="testimonial-header">
    <img src="img/client-avatar.jpg" alt="Client Name" class="avatar" width="60" height="60" />
    <div class="testimonial-author">
      <h4>Client Name</h4>
      <p>Treatment received</p>
    </div>
  </div>
  <div class="stars">★★★★★</div>
  <blockquote class="testimonial-text">
    "Great testimonial quote here describing the experience and results."
  </blockquote>
  <span class="verified">✓ Verified Client</span>
</div>
```

### Update Team Members

**File:** `about-us.html`
```html
<!-- Find .team-grid and add new member -->
<div class="team-card">
  <img src="img/team-member.jpg" alt="Dr. Name" width="250" height="250" loading="lazy" />
  <h3>Dr. Name</h3>
  <p class="role">Position/Specialism</p>
  <p class="bio">Short bio describing expertise and approach...</p>
</div>
```

---

## 🎨 Brand Colors Reference

Always use these exact colors for consistency:

```css
--primary: #B00E09              /* Deep Red - Main brand color */
--secondary-warm: #FAD2B8       /* Warm Peachy-Tan - Accent */
--accent-gold: #CAAE5F          /* Muted Gold - Details */
--accent-light: #FDEEDA         /* Very Light Cream - Backgrounds */
```

**Usage Examples:**
- Primary: Headlines, buttons, brand elements
- Secondary: Accents, highlights, warm tones
- Accent Gold: Details, borders, subtle emphasis
- Accent Light: Backgrounds, light sections

---

## 🖼️ Image Management

### Folder Structure
```
img/
├── hero.webp                    # Homepage hero
├── gallery-01.webp thru -12.webp  # Gallery items
├── treatment-01.webp through -11.webp  # Treatment images
├── testimonial-01.jpg           # Client avatars
├── team-members/                # Team photos
├── blog/                        # Blog featured images
└── icons/                       # SVG icons
```

### Image Guidelines
- **Format:** WebP primary, JPG fallback
- **Max Sizes:** See IMAGE_OPTIMIZATION_GUIDE.md
- **Must Include:** `loading="lazy"` and explicit width/height
- **Format in HTML:**
```html
<picture>
  <source srcset="img/photo.webp" type="image/webp" />
  <img src="img/photo.jpg" alt="Description" loading="lazy" width="400" height="300" />
</picture>
```

---

## 🔗 Navigation Links

### Main Navigation (All Pages)
```html
<nav class="nav-menu">
  <ul class="nav-list">
    <li><a href="/">Home</a></li>
    <li><a href="/about-us.html">About Us</a></li>
    <li><a href="/treatments.html">Treatments</a></li>
    <li><a href="/gallery.html">Gallery</a></li>
    <li><a href="/testimonials.html">Testimonials</a></li>
    <li><a href="/blog.php">Blog</a></li>
    <li><a href="/contact-us.html">Contact</a></li>
  </ul>
</nav>
```

### Footer Links
```html
<footer class="footer">
  <div class="footer-content">
    <!-- Main sections -->
    <div class="footer-column">
      <h4>Company</h4>
      <ul>
        <li><a href="/about-us.html">About Us</a></li>
        <li><a href="/treatments.html">Treatments</a></li>
        <li><a href="/testimonials.html">Testimonials</a></li>
      </ul>
    </div>
    <div class="footer-column">
      <h4>Resources</h4>
      <ul>
        <li><a href="/blog.php">Blog</a></li>
        <li><a href="/gallery.html">Gallery</a></li>
        <li><a href="/contact-us.html">Contact</a></li>
      </ul>
    </div>
  </div>
</footer>
```

---

## ⚙️ Animation Reference

### Scroll Animations (AOS Library)
```html
<!-- Fade in from bottom -->
<div data-aos="fade-up">Content</div>

<!-- Zoom in -->
<section data-aos="zoom-in">Content</section>

<!-- Slide from left -->
<div data-aos="slide-right">Content</div>

<!-- With delay -->
<div data-aos="fade-up" data-aos-delay="200">Content</div>
```

### CSS Animations

**Button Hover:**
```css
.btn:hover {
  transform: translateY(-3px);
  box-shadow: 0 10px 20px rgba(0,0,0,0.2);
}
```

**Image Zoom:**
```css
.gallery-item img:hover {
  transform: scale(1.05);
}
```

**Popup Modal:**
```css
.popup-overlay.show {
  animation: popupSlideIn 0.5s ease-out;
}
```

---

## 🐛 Quick Troubleshooting

### Links Not Working
- Check file path is correct: `/about-us.html` not `./about`
- Verify file exists in project
- Clear browser cache (Ctrl+Shift+Delete)

### Images Not Showing
- Verify image path: `img/filename.webp`
- Check image file exists
- Use absolute path: `/img/filename.webp`
- Clear cache

### Form Not Submitting
- Verify action points to handler: `submit-contact.php`
- Check form has `name` attributes
- Enable reCAPTCHA (optional but recommended)

### Mobile Menu Not Working
- Ensure script.js is loaded
- Check for console errors (F12)
- Verify hamburger button HTML in header

### Animations Choppy
- Check browser performance (Ctrl+Shift+I)
- Reduce animation duration on mobile
- Disable heavy animations on slow devices

---

## 🚀 Performance Tips

### Quick Optimization Wins
1. **Compress Images**
   - Use TinyPNG.com
   - Convert to WebP format
   - Target sizes in IMAGE_OPTIMIZATION_GUIDE.md

2. **Minify Code**
   - CSS: Use cssnano.co
   - JS: Use terser.org
   - HTML: Use minify-html.com

3. **Enable Caching**
   - Add .htaccess caching rules
   - See DEPLOYMENT_GUIDE.md

4. **Test Performance**
   - Run Google PageSpeed Insights
   - Target: 90+ Performance score
   - Fix Core Web Vitals

### Lighthouse Targets
- **Performance:** 90+
- **Accessibility:** 95+
- **Best Practices:** 90+
- **SEO:** 100

---

## 📱 Mobile Testing

### Test on Real Devices
1. Connect phone to same WiFi
2. Get computer IP: `ipconfig` (Windows)
3. Visit: `http://192.168.1.XXX:5500` (Live Server port)
4. Test all pages and interactions

### Check Responsiveness
- [ ] Desktop (1920px)
- [ ] Tablet (768px)
- [ ] Mobile (375px)
- [ ] Touch interactions work
- [ ] Forms are easy to use
- [ ] Text is readable
- [ ] Buttons are easy to tap (44px+ minimum)

---

## 📧 Email & Forms

### Contact Form Setup
1. Create `submit-contact.php` (see DEPLOYMENT_GUIDE.md)
2. Update `contact-us.html` form action
3. Configure email recipients
4. Test submission

### Newsletter Signup
1. Create email list on service (Mailchimp, Brevo)
2. Add API integration to sidebar widget
3. Test subscription

### Automated Emails
- Confirmation to user
- Notification to business
- Follow-up in 24 hours
- Weekly newsletter

---

## 🔐 Security Checklist

- [ ] No sensitive info in front-end code
- [ ] Forms validate input
- [ ] CSRF tokens on forms (if backend)
- [ ] SQL injection protection (if database)
- [ ] HTTPS enabled (SSL certificate)
- [ ] reCAPTCHA on forms
- [ ] Security headers configured
- [ ] No debug mode in production
- [ ] API keys not exposed
- [ ] Regular backups scheduled

---

## 📋 Maintenance Schedule

### Daily
- Check for errors in logs
- Monitor uptime
- Respond to inquiries

### Weekly
- Update blog content
- Review analytics
- Check all links work

### Monthly
- Run Lighthouse audit
- Review performance metrics
- Update security patches
- Backup database

### Quarterly
- Full functionality test
- SEO optimization review
- Competitor analysis
- Content refresh

---

**Need Help?** See README.md for detailed documentation.  
**Deploying?** Follow DEPLOYMENT_GUIDE.md step-by-step.
