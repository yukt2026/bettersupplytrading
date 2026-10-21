<?php 
$page_title = 'Industries We Serve | Desert Iron'; 
require_once 'header.php'; 
?>

<!-- Cinematic Hero Banner -->
<section class="relative min-h-[45vh] flex items-center bg-charcoal overflow-hidden pt-24 pb-12">
    <div class="absolute inset-0 z-0">
        <img src="public/images/shutdown_maintenance.jpg" alt="Industries We Serve" class="w-full h-full object-cover opacity-75">
        <div class="absolute inset-0 bg-gradient-to-t from-charcoal/90 via-charcoal/40 to-charcoal/20"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10 text-center" >
        <div class="flex items-center justify-center gap-4 mb-4">
            <div class="w-12 h-[3px] bg-saudi"></div>
            <span class="text-white opacity-90 text-xs md:text-sm font-bold uppercase tracking-widest drop-shadow-sm">
                <?= $lang === 'ar' ? 'القطاعات التي نخدمها' : 'Industrial Applications' ?>
            </span>
            <div class="w-12 h-[3px] bg-saudi"></div>
        </div>
        <h1 class="text-4xl md:text-5xl lg:text-6xl text-white font-bold mb-4 leading-tight drop-shadow-lg <?= $headingFontClass ?>">
            <?= $lang === 'ar' ? 'قطاعاتنا الرئيسية' : 'Industries We Serve' ?>
        </h1>
        <p class="text-gray-300 max-w-2xl mx-auto text-sm md:text-base font-light leading-relaxed">
            <?= $lang === 'ar' ? 'نقدم حلول الفولاذ الهيكلي والإنشاءات لدعم القطاعات الاقتصادية الأساسية في المملكة العربية السعودية بما يتماشى مع رؤية 2030.' : 'Delivering engineered structural steel and contracting solutions to Saudi Arabia\'s core economic sectors, aligned with Vision 2030.' ?>
        </p>
    </div>
</section>

<!-- Industries Grid -->
<section class="py-16 md:py-24 bg-offwhite">
    <div class="container mx-auto px-4 max-w-7xl">
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <?php
            $industries = [
                [
                    'title' => 'Oil & Gas / Petrochemical',
                    'title_ar' => 'النفط والغاز والبتروكيماويات',
                    'desc' => 'Heavy structural steel framing, pipe racks, and mechanical supports designed to withstand harsh industrial environments.',
                    'desc_ar' => 'هياكل فولاذية ثقيلة، حوامل أنابيب، ودعامات ميكانيكية مصممة لتحمل البيئات الصناعية القاسية.',
                    'img' => 'shutdown_maintenance.jpg'
                ],
                [
                    'title' => 'Manufacturing',
                    'title_ar' => 'التصنيع والصناعة',
                    'desc' => 'Custom-engineered factory buildings, equipment platforms, and heavy-duty crane runways for manufacturing facilities.',
                    'desc_ar' => 'مباني مصانع مصممة خصيصاً، منصات معدات، ومسارات رافعات للخدمة الشاقة لمرافق التصنيع.',
                    'img' => 'structural_steel.jpg'
                ],
                [
                    'title' => 'Warehouses / Logistics',
                    'title_ar' => 'المستودعات والخدمات اللوجستية',
                    'desc' => 'Large-span Pre-Engineered Buildings (PEB) ensuring rapid construction and vast, column-free storage spaces.',
                    'desc_ar' => 'مباني مسبقة الصنع (PEB) ذات مسافات واسعة تضمن البناء السريع ومساحات تخزين ضخمة خالية من الأعمدة.',
                    'img' => 'peb_warehouse.jpg'
                ],
                [
                    'title' => 'Energy / Utilities',
                    'title_ar' => 'الطاقة والمرافق',
                    'desc' => 'Structural solutions for power generation plants, substations, and water desalination facilities.',
                    'desc_ar' => 'حلول إنشائية لمحطات توليد الطاقة والمحطات الفرعية ومرافق تحلية المياه.',
                    'img' => 'call_off_services.jpg'
                ],
                [
                    'title' => 'Commercial Buildings',
                    'title_ar' => 'المباني التجارية',
                    'desc' => 'Multi-story steel frameworks for high-rises, commercial centers, and mixed-use urban developments.',
                    'desc_ar' => 'هياكل فولاذية متعددة الطوابق للأبراج والمراكز التجارية والتطورات الحضرية متعددة الاستخدامات.',
                    'img' => 'contact_hq.jpg'
                ],
                [
                    'title' => 'Infrastructure',
                    'title_ar' => 'البنية التحتية',
                    'desc' => 'Civil construction, bridges, pedestrian walkways, and heavy infrastructural steel components.',
                    'desc_ar' => 'الإنشاءات المدنية، الجسور، ممرات المشاة، ومكونات الفولاذ الثقيلة للبنية التحتية.',
                    'img' => 'civil_construction.jpg'
                ],
                [
                    'title' => 'Cold Storage / Specialized Facilities',
                    'title_ar' => 'التخزين المبرد والمرافق المتخصصة',
                    'desc' => 'Insulated sandwich panel cladding and robust steel structures for climate-controlled environments.',
                    'desc_ar' => 'ألواح تكسية عازلة وهياكل فولاذية متينة للبيئات التي يتم التحكم في مناخها.',
                    'img' => 'roof_wall_panels.jpg'
                ]
            ];

            foreach($industries as $i => $ind):
            ?>
            <div class="group bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden hover:border-saudi hover:shadow-xl transition-all duration-300 flex flex-col">
                <div class="relative aspect-[16/10] overflow-hidden">
                    <img src="public/images/<?= $ind['img'] ?>" alt="<?= $ind['title'] ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-charcoal/80 to-transparent"></div>
                    <div class="absolute bottom-4 start-4 end-4">
                        <div class="flex items-center gap-3">
                            <span class="w-8 h-8 rounded-full bg-saudi text-white flex items-center justify-center text-xs font-bold shadow-md">
                                <?= str_pad($i + 1, 2, '0', STR_PAD_LEFT) ?>
                            </span>
                            <h3 class="text-white text-lg font-bold leading-tight <?= $headingFontClass ?> group-hover:text-saudi transition-colors">
                                <?= $lang === 'ar' ? $ind['title_ar'] : $ind['title'] ?>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="p-6 flex-grow flex flex-col justify-between">
                    <p class="text-gray-600 text-sm leading-relaxed font-light mb-4">
                        <?= $lang === 'ar' ? $ind['desc_ar'] : $ind['desc'] ?>
                    </p>
                    <a href="quote.php" class="text-saudi font-bold text-xs uppercase tracking-widest hover:text-charcoal transition-colors inline-flex items-center gap-1">
                        <?= $lang === 'ar' ? 'طلب عرض سعر' : 'Request a Quote' ?> &rarr;
                    </a>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-12 md:py-16 bg-gradient-to-r from-charcoal via-[#14231f] to-charcoal text-center relative overflow-hidden border-t border-saudi/30">
    <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#006B3F_1px,transparent_1px)] [background-size:16px_16px] pointer-events-none"></div>
    <div class="container mx-auto px-4 max-w-4xl relative z-10">
        <h2 class="text-2xl sm:text-4xl text-white font-bold <?= $headingFontClass ?> mb-4 leading-tight">
            <?= $lang === 'ar' ? 'جاهز لبناء مشروعك الصناعي؟' : 'Ready to Build Your Industrial Project?' ?>
        </h2>
        <p class="text-gray-300 text-sm md:text-base max-w-xl mx-auto mb-8 font-light leading-relaxed">
            <?= $lang === 'ar' ? 'نحن نقدم حلولًا هندسية متكاملة مصممة خصيصًا لتلبية احتياجات قطاعك الصناعي بدقة.' : 'We provide end-to-end engineering and steel fabrication solutions tailored specifically to your industry.' ?>
        </p>
        <a href="quote.php" class="inline-flex bg-saudi text-white px-8 py-3.5 rounded-lg font-bold text-xs uppercase tracking-widest hover:bg-emerald-700 transition-all duration-300 shadow-xl items-center justify-center">
            <?= $lang === 'ar' ? 'تواصل معنا الآن' : 'Contact Us Today' ?>
        </a>
    </div>
</section>

<?php require_once 'footer.php'; ?>
