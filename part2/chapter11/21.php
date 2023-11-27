<?php
$myEcho = function (...$arStr) {  
    foreach ($arStr as $v) {
        echo "$v<br>\n";
    }
};

$myEcho("Меркурий", "Венера", "Земля", "Марс");