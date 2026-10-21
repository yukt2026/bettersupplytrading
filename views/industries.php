<?php
/**
 * Better Supply Corporation - Industries We Serve View (views/industries.php)
 * Implements PDF Page 11 / Section 02.
 */

$page = 'industries';
require_once __DIR__ . '/../header.php';
$headingFont = ($lang === 'ar') ? 'font-arabic font-bold' : 'font-heading font-bold';
$sectors = t('pages.industries.sectors');
?>

<!-- Header Banner -->
<section class="relative bg-slate-950 text-white py-20 border-b border-slate-800 overflow-hidden">
    <div class="absolute inset-0 z-0 opacity-20">
        <picture>
            <source srcset="<?= img_url('banner_international_trade.webp') ?>" type="image/webp">
            <img src="<?= img_url('banner_international_trade.jpg') ?>" alt="Industrial logistics infrastructure" class="w-full h-full object-cover">
        </picture>
        <div class="absolute inset-0 bg-slate-950/80"></div>
    </div>
    <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="text-xs font-bold uppercase tracking-widest text-emerald-400 mb-2 block"><?= t('nav.industries') ?></span>
        <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight text-white mb-4">
            <?= t('pages.industries.heading') ?>
        </h1>
        <p class="text-base sm:text-lg text-slate-300 max-w-3xl mx-auto font-light leading-relaxed">
            <?= t('pages.industries.intro') ?>
        </p>
    </div>
</section>

<!-- Sectors Grid -->
<section class="py-20 bg-slate-900 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
            <?php foreach ($sectors as $idx => $sector): ?>
            <div class="p-8 rounded-2xl bg-slate-950 border border-slate-800 hover:border-slate-700 transition-all flex flex-col justify-between">
                <div>
                    <span class="text-2xl font-extrabold text-emerald-400 font-mono mb-4 block">0<?= $idx + 1 ?></span>
                    <h2 class="text-xl font-bold text-white mb-3"><?= htmlspecialchars($sector['name']) ?></h2>
                    <p class="text-xs sm:text-sm text-slate-300 leading-relaxed mb-6"><?= htmlspecialchars($sector['desc']) ?></p>
                </div>
                <div class="pt-4 border-t border-slate-800">
                    <a href="<?= route_url('contact') ?>#rfq-form" class="inline-flex items-center gap-2 text-xs font-bold text-emerald-400 hover:text-emerald-300">
                        <span><?= t('buttons.request_quote') ?></span>
                        <span class="rtl:rotate-180">&rarr;</span>
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Procurement Methodology Box -->
        <div class="p-8 sm:p-10 rounded-2xl bg-slate-950 border border-slate-800 text-center max-w-4xl mx-auto space-y-4">
            <h3 class="text-xl sm:text-2xl font-bold text-white"><?= ($lang === 'ar') ? 'منهجية التوريد التجاري المخصصة' : 'Technical & Purchasing Alignment' ?></h3>
            <p class="text-sm text-slate-300 leading-relaxed max-w-2xl mx-auto">
                <?= t('pages.industries.process_summary') ?>
            </p>
            <div class="pt-4">
                <a href="<?= route_url('contact') ?>#rfq-form" class="inline-flex items-center gap-2 px-8 py-3.5 bg-brandgreen hover:bg-emerald-600 text-white font-bold text-sm rounded-lg transition-all">
                    <span><?= t('buttons.request_quote') ?></span>
                    <span class="rtl:rotate-180">&rarr;</span>
                </a>
            </div>
        </div>

    </div>
</section>

<?php require_once __DIR__ . '/../footer.php'; ?>
