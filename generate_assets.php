<?php
/**
 * Better Supply Trading Establishment - Asset Generation Script (Updated)
 * Creates clean geometric monogram logos (EN/AR, dark/light) without placeholder badges,
 * tight viewBoxes to prevent mobile header overflow.
 */

$img_dir = __DIR__ . '/public/images';
if (!is_dir($img_dir)) {
    mkdir($img_dir, 0755, true);
}

// 1. Monogram Black (SVG)
$monogram_black_svg = <<<SVG
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 120" width="120" height="120" fill="none">
    <rect width="120" height="120" rx="16" fill="transparent"/>
    <path d="M28 24 H76 C87 24 94 31 94 42 C94 50 88 56 80 58 C90 61 96 68 96 80 C96 92 87 99 74 99 H28 V24 Z M44 38 V54 H72 C77 54 80 51 80 46 C80 41 77 38 72 38 H44 Z M44 68 V85 H74 C79 85 82 82 82 76.5 C82 71 79 68 74 68 H44 Z" fill="#0F172A"/>
    <path d="M54 48 L76 70 M76 48 L54 70" stroke="#047857" stroke-width="4" stroke-linecap="round"/>
</svg>
SVG;
file_put_contents($img_dir . '/logo-monogram-black.svg', $monogram_black_svg);

// 2. Monogram White (SVG)
$monogram_white_svg = <<<SVG
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 120" width="120" height="120" fill="none">
    <rect width="120" height="120" rx="16" fill="transparent"/>
    <path d="M28 24 H76 C87 24 94 31 94 42 C94 50 88 56 80 58 C90 61 96 68 96 80 C96 92 87 99 74 99 H28 V24 Z M44 38 V54 H72 C77 54 80 51 80 46 C80 41 77 38 72 38 H44 Z M44 68 V85 H74 C79 85 82 82 82 76.5 C82 71 79 68 74 68 H44 Z" fill="#FFFFFF"/>
    <path d="M54 48 L76 70 M76 48 L54 70" stroke="#34D399" stroke-width="4" stroke-linecap="round"/>
</svg>
SVG;
file_put_contents($img_dir . '/logo-monogram-white.svg', $monogram_white_svg);

// 3. Horizontal English Lockup (SVG) - Tight ViewBox (265x70)
$logo_horizontal_en = <<<SVG
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 265 70" width="265" height="70" fill="none">
    <!-- Monogram Mark -->
    <g transform="translate(4, 6) scale(0.48)">
        <rect width="120" height="120" rx="18" fill="#0F172A"/>
        <path d="M32 28 H72 C81 28 87 34 87 43 C87 50 82 55 75 57 C84 59 89 65 89 75 C89 85 81 92 70 92 H32 V28 Z M46 40 V52 H70 C74 52 76 50 76 46 C76 42 74 40 70 40 H46 Z M46 64 V80 H70 C74 80 77 77 77 72 C77 67 74 64 70 64 H46 Z" fill="#FFFFFF"/>
        <circle cx="98" cy="24" r="8" fill="#047857"/>
    </g>
    <!-- Corporate Typography -->
    <text x="70" y="34" font-family="'Montserrat', 'Inter', -apple-system, sans-serif" font-size="18.5" font-weight="800" letter-spacing="0.8" fill="#0F172A">BETTER SUPPLY</text>
    <text x="70" y="52" font-family="'Inter', -apple-system, sans-serif" font-size="8.8" font-weight="700" letter-spacing="1.2" fill="#64748B">TRADING ESTABLISHMENT</text>
</svg>
SVG;
file_put_contents($img_dir . '/logo-horizontal-en.svg', $logo_horizontal_en);
file_put_contents($img_dir . '/logo.svg', $logo_horizontal_en);

// 4. Horizontal English White Lockup (for dark background)
$logo_horizontal_en_white = <<<SVG
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 265 70" width="265" height="70" fill="none">
    <!-- Monogram Mark -->
    <g transform="translate(4, 6) scale(0.48)">
        <rect width="120" height="120" rx="18" fill="#FFFFFF"/>
        <path d="M32 28 H72 C81 28 87 34 87 43 C87 50 82 55 75 57 C84 59 89 65 89 75 C89 85 81 92 70 92 H32 V28 Z M46 40 V52 H70 C74 52 76 50 76 46 C76 42 74 40 70 40 H46 Z M46 64 V80 H70 C74 80 77 77 77 72 C77 67 74 64 70 64 H46 Z" fill="#0F172A"/>
        <circle cx="98" cy="24" r="8" fill="#10B981"/>
    </g>
    <!-- Corporate Typography -->
    <text x="70" y="34" font-family="'Montserrat', 'Inter', -apple-system, sans-serif" font-size="18.5" font-weight="800" letter-spacing="0.8" fill="#FFFFFF">BETTER SUPPLY</text>
    <text x="70" y="52" font-family="'Inter', -apple-system, sans-serif" font-size="8.8" font-weight="700" letter-spacing="1.2" fill="#94A3B8">TRADING ESTABLISHMENT</text>
</svg>
SVG;
file_put_contents($img_dir . '/logo-horizontal-en-white.svg', $logo_horizontal_en_white);
file_put_contents($img_dir . '/logo-white.svg', $logo_horizontal_en_white);

// 5. Horizontal Arabic Lockup (SVG) - RTL optimized (320x70)
$logo_horizontal_ar = <<<SVG
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 70" width="320" height="70" fill="none">
    <!-- Corporate Typography in Arabic -->
    <text x="246" y="34" text-anchor="end" font-family="'Cairo', 'IBM Plex Sans Arabic', sans-serif" font-size="18" font-weight="800" fill="#0F172A">مؤسسة أفضل توريد التجارية</text>
    <text x="246" y="52" text-anchor="end" font-family="'Inter', 'Cairo', sans-serif" font-size="8.5" font-weight="700" letter-spacing="1.2" fill="#64748B">BETTER SUPPLY TRADING ESTABLISHMENT</text>
    <!-- Monogram Mark on the right for RTL balance -->
    <g transform="translate(256, 6) scale(0.48)">
        <rect width="120" height="120" rx="18" fill="#0F172A"/>
        <path d="M32 28 H72 C81 28 87 34 87 43 C87 50 82 55 75 57 C84 59 89 65 89 75 C89 85 81 92 70 92 H32 V28 Z M46 40 V52 H70 C74 52 76 50 76 46 C76 42 74 40 70 40 H46 Z M46 64 V80 H70 C74 80 77 77 77 72 C77 67 74 64 70 64 H46 Z" fill="#FFFFFF"/>
        <circle cx="98" cy="24" r="8" fill="#047857"/>
    </g>
</svg>
SVG;
file_put_contents($img_dir . '/logo-horizontal-ar.svg', $logo_horizontal_ar);

// 6. Horizontal Arabic White Lockup
$logo_horizontal_ar_white = <<<SVG
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 70" width="320" height="70" fill="none">
    <text x="246" y="34" text-anchor="end" font-family="'Cairo', 'IBM Plex Sans Arabic', sans-serif" font-size="18" font-weight="800" fill="#FFFFFF">مؤسسة أفضل توريد التجارية</text>
    <text x="246" y="52" text-anchor="end" font-family="'Inter', 'Cairo', sans-serif" font-size="8.5" font-weight="700" letter-spacing="1.2" fill="#94A3B8">BETTER SUPPLY TRADING ESTABLISHMENT</text>
    <g transform="translate(256, 6) scale(0.48)">
        <rect width="120" height="120" rx="18" fill="#FFFFFF"/>
        <path d="M32 28 H72 C81 28 87 34 87 43 C87 50 82 55 75 57 C84 59 89 65 89 75 C89 85 81 92 70 92 H32 V28 Z M46 40 V52 H70 C74 52 76 50 76 46 C76 42 74 40 70 40 H46 Z M46 64 V80 H70 C74 80 77 77 77 72 C77 67 74 64 70 64 H46 Z" fill="#0F172A"/>
        <circle cx="98" cy="24" r="8" fill="#10B981"/>
    </g>
</svg>
SVG;
file_put_contents($img_dir . '/logo-horizontal-ar-white.svg', $logo_horizontal_ar_white);

echo "Logos regenerated with tight viewBoxes.\n";
