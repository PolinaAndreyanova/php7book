<?php
function GetUniques($text, &$nOrigWords = false) {
    $arWords = preg_split("/([^[:alnum:]]|['-])+/s", $text);
    $nOrigWords = count($arWords);
    $arWords = array_map("strtolower", $arWords);
    $arWords = array_unique($arWords);
    return $arWords;
}

setlocale(LC_ALL, 'ru_RU.UTF-8');

$fname = "largetextfile.txt";
$text = file_get_contents($fname);
$arUniq = GetUniques($text, $nOrig);

echo "Было слов: $nOrig<br>";
echo "Стало слов: " . count($arUniq) . "<br>";
echo join(" ", $arUniq);