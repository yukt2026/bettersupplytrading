<?php
/**
 * Better Supply Trading Establishment - Global Sourcing & International Trading View (views/international-trading.php)
 * Implements PDF Page 12 / Section 02 & Section 05 of Final Requirements.
 * Light, modern B2B trading platform interface.
 */

$page = 'international-trading';
require_once __DIR__ . '/../header.php';
$headingFont = ($lang === 'ar') ? 'font-arabic font-bold' : 'font-heading font-bold';
$points = t('pages.international_trading.coordination_points');
?>

<!-- =========================================================================
     HERO BANNER (Dignified Corporate Aesthetic)
     ========================================================================= -->
<section class="relative bg-gradient-to-r from-bscharcoal via-[#1a382c] to-bscharcoal text-white py-16 sm:py-24 border-b border-stone-200 overflow-hidden">
    <div class="absolute inset-0 z-0 opacity-25">
        <picture>
            <source srcset="<?= img_url('banner_international_trade.webp') ?>" type="image/webp">
            <img src="<?= img_url('banner_international_trade.jpg') ?>" alt="International container port terminal" class="w-full h-full object-cover">
        </picture>
        <div class="absolute inset-0 bg-gradient-to-t from-bscharcoal via-bscharcoal/80 to-transparent"></div>
    </div>
    
    <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center" data-aos="fade-up">
        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-bsemerald/30 border border-bsgold/40 text-bsgold text-xs font-bold uppercase tracking-wider mb-4 shadow-xs">
            <span class="w-2 h-2 rounded-full bg-bsgold animate-pulse"></span>
            <span><?= t('nav.global_sourcing') ?></span>
        </div>
        
        <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight text-white mb-6 <?= $headingFont ?>">
            <?= t('pages.international_trading.heading') ?>
        </h1>
        
        <p class="text-base sm:text-lg text-stone-200 max-w-3xl mx-auto font-light leading-relaxed">
            <?= t('pages.international_trading.intro') ?>
        </p>
    </div>
</section>

<!-- =========================================================================
     REGIONAL GEOGRAPHIC MODULES (Light Corporate Interface)
     ========================================================================= -->
<section class="py-16 sm:py-24 bg-stone-50 text-bscharcoal border-b border-stone-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-16">
            
            <!-- Scope 1: Principal GCC Target Market -->
            <div class="p-8 rounded-3xl bg-white border border-stone-200 hover:border-bsemerald shadow-xs hover:shadow-lg transition-all space-y-4" data-aos="fade-up">
                <span class="px-3 py-1 rounded-full bg-emerald-50 text-bsemerald text-xs font-bold uppercase tracking-wider border border-emerald-200 inline-block">
                    <?= ($lang === 'ar') ? 'السوق التشغيلي الأساسي' : 'Primary Trading Market' ?>
                </span>
                <h2 class="text-2xl font-bold text-bscharcoal <?= $headingFont ?>"><?= t('pages.international_trading.gcc_title') ?></h2>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    <?= t('pages.international_trading.gcc_text') ?>
                </p>
            </div>

            <!-- Scope 2: Sourcing Focus -->
            <div class="p-8 rounded-3xl bg-white border border-stone-200 hover:border-bsemerald shadow-xs hover:shadow-lg transition-all space-y-4" data-aos="fade-up" data-aos-delay="100">
                <span class="px-3 py-1 rounded-full bg-emerald-50 text-bsemerald text-xs font-bold uppercase tracking-wider border border-emerald-200 inline-block">
                    <?= ($lang === 'ar') ? 'ممرات التوريد المباشرة' : 'Sourcing Corridors' ?>
                </span>
                <h2 class="text-2xl font-bold text-bscharcoal <?= $headingFont ?>"><?= t('pages.international_trading.south_asia_title') ?></h2>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    <?= t('pages.international_trading.south_asia_text') ?>
                </p>
            </div>

            <!-- Scope 3: Developing Opportunities -->
            <div class="p-8 rounded-3xl bg-white border border-stone-200 hover:border-bsemerald shadow-xs hover:shadow-lg transition-all space-y-4" data-aos="fade-up" data-aos-delay="200">
                <span class="px-3 py-1 rounded-full bg-amber-50 text-bsgold text-xs font-bold uppercase tracking-wider border border-amber-200 inline-block">
                    <?= ($lang === 'ar') ? 'نطاق قيد التطوير والاستكشاف' : 'Exploratory & Planned' ?>
                </span>
                <h2 class="text-2xl font-bold text-bscharcoal <?= $headingFont ?>"><?= t('pages.international_trading.western_markets_title') ?></h2>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    <?= t('pages.international_trading.western_markets_text') ?>
                </p>
            </div>

        </div>

        <!-- Trading Coordination Capabilities List -->
        <div class="p-8 sm:p-12 rounded-3xl bg-white border border-stone-200 max-w-4xl mx-auto space-y-8 shadow-sm" data-aos="fade-up">
            <div class="text-center">
                <span class="text-xs font-mono font-bold uppercase tracking-widest text-bsgold block mb-2">
                    <?= ($lang === 'ar') ? 'قدرات وإجراءات التنسيق التجاري' : 'Procurement & Logistics Capabilities' ?>
                </span>
                <h3 class="text-xl sm:text-3xl font-extrabold text-bscharcoal <?= $headingFont ?>">
                    <?= t('pages.international_trading.coordination_title') ?>
                </h3>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <?php foreach ($points as $idx => $pt): ?>
                <div class="flex items-center gap-3 p-4 rounded-2xl bg-stone-50 border border-stone-200 text-xs sm:text-sm text-slate-700">
                    <span class="w-2.5 h-2.5 rounded-full bg-bsgold shrink-0"></span>
                    <span class="font-medium leading-relaxed"><?= htmlspecialchars($pt) ?></span>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="pt-4 text-center">
                <a href="<?= route_url('contact') ?>#rfq-form" class="inline-flex items-center gap-2 px-8 py-3.5 bg-bsemerald hover:bg-bsforest text-white font-bold text-sm rounded-lg shadow-sm transition-all transform hover:-translate-y-0.5">
                    <span><?= ($lang === 'ar') ? 'إرسال استفسار توريد دولي' : 'Send an International Supply Inquiry' ?></span>
                    <span class="rtl:rotate-180">&rarr;</span>
                </a>
            </div>
        </div>

    </div>
</section>

<?php require_once __DIR__ . '/../footer.php'; ?>