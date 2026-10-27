<?php
/**
 * Better Supply Trading Establishment - Industrial Chemicals View (views/industrial-chemicals.php)
 * Dedicated category landing page for Industrial, Specialty & Water Treatment Chemicals.
 * Light, modern B2B trading platform interface.
 */

$page = 'industrial-chemicals';
require_once __DIR__ . '/../header.php';
$headingFont = ($lang === 'ar') ? 'font-arabic font-bold' : 'font-heading font-bold';
$cat_data = t('catalog')['b'];
?>

<!-- =========================================================================
     HERO BANNER (Dignified Corporate Aesthetic)
     ========================================================================= -->
<section class="relative bg-gradient-to-r from-bscharcoal via-[#1a382c] to-bscharcoal text-white py-16 sm:py-24 border-b border-stone-200 overflow-hidden">
    <div class="absolute inset-0 z-0 opacity-25">
        <picture>
            <source srcset="<?= img_url('banner_water_treatment.webp') ?>" type="image/webp">
            <img src="<?= img_url('banner_water_treatment.jpg') ?>" alt="Industrial and water treatment chemicals storage" class="w-full h-full object-cover">
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
     TECHNICAL SPECIFICATION & PROCESS SUITABILITY NOTICE
     ========================================================================= -->
<section class="py-6 bg-stone-50 border-b border-stone-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="p-5 rounded-2xl bg-white border border-stone-200 text-slate-700 text-xs sm:text-sm flex items-start gap-3 shadow-xs">
            <div class="w-9 h-9 rounded-xl bg-emerald-50 border border-emerald-200 text-bsemerald flex items-center justify-center shrink-0 mt-0.5">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
            </div>
            <div>
                <strong class="text-bscharcoal block mb-0.5"><?= t('labels.compliance_notice_title') ?></strong>
                <?= ($lang === 'ar')
                    ? 'تنويه المطابقة الفنية: تعمل مؤسسة أفضل توريد التجارية كوسيط توريد تجاري لربط المشترين الصناعيين بأوثق مصنعي الكيماويات عالمياً ومحلياً. نوفر شهادات التحليل (COA) والبيانات الفنية (TDS) وبيانات السلامة (SDS) المعتمدة لكل إرسالية تجارية.'
                    : 'Technical & Commercial Notice: Better Supply Trading Establishment operates as a specification-based commercial sourcing intermediary. All chemical shipments are coordinated against genuine manufacturer documentation, batch Certificates of Analysis (COA), Technical Data Sheets (TDS), and Safety Data Sheets (SDS).' ?>
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
            <span class="text-xs font-bold uppercase tracking-widest text-bsgold mb-2 block"><?= ($lang === 'ar') ? 'محفظة الكيماويات الصناعية' : 'Chemical Portfolio' ?></span>
            <h2 class="text-2xl sm:text-4xl font-extrabold text-bscharcoal tracking-tight <?= $headingFont ?>">
                <?= ($lang === 'ar') ? 'الأصناف والمجموعات الكيميائية المتاحة' : 'Sourced Chemical Lines & Process Materials' ?>
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($cat_data['items'] as $item): ?>
            <div class="p-6 sm:p-8 rounded-3xl bg-stone-50 border border-stone-200 hover:border-bsemerald shadow-xs hover:shadow-lg transition-all flex flex-col justify-between group" data-aos="fade-up">
                <div>
                    <div class="w-10 h-10 rounded-xl bg-emerald-50 border border-emerald-200 text-bsemerald flex items-center justify-center mb-4">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                    </div>
                    <h3 class="text-base sm:text-lg font-bold text-bscharcoal group-hover:text-bsemerald transition-colors mb-2">
                        <?= htmlspecialchars($item) ?>
                    </h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mb-4">
                        <?= ($lang === 'ar') 
                            ? 'توريد تجاري بالجملة بناءً على مطابقة المواصفات الفنية، شهادات التحليل المعتمدة (COA)، وجداول الشحن والتسليم الموثوقة.'
                            : 'Specification-based commercial procurement supported by verified manufacturer documentation and dependable regional delivery.' ?>
                    </p>
                </div>

                <div class="pt-4 border-t border-stone-200 space-y-2">
                    <a href="<?= route_url('contact') ?>?category=industrial_chemicals&product=<?= urlencode($item) ?>#rfq-form" class="w-full inline-flex items-center justify-center gap-2 px-4 py-2 text-xs font-bold text-white bg-bsemerald hover:bg-bsforest rounded-lg shadow-xs transition-colors">
                        <span><?= t('buttons.request_quote') ?></span>
                        <span class="rtl:rotate-180">&rarr;</span>
                    </a>
                    <?php if (stripos($item, 'water treatment') !== false): ?>
                        <a href="<?= route_url('water-treatment') ?>" class="w-full inline-flex items-center justify-center gap-1.5 px-3 py-1.5 text-xs font-semibold text-bsemerald hover:bg-emerald-50 rounded-lg transition-colors">
                            <span><?= ($lang === 'ar') ? 'استعراض صفحة كيماويات معالجة المياه' : 'Explore Dedicated Water Treatment Page' ?></span>
                            <span class="rtl:rotate-180">&rarr;</span>
                        </a>
                    <?php elseif (stripos($item, 'oilfield') !== false || stripos($item, 'drilling') !== false): ?>
                        <a href="<?= route_url('oilfield-chemicals') ?>" class="w-full inline-flex items-center justify-center gap-1.5 px-3 py-1.5 text-xs font-semibold text-bsemerald hover:bg-emerald-50 rounded-lg transition-colors">
                            <span><?= ($lang === 'ar') ? 'استعراض صفحة كيماويات حقول النفط' : 'Explore Dedicated Oilfield Chemicals Page' ?></span>
                            <span class="rtl:rotate-180">&rarr;</span>
                        </a>
                    <?php endif; ?>
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
                    <div class="text-xs font-bold text-bscharcoal mb-1">01. Chemical Specification</div>
                    <div class="text-xs text-slate-600">Product grade, purity %, concentration, or CAS number.</div>
                </div>
                <div class="p-4 rounded-2xl bg-stone-50 border border-stone-200">
                    <div class="text-xs font-bold text-bscharcoal mb-1">02. Required Volume</div>
                    <div class="text-xs text-slate-600">Total metric tons (MT), drums, IBC totes, or containers.</div>
                </div>
                <div class="p-4 rounded-2xl bg-stone-50 border border-stone-200">
                    <div class="text-xs font-bold text-bscharcoal mb-1">03. Packaging Standard</div>
                    <div class="text-xs text-slate-600">Drums (200L), IBC tanks (1000L), 25kg bags, or bulk.</div>
                </div>
                <div class="p-4 rounded-2xl bg-stone-50 border border-stone-200">
                    <div class="text-xs font-bold text-bscharcoal mb-1">04. Delivery Point</div>
                    <div class="text-xs text-slate-600">Dammam, Jubail, Riyadh, or GCC industrial facility.</div>
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
            $preset_category = 'industrial_chemicals';
            $current_page_name = 'industrial-chemicals';
            require __DIR__ . '/partials/rfq_form_partial.php'; 
            ?>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/../footer.php'; ?>
