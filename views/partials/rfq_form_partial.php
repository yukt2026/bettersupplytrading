<?php
/**
 * Better Supply Trading Establishment - Reusable RFQ Form Partial
 * Conforms 100% to Website Enhancement Requirements Section 06.
 */
$preset_category = $preset_category ?? '';
$preset_product = $preset_product ?? '';
$current_page_name = $page ?? 'general';
?>
<div id="rfq-form" class="bg-white border border-stone-200 rounded-2xl p-6 sm:p-10 text-bscharcoal shadow-xl relative overflow-hidden w-full max-w-full">
    <!-- Subtle top decorative bar with brand emerald & gold -->
    <div class="absolute top-0 left-0 right-0 h-1.5 bg-gradient-to-r from-bsemerald via-bsgold to-bsforest"></div>

    <div class="max-w-3xl mb-8 relative z-10 pt-2">
        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-stone-100 text-bsemerald border border-stone-300 uppercase tracking-wider mb-3">
            <span class="w-2 h-2 rounded-full bg-bsemerald"></span>
            <?= ($lang === 'ar') ? 'بوابة طلب عروض الأسعار والتوريد التجاري' : 'B2B Sourcing & Commercial RFQ Portal' ?>
        </span>
        <h2 class="text-2xl sm:text-3xl font-extrabold tracking-tight text-bscharcoal mb-2">
            <?= t('rfq_form.title') ?>
        </h2>
        <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
            <?= t('rfq_form.subtitle') ?>
        </p>
    </div>

    <!-- Status message feedback container -->
    <div id="rfq-status-message" class="hidden mb-6 p-4 rounded-xl text-sm"></div>

    <form id="commercial-rfq-form" action="<?= asset_url('rfq-handler.php') ?>" method="POST" enctype="multipart/form-data" class="space-y-6 relative z-10">
        <!-- Anti-spam Honeypot (hidden from real users) -->
        <div style="display:none !important;" aria-hidden="true">
            <label for="website_url_hp">Leave empty</label>
            <input type="text" id="website_url_hp" name="website_url_hp" tabindex="-1" autocomplete="off">
        </div>

        <input type="hidden" name="source_page" value="<?= htmlspecialchars($current_page_name) ?>">

        <!-- Row 1: Contact Name & Company Name -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label for="rfq_name" class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">
                    <?= t('rfq_form.full_name') ?> <span class="text-red-500">*</span>
                </label>
                <input type="text" id="rfq_name" name="name" required placeholder="<?= t('rfq_form.full_name_placeholder') ?>" class="w-full px-4 py-3 bg-stone-50 border border-stone-300 rounded-lg text-bscharcoal text-sm focus:outline-none focus:ring-2 focus:ring-bsemerald focus:bg-white focus:border-transparent transition-all">
            </div>
            <div>
                <label for="rfq_company" class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">
                    <?= t('rfq_form.company_name') ?> <span class="text-red-500">*</span>
                </label>
                <input type="text" id="rfq_company" name="company" required placeholder="<?= t('rfq_form.company_name_placeholder') ?>" class="w-full px-4 py-3 bg-stone-50 border border-stone-300 rounded-lg text-bscharcoal text-sm focus:outline-none focus:ring-2 focus:ring-bsemerald focus:bg-white focus:border-transparent transition-all">
            </div>
        </div>

        <!-- Row 2: Email & Contact Number -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label for="rfq_email" class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">
                    <?= t('rfq_form.email') ?> <span class="text-red-500">*</span>
                </label>
                <input type="email" id="rfq_email" name="email" required placeholder="<?= t('rfq_form.email_placeholder') ?>" class="w-full px-4 py-3 bg-stone-50 border border-stone-300 rounded-lg text-bscharcoal text-sm focus:outline-none focus:ring-2 focus:ring-bsemerald focus:bg-white focus:border-transparent transition-all">
            </div>
            <div>
                <label for="rfq_phone" class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">
                    <?= t('rfq_form.phone') ?> <span class="text-red-500">*</span>
                </label>
                <input type="tel" id="rfq_phone" name="phone" required placeholder="<?= t('rfq_form.phone_placeholder') ?>" class="w-full px-4 py-3 bg-stone-50 border border-stone-300 rounded-lg text-bscharcoal text-sm focus:outline-none focus:ring-2 focus:ring-bsemerald focus:bg-white focus:border-transparent transition-all">
            </div>
        </div>

        <!-- Row 3: Required Product or Service Category -->
        <div>
            <label for="rfq_category" class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">
                <?= t('rfq_form.category') ?> <span class="text-red-500">*</span>
            </label>
            <select id="rfq_category" name="category" required class="w-full px-4 py-3 bg-stone-50 border border-stone-300 rounded-lg text-bscharcoal text-sm focus:outline-none focus:ring-2 focus:ring-bsemerald focus:bg-white focus:border-transparent transition-all">
                <option value=""><?= t('rfq_form.select_category') ?></option>
                <?php foreach (t('rfq_form.categories') as $cat_key => $cat_label): ?>
                    <option value="<?= $cat_key ?>" <?= ($preset_category === $cat_key) ? 'selected' : '' ?>>
                        <?= $cat_label ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <!-- Row 4: Technical Specifications & Product Details -->
        <div>
            <label for="rfq_spec" class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">
                <?= t('rfq_form.product_spec') ?> <span class="text-red-500">*</span>
            </label>
            <textarea id="rfq_spec" name="product_spec" rows="3" required placeholder="<?= t('rfq_form.product_spec_placeholder') ?>" class="w-full px-4 py-3 bg-stone-50 border border-stone-300 rounded-lg text-bscharcoal text-sm focus:outline-none focus:ring-2 focus:ring-bsemerald focus:bg-white focus:border-transparent transition-all"><?= htmlspecialchars($preset_product) ?></textarea>
        </div>

        <!-- Row 5: Quantity & Unit of Measurement -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <div>
                <label for="rfq_quantity" class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">
                    <?= t('rfq_form.quantity') ?> <span class="text-red-500">*</span>
                </label>
                <input type="number" step="any" min="1" id="rfq_quantity" name="quantity" required placeholder="<?= t('rfq_form.quantity_placeholder') ?>" class="w-full px-4 py-3 bg-stone-50 border border-stone-300 rounded-lg text-bscharcoal text-sm focus:outline-none focus:ring-2 focus:ring-bsemerald focus:bg-white focus:border-transparent transition-all">
            </div>
            <div>
                <label for="rfq_unit" class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">
                    <?= t('rfq_form.unit') ?> <span class="text-red-500">*</span>
                </label>
                <select id="rfq_unit" name="unit" required class="w-full px-4 py-3 bg-stone-50 border border-stone-300 rounded-lg text-bscharcoal text-sm focus:outline-none focus:ring-2 focus:ring-bsemerald focus:bg-white focus:border-transparent transition-all">
                    <option value=""><?= t('rfq_form.select_unit') ?></option>
                    <?php foreach (t('rfq_form.units') as $u_key => $u_val): ?>
                        <option value="<?= $u_key ?>"><?= $u_val ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>

        <!-- Row 6: Packaging Requirements & Delivery Location -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label for="rfq_packaging" class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">
                    <?= t('rfq_form.packaging_format') ?>
                </label>
                <input type="text" id="rfq_packaging" name="packaging" placeholder="<?= t('rfq_form.packaging_placeholder') ?>" class="w-full px-4 py-3 bg-stone-50 border border-stone-300 rounded-lg text-bscharcoal text-sm focus:outline-none focus:ring-2 focus:ring-bsemerald focus:bg-white focus:border-transparent transition-all">
            </div>
            <div>
                <label for="rfq_destination" class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">
                    <?= t('rfq_form.destination_city') ?> <span class="text-red-500">*</span>
                </label>
                <input type="text" id="rfq_destination" name="destination" required placeholder="<?= t('rfq_form.destination_placeholder') ?>" class="w-full px-4 py-3 bg-stone-50 border border-stone-300 rounded-lg text-bscharcoal text-sm focus:outline-none focus:ring-2 focus:ring-bsemerald focus:bg-white focus:border-transparent transition-all">
            </div>
        </div>

        <!-- Row 7: Required Delivery Date & Supporting Technical Documents -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label for="rfq_delivery_date" class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">
                    <?= t('rfq_form.delivery_date') ?>
                </label>
                <input type="text" id="rfq_delivery_date" name="delivery_date" placeholder="<?= t('rfq_form.delivery_date_placeholder') ?>" class="w-full px-4 py-3 bg-stone-50 border border-stone-300 rounded-lg text-bscharcoal text-sm focus:outline-none focus:ring-2 focus:ring-bsemerald focus:bg-white focus:border-transparent transition-all">
            </div>
            <div>
                <label for="rfq_attachment" class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">
                    <?= t('rfq_form.attachment') ?>
                </label>
                <input type="file" id="rfq_attachment" name="attachment" accept=".pdf,.doc,.docx,.xls,.xlsx,.jpg,.jpeg,.png,.webp" class="w-full px-3 py-2 bg-stone-50 border border-stone-300 rounded-lg text-slate-700 text-xs focus:outline-none focus:ring-2 focus:ring-bsemerald file:mr-4 file:py-1.5 file:px-3 file:rounded-md file:border-0 file:text-xs file:font-semibold file:bg-stone-200 file:text-slate-700 hover:file:bg-stone-300 cursor-pointer">
                <span class="block text-[11px] text-slate-500 mt-1"><?= t('rfq_form.attachment_hint') ?></span>
            </div>
        </div>

        <!-- Row 8: Additional Remarks (New Requirement Field) -->
        <div>
            <label for="rfq_remarks" class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">
                <?= t('rfq_form.remarks') ?>
            </label>
            <textarea id="rfq_remarks" name="remarks" rows="2" placeholder="<?= t('rfq_form.remarks_placeholder') ?>" class="w-full px-4 py-3 bg-stone-50 border border-stone-300 rounded-lg text-bscharcoal text-sm focus:outline-none focus:ring-2 focus:ring-bsemerald focus:bg-white focus:border-transparent transition-all"></textarea>
        </div>

        <!-- Row 9: Privacy Consent Checkbox -->
        <div class="pt-2">
            <label class="flex items-start gap-3 cursor-pointer select-none">
                <input type="checkbox" name="privacy_consent" value="1" required class="mt-1 w-4 h-4 rounded text-bsemerald focus:ring-bsemerald border-stone-300">
                <span class="text-xs text-slate-600 leading-normal">
                    <?= t('rfq_form.privacy_consent') ?>
                </span>
            </label>
        </div>

        <!-- Submit Button & Direct WhatsApp Help -->
        <div class="pt-4 flex flex-col sm:flex-row items-center justify-between gap-4">
            <button type="submit" id="rfq-submit-btn" class="w-full sm:w-auto px-8 py-3.5 bg-bsemerald hover:bg-bsforest text-white font-bold text-sm rounded-lg shadow-md hover:shadow-lg transition-all focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-bsemerald flex items-center justify-center gap-2">
                <span><?= t('rfq_form.submit') ?></span>
                <svg class="w-4 h-4 rtl:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </button>
            <div class="text-xs text-slate-500 flex items-center gap-2">
                <span><?= ($lang === 'ar') ? 'للاستفسار الفوري السريع:' : 'Need urgent assistance?' ?></span>
                <a href="https://wa.me/966599510213?text=<?= urlencode(($lang === 'ar') ? 'مرحباً، أود الاستفسار عن تقديم طلب تسعير وتوريد تجاري مع مؤسسة أفضل توريد.' : 'Hello, I have an urgent RFQ material requirement for Better Supply Trading.') ?>" target="_blank" rel="noopener noreferrer" class="font-bold text-bsemerald hover:text-bsforest flex items-center gap-1 underline">
                    <span>WhatsApp Desk</span>
                </a>
            </div>
        </div>
    </form>
</div>
