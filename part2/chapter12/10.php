<?php
function Crange($size) {
    for($i = 0; $i < $size; $i++) {
        yield $i;
    }
}

$arRange = Crange(1024000);

foreach($arRange as $i) {
    echo "$i ";
}

echo memory_get_usage() . "<br>";