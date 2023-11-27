<?php
function Collect($arArr, $Callback) {
    foreach($arArr as $key => $value) {
        yield $key => $Callback($value);
    }
}

$arArr = [
    "first" => 1,
    "second" => 2,
    "third" => 3,
    "fourth" => 4,
    "fifth" => 5,
    "sixth" => 6
];

$arCollect = Collect($arArr, function ($e) { 
    return $e * $e; 
});

foreach($arCollect as $key => $val) {
    echo "$val ($key) ";
}