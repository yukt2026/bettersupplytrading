<?php
/**
 * Better Supply Trading Establishment - Privacy Policy View (views/privacy.php)
 * DRAFT - LEGAL REVIEW REQUIRED
 */

$page = 'privacy';
require_once __DIR__ . '/../header.php';
$headingFont = ($lang === 'ar') ? 'font-arabic font-bold' : 'font-heading font-bold';
?>

<section class="py-16 bg-slate-950 text-white border-b border-slate-800">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="inline-block px-3 py-1 rounded bg-amber-950 text-amber-300 border border-amber-500/40 text-xs font-bold font-mono uppercase tracking-wider mb-4">
            <?= t('pages.privacy.disclaimer') ?>
        </div>
        <h1 class="text-3xl sm:text-4xl font-extrabold text-white mb-2">
            <?= t('pages.privacy.heading') ?>
        </h1>
        <p class="text-sm text-slate-400 mb-8"><?= t('pages.privacy.subheading') ?></p>
        
        <div class="p-8 rounded-2xl bg-slate-900 border border-slate-800 text-slate-300 text-sm leading-relaxed whitespace-pre-line space-y-4 font-light">
            <?= htmlspecialchars(t('pages.privacy.content')) ?>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/../footer.php'; ?>
