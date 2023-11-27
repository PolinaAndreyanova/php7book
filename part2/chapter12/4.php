<?php
function Select($arArr, $Callback) {
    foreach($arArr as $value) {
        if ($Callback($value)) {
            yield $value;
        }
    }
}

// $arArr = [1, 2, 3, 4, 5, 6];

// $arSelect = Select($arArr, function ($e) {
//     return $e % 2 == 0 ? true : false;
// });

// foreach($arSelect as $val) {
//     echo "$val ";
// }