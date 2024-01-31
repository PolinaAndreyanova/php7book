<?php
function MakeHex($st) {  
    for ($i = 0; $i < strlen($st); $i++) {
        $hex[] = sprintf("%02X", ord($st[$i])); // 0 - заполнитель, 2 - длина, X - 16й код в верхнем регистре
    }
    return join(" ", $hex);
}

$f = fopen(__FILE__, "rb");
echo makeHex(fgets($f, 100)), "<br>\n";

$f = fopen(__FILE__, "rt");
echo makeHex(fgets($f, 100)), "<br>\n";