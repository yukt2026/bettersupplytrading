# Deployment & DNS Guide: bettersupplytrading.com
**Target Domain:** `bettersupplytrading.com` | **Company:** Better Supply Corporation (مؤسسة أفضل توريد التجارية)  
**Location:** Dammam, Kingdom of Saudi Arabia

---

## 1. Recommended Hosting Environment
- **Recommended Provider:** Hostinger Cloud / Business Web Hosting, cPanel-based VPS, or AWS Lightsail / DigitalOcean LAMP stack.
- **PHP Version:** PHP 8.1, 8.2, or 8.3.
- **Required Extensions:** `ext-gd`, `ext-mbstring`, `ext-fileinfo`, `ext-openssl`, `ext-curl`, `ext-json`.
- **Web Server:** Apache 2.4+ (with `mod_rewrite` and `mod_headers` enabled) or Nginx.

---

## 2. DNS Records Setup (Domain Registrar)

Configure the following DNS records at your domain registrar (e.g., Hostinger, GoDaddy, Cloudflare, or SaudiNIC):

| Record Type | Host / Name | Value / Destination | TTL | Purpose |
|---|---|---|---|---|
| **A** | `@` | `[YOUR_SERVER_PUBLIC_IP]` | 3600 | Points apex domain to web server |
| **CNAME** | `www` | `bettersupplytrading.com.` | 3600 | Canonical alias for WWW |
| **MX** | `@` | `[YOUR_MAIL_SERVER_HOSTNAME]` (Priority 10) | 3600 | Routes corporate email |
| **TXT** | `@` | `v=spf1 mx include:[MAIL_PROVIDER_SPF] ~all` | 3600 | SPF email anti-spoofing |
| **TXT** | `default._domainkey` | `[YOUR_DKIM_PUBLIC_KEY]` | 3600 | DKIM email authentication |
| **TXT** | `_dmarc` | `v=DMARC1; p=quarantine; rua=mailto:dmarc@bettersupplytrading.com` | 3600 | DMARC policy |

---

## 3. Web Server File Permissions & Uploads Security

When transferring files to production via Git, SSH, or SFTP:
```bash
# Set base file and folder permissions
find /path/to/bettersupplytrading/ -type d -exec chmod 755 {} \;
find /path/to/bettersupplytrading/ -type f -exec chmod 644 {} \;

# Ensure storage directory is writable by web server (e.g. www-data or nobody)
chmod -R 775 storage/
chmod -R 775 storage/uploads/

# Block script execution inside the uploads folder (.htaccess in storage/)
echo "RemoveHandler .phtml .php .php3 .php4 .php5 .php6 .phps .cgi .pl .asp .aspx .shtml" > storage/uploads/.htaccess
echo "php_flag engine off" >> storage/uploads/.htaccess
```

---

## 4. SSL / TLS Certificate Setup
1. **Let's Encrypt / Certbot (Apache on Linux VPS):**
   ```bash
   sudo apt install certbot python3-certbot-apache
   sudo certbot --apache -d bettersupplytrading.com -d www.bettersupplytrading.com
   ```
2. **cPanel / Hostinger AutoSSL:**
   - In your hosting panel, navigate to **SSL/TLS Status** and click **Run AutoSSL** for `bettersupplytrading.com` and `www.bettersupplytrading.com`.
   - Enable **Force HTTPS Redirect**.

---

## 5. Nginx Configuration (If Deploying on Nginx instead of Apache)
If running Nginx, add the following to your `server { ... }` block:
```nginx
server {
    listen 80;
    listen [::]:80;
    server_name bettersupplytrading.com www.bettersupplytrading.com;
    return 301 https://bettersupplytrading.com$request_uri;
}

server {
    listen 443 ssl http2;
    listen [::]:443 ssl http2;
    server_name www.bettersupplytrading.com;
    return 301 https://bettersupplytrading.com$request_uri;
}

server {
    listen 443 ssl http2;
    listen [::]:443 ssl http2;
    server_name bettersupplytrading.com;
    root /var/www/bettersupplytrading;
    index index.php;

    # SSL certificates
    ssl_certificate /etc/letsencrypt/live/bettersupplytrading.com/fullchain.pem;
    ssl_certificate_key /etc/letsencrypt/live/bettersupplytrading.com/privkey.pem;

    # Route clean URLs
    location / {
        try_files $uri $uri/ /router.php?$args;
    }

    # Pass PHP scripts to FastCGI
    location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/var/run/php/php8.2-fpm.sock;
    }

    # Disallow access to storage files directly
    location /storage/ {
        deny all;
        return 403;
    }

    # Cache static assets
    location ~* \.(jpg|jpeg|png|webp|svg|css|js|ico)$ {
        expires 30d;
        add_header Cache-Control "public, no-transform";
    }
}
```

---

## 6. Post-Deployment Verification Checklist
- [ ] Test root redirect: `https://bettersupplytrading.com/` -> `https://bettersupplytrading.com/en/`
- [ ] Test language toggle between `/en/` and `/ar/`
- [ ] Submit a test RFQ on `/en/contact/` and verify email receipt at `RFQ_TO_EMAIL`
- [ ] Verify `https://bettersupplytrading.com/sitemap.xml` in Google Search Console
- [ ] Verify `https://bettersupplytrading.com/robots.txt`
