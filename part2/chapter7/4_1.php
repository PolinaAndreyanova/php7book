<?php
$arX = array(1, 2, 3);
$arY = array(1, 2, "3");

if ($x == $y) {
    echo "массивы равны<br>";
}

$arX = array(1, 2, 3);
$arY = array(1, 2, true);

if ($x == $y) {
    echo "массивы равны<br>";
}

class AgentSmith {}

$objSmit = new AgentSmith();
$objWesson = new AgentSmith();

if ($objSmit == $objWesson) {
    echo "объекты равны<br>";
}