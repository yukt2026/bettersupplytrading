<?php
/**
 * Better Supply Trading Establishment - Oilfield Chemicals View (views/oilfield-chemicals.php)
 * Implements PDF Page 05 / Section 02 & Section 03 Category B / F.
 * Light, modern B2B trading platform interface.
 */

$page = 'oilfield-chemicals';
require_once __DIR__ . '/../header.php';
$headingFont = ($lang === 'ar') ? 'font-arabic font-bold' : 'font-heading font-bold';
$products = t('pages.oilfield_chemicals.products');
$faqs = t('pages.oilfield_chemicals.faqs');
?>

<!-- =========================================================================
     HERO BANNER (Dignified Corporate Aesthetic)
     ========================================================================= -->
<section class="relative bg-gradient-to-r from-bscharcoal via-[#1a382c] to-bscharcoal text-white py-16 sm:py-24 border-b border-stone-200 overflow-hidden">
    <div class="absolute inset-0 z-0 opacity-25">
        <picture>
            <source srcset="<?= img_url('banner_oilfield.webp') ?>" type="image/webp">
            <img src="<?= img_url('banner_oilfield.jpg') ?>" alt="Drilling rig silhouette in desert at dusk" class="w-full h-full object-cover">
        </picture>
        <div class="absolute inset-0 bg-gradient-to-t from-bscharcoal via-bscharcoal/80 to-transparent"></div>
    </div>
    
    <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center" data-aos="fade-up">
        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-bsemerald/30 border border-bsgold/40 text-bsgold text-xs font-bold uppercase tracking-wider mb-4 shadow-xs">
            <span class="w-2 h-2 rounded-full bg-bsgold animate-pulse"></span>
            <span><?= t('nav.oilfield_chemicals') ?></span>
        </div>
        
        <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight text-white mb-6 <?= $headingFont ?>">
            <?= t('pages.oilfield_chemicals.heading') ?>
        </h1>
        
        <p class="text-base sm:text-lg text-stone-200 max-w-3xl mx-auto font-light leading-relaxed">
            <?= t('pages.oilfield_chemicals.intro') ?>
        </p>
    </div>
</section>

<!-- =========================================================================
     COMPLIANCE & REGULATORY DISCLOSURE NOTICE
     ========================================================================= -->
<section class="py-6 bg-stone-50 border-b border-stone-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="p-5 rounded-2xl bg-white border border-stone-200 text-slate-700 text-xs sm:text-sm flex items-start gap-3 shadow-xs">
            <div class="w-9 h-9 rounded-xl bg-emerald-50 border border-emerald-200 text-bsemerald flex items-center justify-center shrink-0 mt-0.5">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
            </div>
            <div>
                <strong class="text-bscharcoal block mb-0.5"><?= t('labels.compliance_notice_title') ?></strong>
                <?= t('pages.oilfield_chemicals.compliance_note') ?>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================================
     PRODUCT CATALOG CARDS (Light Theme)
     ========================================================================= -->
<section class="py-16 sm:py-20 bg-white text-bscharcoal border-b border-stone-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($products as $idx => $prod): ?>
            <div class="p-6 sm:p-8 rounded-3xl bg-stone-50 border border-stone-200 hover:border-bsemerald shadow-xs hover:shadow-lg transition-all flex flex-col justify-between group" data-aos="fade-up">
                <div>
                    <div class="flex items-center justify-between gap-2 mb-3">
                        <span class="px-2.5 py-1 rounded-lg bg-white text-bsemerald text-xs font-mono font-bold border border-emerald-200">
                            <?= htmlspecialchars($prod['formula']) ?>
                        </span>
                        <span class="text-[11px] font-semibold text-slate-500 uppercase tracking-wider">
                            <?= t('labels.status_inquiry') ?>
                        </span>
                    </div>

                    <h3 class="text-lg sm:text-xl font-bold text-bscharcoal group-hover:text-bsemerald transition-colors mb-2"><?= htmlspecialchars($prod['name']) ?></h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mb-4"><?= htmlspecialchars($prod['summary']) ?></p>

                    <div class="border-t border-stone-200 pt-3 mb-4">
                        <span class="text-[11px] font-bold text-bsgold uppercase tracking-wider block mb-2"><?= t('labels.applications') ?>:</span>
                        <ul class="space-y-1.5">
                            <?php foreach ($prod['applications'] as $app): ?>
                            <li class="text-xs text-slate-700 flex items-center gap-2">
                                <span class="w-1.5 h-1.5 rounded-full bg-bsemerald shrink-0"></span>
                                <span><?= htmlspecialchars($app) ?></span>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>

                <div class="pt-2">
                    <a href="<?= route_url('contact') ?>?category=oilfield_chemicals&product=<?= urlencode($prod['name']) ?>#rfq-form" class="w-full inline-flex items-center justify-center gap-2 px-4 py-2.5 text-xs font-bold text-white bg-bsemerald hover:bg-bsforest rounded-lg shadow-xs transition-colors">
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
                    <div class="text-xs font-bold text-bscharcoal mb-1">01. Brine / Mineral Grade</div>
                    <div class="text-xs text-slate-600">Density specs (lb/gal), purity %, and dry or liquid form.</div>
                </div>
                <div class="p-4 rounded-2xl bg-stone-50 border border-stone-200">
                    <div class="text-xs font-bold text-bscharcoal mb-1">02. Drilling Campaign Timeline</div>
                    <div class="text-xs text-slate-600">Spot call-off or multi-well supply agreement schedule.</div>
                </div>
                <div class="p-4 rounded-2xl bg-stone-50 border border-stone-200">
                    <div class="text-xs font-bold text-bscharcoal mb-1">03. Packaging Requirements</div>
                    <div class="text-xs text-slate-600">Palletized 25kg / 50lb sacks or 1 MT heavy-duty jumbo bags.</div>
                </div>
                <div class="p-4 rounded-2xl bg-stone-50 border border-stone-200">
                    <div class="text-xs font-bold text-bscharcoal mb-1">04. Delivery Point</div>
                    <div class="text-xs text-slate-600">Supply base (Dhahran, Al-Khobar, Dammam, Jubail).</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================================
     FAQS SECTION
     ========================================================================= -->
<section class="py-16 bg-white text-bscharcoal border-b border-stone-200">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-xl sm:text-3xl font-extrabold text-bscharcoal mb-8 text-center <?= $headingFont ?>"><?= t('labels.faq_title') ?></h2>
        <div class="space-y-4">
            <?php foreach ($faqs as $faq): ?>
            <div class="p-6 rounded-2xl bg-stone-50 border border-stone-200" data-aos="fade-up">
                <h3 class="text-base font-bold text-bsemerald mb-2"><?= htmlspecialchars($faq['q']) ?></h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed"><?= htmlspecialchars($faq['a']) ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- =========================================================================
     PAGE RFQ MODULE
     ========================================================================= -->
<section class="py-16 sm:py-24 bg-stone-50 text-bscharcoal">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="shadow-lg rounded-3xl overflow-hidden border border-stone-200" data-aos="fade-up">
            <?php 
            $preset_category = 'oilfield_chemicals';
            $current_page_name = 'oilfield-chemicals';
            require __DIR__ . '/partials/rfq_form_partial.php'; 
            ?>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/../footer.php'; ?>