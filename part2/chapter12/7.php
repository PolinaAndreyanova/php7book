<?php
function square($value) {
    yield $value * $value;
}

function even_square($arArr) {
    foreach($arArr as $value) {
        if($value % 2 == 0) {
            yield from square($value);
        }
    }
}

$arArr = [1, 2, 3, 4, 5, 6];

foreach(even_square($arArr) as $val) {
    echo "$val ";
}