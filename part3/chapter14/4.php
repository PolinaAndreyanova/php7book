<?php
$arA = [
    "a" => "Zero",
    "b" => "Weapon",
    "c" => "Alpha",
    "d" => "Processor"
];

asort($arA);
$arA = array_reverse($arA);
print_r($arA);