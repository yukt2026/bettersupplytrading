<?php
/**
 * Better Supply Trading Establishment - Redesigned Global Header Template
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
    <meta name="theme-color" content="#005B3F">
    
    <!-- Google Fonts: Cairo (Arabic) & Lato (English Brand Standard) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;600;700;800;900&family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,400;1,700&display=swap" rel="stylesheet">
    
    <!-- Brand Identity Design Tokens -->
    <link rel="stylesheet" href="<?= asset_url('assets/css/brand-tokens.css') ?>">
    
    <!-- AOS Library for Scroll Reveal -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    screens: {
                        'nav': '1200px',
                    },
                    colors: {
                        // Official Brand Identity Kit Palette
                        bsemerald: '#005B3F',
                        bsforest: '#0B6B4D',
                        bsgold: '#C49A5A',
                        bscharcoal: '#242629',
                        bsivory: '#F6F3ED',
                        bsstone: '#DAD2C5',
                        bsmuted: '#6D7472',
                        bswhite: '#FFFFFF',

                        // Mapped Brand Aliases
                        branddark: '#242629',
                        brandslate: '#1E2124',
                        brandgreen: '#005B3F',
                        brandgreenlight: '#0B6B4D',
                        brandgold: '#C49A5A',
                        brandivory: '#F6F3ED',
                        brandstone: '#DAD2C5',
                        brandgray: '#6D7472',
                        brandborder: '#DAD2C5',
                        brandbg: '#F6F3ED',
                    },
                    fontFamily: {
                        sans: ['Lato', 'Arial', 'sans-serif'],
                        heading: ['Lato', 'Arial', 'sans-serif'],
                        arabic: ['Cairo', 'IBM Plex Sans Arabic', 'sans-serif'],
                    },
                    borderRadius: {
                        'bs': '8px',
                    }
                }
            }
        }
    </script>
    
    <style>
        /* Strict Viewport Clamping & Fluid Scroll (Desert Iron Architecture) */
        html { scroll-behavior: smooth; overflow-x: hidden; overflow-x: clip; }
        body, main { overflow-x: hidden; overflow-x: clip; width: 100%; max-width: 100vw; -webkit-font-smoothing: antialiased; }
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        
        /* Prevent iOS automatic zoom on form focus */
        input, select, textarea { font-size: 16px !important; }
        
        /* Nav Links Strict Single-Row Styling */
        .nav-item-link {
            font-size: 15px;
            line-height: 1.2;
            white-space: nowrap;
            position: relative;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            transition: color 0.25s ease;
        }

        /* Nav Link Hover Animated Underline (Antique Gold Accent) */
        nav .nav-item-link:not(.is-active)::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: #C49A5A; /* Brand Antique Gold */
            transition: width 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        }
        nav .nav-item-link:not(.is-active):hover::after {
            width: 100%;
        }

        /* Active Page Underline Indicator (Brand Deep Emerald) */
        .nav-item-link.is-active::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 2px;
            background-color: #005B3F; /* Brand Deep Emerald */
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
            background-color: rgba(255, 255, 255, 0.98) !important;
            border-bottom: 1px solid #DAD2C5 !important;
            box-shadow: 0 4px 20px -2px rgba(36, 38, 41, 0.08);
        }
        #site-header .header-inner {
            transition: height 0.25s ease;
        }
        #site-header.is-scrolled .header-inner {
            height: 64px !important;
        }

        /* Focus-visible accessibility styles */
        a:focus-visible, button:focus-visible {
            outline: 2px solid #005B3F;
            outline-offset: 2px;
        }

        /* Parallax & Smooth Entrance Effects (Desert Iron Core) */
        .parallax-container { overflow: hidden; position: relative; }
        .parallax-img { will-change: transform; transform: scale(1.12); transform-origin: top center; }

        /* Interactive Card & Link Hover Effects */
        .hover-lift, .grid > div.bg-slate-950, .grid > div.bg-slate-900 {
            transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.35s cubic-bezier(0.16, 1, 0.3, 1), border-color 0.3s ease;
        }
        .hover-lift:hover, .grid > div.bg-slate-950:hover, .grid > div.bg-slate-900:hover {
            transform: translateY(-6px);
            box-shadow: 0 16px 32px -8px rgba(0, 0, 0, 0.45);
            border-color: rgba(196, 154, 90, 0.45) !important;
        }

        /* Smooth Inner Image Zoom */
        section img:not(.parallax-img) {
            transition: transform 0.7s cubic-bezier(0.16, 1, 0.3, 1) !important;
        }
        .group:hover img:not(.parallax-img) {
            transform: scale(1.06) !important;
        }

        /* Button Cursor Hover Shine Effect */
        a.bg-brandgreen, button.bg-brandgreen, a.bg-bsemerald, button.bg-bsemerald, .bs-primary-button {
            position: relative;
            overflow: hidden;
            transition: transform 0.25s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.25s cubic-bezier(0.16, 1, 0.3, 1), background-color 0.25s ease;
        }
        a.bg-brandgreen:hover, button.bg-brandgreen:hover, a.bg-bsemerald:hover, button.bg-bsemerald:hover, .bs-primary-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 24px -4px rgba(0, 91, 63, 0.35);
        }
        a.bg-brandgreen:active, button.bg-brandgreen:active, a.bg-bsemerald:active, button.bg-bsemerald:active {
            transform: translateY(0) scale(0.98);
        }
        a.bg-brandgreen::after, button.bg-brandgreen::after, a.bg-bsemerald::after, button.bg-bsemerald::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -60%;
            width: 50%;
            height: 200%;
            background: linear-gradient(to right, rgba(255,255,255,0) 0%, rgba(255,255,255,0.28) 50%, rgba(255,255,255,0) 100%);
            transform: rotate(25deg);
            transition: all 0.65s ease;
            pointer-events: none;
        }
        a.bg-brandgreen:hover::after, button.bg-brandgreen:hover::after, a.bg-bsemerald:hover::after, button.bg-bsemerald:hover::after {
            left: 130%;
        }

        /* Hero Keyframe Animations */
        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-16px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(16px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes pulseGlow {
            0%, 100% { box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.4); }
            50% { box-shadow: 0 0 0 10px rgba(16, 185, 129, 0); }
        }

        .animate-fade-down { animation: fadeInDown 0.7s cubic-bezier(0.16, 1, 0.3, 1) forwards; }
        .animate-fade-up { animation: fadeInUp 0.7s cubic-bezier(0.16, 1, 0.3, 1) forwards; }
        .animate-pulse-glow { animation: pulseGlow 2.5s infinite; }

        /* Image Load Animation */
        .image-fade-in {
            opacity: 0;
            filter: blur(6px);
            transition: opacity 0.6s ease-out, filter 0.6s ease-out;
            will-change: opacity, filter;
        }
        .image-fade-in.loaded {
            opacity: 1;
            filter: blur(0);
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

        @media (prefers-reduced-motion: reduce) {
            .hover-lift, .grid > div.bg-slate-950, .grid > div.bg-slate-900, [data-aos] {
                opacity: 1 !important;
                transform: none !important;
                transition: none !important;
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
<body class="<?= $bodyFont ?> bg-bsivory text-bscharcoal antialiased selection:bg-bsemerald selection:text-white">

    <!-- =========================================================================
         SIMPLIFIED TOP BAR (>=1100px only)
         Left: "Dammam, Kingdom of Saudi Arabia" | Right: Procurement Email & Phone
         ========================================================================= -->
    <div class="bg-bscharcoal text-slate-300 text-xs py-2 border-b border-stone-800 hidden nav:block">
        <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between">
            <!-- Left / Start: Location -->
            <div class="flex items-center gap-2 text-slate-300 font-medium">
                <svg class="w-3.5 h-3.5 text-bsgold shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
                <span><?= t('headquarters') ?></span>
            </div>

            <!-- Right / End: Procurement Email & Phone (No Tagline, No Language Switcher) -->
            <div class="flex items-center gap-6">
                <span class="flex items-center gap-1.5 text-slate-300">
                    <svg class="w-3.5 h-3.5 text-bsgold shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    <a href="mailto:<?= htmlspecialchars($site_config['contacts']['email']) ?>" class="hover:text-white transition-colors underline decoration-stone-600">
                        <?= htmlspecialchars($site_config['contacts']['email']) ?>
                    </a>
                </span>
                <span class="text-stone-600">|</span>
                <span class="flex items-center gap-1.5 text-slate-300 font-mono">
                    <svg class="w-3.5 h-3.5 text-bsgold shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
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
    <header id="site-header" class="sticky top-0 z-40 bg-white/95 backdrop-blur-md border-b border-stone-200/90 transition-all w-full shadow-xs">
        <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="header-inner flex items-center justify-between h-[68px] sm:h-20 w-full transition-all">
                
                <!-- Logo & Brand Lockup (Official Brand Identity Kit Horizontal Lockup) -->
                <a href="<?= route_url('') ?>" class="flex items-center shrink-0 me-2 sm:me-3 xl:me-6 focus:outline-none focus:ring-2 focus:ring-bsemerald rounded group py-1" aria-label="<?= t('company_name') ?>">
                    <?php if ($lang === 'ar'): ?>
                        <img src="<?= asset_url('public/images/logo-horizontal-ar.svg') ?>" alt="<?= t('company_name') ?>" class="h-10 sm:h-11 md:h-11 xl:h-12 w-auto max-w-[210px] sm:max-w-[260px] xl:max-w-none object-contain transition-transform group-hover:scale-[1.02]">
                    <?php else: ?>
                        <img src="<?= asset_url('public/images/Better_Supply_Horizontal_Transparent.png') ?>" alt="<?= t('company_name') ?>" class="h-10 sm:h-11 md:h-11 xl:h-12 w-auto max-w-[210px] sm:max-w-[260px] xl:max-w-none object-contain transition-transform group-hover:scale-[1.02]">
                    <?php endif; ?>
                </a>

                <!-- Desktop Navigation Links (Recommended Main Navigation: Home | About Us | Products & Services | Industries | Global Sourcing | Partnerships | Contact Us) -->
                <nav class="hidden nav:flex items-center gap-2 xl:gap-4 2xl:gap-6 text-[13.5px] xl:text-[14px] 2xl:text-[14.5px] font-semibold text-bscharcoal">
                    
                    <!-- Home -->
                    <a href="<?= route_url('') ?>" class="nav-item-link hover:text-bsemerald transition-colors <?= ($page === 'home') ? 'is-active text-bsemerald font-bold' : '' ?>">
                        <?= t('nav.home') ?>
                    </a>

                    <!-- About Us -->
                    <a href="<?= route_url('about') ?>" class="nav-item-link hover:text-bsemerald transition-colors <?= ($page === 'about') ? 'is-active text-bsemerald font-bold' : '' ?>">
                        <?= t('nav.about') ?>
                    </a>

                    <!-- Products & Services Dropdown (Organized Multi-Category Menu A - I) -->
                    <div class="relative dropdown py-2">
                        <button type="button" class="nav-item-link hover:text-bsemerald inline-flex items-center transition-colors focus:outline-none <?= in_array($page, ['products', 'industrial-salts', 'oilfield-chemicals', 'water-treatment', 'fertilizers', 'coco-peat', 'packaging-disposables', 'other-trading']) ? 'is-active text-bsemerald font-bold' : '' ?>" aria-haspopup="true">
                            <span><?= t('nav.products') ?></span>
                            <svg class="w-4 h-4 text-bsmuted ms-1 group-hover:text-bsemerald transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        
                        <!-- Dropdown Menu (Organized A - I Display Sequence) -->
                        <div class="dropdown-menu hidden absolute <?= ($lang === 'ar') ? 'right-0' : 'left-0' ?> top-full w-96 bg-white border border-stone-200 rounded-xl shadow-2xl py-2 z-50">
                            <a href="<?= route_url('products') ?>" class="flex items-center justify-between px-4 py-2.5 text-xs font-bold uppercase tracking-wider text-bsemerald border-b border-stone-100 hover:bg-stone-50 transition-colors">
                                <span><?= t('nav.products_overview') ?></span>
                                <span class="rtl:rotate-180">&rarr;</span>
                            </a>
                            <div class="max-h-[70vh] overflow-y-auto divide-y divide-stone-100 text-xs">
                                <a href="<?= route_url('products') ?>#cat-a" class="block px-4 py-2.5 hover:bg-stone-50 text-slate-700 hover:text-bsemerald transition-colors">
                                    <span class="font-bold text-bsgold block">A. <?= t('nav.cat_a') ?></span>
                                </a>
                                <a href="<?= route_url('products') ?>#cat-b" class="block px-4 py-2.5 hover:bg-stone-50 text-slate-700 hover:text-bsemerald transition-colors">
                                    <span class="font-bold text-bsgold block">B. <?= t('nav.cat_b') ?></span>
                                </a>
                                <a href="<?= route_url('products') ?>#cat-c" class="block px-4 py-2.5 hover:bg-stone-50 text-slate-700 hover:text-bsemerald transition-colors">
                                    <span class="font-bold text-bsgold block">C. <?= t('nav.cat_c') ?></span>
                                </a>
                                <a href="<?= route_url('products') ?>#cat-d" class="block px-4 py-2.5 hover:bg-stone-50 text-slate-700 hover:text-bsemerald transition-colors">
                                    <span class="font-bold text-slate-600 block">D. <?= t('nav.cat_d') ?></span>
                                </a>
                                <a href="<?= route_url('products') ?>#cat-e" class="block px-4 py-2.5 hover:bg-stone-50 text-slate-700 hover:text-bsemerald transition-colors">
                                    <span class="font-bold text-slate-600 block">E. <?= t('nav.cat_e') ?></span>
                                </a>
                                <a href="<?= route_url('products') ?>#cat-f" class="block px-4 py-2.5 hover:bg-stone-50 text-slate-700 hover:text-bsemerald transition-colors">
                                    <span class="font-bold text-slate-600 block">F. <?= t('nav.cat_f') ?></span>
                                </a>
                                <a href="<?= route_url('products') ?>#cat-g" class="block px-4 py-2.5 hover:bg-stone-50 text-slate-700 hover:text-bsemerald transition-colors">
                                    <span class="font-bold text-slate-600 block">G. <?= t('nav.cat_g') ?></span>
                                </a>
                                <a href="<?= route_url('products') ?>#cat-h" class="block px-4 py-2.5 hover:bg-stone-50 text-slate-700 hover:text-bsemerald transition-colors">
                                    <span class="font-bold text-slate-600 block">H. <?= t('nav.cat_h') ?></span>
                                </a>
                                <a href="<?= route_url('international-trading') ?>" class="block px-4 py-2.5 hover:bg-stone-50 text-slate-700 hover:text-bsemerald transition-colors">
                                    <span class="font-bold text-bsemerald block">I. <?= t('nav.cat_i') ?></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Industries -->
                    <a href="<?= route_url('industries') ?>" class="nav-item-link hover:text-bsemerald transition-colors <?= ($page === 'industries') ? 'is-active text-bsemerald font-bold' : '' ?>">
                        <?= t('nav.industries') ?>
                    </a>
                    
                    <!-- Global Sourcing -->
                    <a href="<?= route_url('international-trading') ?>" class="nav-item-link hover:text-bsemerald transition-colors <?= ($page === 'international-trading') ? 'is-active text-bsemerald font-bold' : '' ?>">
                        <?= t('nav.global_sourcing') ?>
                    </a>
                    
                    <!-- Partnerships -->
                    <a href="<?= route_url('partners') ?>" class="nav-item-link hover:text-bsemerald transition-colors <?= ($page === 'partners') ? 'is-active text-bsemerald font-bold' : '' ?>">
                        <?= t('nav.partners') ?>
                    </a>

                    <!-- Contact Us -->
                    <a href="<?= route_url('contact') ?>" class="nav-item-link hover:text-bsemerald transition-colors <?= ($page === 'contact') ? 'is-active text-bsemerald font-bold' : '' ?>">
                        <?= t('nav.contact') ?>
                    </a>
                </nav>

                <!-- Actions: Language Switcher Pill + Request Quotation Button (>=1200px) -->
                <div class="hidden nav:flex items-center gap-2 xl:gap-3 shrink-0 ms-2 xl:ms-4">
                    <!-- Download Company Profile Button -->
                    <a href="<?= asset_url('public/docs/Better_Supply_Company_Profile.pdf') ?>" target="_blank" class="hidden xl:inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-xs font-bold border border-emerald-300 bg-white hover:bg-emerald-50 text-bsemerald transition-all shadow-xs" title="<?= t('nav.download_profile') ?>">
                        <svg class="w-3.5 h-3.5 text-bsgold shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                        <span><?= t('nav.download_profile') ?></span>
                    </a>

                    <!-- Language Switcher Pill -->
                    <a href="<?= route_url($page, t('switch_lang_code')) ?>" class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold border border-stone-300 bg-stone-100 hover:bg-stone-200 text-bsemerald hover:text-bsforest transition-all shadow-xs" aria-label="Switch Language">
                        <?= ($lang === 'ar') ? 'EN' : 'العربية' ?>
                    </a>

                    <!-- Prominent Request Quotation Button -->
                    <a href="<?= route_url('contact') ?>#rfq-form" class="h-[42px] px-4 xl:px-5 whitespace-nowrap inline-flex items-center justify-center font-bold text-xs xl:text-sm rounded-lg text-white bg-bsemerald hover:bg-bsforest shadow-md transition-all transform hover:-translate-y-0.5 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-bsemerald">
                        <?= t('nav.request_rfq') ?>
                    </a>
                </div>

                <!-- Mobile Header Actions (<1200px) -->
                <div class="flex items-center gap-2 sm:gap-3 nav:hidden shrink-0">
                    <a href="<?= route_url($page, t('switch_lang_code')) ?>" class="text-xs font-bold text-bsemerald bg-stone-100 border border-stone-300 px-2.5 py-1.5 rounded-lg min-h-[38px] flex items-center justify-center shadow-xs hover:bg-stone-200 transition-colors" aria-label="Switch Language">
                        <?= ($lang === 'ar') ? 'EN' : 'العربية' ?>
                    </a>
                    <button type="button" id="mobile-menu-btn" class="w-10 h-10 flex items-center justify-center text-bscharcoal hover:text-bsemerald focus:outline-none rounded-lg border border-stone-300 bg-white shadow-xs transition-colors" aria-label="Open Navigation Menu" aria-expanded="false" aria-controls="mobile-drawer">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                    </button>
                </div>

            </div>
        </div>
    </header>

    <!-- =========================================================================
         MOBILE SLIDE-IN DRAWER (<1200px) - Modern Clean Better Supply Interface
         ========================================================================= -->
    <div id="mobile-drawer" class="fixed inset-0 z-[100] text-bscharcoal hidden flex-col w-full h-[100dvh] transition-all duration-300 overflow-hidden bg-white" aria-hidden="true">
            
            <!-- Drawer Top Header -->
            <div class="flex items-center justify-between px-5 h-[68px] border-b border-stone-200 shrink-0 bg-stone-50">
                <a href="<?= route_url('') ?>" class="flex items-center gap-2">
                    <?php if ($lang === 'ar'): ?>
                        <img src="<?= asset_url('public/images/logo-horizontal-ar.svg') ?>" alt="<?= t('company_name') ?>" class="h-10 w-auto max-w-[200px] object-contain">
                    <?php else: ?>
                        <img src="<?= asset_url('public/images/Better_Supply_Horizontal_Transparent.png') ?>" alt="<?= t('company_name') ?>" class="h-10 w-auto max-w-[200px] object-contain">
                    <?php endif; ?>
                </a>
                <div class="flex items-center gap-2">
                    <a href="<?= route_url($page, t('switch_lang_code')) ?>" class="text-xs font-bold text-bsemerald bg-white border border-stone-300 px-3 py-1.5 rounded-md shadow-xs">
                        <?= ($lang === 'ar') ? 'EN' : 'العربية' ?>
                    </a>
                    <button type="button" id="mobile-close-btn" class="w-10 h-10 flex items-center justify-center text-slate-700 hover:text-bsemerald hover:bg-stone-200 focus:outline-none rounded-full border border-stone-300 transition-colors" aria-label="Close Navigation Menu">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </button>
                </div>
            </div>

            <!-- Scrollable Drawer Body with Clean Better Supply Cards -->
            <div class="flex-1 overflow-y-auto px-5 py-5 space-y-2 text-sm font-medium bg-stone-50/60">
                
                <!-- Home -->
                <a href="<?= route_url('') ?>" class="flex items-center justify-between p-3.5 rounded-xl border border-stone-200 bg-white hover:border-bsemerald transition-all <?= ($page === 'home') ? 'border-bsemerald text-bsemerald font-bold bg-emerald-50/50' : 'text-slate-800' ?>">
                    <span class="font-semibold"><?= t('nav.home') ?></span>
                    <span class="text-xs text-slate-400 rtl:rotate-180">&rarr;</span>
                </a>
                
                <!-- About Us -->
                <a href="<?= route_url('about') ?>" class="flex items-center justify-between p-3.5 rounded-xl border border-stone-200 bg-white hover:border-bsemerald transition-all <?= ($page === 'about') ? 'border-bsemerald text-bsemerald font-bold bg-emerald-50/50' : 'text-slate-800' ?>">
                    <span class="font-semibold"><?= t('nav.about') ?></span>
                    <span class="text-xs text-slate-400 rtl:rotate-180">&rarr;</span>
                </a>

                <!-- Products & Services Accordion -->
                <div class="rounded-xl border border-stone-200 bg-white p-3.5 shadow-xs">
                    <button type="button" id="mobile-products-accordion-btn" class="w-full flex items-center justify-between text-start font-medium hover:text-bsemerald focus:outline-none min-h-[36px]">
                        <span class="font-bold text-bscharcoal"><?= t('nav.products') ?> (9)</span>
                        <svg id="accordion-arrow" class="w-4 h-4 text-bsemerald transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    
                    <div id="mobile-products-accordion-body" class="hidden border-s-2 border-bsemerald ms-2 ps-3 pt-3 pb-1 space-y-2 text-xs mt-2 bg-stone-50 rounded-lg p-3">
                        <a href="<?= route_url('products') ?>" class="block py-1.5 font-bold uppercase tracking-wider text-bsemerald border-b border-stone-200">
                            <?= t('nav.products_overview') ?> &rarr;
                        </a>
                        <a href="<?= route_url('products') ?>#cat-a" class="block py-1.5 text-slate-700 hover:text-bsemerald font-semibold">
                            A. <?= t('nav.cat_a') ?>
                        </a>
                        <a href="<?= route_url('products') ?>#cat-b" class="block py-1.5 text-slate-700 hover:text-bsemerald font-semibold">
                            B. <?= t('nav.cat_b') ?>
                        </a>
                        <a href="<?= route_url('products') ?>#cat-c" class="block py-1.5 text-slate-700 hover:text-bsemerald font-semibold">
                            C. <?= t('nav.cat_c') ?>
                        </a>
                        <a href="<?= route_url('products') ?>#cat-d" class="block py-1.5 text-slate-700 hover:text-bsemerald">
                            D. <?= t('nav.cat_d') ?>
                        </a>
                        <a href="<?= route_url('products') ?>#cat-e" class="block py-1.5 text-slate-700 hover:text-bsemerald">
                            E. <?= t('nav.cat_e') ?>
                        </a>
                        <a href="<?= route_url('products') ?>#cat-f" class="block py-1.5 text-slate-700 hover:text-bsemerald">
                            F. <?= t('nav.cat_f') ?>
                        </a>
                        <a href="<?= route_url('products') ?>#cat-g" class="block py-1.5 text-slate-700 hover:text-bsemerald">
                            G. <?= t('nav.cat_g') ?>
                        </a>
                        <a href="<?= route_url('products') ?>#cat-h" class="block py-1.5 text-slate-700 hover:text-bsemerald">
                            H. <?= t('nav.cat_h') ?>
                        </a>
                        <a href="<?= route_url('international-trading') ?>" class="block py-1.5 text-slate-700 hover:text-bsemerald font-bold text-bsemerald">
                            I. <?= t('nav.cat_i') ?>
                        </a>
                    </div>
                </div>

                <!-- Industries -->
                <a href="<?= route_url('industries') ?>" class="flex items-center justify-between p-3.5 rounded-xl border border-stone-200 bg-white hover:border-bsemerald transition-all <?= ($page === 'industries') ? 'border-bsemerald text-bsemerald font-bold bg-emerald-50/50' : 'text-slate-800' ?>">
                    <span class="font-semibold"><?= t('nav.industries') ?></span>
                    <span class="text-xs text-slate-400 rtl:rotate-180">&rarr;</span>
                </a>
                
                <!-- Global Sourcing -->
                <a href="<?= route_url('international-trading') ?>" class="flex items-center justify-between p-3.5 rounded-xl border border-stone-200 bg-white hover:border-bsemerald transition-all <?= ($page === 'international-trading') ? 'border-bsemerald text-bsemerald font-bold bg-emerald-50/50' : 'text-slate-800' ?>">
                    <span class="font-semibold"><?= t('nav.global_sourcing') ?></span>
                    <span class="text-xs text-slate-400 rtl:rotate-180">&rarr;</span>
                </a>
                
                <!-- Partnerships -->
                <a href="<?= route_url('partners') ?>" class="flex items-center justify-between p-3.5 rounded-xl border border-stone-200 bg-white hover:border-bsemerald transition-all <?= ($page === 'partners') ? 'border-bsemerald text-bsemerald font-bold bg-emerald-50/50' : 'text-slate-800' ?>">
                    <span class="font-semibold"><?= t('nav.partners') ?></span>
                    <span class="text-xs text-slate-400 rtl:rotate-180">&rarr;</span>
                </a>
                
                <!-- Contact Us -->
                <a href="<?= route_url('contact') ?>" class="flex items-center justify-between p-3.5 rounded-xl border border-stone-200 bg-white hover:border-bsemerald transition-all <?= ($page === 'contact') ? 'border-bsemerald text-bsemerald font-bold bg-emerald-50/50' : 'text-slate-800' ?>">
                    <span class="font-semibold"><?= t('nav.contact') ?></span>
                    <span class="text-xs text-slate-400 rtl:rotate-180">&rarr;</span>
                </a>

                <!-- Download Company Profile Link -->
                <a href="<?= asset_url('public/docs/Better_Supply_Company_Profile.pdf') ?>" target="_blank" class="flex items-center justify-between p-3.5 rounded-xl border border-emerald-300 bg-emerald-50/30 text-bsemerald hover:bg-emerald-50 transition-all font-semibold">
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-bsgold shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                        <span><?= t('nav.download_profile') ?> (PDF)</span>
                    </div>
                    <span class="text-xs text-bsemerald rtl:rotate-180">&rarr;</span>
                </a>
            </div>

            <!-- Drawer Bottom Action Dock -->
            <div class="p-5 border-t border-stone-200 shrink-0 space-y-3 bg-white">
                <div class="grid grid-cols-2 gap-2 text-xs">
                    <a href="tel:<?= htmlspecialchars($site_config['contacts']['phone']) ?>" class="bg-stone-100 hover:bg-stone-200 text-slate-800 text-center py-2.5 rounded-lg font-semibold flex items-center justify-center gap-1.5 border border-stone-300">
                        <svg class="w-3.5 h-3.5 text-bsemerald" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        <span><?= ($lang === 'ar') ? 'اتصال مباشر' : 'Call Desk' ?></span>
                    </a>
                    <a href="mailto:<?= htmlspecialchars($site_config['contacts']['email']) ?>" class="bg-stone-100 hover:bg-stone-200 text-slate-800 text-center py-2.5 rounded-lg font-semibold flex items-center justify-center gap-1.5 border border-stone-300">
                        <svg class="w-3.5 h-3.5 text-bsemerald" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        <span><?= ($lang === 'ar') ? 'البريد' : 'Email' ?></span>
                    </a>
                </div>
                <a href="<?= route_url('contact') ?>#rfq-form" onclick="closeDrawer()" class="w-full h-[44px] flex items-center justify-center font-bold text-xs uppercase tracking-wider text-white bg-bsemerald hover:bg-bsforest rounded-lg shadow-md transition-all">
                    <?= t('nav.request_rfq') ?>
                </a>
            </div>

        </div>

    <!-- JavaScript for Sticky Header, Accordion & Mobile Drawer -->
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
                accordionBtn.addEventListener('click', function(e) {
                    e.stopPropagation();
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

            // Mobile Navigation Drawer (Desert Iron Standard)
            const menuBtn = document.getElementById('mobile-menu-btn');
            const closeBtn = document.getElementById('mobile-close-btn');
            const drawer = document.getElementById('mobile-drawer');

            window.openDrawer = function() {
                if (!drawer) return;
                drawer.classList.remove('hidden');
                drawer.classList.add('flex');
                document.body.style.overflow = 'hidden';
                if (menuBtn) menuBtn.setAttribute('aria-expanded', 'true');
                drawer.setAttribute('aria-hidden', 'false');
            };

            window.closeDrawer = function() {
                if (!drawer) return;
                drawer.classList.add('hidden');
                drawer.classList.remove('flex');
                document.body.style.overflow = '';
                if (menuBtn) menuBtn.setAttribute('aria-expanded', 'false');
                drawer.setAttribute('aria-hidden', 'true');
            };

            if (menuBtn) menuBtn.addEventListener('click', openDrawer);
            if (closeBtn) closeBtn.addEventListener('click', closeDrawer);

            if (drawer) {
                drawer.addEventListener('click', function(e) {
                    if (e.target === drawer) closeDrawer();
                });
            }

            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && drawer && !drawer.classList.contains('hidden')) {
                    closeDrawer();
                }
            });
        })();
    </script>

    <main class="min-h-screen">
