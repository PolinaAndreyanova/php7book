<?php
$str = "2015-12-15";
$re = "|^(?<year>\d{4})-(?<month>\d{2})-(?'day'\d{2})$|";
preg_match($re, $str, $arMatches) or die("Соответствие не найдено");
echo "День: " . $arMatches['day'] . "<br>";
echo "Месяц: " . $arMatches['month'] . "<br>";
echo "Год: " . $arMatches['year'] . "<br>";