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

        <div class="pt-8 flex flex-wrap items-center justify-center gap-4">
            <a href="<?= asset_url('public/docs/Better_Supply_Company_Profile.pdf') ?>" target="_blank" download="Better_Supply_Company_Profile.pdf" class="inline-flex items-center gap-2.5 px-8 py-3.5 bg-bsgold hover:bg-[#d4aa6a] text-bscharcoal font-bold text-sm rounded-lg shadow-lg hover:shadow-gold/30 transition-all transform hover:-translate-y-0.5">
                <svg class="w-5 h-5 text-bscharcoal shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                <span><?= ($lang === 'ar') ? 'تحميل الملف التعريفي للشركة (PDF)' : 'Download Company Profile (PDF)' ?></span>
            </a>
            <a href="<?= route_url('products') ?>" class="inline-flex items-center gap-2 px-7 py-3.5 bg-white/10 hover:bg-white/20 border border-stone-300 text-white font-semibold text-sm rounded-lg transition-all">
                <span><?= t('buttons.explore_products') ?></span>
                <span class="rtl:rotate-180">&rarr;</span>
            </a>
        </div>
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

            <div class="p-5 rounded-2xl bg-emerald-50/80 border border-emerald-200 text-xs sm:text-sm font-semibold text-bsemerald leading-relaxed">
                <?= t('pages.about.trust_statement') ?>
            </div>

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
     OUR COMPLETE BUSINESS ACTIVITIES (9 Sourcing Divisions)
     ========================================================================= -->
<section class="py-16 sm:py-24 bg-white border-b border-stone-200 text-bscharcoal">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-14" data-aos="fade-up">
            <span class="text-xs font-bold uppercase tracking-widest text-bsgold mb-2 block">
                <?= ($lang === 'ar') ? 'محفظة الأنشطة التجارية الشاملة' : 'Complete Commercial Portfolio' ?>
            </span>
            <h2 class="text-2xl sm:text-4xl font-extrabold text-bscharcoal tracking-tight mb-4 <?= $headingFont ?>">
                <?= ($lang === 'ar') ? 'أنشطتنا وقطاعات التوريد المتكاملة' : 'Our Complete Business Activities' ?>
            </h2>
            <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                <?= ($lang === 'ar') 
                    ? 'نقدم حلول توريد متكاملة عبر 9 قطاعات تجارية رئيسية تلبي احتياجات المشترين الصناعيين والتجاريين وفق أعلى معايير مطابقة المواصفات الفنية.' 
                    : 'We deliver coordinated commercial supply solutions across 9 core business divisions, serving industrial, petrochemical, agricultural, and commercial buyers with strict specification compliance.' ?>
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php 
            $cat_icons = [
                'a' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />',
                'b' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />',
                'c' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />',
                'd' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />',
                'e' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />',
                'f' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />',
                'g' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />',
                'h' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />',
                'i' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />',
            ];
            $cat_routes = [
                'a' => 'agrochemicals',
                'b' => 'industrial-chemicals',
                'c' => 'industrial-salts',
                'd' => 'building-materials',
                'e' => 'machinery',
                'f' => 'spare-parts',
                'g' => 'products#cat-g',
                'h' => 'other-trading',
                'i' => 'international-trading',
            ];
            $idx = 1;
            foreach (t('catalog') as $ckey => $cat): 
                $route = $cat_routes[$ckey] ?? 'products';
                $icon = $cat_icons[$ckey] ?? $cat_icons['c'];
            ?>
            <div class="p-6 rounded-2xl bg-stone-50 border border-stone-200 hover:border-bsemerald hover:bg-white hover:shadow-md transition-all flex flex-col justify-between" data-aos="fade-up">
                <div class="space-y-3">
                    <div class="flex items-center justify-between">
                        <span class="w-8 h-8 rounded-lg bg-emerald-50 text-bsemerald border border-emerald-200 font-bold font-mono text-xs flex items-center justify-center">
                            <?= str_pad($idx, 2, '0', STR_PAD_LEFT) ?>
                        </span>
                        <span class="text-[11px] font-semibold text-bsemerald bg-emerald-50/70 border border-emerald-200 px-2.5 py-0.5 rounded-full">
                            <?= htmlspecialchars($cat['badge'] ?? '') ?>
                        </span>
                    </div>
                    <div class="flex items-center gap-2 pt-1">
                        <div class="w-8 h-8 rounded-lg bg-stone-100 text-bsgold flex items-center justify-center shrink-0">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <?= $icon ?>
                            </svg>
                        </div>
                        <h3 class="text-base font-bold text-bscharcoal leading-snug">
                            <?= htmlspecialchars($cat['title']) ?>
                        </h3>
                    </div>
                    <p class="text-xs text-slate-600 leading-relaxed line-clamp-3">
                        <?= htmlspecialchars($cat['short_desc'] ?? '') ?>
                    </p>
                </div>
                <div class="pt-4 mt-3 border-t border-stone-200/80">
                    <a href="<?= (strpos($route, '#') !== false) ? route_url('products') . substr($route, strpos($route, '#')) : route_url($route) ?>" class="inline-flex items-center gap-1.5 text-xs font-bold text-bsemerald hover:text-bsforest transition-colors">
                        <span><?= ($lang === 'ar') ? 'عرض التفاصيل والمواصفات' : 'View Specifications' ?></span>
                        <span class="rtl:rotate-180">&rarr;</span>
                    </a>
                </div>
            </div>
            <?php 
                $idx++;
            endforeach; 
            ?>
        </div>

        <div class="mt-14 p-8 sm:p-10 rounded-3xl bg-bsivory border border-stone-200 text-center space-y-4" data-aos="fade-up">
            <h3 class="text-xl sm:text-2xl font-bold text-bscharcoal <?= $headingFont ?>">
                <?= ($lang === 'ar') ? 'هل ترغب في الحصول على الملف التعريفي الشامل لشركتنا؟' : 'Need Our Complete Corporate Profile for Sourcing & Prequalification?' ?>
            </h3>
            <p class="text-xs sm:text-sm text-slate-600 max-w-2xl mx-auto leading-relaxed">
                <?= ($lang === 'ar') 
                    ? 'قم بتحميل الملف التعريفي المعتمد بصيغة PDF الذي يلخص نطاق المنتجات الكامل، معايير الجودة، بيانات الاتصال، وإجراءات التوريد المعتمدة.' 
                    : 'Download our approved 2-page Company Profile document summarizing our complete product divisions, quality benchmarks, commercial contacts, and procurement workflow.' ?>
            </p>
            <div class="pt-2">
                <a href="<?= asset_url('public/docs/Better_Supply_Company_Profile.pdf') ?>" target="_blank" download="Better_Supply_Company_Profile.pdf" class="inline-flex items-center gap-2.5 px-8 py-3.5 bg-bsemerald hover:bg-bsforest text-white font-bold text-sm rounded-lg shadow-md transition-all transform hover:-translate-y-0.5">
                    <svg class="w-5 h-5 text-white shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    <span><?= ($lang === 'ar') ? 'تحميل الملف التعريفي للشركة (PDF)' : 'Download Company Profile (PDF)' ?></span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================================
     HOW WE WORK (4-Step Execution Discipline)
     ========================================================================= -->
<section class="py-16 sm:py-24 bg-stone-50 text-bscharcoal border-b border-stone-200">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-16" data-aos="fade-up">
            <span class="text-xs font-bold uppercase tracking-widest text-bsgold mb-2 block"><?= ($lang === 'ar') ? 'إجراءات العمل المعتمدة' : 'Execution Discipline' ?></span>
            <h2 class="text-2xl sm:text-4xl font-extrabold text-bscharcoal tracking-tight <?= $headingFont ?>">
                <?= t('pages.about.workflow_title') ?>
            </h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <?php foreach (t('pages.about.steps') as $step): ?>
            <div class="p-6 rounded-2xl bg-white border border-stone-200 hover:border-bsemerald shadow-xs hover:shadow-md transition-all flex flex-col justify-between" data-aos="fade-up">
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
<section class="py-16 sm:py-20 bg-white text-bscharcoal border-b border-stone-200">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-6" data-aos="fade-up">
        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-emerald-50 text-bsemerald border border-emerald-200 shadow-xs uppercase tracking-widest">
            <?= ($lang === 'ar') ? 'التنمية الاقتصادية وصناعة المستقبل' : 'Economic Development & Vision 2030' ?>
        </span>
        <h2 class="text-2xl sm:text-4xl font-extrabold text-bscharcoal tracking-tight <?= $headingFont ?>">
            <?= t('pages.about.vision_section_title') ?>
        </h2>
        <p class="text-sm sm:text-base text-slate-700 leading-relaxed max-w-3xl mx-auto">
            <?= t('pages.about.vision_section_text') ?>
        </p>
        <div class="pt-4 flex flex-wrap items-center justify-center gap-4">
            <a href="<?= asset_url('public/docs/Better_Supply_Company_Profile.pdf') ?>" target="_blank" download="Better_Supply_Company_Profile.pdf" class="inline-flex items-center gap-2 px-8 py-3.5 bg-bsgold hover:bg-[#d4aa6a] text-bscharcoal font-bold text-sm rounded-lg shadow-sm transition-all transform hover:-translate-y-0.5">
                <svg class="w-4 h-4 text-bscharcoal shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                <span><?= ($lang === 'ar') ? 'تحميل الملف التعريفي للشركة (PDF)' : 'Download Company Profile (PDF)' ?></span>
            </a>
            <a href="<?= route_url('partners') ?>" class="inline-flex items-center gap-2 px-8 py-3.5 bg-bsemerald hover:bg-bsforest text-white font-bold text-sm rounded-lg shadow-sm transition-all">
                <span><?= t('buttons.discuss_partnership') ?></span>
                <span class="rtl:rotate-180">&rarr;</span>
            </a>
            <a href="<?= route_url('products') ?>" class="inline-flex items-center gap-2 px-8 py-3.5 bg-white hover:bg-stone-100 text-bscharcoal border border-stone-300 font-bold text-sm rounded-lg shadow-xs transition-all">
                <span><?= t('buttons.explore_products') ?></span>
            </a>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/../footer.php'; ?>