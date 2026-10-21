<?php
/**
 * Better Supply Trading Establishment - International Trading View (views/international-trading.php)
 * Implements PDF Page 12 / Section 02.
 */

$page = 'international-trading';
require_once __DIR__ . '/../header.php';
$headingFont = ($lang === 'ar') ? 'font-arabic font-bold' : 'font-heading font-bold';
$points = t('pages.international_trading.coordination_points');
?>

<!-- Header Banner -->
<section class="relative bg-slate-950 text-white py-20 border-b border-slate-800 overflow-hidden">
    <div class="absolute inset-0 z-0 opacity-25">
        <picture>
            <source srcset="<?= img_url('banner_international_trade.webp') ?>" type="image/webp">
            <img src="<?= img_url('banner_international_trade.jpg') ?>" alt="International container port terminal" class="w-full h-full object-cover">
        </picture>
        <div class="absolute inset-0 bg-slate-950/80"></div>
    </div>
    <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="text-xs font-bold uppercase tracking-widest text-emerald-400 mb-2 block"><?= t('nav.international_trading') ?></span>
        <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight text-white mb-4">
            <?= t('pages.international_trading.heading') ?>
        </h1>
        <p class="text-base sm:text-lg text-slate-300 max-w-3xl mx-auto font-light leading-relaxed">
            <?= t('pages.international_trading.intro') ?>
        </p>
    </div>
</section>

<!-- Regional Geographic Modules -->
<section class="py-20 bg-slate-900 text-white border-b border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-16">
            
            <!-- Scope 1: Principal GCC Target Market -->
            <div class="p-8 rounded-2xl bg-slate-950 border border-slate-800 space-y-4">
                <span class="px-2.5 py-1 rounded bg-emerald-950 text-emerald-400 text-xs font-bold uppercase tracking-wider border border-emerald-500/30">
                    <?= ($lang === 'ar') ? 'السوق التشغيلي الأساسي' : 'Primary Trading Market' ?>
                </span>
                <h2 class="text-2xl font-bold text-white"><?= t('pages.international_trading.gcc_title') ?></h2>
                <p class="text-xs sm:text-sm text-slate-300 leading-relaxed">
                    <?= t('pages.international_trading.gcc_text') ?>
                </p>
            </div>

            <!-- Scope 2: Sourcing Focus -->
            <div class="p-8 rounded-2xl bg-slate-950 border border-slate-800 space-y-4">
                <span class="px-2.5 py-1 rounded bg-emerald-950 text-emerald-400 text-xs font-bold uppercase tracking-wider border border-emerald-500/30">
                    <?= ($lang === 'ar') ? 'ممرات التوريد المباشرة' : 'Sourcing Corridors' ?>
                </span>
                <h2 class="text-2xl font-bold text-white"><?= t('pages.international_trading.south_asia_title') ?></h2>
                <p class="text-xs sm:text-sm text-slate-300 leading-relaxed">
                    <?= t('pages.international_trading.south_asia_text') ?>
                </p>
            </div>

            <!-- Scope 3: Developing Opportunities -->
            <div class="p-8 rounded-2xl bg-slate-950 border border-slate-800 space-y-4">
                <span class="px-2.5 py-1 rounded bg-slate-800 text-amber-300 text-xs font-bold uppercase tracking-wider border border-slate-700">
                    <?= ($lang === 'ar') ? 'نطاق قيد التطوير والاستكشاف' : 'Exploratory & Planned' ?>
                </span>
                <h2 class="text-2xl font-bold text-white"><?= t('pages.international_trading.western_markets_title') ?></h2>
                <p class="text-xs sm:text-sm text-slate-300 leading-relaxed">
                    <?= t('pages.international_trading.western_markets_text') ?>
                </p>
            </div>

        </div>

        <!-- Trading Coordination Capabilities List -->
        <div class="p-8 sm:p-10 rounded-2xl bg-slate-950 border border-slate-800 max-w-4xl mx-auto space-y-6">
            <h3 class="text-xl sm:text-2xl font-bold text-white text-center">
                <?= t('pages.international_trading.coordination_title') ?>
            </h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <?php foreach ($points as $idx => $pt): ?>
                <div class="flex items-center gap-3 p-3.5 rounded-xl bg-slate-900 border border-slate-800 text-xs sm:text-sm text-slate-200">
                    <span class="w-2 h-2 rounded-full bg-emerald-400 shrink-0"></span>
                    <span><?= htmlspecialchars($pt) ?></span>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="pt-4 text-center">
                <a href="<?= route_url('contact') ?>#rfq-form" class="inline-flex items-center gap-2 px-8 py-3.5 bg-brandgreen hover:bg-emerald-600 text-white font-bold text-sm rounded-lg transition-all">
                    <span><?= ($lang === 'ar') ? 'إرسال استفسار توريد دولي' : 'Send an International Supply Inquiry' ?></span>
                    <span class="rtl:rotate-180">&rarr;</span>
                </a>
            </div>
        </div>

    </div>
</section>

<?php require_once __DIR__ . '/../footer.php'; ?>
