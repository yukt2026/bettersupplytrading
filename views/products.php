<?php
/**
 * Better Supply Corporation - Products & Services Overview View (views/products.php)
 * Implements PDF Page 03 / Section 02.
 */

$page = 'products';
require_once __DIR__ . '/../header.php';
$headingFont = ($lang === 'ar') ? 'font-arabic font-bold' : 'font-heading font-bold';
?>

<!-- Header Banner -->
<section class="relative bg-slate-950 text-white py-20 border-b border-slate-800 overflow-hidden">
    <div class="absolute inset-0 z-0 opacity-20">
        <picture>
            <source srcset="<?= img_url('banner_international_trade.webp') ?>" type="image/webp">
            <img src="<?= img_url('banner_international_trade.jpg') ?>" alt="Cargo containers" class="w-full h-full object-cover">
        </picture>
        <div class="absolute inset-0 bg-slate-950/80"></div>
    </div>
    <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="text-xs font-bold uppercase tracking-widest text-emerald-400 mb-2 block"><?= t('nav.products') ?></span>
        <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight text-white mb-4">
            <?= t('pages.products_overview.heading') ?>
        </h1>
        <p class="text-base sm:text-lg text-slate-300 max-w-3xl mx-auto font-light leading-relaxed">
            <?= t('pages.products_overview.subheading') ?>
        </p>
    </div>
</section>

<!-- Category Directory Grid -->
<section class="py-20 bg-slate-900 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Notice box -->
        <div class="mb-12 p-4 rounded-xl bg-slate-950 border border-slate-800 text-xs sm:text-sm text-slate-400 flex items-center gap-3">
            <svg class="w-5 h-5 text-emerald-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            <span><?= t('pages.products_overview.notice') ?></span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- 1. Industrial Salts -->
            <?php if (is_category_active('industrial_salts')): ?>
            <div class="bg-slate-950 border border-slate-800 rounded-2xl overflow-hidden hover:border-slate-700 transition-all flex flex-col justify-between">
                <div>
                    <div class="h-48 overflow-hidden">
                        <img src="<?= img_url('banner_industrial_salts.jpg') ?>" alt="Industrial salts" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <span class="text-[10px] font-mono uppercase tracking-wider text-emerald-400 mb-1 block">Inorganic Chemical Salts</span>
                        <h3 class="text-xl font-bold text-white mb-2"><?= t('nav.industrial_salts') ?></h3>
                        <p class="text-xs text-slate-400 leading-relaxed mb-4">
                            <?= ($lang === 'ar') ? 'كلوريد الصوديوم الصناعي، ملح الفاكيوم، كلوريد البوتاسيوم، كلوريد الكالسيوم وكبريتات الصوديوم.' : 'Industrial-grade NaCl, vacuum salt, potassium chloride (KCl), calcium chloride (CaCl₂), and sodium sulphate.' ?>
                        </p>
                    </div>
                </div>
                <div class="p-6 pt-0">
                    <a href="<?= route_url('industrial-salts') ?>" class="inline-flex items-center gap-2 text-xs font-bold text-emerald-400 hover:text-emerald-300">
                        <span><?= t('buttons.view_details') ?></span>
                        <span class="rtl:rotate-180">&rarr;</span>
                    </a>
                </div>
            </div>
            <?php endif; ?>

            <!-- 2. Oilfield Chemicals -->
            <?php if (is_category_active('oilfield_chemicals')): ?>
            <div class="bg-slate-950 border border-slate-800 rounded-2xl overflow-hidden hover:border-slate-700 transition-all flex flex-col justify-between">
                <div>
                    <div class="h-48 overflow-hidden">
                        <img src="<?= img_url('banner_oilfield.jpg') ?>" alt="Oilfield drilling chemicals" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <span class="text-[10px] font-mono uppercase tracking-wider text-emerald-400 mb-1 block">Drilling & Completion Brines</span>
                        <h3 class="text-xl font-bold text-white mb-2"><?= t('nav.oilfield_chemicals') ?></h3>
                        <p class="text-xs text-slate-400 leading-relaxed mb-4">
                            <?= ($lang === 'ar') ? 'أملاح سوائل الحفر، بروميد الكالسيوم والصوديوم، الفورمات، البارايت والبنتونايت.' : 'Drilling-fluid salts, clear-brine fluids (CaBr₂, NaBr, Formates), barite, bentonite, and loss circulation materials.' ?>
                        </p>
                    </div>
                </div>
                <div class="p-6 pt-0">
                    <a href="<?= route_url('oilfield-chemicals') ?>" class="inline-flex items-center gap-2 text-xs font-bold text-emerald-400 hover:text-emerald-300">
                        <span><?= t('buttons.view_details') ?></span>
                        <span class="rtl:rotate-180">&rarr;</span>
                    </a>
                </div>
            </div>
            <?php endif; ?>

            <!-- 3. Water Treatment -->
            <?php if (is_category_active('water_treatment')): ?>
            <div class="bg-slate-950 border border-slate-800 rounded-2xl overflow-hidden hover:border-slate-700 transition-all flex flex-col justify-between">
                <div>
                    <div class="h-48 overflow-hidden">
                        <img src="<?= img_url('banner_water_treatment.jpg') ?>" alt="Water treatment chemicals" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <span class="text-[10px] font-mono uppercase tracking-wider text-emerald-400 mb-1 block">Desalination & Utilities</span>
                        <h3 class="text-xl font-bold text-white mb-2"><?= t('nav.water_treatment') ?></h3>
                        <p class="text-xs text-slate-400 leading-relaxed mb-4">
                            <?= ($lang === 'ar') ? 'مانعات تكلس أغشية الـ RO، ميتابيسلفيت الصوديوم، مخثرات PAC، الصودا الكاوية، وملح تجديد الفلاتر.' : 'RO antiscalants, SMBS, polyaluminium chloride (PAC), alum, caustic soda, and high-purity softener salt.' ?>
                        </p>
                    </div>
                </div>
                <div class="p-6 pt-0">
                    <a href="<?= route_url('water-treatment') ?>" class="inline-flex items-center gap-2 text-xs font-bold text-emerald-400 hover:text-emerald-300">
                        <span><?= t('buttons.view_details') ?></span>
                        <span class="rtl:rotate-180">&rarr;</span>
                    </a>
                </div>
            </div>
            <?php endif; ?>

            <!-- 4. Fertilizers -->
            <?php if (is_category_active('fertilizers')): ?>
            <div class="bg-slate-950 border border-slate-800 rounded-2xl overflow-hidden hover:border-slate-700 transition-all flex flex-col justify-between">
                <div>
                    <div class="h-48 overflow-hidden">
                        <img src="<?= img_url('banner_fertilizers.jpg') ?>" alt="Agricultural fertilizers" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <span class="text-[10px] font-mono uppercase tracking-wider text-emerald-400 mb-1 block">Commercial Crop Nutrition</span>
                        <h3 class="text-xl font-bold text-white mb-2"><?= t('nav.fertilizers') ?></h3>
                        <p class="text-xs text-slate-400 leading-relaxed mb-4">
                            <?= ($lang === 'ar') ? 'اليوريا، مركبات NPK الحبيبية والذائبة، الداب (DAP)، سلفات البوتاسيوم ومحسنات التربة.' : 'Urea fertilizer, compound NPKs, DAP/MAP, potassium sulphate (SOP), and soluble humic conditioners.' ?>
                        </p>
                    </div>
                </div>
                <div class="p-6 pt-0">
                    <a href="<?= route_url('fertilizers') ?>" class="inline-flex items-center gap-2 text-xs font-bold text-emerald-400 hover:text-emerald-300">
                        <span><?= t('buttons.view_details') ?></span>
                        <span class="rtl:rotate-180">&rarr;</span>
                    </a>
                </div>
            </div>
            <?php endif; ?>

            <!-- 5. Coco Peat -->
            <?php if (is_category_active('coco_peat')): ?>
            <div class="bg-slate-950 border border-slate-800 rounded-2xl overflow-hidden hover:border-slate-700 transition-all flex flex-col justify-between">
                <div>
                    <div class="h-48 overflow-hidden">
                        <img src="<?= img_url('banner_coco_peat.jpg') ?>" alt="Coco peat media" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <span class="text-[10px] font-mono uppercase tracking-wider text-emerald-400 mb-1 block">India-Origin Natural Media</span>
                        <h3 class="text-xl font-bold text-white mb-2"><?= t('nav.coco_peat') ?></h3>
                        <p class="text-xs text-slate-400 leading-relaxed mb-4">
                            <?= ($lang === 'ar') ? 'قوالب الكوكوبيت المضغوطة 5 كجم، أقراص التشتيل وألواح الزراعة المائية Grow Bags.' : 'Compressed 5 kg blocks, briquettes, coir discs, and UV-stabilized grow bags.' ?>
                        </p>
                    </div>
                </div>
                <div class="p-6 pt-0">
                    <a href="<?= route_url('coco-peat') ?>" class="inline-flex items-center gap-2 text-xs font-bold text-emerald-400 hover:text-emerald-300">
                        <span><?= t('buttons.view_details') ?></span>
                        <span class="rtl:rotate-180">&rarr;</span>
                    </a>
                </div>
            </div>
            <?php endif; ?>

            <!-- 6. Packaging & Disposables -->
            <?php if (is_category_active('packaging_disposables')): ?>
            <div class="bg-slate-950 border border-slate-800 rounded-2xl overflow-hidden hover:border-slate-700 transition-all flex flex-col justify-between">
                <div>
                    <div class="h-48 overflow-hidden">
                        <img src="<?= img_url('banner_packaging.jpg') ?>" alt="Corrugated packaging" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <span class="text-[10px] font-mono uppercase tracking-wider text-emerald-400 mb-1 block">Packaging & Consumables</span>
                        <h3 class="text-xl font-bold text-white mb-2"><?= t('nav.packaging_disposables') ?></h3>
                        <p class="text-xs text-slate-400 leading-relaxed mb-4">
                            <?= ($lang === 'ar') ? 'صناديق الكرتون المضلع، أكياس الكرافت، المستهلكات الورقية الغذائية ومستلزمات الحماية.' : 'Corrugated cartons, shipping boxes, kraft valve sacks, paper foodservice packaging, and hygiene disposables.' ?>
                        </p>
                    </div>
                </div>
                <div class="p-6 pt-0">
                    <a href="<?= route_url('packaging-disposables') ?>" class="inline-flex items-center gap-2 text-xs font-bold text-emerald-400 hover:text-emerald-300">
                        <span><?= t('buttons.view_details') ?></span>
                        <span class="rtl:rotate-180">&rarr;</span>
                    </a>
                </div>
            </div>
            <?php endif; ?>

            <!-- 7. Other Trading (Vehicles & Office Machinery) -->
            <?php if (is_category_active('other_trading')): ?>
            <div class="bg-slate-950 border border-slate-800 rounded-2xl overflow-hidden hover:border-slate-700 transition-all flex flex-col justify-between">
                <div>
                    <div class="h-48 overflow-hidden">
                        <img src="<?= img_url('banner_vehicles.jpg') ?>" alt="Specialized vehicles" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <span class="text-[10px] font-mono uppercase tracking-wider text-emerald-400 mb-1 block">CR Activities 451011 & 465910</span>
                        <h3 class="text-xl font-bold text-white mb-2"><?= t('nav.other_trading') ?></h3>
                        <p class="text-xs text-slate-400 leading-relaxed mb-4">
                            <?= ($lang === 'ar') ? 'مركبات الركاب المتخصصة (إسعاف، حافلات صغيرة، جيب) والآلات والمعدات المكتبية بالجملة.' : 'Wholesale specialized passenger vehicles (ambulances, minibuses, jeeps) and office machinery.' ?>
                        </p>
                    </div>
                </div>
                <div class="p-6 pt-0">
                    <a href="<?= route_url('other-trading') ?>" class="inline-flex items-center gap-2 text-xs font-bold text-emerald-400 hover:text-emerald-300">
                        <span><?= t('buttons.view_details') ?></span>
                        <span class="rtl:rotate-180">&rarr;</span>
                    </a>
                </div>
            </div>
            <?php endif; ?>

        </div>
    </div>
</section>

<!-- Bottom CTA -->
<section class="py-16 bg-slate-950 text-white border-t border-slate-800 text-center">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-4">
        <h2 class="text-2xl sm:text-3xl font-extrabold text-white"><?= t('pages.home.closing_cta_title') ?></h2>
        <p class="text-slate-400 text-sm max-w-xl mx-auto"><?= t('pages.home.closing_cta_text') ?></p>
        <div class="pt-4">
            <a href="<?= route_url('contact') ?>#rfq-form" class="inline-flex items-center gap-2 px-8 py-3.5 bg-brandgreen hover:bg-emerald-600 text-white font-bold text-sm rounded-lg transition-all">
                <span><?= t('buttons.request_quote') ?></span>
                <span class="rtl:rotate-180">&rarr;</span>
            </a>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/../footer.php'; ?>
