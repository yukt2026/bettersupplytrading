<?php
/**
 * Better Supply Trading Establishment - Homepage View (views/home.php)
 * Redesigned Hero Banner (Left-aligned desktop, directional gradient,
 * visible port cranes/sky, clamp H1, shortened copy, slim trust strip),
 * preserving all 8 Homepage Modules strictly as specified in PDF Section 04.
 */

require_once __DIR__ . '/../header.php';
$headingFont = ($lang === 'ar') ? 'font-arabic font-bold' : 'font-heading font-bold';
$trust_strip = t('pages.home.trust_strip');
?>

<!-- =========================================================================
     MODULE 01: Redesigned Hero with Directional Gradient & Visible Port Image
     ========================================================================= -->
<section class="relative bg-slate-950 text-white min-h-[70vh] nav:min-h-[80vh] flex flex-col justify-between overflow-hidden border-b border-slate-800">
    
    <!-- Background Photographic Image (Parallax + Dusk Port Cranes & Sky) -->
    <div class="absolute inset-0 z-0 pointer-events-none parallax-container overflow-hidden">
        <picture>
            <source srcset="<?= img_url('hero_port_dusk.webp') ?>" type="image/webp">
            <img src="<?= img_url('hero_port_dusk.jpg') ?>" alt="Industrial deep-water port terminal at dusk" class="w-full h-full object-cover object-center opacity-85 filter contrast-110 parallax-img" data-speed="0.25">
        </picture>
        
        <!-- Directional Gradient Overlay:
             Desktop LTR: Dark on left (95%), translucent on right (35%-40%)
             Desktop RTL: Dark on right (95%), translucent on left (35%-40%)
             Mobile (<1100px): Vertical top-to-bottom gradient
        -->
        <div class="absolute inset-0 hidden nav:block" style="<?= ($lang === 'ar') 
            ? 'background: linear-gradient(270deg, rgba(15, 23, 42, 0.95) 0%, rgba(15, 23, 42, 0.86) 42%, rgba(15, 23, 42, 0.42) 78%, rgba(15, 23, 42, 0.35) 100%);' 
            : 'background: linear-gradient(90deg, rgba(15, 23, 42, 0.95) 0%, rgba(15, 23, 42, 0.86) 42%, rgba(15, 23, 42, 0.42) 78%, rgba(15, 23, 42, 0.35) 100%);' ?>">
        </div>
        <div class="absolute inset-0 nav:hidden" style="background: linear-gradient(180deg, rgba(15, 23, 42, 0.95) 0%, rgba(15, 23, 42, 0.75) 55%, rgba(15, 23, 42, 0.40) 100%);">
        </div>
    </div>

    <!-- Main Hero Content: Left-aligned on Desktop (RTL: Right-aligned), Centered on Mobile -->
    <div class="relative z-10 max-w-[1400px] w-full mx-auto px-4 sm:px-6 lg:px-8 pt-16 pb-12 nav:pt-24 nav:pb-16 flex-1 flex flex-col justify-center">
        
        <div class="hero-fade-in max-w-[640px] text-center nav:text-left rtl:nav:text-right flex flex-col items-center nav:items-start rtl:nav:items-end" data-aos="fade-up" data-aos-duration="800">
            
            <!-- Eyebrow Pill -->
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold bg-bscharcoal/90 border border-bsgold/50 text-bsgold uppercase tracking-wider mb-5 shadow-sm max-w-full text-wrap text-center" data-aos="fade-down" data-aos-delay="100">
                <span class="w-2 h-2 rounded-full bg-bsgold animate-ping"></span>
                <span><?= t('pages.home.hero_badge') ?></span>
            </div>

            <!-- Single Industrial Positioning Statement with Fluid Clamp H1 -->
            <h1 class="text-white font-extrabold tracking-tight mb-4 text-balance break-words max-w-full" style="font-size: clamp(2.1rem, 4.2vw, 3.75rem); line-height: 1.12;" data-aos="fade-up" data-aos-delay="150">
                <?= t('pages.home.hero_title') ?>
            </h1>

            <!-- ONE Short Punchy Paragraph (max 2 lines on desktop, ~25-30 words) -->
            <p class="text-slate-200 text-sm sm:text-base nav:text-lg mb-8 font-normal leading-snug max-w-xl text-balance" data-aos="fade-up" data-aos-delay="200">
                <?= t('pages.home.hero_lead') ?>
            </p>

            <!-- Two High-Contrast CTAs -->
            <div class="flex flex-col sm:flex-row items-center gap-3.5 w-full sm:w-auto" data-aos="fade-up" data-aos-delay="250">
                <a href="<?= route_url('contact') ?>#rfq-form" class="w-full sm:w-auto h-[46px] px-7 inline-flex items-center justify-center bg-bsemerald hover:bg-bsforest text-white font-bold text-sm rounded-lg shadow-lg hover:shadow-emerald-950/50 transition-all transform hover:-translate-y-0.5 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-bsemerald whitespace-nowrap">
                    <?= t('buttons.request_quote') ?>
                </a>
                <a href="<?= route_url('products') ?>" class="w-full sm:w-auto h-[46px] px-7 inline-flex items-center justify-center bg-bscharcoal/50 hover:bg-white/10 border border-bsgold/80 text-white font-semibold text-sm rounded-lg transition-all focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-bsgold whitespace-nowrap">
                    <?= t('buttons.explore_products') ?>
                </a>
            </div>

        </div>

    </div>

    <!-- Slim Trust Strip Docked along Bottom of Hero (4 Factual Items) -->
    <div class="relative z-10 border-t border-stone-800/80 bg-bscharcoal/85 backdrop-blur-md py-3.5" data-aos="fade-up" data-aos-delay="300">
        <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-xs font-medium text-slate-300">
                <div class="flex items-center justify-center nav:justify-start gap-2">
                    <svg class="w-4 h-4 text-bsgold shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                    <span><?= $trust_strip['dammam'] ?></span>
                </div>
                <div class="flex items-center justify-center nav:justify-start gap-2">
                    <svg class="w-4 h-4 text-bsgold shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                    <span><?= $trust_strip['sourcing'] ?></span>
                </div>
                <div class="flex items-center justify-center nav:justify-start gap-2">
                    <svg class="w-4 h-4 text-bsgold shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <span><?= $trust_strip['gcc'] ?></span>
                </div>
                <div class="flex items-center justify-center nav:justify-start gap-2">
                    <svg class="w-4 h-4 text-bsgold shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    <span><?= $trust_strip['rfq'] ?></span>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- =========================================================================
     MODULE 02: Three Featured Product Cards (Salts, Oilfield, Water Treatment)
     ========================================================================= -->
<section class="py-20 bg-slate-900 text-white border-b border-slate-800">
    <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
            <span class="text-xs font-bold uppercase tracking-widest text-bsgold mb-2 block">
                <?= ($lang === 'ar') ? 'التوريد المتخصص' : 'Core Divisions' ?>
            </span>
            <h2 class="text-2xl sm:text-4xl font-extrabold text-white tracking-tight mb-4">
                <?= t('pages.home.core_divisions_title') ?>
            </h2>
            <p class="text-slate-400 text-sm sm:text-base">
                <?= t('pages.home.core_divisions_subtitle') ?>
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <!-- Card 1: Industrial Salts -->
            <?php if (is_category_active('industrial_salts')): ?>
            <div class="bg-slate-950 border border-slate-800 rounded-2xl overflow-hidden hover:border-emerald-500/50 hover-lift transition-all group flex flex-col justify-between" data-aos="fade-up" data-aos-delay="100">
                <div>
                    <div class="h-48 overflow-hidden relative">
                        <img src="<?= img_url('banner_industrial_salts.jpg') ?>" alt="Industrial salt crystals" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 filter brightness-90">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-transparent to-transparent"></div>
                        <span class="absolute top-3 <?= ($lang === 'ar') ? 'left-3' : 'right-3' ?> px-2.5 py-1 rounded bg-slate-900/90 text-[11px] font-mono text-emerald-300 border border-slate-700">
                            NaCl • KCl • CaCl₂
                        </span>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white mb-2 group-hover:text-emerald-400 transition-colors">
                            <?= t('nav.industrial_salts') ?>
                        </h3>
                        <p class="text-slate-400 text-xs sm:text-sm leading-relaxed mb-4">
                            <?= ($lang === 'ar') 
                                ? 'توريد كلوريد الصوديوم بالجملة، ملح الفاكيوم، كلوريد البوتاسيوم وكلوريد الكالسيوم لمصانع البتروكيماويات ومنقيات المياه الصناعية.'
                                : 'Bulk sodium chloride, vacuum salt, water-softener salt, potassium chloride, and calcium chloride sourced to verified commercial specifications.' ?>
                        </p>
                    </div>
                </div>
                <div class="p-6 pt-0">
                    <a href="<?= route_url('industrial-salts') ?>" class="inline-flex items-center gap-1.5 text-xs font-bold text-emerald-400 hover:text-emerald-300">
                        <span><?= t('buttons.view_details') ?></span>
                        <span class="rtl:rotate-180">&rarr;</span>
                    </a>
                </div>
            </div>
            <?php endif; ?>

            <!-- Card 2: Oilfield Chemicals & Drilling Materials -->
            <?php if (is_category_active('oilfield_chemicals')): ?>
            <div class="bg-slate-950 border border-slate-800 rounded-2xl overflow-hidden hover:border-emerald-500/50 hover-lift transition-all group flex flex-col justify-between" data-aos="fade-up" data-aos-delay="200">
                <div>
                    <div class="h-48 overflow-hidden relative">
                        <img src="<?= img_url('banner_oilfield.jpg') ?>" alt="Oilfield drilling rig silhouette" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 filter brightness-90">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-transparent to-transparent"></div>
                        <span class="absolute top-3 <?= ($lang === 'ar') ? 'left-3' : 'right-3' ?> px-2.5 py-1 rounded bg-slate-900/90 text-[11px] font-mono text-emerald-300 border border-slate-700">
                            CaBr₂ • NaBr • BaSO₄
                        </span>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white mb-2 group-hover:text-emerald-400 transition-colors">
                            <?= t('nav.oilfield_chemicals') ?>
                        </h3>
                        <p class="text-slate-400 text-xs sm:text-sm leading-relaxed mb-4">
                            <?= ($lang === 'ar') 
                                ? 'أملاح سوائل الحفر، بروميد الكالسيوم والصوديوم للمحاليل الرائقة، مسحوق البارايت والبنتونايت لشركات خدمات الطاقة.'
                                : 'Drilling-fluid salts, completion-brine materials (CaBr₂, NaBr, Formates), barite, bentonite, and specialty additives for oilfield service inquiries.' ?>
                        </p>
                    </div>
                </div>
                <div class="p-6 pt-0">
                    <a href="<?= route_url('oilfield-chemicals') ?>" class="inline-flex items-center gap-1.5 text-xs font-bold text-emerald-400 hover:text-emerald-300">
                        <span><?= t('buttons.view_details') ?></span>
                        <span class="rtl:rotate-180">&rarr;</span>
                    </a>
                </div>
            </div>
            <?php endif; ?>

            <!-- Card 3: Water Treatment & Desalination -->
            <?php if (is_category_active('water_treatment')): ?>
            <div class="bg-slate-950 border border-slate-800 rounded-2xl overflow-hidden hover:border-emerald-500/50 hover-lift transition-all group flex flex-col justify-between" data-aos="fade-up" data-aos-delay="300">
                <div>
                    <div class="h-48 overflow-hidden relative">
                        <img src="<?= img_url('banner_water_treatment.jpg') ?>" alt="Water treatment and desalination RO plant" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 filter brightness-90">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-transparent to-transparent"></div>
                        <span class="absolute top-3 <?= ($lang === 'ar') ? 'left-3' : 'right-3' ?> px-2.5 py-1 rounded bg-slate-900/90 text-[11px] font-mono text-emerald-300 border border-slate-700">
                            RO Antiscalants • PAC
                        </span>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white mb-2 group-hover:text-emerald-400 transition-colors">
                            <?= t('nav.water_treatment') ?>
                        </h3>
                        <p class="text-slate-400 text-xs sm:text-sm leading-relaxed mb-4">
                            <?= ($lang === 'ar') 
                                ? 'مانعات التكلس لأنظمة التناضح العكسي RO، ميتابيسلفيت الصوديوم، مخثرات بولي ألمنيوم كلورايد، ووسائط الترشيح.'
                                : 'Reverse-osmosis antiscalants, sodium metabisulfite, polyaluminium chloride (PAC), alum, caustic soda, and filtration media.' ?>
                        </p>
                    </div>
                </div>
                <div class="p-6 pt-0">
                    <a href="<?= route_url('water-treatment') ?>" class="inline-flex items-center gap-1.5 text-xs font-bold text-emerald-400 hover:text-emerald-300">
                        <span><?= t('buttons.view_details') ?></span>
                        <span class="rtl:rotate-180">&rarr;</span>
                    </a>
                </div>
            </div>
            <?php endif; ?>

        </div>
    </div>
</section>

<!-- =========================================================================
     MODULE 03: Industries Served & Project Sourcing Capability
     ========================================================================= -->
<section class="py-20 bg-slate-950 text-white border-b border-slate-800">
    <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mb-14" data-aos="fade-up">
            <span class="text-xs font-bold uppercase tracking-widest text-bsgold mb-2 block">
                <?= ($lang === 'ar') ? 'تغطية القطاعات' : 'Target Sectors' ?>
            </span>
            <h2 class="text-2xl sm:text-4xl font-extrabold text-white tracking-tight mb-4">
                <?= t('pages.home.sectors_title') ?>
            </h2>
            <p class="text-slate-400 text-sm sm:text-base">
                <?= t('pages.home.sectors_subtitle') ?>
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php 
            $sec_idx = 0;
            foreach (t('pages.industries.sectors') as $sector): 
                $sec_delay = ($sec_idx % 3) * 100 + 100;
                $sec_idx++;
            ?>
            <div class="p-6 bg-slate-900 border border-slate-800 rounded-xl hover:border-emerald-500/40 hover-lift transition-all" data-aos="fade-up" data-aos-delay="<?= $sec_delay ?>">
                <div class="w-10 h-10 rounded-lg bg-emerald-950/70 border border-emerald-500/30 flex items-center justify-center text-emerald-400 mb-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                </div>
                <h3 class="text-base font-bold text-white mb-2"><?= $sector['name'] ?></h3>
                <p class="text-xs sm:text-sm text-slate-400 leading-relaxed"><?= $sector['desc'] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- =========================================================================
     MODULE 04: Company Background, Dammam Location & Trading Process
     ========================================================================= -->
<section class="py-20 bg-slate-900 text-white border-b border-slate-800">
    <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <div class="lg:col-span-6 space-y-6" data-aos="fade-up">
                <span class="text-xs font-bold uppercase tracking-widest text-bsgold block">
                    <?= ($lang === 'ar') ? 'المنهجية والموقع الجغرافي' : 'Commercial Methodology' ?>
                </span>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight">
                    <?= t('pages.home.approach_title') ?>
                </h2>
                <p class="text-slate-300 text-sm sm:text-base leading-relaxed">
                    <?= t('pages.home.approach_desc') ?>
                </p>
                <p class="text-slate-400 text-xs sm:text-sm leading-relaxed border-s-2 border-emerald-500/40 ps-3">
                    <?= t('pages.home.hero_scope') ?>
                </p>
                <div class="p-4 rounded-xl bg-slate-950 border border-slate-800 space-y-2">
                    <div class="flex items-center gap-2 text-emerald-400 font-semibold text-xs sm:text-sm">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                        <span><?= ($lang === 'ar') ? 'مركز التجارة والعمليات: الدمام، المملكة العربية السعودية' : 'Strategic Commercial Hub: Dammam, Saudi Arabia' ?></span>
                    </div>
                    <p class="text-xs text-slate-400">
                        <?= ($lang === 'ar') 
                            ? 'نستفيد من موقع الدمام الحيوي كبوابة لوجستية للمنطقة الشرقية ودول الخليج، لربط طلبات المشترين بشحنات الموانئ العالمية.'
                            : 'Leveraging Dammam’s premier logistics gateway to serve the Eastern Province, major industrial clusters, and GCC cross-border trade.' ?>
                    </p>
                </div>
            </div>

            <div class="lg:col-span-6 space-y-4" data-aos="fade-up" data-aos-delay="200">
                <h3 class="text-xs font-bold uppercase tracking-widest text-slate-400 mb-2">
                    <?= t('pages.about.workflow_title') ?>
                </h3>
                <div class="space-y-3">
                    <?php 
                    $st_idx = 0;
                    foreach (t('pages.about.steps') as $step): 
                        $st_delay = $st_idx * 100 + 100;
                        $st_idx++;
                    ?>
                    <div class="flex items-start gap-4 p-4 rounded-xl bg-slate-950 border border-slate-800 hover:border-emerald-500/30 transition-colors" data-aos="fade-up" data-aos-delay="<?= $st_delay ?>">
                        <span class="text-xs font-bold font-mono px-2 py-1 rounded bg-emerald-950 text-emerald-400 border border-emerald-500/30">
                            <?= $step['num'] ?>
                        </span>
                        <div>
                            <h4 class="text-sm font-bold text-white mb-0.5"><?= $step['title'] ?></h4>
                            <p class="text-xs text-slate-400"><?= $step['desc'] ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- =========================================================================
     MODULE 05: Saudi Vision 2030 Section with Factual, Non-Affiliation Wording
     ========================================================================= -->
<section class="py-16 bg-slate-950 text-white border-b border-slate-800" data-aos="fade-up">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-emerald-950/90 text-emerald-300 border border-emerald-500/30 uppercase tracking-widest mb-4">
            <?= t('pages.home.vision2030_badge') ?>
        </span>
        <h2 class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight mb-4">
            <?= t('pages.home.vision2030_title') ?>
        </h2>
        <p class="text-slate-300 text-sm sm:text-base leading-relaxed max-w-3xl mx-auto mb-6">
            <?= t('pages.home.vision2030_text') ?>
        </p>
        <div class="text-xs text-slate-500 max-w-xl mx-auto border-t border-slate-800/80 pt-4">
            <?= ($lang === 'ar') 
                ? 'إشعار الامتثال: تشير الإشارة إلى رؤية 2030 إلى التوافق الاقتصادي والقطاعي في تنمية الصناعات، ولا تدعي المؤسسة تبعية أو تفويضاً رسمياً من البرامج الحكومية.'
                : 'Compliance Note: References to Vision 2030 denote macroeconomic alignment with industrial diversification sectors and do not imply official governmental sponsorship or public program affiliation.' ?>
        </div>
    </div>
</section>

<!-- =========================================================================
     MODULE 06: Secondary Divisions (Agriculture, Coco Peat, Packaging, Vehicles)
     ========================================================================= -->
<section class="py-20 bg-slate-900 text-white border-b border-slate-800">
    <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mb-14" data-aos="fade-up">
            <span class="text-xs font-bold uppercase tracking-widest text-bsgold mb-2 block">
                <?= ($lang === 'ar') ? 'قطاعات التوريد الموسعة' : 'Commercial Portfolio' ?>
            </span>
            <h2 class="text-2xl sm:text-4xl font-extrabold text-white tracking-tight mb-3">
                <?= t('pages.home.wider_portfolio_title') ?>
            </h2>
            <p class="text-slate-400 text-sm sm:text-base">
                <?= t('pages.home.wider_portfolio_subtitle') ?>
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <!-- Category: Fertilizers -->
            <?php if (is_category_active('fertilizers')): ?>
            <div class="p-6 bg-slate-950 border border-slate-800 rounded-xl hover:border-emerald-500/50 hover-lift transition-all flex flex-col justify-between" data-aos="fade-up" data-aos-delay="100">
                <div>
                    <div class="h-32 mb-4 overflow-hidden rounded-lg">
                        <img src="<?= img_url('banner_fertilizers.jpg') ?>" alt="Agricultural fertilizers" class="w-full h-full object-cover">
                    </div>
                    <span class="text-[10px] font-mono uppercase tracking-wider text-emerald-400 mb-1 block">Urea • NPK • DAP</span>
                    <h3 class="text-base font-bold text-white mb-2"><?= t('nav.fertilizers') ?></h3>
                    <p class="text-xs text-slate-400 leading-relaxed mb-4">
                        <?= ($lang === 'ar') ? 'اليوريا، مركبات NPK، وسلفات البوتاسيوم لتجار الجملة والمشاريع الزراعية.' : 'Urea 46%, compound NPK fertilizers, and soluble soil nutrition inputs.' ?>
                    </p>
                </div>
                <a href="<?= route_url('fertilizers') ?>" class="text-xs font-bold text-emerald-400 hover:text-emerald-300">
                    <?= t('buttons.learn_more') ?> &rarr;
                </a>
            </div>
            <?php endif; ?>

            <!-- Category: Coco Peat -->
            <?php if (is_category_active('coco_peat')): ?>
            <div class="p-6 bg-slate-950 border border-slate-800 rounded-xl hover:border-emerald-500/50 hover-lift transition-all flex flex-col justify-between" data-aos="fade-up" data-aos-delay="200">
                <div>
                    <div class="h-32 mb-4 overflow-hidden rounded-lg">
                        <img src="<?= img_url('banner_coco_peat.jpg') ?>" alt="Coco peat blocks" class="w-full h-full object-cover">
                    </div>
                    <span class="text-[10px] font-mono uppercase tracking-wider text-emerald-400 mb-1 block">India-Origin Coir</span>
                    <h3 class="text-base font-bold text-white mb-2"><?= t('nav.coco_peat') ?></h3>
                    <p class="text-xs text-slate-400 leading-relaxed mb-4">
                        <?= ($lang === 'ar') ? 'قوالب 5 كجم وألواح الزراعة المائية Grow Bags المستوردة من الهند.' : 'Compressed 5 kg blocks, briquettes, and grow bags for commercial nurseries.' ?>
                    </p>
                </div>
                <a href="<?= route_url('coco-peat') ?>" class="text-xs font-bold text-emerald-400 hover:text-emerald-300">
                    <?= t('buttons.learn_more') ?> &rarr;
                </a>
            </div>
            <?php endif; ?>

            <!-- Category: Packaging & Disposables -->
            <?php if (is_category_active('packaging_disposables')): ?>
            <div class="p-6 bg-slate-950 border border-slate-800 rounded-xl hover:border-emerald-500/50 hover-lift transition-all flex flex-col justify-between" data-aos="fade-up" data-aos-delay="300">
                <div>
                    <div class="h-32 mb-4 overflow-hidden rounded-lg">
                        <img src="<?= img_url('banner_packaging.jpg') ?>" alt="Corrugated carton packaging" class="w-full h-full object-cover">
                    </div>
                    <span class="text-[10px] font-mono uppercase tracking-wider text-emerald-400 mb-1 block">Corrugated & Paper</span>
                    <h3 class="text-base font-bold text-white mb-2"><?= t('nav.packaging_disposables') ?></h3>
                    <p class="text-xs text-slate-400 leading-relaxed mb-4">
                        <?= ($lang === 'ar') ? 'كراتين الشحن المضلعة، ورق الكرافت والمستهلكات الورقية الغذائية.' : 'Single & double-wall corrugated cartons, kraft bags, and commercial paper disposables.' ?>
                    </p>
                </div>
                <a href="<?= route_url('packaging-disposables') ?>" class="text-xs font-bold text-emerald-400 hover:text-emerald-300">
                    <?= t('buttons.learn_more') ?> &rarr;
                </a>
            </div>
            <?php endif; ?>

            <!-- Category: Other Trading (Vehicles & Office Machinery) -->
            <?php if (is_category_active('other_trading')): ?>
            <div class="p-6 bg-slate-950 border border-slate-800 rounded-xl hover:border-emerald-500/50 hover-lift transition-all flex flex-col justify-between" data-aos="fade-up" data-aos-delay="400">
                <div>
                    <div class="h-32 mb-4 overflow-hidden rounded-lg">
                        <img src="<?= img_url('banner_vehicles.jpg') ?>" alt="Specialized passenger vehicles" class="w-full h-full object-cover">
                    </div>
                    <span class="text-[10px] font-mono uppercase tracking-wider text-emerald-400 mb-1 block">CR 451011 • 465910</span>
                    <h3 class="text-base font-bold text-white mb-2"><?= t('nav.other_trading') ?></h3>
                    <p class="text-xs text-slate-400 leading-relaxed mb-4">
                        <?= ($lang === 'ar') ? 'مركبات الركاب المتخصصة (إسعاف، حافلات) والآلات المكتبية بالجملة.' : 'Wholesale specialized passenger vehicles (ambulances, minibuses) and commercial office machinery.' ?>
                    </p>
                </div>
                <a href="<?= route_url('other-trading') ?>" class="text-xs font-bold text-emerald-400 hover:text-emerald-300">
                    <?= t('buttons.learn_more') ?> &rarr;
                </a>
            </div>
            <?php endif; ?>

        </div>
    </div>
</section>

<!-- =========================================================================
     MODULE 07: International Supplier/Trading Geography (Operational vs Planned)
     ========================================================================= -->
<section class="py-20 bg-slate-950 text-white border-b border-slate-800">
    <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            <!-- Col 1: Principal Focus (Saudi & GCC) -->
            <div class="p-8 rounded-2xl bg-slate-900 border border-slate-800 hover:border-emerald-500/40 hover-lift transition-all space-y-4" data-aos="fade-up" data-aos-delay="100">
                <span class="px-2.5 py-1 rounded bg-emerald-950 text-emerald-400 text-xs font-bold uppercase tracking-wider border border-emerald-500/30">
                    <?= ($lang === 'ar') ? 'نطاق تشغيلي نشط' : 'Active Operational Scope' ?>
                </span>
                <h3 class="text-xl font-bold text-white"><?= t('pages.international_trading.gcc_title') ?></h3>
                <p class="text-xs sm:text-sm text-slate-300 leading-relaxed">
                    <?= t('pages.international_trading.gcc_text') ?>
                </p>
            </div>

            <!-- Col 2: Sourcing Focus (India & South Asia) -->
            <div class="p-8 rounded-2xl bg-slate-900 border border-slate-800 hover:border-emerald-500/40 hover-lift transition-all space-y-4" data-aos="fade-up" data-aos-delay="200">
                <span class="px-2.5 py-1 rounded bg-emerald-950 text-emerald-400 text-xs font-bold uppercase tracking-wider border border-emerald-500/30">
                    <?= ($lang === 'ar') ? 'قنوات التوريد المباشرة' : 'Direct Sourcing Corridors' ?>
                </span>
                <h3 class="text-xl font-bold text-white"><?= t('pages.international_trading.south_asia_title') ?></h3>
                <p class="text-xs sm:text-sm text-slate-300 leading-relaxed">
                    <?= t('pages.international_trading.south_asia_text') ?>
                </p>
            </div>

            <!-- Col 3: Exploratory Scope (Europe & USA) -->
            <div class="p-8 rounded-2xl bg-slate-900 border border-slate-800 hover:border-amber-500/40 hover-lift transition-all space-y-4" data-aos="fade-up" data-aos-delay="300">
                <span class="px-2.5 py-1 rounded bg-slate-800 text-amber-300 text-xs font-bold uppercase tracking-wider border border-slate-700">
                    <?= ($lang === 'ar') ? 'نطاق استكشافي وتطويري' : 'Planned / Exploratory Scope' ?>
                </span>
                <h3 class="text-xl font-bold text-white"><?= t('pages.international_trading.western_markets_title') ?></h3>
                <p class="text-xs sm:text-sm text-slate-300 leading-relaxed">
                    <?= t('pages.international_trading.western_markets_text') ?>
                </p>
            </div>

        </div>
    </div>
</section>

<!-- =========================================================================
     MODULE 08: Contact / RFQ Section with Essential Technical Inputs
     ========================================================================= -->
<section class="py-20 bg-slate-950 text-white" data-aos="fade-up">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <?php 
        $current_page_name = 'home';
        require __DIR__ . '/partials/rfq_form_partial.php'; 
        ?>
    </div>
</section>

<?php require_once __DIR__ . '/../footer.php'; ?>
