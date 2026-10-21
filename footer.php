<?php
/**
 * Better Supply Corporation - Global Footer Template
 * Full Bilingual Footnotes, CR Activities Notice, Category Links,
 * Compliance Disclaimers, and Client-Side Interactive Scripts.
 */

require_once __DIR__ . '/i18n.php';
$headingFont = ($lang === 'ar') ? 'font-arabic font-bold' : 'font-heading font-bold';
?>
    </main>

    <!-- Global Corporate Footer -->
    <footer class="bg-branddark text-slate-400 pt-16 pb-24 border-t border-slate-800 relative z-20 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 lg:gap-8 pb-12 border-b border-slate-800">
                
                <!-- Col 1: Corporate Identity & Positioning (4 cols) -->
                <div class="lg:col-span-4 space-y-4">
                    <a href="<?= route_url('') ?>" class="inline-block">
                        <?php if ($lang === 'ar'): ?>
                            <img src="<?= asset_url('public/images/logo-horizontal-ar-white.svg') ?>" alt="<?= t('company_name') ?>" class="h-10 w-auto object-contain">
                        <?php else: ?>
                            <img src="<?= asset_url('public/images/logo-horizontal-en-white.svg') ?>" alt="<?= t('company_name') ?>" class="h-10 w-auto object-contain">
                        <?php endif; ?>
                    </a>
                    
                    <p class="text-xs leading-relaxed text-slate-400 max-w-sm">
                        <?= ($lang === 'ar') 
                            ? 'مؤسسة سعودية متخصصة في التوريد التجاري وتجارة الجملة للمواد الكيميائية والأملاح الصناعية، مواد حقول النفط، معالجة المياه، والمدخلات الزراعية وخدمات الاستيراد والتصدير، مقرها مدينة الدمام.' 
                            : 'A Saudi-based commercial trading and procurement intermediary in Dammam, connecting global manufacturers with industrial, agricultural, and commercial buyers across Saudi Arabia and the GCC.' ?>
                    </p>
                    
                    <div class="text-xs text-slate-500 space-y-1 pt-2">
                        <div>
                            <span class="font-semibold text-slate-400"><?= ($lang === 'ar') ? 'السجل التجاري:' : 'CR Activities:' ?></span> 
                            <span>451011, 451012, 465910, 466910</span>
                        </div>
                        <div>
                            <span class="font-semibold text-slate-400"><?= ($lang === 'ar') ? 'رقم السجل:' : 'CR Number:' ?></span>
                            <span><?= htmlspecialchars($site_config['contacts']['cr_number']) ?></span>
                        </div>
                    </div>
                </div>

                <!-- Col 2: Core Sourcing Divisions (3 cols) -->
                <div class="lg:col-span-3">
                    <h3 class="text-white <?= $headingFont ?> text-xs uppercase tracking-wider mb-4"><?= t('labels.product_divisions') ?></h3>
                    <ul class="space-y-2 text-xs">
                        <?php if (is_category_active('industrial_salts')): ?>
                        <li><a href="<?= route_url('industrial-salts') ?>" class="hover:text-emerald-400 transition-colors"><?= t('nav.industrial_salts') ?></a></li>
                        <?php endif; ?>
                        <?php if (is_category_active('oilfield_chemicals')): ?>
                        <li><a href="<?= route_url('oilfield-chemicals') ?>" class="hover:text-emerald-400 transition-colors"><?= t('nav.oilfield_chemicals') ?></a></li>
                        <?php endif; ?>
                        <?php if (is_category_active('water_treatment')): ?>
                        <li><a href="<?= route_url('water-treatment') ?>" class="hover:text-emerald-400 transition-colors"><?= t('nav.water_treatment') ?></a></li>
                        <?php endif; ?>
                        <?php if (is_category_active('fertilizers')): ?>
                        <li><a href="<?= route_url('fertilizers') ?>" class="hover:text-emerald-400 transition-colors"><?= t('nav.fertilizers') ?></a></li>
                        <?php endif; ?>
                        <?php if (is_category_active('coco_peat')): ?>
                        <li><a href="<?= route_url('coco-peat') ?>" class="hover:text-emerald-400 transition-colors"><?= t('nav.coco_peat') ?></a></li>
                        <?php endif; ?>
                        <?php if (is_category_active('packaging_disposables')): ?>
                        <li><a href="<?= route_url('packaging-disposables') ?>" class="hover:text-emerald-400 transition-colors"><?= t('nav.packaging_disposables') ?></a></li>
                        <?php endif; ?>
                        <?php if (is_category_active('other_trading')): ?>
                        <li><a href="<?= route_url('other-trading') ?>" class="hover:text-emerald-400 transition-colors"><?= t('nav.other_trading') ?></a></li>
                        <?php endif; ?>
                    </ul>
                </div>

                <!-- Col 3: Navigation & Governance (2 cols) -->
                <div class="lg:col-span-2">
                    <h3 class="text-white <?= $headingFont ?> text-xs uppercase tracking-wider mb-4"><?= t('labels.quick_links') ?></h3>
                    <ul class="space-y-2 text-xs">
                        <li><a href="<?= route_url('about') ?>" class="hover:text-white transition-colors"><?= t('nav.about') ?></a></li>
                        <li><a href="<?= route_url('industries') ?>" class="hover:text-white transition-colors"><?= t('nav.industries') ?></a></li>
                        <li><a href="<?= route_url('international-trading') ?>" class="hover:text-white transition-colors"><?= t('nav.international_trading') ?></a></li>
                        <li><a href="<?= route_url('partners') ?>" class="hover:text-white transition-colors"><?= t('nav.partners') ?></a></li>
                        <li><a href="<?= route_url('contact') ?>" class="hover:text-white transition-colors"><?= t('nav.contact') ?></a></li>
                        <li><a href="<?= route_url('privacy') ?>" class="hover:text-white transition-colors text-slate-500 hover:text-slate-300"><?= t('seo.privacy.title') ?></a></li>
                        <li><a href="<?= route_url('terms') ?>" class="hover:text-white transition-colors text-slate-500 hover:text-slate-300"><?= t('seo.terms.title') ?></a></li>
                    </ul>
                </div>

                <!-- Col 4: Corporate Sourcing Desk (3 cols) -->
                <div class="lg:col-span-3 space-y-3">
                    <h3 class="text-white <?= $headingFont ?> text-xs uppercase tracking-wider mb-4"><?= t('labels.contact_us') ?></h3>
                    <ul class="space-y-3 text-xs text-slate-400">
                        <li class="flex items-start gap-2.5">
                            <svg class="w-4 h-4 text-emerald-400 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                            <span><?= ($lang === 'ar') ? $site_config['contacts']['address_ar'] : $site_config['contacts']['address_en'] ?></span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-emerald-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            <a href="mailto:<?= htmlspecialchars($site_config['contacts']['email']) ?>" class="hover:text-white transition-colors">
                                <?= htmlspecialchars($site_config['contacts']['email']) ?>
                            </a>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-emerald-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            <a href="tel:<?= htmlspecialchars($site_config['contacts']['phone']) ?>" class="hover:text-white transition-colors">
                                <?= htmlspecialchars($site_config['contacts']['phone']) ?>
                            </a>
                        </li>
                    </ul>
                    
                    <div class="pt-2">
                        <a href="<?= route_url('contact') ?>#rfq-form" class="inline-flex items-center gap-2 px-4 py-2 text-xs font-bold text-white bg-slate-800 hover:bg-slate-700 border border-slate-700 rounded transition-colors">
                            <span><?= t('buttons.request_quote') ?></span>
                            <span>&rarr;</span>
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
                        : 'Better Supply Corporation operates as an independent commercial trading, procurement, and sourcing business. The company is not a chemical manufacturer, nor does it assert authorized distributorship or vendor approvals from third-party energy operators (such as Saudi Aramco or SLB) unless documented. All product listings represent commercial sourcing categories subject to specification matching and supplier availability.' ?>
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

    <!-- Interactive Scripts: Mobile Nav & RFQ Form Async Submission -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mobile Menu Drawer Controls
            const menuBtn = document.getElementById('mobile-menu-btn');
            const closeBtn = document.getElementById('mobile-close-btn');
            const drawer = document.getElementById('mobile-drawer');

            if (menuBtn && drawer) {
                menuBtn.addEventListener('click', function() {
                    drawer.classList.remove('hidden');
                });
            }
            if (closeBtn && drawer) {
                closeBtn.addEventListener('click', function() {
                    drawer.classList.add('hidden');
                });
            }
            if (drawer) {
                drawer.addEventListener('click', function(e) {
                    if (e.target === drawer) {
                        drawer.classList.add('hidden');
                    }
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
                                statusBox.className = 'p-5 rounded-xl border border-emerald-500/40 bg-emerald-950/40 text-emerald-200 text-sm mb-6';
                                statusBox.innerHTML = `
                                    <div class="font-bold text-base mb-1 text-emerald-300">${result.title || 'Success'}</div>
                                    <div>${result.message}</div>
                                    ${result.lead_id ? `<div class="mt-2 text-xs text-emerald-400 font-mono">Reference ID: ${result.lead_id}</div>` : ''}
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
                                statusBox.className = 'p-5 rounded-xl border border-rose-500/40 bg-rose-950/40 text-rose-200 text-sm mb-6';
                                let errorList = '';
                                if (result.errors) {
                                    errorList = '<ul class="list-disc ps-5 mt-2 space-y-1">';
                                    for (let key in result.errors) {
                                        errorList += `<li>${result.errors[key]}</li>`;
                                    }
                                    errorList += '</ul>';
                                }
                                statusBox.innerHTML = `
                                    <div class="font-bold text-base mb-1 text-rose-300">${result.message || 'Validation Error'}</div>
                                    ${errorList}
                                `;
                            }
                        }
                    } catch (err) {
                        if (statusBox) {
                            statusBox.classList.remove('hidden');
                            statusBox.className = 'p-5 rounded-xl border border-rose-500/40 bg-rose-950/40 text-rose-200 text-sm mb-6';
                            statusBox.innerHTML = '<div class="font-bold text-base">Network Error</div><div>Unable to send inquiry. Please try again or email us directly.</div>';
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
