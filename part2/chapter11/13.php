<?php
$arMonthes = [
    1 => "Январь",
    2 => "Февраль",
    12 => "Декабрь"
];

function GetMonthName($n) { 
    global $arMonthes;
    return $arMonthes[$n];
}

echo GetMonthName(2);