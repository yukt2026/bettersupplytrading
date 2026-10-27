<?php
/**
 * Better Supply Trading Establishment - Terms and Conditions View (views/terms.php)
 * Finalized Commercial Sourcing & Quotation Terms.
 */

$page = 'terms';
require_once __DIR__ . '/../header.php';
$headingFont = ($lang === 'ar') ? 'font-arabic font-bold' : 'font-heading font-bold';
?>

<section class="py-16 bg-bsivory text-bscharcoal border-b border-stone-200">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold bg-white text-bsemerald border border-stone-200 uppercase tracking-wider mb-4 shadow-xs">
            <span class="w-2 h-2 rounded-full bg-bsemerald"></span>
            <span><?= ($lang === 'ar') ? 'الشروط والضوابط التجارية' : 'Commercial Sourcing Terms' ?></span>
        </div>
        <h1 class="text-3xl sm:text-4xl font-extrabold text-bscharcoal mb-2 <?= $headingFont ?>">
            <?= t('pages.terms.heading') ?>
        </h1>
        <p class="text-sm text-bsmuted mb-8"><?= t('pages.terms.subheading') ?></p>
        
        <div class="p-8 sm:p-10 rounded-2xl bg-white border border-stone-200 text-slate-700 text-sm leading-relaxed whitespace-pre-line space-y-4 font-normal shadow-sm">
            <?= htmlspecialchars(t('pages.terms.content')) ?>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/../footer.php'; ?>
