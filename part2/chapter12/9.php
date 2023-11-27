<?php
function Crange($size) {
    $arArr = [];
    for($i = 0; $i < $size; $i++) {
        $arArr[] = $i;
    }
    return $arArr;
}

$arRange = Crange(1024000);

foreach($arRange as $i) {
    echo "$i ";
}

echo memory_get_usage() . "<br>";