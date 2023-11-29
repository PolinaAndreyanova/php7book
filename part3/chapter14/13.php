<?php
$arNative = ["green", "red", "blue"];
$arColors = ["red", "yellow", "green", "cyan"];

$arInter = array_unique(array_merge($arColors, $arNative));

echo "<pre>";
print_r($arInter);
echo "</pre>";