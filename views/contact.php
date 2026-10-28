<?php
/**
 * Better Supply Trading Establishment - Contact & RFQ View (views/contact.php)
 * Implements PDF Page 14 / Section 02 & Direct Team Commercial Routing.
 * Modern, light corporate B2B trading identity.
 */

$page = 'contact';
require_once __DIR__ . '/../header.php';
$headingFont = ($lang === 'ar') ? 'font-arabic font-bold' : 'font-heading font-bold';
$checklist = t('pages.contact.checklist');
$preset_category = $_GET['category'] ?? '';
$preset_product = $_GET['product'] ?? '';

$team = $site_config['contacts']['team'] ?? [];
?>

<!-- =========================================================================
     HERO BANNER (Dignified Corporate Aesthetic)
     ========================================================================= -->
<section class="relative bg-gradient-to-r from-bscharcoal via-[#1a382c] to-bscharcoal text-white py-14 sm:py-20 border-b border-stone-200 overflow-hidden">
    <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center" data-aos="fade-up">
        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-bsemerald/30 border border-bsgold/40 text-bsgold text-xs font-bold uppercase tracking-wider mb-4 shadow-xs">
            <span class="w-2 h-2 rounded-full bg-bsgold animate-pulse"></span>
            <span><?= t('nav.contact') ?></span>
        </div>
        
        <h1 class="text-2xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight text-white mb-4 leading-tight <?= $headingFont ?>">
            <?= t('pages.contact.heading') ?>
        </h1>
        
        <p class="text-sm sm:text-base lg:text-lg text-stone-200 max-w-2xl mx-auto font-light leading-relaxed">
            <?= t('pages.contact.intro') ?>
        </p>
        
        <div class="mt-8 flex flex-col sm:flex-row items-center justify-center gap-3">
            <a href="#contact-team" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3 rounded-lg bg-bsemerald hover:bg-bsforest text-white text-xs font-bold shadow-md transition-all">
                <svg class="w-4 h-4 text-bsgold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                <span><?= t('pages.contact.team_section_title') ?></span>
                <span>&darr;</span>
            </a>
            <a href="#rfq-form-section" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3 rounded-lg bg-white/10 hover:bg-white/20 text-white text-xs font-bold border border-white/20 transition-all">
                <svg class="w-4 h-4 text-bsgold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                <span><?= t('buttons.request_quote') ?></span>
                <span>&darr;</span>
            </a>
        </div>
    </div>
</section>

<!-- =========================================================================
     DEDICATED CONTACT OUR TEAM SECTION (Light Corporate Interface)
     ========================================================================= -->
<section id="contact-team" class="py-16 sm:py-20 bg-stone-50 border-b border-stone-200 scroll-mt-24 text-bscharcoal">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-12" data-aos="fade-up">
            <span class="text-xs font-mono font-bold uppercase tracking-widest text-bsgold mb-2 inline-block">
                <?= ($lang === 'ar') ? 'التواصل المباشر مع المسؤولين' : 'Direct Commercial Contacts' ?>
            </span>
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-bscharcoal tracking-tight <?= $headingFont ?>">
                <?= t('pages.contact.team_section_title') ?>
            </h2>
            <p class="mt-2 text-xs sm:text-sm lg:text-base text-slate-600 leading-relaxed max-w-2xl mx-auto">
                <?= t('pages.contact.team_section_subtitle') ?>
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
            
            <!-- 1. Sales & Commercial Enquiries (Meharsha O.N) -->
            <div class="relative bg-white border border-stone-200 hover:border-bsemerald rounded-3xl p-6 sm:p-8 transition-all duration-300 shadow-sm hover:shadow-xl flex flex-col justify-between group" data-aos="fade-up">
                <div>
                    <!-- Badge & Icon Header -->
                    <div class="flex items-start justify-between gap-4 mb-4">
                        <div class="space-y-1.5">
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-emerald-50 text-bsemerald border border-emerald-200">
                                <span class="w-2 h-2 rounded-full bg-bsemerald animate-pulse"></span>
                                <?= t('pages.contact.sales_title') ?>
                            </span>
                            <h3 class="text-xl sm:text-2xl font-extrabold text-bscharcoal tracking-tight pt-1">Meharsha O.N</h3>
                            <p class="text-xs sm:text-sm font-semibold text-bsemerald"><?= t('pages.contact.sales_exec') ?></p>
                        </div>
                        <div class="w-12 h-12 rounded-2xl bg-stone-100 border border-stone-200 flex items-center justify-center text-bsemerald shrink-0 group-hover:scale-105 transition-transform">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                        </div>
                    </div>

                    <!-- Contact Details List -->
                    <div class="space-y-3 pt-4 border-t border-stone-100 text-xs sm:text-sm">
                        <!-- Mobile / WhatsApp -->
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-1 sm:gap-2 py-1">
                            <span class="text-slate-500 flex items-center gap-2">
                                <svg class="w-4 h-4 text-bsgold shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                <span><?= t('pages.contact.mobile_whatsapp') ?></span>
                            </span>
                            <a href="tel:+966599510213" class="font-mono text-bscharcoal hover:text-bsemerald font-bold dir-ltr transition-colors">
                                +966 59 951 0213
                            </a>
                        </div>

                        <!-- Email -->
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-1 sm:gap-2 py-1">
                            <span class="text-slate-500 flex items-center gap-2">
                                <svg class="w-4 h-4 text-bsgold shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                <span><?= t('pages.contact.email_label') ?></span>
                            </span>
                            <a href="mailto:sales@bettersupplytrading.com" class="font-mono text-bsemerald hover:text-bsforest font-semibold transition-colors break-all">
                                sales@bettersupplytrading.com
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Direct Action Buttons -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mt-6 pt-4 border-t border-stone-100">
                    <a href="https://wa.me/966599510213?text=<?= urlencode(($lang === 'ar') ? 'مرحباً أستاذ مهارشا، أود الاستفسار عن عروض الأسعار والتوريد التجاري مع مؤسسة أفضل توريد التجارية.' : 'Hello Meharsha, I would like to inquire about industrial sourcing and quotations from Better Supply Trading Establishment.') ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center gap-2 px-4 py-2.5 rounded-lg bg-bsemerald hover:bg-bsforest text-white text-xs font-bold shadow-xs transition-all">
                        <svg class="w-4 h-4 fill-current shrink-0" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                        <span><?= t('pages.contact.chat_whatsapp') ?></span>
                    </a>
                    <a href="tel:+966599510213" class="inline-flex items-center justify-center gap-2 px-4 py-2.5 rounded-lg bg-stone-100 hover:bg-stone-200 text-bscharcoal border border-stone-300 text-xs font-bold transition-all">
                        <svg class="w-4 h-4 text-bsemerald shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        <span><?= t('pages.contact.direct_call') ?></span>
                    </a>
                </div>
            </div>

            <!-- 2. Operations & Management Enquiries (Sayed Alavi) -->
            <div class="relative bg-white border border-stone-200 hover:border-bsemerald rounded-3xl p-6 sm:p-8 transition-all duration-300 shadow-sm hover:shadow-xl flex flex-col justify-between group" data-aos="fade-up" data-aos-delay="100">
                <div>
                    <!-- Badge & Icon Header -->
                    <div class="flex items-start justify-between gap-4 mb-4">
                        <div class="space-y-1.5">
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-amber-50 text-bsgold border border-amber-200">
                                <span class="w-2 h-2 rounded-full bg-bsgold animate-pulse"></span>
                                <?= t('pages.contact.operations_title') ?>
                            </span>
                            <h3 class="text-xl sm:text-2xl font-extrabold text-bscharcoal tracking-tight pt-1">Sayed Alavi</h3>
                            <p class="text-xs sm:text-sm font-semibold text-bsemerald"><?= t('pages.contact.operations_director') ?></p>
                        </div>
                        <div class="w-12 h-12 rounded-2xl bg-stone-100 border border-stone-200 flex items-center justify-center text-bsemerald shrink-0 group-hover:scale-105 transition-transform">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        </div>
                    </div>

                    <!-- Contact Details List -->
                    <div class="space-y-3 pt-4 border-t border-stone-100 text-xs sm:text-sm">
                        <!-- Mobile / WhatsApp -->
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-1 sm:gap-2 py-1">
                            <span class="text-slate-500 flex items-center gap-2">
                                <svg class="w-4 h-4 text-bsgold shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                <span><?= t('pages.contact.mobile_whatsapp') ?></span>
                            </span>
                            <a href="tel:+966502851077" class="font-mono text-bscharcoal hover:text-bsemerald font-bold dir-ltr transition-colors">
                                0502851077 <span class="text-slate-400 font-normal text-xs">(+966 50 285 1077)</span>
                            </a>
                        </div>

                        <!-- Email -->
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-1 sm:gap-2 py-1">
                            <span class="text-slate-500 flex items-center gap-2">
                                <svg class="w-4 h-4 text-bsgold shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                <span><?= t('pages.contact.email_label') ?></span>
                            </span>
                            <a href="mailto:operations@bettersupplytrading.com" class="font-mono text-bsemerald hover:text-bsforest font-semibold transition-colors break-all">
                                operations@bettersupplytrading.com
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Direct Action Buttons -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mt-6 pt-4 border-t border-stone-100">
                    <a href="https://wa.me/966502851077?text=<?= urlencode(($lang === 'ar') ? 'مرحباً أستاذ سيد علوي، أود الاستفسار بخصوص العمليات واللوجستيات مع مؤسسة أفضل توريد التجارية.' : 'Hello Sayed Alavi, I would like to inquire regarding operations and supply logistics from Better Supply Trading Establishment.') ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center gap-2 px-4 py-2.5 rounded-lg bg-bsemerald hover:bg-bsforest text-white text-xs font-bold shadow-xs transition-all">
                        <svg class="w-4 h-4 fill-current shrink-0" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                        <span><?= t('pages.contact.chat_whatsapp') ?></span>
                    </a>
                    <a href="tel:+966502851077" class="inline-flex items-center justify-center gap-2 px-4 py-2.5 rounded-lg bg-stone-100 hover:bg-stone-200 text-bscharcoal border border-stone-300 text-xs font-bold transition-all">
                        <svg class="w-4 h-4 text-bsemerald shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        <span><?= t('pages.contact.direct_call') ?></span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- =========================================================================
     MAIN CONTACT & RFQ SECTION (Light Corporate Interface)
     ========================================================================= -->
<section id="rfq-form-section" class="py-16 sm:py-24 bg-white text-bscharcoal scroll-mt-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12">
            
            <!-- Left Column: Guidelines & Official Office Details (5 cols) -->
            <div class="lg:col-span-5 space-y-6 sm:space-y-8">
                
                <!-- Checklist Card -->
                <div class="p-6 sm:p-8 rounded-3xl bg-stone-50 border border-stone-200 space-y-4 shadow-xs" data-aos="fade-up">
                    <span class="text-xs font-mono font-bold uppercase tracking-widest text-bsgold block">
                        <?= ($lang === 'ar') ? 'إرشادات المواصفات الفنية' : 'Procurement Checklist' ?>
                    </span>
                    <h2 class="text-lg sm:text-xl font-bold text-bscharcoal"><?= t('pages.contact.checklist_title') ?></h2>
                    <ul class="space-y-3 pt-2">
                        <?php foreach ($checklist as $item): ?>
                        <li class="flex items-start gap-2.5 text-xs sm:text-sm text-slate-700">
                            <svg class="w-4 h-4 text-bsemerald shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span><?= htmlspecialchars($item) ?></span>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Verified Corporate Office Card -->
                <div class="p-6 sm:p-8 rounded-3xl bg-stone-50 border border-stone-200 space-y-5 shadow-xs" data-aos="fade-up" data-aos-delay="100">
                    <div>
                        <span class="text-[11px] font-mono uppercase tracking-wider text-bsemerald font-bold block mb-1">
                            <?= t('pages.contact.dammam_hub') ?>
                        </span>
                        <h3 class="text-lg sm:text-xl font-extrabold text-bscharcoal"><?= t('company_name') ?></h3>
                    </div>

                    <div class="space-y-4 text-xs sm:text-sm text-slate-700">
                        <!-- Physical Address -->
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-bsemerald shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                            <div>
                                <span class="block text-slate-500 font-bold text-[11px] uppercase tracking-wider"><?= ($lang === 'ar') ? 'العنوان المكتبي والتجاري:' : 'Official Commercial Address:' ?></span>
                                <span class="text-bscharcoal font-semibold leading-relaxed block mt-0.5">
                                    <?= ($lang === 'ar') ? $site_config['contacts']['address_ar'] : $site_config['contacts']['address_en'] ?>
                                </span>
                                <a href="https://maps.google.com/?q=<?= urlencode('King Abdulaziz Road, Al Badi Dist, Dammam 32415, Saudi Arabia') ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1.5 text-xs font-bold text-bsgold hover:text-bsemerald mt-1.5 transition-colors">
                                    <svg class="w-3.5 h-3.5 text-bsgold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                                    <span><?= ($lang === 'ar') ? 'عرض الموقع على خرائط Google' : 'View on Google Maps' ?></span>
                                </a>
                            </div>
                        </div>

                        <!-- General Email -->
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-bsemerald shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            <div>
                                <span class="block text-slate-500 font-bold text-[11px] uppercase tracking-wider"><?= ($lang === 'ar') ? 'البريد الإلكتروني العام للطلبات:' : 'General RFQ Email:' ?></span>
                                <a href="mailto:<?= htmlspecialchars($site_config['contacts']['email']) ?>" class="hover:text-bsemerald font-mono font-semibold transition-colors break-all">
                                    <?= htmlspecialchars($site_config['contacts']['email']) ?>
                                </a>
                            </div>
                        </div>

                        <!-- Main Phone / WhatsApp -->
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-bsemerald shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            <div>
                                <span class="block text-slate-500 font-bold text-[11px] uppercase tracking-wider"><?= ($lang === 'ar') ? 'هاتف الاستقبال والتوريد:' : 'Procurement Desk Phone:' ?></span>
                                <a href="tel:<?= htmlspecialchars($site_config['contacts']['phone']) ?>" class="hover:text-bsemerald font-mono font-semibold dir-ltr inline-block">
                                    <?= htmlspecialchars($site_config['contacts']['phone']) ?>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="pt-4 border-t border-stone-200 text-xs text-slate-500 leading-relaxed">
                        <?= t('pages.contact.office_address_notice') ?>
                    </div>
                </div>

            </div>

            <!-- Right Column: RFQ Form (7 cols) -->
            <div class="lg:col-span-7" data-aos="fade-up" data-aos-delay="150">
                <?php require __DIR__ . '/partials/rfq_form_partial.php'; ?>
            </div>

        </div>

    </div>
</section>

<?php require_once __DIR__ . '/../footer.php'; ?>