<?php
/**
 * Better Supply Corporation - Reusable RFQ Form Partial
 * Conforms 100% to Handover PDF Section 04 RFQ Specifications.
 */
$preset_category = $preset_category ?? '';
$preset_product = $preset_product ?? '';
$current_page_name = $page ?? 'general';
?>
<div id="rfq-form" class="bg-slate-900 border border-slate-800 rounded-2xl p-5 sm:p-10 text-white shadow-2xl relative overflow-hidden w-full max-w-full">
    <!-- Subtle background accent (clamped inside container) -->
    <div class="absolute right-0 top-0 w-64 h-64 bg-emerald-500/5 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-3xl mb-8 relative z-10">
        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-emerald-950/80 text-emerald-400 border border-emerald-500/30 uppercase tracking-wider mb-3">
            <?= ($lang === 'ar') ? 'بوابة المشتريات والتسعير الصناعي' : 'B2B Sourcing & Procurement Portal' ?>
        </span>
        <h2 class="text-2xl sm:text-3xl font-extrabold tracking-tight text-white mb-2">
            <?= t('rfq_form.title') ?>
        </h2>
        <p class="text-slate-400 text-sm sm:text-base leading-relaxed">
            <?= t('rfq_form.subtitle') ?>
        </p>
    </div>

    <!-- Status message feedback container -->
    <div id="rfq-status-message" class="hidden"></div>

    <form id="commercial-rfq-form" action="<?= asset_url('rfq-handler.php') ?>" method="POST" enctype="multipart/form-data" class="space-y-6 relative z-10">
        <!-- Anti-spam Honeypot (hidden from real users) -->
        <div style="display:none !important;" aria-hidden="true">
            <label for="website_url_hp">Leave empty</label>
            <input type="text" id="website_url_hp" name="website_url_hp" tabindex="-1" autocomplete="off">
        </div>

        <input type="hidden" name="source_page" value="<?= htmlspecialchars($current_page_name) ?>">

        <!-- Row 1: Contact Name & Company -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label for="rfq_name" class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">
                    <?= t('rfq_form.full_name') ?> <span class="text-emerald-400">*</span>
                </label>
                <input type="text" id="rfq_name" name="name" required placeholder="<?= t('rfq_form.full_name_placeholder') ?>" class="w-full px-4 py-3 bg-slate-800/90 border border-slate-700 rounded-lg text-white text-sm focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent transition-all">
            </div>
            <div>
                <label for="rfq_company" class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">
                    <?= t('rfq_form.company_name') ?> <span class="text-emerald-400">*</span>
                </label>
                <input type="text" id="rfq_company" name="company" required placeholder="<?= t('rfq_form.company_name_placeholder') ?>" class="w-full px-4 py-3 bg-slate-800/90 border border-slate-700 rounded-lg text-white text-sm focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent transition-all">
            </div>
        </div>

        <!-- Row 2: Email & Phone -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label for="rfq_email" class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">
                    <?= t('rfq_form.email') ?> <span class="text-emerald-400">*</span>
                </label>
                <input type="email" id="rfq_email" name="email" required placeholder="<?= t('rfq_form.email_placeholder') ?>" class="w-full px-4 py-3 bg-slate-800/90 border border-slate-700 rounded-lg text-white text-sm focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent transition-all">
            </div>
            <div>
                <label for="rfq_phone" class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">
                    <?= t('rfq_form.phone') ?> <span class="text-emerald-400">*</span>
                </label>
                <input type="tel" id="rfq_phone" name="phone" required placeholder="<?= t('rfq_form.phone_placeholder') ?>" class="w-full px-4 py-3 bg-slate-800/90 border border-slate-700 rounded-lg text-white text-sm focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent transition-all">
            </div>
        </div>

        <!-- Row 3: Product Category -->
        <div>
            <label for="rfq_category" class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">
                <?= t('rfq_form.category') ?> <span class="text-emerald-400">*</span>
            </label>
            <select id="rfq_category" name="category" required class="w-full px-4 py-3 bg-slate-800/90 border border-slate-700 rounded-lg text-white text-sm focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent transition-all">
                <option value=""><?= t('rfq_form.select_category') ?></option>
                <?php foreach (t('rfq_form.categories') as $cat_key => $cat_label): ?>
                    <option value="<?= $cat_key ?>" <?= ($preset_category === $cat_key) ? 'selected' : '' ?>>
                        <?= $cat_label ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <!-- Row 4: Detailed Specification & Product Name -->
        <div>
            <label for="rfq_spec" class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">
                <?= t('rfq_form.product_spec') ?> <span class="text-emerald-400">*</span>
            </label>
            <textarea id="rfq_spec" name="product_spec" rows="3" required placeholder="<?= t('rfq_form.product_spec_placeholder') ?>" class="w-full px-4 py-3 bg-slate-800/90 border border-slate-700 rounded-lg text-white text-sm focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent transition-all"><?= htmlspecialchars($preset_product) ?></textarea>
        </div>

        <!-- Row 5: Quantity & Unit of Measure (avoiding preassuming unit) -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <div>
                <label for="rfq_quantity" class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">
                    <?= t('rfq_form.quantity') ?> <span class="text-emerald-400">*</span>
                </label>
                <input type="number" step="any" min="1" id="rfq_quantity" name="quantity" required placeholder="<?= t('rfq_form.quantity_placeholder') ?>" class="w-full px-4 py-3 bg-slate-800/90 border border-slate-700 rounded-lg text-white text-sm focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent transition-all">
            </div>
            <div>
                <label for="rfq_unit" class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">
                    <?= t('rfq_form.unit') ?> <span class="text-emerald-400">*</span>
                </label>
                <select id="rfq_unit" name="unit" required class="w-full px-4 py-3 bg-slate-800/90 border border-slate-700 rounded-lg text-white text-sm focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent transition-all">
                    <option value=""><?= t('rfq_form.select_unit') ?></option>
                    <?php foreach (t('rfq_form.units') as $u_key => $u_val): ?>
                        <option value="<?= $u_key ?>"><?= $u_val ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>

        <!-- Row 6: Packaging & Delivery City / Country -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label for="rfq_packaging" class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">
                    <?= t('rfq_form.packaging_format') ?>
                </label>
                <input type="text" id="rfq_packaging" name="packaging" placeholder="<?= t('rfq_form.packaging_placeholder') ?>" class="w-full px-4 py-3 bg-slate-800/90 border border-slate-700 rounded-lg text-white text-sm focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent transition-all">
            </div>
            <div>
                <label for="rfq_destination" class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">
                    <?= t('rfq_form.destination_city') ?> <span class="text-emerald-400">*</span>
                </label>
                <input type="text" id="rfq_destination" name="destination" required placeholder="<?= t('rfq_form.destination_placeholder') ?>" class="w-full px-4 py-3 bg-slate-800/90 border border-slate-700 rounded-lg text-white text-sm focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent transition-all">
            </div>
        </div>

        <!-- Row 7: Schedule & Optional Attachment -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label for="rfq_delivery_date" class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">
                    <?= t('rfq_form.delivery_date') ?>
                </label>
                <input type="text" id="rfq_delivery_date" name="delivery_date" placeholder="<?= t('rfq_form.delivery_date_placeholder') ?>" class="w-full px-4 py-3 bg-slate-800/90 border border-slate-700 rounded-lg text-white text-sm focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent transition-all">
            </div>
            <div>
                <label for="rfq_attachment" class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">
                    <?= t('rfq_form.attachment') ?>
                </label>
                <input type="file" id="rfq_attachment" name="attachment" accept=".pdf,.doc,.docx,.xls,.xlsx,.jpg,.jpeg,.png,.webp" class="w-full px-3 py-2 bg-slate-800/90 border border-slate-700 rounded-lg text-slate-300 text-xs focus:outline-none focus:ring-2 focus:ring-emerald-500 file:mr-4 file:py-1.5 file:px-3 file:rounded-md file:border-0 file:text-xs file:font-semibold file:bg-slate-700 file:text-white hover:file:bg-slate-600 cursor-pointer">
                <span class="block text-[11px] text-slate-500 mt-1"><?= t('rfq_form.attachment_hint') ?></span>
            </div>
        </div>

        <!-- Row 8: Privacy Consent Checkbox -->
        <div class="pt-2">
            <label class="flex items-start gap-3 cursor-pointer select-none">
                <input type="checkbox" name="privacy_consent" value="1" required class="mt-1 w-4 h-4 rounded text-emerald-600 focus:ring-emerald-500 bg-slate-800 border-slate-700">
                <span class="text-xs text-slate-400 leading-normal">
                    <?= t('rfq_form.privacy_consent') ?>
                </span>
            </label>
        </div>

        <!-- Submit Button -->
        <div class="pt-4">
            <button type="submit" class="w-full sm:w-auto px-8 py-3.5 bg-brandgreen hover:bg-emerald-600 text-white font-bold text-sm rounded-lg shadow-lg hover:shadow-emerald-900/30 transition-all focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500 flex items-center justify-center gap-2">
                <span><?= t('rfq_form.submit') ?></span>
                <svg class="w-4 h-4 rtl:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </button>
        </div>
    </form>
</div>
