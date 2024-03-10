<?php
foreach (preg_grep('/^\d/s', glob("*")) as $fn) {
    echo "Файл примера: $fn<br>";
}