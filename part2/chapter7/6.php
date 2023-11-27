<?php
class AgentSmith {}

$objSmit = new AgentSmith();
$objWesson = new AgentSmith();

if ($objSmit == $objWesson) {
    echo "объекты равны<br>";
}

if ($objSmit === $objWesson) {
    echo "объекты эквивалентны<br>";
}