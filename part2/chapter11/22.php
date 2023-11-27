<?php
function Tabber($spaces, $Echo, ...$arPlanets) {
    $arNew = [];
    foreach ($arPlanets as $planet) {
        $arNew[] = str_repeat("&nbsp;", $spaces) . $planet;
    }

    $Echo(...$arNew);
}


$arPlanets = ["Меркурий", "Венера", "Земля", "Марс"];

Tabber(10, function(...$arStr) {
    foreach ($arStr as $v) {
        echo "$v<br>\n";
    }
}, ...$arPlanets);