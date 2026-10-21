<?php 
$page_title = 'Group Experience & Past Activity | Desert Iron'; 
require_once 'header.php'; 
?>

<!-- Cinematic Hero Banner -->
<section class="relative min-h-[40vh] flex items-center bg-charcoal overflow-hidden pt-24 pb-12">
    <div class="absolute inset-0 z-0">
        <img src="public/images/contact_hq.jpg" alt="Group Experience" class="w-full h-full object-cover opacity-60">
        <div class="absolute inset-0 bg-gradient-to-t from-charcoal/90 via-charcoal/50 to-charcoal/20"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10 text-center" data-aos="fade-up">
        <div class="flex items-center justify-center gap-4 mb-4">
            <div class="w-12 h-[3px] bg-saudi"></div>
            <span class="text-white opacity-90 text-xs md:text-sm font-bold uppercase tracking-widest drop-shadow-sm">
                <?= $lang === 'ar' ? 'سجل الأعمال السابقة' : 'Past Activity & Track Record' ?>
            </span>
            <div class="w-12 h-[3px] bg-saudi"></div>
        </div>
        <h1 class="text-4xl md:text-5xl lg:text-6xl text-white font-bold mb-4 leading-tight drop-shadow-lg <?= $headingFontClass ?>">
            <?= $lang === 'ar' ? 'خبرات المجموعة السابقة' : 'Group Experience (Safeera)' ?>
        </h1>
        <p class="text-gray-300 max-w-2xl mx-auto text-sm md:text-base font-light leading-relaxed">
            <?= $lang === 'ar' ? 'استعرض ملفنا التعريفي الشامل والمشاريع والشهادات الخاصة بشركتنا الشقيقة في قطر، سفيرة للمقاولات.' : 'Explore the comprehensive profile, projects, and certifications of our associated Qatar company, Safeera Contracting.' ?>
        </p>
    </div>
</section>

<!-- Past Activity Document Viewer -->
<section class="py-12 bg-offwhite">
    <div class="container mx-auto px-4 lg:px-8">
        
        <div class="bg-white rounded-lg shadow-xl overflow-hidden border border-gray-200" data-aos="fade-up" data-aos-duration="1000">
            <!-- Toolbar -->
            <div class="bg-charcoal text-white p-4 flex flex-col sm:flex-row justify-between items-center gap-4">
                <div class="flex items-center gap-3">
                    <svg class="w-6 h-6 text-saudi" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    <span class="font-semibold tracking-wide">Safeera Profile & Past Activity.pdf</span>
                </div>
                <a href="pastactivity/SafeeraProfileold2026.html" target="_blank" class="inline-flex items-center gap-2 bg-saudi hover:bg-emerald-600 text-white px-4 py-2 rounded text-sm font-bold transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                    <?= $lang === 'ar' ? 'فتح في نافذة جديدة' : 'Open in Full Screen' ?>
                </a>
            </div>
            
            <!-- Document iFrame -->
            <div class="w-full h-[80vh] bg-gray-100 overflow-hidden relative">
                <!-- Loader -->
                <div class="absolute inset-0 flex items-center justify-center pointer-events-none" id="iframe-loader">
                    <div class="w-10 h-10 border-4 border-saudi border-t-transparent rounded-full animate-spin"></div>
                </div>
                <!-- Iframe -->
                <iframe 
                    src="pastactivity/SafeeraProfileold2026.html" 
                    class="w-full h-full border-none"
                    onload="document.getElementById('iframe-loader').style.display='none';"
                ></iframe>
            </div>
        </div>

    </div>
</section>

<?php require_once 'footer.php'; ?>
