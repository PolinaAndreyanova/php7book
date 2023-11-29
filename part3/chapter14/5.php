<?php
$arFiles = [
    "img10.gif",
    "img1.gif",
    "img2.gif",
    "img20.gif",
];

// asort($arFiles);
natsort($arFiles);

echo "<pre>"; 
print_r($arFiles);
echo "</pre>"; 