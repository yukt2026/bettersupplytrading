<?php
/**
 * Better Supply Trading Establishment - Partnerships View (views/partners.php)
 * Implements PDF Page 13 / Section 02 & Section 07 of Final Requirements.
 * Light, modern B2B trading platform interface.
 */

$page = 'partners';
require_once __DIR__ . '/../header.php';
$headingFont = ($lang === 'ar') ? 'font-arabic font-bold' : 'font-heading font-bold';
$criteria = t('pages.partners.criteria');
?>

<!-- =========================================================================
     HERO BANNER (Dignified Corporate Aesthetic)
     ========================================================================= -->
<section class="relative bg-gradient-to-r from-bscharcoal via-[#1a382c] to-bscharcoal text-white py-16 sm:py-24 border-b border-stone-200 overflow-hidden">
    <div class="absolute inset-0 z-0 opacity-25">
        <picture>
            <source srcset="<?= img_url('banner_partnerships.webp') ?>" type="image/webp">
            <img src="<?= img_url('banner_partnerships.jpg') ?>" alt="Architectural abstract business partnership facade" class="w-full h-full object-cover">
        </picture>
        <div class="absolute inset-0 bg-gradient-to-t from-bscharcoal via-bscharcoal/80 to-transparent"></div>
    </div>
    
    <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center" data-aos="fade-up">
        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-bsemerald/30 border border-bsgold/40 text-bsgold text-xs font-bold uppercase tracking-wider mb-4 shadow-xs">
            <span class="w-2 h-2 rounded-full bg-bsgold animate-pulse"></span>
            <span><?= t('nav.partners') ?></span>
        </div>
        
        <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight text-white mb-6 <?= $headingFont ?>">
            <?= t('pages.partners.heading') ?>
        </h1>
        
        <p class="text-base sm:text-lg text-stone-200 max-w-3xl mx-auto font-light leading-relaxed">
            <?= t('pages.partners.intro') ?>
        </p>
    </div>
</section>

<!-- =========================================================================
     OBJECTIVE & PARTNERSHIP MODEL (Light Theme)
     ========================================================================= -->
<section class="py-16 sm:py-20 bg-stone-50 text-bscharcoal border-b border-stone-200">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="p-8 sm:p-12 rounded-3xl bg-white border border-stone-200 space-y-4 shadow-sm" data-aos="fade-up">
            <span class="text-xs font-mono font-bold uppercase tracking-widest text-bsgold block">
                <?= ($lang === 'ar') ? 'توسيع آفاق التوزيع والشراكة' : 'Market Expansion & Representation' ?>
            </span>
            <h2 class="text-xl sm:text-3xl font-extrabold text-bscharcoal <?= $headingFont ?>">
                <?= ($lang === 'ar') ? 'تطوير علاقات التوريد والشراكة الدولية' : 'Developing International Sourcing Relationships' ?>
            </h2>
            <p class="text-sm sm:text-base text-slate-600 leading-relaxed">
                <?= t('pages.partners.objective') ?>
            </p>
        </div>
    </div>
</section>

<!-- =========================================================================
     PARTNER EVALUATION CRITERIA (Light Corporate Interface)
     ========================================================================= -->
<section class="py-16 sm:py-24 bg-white text-bscharcoal border-b border-stone-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mb-12" data-aos="fade-up">
            <span class="text-xs font-bold uppercase tracking-widest text-bsgold mb-2 block">
                <?= ($lang === 'ar') ? 'المعايير المعتمدة للاختيار' : 'Selection Standards' ?>
            </span>
            <h2 class="text-2xl sm:text-4xl font-extrabold text-bscharcoal tracking-tight <?= $headingFont ?>">
                <?= t('pages.partners.criteria_title') ?>
            </h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-16">
            <?php foreach ($criteria as $idx => $crit): ?>
            <div class="p-6 rounded-3xl bg-stone-50 border border-stone-200 hover:border-bsemerald shadow-xs hover:shadow-lg transition-all flex flex-col justify-between group" data-aos="fade-up">
                <div>
                    <span class="text-3xl font-extrabold text-bsgold font-mono mb-4 block">0<?= $idx + 1 ?></span>
                    <h3 class="text-base font-bold text-bscharcoal group-hover:text-bsemerald transition-colors mb-2"><?= htmlspecialchars($crit['title']) ?></h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed"><?= htmlspecialchars($crit['desc']) ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="text-center" data-aos="fade-up">
            <a href="<?= route_url('contact') ?>#rfq-form" class="inline-flex items-center gap-2 px-8 py-3.5 bg-bsemerald hover:bg-bsforest text-white font-bold text-sm rounded-lg shadow-sm transition-all transform hover:-translate-y-0.5">
                <span><?= t('buttons.discuss_partnership') ?></span>
                <span class="rtl:rotate-180">&rarr;</span>
            </a>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/../footer.php'; ?>