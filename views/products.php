<?php
/**
 * Better Supply Trading Establishment - Products & Services Overview View (views/products.php)
 * Implements Final Requirements Document Section 03: Products & Services (Sequence A - I)
 * Light, modern B2B trading platform interface with primary visibility to Chemical & Agricultural lines.
 */

$page = 'products';
require_once __DIR__ . '/../header.php';
$headingFont = ($lang === 'ar') ? 'font-arabic font-bold' : 'font-heading font-bold';
$catalog = t('catalog');
?>

<!-- =========================================================================
     HERO BANNER (Dignified Corporate Aesthetic)
     ========================================================================= -->
<section class="relative bg-gradient-to-r from-bscharcoal via-[#1a382c] to-bscharcoal text-white py-16 sm:py-24 border-b border-stone-200 overflow-hidden">
    <div class="absolute inset-0 z-0 opacity-25">
        <picture>
            <source srcset="<?= img_url('banner_international_trade.webp') ?>" type="image/webp">
            <img src="<?= img_url('banner_international_trade.jpg') ?>" alt="Better Supply International Trading" class="w-full h-full object-cover">
        </picture>
        <div class="absolute inset-0 bg-gradient-to-t from-bscharcoal via-bscharcoal/80 to-transparent"></div>
    </div>
    
    <div class="relative z-10 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center" data-aos="fade-up">
        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-bsemerald/30 border border-bsgold/40 text-bsgold text-xs font-bold uppercase tracking-wider mb-4 shadow-xs">
            <span class="w-2 h-2 rounded-full bg-bsgold animate-pulse"></span>
            <span><?= ($lang === 'ar') ? 'محفظة التوريد والتجارة الدولية' : 'Products & Sourcing Categories' ?></span>
        </div>
        
        <h1 class="text-3xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-white mb-6 <?= $headingFont ?>">
            <?= t('pages.products_overview.heading') ?>
        </h1>
        
        <p class="text-base sm:text-xl text-stone-200 max-w-3xl mx-auto font-light leading-relaxed mb-8">
            <?= t('pages.products_overview.subheading') ?>
        </p>

        <!-- Quick Jump Navigation to Categories -->
        <div class="pt-2 flex flex-wrap items-center justify-center gap-2 max-w-4xl mx-auto text-xs">
            <?php foreach ($catalog as $cat_id => $cat): ?>
            <a href="#cat-<?= $cat_id ?>" class="px-3 py-1.5 rounded-lg bg-white/10 hover:bg-bsemerald text-white hover:text-white border border-white/15 hover:border-bsemerald transition-all shadow-xs backdrop-blur-xs font-semibold">
                <?= explode(',', $cat['title'])[0] ?>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- =========================================================================
     TRADING MODEL & SOURCING PRINCIPLES NOTICE
     ========================================================================= -->
<section class="py-8 bg-stone-50 border-b border-stone-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="p-5 sm:p-6 rounded-2xl bg-white border border-stone-200 shadow-xs flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
            <div class="flex items-start gap-3.5">
                <div class="w-10 h-10 rounded-xl bg-emerald-50 border border-emerald-200 text-bsemerald flex items-center justify-center shrink-0 mt-0.5">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                </div>
                <div>
                    <h3 class="text-sm font-bold text-bscharcoal mb-1">
                        <?= ($lang === 'ar') ? 'التوريد التجاري المعتمد والمطابقة الفنية' : 'Verified Specification Sourcing & Commercial Procurement' ?>
                    </h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed max-w-4xl">
                        <?= t('pages.products_overview.notice') ?>
                    </p>
                </div>
            </div>
            <a href="#rfq-section" class="shrink-0 px-5 py-2.5 rounded-lg bg-bsemerald hover:bg-bsforest text-white text-xs font-bold shadow-xs transition-all flex items-center gap-2">
                <span><?= t('buttons.request_quote') ?></span>
                <span class="rtl:rotate-180">&rarr;</span>
            </a>
        </div>
    </div>
</section>

<!-- =========================================================================
     PRODUCTS & SERVICES MASTER DIRECTORY (Strict A - I Sequence)
     Primary Visibility to Chemical & Agricultural Products (A, B, C)
     Followed by Industrial & Construction Products (D, E, F, G, H, I)
     ========================================================================= -->
<section class="py-16 sm:py-24 bg-white text-bscharcoal">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">

        <?php foreach ($catalog as $cat_id => $cat): 
            $is_priority = ($cat['priority'] === 'high');
        ?>
        <div id="cat-<?= $cat_id ?>" class="scroll-mt-24 rounded-3xl border <?= $is_priority ? 'border-emerald-300 ring-1 ring-emerald-200/60 bg-stone-50/40' : 'border-stone-200 bg-white' ?> shadow-sm overflow-hidden transition-all hover:shadow-md" data-aos="fade-up">
            
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-0">
                
                <!-- Category Image Column (4 cols) -->
                <div class="lg:col-span-4 relative min-h-[260px] lg:min-h-full overflow-hidden bg-stone-100">
                    <img src="<?= img_url($cat['image']) ?>" alt="<?= htmlspecialchars($cat['title']) ?>" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-bscharcoal/80 via-bscharcoal/20 to-transparent lg:bg-gradient-to-r lg:from-transparent lg:to-bscharcoal/40"></div>
                    
                    <!-- Category Badge Overlay -->
                    <div class="absolute top-4 <?= ($lang === 'ar') ? 'right-4' : 'left-4' ?> flex items-center gap-2">
                        <span class="px-3 py-1.5 rounded-lg text-xs font-bold text-white shadow-sm backdrop-blur-xs <?= $is_priority ? 'bg-bsemerald text-white' : 'bg-bscharcoal/90 text-white' ?>">
                            <?= $cat['badge'] ?>
                        </span>
                    </div>
                </div>

                <!-- Category Content Column (8 cols) -->
                <div class="lg:col-span-8 p-6 sm:p-8 lg:p-10 flex flex-col justify-between">
                    <div>
                        <!-- Category Header -->
                        <div class="flex flex-wrap items-center justify-between gap-3 mb-3">
                            <span class="text-xs font-bold uppercase tracking-widest text-bsgold">
                                <?= $cat['badge'] ?>
                            </span>
                            <span class="text-xs px-2.5 py-1 rounded-full bg-stone-100 text-slate-600 font-semibold border border-stone-200">
                                <?= count($cat['items']) ?> <?= ($lang === 'ar') ? 'منتجات ومواد رئيسية' : 'Key Sourced Lines' ?>
                            </span>
                        </div>

                        <h2 class="text-xl sm:text-2xl lg:text-3xl font-extrabold text-bscharcoal tracking-tight mb-3 <?= $headingFont ?>">
                            <?= $cat['title'] ?>
                        </h2>

                        <p class="text-slate-600 text-sm sm:text-base leading-relaxed mb-6">
                            <?= $cat['short_desc'] ?>
                        </p>

                        <!-- Representative Product & Materials List (Section 3 Requirement) -->
                        <div class="bg-stone-50/80 rounded-2xl p-5 border border-stone-200 mb-6">
                            <h4 class="text-xs font-bold uppercase tracking-wider text-bsemerald mb-3 flex items-center gap-2">
                                <svg class="w-4 h-4 text-bsgold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path></svg>
                                <span><?= ($lang === 'ar') ? 'أبرز المواد والمنتجات الممثلة للقسم:' : 'Representative Products & Materials Portfolio:' ?></span>
                            </h4>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 text-xs sm:text-sm text-slate-700">
                                <?php foreach ($cat['items'] as $item): ?>
                                <div class="flex items-start gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-bsgold mt-2 shrink-0"></span>
                                    <span class="leading-relaxed"><?= htmlspecialchars($item) ?></span>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                    <!-- Action Bar -->
                    <div class="pt-4 border-t border-stone-200 flex flex-wrap items-center justify-between gap-4">
                        <div class="flex items-center gap-3 text-xs text-slate-500">
                            <svg class="w-4 h-4 text-emerald-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span><?= ($lang === 'ar') ? 'توريد تجاري بالجملة والمشاريع عبر ميناء الدمام والشحن الإقليمي' : 'Wholesale & project supply via Dammam Port and regional freight' ?></span>
                        </div>
                        <a href="<?= route_url('contact') ?>?category=<?= urlencode($cat['key']) ?>#rfq-form" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-lg bg-bsemerald hover:bg-bsforest text-white text-xs font-bold shadow-xs transition-all transform hover:-translate-y-0.5">
                            <span><?= t('buttons.request_quote') ?></span>
                            <span class="rtl:rotate-180">&rarr;</span>
                        </a>
                    </div>

                </div>

            </div>

        </div>
        <?php endforeach; ?>

    </div>
</section>

<!-- =========================================================================
     REQUEST FOR QUOTATION (RFQ) EMBEDDED FORM SECTION
     Section 08 Requirement
     ========================================================================= -->
<section id="rfq-section" class="py-16 sm:py-24 bg-stone-50 border-t border-stone-200 scroll-mt-20">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8" data-aos="fade-up">
        <?php require __DIR__ . '/partials/rfq_form_partial.php'; ?>
    </div>
</section>

<?php require_once __DIR__ . '/../footer.php'; ?>