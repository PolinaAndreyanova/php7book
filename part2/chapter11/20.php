<?php
function MyEcho(...$arStr) {  
    foreach ($arStr as $v) {
        echo "$v<br>\n";
    }
}

function Tabber($spaces, ...$arPlanets) {
    $arNew = [];
    foreach ($arPlanets as $planet) {
        $arNew[] = str_repeat("&nbsp;", $spaces) . $planet;
    }

    call_user_func_array("MyEcho", $arNew);
}

Tabber(10, "Меркурий", "Венера", "Земля", "Марс");