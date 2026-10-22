<?php
/**
 * Better Supply Trading Establishment - Brand Asset Generator
 * Generates verified brand SVGs, favicons, and aliases from the official Brand Identity Kit.
 */

$kit_dir = __DIR__ . '/public/images';
$icon_trans_path = $kit_dir . '/Better_Supply_BS_Icon_Transparent.png';
$icon_white_path = $kit_dir . '/Better_Supply_BS_Icon_White.png';
$icon_emerald_path = $kit_dir . '/Better_Supply_BS_Icon_Emerald.png';
$logo_horizontal_path = $kit_dir . '/Better_Supply_Horizontal_Transparent.png';
$logo_stacked_path = $kit_dir . '/Better_Supply_Primary_Stacked_Transparent.png';

if (!file_exists($icon_trans_path)) {
    die("Error: Better_Supply_BS_Icon_Transparent.png not found in {$kit_dir}\n");
}

$icon_trans_base64 = base64_encode(file_get_contents($icon_trans_path));
$icon_white_base64 = base64_encode(file_get_contents($icon_white_path));
$icon_emerald_base64 = base64_encode(file_get_contents($icon_emerald_path));

// 1. Generate Favicons (32x32, 16x16, 180x180, ICO)
$src_img = imagecreatefrompng($icon_trans_path);
imagealphablending($src_img, true);
imagesavealpha($src_img, true);
$orig_w = imagesx($src_img);
$orig_h = imagesy($src_img);

// Function to resize PNG with transparency
function create_resized_png($src, $w, $h, $dest_path) {
    global $orig_w, $orig_h;
    $dst = imagecreatetruecolor($w, $h);
    imagealphablending($dst, false);
    imagesavealpha($dst, true);
    $transparent = imagecolorallocatealpha($dst, 255, 255, 255, 127);
    imagefilledrectangle($dst, 0, 0, $w, $h, $transparent);
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $w, $h, $orig_w, $orig_h);
    imagepng($dst, $dest_path, 9);
    imagedestroy($dst);
}

// 32x32 PNG
create_resized_png($src_img, 32, 32, $kit_dir . '/favicon-32x32.png');
// 16x16 PNG
create_resized_png($src_img, 16, 16, $kit_dir . '/favicon-16x16.png');
// 180x180 Apple Touch Icon (on clean ivory/emerald background for high contrast)
$apple_touch = imagecreatetruecolor(180, 180);
$bg_col = imagecolorallocate($apple_touch, 0, 91, 63); // #005B3F Deep Emerald
imagefill($apple_touch, 0, 0, $bg_col);
// Add transparent monogram centered with 20px padding (140x140)
imagecopyresampled($apple_touch, $src_img, 20, 20, 0, 0, 140, 140, $orig_w, $orig_h);
imagepng($apple_touch, $kit_dir . '/apple-touch-icon.png', 9);
imagedestroy($apple_touch);

// Copy 32x32 favicon to root favicon.ico
copy($kit_dir . '/favicon-32x32.png', __DIR__ . '/favicon.ico');
copy($kit_dir . '/favicon-32x32.png', $kit_dir . '/favicon.ico');

imagedestroy($src_img);
echo "Favicons generated (16x16, 32x32, 180x180, favicon.ico).\n";

// 2. Favicon SVG
$favicon_svg = <<<SVG
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="100" height="100">
    <image href="data:image/png;base64,{$icon_trans_base64}" x="0" y="0" width="100" height="100"/>
</svg>
SVG;
file_put_contents($kit_dir . '/favicon.svg', $favicon_svg);

// 3. Monogram Black & White SVGs
$monogram_black_svg = <<<SVG
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="100" height="100">
    <image href="data:image/png;base64,{$icon_trans_base64}" x="0" y="0" width="100" height="100"/>
</svg>
SVG;
file_put_contents($kit_dir . '/logo-monogram-black.svg', $monogram_black_svg);

$monogram_white_svg = <<<SVG
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="100" height="100">
    <image href="data:image/png;base64,{$icon_white_base64}" x="0" y="0" width="100" height="100"/>
</svg>
SVG;
file_put_contents($kit_dir . '/logo-monogram-white.svg', $monogram_white_svg);

// 4. Horizontal English Full-Color Lockup (Light Background)
$logo_horizontal_en = <<<SVG
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 380 90" width="380" height="90" fill="none">
    <image href="data:image/png;base64,{$icon_trans_base64}" x="4" y="6" width="78" height="78"/>
    <text x="96" y="44" font-family="'Lato', Arial, sans-serif" font-size="28" font-weight="900" letter-spacing="-0.5">
        <tspan fill="#005B3F">BETTER </tspan><tspan fill="#242629">SUPPLY</tspan>
    </text>
    <text x="96" y="63" font-family="'Lato', Arial, sans-serif" font-size="11.5" font-weight="700" letter-spacing="3.2" fill="#C49A5A">TRADING ESTABLISHMENT</text>
    <text x="96" y="79" font-family="'Lato', Arial, sans-serif" font-size="9" font-weight="400" letter-spacing="0.5" fill="#6D7472">Connecting Markets. Supplying Industries.</text>
</svg>
SVG;
file_put_contents($kit_dir . '/logo-horizontal-en.svg', $logo_horizontal_en);
file_put_contents($kit_dir . '/logo.svg', $logo_horizontal_en);

// 5. Horizontal English White Lockup (Dark Background / Footer)
$logo_horizontal_en_white = <<<SVG
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 380 90" width="380" height="90" fill="none">
    <image href="data:image/png;base64,{$icon_trans_base64}" x="4" y="6" width="78" height="78"/>
    <text x="96" y="44" font-family="'Lato', Arial, sans-serif" font-size="28" font-weight="900" letter-spacing="-0.5" fill="#FFFFFF">
        <tspan fill="#FFFFFF">BETTER </tspan><tspan fill="#FFFFFF">SUPPLY</tspan>
    </text>
    <text x="96" y="63" font-family="'Lato', Arial, sans-serif" font-size="11.5" font-weight="700" letter-spacing="3.2" fill="#C49A5A">TRADING ESTABLISHMENT</text>
    <text x="96" y="79" font-family="'Lato', Arial, sans-serif" font-size="9" font-weight="400" letter-spacing="0.5" fill="#DAD2C5">Connecting Markets. Supplying Industries.</text>
</svg>
SVG;
file_put_contents($kit_dir . '/logo-horizontal-en-white.svg', $logo_horizontal_en_white);
file_put_contents($kit_dir . '/logo-white.svg', $logo_horizontal_en_white);

// 6. Horizontal Arabic Full-Color Lockup (Light Background - RTL Optimized)
$logo_horizontal_ar = <<<SVG
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 420 90" width="420" height="90" fill="none">
    <image href="data:image/png;base64,{$icon_trans_base64}" x="338" y="6" width="78" height="78"/>
    <text x="324" y="43" text-anchor="end" font-family="'Cairo', Arial, sans-serif" font-size="24" font-weight="800">
        <tspan fill="#005B3F">مؤسسة أفضل توريد </tspan><tspan fill="#242629">التجارية</tspan>
    </text>
    <text x="324" y="63" text-anchor="end" font-family="'Lato', Arial, sans-serif" font-size="10.5" font-weight="700" letter-spacing="2" fill="#C49A5A">BETTER SUPPLY TRADING ESTABLISHMENT</text>
    <text x="324" y="79" text-anchor="end" font-family="'Cairo', Arial, sans-serif" font-size="10" font-weight="600" fill="#6D7472">ربط الأسواق. توريد الصناعات.</text>
</svg>
SVG;
file_put_contents($kit_dir . '/logo-horizontal-ar.svg', $logo_horizontal_ar);

// 7. Horizontal Arabic White Lockup (Dark Background / Footer)
$logo_horizontal_ar_white = <<<SVG
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 420 90" width="420" height="90" fill="none">
    <image href="data:image/png;base64,{$icon_trans_base64}" x="338" y="6" width="78" height="78"/>
    <text x="324" y="43" text-anchor="end" font-family="'Cairo', Arial, sans-serif" font-size="24" font-weight="800" fill="#FFFFFF">
        مؤسسة أفضل توريد التجارية
    </text>
    <text x="324" y="63" text-anchor="end" font-family="'Lato', Arial, sans-serif" font-size="10.5" font-weight="700" letter-spacing="2" fill="#C49A5A">BETTER SUPPLY TRADING ESTABLISHMENT</text>
    <text x="324" y="79" text-anchor="end" font-family="'Cairo', Arial, sans-serif" font-size="10" font-weight="600" fill="#DAD2C5">ربط الأسواق. توريد الصناعات.</text>
</svg>
SVG;
file_put_contents($kit_dir . '/logo-horizontal-ar-white.svg', $logo_horizontal_ar_white);

// 8. Copy high-res PNGs to standard alias paths
copy($logo_horizontal_path, $kit_dir . '/logo.png');
copy($logo_horizontal_path, __DIR__ . '/assets/img/logo/logo.png');
copy($logo_stacked_path, $kit_dir . '/logo-stacked.png');
copy($icon_trans_path, $kit_dir . '/logo-monogram.png');

echo "All official brand logos (EN, AR, Dark, Light, SVGs and PNGs) generated successfully!\n";
