<?php
$arNative = ["green", "red", "blue"];
$arColors = ["red", "yellow", "green", "cyan", "black"];

$arInter = array_intersect($arColors, $arNative);

echo "<pre>";
print_r($arInter);
echo "</pre>";