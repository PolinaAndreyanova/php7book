<?php
$arTools = ["One", "Two", "Three", "Four"];

usort($arTools, function ($a, $b) {
    return strcmp($a, $b);
});

print_r($arTools);