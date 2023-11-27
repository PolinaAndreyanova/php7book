<?php
$int = 10;
$str = "10";

if ($int == $str) {
    echo "переменные равны<br>";
}

$zero = 0;
$tsss = "";

if ($zero == $tsss) {
    echo "переменные равны<br>";
}

$zero = 0;
$tsss = "";

if ($zero === $tsss) {
    echo "переменные эквивалентны<br>";
}