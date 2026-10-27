<?php
/**
 * Better Supply Trading Establishment - Spare Parts View (views/spare-parts.php)
 * Dedicated category landing page for Industrial Spare Parts & Mechanical Components.
 * Light, modern B2B trading platform interface.
 */

$page = 'spare-parts';
require_once __DIR__ . '/../header.php';
$headingFont = ($lang === 'ar') ? 'font-arabic font-bold' : 'font-heading font-bold';
$cat_data = t('catalog')['f'];
?>

<!-- =========================================================================
     HERO BANNER (Dignified Corporate Aesthetic)
     ========================================================================= -->
<section class="relative bg-gradient-to-r from-bscharcoal via-[#1a382c] to-bscharcoal text-white py-16 sm:py-24 border-b border-stone-200 overflow-hidden">
    <div class="absolute inset-0 z-0 opacity-25">
        <picture>
            <source srcset="<?= img_url('banner_oilfield.webp') ?>" type="image/webp">
            <img src="<?= img_url('banner_oilfield.jpg') ?>" alt="Industrial spare parts and mechanical components sourcing" class="w-full h-full object-cover">
        </picture>
        <div class="absolute inset-0 bg-gradient-to-t from-bscharcoal via-bscharcoal/80 to-transparent"></div>
    </div>
    
    <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center" data-aos="fade-up">
        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-bsemerald/30 border border-bsgold/40 text-bsgold text-xs font-bold uppercase tracking-wider mb-4 shadow-xs">
            <span class="w-2 h-2 rounded-full bg-bsgold animate-pulse"></span>
            <span><?= $cat_data['badge'] ?></span>
        </div>
        
        <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight text-white mb-6 <?= $headingFont ?>">
            <?= $cat_data['title'] ?>
        </h1>
        
        <p class="text-base sm:text-lg text-stone-200 max-w-3xl mx-auto font-light leading-relaxed">
            <?= $cat_data['short_desc'] ?>
        </p>
    </div>
</section>

<!-- =========================================================================
     SPECIFICATION MATCHING & QUALITY NOTICE
     ========================================================================= -->
<section class="py-6 bg-stone-50 border-b border-stone-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="p-5 rounded-2xl bg-white border border-stone-200 text-slate-700 text-xs sm:text-sm flex items-start gap-3 shadow-xs">
            <div class="w-9 h-9 rounded-xl bg-emerald-50 border border-emerald-200 text-bsemerald flex items-center justify-center shrink-0 mt-0.5">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </div>
            <div>
                <strong class="text-bscharcoal block mb-0.5"><?= t('labels.compliance_notice_title') ?></strong>
                <?= ($lang === 'ar')
                    ? 'مطابقة الأرقام الفنية والمواصفات: يتم توريد قطع الغيار الميكانيكية والكهربائية بناءً على أرقام القطع الأصلية (OEM Part Numbers)، الرسومات الهندسية، أو مواصفات المواد المعتمدة لضمان التوافق التام مع خطوط التشغيل.'
                    : 'Part Identification & Verification: Spare parts and components are sourced strictly according to OEM part numbers, technical drawings, material grades, and operating parameters to ensure 100% operational compatibility.' ?>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================================
     PRODUCT PORTFOLIO CARDS
     ========================================================================= -->
<section class="py-16 sm:py-20 bg-white text-bscharcoal border-b border-stone-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-14" data-aos="fade-up">
            <span class="text-xs font-bold uppercase tracking-widest text-bsgold mb-2 block"><?= ($lang === 'ar') ? 'محفظة قطع الغيار' : 'Spare Parts Portfolio' ?></span>
            <h2 class="text-2xl sm:text-4xl font-extrabold text-bscharcoal tracking-tight <?= $headingFont ?>">
                <?= ($lang === 'ar') ? 'قطع الغيار والبدائل الميكانيكية المعتمدة' : 'Industrial Replacement Parts & Components' ?>
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($cat_data['items'] as $item): ?>
            <div class="p-6 sm:p-8 rounded-3xl bg-stone-50 border border-stone-200 hover:border-bsemerald shadow-xs hover:shadow-lg transition-all flex flex-col justify-between group" data-aos="fade-up">
                <div>
                    <div class="w-10 h-10 rounded-xl bg-emerald-50 border border-emerald-200 text-bsemerald flex items-center justify-center mb-4">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path></svg>
                    </div>
                    <h3 class="text-base sm:text-lg font-bold text-bscharcoal group-hover:text-bsemerald transition-colors mb-2">
                        <?= htmlspecialchars($item) ?>
                    </h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mb-4">
                        <?= ($lang === 'ar') 
                            ? 'توريد قطع غيار بديلة وأصلية متوافقة لضمان استمرارية التشغيل وتقليل فترات التوقف في المصانع والمنشآت.'
                            : 'Reliable commercial sourcing of OEM and compatible replacement parts to maintain uptime and minimize industrial downtime.' ?>
                    </p>
                </div>

                <div class="pt-4 border-t border-stone-200">
                    <a href="<?= route_url('contact') ?>?category=spare_parts&product=<?= urlencode($item) ?>#rfq-form" class="w-full inline-flex items-center justify-center gap-2 px-4 py-2 text-xs font-bold text-white bg-bsemerald hover:bg-bsforest rounded-lg shadow-xs transition-colors">
                        <span><?= t('buttons.request_quote') ?></span>
                        <span class="rtl:rotate-180">&rarr;</span>
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- =========================================================================
     HOW TO REQUEST A QUOTE SECTION
     ========================================================================= -->
<section class="py-16 bg-stone-50 text-bscharcoal border-b border-stone-200">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="p-8 sm:p-10 rounded-3xl bg-white border border-stone-200 space-y-4 shadow-sm" data-aos="fade-up">
            <span class="text-xs font-mono font-bold uppercase tracking-widest text-bsgold block"><?= t('labels.rfq_guide_title') ?></span>
            <p class="text-sm text-slate-600 leading-relaxed"><?= t('labels.rfq_guide_subtitle') ?></p>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 pt-4">
                <div class="p-4 rounded-2xl bg-stone-50 border border-stone-200">
                    <div class="text-xs font-bold text-bscharcoal mb-1">01. Part Identification</div>
                    <div class="text-xs text-slate-600">Part number, model, brand, drawing, or sample dimensions.</div>
                </div>
                <div class="p-4 rounded-2xl bg-stone-50 border border-stone-200">
                    <div class="text-xs font-bold text-bscharcoal mb-1">02. Required Quantity</div>
                    <div class="text-xs text-slate-600">Total units, sets, or recurring maintenance quantities.</div>
                </div>
                <div class="p-4 rounded-2xl bg-stone-50 border border-stone-200">
                    <div class="text-xs font-bold text-bscharcoal mb-1">03. Material Standards</div>
                    <div class="text-xs text-slate-600">Stainless steel, alloy, NBR/Viton seal, pressure rating.</div>
                </div>
                <div class="p-4 rounded-2xl bg-stone-50 border border-stone-200">
                    <div class="text-xs font-bold text-bscharcoal mb-1">04. Urgency & Delivery</div>
                    <div class="text-xs text-slate-600">Immediate spot air courier or scheduled sea freight.</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================================
     PAGE RFQ MODULE
     ========================================================================= -->
<section class="py-16 sm:py-24 bg-white text-bscharcoal">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="shadow-lg rounded-3xl overflow-hidden border border-stone-200" data-aos="fade-up">
            <?php 
            $preset_category = 'spare_parts';
            $current_page_name = 'spare-parts';
            require __DIR__ . '/partials/rfq_form_partial.php'; 
            ?>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/../footer.php'; ?>
