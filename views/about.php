<?php
/**
 * Better Supply Corporation - About Us View (views/about.php)
 * Faithful implementation of PDF Page 02 / Section 02.
 */

$page = 'about';
require_once __DIR__ . '/../header.php';
$headingFont = ($lang === 'ar') ? 'font-arabic font-bold' : 'font-heading font-bold';
?>

<!-- Header Banner -->
<section class="relative bg-slate-950 text-white py-20 border-b border-slate-800 overflow-hidden">
    <div class="absolute inset-0 z-0 opacity-25">
        <picture>
            <source srcset="<?= img_url('banner_partnerships.webp') ?>" type="image/webp">
            <img src="<?= img_url('banner_partnerships.jpg') ?>" alt="Corporate architectural facade" class="w-full h-full object-cover">
        </picture>
        <div class="absolute inset-0 bg-slate-950/80"></div>
    </div>
    <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="text-xs font-bold uppercase tracking-widest text-emerald-400 mb-2 block"><?= t('nav.about') ?></span>
        <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight text-white mb-4">
            <?= t('pages.about.heading') ?>
        </h1>
        <p class="text-base sm:text-lg text-slate-300 max-w-3xl mx-auto font-light leading-relaxed">
            <?= t('pages.about.lead') ?>
        </p>
    </div>
</section>

<!-- Company Activities & Scope -->
<section class="py-16 bg-slate-900 text-white border-b border-slate-800">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-slate-950 border border-slate-800 rounded-2xl p-8 sm:p-10 shadow-xl space-y-6">
            <h2 class="text-xl sm:text-2xl font-bold text-white"><?= ($lang === 'ar') ? 'نطاق الأنشطة التجارية' : 'Business Scope & Capabilities' ?></h2>
            <p class="text-sm sm:text-base text-slate-300 leading-relaxed">
                <?= t('pages.about.scope') ?>
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-4 border-t border-slate-800">
                <div class="p-6 rounded-xl bg-slate-900 border border-slate-800">
                    <h3 class="text-lg font-bold text-emerald-400 mb-2"><?= t('pages.about.mission_title') ?></h3>
                    <p class="text-xs sm:text-sm text-slate-300 leading-relaxed"><?= t('pages.about.mission_desc') ?></p>
                </div>
                <div class="p-6 rounded-xl bg-slate-900 border border-slate-800">
                    <h3 class="text-lg font-bold text-emerald-400 mb-2"><?= t('pages.about.vision_title') ?></h3>
                    <p class="text-xs sm:text-sm text-slate-300 leading-relaxed"><?= t('pages.about.vision_desc') ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How We Work (4-Step Workflow) -->
<section class="py-20 bg-slate-950 text-white border-b border-slate-800">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <span class="text-xs font-bold uppercase tracking-widest text-emerald-400 mb-2 block"><?= ($lang === 'ar') ? 'إجراءات العمل' : 'Execution Discipline' ?></span>
            <h2 class="text-2xl sm:text-4xl font-extrabold text-white tracking-tight">
                <?= t('pages.about.workflow_title') ?>
            </h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <?php foreach (t('pages.about.steps') as $step): ?>
            <div class="p-6 rounded-2xl bg-slate-900 border border-slate-800 flex flex-col justify-between">
                <div>
                    <span class="text-2xl font-extrabold text-emerald-400 font-mono mb-4 block"><?= $step['num'] ?></span>
                    <h3 class="text-base font-bold text-white mb-2"><?= $step['title'] ?></h3>
                    <p class="text-xs text-slate-400 leading-relaxed"><?= $step['desc'] ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Vision 2030 and Industrial Development -->
<section class="py-16 bg-slate-900 text-white border-b border-slate-800">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4">
        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-emerald-950 text-emerald-400 border border-emerald-500/30 uppercase tracking-widest">
            <?= ($lang === 'ar') ? 'التنمية الاقتصادية' : 'Economic Development' ?>
        </span>
        <h2 class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight">
            <?= t('pages.about.vision_section_title') ?>
        </h2>
        <p class="text-sm sm:text-base text-slate-300 leading-relaxed">
            <?= t('pages.about.vision_section_text') ?>
        </p>
        <div class="pt-6">
            <a href="<?= route_url('partners') ?>" class="inline-flex items-center gap-2 px-8 py-3.5 bg-brandgreen hover:bg-emerald-600 text-white font-bold text-sm rounded-lg transition-all">
                <span><?= t('buttons.discuss_partnership') ?></span>
                <span class="rtl:rotate-180">&rarr;</span>
            </a>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/../footer.php'; ?>
