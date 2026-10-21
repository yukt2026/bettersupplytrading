<?php
/**
 * Better Supply Corporation - Product Thumbnail Generator
 * Generates 600x400 optimized JPG and WebP thumbnails from high-res banners and tailored graphic patterns.
 */

$img_dir = __DIR__ . '/public/images';

$items = [
    'thumb_salt_nacl' => ['banner' => 'banner_industrial_salts.jpg', 'title' => 'Sodium Chloride (NaCl)', 'sub' => 'Industrial & Chemical Grades'],
    'thumb_salt_vacuum' => ['banner' => 'banner_industrial_salts.jpg', 'title' => 'Vacuum & Solar Salt', 'sub' => 'Refined Crystalline NaCl'],
    'thumb_salt_kcl' => ['banner' => 'banner_industrial_salts.jpg', 'title' => 'Potassium Chloride (KCl)', 'sub' => 'Drilling & Technical Grade'],
    'thumb_salt_cacl2' => ['banner' => 'banner_industrial_salts.jpg', 'title' => 'Calcium Chloride (CaCl2)', 'sub' => 'Flakes, Pellets & Powder'],
    'thumb_oil_brine' => ['banner' => 'banner_oilfield.jpg', 'title' => 'Clear Completion Brines', 'sub' => 'CaBr2, NaBr & Formates'],
    'thumb_oil_barite' => ['banner' => 'banner_oilfield.jpg', 'title' => 'Drilling Barite (BaSO4)', 'sub' => 'High-Density Weighting Mineral'],
    'thumb_oil_bentonite' => ['banner' => 'banner_oilfield.jpg', 'title' => 'Bentonite & CaCO3', 'sub' => 'Viscosifiers & Bridging Agents'],
    'thumb_water_antiscalant' => ['banner' => 'banner_water_treatment.jpg', 'title' => 'RO Antiscalants', 'sub' => 'Membrane Scale Inhibitors'],
    'thumb_water_smbs' => ['banner' => 'banner_water_treatment.jpg', 'title' => 'Sodium Metabisulfite', 'sub' => 'Dechlorination & Antioxidant'],
    'thumb_water_pac' => ['banner' => 'banner_water_treatment.jpg', 'title' => 'Polyaluminium Chloride (PAC)', 'sub' => 'Inorganic Water Coagulant'],
    'thumb_water_softener' => ['banner' => 'banner_industrial_salts.jpg', 'title' => 'Water Softener Salt', 'sub' => 'Resin Regeneration Tablets'],
    'thumb_fert_urea' => ['banner' => 'banner_fertilizers.jpg', 'title' => 'Urea Fertilizer 46% N', 'sub' => 'Granular & Prilled Nitrogen'],
    'thumb_fert_npk' => ['banner' => 'banner_fertilizers.jpg', 'title' => 'NPK Compound Fertilizers', 'sub' => 'Balanced Agricultural Nutrients'],
    'thumb_fert_sop' => ['banner' => 'banner_fertilizers.jpg', 'title' => 'Potassium Sulphate (SOP)', 'sub' => 'Chloride-Free K2SO4'],
    'thumb_coco_block' => ['banner' => 'banner_coco_peat.jpg', 'title' => 'Coco Peat 5kg Blocks', 'sub' => 'India-Origin Natural Coir'],
    'thumb_coco_growbag' => ['banner' => 'banner_coco_peat.jpg', 'title' => 'Coir Grow Bags & Slabs', 'sub' => 'Greenhouse Hydroponic Media'],
    'thumb_pkg_carton' => ['banner' => 'banner_packaging.jpg', 'title' => 'Corrugated Carton Boxes', 'sub' => 'Single & Double Wall Export'],
    'thumb_pkg_disposables' => ['banner' => 'banner_disposables.jpg', 'title' => 'Commercial Disposables', 'sub' => 'Paper Foodservice Packaging'],
    'thumb_veh_minibus' => ['banner' => 'banner_vehicles.jpg', 'title' => 'Commercial Minibuses', 'sub' => 'Workforce Passenger Transport'],
    'thumb_veh_ambulance' => ['banner' => 'banner_vehicles.jpg', 'title' => 'Specialized Ambulances', 'sub' => 'Patient Transport Vehicles'],
    'thumb_office_copier' => ['banner' => 'banner_office_equipment.jpg', 'title' => 'Wholesale Office Machinery', 'sub' => 'Multifunction Production Copiers'],
];

foreach ($items as $filename => $info) {
    $src_path = $img_dir . '/' . $info['banner'];
    $out_w = 600;
    $out_h = 400;

    $thumb = imagecreatetruecolor($out_w, $out_h);

    if (file_exists($src_path)) {
        $source = imagecreatefromjpeg($src_path);
        $sw = imagesx($source);
        $sh = imagesy($source);

        // Sample a cropped section
        $crop_x = rand(0, max(0, $sw - 1000));
        $crop_y = rand(0, max(0, $sh - 650));
        $cw = min($sw - $crop_x, 1000);
        $ch = min($sh - $crop_y, 650);

        imagecopyresampled($thumb, $source, 0, 0, $crop_x, $crop_y, $out_w, $out_h, $cw, $ch);
        imagedestroy($source);
    } else {
        $bg = imagecolorallocate($thumb, 30, 41, 59);
        imagefilledrectangle($thumb, 0, 0, $out_w, $out_h, $bg);
    }

    // Add subtle dark gradient overlay at the bottom for readability
    $overlay_height = 100;
    for ($y = $out_h - $overlay_height; $y < $out_h; $y++) {
        $alpha = (int)(($y - ($out_h - $overlay_height)) / $overlay_height * 80);
        $black_trans = imagecolorallocatealpha($thumb, 15, 23, 42, 127 - $alpha);
        imageline($thumb, 0, $y, $out_w, $y, $black_trans);
    }

    // Border
    $border = imagecolorallocate($thumb, 51, 65, 85);
    imagerectangle($thumb, 0, 0, $out_w - 1, $out_h - 1, $border);

    // Save as JPG and WebP
    imagejpeg($thumb, $img_dir . '/' . $filename . '.jpg', 88);
    imagewebp($thumb, $img_dir . '/' . $filename . '.webp', 88);
    imagedestroy($thumb);
}

// Also convert banners to WebP for lightning-fast responsive loading!
$banners = glob($img_dir . '/banner_*.jpg');
$banners[] = $img_dir . '/hero_port_dusk.jpg';
foreach ($banners as $b) {
    $webp_name = preg_replace('/\.jpg$/i', '.webp', $b);
    if (!file_exists($webp_name) && file_exists($b)) {
        $img = imagecreatefromjpeg($b);
        if ($img) {
            imagewebp($img, $webp_name, 85);
            imagedestroy($img);
        }
    }
}

echo "Thumbnails and WebP responsive assets created successfully.\n";
