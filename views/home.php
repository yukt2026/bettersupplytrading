<?php
/**
 * Better Supply Trading Establishment - Homepage View (views/home.php)
 * Conforms 100% to Website Enhancement & Development Requirements:
 * 1. Distinctive International B2B Trading Interface (Separated from Desert Iron contracting style)
 * 2. Exact Recommended Main Heading, Supporting Description & Corporate Tagline
 * 3. All 9 Recommended Homepage Sections strictly implemented in sequence
 * 4. Products & Services Master Sequence A through I with Primary Visibility to Chemical & Agricultural
 * 5. Complete Removal of all CR activity codes and unfinished placeholders
 */

$page = 'home';
require_once __DIR__ . '/../header.php';
$headingFont = ($lang === 'ar') ? 'font-arabic font-bold' : 'font-heading font-bold';
$catalog = t('catalog');
$trust_strip = t('pages.home.trust_strip');
?>

<!-- =========================================================================
     SECTION 1: Main Corporate Banner & Introduction
     Distinctive International B2B Trading Hero with Dusk Port Imagery & Directional Gradient
     ========================================================================= -->
<section class="relative bg-bscharcoal text-white min-h-[82vh] flex flex-col justify-between overflow-hidden border-b border-stone-800">
    
    <!-- Background Photographic Image (International Port Shipping & Logistics) -->
    <div class="absolute inset-0 z-0 pointer-events-none parallax-container overflow-hidden">
        <picture>
            <source srcset="<?= img_url('hero_port_dusk.webp') ?>" type="image/webp">
            <img src="<?= img_url('hero_port_dusk.jpg') ?>" alt="International maritime commercial shipping terminal at dusk" class="w-full h-full object-cover object-center opacity-75 filter contrast-110 parallax-img" data-speed="0.2">
        </picture>
        
        <!-- Directional Overlay Gradient (Deep Charcoal & Subtle Emerald Tint) -->
        <div class="absolute inset-0 hidden nav:block" style="<?= ($lang === 'ar') 
            ? 'background: linear-gradient(270deg, rgba(36, 38, 41, 0.96) 0%, rgba(36, 38, 41, 0.88) 45%, rgba(0, 91, 63, 0.40) 80%, rgba(36, 38, 41, 0.35) 100%);' 
            : 'background: linear-gradient(90deg, rgba(36, 38, 41, 0.96) 0%, rgba(36, 38, 41, 0.88) 45%, rgba(0, 91, 63, 0.40) 80%, rgba(36, 38, 41, 0.35) 100%);' ?>">
        </div>
        <div class="absolute inset-0 nav:hidden" style="background: linear-gradient(180deg, rgba(36, 38, 41, 0.96) 0%, rgba(36, 38, 41, 0.85) 60%, rgba(0, 91, 63, 0.50) 100%);">
        </div>
    </div>

    <!-- Main Hero Content: Left-aligned on Desktop (RTL: Right-aligned), Centered on Mobile -->
    <div class="relative z-10 max-w-[1400px] w-full mx-auto px-4 sm:px-6 lg:px-8 pt-16 pb-12 nav:pt-24 nav:pb-16 flex-1 flex flex-col justify-center">
        
        <div class="max-w-[760px] text-center nav:text-left rtl:nav:text-right flex flex-col items-center nav:items-start rtl:nav:items-end" data-aos="fade-up" data-aos-duration="700">
            
            <!-- Corporate Tagline & Location Pill -->
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-semibold bg-white/10 backdrop-blur-md border border-bsgold/50 text-bsgold uppercase tracking-wider mb-5 shadow-sm max-w-full text-wrap text-center">
                <span class="w-2 h-2 rounded-full bg-bsgold animate-pulse"></span>
                <span class="font-bold"><?= t('company_tagline') ?></span>
                <span class="text-white/40 hidden sm:inline">•</span>
                <span class="text-slate-200 hidden sm:inline"><?= t('headquarters') ?></span>
            </div>

            <!-- Recommended Main Heading -->
            <h1 class="text-white font-extrabold tracking-tight mb-5 text-balance break-words max-w-full <?= $headingFont ?>" style="font-size: clamp(2rem, 4.2vw, 3.6rem); line-height: 1.15;">
                <?= t('pages.home.hero_title') ?>
            </h1>

            <!-- Supporting Description -->
            <p class="text-slate-200 text-sm sm:text-base nav:text-lg mb-8 font-normal leading-relaxed max-w-2xl text-balance">
                <?= t('pages.home.hero_lead') ?>
            </p>

            <!-- High-Contrast CTAs -->
            <div class="flex flex-col sm:flex-row items-center gap-3.5 w-full sm:w-auto">
                <a href="#rfq-form-section" class="w-full sm:w-auto h-[48px] px-8 inline-flex items-center justify-center bg-bsemerald hover:bg-bsforest text-white font-bold text-sm rounded-lg shadow-lg hover:shadow-emerald-900/50 transition-all transform hover:-translate-y-0.5 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-bsemerald whitespace-nowrap">
                    <span><?= t('buttons.request_quote') ?></span>
                    <span class="ms-2 rtl:rotate-180">&rarr;</span>
                </a>
                <a href="#products-section" class="w-full sm:w-auto h-[48px] px-7 inline-flex items-center justify-center bg-white/10 hover:bg-white/20 border border-stone-400 text-white font-semibold text-sm rounded-lg backdrop-blur-xs transition-all focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-bsgold whitespace-nowrap">
                    <?= t('buttons.explore_products') ?>
                </a>
            </div>

        </div>

    </div>

    <!-- Slim Trust Strip Docked along Bottom of Hero -->
    <div class="relative z-10 border-t border-stone-700/80 bg-bscharcoal/90 backdrop-blur-md py-4">
        <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-xs font-semibold text-slate-300">
                <div class="flex items-center justify-center nav:justify-start gap-2.5">
                    <svg class="w-4 h-4 text-bsgold shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                    <span><?= $trust_strip['dammam'] ?></span>
                </div>
                <div class="flex items-center justify-center nav:justify-start gap-2.5">
                    <svg class="w-4 h-4 text-bsgold shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                    <span><?= $trust_strip['sourcing'] ?></span>
                </div>
                <div class="flex items-center justify-center nav:justify-start gap-2.5">
                    <svg class="w-4 h-4 text-bsgold shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <span><?= $trust_strip['gcc'] ?></span>
                </div>
                <div class="flex items-center justify-center nav:justify-start gap-2.5">
                    <svg class="w-4 h-4 text-bsgold shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    <span><?= $trust_strip['rfq'] ?></span>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- =========================================================================
     SECTION 2: About Better Supply
     Diversified Industrial, Chemical & Agricultural Sourcing Intermediary (Light Ivory Background)
     ========================================================================= -->
<section class="py-20 bg-bsivory text-bscharcoal border-b border-stone-200">
    <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <div class="lg:col-span-6 space-y-6" data-aos="fade-up">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold bg-white text-bsemerald border border-stone-300 uppercase tracking-wider shadow-xs">
                    <span class="w-2 h-2 rounded-full bg-bsemerald"></span>
                    <span><?= t('pages.home.sec2_subtitle') ?></span>
                </div>
                <h2 class="text-2xl sm:text-4xl font-extrabold text-bscharcoal tracking-tight <?= $headingFont ?>">
                    <?= t('pages.home.sec2_title') ?>
                </h2>
                <p class="text-slate-700 text-sm sm:text-base leading-relaxed">
                    <?= t('pages.home.sec2_text') ?>
                </p>
                <div class="p-4 rounded-xl bg-emerald-50/80 border border-emerald-200 text-xs sm:text-sm text-bsemerald font-semibold leading-relaxed">
                    <?= t('pages.home.trust_statement') ?>
                </div>
                <div class="p-5 rounded-xl bg-white border border-stone-200 shadow-sm space-y-2">
                    <div class="flex items-center gap-2 text-bsemerald font-bold text-sm">
                        <svg class="w-5 h-5 text-bsgold shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                        <span><?= ($lang === 'ar') ? 'مركز التجارة والعمليات: الدمام، المنطقة الشرقية، المملكة العربية السعودية' : 'Strategic Commercial Hub: Dammam, Eastern Province, Saudi Arabia' ?></span>
                    </div>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        <?= ($lang === 'ar') 
                            ? 'نستفيد من موقع الدمام الحيوي كبوابة لوجستية وصناعية كبرى للمنطقة الشرقية ودول الخليج، لربط طلبات المشترين الصناعيين والتجاريين بشحنات الموانئ العالمية مباشرة.'
                            : 'Leveraging Dammam’s premier maritime logistics gateway to serve the Eastern Province, major Saudi industrial hubs, and cross-border GCC commerce.' ?>
                    </p>
                </div>
                <div class="flex flex-wrap items-center gap-4 pt-1">
                    <a href="<?= route_url('about') ?>" class="inline-flex items-center gap-2 font-bold text-sm text-bsemerald hover:text-bsforest transition-colors">
                        <span><?= t('buttons.learn_more') ?></span>
                        <span class="rtl:rotate-180">&rarr;</span>
                    </a>
                </div>
            </div>

            <!-- Execution Discipline 4-Steps -->
            <div class="lg:col-span-6 space-y-4" data-aos="fade-up" data-aos-delay="150">
                <span class="text-xs font-bold uppercase tracking-widest text-bsgold block">
                    <?= t('pages.about.workflow_title') ?>
                </span>
                <div class="space-y-3">
                    <?php foreach (t('pages.about.steps') as $step): ?>
                    <div class="flex items-start gap-4 p-4 rounded-xl bg-white border border-stone-200 shadow-xs hover:border-bsemerald transition-colors">
                        <span class="text-xs font-bold font-mono px-2.5 py-1.5 rounded-lg bg-emerald-50 text-bsemerald border border-emerald-200 shrink-0">
                            <?= $step['num'] ?>
                        </span>
                        <div>
                            <h4 class="text-sm font-bold text-bscharcoal mb-0.5"><?= $step['title'] ?></h4>
                            <p class="text-xs text-slate-600 leading-relaxed"><?= $step['desc'] ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- =========================================================================
     SECTION 3: Products & Services (Sequence A - I)
     Primary Visibility to Chemical & Agricultural Products (A, B, C)
     followed by Industrial & Construction Products (D, E, F, G, H, I)
     ========================================================================= -->
<section id="products-section" class="py-20 bg-white text-bscharcoal border-b border-stone-200 scroll-mt-20">
    <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
            <span class="text-xs font-bold uppercase tracking-widest text-bsgold mb-2 block">
                <?= ($lang === 'ar') ? 'محفظة المنتجات والتوريد' : 'Products & Sourcing Categories' ?>
            </span>
            <h2 class="text-2xl sm:text-4xl font-extrabold text-bscharcoal tracking-tight mb-4 <?= $headingFont ?>">
                <?= t('pages.home.sec3_title') ?>
            </h2>
            <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                <?= t('pages.home.sec3_subtitle') ?>
            </p>
        </div>

        <!-- Master Categories Grid (A through I) -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <?php foreach ($catalog as $cat_id => $cat): 
                $is_priority = ($cat['priority'] === 'high');
            ?>
            <div id="cat-<?= $cat_id ?>" class="rounded-2xl border <?= $is_priority ? 'border-emerald-300 ring-1 ring-emerald-200/50 bg-stone-50/50' : 'border-stone-200 bg-white' ?> shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between overflow-hidden group" data-aos="fade-up">
                <div>
                    <!-- Category Thumbnail Image -->
                    <div class="h-48 overflow-hidden relative bg-stone-100">
                        <img src="<?= img_url($cat['image']) ?>" alt="<?= htmlspecialchars($cat['title']) ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 filter brightness-95">
                        <div class="absolute inset-0 bg-gradient-to-t from-bscharcoal/80 via-bscharcoal/20 to-transparent"></div>
                        <span class="absolute top-3 <?= ($lang === 'ar') ? 'right-3' : 'left-3' ?> px-2.5 py-1 rounded-md text-[11px] font-bold text-white shadow-xs <?= $is_priority ? 'bg-bsemerald' : 'bg-bscharcoal/90' ?>">
                            <?= $cat['badge'] ?>
                        </span>
                    </div>

                    <!-- Category Body -->
                    <div class="p-6">
                        <h3 class="text-lg sm:text-xl font-bold text-bscharcoal mb-2 group-hover:text-bsemerald transition-colors leading-snug">
                            <?= $cat['title'] ?>
                        </h3>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed mb-4">
                            <?= $cat['short_desc'] ?>
                        </p>

                        <!-- Representative Product List (Section 3 Requirement) -->
                        <div class="border-t border-stone-200/90 pt-3.5 mt-3">
                            <span class="text-[11px] font-bold uppercase tracking-wider text-bsgold block mb-2">
                                <?= ($lang === 'ar') ? 'أبرز المنتجات والمواد:' : 'Representative Products & Materials:' ?>
                            </span>
                            <ul class="space-y-1.5 text-xs text-slate-700">
                                <?php foreach (array_slice($cat['items'], 0, 5) as $item): ?>
                                <li class="flex items-start gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-bsemerald mt-1.5 shrink-0"></span>
                                    <span><?= htmlspecialchars($item) ?></span>
                                </li>
                                <?php endforeach; ?>
                                <?php if (count($cat['items']) > 5): ?>
                                <li class="text-[11px] text-slate-500 italic ps-3.5">
                                    + <?= count($cat['items']) - 5 ?> <?= ($lang === 'ar') ? 'منتجات إضافية مشمولة' : 'additional items in category' ?>
                                </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Card Actions -->
                <div class="p-6 pt-0 flex items-center justify-between gap-3 border-t border-stone-100 bg-stone-50/70 py-3.5">
                    <a href="<?= route_url('contact') ?>?category=<?= urlencode($cat['key']) ?>#rfq-form" class="inline-flex items-center gap-1.5 text-xs font-bold text-bsemerald hover:text-bsforest">
                        <span><?= t('buttons.request_quote') ?></span>
                        <span class="rtl:rotate-180">&rarr;</span>
                    </a>
                    <a href="<?= route_url('products') ?>#cat-<?= $cat_id ?>" class="text-[11px] text-slate-500 hover:text-bscharcoal underline">
                        <?= t('buttons.view_details') ?>
                    </a>
                </div>
            </div>
            <?php endforeach; ?>

        </div>

        <!-- Full Directory Link -->
        <div class="text-center mt-12">
            <a href="<?= route_url('products') ?>" class="inline-flex items-center gap-2 px-8 py-3.5 bg-bsemerald hover:bg-bsforest text-white font-bold text-sm rounded-lg shadow-md transition-all">
                <span><?= t('buttons.view_all_products') ?></span>
                <span class="rtl:rotate-180">&rarr;</span>
            </a>
        </div>

    </div>
</section>

<!-- =========================================================================
     SECTION 4: Industries We Serve
     ========================================================================= -->
<section class="py-20 bg-bsivory text-bscharcoal border-b border-stone-200">
    <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="max-w-3xl mb-14" data-aos="fade-up">
            <span class="text-xs font-bold uppercase tracking-widest text-bsgold mb-2 block">
                <?= ($lang === 'ar') ? 'تغطية القطاعات الاقتصادية' : 'Target Economic Sectors' ?>
            </span>
            <h2 class="text-2xl sm:text-4xl font-extrabold text-bscharcoal tracking-tight mb-4 <?= $headingFont ?>">
                <?= t('pages.home.sec4_title') ?>
            </h2>
            <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                <?= t('pages.home.sec4_subtitle') ?>
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php 
            $sec_idx = 0;
            foreach (t('pages.industries.sectors') as $sector): 
                $sec_delay = ($sec_idx % 3) * 100 + 100;
                $sec_idx++;
            ?>
            <div class="p-6 bg-white border border-stone-200 rounded-xl hover:border-bsemerald hover:shadow-md transition-all shadow-xs" data-aos="fade-up" data-aos-delay="<?= $sec_delay ?>">
                <div class="w-10 h-10 rounded-lg bg-emerald-50 border border-emerald-200 flex items-center justify-center text-bsemerald mb-4 font-bold">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                </div>
                <h3 class="text-base font-bold text-bscharcoal mb-2"><?= $sector['name'] ?></h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed"><?= $sector['desc'] ?></p>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<!-- =========================================================================
     SECTION 5: Global Sourcing & Trading Capabilities
     ========================================================================= -->
<section class="py-20 bg-white text-bscharcoal border-b border-stone-200">
    <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
            <span class="text-xs font-bold uppercase tracking-widest text-bsgold mb-2 block">
                <?= ($lang === 'ar') ? 'سلاسل الإمداد العالمية' : 'Cross-Border Sourcing' ?>
            </span>
            <h2 class="text-2xl sm:text-4xl font-extrabold text-bscharcoal tracking-tight mb-4 <?= $headingFont ?>">
                <?= t('pages.home.sec5_title') ?>
            </h2>
            <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                <?= t('pages.home.sec5_subtitle') ?>
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            <!-- Scope 1: Principal Target (Saudi & GCC) -->
            <div class="p-8 rounded-2xl bg-stone-50 border border-stone-200 hover:border-bsemerald hover:shadow-lg transition-all space-y-4" data-aos="fade-up" data-aos-delay="100">
                <span class="px-2.5 py-1 rounded bg-emerald-100 text-bsemerald text-xs font-bold uppercase tracking-wider border border-emerald-200">
                    <?= ($lang === 'ar') ? 'النطاق التشغيلي الأساسي' : 'Active Operational Scope' ?>
                </span>
                <h3 class="text-xl font-bold text-bscharcoal"><?= t('pages.international_trading.gcc_title') ?></h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    <?= t('pages.international_trading.gcc_text') ?>
                </p>
            </div>

            <!-- Scope 2: Sourcing Focus (India & South Asia) -->
            <div class="p-8 rounded-2xl bg-stone-50 border border-stone-200 hover:border-bsemerald hover:shadow-lg transition-all space-y-4" data-aos="fade-up" data-aos-delay="200">
                <span class="px-2.5 py-1 rounded bg-emerald-100 text-bsemerald text-xs font-bold uppercase tracking-wider border border-emerald-200">
                    <?= ($lang === 'ar') ? 'ممرات التوريد المباشرة' : 'Direct Sourcing Corridors' ?>
                </span>
                <h3 class="text-xl font-bold text-bscharcoal"><?= t('pages.international_trading.south_asia_title') ?></h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    <?= t('pages.international_trading.south_asia_text') ?>
                </p>
            </div>

            <!-- Scope 3: Global Industrial Producers -->
            <div class="p-8 rounded-2xl bg-stone-50 border border-stone-200 hover:border-bsgold hover:shadow-lg transition-all space-y-4" data-aos="fade-up" data-aos-delay="300">
                <span class="px-2.5 py-1 rounded bg-amber-50 text-amber-800 text-xs font-bold uppercase tracking-wider border border-amber-200">
                    <?= ($lang === 'ar') ? 'التنسيق والشحن الدولي' : 'Global Trade & Bulk Sea Freight' ?>
                </span>
                <h3 class="text-xl font-bold text-bscharcoal"><?= t('pages.international_trading.western_markets_title') ?></h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    <?= t('pages.international_trading.western_markets_text') ?>
                </p>
            </div>

        </div>

    </div>
</section>

<!-- =========================================================================
     SECTION 6: Why Choose Us
     ========================================================================= -->
<section class="py-20 bg-bsivory text-bscharcoal border-b border-stone-200">
    <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
            <span class="text-xs font-bold uppercase tracking-widest text-bsgold mb-2 block">
                <?= ($lang === 'ar') ? 'معايير التميز التجاري' : 'Value Proposition' ?>
            </span>
            <h2 class="text-2xl sm:text-4xl font-extrabold text-bscharcoal tracking-tight mb-4 <?= $headingFont ?>">
                <?= t('pages.home.sec6_title') ?>
            </h2>
            <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                <?= t('pages.home.sec6_subtitle') ?>
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <div class="p-6 bg-white border border-stone-200 rounded-xl shadow-xs space-y-3" data-aos="fade-up" data-aos-delay="100">
                <div class="w-10 h-10 rounded-lg bg-emerald-50 text-bsemerald flex items-center justify-center font-bold text-lg border border-emerald-200">01</div>
                <h3 class="text-base font-bold text-bscharcoal"><?= ($lang === 'ar') ? 'قنوات توريد موثوقة' : 'Trusted Sourcing Channels' ?></h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    <?= ($lang === 'ar') ? 'علاقات تجارية راسخة مع مصنعين وموردين معتمدين تتيح تقديم عروض أسعار منافسة وتأمين كميات الإمداد المطلوبة.' : 'Established commercial relationships with verified producers support competitive quotation and dependable volume supply.' ?>
                </p>
            </div>

            <div class="p-6 bg-white border border-stone-200 rounded-xl shadow-xs space-y-3" data-aos="fade-up" data-aos-delay="200">
                <div class="w-10 h-10 rounded-lg bg-emerald-50 text-bsemerald flex items-center justify-center font-bold text-lg border border-emerald-200">02</div>
                <h3 class="text-base font-bold text-bscharcoal"><?= ($lang === 'ar') ? 'شراء قائم على مطابقة المواصفات' : 'Specification-Based Procurement' ?></h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    <?= ($lang === 'ar') ? 'مراجعة دقيقة لشهادات التحليل (COA) وبطاقات السلامة (SDS) والمواصفات الفنية للعميل قبل تقديم العرض التجاري.' : 'Careful review of technical datasheets, Certificates of Analysis (COA), and buyer project specifications prior to quotation.' ?>
                </p>
            </div>

            <div class="p-6 bg-white border border-stone-200 rounded-xl shadow-xs space-y-3" data-aos="fade-up" data-aos-delay="300">
                <div class="w-10 h-10 rounded-lg bg-emerald-50 text-bsemerald flex items-center justify-center font-bold text-bscharcoal"><?= ($lang === 'ar') ? 'حضور تجاري سعودي بالدمام' : 'Saudi Commercial Presence' ?></h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    <?= ($lang === 'ar') ? 'مقر إداري وتجاري رسمي بالدمام لمتابعة التخليص الجمركي وترتيبات الشحن والتواصل التجاري المباشر مع العملاء.' : 'Strategically based in Dammam, Eastern Province to coordinate port clearance, road freight, and active local communication.' ?>
                </p>
            </div>

        </div>

    </div>
</section>

<!-- =========================================================================
     SECTION 7: Supplier & Manufacturer Partnerships
     ========================================================================= -->
<section class="py-20 bg-bscharcoal text-white border-b border-stone-800">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-6" data-aos="fade-up">
        
        <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-semibold bg-white/10 text-bsgold border border-bsgold/40 uppercase tracking-widest">
            <?= ($lang === 'ar') ? 'شراكات التصنيع والتوزيع' : 'Global Manufacturer Partnerships' ?>
        </span>

        <h2 class="text-2xl sm:text-4xl font-extrabold text-white tracking-tight <?= $headingFont ?>">
            <?= t('pages.home.sec7_title') ?>
        </h2>

        <p class="text-slate-300 text-sm sm:text-base leading-relaxed max-w-2xl mx-auto">
            <?= t('pages.home.sec7_subtitle') ?>
        </p>

        <div class="pt-4 flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="<?= route_url('partners') ?>" class="w-full sm:w-auto px-8 py-3.5 bg-bsemerald hover:bg-bsforest text-white font-bold text-sm rounded-lg shadow-md transition-all">
                <span><?= t('buttons.discuss_partnership') ?></span>
                <span class="ms-1 rtl:rotate-180">&rarr;</span>
            </a>
            <a href="<?= route_url('contact') ?>" class="w-full sm:w-auto px-8 py-3.5 bg-white/10 hover:bg-white/20 border border-stone-400 text-white font-semibold text-sm rounded-lg transition-all">
                <?= t('nav.contact') ?>
            </a>
        </div>

    </div>
</section>

<!-- =========================================================================
     SECTION 8: Request a Quotation (RFQ System)
     Full Functional Form with All 10 Required Parameters
     ========================================================================= -->
<section id="rfq-form-section" class="py-20 bg-bsivory text-bscharcoal border-b border-stone-200 scroll-mt-20" data-aos="fade-up">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <?php 
        $current_page_name = 'home';
        require __DIR__ . '/partials/rfq_form_partial.php'; 
        ?>
    </div>
</section>

<!-- =========================================================================
     SECTION 9: Contact Information
     Separate Sales & Commercial and Operations & Management Desks
     ========================================================================= -->
<section class="py-20 bg-white text-bscharcoal">
    <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
            <span class="text-xs font-bold uppercase tracking-widest text-bsgold mb-2 block">
                <?= t('labels.contact_us') ?>
            </span>
            <h2 class="text-2xl sm:text-4xl font-extrabold text-bscharcoal tracking-tight mb-4 <?= $headingFont ?>">
                <?= t('pages.home.sec9_title') ?>
            </h2>
            <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                <?= t('pages.home.sec9_subtitle') ?>
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto mb-12">
            
            <!-- 1. Sales & Commercial Contact Desk -->
            <div class="p-8 rounded-2xl bg-stone-50 border border-stone-200 hover:border-bsemerald shadow-xs hover:shadow-lg transition-all space-y-4">
                <div class="flex items-start justify-between gap-4">
                    <div>
                        <span class="px-2.5 py-1 rounded bg-emerald-100 text-bsemerald text-xs font-bold uppercase tracking-wider border border-emerald-200">
                            <?= t('pages.contact.sales_title') ?>
                        </span>
                        <h3 class="text-xl font-bold text-bscharcoal pt-2">Meharsha O.N</h3>
                        <p class="text-xs text-slate-600"><?= t('pages.contact.sales_exec') ?></p>
                    </div>
                    <div class="w-10 h-10 rounded-xl bg-emerald-50 text-bsemerald flex items-center justify-center font-bold">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                    </div>
                </div>
                <div class="space-y-2 text-xs pt-2 border-t border-stone-200">
                    <div class="flex items-center justify-between">
                        <span class="text-slate-500"><?= t('pages.contact.mobile_whatsapp') ?></span>
                        <a href="tel:+966599510213" class="font-mono font-bold text-bscharcoal hover:text-bsemerald">+966 59 951 0213</a>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-slate-500"><?= t('pages.contact.email_label') ?></span>
                        <a href="mailto:sales@bettersupplytrading.com" class="font-mono font-bold text-bsemerald hover:underline">sales@bettersupplytrading.com</a>
                    </div>
                </div>
                <div class="pt-2">
                    <a href="https://wa.me/966599510213?text=<?= urlencode(($lang === 'ar') ? 'مرحباً، أود الاستفسار عن عروض الأسعار والتوريد التجاري مع مؤسسة أفضل توريد.' : 'Hello, I would like to inquire about industrial sourcing and quotations from Better Supply.') ?>" target="_blank" rel="noopener noreferrer" class="w-full inline-flex items-center justify-center gap-2 px-4 py-2.5 rounded-lg bg-bsemerald hover:bg-bsforest text-white text-xs font-bold shadow-sm transition-all">
                        <span>WhatsApp Sales Desk</span>
                    </a>
                </div>
            </div>

            <!-- 2. Operations & Management Contact Desk -->
            <div class="p-8 rounded-2xl bg-stone-50 border border-stone-200 hover:border-bsemerald shadow-xs hover:shadow-lg transition-all space-y-4">
                <div class="flex items-start justify-between gap-4">
                    <div>
                        <span class="px-2.5 py-1 rounded bg-emerald-100 text-bsemerald text-xs font-bold uppercase tracking-wider border border-emerald-200">
                            <?= t('pages.contact.operations_title') ?>
                        </span>
                        <h3 class="text-xl font-bold text-bscharcoal pt-2">Sayed Alavi</h3>
                        <p class="text-xs text-slate-600"><?= t('pages.contact.operations_director') ?></p>
                    </div>
                    <div class="w-10 h-10 rounded-xl bg-emerald-50 text-bsemerald flex items-center justify-center font-bold">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    </div>
                </div>
                <div class="space-y-2 text-xs pt-2 border-t border-stone-200">
                    <div class="flex items-center justify-between">
                        <span class="text-slate-500"><?= t('pages.contact.mobile_whatsapp') ?></span>
                        <a href="tel:0502851077" class="font-mono font-bold text-bscharcoal hover:text-bsemerald">0502851077 <span class="text-slate-500 font-normal">(+966 50 285 1077)</span></a>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-slate-500"><?= t('pages.contact.email_label') ?></span>
                        <a href="mailto:operations@bettersupplytrading.com" class="font-mono font-bold text-bsemerald hover:underline">operations@bettersupplytrading.com</a>
                    </div>
                </div>
                <div class="pt-2">
                    <a href="https://wa.me/966502851077?text=<?= urlencode(($lang === 'ar') ? 'مرحباً أستاذ سيد علوي، أود الاستفسار بخصوص العمليات واللوجستيات مع مؤسسة أفضل توريد.' : 'Hello Sayed Alavi, I would like to inquire regarding operations and supply logistics from Better Supply.') ?>" target="_blank" rel="noopener noreferrer" class="w-full inline-flex items-center justify-center gap-2 px-4 py-2.5 rounded-lg bg-bsemerald hover:bg-bsforest text-white text-xs font-bold shadow-sm transition-all">
                        <span>WhatsApp Operations Desk</span>
                    </a>
                </div>
            </div>

        </div>

        <!-- Corporate Address Strip -->
        <div class="p-6 rounded-2xl bg-stone-50 border border-stone-200 max-w-5xl mx-auto flex flex-col md:flex-row items-center justify-between gap-4 text-xs text-slate-600">
            <div class="flex items-center gap-3">
                <svg class="w-5 h-5 text-bsemerald shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                <span><strong><?= ($lang === 'ar') ? 'المقر التجاري:' : 'Corporate Address:' ?></strong> <?= ($lang === 'ar') ? $site_config['contacts']['address_ar'] : $site_config['contacts']['address_en'] ?></span>
            </div>
            <div class="flex items-center gap-4 shrink-0">
                <a href="https://maps.google.com/?q=<?= urlencode('King Abdulaziz Road, Al Badi Dist, Dammam 32415, Saudi Arabia') ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1 font-bold text-bsgold hover:text-bsemerald transition-colors">
                    <svg class="w-3.5 h-3.5 text-bsgold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                    <span>Google Maps</span>
                </a>
                <span class="text-stone-300">•</span>
                <a href="mailto:<?= htmlspecialchars($site_config['contacts']['email']) ?>" class="font-mono font-bold text-bsemerald hover:underline">
                    <?= htmlspecialchars($site_config['contacts']['email']) ?>
                </a>
            </div>
        </div>

    </div>
</section>

<?php require_once __DIR__ . '/../footer.php'; ?>
