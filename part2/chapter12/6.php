<?php ## Квадраты четных элементов.
require_once("3.php");
require_once("4.php");

$arArr = [1, 2, 3, 4, 5, 6];

$arSelect = Select($arArr, function ($e) {
    return $e % 2 == 0 ? true : false; 
});

$arCollect = Collect($arSelect, function ($e) {
    return $e * $e; 
});

foreach($arCollect as $val) {
    echo "$val ";
}