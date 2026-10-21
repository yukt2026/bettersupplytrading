<?php
$page_title = 'Our Services | Desert Iron';
require_once 'header.php';

$services = [
    ['title' => 'Structural Steel Fabrication & Erection', 'title_ar' => 'تصنيع وتركيب الهياكل الفولاذية', 'slug' => 'structural-steel', 'img' => 'structural_steel.jpg', 'desc' => 'Frames, columns, beams, trusses, platforms, supports, and modifications.', 'desc_ar' => 'الإطارات والأعمدة والجسور والجمالونات والمنصات والدعامات والتعديلات الهيكلية.'],
    ['title' => 'Pre-Engineered Buildings (PEB)', 'title_ar' => 'المباني مسبقة الصنع (PEB)', 'slug' => 'pre-engineered-buildings', 'img' => 'peb_warehouse.jpg', 'desc' => 'Warehouses, factories, workshops, storage and utility buildings.', 'desc_ar' => 'المستودعات والمصانع والورش ومباني التخزين والمرافق.'],
    ['title' => 'Industrial Construction', 'title_ar' => 'الإنشاءات الصناعية', 'slug' => 'industrial-construction', 'img' => 'civil_construction.jpg', 'desc' => 'Integrated steel, civil and industrial site works.', 'desc_ar' => 'أعمال الفولاذ الهيكلي والأعمال المدنية والإنشاءات الصناعية المتكاملة.'],
    ['title' => 'Pipeline & Industrial Piping', 'title_ar' => 'خطوط الأنابيب والأنابيب الصناعية', 'slug' => 'pipeline-piping', 'img' => 'architectural_work.jpg', 'desc' => 'Installation, fabrication, pipe supports, and related mechanical work.', 'desc_ar' => 'التركيب والتصنيع وحوامل الأنابيب والأعمال الميكانيكية ذات الصلة.'],
    ['title' => 'Roof & Wall Cladding', 'title_ar' => 'تكسية الأسقف والجدران', 'slug' => 'roof-wall-cladding', 'img' => 'roof_wall_panels.jpg', 'desc' => 'Roof/wall systems, insulated/sandwich panels, flashings and accessories.', 'desc_ar' => 'أنظمة الأسقف والجدران وألواح الساندوتش المعزولة والإكسسوارات.'],
    ['title' => 'Standing Seam Roofing Systems', 'title_ar' => 'أنظمة الأسقف المخفية التثبيت (Standing Seam)', 'slug' => 'standing-seam-roofing', 'img' => 'shutdown_maintenance.jpg', 'desc' => 'Supply, installation support, and associated accessories.', 'desc_ar' => 'التوريد ودعم التركيب والملحقات المرتبطة بأنظمة الأسقف.'],
    ['title' => 'Miscellaneous Metal Works', 'title_ar' => 'الأعمال المعدنية المتنوعة', 'slug' => 'misc-metal-works', 'img' => 'trading_warehouse.jpg', 'desc' => 'Frames, access structures, brackets and customized steel items.', 'desc_ar' => 'الإطارات وهياكل الوصول والسلالم والدعامات والعناصر الفولاذية المخصصة.'],
    ['title' => 'Fireproofing Works', 'title_ar' => 'أعمال الحماية من الحريق', 'slug' => 'fireproofing-works', 'img' => 'structural_steel.jpg', 'desc' => 'Project-specified systems and associated support.', 'desc_ar' => 'أنظمة الحماية من الحريق المعتمدة حسب مواصفات المشروع.'],
    ['title' => 'Civil Construction & Turnkey Solutions', 'title_ar' => 'الإنشاءات المدنية والحلول المتكاملة (تسليم مفتاح)', 'slug' => 'civil-works', 'img' => 'civil_construction.jpg', 'desc' => 'From Foundation to Final Handover', 'desc_ar' => 'من الأساسات إلى التسليم النهائي'],
    ['title' => 'Fit-Out Works', 'title_ar' => 'أعمال التشطيبات والتجهيز الداخلي', 'slug' => 'fit-out-works', 'img' => 'architectural_work.jpg', 'desc' => 'Commercial/industrial finishing and related coordination.', 'desc_ar' => 'أعمال التشطيبات التجارية والصناعية والتنسيق المرتبط بها.']
];
?>

<!-- Cinematic Hero Banner -->
<section class="relative min-h-[40vh] flex items-center bg-charcoal overflow-hidden pt-24 pb-12">
    <div class="absolute inset-0 z-0">
        <img src="public/images/civil_construction.jpg" alt="Desert Iron Services" class="w-full h-full object-cover opacity-75">
        <div class="absolute inset-0 bg-gradient-to-t from-charcoal/90 via-charcoal/40 to-charcoal/20"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10 text-center">
        <div class="flex items-center justify-center gap-4 mb-4">
            <div class="w-8 h-[2px] bg-emerald-400"></div>
            <span class="text-emerald-300 text-xs font-bold uppercase tracking-widest">Our Expertise</span>
            <div class="w-8 h-[2px] bg-emerald-400"></div>
        </div>
        <h1 class="text-4xl md:text-5xl lg:text-6xl text-white font-bold mb-4 leading-tight <?= $headingFontClass ?>">
            <?= $lang === 'ar' ? 'خدماتنا الشاملة' : 'Comprehensive Services' ?>
        </h1>
        <p class="text-gray-300 max-w-2xl mx-auto text-sm md:text-base font-light leading-relaxed">
            <?= $lang === 'ar' ? 'تقديم حلول هندسية وإنشائية متكاملة للمشاريع الصناعية والتجارية من التصميم والتصنيع إلى التنفيذ الميداني والتسليم النهائي.' : 'Delivering end-to-end engineering and construction solutions for industrial and commercial projects across Saudi Arabia, from structural steel fabrication to turnkey civil execution.' ?>
        </p>
    </div>
</section>

<!-- Services Grid Section -->
<section class="py-12 md:py-16 bg-offwhite">
    <div class="container mx-auto px-4 max-w-7xl">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
            
            <?php foreach($services as $idx => $service): ?>
            <a href="<?= $service['slug'] ?>.php" class="group block relative rounded-sm overflow-hidden bg-white shadow-sm border border-gray-100 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                
                <!-- Image Box -->
                <div class="relative h-56 overflow-hidden">
                    <img src="public/images/<?= $service['img'] ?>" alt="<?= htmlspecialchars($service['title']) ?>" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-charcoal/80 to-transparent"></div>
                    
                    <div class="absolute bottom-4 left-4 right-4 flex justify-between items-end">
                        <h3 class="text-white text-lg md:text-xl font-bold <?= $headingFontClass ?> leading-tight">
                            <?= $lang === 'ar' ? ($service['title_ar'] ?? $service['title']) : $service['title'] ?>
                        </h3>
                        <div class="w-8 h-8 rounded-full bg-saudi/90 text-white flex items-center justify-center shrink-0 opacity-0 group-hover:opacity-100 transition-opacity transform translate-y-2 group-hover:translate-y-0">
                            <svg class="w-4 h-4 <?= $lang === 'ar' ? 'rotate-180' : '' ?>" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </div>
                </div>
                
                <!-- Content Box -->
                <div class="p-5">
                    <p class="text-gray-600 text-sm <?= $service['slug'] === 'civil-works' ? 'font-medium italic text-charcoal' : 'font-light' ?> leading-relaxed">
                        <?= $lang === 'ar' ? ($service['desc_ar'] ?? $service['desc']) : $service['desc'] ?>
                    </p>
                    <div class="mt-4 flex items-center text-xs font-bold text-saudi uppercase tracking-widest group-hover:text-charcoal transition-colors">
                        <?= $lang === 'ar' ? 'اقرأ المزيد' : 'Read More' ?> 
                        <span class="inline-block transition-transform group-hover:translate-x-1 mx-2">&rarr;</span>
                    </div>
                </div>
                
            </a>
            <?php endforeach; ?>
            
        </div>
    </div>
</section>

<!-- Final CTA Banner -->
<section class="py-12 md:py-16 bg-gradient-to-r from-charcoal via-[#14231f] to-charcoal text-center relative overflow-hidden border-t border-saudi/30">
    <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#006B3F_1px,transparent_1px)] [background-size:16px_16px] pointer-events-none"></div>
    <div class="container mx-auto px-4 max-w-4xl relative z-10">
        <span class="inline-block px-3 py-1 bg-saudi/20 border border-saudi/40 text-emerald-300 rounded text-xs font-bold uppercase tracking-wider mb-3">
            <?= $lang === 'ar' ? 'فريق المبيعات والتقدير في المملكة' : 'KSA Sales & Estimation Team' ?>
        </span>
        <h2 class="text-2xl sm:text-4xl text-white font-bold <?= $headingFontClass ?> mb-4 leading-tight">
            <?= $lang === 'ar' ? 'جاهز لبناء مشروعك القادم؟' : 'Ready to start your next project?' ?>
        </h2>
        <p class="text-gray-300 text-sm md:text-base max-w-xl mx-auto mb-8 font-light leading-relaxed">
            <?= $lang === 'ar' ? 'ناقش مشروعك، وأرسل جدول الكميات (BOQ) أو المخططات، واطلب عرض سعر تنافسي من فريق المبيعات والتقدير في المملكة.' : 'Discuss your project, submit a BOQ or drawing, and request a competitive quotation.' ?>
        </p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="quote.php" class="w-full sm:w-auto bg-saudi text-white px-8 py-3.5 rounded-lg font-bold text-xs uppercase tracking-widest hover:bg-emerald-700 transition-all duration-300 shadow-xl min-h-[44px] flex items-center justify-center space-x-2">
                <span><?= t('get_quote') ?></span>
                <svg class="w-4 h-4 <?= $lang === 'ar' ? 'rotate-180' : '' ?>" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </a>
            <a href="tel:+966599510213" class="w-full sm:w-auto bg-white/10 border border-white/30 text-white px-8 py-3.5 rounded-lg font-bold text-xs uppercase tracking-widest hover:bg-white hover:text-charcoal transition-all duration-300 min-h-[44px] flex items-center justify-center space-x-2">
                <svg class="w-4 h-4 text-saudi" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                <span dir="ltr">+966 59 951 0213</span>
            </a>
        </div>
    </div>
</section>

<?php require_once 'footer.php'; ?>
