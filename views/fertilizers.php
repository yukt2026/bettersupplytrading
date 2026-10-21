<?php
/**
 * Better Supply Corporation - Fertilizers View (views/fertilizers.php)
 * Implements PDF Page 07 / Section 02.
 */

$page = 'fertilizers';
require_once __DIR__ . '/../header.php';
$headingFont = ($lang === 'ar') ? 'font-arabic font-bold' : 'font-heading font-bold';
$products = t('pages.fertilizers.products');
$faqs = t('pages.fertilizers.faqs');
?>

<!-- Header Banner -->
<section class="relative bg-slate-950 text-white py-20 border-b border-slate-800 overflow-hidden">
    <div class="absolute inset-0 z-0 opacity-25">
        <picture>
            <source srcset="<?= img_url('banner_fertilizers.webp') ?>" type="image/webp">
            <img src="<?= img_url('banner_fertilizers.jpg') ?>" alt="Agricultural fertilizer granules" class="w-full h-full object-cover">
        </picture>
        <div class="absolute inset-0 bg-slate-950/80"></div>
    </div>
    <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="text-xs font-bold uppercase tracking-widest text-emerald-400 mb-2 block"><?= t('nav.fertilizers') ?></span>
        <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight text-white mb-4">
            <?= t('pages.fertilizers.heading') ?>
        </h1>
        <p class="text-base sm:text-lg text-slate-300 max-w-3xl mx-auto font-light leading-relaxed">
            <?= t('pages.fertilizers.intro') ?>
        </p>
    </div>
</section>

<!-- Compliance & Regulatory Disclosure Banner -->
<section class="py-6 bg-slate-900 border-b border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="p-4 rounded-xl bg-slate-950 border border-slate-700 text-slate-300 text-xs sm:text-sm flex items-start gap-3">
            <svg class="w-5 h-5 text-emerald-400 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            <div>
                <strong class="text-white block mb-0.5"><?= t('labels.compliance_notice_title') ?></strong>
                <?= t('pages.fertilizers.compliance_disclaimer') ?>
            </div>
        </div>
    </div>
</section>

<!-- Product Catalog Cards -->
<section class="py-20 bg-slate-950 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($products as $idx => $prod): ?>
            <div class="p-6 rounded-2xl bg-slate-900 border border-slate-800 hover:border-slate-700 transition-all flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between gap-2 mb-3">
                        <span class="px-2.5 py-1 rounded bg-slate-800 text-emerald-400 text-xs font-mono font-bold border border-slate-700">
                            <?= htmlspecialchars($prod['formula']) ?>
                        </span>
                        <span class="text-[11px] font-semibold text-slate-400 uppercase tracking-wider">
                            <?= t('labels.status_inquiry') ?>
                        </span>
                    </div>

                    <h3 class="text-lg font-bold text-white mb-2"><?= htmlspecialchars($prod['name']) ?></h3>
                    <p class="text-xs sm:text-sm text-slate-400 leading-relaxed mb-4"><?= htmlspecialchars($prod['summary']) ?></p>

                    <div class="border-t border-slate-800/80 pt-3 mb-4">
                        <span class="text-[11px] font-bold text-slate-400 uppercase tracking-wider block mb-2"><?= t('labels.applications') ?>:</span>
                        <ul class="space-y-1">
                            <?php foreach ($prod['applications'] as $app): ?>
                            <li class="text-xs text-slate-300 flex items-center gap-1.5">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 shrink-0"></span>
                                <span><?= htmlspecialchars($app) ?></span>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>

                <div class="pt-2">
                    <a href="<?= route_url('contact') ?>?category=fertilizers&product=<?= urlencode($prod['name']) ?>#rfq-form" class="w-full inline-flex items-center justify-center gap-1.5 px-4 py-2 text-xs font-bold text-white bg-brandgreen hover:bg-emerald-600 rounded-lg transition-colors">
                        <span><?= t('buttons.request_quote') ?></span>
                        <span class="rtl:rotate-180">&rarr;</span>
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- How to Request a Quote Section -->
<section class="py-16 bg-slate-900 text-white border-t border-slate-800">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="p-8 rounded-2xl bg-slate-950 border border-slate-800 space-y-4">
            <span class="text-xs font-bold uppercase tracking-widest text-emerald-400 block"><?= t('labels.rfq_guide_title') ?></span>
            <p class="text-sm text-slate-300 leading-relaxed"><?= t('labels.rfq_guide_subtitle') ?></p>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 pt-2">
                <div class="p-4 rounded-xl bg-slate-900 border border-slate-800">
                    <div class="text-xs font-bold text-white mb-1">01. Nutrient Analysis</div>
                    <div class="text-xs text-slate-400">Specify N-P-K ratios, soluble grade, or micronutrients.</div>
                </div>
                <div class="p-4 rounded-xl bg-slate-900 border border-slate-800">
                    <div class="text-xs font-bold text-white mb-1">02. Order Volume</div>
                    <div class="text-xs text-slate-400">Total metric tons or container loads.</div>
                </div>
                <div class="p-4 rounded-xl bg-slate-900 border border-slate-800">
                    <div class="text-xs font-bold text-white mb-1">03. Packaging Standard</div>
                    <div class="text-xs text-slate-400">25kg bags, 50kg bags, or 1000kg FIBC bags.</div>
                </div>
                <div class="p-4 rounded-xl bg-slate-900 border border-slate-800">
                    <div class="text-xs font-bold text-white mb-1">04. Import Destination</div>
                    <div class="text-xs text-slate-400">Delivery port and regulatory clearance requirements.</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQs Section -->
<section class="py-16 bg-slate-950 text-white border-t border-slate-800">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-xl sm:text-2xl font-extrabold text-white mb-8 text-center"><?= t('labels.faq_title') ?></h2>
        <div class="space-y-4">
            <?php foreach ($faqs as $faq): ?>
            <div class="p-6 rounded-xl bg-slate-900 border border-slate-800">
                <h3 class="text-base font-bold text-emerald-400 mb-2"><?= htmlspecialchars($faq['q']) ?></h3>
                <p class="text-xs sm:text-sm text-slate-300 leading-relaxed"><?= htmlspecialchars($faq['a']) ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Page RFQ Module -->
<section class="py-20 bg-slate-900 text-white border-t border-slate-800">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <?php 
        $preset_category = 'fertilizers';
        $current_page_name = 'fertilizers';
        require __DIR__ . '/partials/rfq_form_partial.php'; 
        ?>
    </div>
</section>

<?php require_once __DIR__ . '/../footer.php'; ?>
