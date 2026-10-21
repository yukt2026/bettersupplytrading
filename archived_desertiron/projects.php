<?php
$page_title = "Our Projects | Desert Iron";
require_once 'header.php';

$categories = ['All', 'Industrial', 'Commercial', 'Infrastructure', 'Warehousing'];
?>
<!-- Cinematic Hero Banner -->
<section class="relative min-h-[45vh] flex items-center bg-charcoal overflow-hidden pt-24 pb-12">
    <div class="absolute inset-0 z-0">
        <img src="public/images/hero_riyadh_steel.jpg" alt="Our Projects" class="w-full h-full object-cover opacity-75">
        <div class="absolute inset-0 bg-gradient-to-t from-charcoal/90 via-charcoal/40 to-charcoal/20"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10 text-center" >
        <div class="flex items-center justify-center gap-4 mb-5">
            <div class="w-12 h-[3px] bg-saudi"></div>
            <span class="text-white opacity-90 text-xs md:text-sm font-bold uppercase tracking-widest drop-shadow-sm">
                <?= $lang === 'ar' ? 'سجل مشاريع المجموعة' : 'Group Project Portfolio' ?>
            </span>
            <div class="w-12 h-[3px] bg-saudi"></div>
        </div>
        <h1 class="text-4xl md:text-5xl lg:text-6xl text-white font-bold mb-6 leading-tight drop-shadow-lg">
            <?= $lang === 'ar' ? 'سجل الأعمال والتطبيقات' : 'Projects & Group Experience' ?>
        </h1>
        <p class="text-gray-300 max-w-2xl mx-auto text-sm md:text-base font-light leading-relaxed">
            <?= $lang === 'ar' ? 'استكشف سجل مشاريع المجموعة في الهياكل الفولاذية، والمباني مسبقة الصنع (PEB)، والإنشاءات الصناعية والتجارية (صور توضيحية لتطبيقات المشاريع).' : 'Explore our Group Experience portfolio in structural steel, pre-engineered buildings (PEB), and industrial/commercial construction (illustrative representative imagery).' ?>
        </p>
    </div>
</section>

<!-- Projects Gallery Section -->
<section class="py-12 md:py-16 lg:py-24 bg-white">
    <div class="container mx-auto px-4 lg:px-6 max-w-7xl">
        
        <!-- Mobile Horizontal Scrollable Chip Row -->
        <div class="flex overflow-x-auto no-scrollbar gap-2 mb-10 pb-2 justify-start sm:justify-center">
            <?php foreach($categories as $idx => $cat): ?>
            <button class="filter-btn shrink-0 px-5 py-2.5 rounded-sm border text-xs font-bold uppercase tracking-wider transition-colors min-h-[44px] <?= $idx === 0 ? 'bg-saudi text-white border-saudi' : 'bg-offwhite border-gray-200 text-charcoal hover:border-saudi' ?>" data-filter="<?= strtolower($cat) ?>"><?= $cat ?></button>
            <?php endforeach; ?>
        </div>
        
        <!-- Responsive Grid (1 col mobile, 2 col sm, 3 col lg) -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6" id="projects-grid">
            <?php
            $projects = [
                ['title' => 'Doha Industrial Facility', 'cat' => 'industrial', 'loc' => 'Qatar', 'img' => 'structural_steel.jpg', 'group' => true],
                ['title' => 'Commercial Tower Framework', 'cat' => 'commercial', 'loc' => 'Qatar', 'img' => 'civil_construction.jpg', 'group' => true],
                ['title' => 'Logistics Center PEB', 'cat' => 'warehousing', 'loc' => 'Qatar', 'img' => 'peb_warehouse.jpg', 'group' => true],
                ['title' => 'Pipeline Support Structures', 'cat' => 'infrastructure', 'loc' => 'Qatar', 'img' => 'architectural_work.jpg', 'group' => true],
                ['title' => 'Cold Storage Facility', 'cat' => 'warehousing', 'loc' => 'Qatar', 'img' => 'trading_warehouse.jpg', 'group' => true],
                ['title' => 'Refinery Structural Works', 'cat' => 'industrial', 'loc' => 'Qatar', 'img' => 'shutdown_maintenance.jpg', 'group' => true],
            ];
            foreach($projects as $i => $p):
            ?>
            <a href="quote.php" class="project-item block group relative overflow-hidden rounded-sm bg-charcoal aspect-[4/3] shadow-sm hover:shadow-xl transition-all duration-300" data-category="<?= $p['cat'] ?>">
                <img src="public/images/<?= $p['img'] ?>" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition duration-700" alt="Illustrative Project">
                <div class="absolute inset-0 bg-gradient-to-t from-charcoal/90 via-charcoal/30 to-transparent"></div>
                <div class="absolute bottom-0 start-0 end-0 p-6">
                    <span class="text-saudi text-[10px] font-bold uppercase tracking-widest mb-2 inline-block bg-saudi/10 border border-saudi/20 px-2 py-0.5 rounded-sm text-saudi"><?= ucfirst($p['cat']) ?></span>
                    <?php if(isset($p['group']) && $p['group']): ?>
                    <span class="text-white text-[10px] font-bold uppercase tracking-widest mb-2 inline-block bg-charcoal/50 border border-gray-500 px-2 py-0.5 rounded-sm ms-2">Group Experience - Qatar</span>
                    <?php endif; ?>
                    <h3 class="text-white text-lg font-bold mb-1 leading-tight"><?= $p['title'] ?></h3>
                    <p class="text-gray-400 text-xs font-light"><?= $p['loc'] ?></p>
                </div>
            </a>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const btns = document.querySelectorAll('.filter-btn');
        const items = document.querySelectorAll('.project-item');
        
        btns.forEach(btn => {
            btn.addEventListener('click', () => {
                btns.forEach(b => { 
                    b.classList.remove('bg-saudi', 'text-white', 'border-saudi'); 
                    b.classList.add('bg-offwhite', 'text-charcoal', 'border-gray-200'); 
                });
                btn.classList.remove('bg-offwhite', 'text-charcoal', 'border-gray-200');
                btn.classList.add('bg-saudi', 'text-white', 'border-saudi');
                
                const filter = btn.getAttribute('data-filter');
                items.forEach(item => {
                    if(filter === 'all' || item.getAttribute('data-category') === filter) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    });
</script>

<?php require_once 'footer.php'; ?>
