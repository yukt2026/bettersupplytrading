<?php
/**
 * Better Supply Trading Establishment - Global Footer Template
 * Full Bilingual Footnotes, CR Activities Notice, Category Links,
 * Compliance Disclaimers, and Client-Side Interactive Scripts.
 */

require_once __DIR__ . '/i18n.php';
$headingFont = ($lang === 'ar') ? 'font-arabic font-bold' : 'font-heading font-bold';
?>
    </main>

    <!-- Global Corporate Footer -->
    <footer class="bg-bscharcoal text-slate-400 pt-16 pb-24 border-t border-stone-800 relative z-20 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 lg:gap-8 pb-12 border-b border-stone-800">
                
                <!-- Col 1: Corporate Identity & Positioning (4 cols) -->
                <div class="lg:col-span-4 space-y-4">
                    <a href="<?= route_url('') ?>" class="inline-block">
                        <?php if ($lang === 'ar'): ?>
                            <img src="<?= asset_url('public/images/logo-horizontal-ar-white.svg') ?>" alt="<?= t('company_name') ?>" class="h-10 sm:h-11 w-auto object-contain">
                        <?php else: ?>
                            <img src="<?= asset_url('public/images/logo-horizontal-en-white.svg') ?>" alt="<?= t('company_name') ?>" class="h-10 sm:h-11 w-auto object-contain">
                        <?php endif; ?>
                    </a>
                    
                    <p class="text-xs leading-relaxed text-slate-300 max-w-sm">
                        <?= ($lang === 'ar') 
                            ? 'مؤسسة سعودية متخصصة في التوريد التجاري وتجارة الجملة للمواد الكيميائية والأملاح الصناعية، مواد حقول النفط، معالجة المياه، والمدخلات الزراعية وخدمات الاستيراد والتصدير، مقرها مدينة الدمام.' 
                            : 'A Saudi-based commercial trading and procurement intermediary in Dammam, connecting global manufacturers with industrial, agricultural, and commercial buyers across Saudi Arabia and the GCC.' ?>
                    </p>
                    
                    <?php 
                    $cr_num = trim($site_config['contacts']['cr_number'] ?? '');
                    if (!empty($cr_num) && strpos($cr_num, '[ENTER') === false): 
                    ?>
                    <div class="text-xs text-slate-400 pt-2">
                        <span class="font-semibold text-bsgold"><?= ($lang === 'ar') ? 'السجل التجاري:' : 'C.R.:' ?></span>
                        <span><?= htmlspecialchars($cr_num) ?></span>
                    </div>
                    <?php endif; ?>
                </div>

                <!-- Col 2: Core Sourcing Divisions (Sequence A - I) (3 cols) -->
                <div class="lg:col-span-3">
                    <h3 class="text-bsgold <?= $headingFont ?> text-xs uppercase tracking-wider mb-4"><?= t('labels.product_divisions') ?></h3>
                    <ul class="space-y-2 text-xs">
                        <li><a href="<?= route_url('agrochemicals') ?>" class="hover:text-bsgold transition-colors"><?= t('nav.cat_a') ?></a></li>
                        <li><a href="<?= route_url('industrial-chemicals') ?>" class="hover:text-bsgold transition-colors"><?= t('nav.cat_b') ?></a></li>
                        <li><a href="<?= route_url('industrial-salts') ?>" class="hover:text-bsgold transition-colors"><?= t('nav.cat_c') ?></a></li>
                        <li><a href="<?= route_url('building-materials') ?>" class="hover:text-bsgold transition-colors"><?= t('nav.cat_d') ?></a></li>
                        <li><a href="<?= route_url('machinery') ?>" class="hover:text-bsgold transition-colors"><?= t('nav.cat_e') ?></a></li>
                        <li><a href="<?= route_url('spare-parts') ?>" class="hover:text-bsgold transition-colors"><?= t('nav.cat_f') ?></a></li>
                        <li><a href="<?= route_url('products') ?>#cat-g" class="hover:text-bsgold transition-colors"><?= t('nav.cat_g') ?></a></li>
                        <li><a href="<?= route_url('other-trading') ?>" class="hover:text-bsgold transition-colors"><?= t('nav.cat_h') ?></a></li>
                        <li><a href="<?= route_url('international-trading') ?>" class="hover:text-bsgold transition-colors"><?= t('nav.cat_i') ?></a></li>
                        <li class="pt-2 border-t border-stone-800 text-[11px] text-stone-400 flex flex-wrap gap-x-2.5 gap-y-1">
                            <a href="<?= route_url('water-treatment') ?>" class="hover:text-bsgold transition-colors"><?= ($lang === 'ar') ? 'كيماويات المياه' : 'Water Treatment' ?></a>
                            <span>•</span>
                            <a href="<?= route_url('coco-peat') ?>" class="hover:text-bsgold transition-colors"><?= ($lang === 'ar') ? 'كوكوبيت' : 'Coco Peat' ?></a>
                            <span>•</span>
                            <a href="<?= route_url('fertilizers') ?>" class="hover:text-bsgold transition-colors"><?= ($lang === 'ar') ? 'أسمدة' : 'Fertilizers' ?></a>
                        </li>
                    </ul>
                </div>

                <!-- Col 3: Navigation & Governance (2 cols) -->
                <div class="lg:col-span-2">
                    <h3 class="text-bsgold <?= $headingFont ?> text-xs uppercase tracking-wider mb-4"><?= t('labels.quick_links') ?></h3>
                    <ul class="space-y-2 text-xs">
                        <li><a href="<?= route_url('') ?>" class="hover:text-bsgold transition-colors"><?= t('nav.home') ?></a></li>
                        <li><a href="<?= route_url('about') ?>" class="hover:text-bsgold transition-colors"><?= t('nav.about') ?></a></li>
                        <li><a href="<?= route_url('products') ?>" class="hover:text-bsgold transition-colors"><?= t('nav.products') ?></a></li>
                        <li><a href="<?= route_url('industries') ?>" class="hover:text-bsgold transition-colors"><?= t('nav.industries') ?></a></li>
                        <li><a href="<?= route_url('international-trading') ?>" class="hover:text-bsgold transition-colors"><?= t('nav.global_sourcing') ?></a></li>
                        <li><a href="<?= route_url('partners') ?>" class="hover:text-bsgold transition-colors"><?= t('nav.partners') ?></a></li>
                        <li><a href="<?= route_url('contact') ?>" class="hover:text-bsgold transition-colors"><?= t('nav.contact') ?></a></li>
                        <li class="pt-2"><a href="<?= asset_url('public/docs/Better_Supply_Company_Profile.pdf') ?>" target="_blank" class="inline-flex items-center gap-1.5 text-bsgold hover:text-white font-semibold transition-colors"><svg class="w-3.5 h-3.5 text-bsgold shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg><span><?= t('nav.download_profile') ?> (PDF)</span></a></li>
                        <li class="pt-1"><a href="<?= route_url('privacy') ?>" class="hover:text-slate-300 transition-colors text-slate-500"><?= t('seo.privacy.title') ?></a></li>
                        <li><a href="<?= route_url('terms') ?>" class="hover:text-slate-300 transition-colors text-slate-500"><?= t('seo.terms.title') ?></a></li>
                    </ul>
                </div>

                <!-- Col 4: Corporate Sourcing Desk (3 cols) -->
                <div class="lg:col-span-3 space-y-3">
                    <h3 class="text-bsgold <?= $headingFont ?> text-xs uppercase tracking-wider mb-4"><?= t('labels.contact_us') ?></h3>
                    <ul class="space-y-3 text-xs text-slate-400">
                        <li class="flex items-start gap-2.5">
                            <svg class="w-4 h-4 text-bsgold shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                            <span><?= ($lang === 'ar') ? $site_config['contacts']['address_ar'] : $site_config['contacts']['address_en'] ?></span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-bsgold shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            <a href="mailto:<?= htmlspecialchars($site_config['contacts']['email']) ?>" class="hover:text-white transition-colors">
                                <?= htmlspecialchars($site_config['contacts']['email']) ?>
                            </a>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-bsgold shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            <a href="tel:<?= htmlspecialchars($site_config['contacts']['phone']) ?>" class="hover:text-white transition-colors">
                                <?= htmlspecialchars($site_config['contacts']['phone']) ?>
                            </a>
                        </li>
                    </ul>
                    
                    <div class="pt-2">
                        <a href="<?= route_url('contact') ?>#rfq-form" class="inline-flex items-center gap-2 px-4 py-2 text-xs font-bold text-white bg-bsemerald hover:bg-bsforest rounded-lg shadow-sm transition-colors">
                            <span><?= t('buttons.request_quote') ?></span>
                            <span class="rtl:rotate-180">&rarr;</span>
                        </a>
                    </div>
                </div>

            </div>

            <!-- Mandatory Legal & Compliance Disclaimers -->
            <div class="pt-8 text-[11px] leading-relaxed text-slate-500 space-y-2">
                <p>
                    <strong><?= ($lang === 'ar') ? 'تنويه الإفصاح والامتثال:' : 'Compliance & Sourcing Disclosure:' ?></strong>
                    <?= ($lang === 'ar') 
                        ? 'تعمل مؤسسة أفضل توريد التجارية كوسيط تجاري ومورد بالجملة ومكتب مشتريات للمواد والمنتجات المحددة. المؤسسة ليست مصنعاً كيميائياً، ولا تمثل وكيلاً حصرياً أو معتمداً لأي من شركات النفط والغاز الكبرى (مثل أرامكو السعودية أو شلمبرجير). كافة المعروضات تخضع لمطابقة المواصفات الفنية وتأكيد المصنعين وشروط التعاقد الرسمية.'
                        : 'Better Supply Trading Establishment operates as an independent commercial trading, procurement, and sourcing business. The company is not a chemical manufacturer, nor does it assert authorized distributorship or vendor approvals from third-party energy operators (such as Saudi Aramco or SLB) unless documented. All product listings represent commercial sourcing categories subject to specification matching and supplier availability.' ?>
                </p>
                <div class="flex flex-col sm:flex-row items-center justify-between pt-4 border-t border-slate-800/80 gap-4">
                    <p>&copy; <?= date('Y') ?> <?= t('company_name') ?> (bettersupplytrading.com). <?= t('labels.all_rights_reserved') ?></p>
                    <div class="flex items-center gap-4 text-slate-500">
                        <a href="<?= route_url('privacy') ?>" class="hover:text-slate-300"><?= ($lang === 'ar') ? 'سياسة الخصوصية' : 'Privacy Policy' ?></a>
                        <span>•</span>
                        <a href="<?= route_url('terms') ?>" class="hover:text-slate-300"><?= ($lang === 'ar') ? 'الشروط والأحكام' : 'Terms of Sourcing' ?></a>
                    </div>
                </div>
            </div>

        </div>
    </footer>

    <!-- Unified Floating Action Stack (Request RFQ + WhatsApp Commercial Desk) -->
    <div id="floating-actions-stack" class="fixed bottom-5 sm:bottom-6 <?= ($lang === 'ar') ? 'left-4 sm:left-6' : 'right-4 sm:right-6' ?> z-40 flex flex-col items-end rtl:items-start gap-2.5 sm:gap-3 pointer-events-none">
        
        <!-- 1. Floating "Request RFQ" Pill Button -->
        <a href="<?= route_url('contact') ?>#rfq-form" class="pointer-events-auto inline-flex items-center gap-2 bg-bsemerald hover:bg-bsforest text-white font-bold text-xs sm:text-sm px-4 sm:px-5 py-2.5 sm:py-3 rounded-full shadow-2xl transition-all transform hover:-translate-y-0.5 hover:scale-105 focus:outline-none focus:ring-4 focus:ring-emerald-400/50 border border-bsgold/40" aria-label="<?= t('nav.request_rfq') ?>">
            <svg class="w-4 h-4 sm:w-5 sm:h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
            <span class="whitespace-nowrap"><?= t('nav.request_rfq') ?></span>
        </a>

        <!-- 2. Floating WhatsApp / Commercial Desk Button -->
        <div class="pointer-events-auto flex items-center gap-2.5 group">
            <span class="hidden md:inline-block bg-bscharcoal/95 text-bsgold text-xs font-semibold px-3 py-1.5 rounded-full shadow-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none whitespace-nowrap border border-bsgold/30 backdrop-blur-sm">
                <?= ($lang === 'ar') ? 'تواصل مع مكتب المشتريات' : 'Direct Commercial Desk' ?>
            </span>
            <a href="https://wa.me/<?= preg_replace('/[^0-9]/', '', $site_config['contacts']['phone']) ?>?text=<?= urlencode(($lang === 'ar') ? 'مرحباً مؤسسة أفضل توريد التجارية، أود الاستفسار عن عروض الأسعار.' : 'Hello Better Supply Trading Establishment, I would like to inquire about industrial sourcing and quotations.') ?>" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp Procurement Desk" class="relative bg-bsforest hover:bg-bsemerald text-white w-11 h-11 sm:w-13 sm:h-13 rounded-full flex items-center justify-center shadow-2xl hover:scale-110 transition-all duration-300 border border-white/20">
                <span class="absolute -inset-1 rounded-full bg-emerald-500 opacity-25 animate-ping pointer-events-none"></span>
                <svg class="w-5 h-5 sm:w-6 sm:h-6 relative z-10" fill="currentColor" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.312.045-.634.053-.99-.071-.341-.119-.844-.288-1.464-.567-1.428-.642-2.355-2.096-2.427-2.19-.071-.096-.576-.767-.576-1.463 0-.696.365-1.037.495-1.18.13-.143.284-.179.379-.179.096 0 .191.002.274.006.09.004.21.032.327.283.12.257.411 1.002.447 1.074.036.072.06.156.012.251-.048.096-.072.156-.144.239-.072.084-.15.187-.215.251-.072.072-.148.15-.064.294.084.144.373.616.801.998.552.492 1.017.644 1.161.716.144.072.228.06.312-.036.084-.096.361-.42.457-.564.096-.144.192-.12.324-.072.132.048.837.395.981.467.144.072.24.108.276.168.036.06.036.348-.108.753z"/></svg>
            </a>
        </div>

    </div>

    <!-- AOS Script CDN & VanillaTilt Interactive 3D Depth -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.8.0/vanilla-tilt.min.js"></script>

    <!-- Interactive Scripts: Parallax, AOS, VanillaTilt & RFQ Handler -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // High-Performance Parallax Scroll Event (Desert Iron Pattern)
            const parallaxImages = document.getElementsByClassName('parallax-img');
            let ticking = false;

            window.addEventListener('scroll', () => {
                if (!parallaxImages.length) return;
                if (!ticking) {
                    window.requestAnimationFrame(() => {
                        const scrollY = window.scrollY;
                        for (let i = 0; i < parallaxImages.length; i++) {
                            const img = parallaxImages[i];
                            const speed = parseFloat(img.getAttribute('data-speed')) || 0.25;
                            if (scrollY < window.innerHeight * 1.5) {
                                img.style.transform = `scale(1.12) translateY(${scrollY * speed}px)`;
                            }
                        }
                        ticking = false;
                    });
                    ticking = true;
                }
            }, { passive: true });

            // Dynamic AOS scanner: ensures every section and card gets animated
            const headings = document.querySelectorAll('section h2, section h3');
            headings.forEach(el => {
                if (!el.hasAttribute('data-aos')) el.setAttribute('data-aos', 'fade-up');
            });

            const isMobile = window.innerWidth < 768;
            const anims = isMobile 
                ? ['fade-up', 'zoom-in', 'zoom-in-up'] 
                : ['fade-up', 'fade-left', 'fade-right', 'zoom-in'];
            let aIdx = 0;

            document.querySelectorAll('.grid > div, .grid > a').forEach(el => {
                if (!el.hasAttribute('data-aos')) {
                    el.setAttribute('data-aos', anims[aIdx % anims.length]);
                    el.setAttribute('data-aos-duration', '800');
                    aIdx++;
                }
            });

            // Initialize AOS
            if (typeof AOS !== 'undefined') {
                AOS.init({
                    duration: 800,
                    once: true,
                    offset: 40,
                    easing: 'ease-out-cubic'
                });
            }

            // Interactive 3D Tilt on Desktop Cards (>=1024px)
            if (typeof VanillaTilt !== 'undefined' && window.innerWidth >= 1024) {
                VanillaTilt.init(document.querySelectorAll(".grid > div.bg-slate-950, .hover-tilt"), {
                    max: 4,
                    speed: 400,
                    glare: true,
                    "max-glare": 0.12,
                    scale: 1.02
                });
            }

            // RFQ Form AJAX Submissions
            const rfqForm = document.getElementById('commercial-rfq-form');
            if (rfqForm) {
                rfqForm.addEventListener('submit', async function(e) {
                    e.preventDefault();
                    
                    const submitBtn = rfqForm.querySelector('button[type="submit"]');
                    const statusBox = document.getElementById('rfq-status-message');
                    const originalBtnText = submitBtn.innerHTML;
                    
                    submitBtn.disabled = true;
                    submitBtn.innerHTML = '<span><?= t('rfq_form.submitting') ?></span>';
                    if (statusBox) statusBox.classList.add('hidden');

                    const formData = new FormData(rfqForm);

                    try {
                        const response = await fetch('<?= asset_url("rfq-handler.php") ?>', {
                            method: 'POST',
                            body: formData
                        });
                        const result = await response.json();

                        if (statusBox) {
                            statusBox.classList.remove('hidden');
                            if (result.success) {
                                statusBox.className = 'p-5 rounded-xl border border-emerald-300 bg-emerald-50 text-emerald-900 text-sm mb-6 shadow-xs';
                                statusBox.innerHTML = `
                                    <div class="font-bold text-base mb-1 text-emerald-800">${result.title || 'Success'}</div>
                                    <div>${result.message}</div>
                                    ${result.lead_id ? `<div class="mt-2 text-xs text-emerald-700 font-mono font-semibold">Reference ID: ${result.lead_id}</div>` : ''}
                                `;
                                rfqForm.reset();

                                // GA4 Event Dispatch
                                if (typeof gtag === 'function') {
                                    gtag('event', 'rfq_submit', {
                                        'event_category': 'Leads',
                                        'event_label': formData.get('category'),
                                        'value': 1
                                    });
                                }
                            } else {
                                statusBox.className = 'p-5 rounded-xl border border-rose-300 bg-rose-50 text-rose-900 text-sm mb-6 shadow-xs';
                                let errorList = '';
                                if (result.errors) {
                                    errorList = '<ul class="list-disc ps-5 mt-2 space-y-1">';
                                    for (let key in result.errors) {
                                        errorList += `<li>${result.errors[key]}</li>`;
                                    }
                                    errorList += '</ul>';
                                }
                                statusBox.innerHTML = `
                                    <div class="font-bold text-base mb-1 text-rose-800">${result.message || 'Validation Error'}</div>
                                    ${errorList}
                                `;
                            }
                        }
                    } catch (err) {
                        if (statusBox) {
                            statusBox.classList.remove('hidden');
                            statusBox.className = 'p-5 rounded-xl border border-rose-300 bg-rose-50 text-rose-900 text-sm mb-6 shadow-xs';
                            statusBox.innerHTML = '<div class="font-bold text-base text-rose-800">Network Error</div><div>Unable to send inquiry. Please try again or email us directly at info@bettersupplytrading.com</div>';
                        }
                    } finally {
                        submitBtn.disabled = false;
                        submitBtn.innerHTML = originalBtnText;
                    }
                });
            }

            // Track phone / email clicks for GA4
            document.querySelectorAll('a[href^="tel:"], a[href^="mailto:"]').forEach(function(link) {
                link.addEventListener('click', function() {
                    if (typeof gtag === 'function') {
                        gtag('event', 'contact_click', {
                            'event_category': 'Engagement',
                            'event_label': this.getAttribute('href')
                        });
                    }
                });
            });
        });
    </script>
</body>
</html>
</body>
</html>
