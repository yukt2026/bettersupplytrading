<?php
/**
 * Better Supply Trading Establishment - About Us View (views/about.php)
 * Faithful implementation of Requirements Document: Modern, light corporate B2B trading identity.
 */

$page = 'about';
require_once __DIR__ . '/../header.php';
$headingFont = ($lang === 'ar') ? 'font-arabic font-bold' : 'font-heading font-bold';
?>

<!-- =========================================================================
     HERO BANNER (Dignified Corporate Aesthetic)
     ========================================================================= -->
<section class="relative bg-gradient-to-r from-bscharcoal via-[#1a382c] to-bscharcoal text-white py-16 sm:py-24 border-b border-stone-200 overflow-hidden">
    <div class="absolute inset-0 z-0 opacity-25">
        <picture>
            <source srcset="<?= img_url('banner_partnerships.webp') ?>" type="image/webp">
            <img src="<?= img_url('banner_partnerships.jpg') ?>" alt="Corporate architectural facade" class="w-full h-full object-cover">
        </picture>
        <div class="absolute inset-0 bg-gradient-to-t from-bscharcoal via-bscharcoal/80 to-transparent"></div>
    </div>
    
    <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center" data-aos="fade-up">
        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-bsemerald/30 border border-bsgold/40 text-bsgold text-xs font-bold uppercase tracking-wider mb-4 shadow-xs">
            <span class="w-2 h-2 rounded-full bg-bsgold animate-pulse"></span>
            <span><?= t('nav.about') ?></span>
        </div>
        
        <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight text-white mb-6 <?= $headingFont ?>">
            <?= t('pages.about.heading') ?>
        </h1>
        
        <p class="text-base sm:text-lg text-stone-200 max-w-3xl mx-auto font-light leading-relaxed">
            <?= t('pages.about.lead') ?>
        </p>
    </div>
</section>

<!-- =========================================================================
     COMPANY ACTIVITIES & SCOPE (Light Theme)
     ========================================================================= -->
<section class="py-16 sm:py-20 bg-stone-50 border-b border-stone-200 text-bscharcoal">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white border border-stone-200 rounded-3xl p-8 sm:p-12 shadow-sm space-y-8" data-aos="fade-up">
            <div>
                <span class="text-xs font-mono font-bold uppercase tracking-widest text-bsgold block mb-2">
                    <?= ($lang === 'ar') ? 'نطاق الأعمال والعمليات' : 'Commercial Scope & Capabilities' ?>
                </span>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-bscharcoal tracking-tight <?= $headingFont ?>">
                    <?= ($lang === 'ar') ? 'نطاق الأنشطة التجارية والتوريد' : 'Business Scope & Capabilities' ?>
                </h2>
            </div>
            
            <p class="text-sm sm:text-base text-slate-700 leading-relaxed">
                <?= t('pages.about.scope') ?>
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-6 border-t border-stone-200">
                <div class="p-6 rounded-2xl bg-stone-50 border border-stone-200 space-y-3">
                    <div class="w-10 h-10 rounded-xl bg-emerald-50 border border-emerald-200 text-bsemerald flex items-center justify-center">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-bscharcoal"><?= t('pages.about.mission_title') ?></h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed"><?= t('pages.about.mission_desc') ?></p>
                </div>
                
                <div class="p-6 rounded-2xl bg-stone-50 border border-stone-200 space-y-3">
                    <div class="w-10 h-10 rounded-xl bg-amber-50 border border-amber-200 text-bsgold flex items-center justify-center">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-bscharcoal"><?= t('pages.about.vision_title') ?></h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed"><?= t('pages.about.vision_desc') ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================================
     HOW WE WORK (4-Step Execution Discipline)
     ========================================================================= -->
<section class="py-16 sm:py-24 bg-white text-bscharcoal border-b border-stone-200">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-16" data-aos="fade-up">
            <span class="text-xs font-bold uppercase tracking-widest text-bsgold mb-2 block"><?= ($lang === 'ar') ? 'إجراءات العمل المعتمدة' : 'Execution Discipline' ?></span>
            <h2 class="text-2xl sm:text-4xl font-extrabold text-bscharcoal tracking-tight <?= $headingFont ?>">
                <?= t('pages.about.workflow_title') ?>
            </h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <?php foreach (t('pages.about.steps') as $step): ?>
            <div class="p-6 rounded-2xl bg-stone-50 border border-stone-200 hover:border-bsemerald shadow-xs hover:shadow-md transition-all flex flex-col justify-between" data-aos="fade-up">
                <div>
                    <span class="text-3xl font-extrabold text-bsgold font-mono mb-4 block"><?= $step['num'] ?></span>
                    <h3 class="text-base font-bold text-bscharcoal mb-2"><?= $step['title'] ?></h3>
                    <p class="text-xs text-slate-600 leading-relaxed"><?= $step['desc'] ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- =========================================================================
     VISION 2030 & INDUSTRIAL DEVELOPMENT
     ========================================================================= -->
<section class="py-16 sm:py-20 bg-stone-50 text-bscharcoal border-b border-stone-200">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-6" data-aos="fade-up">
        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-white text-bsemerald border border-emerald-200 shadow-xs uppercase tracking-widest">
            <?= ($lang === 'ar') ? 'التنمية الاقتصادية وصناعة المستقبل' : 'Economic Development & Vision 2030' ?>
        </span>
        <h2 class="text-2xl sm:text-4xl font-extrabold text-bscharcoal tracking-tight <?= $headingFont ?>">
            <?= t('pages.about.vision_section_title') ?>
        </h2>
        <p class="text-sm sm:text-base text-slate-700 leading-relaxed max-w-3xl mx-auto">
            <?= t('pages.about.vision_section_text') ?>
        </p>
        <div class="pt-4 flex flex-wrap items-center justify-center gap-4">
            <a href="<?= route_url('partners') ?>" class="inline-flex items-center gap-2 px-8 py-3.5 bg-bsemerald hover:bg-bsforest text-white font-bold text-sm rounded-lg shadow-sm transition-all">
                <span><?= t('buttons.discuss_partnership') ?></span>
                <span class="rtl:rotate-180">&rarr;</span>
            </a>
            <a href="<?= asset_url('public/docs/Better_Supply_Company_Profile.pdf') ?>" target="_blank" class="inline-flex items-center gap-2 px-8 py-3.5 bg-white hover:bg-emerald-50 text-bsemerald border border-emerald-300 font-bold text-sm rounded-lg shadow-xs transition-all">
                <svg class="w-4 h-4 text-bsgold shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                <span><?= t('nav.download_profile') ?> (PDF)</span>
            </a>
            <a href="<?= route_url('products') ?>" class="inline-flex items-center gap-2 px-8 py-3.5 bg-white hover:bg-stone-100 text-bscharcoal border border-stone-300 font-bold text-sm rounded-lg shadow-xs transition-all">
                <span><?= t('buttons.explore_products') ?></span>
            </a>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/../footer.php'; ?>