# Better Supply Trading Establishment (مؤسسة أفضل توريد التجارية)
**Official B2B Website & Sourcing Portal**  
**Domain:** `bettersupplytrading.com` | **Commercial Hub:** Dammam, Kingdom of Saudi Arabia

---

## 1. Project Overview
This repository contains the complete, production-ready bilingual B2B corporate website and Request for Quotation (RFQ) portal for **Better Supply Trading Establishment** (`مؤسسة أفضل توريد التجارية`), based on the *Developer Handover Document Version 2.0 (October 2026)*.

### Key Features
- **14 Dedicated Bilingual Pages:** English (`/en/*`) and Professional Modern Standard Arabic (`/ar/*`) with full RTL glyph shaping, fluid typography, and mobile-first responsiveness.
- **Strict Compliance Guardrails:** Clean sourcing positioning; zero unverified claims (no Aramco/SLB endorsements, no manufacturer/distributor assertions).
- **Dynamic Category Feature Flags:** Toggle product divisions on/off via environment variables or `config.php` without code modifications.
- **Enterprise RFQ Engine:** Client-side AJAX + server-side validation, anti-spam honeypot, secure file attachments (10MB limit), and JSON lead archiving with email notification.
- **Complete Technical SEO:** Dual language-specific canonicals, reciprocal `hreflang` tags, OpenGraph social sharing tags, `sitemap.xml`, `robots.txt`, and Organization Schema.org JSON-LD.
- **Accessibility & UX:** High contrast, keyboard focus indicators, sticky "Request RFQ" action button, and Google Analytics 4 (GA4) event hooks.

---

## 2. Directory Structure

```
bettersupplytrading/
├── .htaccess                       # Apache routing & security headers
├── config.php                      # Application configuration & feature flags
├── header.php                      # Bilingual global header & navigation
├── footer.php                      # Bilingual footer with disclaimers & analytics
├── i18n.php                        # Localization engine & hreflang generators
├── index.php                       # Root auto-redirector (/en/ or /ar/)
├── rfq-handler.php                 # Lead processing & file upload backend
├── router.php                      # Central front-controller & route dispatcher
├── sitemap.xml                     # Search engine XML sitemap (reciprocal hreflang)
├── robots.txt                      # Web crawler indexing directives
├── IMAGES_TO_REPLACE.md            # Generated image inventory & licensing guide
├── FINAL_TODO.md                   # Client sign-off checklist
├── DEPLOYMENT_GUIDE.md             # Production launch & DNS setup
├── test_suite.php                  # Automated test suite (37 tests)
│
├── locales/
│   ├── en.php                      # Complete English copy & SEO metadata
│   └── ar.php                      # Professional Modern Standard Arabic copy
│
├── views/                          # Page view templates
│   ├── home.php                    # 8 homepage modules in exact PDF order
│   ├── about.php                   # Company background & 4-step workflow
│   ├── products.php                # Sourcing directory & category overview
│   ├── industrial-salts.php        # Bulk NaCl, vacuum salt, KCl, CaCl2, MgCl2
│   ├── oilfield-chemicals.php      # Drilling salts, clear-brines, barite
│   ├── water-treatment.php         # RO antiscalants, SMBS, PAC, coagulants
│   ├── fertilizers.php             # Urea, NPK, DAP, SOP, crop nutrition
│   ├── coco-peat.php               # India-origin coir blocks, grow bags
│   ├── packaging-disposables.php   # Corrugated cartons & foodservice items
│   ├── other-trading.php           # Specialized vehicles & office machinery
│   ├── industries.php              # 6 key industrial & commercial sectors
│   ├── international-trading.php   # GCC trading & South Asian corridors
│   ├── partners.php                # Manufacturer & distributor introductions
│   ├── contact.php                 # Sourcing desk & RFQ checklist
│   ├── privacy.php                 # Draft privacy policy (Legal review required)
│   ├── terms.php                   # Draft terms of supply (Legal review required)
│   └── partials/
│       └── rfq_form_partial.php    # Reusable RFQ form component
│
├── en/ & ar/                       # Physical directory index wrappers
├── public/
│   └── images/                     # WebP & JPG banners, product thumbnails, SVGs
└── storage/
    ├── rfqs.json                   # Archive of verified RFQ submissions
    └── uploads/                    # Secure storage for tender & TDS attachments
```

---

## 3. Local Development Setup

### Running with Apache (XAMPP / WampServer)
The project is already pre-configured to run out of the box in `c:\xampp\htdocs\bettersupplytrading\`.
1. Start **Apache** from the XAMPP Control Panel.
2. Open your web browser and visit:
   ```
   http://localhost/bettersupplytrading/
   ```
3. The site will automatically detect your browser language and redirect to `http://localhost/bettersupplytrading/en/` (or `/ar/`).

### Running with PHP Built-in Server
You can also run the site directly without Apache:
```powershell
cd c:\xampp\htdocs\bettersupplytrading
php -S localhost:8000
```
Then visit `http://localhost:8000/`.

---

## 4. Environment Variables Configuration

Copy `.env.example` or set the following system environment variables:

| Variable | Description | Default / Fallback |
|---|---|---|
| `RFQ_TO_EMAIL` | Destination mailbox for incoming RFQs | `[ENTER VERIFIED CORPORATE EMAIL]` |
| `CORPORATE_PHONE` | Primary business contact number | `[ENTER VERIFIED NUMBER]` |
| `CORPORATE_WHATSAPP` | Dedicated WhatsApp procurement number | `[ENTER VERIFIED NUMBER]` |
| `CORPORATE_ADDRESS_EN` | English headquarters office address | `Dammam, Eastern Province, KSA` |
| `CORPORATE_ADDRESS_AR` | Arabic headquarters office address | `الدمام، المنطقة الشرقية، المملكة العربية السعودية` |
| `SAUDI_CR_NUMBER` | Saudi Commercial Registration number | `[ENTER VERIFIED CR NUMBER]` |
| `GA4_ID` | Google Analytics 4 Measurement ID | `""` (Disabled) |
| `CATEGORY_SALTS_ENABLED` | Toggle Industrial Salts division | `true` |
| `CATEGORY_OILFIELD_ENABLED` | Toggle Oilfield Chemicals division | `true` |
| `CATEGORY_WATER_ENABLED` | Toggle Water Treatment division | `true` |
| `CATEGORY_FERTILIZERS_ENABLED` | Toggle Fertilizers division | `true` |
| `CATEGORY_COCOPEAT_ENABLED` | Toggle Coco Peat division | `true` |
| `CATEGORY_PACKAGING_ENABLED` | Toggle Packaging & Disposables division | `true` |
| `CATEGORY_OTHER_TRADING_ENABLED` | Toggle Vehicles & Office Machinery | `true` |

---

## 5. How to Edit Content & Translations
- **English Text:** Edit `locales/en.php`. All headings, paragraphs, FAQ items, and SEO meta tags are structured clearly.
- **Arabic Text:** Edit `locales/ar.php`. Maintain the high-level business Arabic phrasing.
- **Adding or Removing Products:** Modify the `$products` arrays in `locales/en.php` and `locales/ar.php`. Product cards will re-render automatically.

---

## 6. Running the Automated Test Suite
A comprehensive 37-point automated test script is provided in `test_suite.php`:
```powershell
php test_suite.php
```
This tests:
1. HTTP 200 and RTL/LTR attributes across all 32 English & Arabic pages.
2. RFQ submission, honeypot detection, missing field validation, and file attachment handling.
3. Strict compliance check ensuring zero forbidden claims ("Aramco approved", "SLB approved", "EDITOR / DEVELOPER NOTE") exist in the codebase.
