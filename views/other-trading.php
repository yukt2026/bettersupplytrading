<?php
/**
 * Better Supply Corporation - Other Trading Activities View (views/other-trading.php)
 * Implements PDF Page 10 / Section 02.
 */

$page = 'other-trading';
require_once __DIR__ . '/../header.php';
$headingFont = ($lang === 'ar') ? 'font-arabic font-bold' : 'font-heading font-bold';
$products = t('pages.other_trading.products');
$faqs = t('pages.other_trading.faqs');
?>

<!-- Header Banner -->
<section class="relative bg-slate-950 text-white py-20 border-b border-slate-800 overflow-hidden">
    <div class="absolute inset-0 z-0 opacity-25">
        <picture>
            <source srcset="<?= img_url('banner_vehicles.webp') ?>" type="image/webp">
            <img src="<?= img_url('banner_vehicles.jpg') ?>" alt="Commercial vehicles and machinery" class="w-full h-full object-cover">
        </picture>
        <div class="absolute inset-0 bg-slate-950/80"></div>
    </div>
    <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="text-xs font-bold uppercase tracking-widest text-emerald-400 mb-2 block"><?= t('nav.other_trading') ?></span>
        <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight text-white mb-4">
            <?= t('pages.other_trading.heading') ?>
        </h1>
        <p class="text-base sm:text-lg text-slate-300 max-w-3xl mx-auto font-light leading-relaxed">
            <?= t('pages.other_trading.intro') ?>
        </p>
    </div>
</section>

<!-- Compliance & Commercial Registration Alignment Banner -->
<section class="py-6 bg-slate-900 border-b border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="p-4 rounded-xl bg-slate-950 border border-slate-700 text-slate-300 text-xs sm:text-sm flex items-start gap-3">
            <svg class="w-5 h-5 text-emerald-400 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            <div>
                <strong class="text-white block mb-0.5"><?= t('labels.compliance_notice_title') ?></strong>
                <?= t('pages.other_trading.compliance_note') ?>
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
                    <a href="<?= route_url('contact') ?>?category=specialized_vehicles&product=<?= urlencode($prod['name']) ?>#rfq-form" class="w-full inline-flex items-center justify-center gap-1.5 px-4 py-2 text-xs font-bold text-white bg-brandgreen hover:bg-emerald-600 rounded-lg transition-colors">
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
                    <div class="text-xs font-bold text-white mb-1">01. Vehicle / Machine Spec</div>
                    <div class="text-xs text-slate-400">Technical configurations, seating capacity, or duty speed.</div>
                </div>
                <div class="p-4 rounded-xl bg-slate-900 border border-slate-800">
                    <div class="text-xs font-bold text-white mb-1">02. New or Used Preference</div>
                    <div class="text-xs text-slate-400">Certified new or inspected commercial pre-owned units.</div>
                </div>
                <div class="p-4 rounded-xl bg-slate-900 border border-slate-800">
                    <div class="text-xs font-bold text-white mb-1">03. Quantity & Schedule</div>
                    <div class="text-xs text-slate-400">Fleet unit count and requested delivery timeline.</div>
                </div>
                <div class="p-4 rounded-xl bg-slate-900 border border-slate-800">
                    <div class="text-xs font-bold text-white mb-1">04. Destination</div>
                    <div class="text-xs text-slate-400">Delivery point in Saudi Arabia or GCC member states.</div>
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
        $preset_category = 'specialized_vehicles';
        $current_page_name = 'other-trading';
        require __DIR__ . '/partials/rfq_form_partial.php'; 
        ?>
    </div>
</section>

<?php require_once __DIR__ . '/../footer.php'; ?>
