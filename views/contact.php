<?php
/**
 * Better Supply Corporation - Contact & RFQ View (views/contact.php)
 * Implements PDF Page 14 / Section 02.
 */

$page = 'contact';
require_once __DIR__ . '/../header.php';
$headingFont = ($lang === 'ar') ? 'font-arabic font-bold' : 'font-heading font-bold';
$checklist = t('pages.contact.checklist');
$preset_category = $_GET['category'] ?? '';
$preset_product = $_GET['product'] ?? '';
?>

<!-- Header Banner -->
<section class="relative bg-slate-950 text-white py-16 border-b border-slate-800 overflow-hidden">
    <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="text-xs font-bold uppercase tracking-widest text-emerald-400 mb-2 block"><?= t('nav.contact') ?></span>
        <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight text-white mb-4">
            <?= t('pages.contact.heading') ?>
        </h1>
        <p class="text-base sm:text-lg text-slate-300 max-w-2xl mx-auto font-light leading-relaxed">
            <?= t('pages.contact.intro') ?>
        </p>
    </div>
</section>

<!-- Main Contact & RFQ Section -->
<section class="py-16 bg-slate-950 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            
            <!-- Left Column: Guidelines & Contact Details (5 cols) -->
            <div class="lg:col-span-5 space-y-8">
                
                <!-- Checklist Card -->
                <div class="p-6 sm:p-8 rounded-2xl bg-slate-900 border border-slate-800 space-y-4">
                    <h2 class="text-lg font-bold text-white"><?= t('pages.contact.checklist_title') ?></h2>
                    <ul class="space-y-3">
                        <?php foreach ($checklist as $item): ?>
                        <li class="flex items-start gap-2.5 text-xs sm:text-sm text-slate-300">
                            <svg class="w-4 h-4 text-emerald-400 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span><?= htmlspecialchars($item) ?></span>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Verified Contact Info Card -->
                <div class="p-6 sm:p-8 rounded-2xl bg-slate-900 border border-slate-800 space-y-5">
                    <div>
                        <span class="text-[11px] font-mono uppercase tracking-wider text-emerald-400 block mb-1">
                            <?= t('pages.contact.dammam_hub') ?>
                        </span>
                        <h3 class="text-xl font-bold text-white"><?= t('company_name') ?></h3>
                    </div>

                    <div class="space-y-4 text-xs sm:text-sm text-slate-300">
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-emerald-400 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                            <div>
                                <span class="block text-slate-500 font-semibold text-[11px] uppercase tracking-wider"><?= ($lang === 'ar') ? 'العنوان المكتبي:' : 'Office Address:' ?></span>
                                <span><?= ($lang === 'ar') ? $site_config['contacts']['address_ar'] : $site_config['contacts']['address_en'] ?></span>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-emerald-400 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            <div>
                                <span class="block text-slate-500 font-semibold text-[11px] uppercase tracking-wider"><?= ($lang === 'ar') ? 'البريد الإلكتروني:' : 'Email / RFQ Routing:' ?></span>
                                <a href="mailto:<?= htmlspecialchars($site_config['contacts']['email']) ?>" class="hover:text-emerald-400 font-mono transition-colors">
                                    <?= htmlspecialchars($site_config['contacts']['email']) ?>
                                </a>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-emerald-400 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            <div>
                                <span class="block text-slate-500 font-semibold text-[11px] uppercase tracking-wider"><?= ($lang === 'ar') ? 'الهاتف / الواتساب:' : 'Phone / WhatsApp:' ?></span>
                                <a href="tel:<?= htmlspecialchars($site_config['contacts']['phone']) ?>" class="hover:text-emerald-400 font-mono transition-colors">
                                    <?= htmlspecialchars($site_config['contacts']['phone']) ?>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="pt-4 border-t border-slate-800 text-[11px] text-slate-500">
                        <?= t('pages.contact.placeholder_disclaimer') ?>
                    </div>
                </div>

            </div>

            <!-- Right Column: Reusable Interactive RFQ Form (7 cols) -->
            <div class="lg:col-span-7">
                <?php 
                $current_page_name = 'contact';
                require __DIR__ . '/partials/rfq_form_partial.php'; 
                ?>
            </div>

        </div>

    </div>
</section>

<?php require_once __DIR__ . '/../footer.php'; ?>
