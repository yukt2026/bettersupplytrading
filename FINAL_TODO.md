# Final Sign-Off & Verification Checklist (FINAL_TODO.md)
**Client / Business Owner:** Better Supply Corporation (مؤسسة أفضل توريد التجارية)  
**Handover Version:** 2.0 | **Prepared By:** Senior Full-Stack Development Team  
**Date:** October 21, 2026

The website code, design architecture, asset generation, and bilingual routing are 100% complete and tested. Before taking `bettersupplytrading.com` live to the general public, the business owner must provide or sign off on the following six items:

---

## 1. Official Corporate Logo Files
- [ ] **Current State:** Monogram vector assets (`logo-monogram-black.svg`, `logo-monogram-white.svg`, `logo-horizontal-en.svg`, `logo-horizontal-ar.svg`) are deployed with subtle "PLACEHOLDER LOGO" marks.
- [ ] **Action Required:** Supply final high-resolution vector artwork (`.ai` / `.svg` / `.eps`) for the approved Better Supply Corporation identity (both English and Arabic lockups).
- [ ] **Drop-in Location:** Replace files in `public/images/`.

---

## 2. Verified Corporate Contact Details
- [ ] **Current State:** All contact channels display compliant placeholders (`[ENTER VERIFIED CORPORATE EMAIL]`, `[ENTER VERIFIED NUMBER]`, `[ENTER VERIFIED ADDRESS]`, `[ENTER VERIFIED CR NUMBER]`).
- [ ] **Action Required:** Provide production credentials to be placed in environment variables or `config.php`:
  - `RFQ_TO_EMAIL`: The designated procurement team email for RFQ notifications.
  - `CORPORATE_PHONE`: Official company phone line in Dammam.
  - `CORPORATE_WHATSAPP`: Verified WhatsApp business number for procurement chats.
  - `CORPORATE_ADDRESS`: Physical office building address in Dammam.
  - `SAUDI_CR_NUMBER`: Verified 10-digit Saudi Commercial Registration number.

---

## 3. Native Arabic Linguistic Review
- [ ] **Current State:** Comprehensive Modern Standard Arabic (فصحى تجارية معاصرة) is deployed across all 14 pages and metadata, marked with `// NEEDS HUMAN REVIEW`.
- [ ] **Action Required:** Have a native Saudi Arabic speaker / business owner review `locales/ar.php` to ensure terminology perfectly aligns with corporate preferences and local procurement conventions.

---

## 4. Replacement of Generated Images with Licensed Commercial Photography
- [ ] **Current State:** High-resolution photorealistic industrial banners and thumbnails are generated and cataloged in `IMAGES_TO_REPLACE.md`. All strict compliance rules were enforced (no Aramco/SLB logos, no readable fake signs, no human faces, no implied company assets).
- [ ] **Action Required:** License commercial stock photography (from Shutterstock, Getty, or Adobe Stock) and overwrite the corresponding image files in `public/images/` as listed in `IMAGES_TO_REPLACE.md`.

---

## 5. Legal Review of Draft Privacy Policy & Terms of Supply
- [ ] **Current State:** Draft policies are live on `/en/privacy/`, `/ar/privacy/`, `/en/terms/`, and `/ar/terms/`, highlighted with `DRAFT - LEGAL REVIEW REQUIRED`.
- [ ] **Action Required:** Submit draft texts to legal counsel in Saudi Arabia to ensure compliance with the Saudi Personal Data Protection Law (PDPL) and local B2B commercial regulations.

---

## 6. Commercial Registration (CR) Activity Scope Confirmation
- [ ] **Current State:** Sourcing for agricultural fertilizers, coco peat, packaging, and chemicals is presented strictly under "sourcing on inquiry" framing.
- [ ] **Action Required:** Confirm that the 4 additional CR activities referenced in the handover PDF (covering fertilizer distribution, agricultural imports, and packaging) have been officially registered on the Ministry of Commerce CR certificate prior to active outbound promotion.
