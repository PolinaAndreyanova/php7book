<?php
function Collect($arArr, $Callback) {
    foreach($arArr as $value) {
        yield $Callback($value);
    }
}

// $arArr = [1, 2, 3, 4, 5, 6];
// $arCollect = Collect($arArr, function ($e) { 
//     return $e * $e; 
// });

// foreach($arCollect as $val) {
//     echo "$val ";
// }