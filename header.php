<?php
/**
 * Better Supply Corporation - Redesigned Global Header Template
 * Single-row nav (>=1100px), 15px nowrap, 28-32px gaps, sticky shrink on scroll,
 * simplified top bar, accordion mobile drawer, and active-page underline indicator.
 */

require_once __DIR__ . '/i18n.php';

$page = $page ?? 'home';
$headingFont = ($lang === 'ar') ? 'font-arabic font-bold' : 'font-heading font-bold';
$bodyFont = ($lang === 'ar') ? 'font-arabic' : 'font-sans';
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>" dir="<?= $dir ?>" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    
    <?= render_seo_head($page) ?>
    
    <!-- Preload Hero Image WebP for Immediate High Performance -->
    <link rel="preload" href="<?= img_url('hero_port_dusk.webp') ?>" as="image" type="image/webp">
    
    <!-- Favicon and Icons -->
    <link rel="icon" type="image/svg+xml" href="<?= asset_url('public/images/favicon.svg') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= asset_url('public/images/favicon-32x32.png') ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= asset_url('public/images/apple-touch-icon.png') ?>">
    <meta name="theme-color" content="#0F172A">
    
    <!-- Google Fonts: Cairo (Arabic) & Inter / Montserrat (English) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;600;700;800&family=Inter:wght@300;400;500;600;700&family=Montserrat:wght@500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    screens: {
                        'nav': '1100px',
                    },
                    colors: {
                        branddark: '#0F172A',
                        brandslate: '#1E293B',
                        brandgreen: '#047857',
                        brandgreenlight: '#10B981',
                        brandgray: '#64748B',
                        brandborder: '#E2E8F0',
                        brandbg: '#F8FAFC',
                    },
                    fontFamily: {
                        sans: ['Inter', '-apple-system', 'sans-serif'],
                        heading: ['Montserrat', 'Inter', 'sans-serif'],
                        arabic: ['Cairo', 'IBM Plex Sans Arabic', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    
    <style>
        html { scroll-behavior: smooth; }
        body { -webkit-font-smoothing: antialiased; }
        
        /* Nav Links Strict Single-Row Styling */
        .nav-item-link {
            font-size: 15px;
            line-height: 1.2;
            white-space: nowrap;
            position: relative;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            transition: color 0.2s ease;
        }

        /* Active Page Underline Indicator */
        .nav-item-link.is-active::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 2px;
            background-color: #10B981; /* emerald-400 */
            border-radius: 9999px;
        }
        
        /* Dropdown behavior */
        .dropdown:hover .dropdown-menu,
        .dropdown:focus-within .dropdown-menu {
            display: block;
        }

        /* Sticky Header States */
        #site-header {
            transition: height 0.25s ease, background-color 0.25s ease, border-color 0.25s ease, box-shadow 0.25s ease;
        }
        #site-header.is-scrolled {
            background-color: #0F172A !important;
            border-bottom: 1px solid rgba(51, 65, 85, 0.8) !important;
            box-shadow: 0 4px 20px -2px rgba(0, 0, 0, 0.4);
        }
        #site-header .header-inner {
            transition: height 0.25s ease;
        }
        #site-header.is-scrolled .header-inner {
            height: 66px !important;
        }

        /* Focus-visible accessibility styles */
        a:focus-visible, button:focus-visible {
            outline: 2px solid #10B981;
            outline-offset: 2px;
        }

        /* Hero Fade-In Animation (respects reduced motion) */
        @media (prefers-reduced-motion: no-preference) {
            .hero-fade-in {
                animation: heroFadeIn 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
            }
            @keyframes heroFadeIn {
                from {
                    opacity: 0;
                    transform: translateY(16px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
        }
    </style>
    
    <!-- Organization Schema.org JSON-LD -->
    <?= render_organization_schema() ?>

    <?php if (!empty($site_config['analytics']['ga4_id'])): ?>
    <!-- Google Analytics GA4 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?= htmlspecialchars($site_config['analytics']['ga4_id']) ?>"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '<?= htmlspecialchars($site_config['analytics']['ga4_id']) ?>');
    </script>
    <?php endif; ?>
</head>
<body class="<?= $bodyFont ?> bg-brandbg text-slate-800 antialiased selection:bg-brandgreen selection:text-white">

    <!-- =========================================================================
         SIMPLIFIED TOP BAR (>=1100px only)
         Left: "Dammam, Kingdom of Saudi Arabia" | Right: Procurement Email & Phone
         ========================================================================= -->
    <div class="bg-slate-950 text-slate-300 text-xs py-2 border-b border-slate-800/80 hidden nav:block">
        <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between">
            <!-- Left / Start: Location -->
            <div class="flex items-center gap-2 text-slate-300 font-medium">
                <svg class="w-3.5 h-3.5 text-brandgreenlight shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
                <span><?= t('headquarters') ?></span>
            </div>

            <!-- Right / End: Procurement Email & Phone (No Tagline, No Language Switcher) -->
            <div class="flex items-center gap-6">
                <span class="flex items-center gap-1.5 text-slate-300">
                    <svg class="w-3.5 h-3.5 text-slate-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    <a href="mailto:<?= htmlspecialchars($site_config['contacts']['email']) ?>" class="hover:text-white transition-colors underline decoration-slate-700">
                        <?= htmlspecialchars($site_config['contacts']['email']) ?>
                    </a>
                </span>
                <span class="text-slate-600">|</span>
                <span class="flex items-center gap-1.5 text-slate-300 font-mono">
                    <svg class="w-3.5 h-3.5 text-slate-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    <a href="tel:<?= htmlspecialchars($site_config['contacts']['phone']) ?>" class="hover:text-white transition-colors">
                        <?= htmlspecialchars($site_config['contacts']['phone']) ?>
                    </a>
                </span>
            </div>
        </div>
    </div>

    <!-- =========================================================================
         MAIN NAVIGATION HEADER
         Single-row nav, 15px nowrap, 28-32px gap, 44-48px logo, RFQ 44px fixed
         ========================================================================= -->
    <header id="site-header" class="sticky top-0 z-40 bg-branddark/95 backdrop-blur-md border-b border-slate-800 transition-all">
        <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="header-inner flex items-center justify-between h-20 transition-all">
                
                <!-- Logo & Brand Lockup (Height ~44-48px desktop, no placeholder badge) -->
                <a href="<?= route_url('') ?>" class="flex items-center shrink-0 me-6 xl:me-8 focus:outline-none focus:ring-2 focus:ring-brandgreen rounded group" aria-label="<?= t('company_name') ?>">
                    <?php if ($lang === 'ar'): ?>
                        <img src="<?= asset_url('public/images/logo-horizontal-ar-white.svg') ?>" alt="<?= t('company_name') ?>" class="h-11 md:h-12 w-auto object-contain transition-transform group-hover:scale-[1.02]">
                    <?php else: ?>
                        <img src="<?= asset_url('public/images/logo-horizontal-en-white.svg') ?>" alt="<?= t('company_name') ?>" class="h-11 md:h-12 w-auto object-contain transition-transform group-hover:scale-[1.02]">
                    <?php endif; ?>
                </a>

                <!-- Desktop Navigation Links (>=1100px: Single-Row, 15px, 28-32px gaps, vertical center) -->
                <nav class="hidden nav:flex items-center gap-7 xl:gap-8 text-[15px] font-medium text-slate-200">
                    
                    <!-- Home -->
                  
                    
                    <!-- About Us -->
                    <a href="<?= route_url('about') ?>" class="nav-item-link hover:text-white transition-colors <?= ($page === 'about') ? 'is-active text-brandgreenlight font-bold' : '' ?>">
                        <?= t('nav.about') ?>
                    </a>

                    <!-- Products & Services Dropdown (Chevron sitting right next with 4-6px gap) -->
                    <div class="relative dropdown py-2">
                        <button type="button" class="nav-item-link hover:text-white inline-flex items-center transition-colors focus:outline-none <?= in_array($page, ['products', 'industrial-salts', 'oilfield-chemicals', 'water-treatment', 'fertilizers', 'coco-peat', 'packaging-disposables', 'other-trading']) ? 'is-active text-brandgreenlight font-bold' : '' ?>" aria-haspopup="true">
                            <span><?= t('nav.products') ?></span>
                            <!-- Chevron with precise 5px gap -->
                            <svg class="w-4 h-4 text-slate-400 ms-1.5 group-hover:text-white transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        
                        <!-- Dropdown Menu -->
                        <div class="dropdown-menu hidden absolute <?= ($lang === 'ar') ? 'right-0' : 'left-0' ?> top-full w-80 bg-slate-900 border border-slate-700/90 rounded-xl shadow-2xl py-2 z-50">
                            <a href="<?= route_url('products') ?>" class="block px-4 py-2.5 text-xs font-bold uppercase tracking-wider text-emerald-400 border-b border-slate-800 hover:bg-slate-800/80 transition-colors">
                                <?= t('nav.products_overview') ?> &rarr;
                            </a>
                            <?php if (is_category_active('industrial_salts')): ?>
                            <a href="<?= route_url('industrial-salts') ?>" class="block px-4 py-2.5 text-sm hover:bg-slate-800 text-slate-300 hover:text-white transition-colors <?= ($page === 'industrial-salts') ? 'bg-slate-800/60 text-emerald-300 font-semibold' : '' ?>">
                                <?= t('nav.industrial_salts') ?>
                            </a>
                            <?php endif; ?>
                            <?php if (is_category_active('oilfield_chemicals')): ?>
                            <a href="<?= route_url('oilfield-chemicals') ?>" class="block px-4 py-2.5 text-sm hover:bg-slate-800 text-slate-300 hover:text-white transition-colors <?= ($page === 'oilfield-chemicals') ? 'bg-slate-800/60 text-emerald-300 font-semibold' : '' ?>">
                                <?= t('nav.oilfield_chemicals') ?>
                            </a>
                            <?php endif; ?>
                            <?php if (is_category_active('water_treatment')): ?>
                            <a href="<?= route_url('water-treatment') ?>" class="block px-4 py-2.5 text-sm hover:bg-slate-800 text-slate-300 hover:text-white transition-colors <?= ($page === 'water-treatment') ? 'bg-slate-800/60 text-emerald-300 font-semibold' : '' ?>">
                                <?= t('nav.water_treatment') ?>
                            </a>
                            <?php endif; ?>
                            <?php if (is_category_active('fertilizers')): ?>
                            <a href="<?= route_url('fertilizers') ?>" class="block px-4 py-2.5 text-sm hover:bg-slate-800 text-slate-300 hover:text-white transition-colors <?= ($page === 'fertilizers') ? 'bg-slate-800/60 text-emerald-300 font-semibold' : '' ?>">
                                <?= t('nav.fertilizers') ?>
                            </a>
                            <?php endif; ?>
                            <?php if (is_category_active('coco_peat')): ?>
                            <a href="<?= route_url('coco-peat') ?>" class="block px-4 py-2.5 text-sm hover:bg-slate-800 text-slate-300 hover:text-white transition-colors <?= ($page === 'coco-peat') ? 'bg-slate-800/60 text-emerald-300 font-semibold' : '' ?>">
                                <?= t('nav.coco_peat') ?>
                            </a>
                            <?php endif; ?>
                            <?php if (is_category_active('packaging_disposables')): ?>
                            <a href="<?= route_url('packaging-disposables') ?>" class="block px-4 py-2.5 text-sm hover:bg-slate-800 text-slate-300 hover:text-white transition-colors <?= ($page === 'packaging-disposables') ? 'bg-slate-800/60 text-emerald-300 font-semibold' : '' ?>">
                                <?= t('nav.packaging_disposables') ?>
                            </a>
                            <?php endif; ?>
                            <?php if (is_category_active('other_trading')): ?>
                            <a href="<?= route_url('other-trading') ?>" class="block px-4 py-2.5 text-sm hover:bg-slate-800 text-slate-300 hover:text-white transition-colors border-t border-slate-800/80 <?= ($page === 'other-trading') ? 'bg-slate-800/60 text-emerald-300 font-semibold' : '' ?>">
                                <?= t('nav.other_trading') ?>
                            </a>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- Industries -->
                    <a href="<?= route_url('industries') ?>" class="nav-item-link hover:text-white transition-colors <?= ($page === 'industries') ? 'is-active text-brandgreenlight font-bold' : '' ?>">
                        <?= t('nav.industries') ?>
                    </a>
                    
                    <!-- International Trading -->
                    <a href="<?= route_url('international-trading') ?>" class="nav-item-link hover:text-white transition-colors <?= ($page === 'international-trading') ? 'is-active text-brandgreenlight font-bold' : '' ?>">
                        <?= t('nav.international_trading') ?>
                    </a>
                    
                    <!-- Partnerships -->
                    <a href="<?= route_url('partners') ?>" class="nav-item-link hover:text-white transition-colors <?= ($page === 'partners') ? 'is-active text-brandgreenlight font-bold' : '' ?>">
                        <?= t('nav.partners') ?>
                    </a>

                    <!-- Contact / RFQ -->
                    <a href="<?= route_url('contact') ?>" class="nav-item-link hover:text-white transition-colors <?= ($page === 'contact') ? 'is-active text-brandgreenlight font-bold' : '' ?>">
                        <?= t('nav.contact') ?>
                    </a>
                </nav>

                <!-- Actions: Language Switcher Pill + Request RFQ Button (>=1100px) -->
                <div class="hidden nav:flex items-center gap-4 shrink-0 ms-6">
                    <!-- Single Language Switcher Pill inside Main Nav -->
                    <a href="<?= route_url($page, t('switch_lang_code')) ?>" class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold border border-slate-700 bg-slate-800/80 hover:bg-slate-700 text-emerald-400 hover:text-white transition-all shadow-sm" aria-label="Switch Language">
                        <?= ($lang === 'ar') ? 'EN' : 'العربية' ?>
                    </a>

                    <!-- Single-line Fixed Height 44px RFQ Button (padding 0 22px, nowrap) -->
                    <a href="<?= route_url('contact') ?>#rfq-form" class="h-[44px] px-[22px] whitespace-nowrap inline-flex items-center justify-center font-bold text-sm rounded-lg text-white bg-brandgreen hover:bg-emerald-600 shadow-md transition-all transform hover:-translate-y-0.5 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brandgreen">
                        <?= t('nav.request_rfq') ?>
                    </a>
                </div>

                <!-- Hamburger Button (<1100px) -->
                <div class="flex items-center gap-3 nav:hidden">
                    <a href="<?= route_url($page, t('switch_lang_code')) ?>" class="px-2.5 py-1 rounded-full border border-slate-700 bg-slate-800 text-emerald-400 text-xs font-bold">
                        <?= ($lang === 'ar') ? 'EN' : 'العربية' ?>
                    </a>
                    <button type="button" id="mobile-menu-btn" class="p-2.5 rounded-lg text-slate-300 hover:text-white hover:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-brandgreen" aria-label="Open Navigation Menu">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                    </button>
                </div>

            </div>
        </div>

        <!-- =========================================================================
             MOBILE SLIDE-IN DRAWER (<1100px)
             Full-height slide-in with accordion for Products & Services,
             language switcher, and RFQ button inside the drawer.
             ========================================================================= -->
        <div id="mobile-drawer" class="fixed inset-0 bg-slate-950/80 backdrop-blur-md z-50 hidden transition-opacity duration-300">
            <div class="fixed inset-y-0 <?= ($lang === 'ar') ? 'left-0' : 'right-0' ?> w-full max-w-sm bg-slate-900 border-<?= ($lang === 'ar') ? 'r' : 'l' ?> border-slate-800 p-6 overflow-y-auto flex flex-col justify-between shadow-2xl">
                
                <div>
                    <!-- Drawer Header -->
                    <div class="flex items-center justify-between pb-6 border-b border-slate-800">
                        <span class="text-white font-bold text-base tracking-tight"><?= t('company_name') ?></span>
                        <button type="button" id="mobile-close-btn" class="p-2 rounded-lg text-slate-400 hover:text-white hover:bg-slate-800" aria-label="Close Navigation">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                        </button>
                    </div>
                    
                    <!-- Navigation Links -->
                    <div class="py-6 space-y-2 text-base">
                        <a href="<?= route_url('') ?>" class="block py-2.5 px-3 rounded-lg text-slate-200 hover:text-white hover:bg-slate-800 font-medium <?= ($page === 'home') ? 'bg-slate-800 text-brandgreenlight font-bold' : '' ?>">
                            <?= t('nav.home') ?>
                        </a>
                        
                        <a href="<?= route_url('about') ?>" class="block py-2.5 px-3 rounded-lg text-slate-200 hover:text-white hover:bg-slate-800 font-medium <?= ($page === 'about') ? 'bg-slate-800 text-brandgreenlight font-bold' : '' ?>">
                            <?= t('nav.about') ?>
                        </a>
                        
                        <!-- Accordion for Products & Services -->
                        <div class="rounded-lg bg-slate-950/60 border border-slate-800/80 overflow-hidden">
                            <button type="button" id="mobile-products-accordion-btn" class="w-full flex items-center justify-between py-3 px-3.5 text-slate-200 hover:text-white font-medium text-left rtl:text-right focus:outline-none">
                                <span class="<?= in_array($page, ['products', 'industrial-salts', 'oilfield-chemicals', 'water-treatment', 'fertilizers', 'coco-peat', 'packaging-disposables', 'other-trading']) ? 'text-brandgreenlight font-bold' : '' ?>">
                                    <?= t('nav.products') ?>
                                </span>
                                <svg id="accordion-arrow" class="w-4 h-4 text-slate-400 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                            </button>
                            
                            <div id="mobile-products-accordion-body" class="hidden pb-3 px-3 space-y-1.5 border-t border-slate-800/60 pt-2 text-sm">
                                <a href="<?= route_url('products') ?>" class="block py-1.5 px-2 rounded font-semibold text-xs text-emerald-400 hover:bg-slate-800">
                                    <?= t('nav.products_overview') ?> &rarr;
                                </a>
                                <a href="<?= route_url('industrial-salts') ?>" class="block py-1.5 px-2 rounded text-slate-300 hover:text-white hover:bg-slate-800">
                                    <?= t('nav.industrial_salts') ?>
                                </a>
                                <a href="<?= route_url('oilfield-chemicals') ?>" class="block py-1.5 px-2 rounded text-slate-300 hover:text-white hover:bg-slate-800">
                                    <?= t('nav.oilfield_chemicals') ?>
                                </a>
                                <a href="<?= route_url('water-treatment') ?>" class="block py-1.5 px-2 rounded text-slate-300 hover:text-white hover:bg-slate-800">
                                    <?= t('nav.water_treatment') ?>
                                </a>
                                <a href="<?= route_url('fertilizers') ?>" class="block py-1.5 px-2 rounded text-slate-300 hover:text-white hover:bg-slate-800">
                                    <?= t('nav.fertilizers') ?>
                                </a>
                                <a href="<?= route_url('coco-peat') ?>" class="block py-1.5 px-2 rounded text-slate-300 hover:text-white hover:bg-slate-800">
                                    <?= t('nav.coco_peat') ?>
                                </a>
                                <a href="<?= route_url('packaging-disposables') ?>" class="block py-1.5 px-2 rounded text-slate-300 hover:text-white hover:bg-slate-800">
                                    <?= t('nav.packaging_disposables') ?>
                                </a>
                                <a href="<?= route_url('other-trading') ?>" class="block py-1.5 px-2 rounded text-slate-300 hover:text-white hover:bg-slate-800">
                                    <?= t('nav.other_trading') ?>
                                </a>
                            </div>
                        </div>

                        <a href="<?= route_url('industries') ?>" class="block py-2.5 px-3 rounded-lg text-slate-200 hover:text-white hover:bg-slate-800 font-medium <?= ($page === 'industries') ? 'bg-slate-800 text-brandgreenlight font-bold' : '' ?>">
                            <?= t('nav.industries') ?>
                        </a>
                        
                        <a href="<?= route_url('international-trading') ?>" class="block py-2.5 px-3 rounded-lg text-slate-200 hover:text-white hover:bg-slate-800 font-medium <?= ($page === 'international-trading') ? 'bg-slate-800 text-brandgreenlight font-bold' : '' ?>">
                            <?= t('nav.international_trading') ?>
                        </a>
                        
                        <a href="<?= route_url('partners') ?>" class="block py-2.5 px-3 rounded-lg text-slate-200 hover:text-white hover:bg-slate-800 font-medium <?= ($page === 'partners') ? 'bg-slate-800 text-brandgreenlight font-bold' : '' ?>">
                            <?= t('nav.partners') ?>
                        </a>
                        
                        <a href="<?= route_url('contact') ?>" class="block py-2.5 px-3 rounded-lg text-slate-200 hover:text-white hover:bg-slate-800 font-medium <?= ($page === 'contact') ? 'bg-slate-800 text-brandgreenlight font-bold' : '' ?>">
                            <?= t('nav.contact') ?>
                        </a>
                    </div>
                </div>

                <!-- Drawer Footer: Language Switcher and Request RFQ button -->
                <div class="pt-6 border-t border-slate-800 space-y-3">
                    <a href="<?= route_url('contact') ?>#rfq-form" class="block w-full h-[44px] flex items-center justify-center font-bold text-sm text-white bg-brandgreen hover:bg-emerald-600 rounded-lg shadow-md transition-all">
                        <?= t('nav.request_rfq') ?>
                    </a>
                    
                    <a href="<?= route_url($page, t('switch_lang_code')) ?>" class="block w-full py-2.5 text-center text-xs font-bold text-slate-300 hover:text-white border border-slate-700 bg-slate-800/80 rounded-lg transition-colors">
                        <?= ($lang === 'ar') ? 'Switch to English' : 'التحويل إلى العربية' ?>
                    </a>
                </div>

            </div>
        </div>
    </header>

    <!-- Sticky Header Compact on Scroll & Accordion Script -->
    <script>
        (function() {
            // Header shrink on scroll
            const header = document.getElementById('site-header');
            if (header) {
                window.addEventListener('scroll', function() {
                    if (window.scrollY > 30) {
                        header.classList.add('is-scrolled');
                    } else {
                        header.classList.remove('is-scrolled');
                    }
                }, { passive: true });
            }

            // Mobile Accordion Toggle
            const accordionBtn = document.getElementById('mobile-products-accordion-btn');
            const accordionBody = document.getElementById('mobile-products-accordion-body');
            const accordionArrow = document.getElementById('accordion-arrow');

            if (accordionBtn && accordionBody) {
                accordionBtn.addEventListener('click', function() {
                    const isHidden = accordionBody.classList.contains('hidden');
                    if (isHidden) {
                        accordionBody.classList.remove('hidden');
                        if (accordionArrow) accordionArrow.classList.add('rotate-180');
                    } else {
                        accordionBody.classList.add('hidden');
                        if (accordionArrow) accordionArrow.classList.remove('rotate-180');
                    }
                });
            }
        })();
    </script>

    <!-- Sticky Floating "Request RFQ" Button (Visible on Desktop & Mobile) -->
    <aside class="fixed bottom-6 <?= ($lang === 'ar') ? 'left-6' : 'right-6' ?> z-30">
        <a href="<?= route_url('contact') ?>#rfq-form" class="inline-flex items-center gap-2 bg-brandgreen hover:bg-emerald-600 text-white font-bold text-sm px-5 py-3 rounded-full shadow-2xl transition-all transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-emerald-400/50" aria-label="<?= t('nav.request_rfq') ?>">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
            <span><?= t('nav.request_rfq') ?></span>
        </a>
    </aside>

    <main class="min-h-screen">
