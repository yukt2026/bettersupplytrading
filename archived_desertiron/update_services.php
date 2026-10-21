<?php
$content = file_get_contents('services.php');
$new_services = "$services = [
    ['title' => 'Structural Steel Fabrication & Erection', 'slug' => 'structural-steel', 'img' => 'structural_steel.jpg', 'desc' => 'Frames, columns, beams, trusses, platforms, supports, and modifications.'],
    ['title' => 'Pre-Engineered Buildings (PEB)', 'slug' => 'pre-engineered-buildings', 'img' => 'peb_warehouse.jpg', 'desc' => 'Warehouses, factories, workshops, storage and utility buildings.'],
    ['title' => 'Industrial Construction', 'slug' => 'industrial-construction', 'img' => 'civil_construction.jpg', 'desc' => 'Integrated steel, civil and industrial site works.'],
    ['title' => 'Pipeline & Industrial Piping', 'slug' => 'pipeline-piping', 'img' => 'architectural_work.jpg', 'desc' => 'Installation, fabrication, pipe supports, and related mechanical work.'],
    ['title' => 'Roof & Wall Cladding', 'slug' => 'roof-wall-cladding', 'img' => 'roof_wall_panels.jpg', 'desc' => 'Roof/wall systems, insulated/sandwich panels, flashings and accessories.'],
    ['title' => 'Standing Seam Roofing Systems', 'slug' => 'standing-seam-roofing', 'img' => 'shutdown_maintenance.jpg', 'desc' => 'Supply, installation support, and associated accessories.'],
    ['title' => 'Miscellaneous Metal Works', 'slug' => 'misc-metal-works', 'img' => 'trading_warehouse.jpg', 'desc' => 'Frames, access structures, brackets and customized steel items.'],
    ['title' => 'Fireproofing Works', 'slug' => 'fireproofing-works', 'img' => 'structural_steel.jpg', 'desc' => 'Project-specified systems and associated support.'],
    ['title' => 'Civil Works', 'slug' => 'civil-works', 'img' => 'civil_construction.jpg', 'desc' => 'Foundations, concrete, masonry, repairs and site improvements.'],
    ['title' => 'Fit-Out Works', 'slug' => 'fit-out-works', 'img' => 'architectural_work.jpg', 'desc' => 'Commercial/industrial finishing and related coordination.']
];";

$content = preg_replace('/\\$services = \[.*?\];/s', $new_services, $content);
file_put_contents('services.php', $content);
echo "Updated services.php";
