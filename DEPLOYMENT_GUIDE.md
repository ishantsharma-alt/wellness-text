# Geneva Wellness Institute — Deployment Guide

Complete step-by-step guide to deploy the website to production.

## 🚀 Pre-Deployment Checklist

### Content Review
- [ ] All placeholder text replaced with actual content
- [ ] Business address, phone, email verified
- [ ] Operating hours confirmed
- [ ] Team member information reviewed

### Images
- [ ] All placeholder images replaced with actual images
- [ ] Images optimized to WebP format
- [ ] Images sized according to IMAGE_OPTIMIZATION_GUIDE.md
- [ ] Fallback JPG versions created
- [ ] All images loaded and displaying correctly

### Forms & Backend
- [ ] Contact form handler configured
- [ ] Email notifications set up
- [ ] Form validation tested
- [ ] reCAPTCHA added (recommended)
- [ ] Newsletter subscription configured
- [ ] Database connections tested (if applicable)

### Links & Navigation
- [ ] All internal links tested
- [ ] External links verified
- [ ] Navigation menu tested on mobile
- [ ] Footer links updated
- [ ] Blog links configured

### Performance
- [ ] Lighthouse audit run (target: 90+)
- [ ] Page speed tested
- [ ] Mobile responsiveness verified
- [ ] All animations smooth
- [ ] No console errors

### SEO & Metadata
- [ ] Meta descriptions updated on all pages
- [ ] Keywords optimized
- [ ] Open Graph tags verified
- [ ] Structured data validated
- [ ] Sitemap.xml created
- [ ] Robots.txt configured

### Security
- [ ] SSL certificate installed
- [ ] HTTPS enabled
- [ ] Security headers configured
- [ ] Forms validated and sanitized
- [ ] No API keys in front-end code
- [ ] Privacy policy added
- [ ] Cookie consent configured

---

## 📋 Step-by-Step Deployment

### Step 1: Domain & Hosting Setup

1. **Register Domain**
   - Domain registrar: GoDaddy, Namecheap, etc.
   - Domain: genevawellness.com

2. **Choose Hosting**
   - Recommended: Bluehost, SiteGround, Kinsta
   - Requirements:
     - PHP 7.4+
     - .htaccess support
     - SSL certificate
     - Email hosting

3. **Configure DNS**
   - Point domain to hosting provider
   - Set up MX records for email
   - Add CNAME records if needed
   - TTL: 3600 seconds

### Step 2: Upload Files

1. **Connect via FTP/SFTP**
   ```bash
   sftp user@genevawellness.com
   cd /public_html
   put -r ./geneva-wellness/* ./
   ```

2. **Or Use Control Panel**
   - cPanel → File Manager
   - Navigate to /public_html
   - Upload all files

3. **File Structure**
   ```
   /public_html/
   ├── index.html
   ├── about-us.html
   ├── treatments.html
   ├── gallery.html
   ├── testimonials.html
   ├── contact-us.html
   ├── blog.php
   ├── 404.html
   ├── style.css
   ├── script.js
   ├── img/ (all images)
   ├── blog/ (blog posts)
   ├── .htaccess (configuration)
   └── README.md
   ```

### Step 3: Configure .htaccess

Create or update `.htaccess` in root directory:

```apache
# Redirect HTTP to HTTPS
<IfModule mod_rewrite.c>
  RewriteEngine On
  RewriteCond %{HTTPS} off
  RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
  
  # Remove .html from URLs (optional)
  RewriteBase /
  RewriteRule ^([a-zA-Z0-9\-]+)$ $1.html [L]
</IfModule>

# Enable compression
<IfModule mod_deflate.c>
  AddOutputFilterByType DEFLATE text/html text/plain text/css text/javascript application/javascript image/svg+xml
</IfModule>

# Browser caching
<FilesMatch "\.(jpg|jpeg|png|gif|webp|ico)$">
  Header set Cache-Control "max-age=31536000, public"
</FilesMatch>

<FilesMatch "\.(css|js)$">
  Header set Cache-Control "max-age=31536000, public"
</FilesMatch>

<FilesMatch "\.html$">
  Header set Cache-Control "max-age=3600, must-revalidate"
</FilesMatch>

# Prevent directory listing
Options -Indexes

# Security headers
<IfModule mod_headers.c>
  Header set X-Content-Type-Options "nosniff"
  Header set X-Frame-Options "SAMEORIGIN"
  Header set X-XSS-Protection "1; mode=block"
  Header set Referrer-Policy "strict-origin-when-cross-origin"
</IfModule>
```

### Step 4: SSL Certificate

1. **Install Free SSL (Let's Encrypt)**
   - cPanel → AutoSSL
   - Or automatic through hosting provider

2. **Verify HTTPS**
   - Visit: https://genevawellness.com
   - Check for green lock icon
   - No mixed content warnings

### Step 5: Email Setup

1. **Configure Email Accounts**
   - cPanel → Email Accounts
   - Create: hello@genevawellness.com
   - Create: support@genevawellness.com

2. **Test Email**
   - Send test from contact form
   - Verify receipt in email account

### Step 6: Contact Form Handler

Create `submit-contact.php` in root directory:

```php
<?php
// Anti-spam
if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone'])) {
    http_response_code(400);
    die('Invalid input');
}

// Sanitize
$name = htmlspecialchars($_POST['name']);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$phone = htmlspecialchars($_POST['phone']);
$message = htmlspecialchars($_POST['message']);

// Validate email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    die('Invalid email');
}

// Email headers
$to = 'hello@genevawellness.com';
$subject = 'New Consultation Request from ' . $name;
$headers = "From: " . $email . "\r\n";
$headers .= "Reply-To: " . $email . "\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

// Email body
$body = "
<html><body>
<h2>New Consultation Request</h2>
<p><strong>Name:</strong> $name</p>
<p><strong>Email:</strong> $email</p>
<p><strong>Phone:</strong> $phone</p>
<p><strong>Preferred Treatment:</strong> " . htmlspecialchars($_POST['treatment']) . "</p>
<p><strong>Message:</strong> $message</p>
</body></html>
";

// Send email
if (mail($to, $subject, $body, $headers)) {
    // Send confirmation to user
    mail($email, 'Consultation Request Received', 
        "Thank you for reaching out! We'll contact you within 24 hours.");
    http_response_code(200);
    echo 'Success';
} else {
    http_response_code(500);
    echo 'Error sending email';
}
?>
```

Update form in `contact-us.html`:
```html
<form class="contact-form" id="consultation-form" action="submit-contact.php" method="POST">
  <!-- form fields -->
</form>
```

### Step 7: Database Setup (Optional)

For dynamic blog:

1. **Create Database**
   - cPanel → MySQL Databases
   - Name: geneva_wellness_blog
   - User: genesis_blog

2. **Create Tables**
   ```sql
   CREATE TABLE posts (
     id INT PRIMARY KEY AUTO_INCREMENT,
     title VARCHAR(255) NOT NULL,
     slug VARCHAR(255) UNIQUE,
     content LONGTEXT,
     excerpt VARCHAR(500),
     featured_image VARCHAR(255),
     author VARCHAR(100),
     category VARCHAR(50),
     created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
     updated_at DATETIME ON UPDATE CURRENT_TIMESTAMP
   );
   
   CREATE TABLE comments (
     id INT PRIMARY KEY AUTO_INCREMENT,
     post_id INT NOT NULL,
     name VARCHAR(100),
     email VARCHAR(100),
     message LONGTEXT,
     created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
     FOREIGN KEY (post_id) REFERENCES posts(id)
   );
   ```

### Step 8: Analytics & Monitoring

1. **Google Analytics**
   - Sign up: google.com/analytics
   - Create property: genevawellness.com
   - Add tracking ID to all pages:
   ```html
   <!-- Google Analytics -->
   <script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX"></script>
   <script>
     window.dataLayer = window.dataLayer || [];
     function gtag(){dataLayer.push(arguments);}
     gtag('js', new Date());
     gtag('config', 'G-XXXXXXXXXX');
   </script>
   ```

2. **Google Search Console**
   - Sign up: search.google.com/search-console
   - Add property
   - Submit sitemap: /sitemap.xml
   - Submit blog posts

3. **Monitoring**
   - Set up uptime monitoring
   - Email alerts for downtime
   - Daily health checks

### Step 9: Sitemap & Robots

Create `sitemap.xml`:
```xml
<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  <url>
    <loc>https://genevawellness.com/</loc>
    <lastmod>2024-12-20</lastmod>
    <changefreq>weekly</changefreq>
    <priority>1.0</priority>
  </url>
  <url>
    <loc>https://genevawellness.com/about-us.html</loc>
    <changefreq>monthly</changefreq>
    <priority>0.9</priority>
  </url>
  <url>
    <loc>https://genevawellness.com/treatments.html</loc>
    <changefreq>monthly</changefreq>
    <priority>0.9</priority>
  </url>
  <!-- Add all pages -->
</urlset>
```

Create `robots.txt`:
```
User-agent: *
Allow: /
Disallow: /admin/
Sitemap: https://genevawellness.com/sitemap.xml
```

### Step 10: Testing

1. **Cross-Browser Testing**
   - Chrome, Firefox, Safari, Edge
   - Latest versions
   - Mobile browsers

2. **Load Testing**
   - LoadImpact.com
   - BlazeMeter.com
   - Target: 50+ concurrent users

3. **Security Testing**
   - SSL Labs: ssllabs.com/ssltest
   - Security Headers: securityheaders.com
   - OWASP top 10 review

4. **Functionality Testing**
   - [ ] All links work
   - [ ] Forms submit correctly
   - [ ] Images load
   - [ ] Navigation works
   - [ ] Mobile responsive
   - [ ] Animations smooth
   - [ ] No console errors

### Step 11: Post-Launch

1. **Monitor First 24 Hours**
   - Check error logs
   - Monitor server resources
   - Test all pages
   - Verify emails sending

2. **First Week**
   - Monitor analytics
   - Check for broken links
   - User feedback
   - Performance metrics

3. **Ongoing Maintenance**
   - Update security patches
   - Monitor analytics monthly
   - Review performance
   - Update blog content
   - Respond to inquiries

---

## 🔧 Troubleshooting

### Common Issues

#### Blank White Page
**Solution:**
- Check error_log in cPanel
- Enable debug mode in PHP
- Verify file permissions (644 for files, 755 for folders)
- Check .htaccess syntax

#### Forms Not Sending
**Solution:**
- Verify PHP mail() working
- Check email account exists
- Review PHP error logs
- Test with different email addresses

#### Images Not Loading
**Solution:**
- Verify image paths are correct
- Check image file permissions
- Use absolute URLs in CSS
- Ensure case-sensitivity matches (Linux servers)

#### Slow Page Load
**Solution:**
- Enable GZIP compression
- Set browser caching
- Optimize images further
- Use CDN for assets
- Minimize database queries

#### 404 Errors on .html Files
**Solution:**
- Update .htaccess rewrite rules
- Check file exists on server
- Verify file permissions
- Clear browser cache

---

## 📊 Performance Optimization After Launch

### Recommended Actions

1. **Image CDN**
   - Consider Cloudflare Image Optimization
   - Or ImageKit.io
   - Serves optimized images globally

2. **Google Pagespeed Insights**
   - Run monthly reports
   - Fix recommendations
   - Target 90+ score

3. **Lighthouse Audit**
   - Identify bottlenecks
   - Prioritize fixes
   - Monthly tracking

4. **Uptime Monitoring**
   - Uptimerobot.com (free)
   - PingDom.com
   - Daily notifications

---

## 📞 Support & Maintenance

### Monthly Maintenance
- [ ] Update WordPress/CMS if used
- [ ] Review security logs
- [ ] Update SSL certificate
- [ ] Backup database
- [ ] Review analytics
- [ ] Check all links
- [ ] Update content

### Quarterly Review
- [ ] Full security audit
- [ ] Update dependencies
- [ ] Performance review
- [ ] Competitor analysis
- [ ] SEO optimization

### Annual Review
- [ ] Full redesign audit
- [ ] Technology refresh
- [ ] New content strategy
- [ ] Training for staff

---

**Deployment Checklist Complete!**  
Your website is now live and ready for clients.
