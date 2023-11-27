<?php
$arYep = array("реальность", true);
$arNein = array("реальность", "иллюзорна");

if ($arYep == $arNein) {
    echo "массивы равны<br>";
}

if ($arYep === $arNein) {
    echo "массивы эквивалентны<br>";
}