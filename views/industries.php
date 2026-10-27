<?php
/**
 * Better Supply Trading Establishment - Industries We Serve View (views/industries.php)
 * Implements PDF Page 11 / Section 02 & Section 04 of Final Requirements.
 * Light, modern B2B trading platform interface.
 */

$page = 'industries';
require_once __DIR__ . '/../header.php';
$headingFont = ($lang === 'ar') ? 'font-arabic font-bold' : 'font-heading font-bold';
$sectors = t('pages.industries.sectors');
?>

<!-- =========================================================================
     HERO BANNER (Dignified Corporate Aesthetic)
     ========================================================================= -->
<section class="relative bg-gradient-to-r from-bscharcoal via-[#1a382c] to-bscharcoal text-white py-16 sm:py-24 border-b border-stone-200 overflow-hidden">
    <div class="absolute inset-0 z-0 opacity-25">
        <picture>
            <source srcset="<?= img_url('banner_international_trade.webp') ?>" type="image/webp">
            <img src="<?= img_url('banner_international_trade.jpg') ?>" alt="Industrial logistics infrastructure" class="w-full h-full object-cover">
        </picture>
        <div class="absolute inset-0 bg-gradient-to-t from-bscharcoal via-bscharcoal/80 to-transparent"></div>
    </div>
    
    <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center" data-aos="fade-up">
        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-bsemerald/30 border border-bsgold/40 text-bsgold text-xs font-bold uppercase tracking-wider mb-4 shadow-xs">
            <span class="w-2 h-2 rounded-full bg-bsgold animate-pulse"></span>
            <span><?= t('nav.industries') ?></span>
        </div>
        
        <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight text-white mb-6 <?= $headingFont ?>">
            <?= t('pages.industries.heading') ?>
        </h1>
        
        <p class="text-base sm:text-lg text-stone-200 max-w-3xl mx-auto font-light leading-relaxed">
            <?= t('pages.industries.intro') ?>
        </p>
    </div>
</section>

<!-- =========================================================================
     SECTORS GRID (Light Corporate Interface)
     ========================================================================= -->
<section class="py-16 sm:py-24 bg-stone-50 text-bscharcoal border-b border-stone-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
            <?php foreach ($sectors as $idx => $sector): ?>
            <div class="p-8 rounded-3xl bg-white border border-stone-200 hover:border-bsemerald shadow-xs hover:shadow-lg transition-all flex flex-col justify-between group" data-aos="fade-up">
                <div>
                    <span class="text-3xl font-extrabold text-bsgold font-mono mb-4 block">0<?= $idx + 1 ?></span>
                    <h2 class="text-xl font-bold text-bscharcoal group-hover:text-bsemerald transition-colors mb-3 leading-snug">
                        <?= htmlspecialchars($sector['name']) ?>
                    </h2>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mb-6">
                        <?= htmlspecialchars($sector['desc']) ?>
                    </p>
                </div>
                <div class="pt-4 border-t border-stone-100">
                    <a href="<?= route_url('contact') ?>#rfq-form" class="inline-flex items-center gap-2 text-xs font-bold text-bsemerald hover:text-bsforest transition-colors">
                        <span><?= t('buttons.request_quote') ?></span>
                        <span class="rtl:rotate-180">&rarr;</span>
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Procurement Methodology Box -->
        <div class="p-8 sm:p-12 rounded-3xl bg-white border border-stone-200 text-center max-w-4xl mx-auto space-y-4 shadow-sm" data-aos="fade-up">
            <span class="text-xs font-mono font-bold uppercase tracking-widest text-bsgold block">
                <?= ($lang === 'ar') ? 'الدقة الفنية والتوافق الشرائي' : 'Technical & Purchasing Alignment' ?>
            </span>
            <h3 class="text-xl sm:text-2xl font-extrabold text-bscharcoal <?= $headingFont ?>">
                <?= ($lang === 'ar') ? 'منهجية التوريد التجاري المخصصة' : 'Technical & Purchasing Alignment' ?>
            </h3>
            <p class="text-sm text-slate-600 leading-relaxed max-w-2xl mx-auto">
                <?= t('pages.industries.process_summary') ?>
            </p>
            <div class="pt-4">
                <a href="<?= route_url('contact') ?>#rfq-form" class="inline-flex items-center gap-2 px-8 py-3.5 bg-bsemerald hover:bg-bsforest text-white font-bold text-sm rounded-lg shadow-sm transition-all transform hover:-translate-y-0.5">
                    <span><?= t('buttons.request_quote') ?></span>
                    <span class="rtl:rotate-180">&rarr;</span>
                </a>
            </div>
        </div>

    </div>
</section>

<?php require_once __DIR__ . '/../footer.php'; ?>