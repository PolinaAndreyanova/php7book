<?php
$str = "2015-12-15";
$re = '|^(?:\d{4})-(?:\d{2})-(\d{2})$|';
preg_match($re, $str, $arMatches) or die("Соответствие не найдено");
echo htmlspecialchars("День: " . $arMatches[1]);