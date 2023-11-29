<?php
$arArr1 = [3, 4, 2, 7, 1, 5];
$arArr2 = ["word", "Hello", "yes", "no", "apple", "wet"];

array_multisort($arArr1, SORT_DESC, SORT_NUMERIC, $arArr2);

print_r($arArr1);
print_r($arArr2);