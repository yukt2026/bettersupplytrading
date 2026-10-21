<?php
$page_title = 'About Us | Desert Iron';
require_once 'header.php';
?>

<!-- 1. Hero Section -->
<section class="relative min-h-[45vh] flex items-center bg-charcoal overflow-hidden pt-24 pb-12">
    <div class="absolute inset-0 z-0">
        <img src="public/images/about_us_team.jpg" alt="About Desert Iron" class="w-full h-full object-cover opacity-75">
        <div class="absolute inset-0 bg-gradient-to-t from-charcoal/90 via-charcoal/40 to-charcoal/20"></div>
    </div>
    
    <div class="container mx-auto px-4 lg:px-6 relative z-10 text-center max-w-4xl">
        <div class="flex items-center justify-center gap-3 mb-4">
            <div class="w-8 h-[2px] bg-saudi"></div>
            <span class="text-white opacity-90 text-xs font-bold uppercase tracking-widest">
                <?= $lang === 'ar' ? 'إرثنا ورؤيتنا' : 'Our Legacy & Vision' ?>
            </span>
            <div class="w-8 h-[2px] bg-saudi"></div>
        </div>
        <h1 class="text-4xl md:text-5xl lg:text-6xl text-white font-bold mb-4 leading-tight <?= $headingFontClass ?>">
            <?= $lang === 'ar' ? 'نبني المستقبل اليوم.' : 'Building Tomorrow, Today.' ?>
        </h1>
        <p class="text-gray-300 text-sm sm:text-lg font-light leading-relaxed">
            <?= $lang === 'ar' ? 'صحراء الحديد هي شركة مقاولات هندسية وإنشائية في المملكة العربية السعودية، متخصصة في الهياكل الفولاذية، والمباني مسبقة الصنع (PEB)، والإنشاءات المدنية المتكاملة.' : 'Desert Iron is an engineering and construction contractor in Saudi Arabia, specializing in structural steel, PEB systems, and turnkey civil construction.' ?>
        </p>
    </div>
</section>

<!-- 2. Story Section (Stacked Mobile, 2 Col Desktop) -->
<section class="py-12 md:py-16 lg:py-24 bg-white">
    <div class="container mx-auto px-4 lg:px-6 max-w-7xl">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
            
            <div class="lg:col-span-6 space-y-6">
                <span class="text-xs uppercase tracking-widest text-saudi font-bold block">Company Overview</span>
                <h2 class="text-3xl sm:text-4xl text-charcoal font-bold <?= $headingFontClass ?> leading-tight">
                    <?= $lang === 'ar' ? 'التميز الهندسي والإنشائي في المملكة العربية السعودية' : 'Engineering Excellence Across Saudi Arabia' ?>
                </h2>
                <p class="text-gray-600 text-base leading-relaxed font-light">
                    <?= $lang === 'ar' ? 'يقع المقر المسجل لشركة صحراء الحديد في الدمام بالمملكة العربية السعودية، ونجمع بين التنسيق الهندسي المتقدم والامتثال لكود البناء السعودي (SBC 201) والرقابة الصارمة على الجودة (QA/QC) لتنفيذ المشاريع الصناعية والتجارية وفق الجداول الزمنية المعتمدة.' : 'Registered in Dammam, Saudi Arabia, Desert Iron delivers coordinated structural steel, pre-engineered buildings (PEB), and turnkey civil construction solutions across the Kingdom. We combine BIM technical coordination, SBC 201 code compliance, and rigorous QA/QC inspection to deliver industrial and commercial projects on schedule.' ?>
                </p>
                <div class="pt-2">
                    <a href="quote.php" class="inline-flex bg-saudi text-white px-8 py-3.5 rounded-sm font-bold text-xs uppercase tracking-widest hover:bg-charcoal transition-colors shadow-md min-h-[44px] items-center">
                        <?= t('request_quote') ?>
                    </a>
                </div>
            </div>
            
            <div class="lg:col-span-6">
                <img src="public/images/hero_riyadh_steel.jpg" alt="Structural Steel & Construction" class="w-full aspect-[4/3] object-cover rounded-sm shadow-xl border border-gray-100">
            </div>

        </div>
    </div>
</section>

<!-- 3. Vision & Mission Cards -->
<section class="py-12 md:py-16 bg-offwhite border-y border-gray-200">
    <div class="container mx-auto px-4 lg:px-6 max-w-7xl">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            
            <!-- Vision -->
            <div class="bg-white p-8 rounded-sm shadow-sm border border-gray-200 hover:border-saudi transition-colors">
                <div class="w-12 h-12 bg-saudi/10 text-saudi rounded-sm flex items-center justify-center font-bold text-lg mb-6">01</div>
                <h3 class="text-2xl font-bold text-charcoal mb-3 <?= $headingFontClass ?>">
                    <?= $lang === 'ar' ? 'رؤيتنا' : 'Our Vision' ?>
                </h3>
                <p class="text-gray-600 text-sm md:text-base leading-relaxed font-light">
                    <?= $lang === 'ar' ? 'أن نكون الشريك الأكثر موثوقية في مجال الهياكل الفولاذية والمقاولات في المملكة والمنطقة، مع إرساء معايير عالية للسلامة والدقة والمساهمة في تحقيق مستهدفات رؤية السعودية 2030.' : 'To be a trusted structural steel and contracting partner in Saudi Arabia, setting high standards for safety, precision, and Vision 2030 industrial growth.' ?>
                </p>
            </div>

            <!-- Mission -->
            <div class="bg-white p-8 rounded-sm shadow-sm border border-gray-200 hover:border-saudi transition-colors">
                <div class="w-12 h-12 bg-saudi/10 text-saudi rounded-sm flex items-center justify-center font-bold text-lg mb-6">02</div>
                <h3 class="text-2xl font-bold text-charcoal mb-3 <?= $headingFontClass ?>">
                    <?= $lang === 'ar' ? 'رسالتنا' : 'Our Mission' ?>
                </h3>
                <p class="text-gray-600 text-sm md:text-base leading-relaxed font-light">
                    <?= $lang === 'ar' ? 'تقديم حلول هندسية متقنة وتنفيذ ميداني آمن للهياكل الفولاذية والأعمال المدنية المتكاملة بما يدعم النمو الصناعي والتجاري المستدام لعملائنا.' : 'To deliver reliable engineering coordination, quality steel and civil works, and safe field execution that supports sustainable industrial and commercial growth for our clients.' ?>
                </p>
            </div>

        </div>
    </div>
</section>

<!-- 3.5 Group Heritage & Management -->
<section class="py-12 md:py-16 bg-white border-y border-gray-200">
    <div class="container mx-auto px-4 lg:px-6 max-w-7xl">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <div>
                <h3 class="text-3xl font-bold text-charcoal mb-4 <?= $headingFontClass ?>">Group Heritage & Experience</h3>
                <p class="text-gray-600 text-base leading-relaxed font-light mb-4">
                    Desert Iron's executive management brings more than 25 years of extensive GCC industry experience in the structural steel and construction sectors, ensuring every project is guided by seasoned professionals.
                </p>
                <p class="text-gray-600 text-base leading-relaxed font-light">
                    Our associated Qatar company, <strong>Safeera Trading, Contracting & Services</strong>, was established in 2012 under the same ownership. Our combined <strong>Group Experience – Qatar</strong> provides a strong foundation of completed industrial and commercial projects across the region.
                </p>
            </div>
            <div class="bg-offwhite p-8 rounded-sm border border-gray-200">
                <div class="flex items-center gap-4 mb-4">
                    <div class="w-16 h-16 bg-saudi text-white flex items-center justify-center font-bold text-xl rounded-full">25+</div>
                    <div>
                        <h4 class="text-xl font-bold text-charcoal <?= $headingFontClass ?>">Years GCC Experience</h4>
                        <p class="text-sm text-gray-500">Executive Management Leadership</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. Core Values Grid -->
<section class="py-12 md:py-16 lg:py-24 bg-white">
    <div class="container mx-auto px-4 lg:px-6 max-w-7xl">
        <div class="text-center max-w-2xl mx-auto mb-12">
            <h2 class="text-xs uppercase tracking-widest text-saudi font-bold mb-3">Pillars of Excellence</h2>
            <h3 class="text-3xl sm:text-4xl text-charcoal font-bold <?= $headingFontClass ?>">Our Core Values</h3>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <div class="bg-offwhite p-6 rounded-sm border border-gray-200 shadow-sm text-center">
                <div class="w-12 h-12 bg-saudi text-white rounded-full flex items-center justify-center mx-auto mb-4 font-bold">1</div>
                <h4 class="text-lg font-bold text-charcoal mb-2 <?= $headingFontClass ?>">Safety First</h4>
                <p class="text-gray-600 text-xs font-light leading-relaxed">Strict HSE and Zero-LTI safety commitment across all active construction and installation sites.</p>
            </div>

            <div class="bg-offwhite p-6 rounded-sm border border-gray-200 shadow-sm text-center">
                <div class="w-12 h-12 bg-saudi text-white rounded-full flex items-center justify-center mx-auto mb-4 font-bold">2</div>
                <h4 class="text-lg font-bold text-charcoal mb-2 <?= $headingFontClass ?>">SBC Code Compliance</h4>
                <p class="text-gray-600 text-xs font-light leading-relaxed">Full technical compliance with Saudi Building Code (SBC 201) and ISO standards.</p>
            </div>

            <div class="bg-offwhite p-6 rounded-sm border border-gray-200 shadow-sm text-center">
                <div class="w-12 h-12 bg-saudi text-white rounded-full flex items-center justify-center mx-auto mb-4 font-bold">3</div>
                <h4 class="text-lg font-bold text-charcoal mb-2 <?= $headingFontClass ?>">Precision Detailing</h4>
                <p class="text-gray-600 text-xs font-light leading-relaxed">Detailed 3D BIM modeling, shop drawings, and quality-controlled steel fabrication coordination.</p>
            </div>

            <div class="bg-offwhite p-6 rounded-sm border border-gray-200 shadow-sm text-center">
                <div class="w-12 h-12 bg-saudi text-white rounded-full flex items-center justify-center mx-auto mb-4 font-bold">4</div>
                <h4 class="text-lg font-bold text-charcoal mb-2 <?= $headingFontClass ?>">On-Time Delivery</h4>
                <p class="text-gray-600 text-xs font-light leading-relaxed">Fast mobilization and reliable schedule adherence for industrial and commercial projects.</p>
            </div>

        </div>
    </div>
</section>

<!-- 5. Final CTA -->
<section class="py-12 md:py-16 bg-gradient-to-r from-charcoal via-[#14231f] to-charcoal text-center relative overflow-hidden border-t border-saudi/30">
    <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#006B3F_1px,transparent_1px)] [background-size:16px_16px] pointer-events-none"></div>
    <div class="container mx-auto px-4 max-w-4xl relative z-10">
        <span class="inline-block px-3 py-1 bg-saudi/20 border border-saudi/40 text-emerald-300 rounded text-xs font-bold uppercase tracking-wider mb-3">
            <?= $lang === 'ar' ? 'فريق المبيعات والتقدير في المملكة' : 'KSA Sales & Estimation Team' ?>
        </span>
        <h2 class="text-2xl sm:text-4xl text-white font-bold <?= $headingFontClass ?> mb-4 leading-tight">
            <?= $lang === 'ar' ? 'جاهز لبناء مشروعك القادم؟' : 'Partner with Desert Iron' ?>
        </h2>
        <p class="text-gray-300 text-sm md:text-base max-w-xl mx-auto mb-8 font-light leading-relaxed">
            <?= $lang === 'ar' ? 'ناقش مشروعك، وأرسل جدول الكميات (BOQ) أو المخططات، واطلب عرض سعر تنافسي.' : 'Discuss your project, submit a BOQ or drawing, and request a competitive quotation.' ?>
        </p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="quote.php" class="w-full sm:w-auto bg-saudi text-white px-8 py-3.5 rounded-lg font-bold text-xs uppercase tracking-widest hover:bg-emerald-700 transition-all duration-300 shadow-xl min-h-[44px] flex items-center justify-center space-x-2">
                <span><?= t('get_quote') ?></span>
                <svg class="w-4 h-4 <?= $lang === 'ar' ? 'rotate-180' : '' ?>" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </a>
            <a href="tel:+966599510213" class="w-full sm:w-auto bg-white/10 border border-white/30 text-white px-8 py-3.5 rounded-lg font-bold text-xs uppercase tracking-widest hover:bg-white hover:text-charcoal transition-all duration-300 min-h-[44px] flex items-center justify-center space-x-2">
                <svg class="w-4 h-4 text-saudi" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                <span>+966 59 951 0213</span>
            </a>
        </div>
    </div>
</section>

<?php require_once 'footer.php'; ?>
