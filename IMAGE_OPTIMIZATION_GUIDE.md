# Image Optimization Guide for Geneva Wellness Website

## Overview
This document outlines the image optimization requirements and best practices for the Geneva Wellness Institute website to ensure fast loading times and optimal performance across all devices.

## Current Issues & Solutions

### Problem: Slow Image Loading
**Solution:** Implement comprehensive image optimization across all assets.

---

## Image Optimization Checklist

### 1. Image Formats & Compression

#### WebP Format (Primary)
- Convert all PNG and JPG images to WebP for 25-35% smaller file sizes
- Use with fallback to JPG for older browsers

**Tools:**
- Online: TinyPNG, CloudConvert
- Local: ImageMagick, FFmpeg
- VS Code Extension: WebP Converter

**Implementation:**
```html
<picture>
  <source srcset="image.webp" type="image/webp">
  <img src="image.jpg" alt="Description" loading="lazy" width="400" height="300">
</picture>
```

#### Compression Levels
| Image Type | Max Size | Quality |
|---|---|---|
| Hero/Featured | 200KB | 80% WebP, 85% JPG |
| Gallery Thumbs | 50KB | 75% WebP, 80% JPG |
| Blog Posts | 150KB | 82% WebP, 85% JPG |
| Icons/Logos | 10KB | Lossless PNG |

### 2. Responsive Image Sizes

**Implement srcset for multiple screen sizes:**

```html
<img 
  src="image-800.webp" 
  srcset="
    image-400.webp 400w,
    image-600.webp 600w,
    image-800.webp 800w,
    image-1200.webp 1200w
  "
  sizes="(max-width: 480px) 100vw, (max-width: 768px) 80vw, 800px"
  alt="Descriptive text"
  loading="lazy"
  width="800"
  height="600"
>
```

**Recommended Breakpoints:**
- Mobile: 320px, 400px, 480px
- Tablet: 600px, 768px, 900px
- Desktop: 1024px, 1200px, 1400px

### 3. Image Dimensions & Aspect Ratios

| Section | Recommended Size | Aspect Ratio | Max Width |
|---|---|---|---|
| Hero Banner | 1920x1080 | 16:9 | 1920px |
| Featured Image (Blog) | 800x450 | 16:9 | 800px |
| Gallery Items | 500x500 | 1:1 | 500px |
| Team Members | 300x350 | 6:7 | 300px |
| Testimonial Avatar | 100x100 | 1:1 | 100px |
| Thumbnail (Blog) | 400x250 | 8:5 | 400px |
| Treatment Card | 500x300 | 5:3 | 500px |

### 4. Lazy Loading Implementation

**Add `loading="lazy"` to all below-the-fold images:**

```html
<!-- Hero image (Eager loading) -->
<img src="hero.webp" alt="Heroes" loading="eager" width="1920" height="1080">

<!-- Below the fold (Lazy loading) -->
<img src="gallery.webp" alt="Gallery" loading="lazy" width="500" height="500">
```

**Explicitly set width and height:**
```html
<!-- ✅ Good - Prevents layout shift -->
<img src="image.webp" alt="Alt" width="400" height="300" loading="lazy">

<!-- ❌ Bad - Causes layout shift -->
<img src="image.webp" alt="Alt" loading="lazy">
```

### 5. Caching & HTTP Headers

**Configure .htaccess for browser caching:**

```apache
# Enable compression
<IfModule mod_deflate.c>
  AddOutputFilterByType DEFLATE text/html text/plain text/css text/javascript application/javascript image/svg+xml
  AddOutputFilter DEFLATE js css svg
</IfModule>

# Cache images
<FilesMatch "\.(jpg|jpeg|png|gif|webp|ico)$">
  Header set Cache-Control "max-age=31536000, public"
</FilesMatch>

# Cache CSS and JS
<FilesMatch "\.(css|js)$">
  Header set Cache-Control "max-age=31536000, public"
</FilesMatch>

# Cache fonts
<FilesMatch "\.(woff|woff2|ttf|otf|eot)$">
  Header set Cache-Control "max-age=31536000, public"
</FilesMatch>

# Don't cache HTML
<FilesMatch "\.html$">
  Header set Cache-Control "max-age=3600, must-revalidate"
</FilesMatch>
```

### 6. GZIP/Brotli Compression

**Enable GZIP compression (Apache/mod_deflate):**
```apache
<IfModule mod_deflate.c>
  AddOutputFilterByType DEFLATE text/plain
  AddOutputFilterByType DEFLATE text/html
  AddOutputFilterByType DEFLATE text/xml
  AddOutputFilterByType DEFLATE text/css
  AddOutputFilterByType DEFLATE text/javascript
  AddOutputFilterByType DEFLATE application/xml
  AddOutputFilterByType DEFLATE application/xhtml+xml
  AddOutputFilterByType DEFLATE application/rss+xml
  AddOutputFilterByType DEFLATE application/javascript
  AddOutputFilterByType DEFLATE application/x-javascript
  AddOutputFilterByType DEFLATE image/svg+xml
</IfModule>
```

### 7. Minification

**CSS & JavaScript:**
- Use tools like: UglifyJS, CleanCSS, Terser
- Minified file naming: `style.min.css`, `script.min.js`

**HTML:**
- Minify HTML to remove unnecessary characters
- Tool: HTML Minifier

### 8. Content Delivery Network (CDN)

Consider using a CDN for:
- Image optimization
- Global distribution
- Automatic format conversion
- Fast delivery

**Recommended CDNs:**
- Cloudflare
- Bunny CDN
- ImageKit.io
- Cloudinary

---

## Image Inventory & Optimization Target

### Homepage (`index.html`)
- Hero image: 1920x1080 (Currently: ~500KB → Target: ~150KB)
- Hero blobs (decorative): SVG (optimized)
- Section background images: 1200x600 (Target: ~100KB each)
- Gallery thumbnails: 400x300 (Target: ~40KB each)
- Team images: 300x350 (Target: ~60KB each)
- Logo: SVG (optimized)

### Inner Pages
- **Banner images**: 1200x400 (Target: ~100KB)
- **Content images**: 800x600 (Target: ~100KB)
- **Thumbnail images**: 400x250 (Target: ~40KB)
- **Featured images**: 800x450 (Target: ~80KB)

### Blog
- **Featured image**: 800x450 (Target: ~100KB)
- **Thumbnail**: 400x250 (Target: ~40KB)
- **Inline images**: 600x400 (Target: ~70KB)

---

## Implementation Steps

### Phase 1: Image Asset Audit
1. [ ] Identify all images on each page
2. [ ] Document current file sizes
3. [ ] Create optimized versions with WebP
4. [ ] Generate responsive image versions
5. [ ] Test loading times

### Phase 2: Code Updates
1. [ ] Update all `<img>` tags with `srcset`, `sizes`, and `loading="lazy"`
2. [ ] Add explicit width and height attributes
3. [ ] Implement `<picture>` elements with WebP fallbacks
4. [ ] Add GZIP compression configuration

### Phase 3: Performance Testing
1. [ ] Test on desktop browsers (Chrome, Firefox, Safari)
2. [ ] Test on mobile devices (iOS and Android)
3. [ ] Verify lazy loading works
4. [ ] Measure Lighthouse scores
5. [ ] Check Core Web Vitals

---

## Performance Targets

| Metric | Target | Current |
|---|---|---|
| Largest Contentful Paint (LCP) | < 2.5s | TBD |
| First Input Delay (FID) | < 100ms | TBD |
| Cumulative Layout Shift (CLS) | < 0.1 | TBD |
| Total Page Size | < 2MB | TBD |
| Image Load Time | < 1s (average) | TBD |

---

## Lighthouse Targets

| Category | Target Score |
|---|---|
| Performance | 90+ |
| Accessibility | 95+ |
| Best Practices | 95+ |
| SEO | 100 |

---

## Example Optimized Images

### Gallery Image (Responsive)
```html
<figure class="gallery-item">
  <picture>
    <source 
      srcset="
        img/gallery-01-400.webp 400w,
        img/gallery-01-600.webp 600w,
        img/gallery-01-800.webp 800w
      "
      type="image/webp"
    >
    <img 
      src="img/gallery-01-400.jpg"
      srcset="
        img/gallery-01-400.jpg 400w,
        img/gallery-01-600.jpg 600w,
        img/gallery-01-800.jpg 800w
      "
      sizes="(max-width: 480px) 100vw, (max-width: 768px) 80vw, 400px"
      alt="Treatment result - facial skin improvement"
      loading="lazy"
      width="400"
      height="400"
    />
  </picture>
  <figcaption>HIFU Facial Lifting</figcaption>
</figure>
```

### Blog Featured Image
```html
<figure class="single-featured-image">
  <picture>
    <source 
      srcset="
        img/blog-featured-600.webp 600w,
        img/blog-featured-800.webp 800w,
        img/blog-featured-1200.webp 1200w
      "
      type="image/webp"
    >
    <img 
      src="img/blog-featured-800.jpg"
      srcset="
        img/blog-featured-600.jpg 600w,
        img/blog-featured-800.jpg 800w,
        img/blog-featured-1200.jpg 1200w
      "
      sizes="(max-width: 480px) 100vw, (max-width: 768px) 90vw, 800px"
      alt="Article featured image"
      loading="eager"
      width="800"
      height="450"
    />
  </picture>
</figure>
```

---

## Tools & Resources

### Optimization Tools
- **TinyPNG**: tinypng.com (Free, up to 20 images/month)
- **ImageOptim**: imageoptim.com (Free, Mac)
- **OptiPNG**: optipng.sourceforge.net (Free, Command line)
- **ImageMagick**: imagemagick.org (Free, Powerful)

### Testing Tools
- **Google PageSpeed Insights**: pagespeedinsights.web.dev
- **GTmetrix**: gtmetrix.com
- **WebPageTest**: webpagetest.org
- **Lighthouse**: Built into Chrome DevTools

### Format Conversion
- **CloudConvert**: cloudconvert.com
- **Convertio**: convertio.co
- **FFmpeg**: ffmpeg.org (Command line)

---

## Checklist for Developers

- [ ] All images are in WebP format with JPG fallbacks
- [ ] Images have proper width/height attributes
- [ ] Below-the-fold images use `loading="lazy"`
- [ ] Responsive sizes defined with `srcset` and `sizes`
- [ ] Browser caching configured (.htaccess)
- [ ] GZIP compression enabled
- [ ] CSS and JS files are minified
- [ ] Tested on mobile and desktop
- [ ] Lighthouse score > 90 for Performance
- [ ] Core Web Vitals pass
- [ ] Page load time < 2.5 seconds
- [ ] Total page size < 2MB

---

## Monitoring & Maintenance

- Run Lighthouse audit monthly
- Monitor Core Web Vitals in Google Search Console
- Update images if they fall below quality standards
- Review and update cache headers quarterly

---

## Support & Questions

For questions about image optimization, consult the team or refer to:
- Web.dev Performance Guide: web.dev/performance
- MDN Web Images: developer.mozilla.org/en-US/docs/Web/HTML/Element/img
