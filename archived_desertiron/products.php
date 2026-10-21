<?php
$page_title = 'Our Products | Desert Iron';
require_once 'header.php';

$products = [
    [
        'title' => 'Primary Built-Up Members',
        'title_ar' => '??????? ????????? ????????',
        'img' => 'structural_steel.jpg',
        'desc' => 'High-grade columns, rafters, and rigid frames engineered to withstand immense loads and harsh industrial environments.',
        'desc_ar' => '????? ?????? ????? ?????? ????? ????? ??????? ??????? ???????? ???????? ???????.'
    ],
    [
        'title' => 'Secondary Members (Z & C Purlins)',
        'title_ar' => '??????? ???????? (Z & C)',
        'img' => 'architectural_work.jpg',
        'desc' => 'Cold-formed Z and C sections providing optimal structural support for roof and wall cladding.',
        'desc_ar' => '????? Z ? C ??????? ??? ?????? ???? ????? ??????? ?????? ?????? ?????? ????????.'
    ],
    [
        'title' => 'Roof & Wall Cladding',
        'title_ar' => '????? ??????? (??????? ????)',
        'img' => 'roof_wall_panels.jpg',
        'desc' => 'Corrugated steel sheets and insulated polyurethane sandwich panels for maximum thermal efficiency.',
        'desc_ar' => '????? ????? ??????? ?????? ????????? ???? ???????? ?????? ???? ????? ??????.'
    ],
    [
        'title' => 'Crane Beams & Mezzanines',
        'title_ar' => '????? ???????? ?????? ?????????',
        'img' => 'peb_warehouse.jpg',
        'desc' => 'Heavy-duty crane runway beams and mezzanine floor joists customized for factory logistics.',
        'desc_ar' => '????? ??????? ???????? ??????? ?????? ????? ????????? ??????? ????????? ???????.'
    ],
    [
        'title' => 'Fascias & Canopies',
        'title_ar' => '???????? ????????',
        'img' => 'civil_construction.jpg',
        'desc' => 'Architectural fascias and protective canopies that blend structural integrity with modern aesthetics.',
        'desc_ar' => '?????? ??????? ?????? ????? ???? ??? ??????? ???????? ?????????? ???????.'
    ],
    [
        'title' => 'Accessories & Fasteners',
        'title_ar' => '??????????? ?????????',
        'img' => 'trading_warehouse.jpg',
        'desc' => 'Anchor bolts, high-strength tension bolts, bracings, and flashing details for a complete system finish.',
        'desc_ar' => '????? ???????? ????? ???? ????? ?????? ????????? ?????? ?????? ??????? ???????.'
    ]
];
?>

<!-- Cinematic Hero Banner -->
<section class="relative min-h-[45vh] flex items-center bg-charcoal overflow-hidden pt-24 pb-12">
    <div class="absolute inset-0 z-0">
        <img src="public/images/roof_wall_panels.jpg" alt="Desert Iron Products" class="w-full h-full object-cover opacity-50">
        <div class="absolute inset-0 bg-gradient-to-t from-charcoal/90 via-charcoal/40 to-charcoal/20"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10 text-center" >
        <div class="flex items-center justify-center gap-4 mb-5">
            <div class="w-12 h-[3px] bg-saudi"></div>
            <span class="text-white opacity-90 text-xs md:text-sm font-bold uppercase tracking-widest drop-shadow-sm">
                <?= $lang === 'ar' ? '?????? ????????' : 'Engineered Products' ?>
            </span>
            <div class="w-12 h-[3px] bg-saudi"></div>
        </div>
        <h1 class="text-4xl md:text-5xl lg:text-6xl text-white font-bold mb-6 leading-tight drop-shadow-lg <?= $headingFontClass ?>">
            <?= $lang === 'ar' ? '?????? ????? ??????' : 'Premium Steel Solutions' ?>
        </h1>
        <p class="text-gray-300 max-w-2xl mx-auto text-sm md:text-base font-light leading-relaxed">
            <?= $lang === 'ar' ? '???? ?????? ????? ?? ???????? ????????? ???????? ??????? ??????? ????? ????? ?????? ?????? ???????? ???????? ?????? ??????? ?????? ??????.' : 'A comprehensive range of pre-engineered steel components, manufactured to the highest Saudi and international quality standards for modern construction demands.' ?>
        </p>
    </div>
</section>

<!-- Quality Assurance Banner -->
<section class="border-b border-gray-200 bg-white">
    <div class="container mx-auto px-4 max-w-7xl">
        <div class="grid grid-cols-2 md:grid-cols-4 divide-x divide-gray-100 rtl:divide-x-reverse text-center">
            <div class="py-8 px-4">
                <div class="text-3xl text-charcoal font-bold mb-1 <?= $headingFontClass ?>">ISO 9001</div>
                <div class="text-gray-500 text-xs uppercase tracking-wider font-semibold">Certified Quality</div>
            </div>
            <div class="py-8 px-4">
                <div class="text-3xl text-charcoal font-bold mb-1 <?= $headingFontClass ?>">SBC 201</div>
                <div class="text-gray-500 text-xs uppercase tracking-wider font-semibold">Code Compliant</div>
            </div>
            <div class="py-8 px-4">
                <div class="text-3xl text-charcoal font-bold mb-1 <?= $headingFontClass ?>">50Y+</div>
                <div class="text-gray-500 text-xs uppercase tracking-wider font-semibold">Design Life</div>
            </div>
            <div class="py-8 px-4">
                <div class="text-3xl text-saudi font-bold mb-1 <?= $headingFontClass ?>">100%</div>
                <div class="text-gray-500 text-xs uppercase tracking-wider font-semibold">Saudi Made</div>
            </div>
        </div>
    </div>
</section>

<!-- Products Grid Section -->
<section class="py-16 md:py-24 bg-offwhite">
    <div class="container mx-auto px-4 max-w-7xl">
        
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl text-charcoal font-bold mb-4 <?= $headingFontClass ?>">
                <?= $lang === 'ar' ? '?????? ????????' : 'Our Product Portfolio' ?>
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                <?= $lang === 'ar' ? '????? ???? ???????? ?????????? ???????? ???????? ????????.' : 'Precision-engineered for warehouses, industrial plants, and commercial structures.' ?>
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <?php foreach($products as $idx => $prod): ?>
            <div class="group bg-white rounded-sm shadow-sm border border-gray-100 overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                
                <div class="relative h-56 overflow-hidden">
                    <img src="public/images/<?= $prod['img'] ?>" alt="<?= $prod['title'] ?>" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-x-0 bottom-0 h-1/2 bg-gradient-to-t from-charcoal/60 to-transparent"></div>
                    <div class="absolute bottom-0 start-0 w-full h-1 bg-saudi transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left rtl:origin-right duration-300"></div>
                </div>
                
                <div class="p-6 md:p-8">
                    <h3 class="text-xl text-charcoal font-bold mb-3 <?= $headingFontClass ?> leading-tight group-hover:text-saudi transition-colors">
                        <?= $lang === 'ar' ? $prod['title_ar'] : $prod['title'] ?>
                    </h3>
                    <p class="text-gray-600 text-sm font-light leading-relaxed mb-6">
                        <?= $lang === 'ar' ? $prod['desc_ar'] : $prod['desc'] ?>
                    </p>
                    <a href="quote.php" class="inline-flex items-center text-xs font-bold text-charcoal uppercase tracking-widest hover:text-saudi transition-colors">
                        <?= $lang === 'ar' ? '??? ?????' : 'Inquire Now' ?> 
                        <span class="inline-block transition-transform group-hover:translate-x-1 rtl:group-hover:-translate-x-1 mx-2">
                            <?= $lang === 'ar' ? '&larr;' : '&rarr;' ?>
                        </span>
                    </a>
                </div>
                
            </div>
            <?php endforeach; ?>
            
        </div>
    </div>
</section>

<!-- Bottom CTA -->
<section class="py-16 bg-charcoal relative overflow-hidden">
    <div class="absolute inset-0 opacity-[0.03] pointer-events-none" style="background-image: radial-gradient(circle at 100% 0%, #ffffff 2px, transparent 2px); background-size: 32px 32px;"></div>
    
    <div class="container mx-auto px-4 relative z-10 max-w-4xl text-center">
        <h2 class="text-3xl text-white font-bold mb-4 <?= $headingFontClass ?>">
            <?= $lang === 'ar' ? '????? ??? ?????? ??? ???????' : 'Need a detailed technical catalogue?' ?>
        </h2>
        <p class="text-gray-400 text-sm mb-8 font-light max-w-xl mx-auto">
            <?= $lang === 'ar' ? '????? ???? ????????? ????? ??????? ???????? ?????? ?????????? ?????? ???????? ??????? ??????? ???????.' : 'Our engineering team is available to provide you with detailed material specifications, section properties, and load calculations for your project.' ?>
        </p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="quote.php" class="w-full sm:w-auto inline-flex justify-center items-center gap-2 bg-saudi text-white px-8 py-3 rounded-sm font-bold uppercase tracking-widest text-xs shadow-lg hover:bg-white hover:text-saudi transition-colors">
                <?= t('get_quote') ?>
            </a>
            <a href="contact.php" class="w-full sm:w-auto inline-flex justify-center items-center gap-2 bg-transparent border border-gray-600 text-white px-8 py-3 rounded-sm font-bold uppercase tracking-widest text-xs hover:border-saudi hover:text-saudi transition-colors">
                <?= $lang === 'ar' ? '???? ??????????' : 'Contact Engineers' ?>
            </a>
        </div>
    </div>
</section>

<?php require_once 'footer.php'; ?>
