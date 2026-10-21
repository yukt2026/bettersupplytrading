<?php
/**
 * Better Supply Trading Establishment - Partnerships View (views/partners.php)
 * Implements PDF Page 13 / Section 02.
 */

$page = 'partners';
require_once __DIR__ . '/../header.php';
$headingFont = ($lang === 'ar') ? 'font-arabic font-bold' : 'font-heading font-bold';
$criteria = t('pages.partners.criteria');
?>

<!-- Header Banner -->
<section class="relative bg-slate-950 text-white py-20 border-b border-slate-800 overflow-hidden">
    <div class="absolute inset-0 z-0 opacity-25">
        <picture>
            <source srcset="<?= img_url('banner_partnerships.webp') ?>" type="image/webp">
            <img src="<?= img_url('banner_partnerships.jpg') ?>" alt="Architectural abstract business partnership facade" class="w-full h-full object-cover">
        </picture>
        <div class="absolute inset-0 bg-slate-950/80"></div>
    </div>
    <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="text-xs font-bold uppercase tracking-widest text-emerald-400 mb-2 block"><?= t('nav.partners') ?></span>
        <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight text-white mb-4">
            <?= t('pages.partners.heading') ?>
        </h1>
        <p class="text-base sm:text-lg text-slate-300 max-w-3xl mx-auto font-light leading-relaxed">
            <?= t('pages.partners.intro') ?>
        </p>
    </div>
</section>

<!-- Objective & Partnership Model -->
<section class="py-16 bg-slate-900 text-white border-b border-slate-800">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="p-8 sm:p-10 rounded-2xl bg-slate-950 border border-slate-800 space-y-4">
            <h2 class="text-xl sm:text-2xl font-bold text-white"><?= ($lang === 'ar') ? 'تطوير علاقات التوريد الدولية' : 'Developing International Sourcing Relationships' ?></h2>
            <p class="text-sm sm:text-base text-slate-300 leading-relaxed">
                <?= t('pages.partners.objective') ?>
            </p>
        </div>
    </div>
</section>

<!-- Partner Evaluation Criteria -->
<section class="py-20 bg-slate-950 text-white border-b border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mb-12">
            <span class="text-xs font-bold uppercase tracking-widest text-emerald-400 mb-2 block"><?= ($lang === 'ar') ? 'المعايير المعتمدة' : 'Selection Standards' ?></span>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-white">
                <?= t('pages.partners.criteria_title') ?>
            </h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <?php foreach ($criteria as $idx => $crit): ?>
            <div class="p-6 rounded-2xl bg-slate-900 border border-slate-800 flex flex-col justify-between">
                <div>
                    <span class="text-2xl font-extrabold text-emerald-400 font-mono mb-4 block">0<?= $idx + 1 ?></span>
                    <h3 class="text-base font-bold text-white mb-2"><?= htmlspecialchars($crit['title']) ?></h3>
                    <p class="text-xs text-slate-400 leading-relaxed"><?= htmlspecialchars($crit['desc']) ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="pt-16 text-center">
            <a href="<?= route_url('contact') ?>#rfq-form" class="inline-flex items-center gap-2 px-8 py-3.5 bg-brandgreen hover:bg-emerald-600 text-white font-bold text-sm rounded-lg transition-all">
                <span><?= t('buttons.discuss_partnership') ?></span>
                <span class="rtl:rotate-180">&rarr;</span>
            </a>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/../footer.php'; ?>
