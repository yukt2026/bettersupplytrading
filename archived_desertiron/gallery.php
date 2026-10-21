<?php 
$page_title = 'Our Gallery | Desert Iron'; 
require_once 'header.php'; 

// Approved real project photographs (excluding 3D renders, Qatar official documents/approvals, org charts, and divider graphics)
$approved_numbers = [
    2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14,
    17, 18, 20, 22, 23, 24, 25,
    28, 29, 30, 31, 32, 34, 35, 36, 37, 38, 39, 40, 41,
    60, 61, 62, 65, 66, 67, 69, 70, 71,
    78, 80, 81, 82, 85, 87
];
$image_files = [];
foreach ($approved_numbers as $num) {
    $path = "pastactivity/images/image{$num}.jpg";
    if (file_exists($path)) {
        $image_files[] = $path;
    }
}
?>

<!-- Cinematic Hero Banner -->
<section class="relative min-h-[40vh] flex items-center bg-charcoal overflow-hidden pt-24 pb-12">
    <div class="absolute inset-0 z-0">
        <img src="public/images/contact_hq.jpg" alt="Gallery" class="w-full h-full object-cover opacity-60">
        <div class="absolute inset-0 bg-gradient-to-t from-charcoal/90 via-charcoal/50 to-charcoal/20"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10 text-center" >
        <div class="flex items-center justify-center gap-4 mb-4">
            <div class="w-12 h-[3px] bg-saudi"></div>
            <span class="text-white opacity-90 text-xs md:text-sm font-bold uppercase tracking-widest drop-shadow-sm">
                <?= $lang === 'ar' ? 'معرض الصور' : 'Visual Showcase' ?>
            </span>
            <div class="w-12 h-[3px] bg-saudi"></div>
        </div>
        <h1 class="text-4xl md:text-5xl lg:text-6xl text-white font-bold mb-4 leading-tight drop-shadow-lg <?= $headingFontClass ?>">
            <?= $lang === 'ar' ? 'معرض مشاريعنا' : 'Our Gallery' ?>
        </h1>
        <p class="text-gray-300 max-w-2xl mx-auto text-sm md:text-base font-light leading-relaxed">
            <?= $lang === 'ar' ? 'استعرض مجموعة من الصور الميدانية المعتمدة لمشاريع الهياكل الفولاذية والإنشاءات ضمن سجل أعمال المجموعة.' : 'Browse approved on-site project photographs showcasing structural steel, PEB, and construction works from our Group & Past Activity portfolio.' ?>
        </p>
    </div>
</section>

<!-- Gallery Masonry Grid -->
<section class="py-16 bg-offwhite">
    <div class="container mx-auto px-4 lg:px-8 max-w-7xl">
        <div class="columns-1 sm:columns-2 md:columns-3 lg:columns-4 gap-6 space-y-6">
            <?php foreach($image_files as $img): ?>
                <a href="<?= htmlspecialchars($img) ?>" class="glightbox break-inside-avoid group relative rounded-sm overflow-hidden bg-gray-200 shadow-sm hover:shadow-2xl transition-all duration-300 block">
                    <img src="<?= htmlspecialchars($img) ?>" alt="Approved Project Photograph" class="w-full h-auto object-cover group-hover:scale-105 transition-transform duration-700" loading="lazy">
                    <div class="absolute inset-0 bg-charcoal/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center cursor-pointer pointer-events-none">
                        <div class="w-12 h-12 rounded-full border border-white flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path></svg>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
            
            <?php if(empty($image_files)): ?>
                <p class="text-center text-gray-500 w-full col-span-full">No images found in the gallery.</p>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- GLightbox -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const lightbox = GLightbox({
            selector: '.glightbox',
            touchNavigation: true,
            loop: true,
            zoomable: true
        });
    });
</script>

<?php require_once 'footer.php'; ?>
