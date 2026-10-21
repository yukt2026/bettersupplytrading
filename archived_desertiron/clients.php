<?php
$page_title = "Our Clients & Vendor Approvals | Desert Iron";
require_once 'header.php';
require_once 'components.php';
?>

<!-- Hero Section -->
<section class="relative pt-28 pb-16 bg-charcoal text-offwhite overflow-hidden">
    <div class="container mx-auto px-4 relative z-10 text-center">
        <span class="inline-block px-3 py-1 bg-black/50 border border-emerald-400/40 text-emerald-300 rounded text-xs font-bold uppercase tracking-wider mb-3 shadow-md">
            <?= $lang==='ar' ? 'شركاء النجاح' : 'Trusted Partners' ?>
        </span>
        <h1 class="text-3xl md:text-5xl <?= $headingFontClass ?> mb-4 text-white">
            <?= $lang==='ar' ? 'عملاؤنا واعتماداتنا' : 'Our Clients & Vendor Prequalifications' ?>
        </h1>
        <p class="text-steel max-w-2xl mx-auto text-sm md:text-base">
            <?= $lang==='ar' ? 'نفخر بالشراكة مع كبرى الهيئات الحكومية وشركات الطاقة والمقاولين الرئيسيين في المملكة العربية السعودية.' : 'Proudly serving major government entities, energy giants, and Tier-1 EPC contractors across Saudi Arabia and the GCC.' ?>
        </p>
    </div>
</section>

<!-- Vendor Prequalifications Strip -->
<section class="py-12 bg-white border-b border-gray-200">
    <div class="container mx-auto px-4">
        <div class="text-center mb-8">
            <h2 class="text-xl font-bold text-charcoal uppercase tracking-wider <?= $headingFontClass ?>">
                <?= $lang==='ar' ? 'الاعتمادات والتأهيل المعتمَد' : 'Approved Vendor Registration' ?>
            </h2>
            <p class="text-steel text-sm"><?= $lang==='ar' ? 'معتمدون كمورد ومصنّع هيكلي لدى الجهات الرائدة' : 'Pre-qualified vendor status for heavy structural steel and PEB supply' ?></p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-6 gap-4 items-center justify-center">
            <?php 
            $prequals = [
                ['name' => 'Saudi Aramco', 'code' => 'Vendor # 100XXXXX'],
                ['name' => 'SABIC', 'code' => 'Approved Steel Vendor'],
                ['name' => 'SEC (Saudi Electricity)', 'code' => 'Transmission Class A'],
                ['name' => 'MODON', 'code' => 'Industrial Developer'],
                ['name' => 'SWCC', 'code' => 'Water Desalination'],
                ['name' => 'Ma\'aden', 'code' => 'Mining Infrastructure']
            ];
            foreach ($prequals as $pq): 
            ?>
            <div class="bg-offwhite p-4 rounded-xl border border-gray-200 text-center hover:border-saudi transition shadow-xs">
                <div class="w-10 h-10 mx-auto mb-2 bg-saudi/10 text-saudi rounded-full flex items-center justify-center font-bold text-xs">
                    ✓
                </div>
                <h4 class="font-bold text-charcoal text-sm leading-snug"><?= $pq['name'] ?></h4>
                <span class="text-[11px] text-steel block mt-0.5"><?= $pq['code'] ?></span>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Client Portfolio Grid -->
<section class="py-12 md:py-16 bg-offwhite">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-2xl mx-auto mb-10">
            <h2 class="text-2xl md:text-3xl font-bold text-charcoal <?= $headingFontClass ?>">
                <?= $lang==='ar' ? 'شبكة العملاء والمشاريع' : 'Featured Clients & Contractors' ?>
            </h2>
            <p class="text-steel text-sm mt-2">
                <?= $lang==='ar' ? 'حلولنا الهيكلية والإنشائية تلبي أعلى معايير الجودة للشركات الكبرى' : 'Delivering structural precision for key industrial, commercial, and infrastructure contractors.' ?>
            </p>
        </div>

        <?php
        $clients_list = [
            ['name' => 'NESMA & Partners', 'sector' => 'EPC Contractor', 'desc' => 'Structural steel fabrication and heavy warehouse erection for industrial zones.'],
            ['name' => 'Al-Bawani Contracting', 'sector' => 'Building & Infrastructure', 'desc' => 'Commercial structural framing and PEB roof systems in Riyadh.'],
            ['name' => 'El-Seif Engineering', 'sector' => 'Mega Construction', 'desc' => 'High-rise structural steel detailing and secondary steel structures.'],
            ['name' => 'Saudi Binladin Group', 'sector' => 'Infrastructure & Aviation', 'desc' => 'Heavy steel trusses and specialized architectural metalwork.'],
            ['name' => 'Red Sea Global', 'sector' => 'Gigaproject Developer', 'desc' => 'Sustainable structural steel components and coastal building frames.'],
            ['name' => 'DGDA (Diriyah Gate)', 'sector' => 'Heritage & Culture', 'desc' => 'Custom structural steel frameworks for historical and commercial structures.'],
            ['name' => 'Al-Fanar Construction', 'sector' => 'Power & Substation', 'desc' => 'Substation structural supports and cable gantry steel structures.'],
            ['name' => 'KEO International', 'sector' => 'Engineering Management', 'desc' => 'Third-party QA/QC compliance for structural steel erection.'],
            ['name' => 'Al Rajhi Construction', 'sector' => 'Commercial & Industrial', 'desc' => 'PEB logistics centers and high-capacity storage facility structures.'],
            ['name' => 'SAMAIB Structural', 'sector' => 'Industrial Fabrication', 'desc' => 'Heavy plate girder fabrication and crane beam installations.'],
            ['name' => 'China Harbour (CHEC)', 'sector' => 'Marine & Port Works', 'desc' => 'Port facility structural steel framing and galvanized steel members.'],
            ['name' => 'Hyundai E&C', 'sector' => 'Petrochemical & Energy', 'desc' => 'Heavy pipe racks and industrial structural platforms.'],
        ];
        ?>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <?php foreach ($clients_list as $client): ?>
            <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm hover:shadow-md hover:border-saudi transition flex flex-col justify-between">
                <div>
                    <div class="w-12 h-12 bg-charcoal text-saudi font-bold text-lg rounded-lg flex items-center justify-center mb-4">
                        <?= strtoupper(substr($client['name'], 0, 2)) ?>
                    </div>
                    <h3 class="font-bold text-charcoal text-base mb-1"><?= $client['name'] ?></h3>
                    <span class="inline-block text-xs font-semibold px-2 py-0.5 bg-offwhite text-saudi rounded mb-3 border border-gray-200">
                        <?= $client['sector'] ?>
                    </span>
                    <p class="text-steel text-xs leading-relaxed"><?= $client['desc'] ?></p>
                </div>
                <div class="mt-4 pt-3 border-t border-gray-100 flex items-center justify-between text-xs text-steel">
                    <span>KSA Projects</span>
                    <span class="text-saudi font-bold">Verified Partner</span>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Client Endorsement / Testimonial -->
<section class="py-12 bg-charcoal text-white">
    <div class="container mx-auto px-4 max-w-4xl text-center">
        <svg class="w-10 h-10 text-saudi mx-auto mb-4 opacity-80" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
        <blockquote class="text-lg md:text-xl font-light italic leading-relaxed text-offwhite mb-6">
            <?= $lang==='ar' 
                ? '"تتميز صحراء الحديد بالتزامها الصارم بالجداول الزمنية، وجودة التصنيع العالية وفق أعلى معايير الكود السعودي والجمعية الأمريكية لإنشاءات الفولاذ AISC."'
                : '"Desert Iron has consistently demonstrated exceptional structural fabrication quality, meeting strict Saudi Aramco standards and AISC tolerances for our industrial warehouse projects in Riyadh."' ?>
        </blockquote>
        <div class="font-bold text-saudi text-sm uppercase tracking-wider">Project Director</div>
        <div class="text-steel text-xs">Industrial Infrastructure Expansion Project, KSA</div>
    </div>
</section>

<!-- CTA -->
<section class="py-12 bg-saudi text-white text-center">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl md:text-3xl font-bold mb-3 <?= $headingFontClass ?>">
            <?= $lang==='ar' ? 'هل أنت جاهز للعمل معنا؟' : 'Become a Valued Partner' ?>
        </h2>
        <p class="text-white/80 max-w-xl mx-auto text-sm mb-6">
            <?= $lang==='ar' ? 'تواصل مع فريق مبيعات الهندسة لتزويدكم بالملف التعريفي والاعتمادات الرسمية' : 'Request our complete vendor prequalification packet and company profile.' ?>
        </p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="contact.php" class="bg-white text-charcoal font-bold px-6 py-3 rounded-lg hover:bg-offwhite transition text-sm">
                <?= $lang==='ar' ? 'تواصل معنا' : 'Contact Our Sales Team' ?>
            </a>
            <a href="quote.php" class="bg-charcoal text-white font-bold px-6 py-3 rounded-lg hover:bg-gray-900 transition text-sm">
                <?= $lang==='ar' ? 'طلب عرض سعر' : 'Submit RFQ' ?>
            </a>
        </div>
    </div>
</section>

<?php require_once 'footer.php'; ?>
