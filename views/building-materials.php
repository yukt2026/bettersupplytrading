<?php
/**
 * Better Supply Trading Establishment - Building Materials View (views/building-materials.php)
 * Dedicated category landing page for Building & Construction Materials and EPC Project Supplies.
 * Light, modern B2B trading platform interface.
 */

$page = 'building-materials';
require_once __DIR__ . '/../header.php';
$headingFont = ($lang === 'ar') ? 'font-arabic font-bold' : 'font-heading font-bold';
$cat_data = t('catalog')['d'];
?>

<!-- =========================================================================
     HERO BANNER (Dignified Corporate Aesthetic)
     ========================================================================= -->
<section class="relative bg-gradient-to-r from-bscharcoal via-[#1a382c] to-bscharcoal text-white py-16 sm:py-24 border-b border-stone-200 overflow-hidden">
    <div class="absolute inset-0 z-0 opacity-25">
        <picture>
            <source srcset="<?= img_url('structural_steel.webp') ?>" type="image/webp">
            <img src="<?= img_url('structural_steel.jpg') ?>" alt="Structural steel and construction materials procurement" class="w-full h-full object-cover">
        </picture>
        <div class="absolute inset-0 bg-gradient-to-t from-bscharcoal via-bscharcoal/80 to-transparent"></div>
    </div>
    
    <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center" data-aos="fade-up">
        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-bsemerald/30 border border-bsgold/40 text-bsgold text-xs font-bold uppercase tracking-wider mb-4 shadow-xs">
            <span class="w-2 h-2 rounded-full bg-bsgold animate-pulse"></span>
            <span><?= $cat_data['badge'] ?></span>
        </div>
        
        <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight text-white mb-6 <?= $headingFont ?>">
            <?= $cat_data['title'] ?>
        </h1>
        
        <p class="text-base sm:text-lg text-stone-200 max-w-3xl mx-auto font-light leading-relaxed">
            <?= $cat_data['short_desc'] ?>
        </p>
    </div>
</section>

<!-- =========================================================================
     STANDARDS & SPECIFICATION NOTICE
     ========================================================================= -->
<section class="py-6 bg-stone-50 border-b border-stone-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="p-5 rounded-2xl bg-white border border-stone-200 text-slate-700 text-xs sm:text-sm flex items-start gap-3 shadow-xs">
            <div class="w-9 h-9 rounded-xl bg-emerald-50 border border-emerald-200 text-bsemerald flex items-center justify-center shrink-0 mt-0.5">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
            </div>
            <div>
                <strong class="text-bscharcoal block mb-0.5"><?= t('labels.compliance_notice_title') ?></strong>
                <?= ($lang === 'ar')
                    ? 'المواصفات الفنية المعتمدة: يتم تنسيق توريد مواد البناء والإنشاءات ومشاريع المقاولات طبقاً للمواصفات القياسية الدولية والسعودية (ASTM, BS, DIN, SASO) وجداول الكميات المعتمدة (BOQ).'
                    : 'Standards & Sourcing Notice: Building and civil construction materials are coordinated according to required international and Saudi standards (ASTM, BS, DIN, SASO) and project Bills of Quantities (BOQ).' ?>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================================
     PRODUCT PORTFOLIO CARDS
     ========================================================================= -->
<section class="py-16 sm:py-20 bg-white text-bscharcoal border-b border-stone-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-14" data-aos="fade-up">
            <span class="text-xs font-bold uppercase tracking-widest text-bsgold mb-2 block"><?= ($lang === 'ar') ? 'مواد ومستلزمات المقاولات' : 'Construction Portfolio' ?></span>
            <h2 class="text-2xl sm:text-4xl font-extrabold text-bscharcoal tracking-tight <?= $headingFont ?>">
                <?= ($lang === 'ar') ? 'محفظة مواد البناء والمشاريع الإنشائية' : 'Building Materials & Project Supplies' ?>
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($cat_data['items'] as $item): ?>
            <div class="p-6 sm:p-8 rounded-3xl bg-stone-50 border border-stone-200 hover:border-bsemerald shadow-xs hover:shadow-lg transition-all flex flex-col justify-between group" data-aos="fade-up">
                <div>
                    <div class="w-10 h-10 rounded-xl bg-emerald-50 border border-emerald-200 text-bsemerald flex items-center justify-center mb-4">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                    </div>
                    <h3 class="text-base sm:text-lg font-bold text-bscharcoal group-hover:text-bsemerald transition-colors mb-2">
                        <?= htmlspecialchars($item) ?>
                    </h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mb-4">
                        <?= ($lang === 'ar') 
                            ? 'توريد تجاري لمشاريع المقاولات والبنية التحتية، مع الالتزام بشهادات المنشأ والاختبار ومطابقة الجداول الزمنية.'
                            : 'Commercial sourcing for contracting and EPC projects with verified mill test certificates and coordinated site delivery.' ?>
                    </p>
                </div>

                <div class="pt-4 border-t border-stone-200">
                    <a href="<?= route_url('contact') ?>?category=building_materials&product=<?= urlencode($item) ?>#rfq-form" class="w-full inline-flex items-center justify-center gap-2 px-4 py-2 text-xs font-bold text-white bg-bsemerald hover:bg-bsforest rounded-lg shadow-xs transition-colors">
                        <span><?= t('buttons.request_quote') ?></span>
                        <span class="rtl:rotate-180">&rarr;</span>
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- =========================================================================
     HOW TO REQUEST A QUOTE SECTION
     ========================================================================= -->
<section class="py-16 bg-stone-50 text-bscharcoal border-b border-stone-200">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="p-8 sm:p-10 rounded-3xl bg-white border border-stone-200 space-y-4 shadow-sm" data-aos="fade-up">
            <span class="text-xs font-mono font-bold uppercase tracking-widest text-bsgold block"><?= t('labels.rfq_guide_title') ?></span>
            <p class="text-sm text-slate-600 leading-relaxed"><?= t('labels.rfq_guide_subtitle') ?></p>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 pt-4">
                <div class="p-4 rounded-2xl bg-stone-50 border border-stone-200">
                    <div class="text-xs font-bold text-bscharcoal mb-1">01. Material Standards</div>
                    <div class="text-xs text-slate-600">ASTM, BS, DIN, dimensions, thickness, or coating specs.</div>
                </div>
                <div class="p-4 rounded-2xl bg-stone-50 border border-stone-200">
                    <div class="text-xs font-bold text-bscharcoal mb-1">02. Bill of Quantities</div>
                    <div class="text-xs text-slate-600">Total tonnage, linear meters, or unit requirements.</div>
                </div>
                <div class="p-4 rounded-2xl bg-stone-50 border border-stone-200">
                    <div class="text-xs font-bold text-bscharcoal mb-1">03. Project Milestones</div>
                    <div class="text-xs text-slate-600">Batch delivery schedules or immediate site staging.</div>
                </div>
                <div class="p-4 rounded-2xl bg-stone-50 border border-stone-200">
                    <div class="text-xs font-bold text-bscharcoal mb-1">04. Job Site Location</div>
                    <div class="text-xs text-slate-600">Project site in Saudi Arabia (Eastern, Central, Western).</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================================
     PAGE RFQ MODULE
     ========================================================================= -->
<section class="py-16 sm:py-24 bg-white text-bscharcoal">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="shadow-lg rounded-3xl overflow-hidden border border-stone-200" data-aos="fade-up">
            <?php 
            $preset_category = 'building_materials';
            $current_page_name = 'building-materials';
            require __DIR__ . '/partials/rfq_form_partial.php'; 
            ?>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/../footer.php'; ?>
