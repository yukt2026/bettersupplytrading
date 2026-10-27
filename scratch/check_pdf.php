<?php
$c = file_get_contents("public/docs/Better_Supply_Company_Profile.pdf");
preg_match_all("/\/Type\s*\/Page[^s]/", $c, $m);
echo "Page count: " . count($m[0]) . PHP_EOL;
