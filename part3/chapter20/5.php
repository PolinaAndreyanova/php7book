<?php
$str = " 15-16/2000       ";
$re = '{^\s* ( (\d+) \s*[[:punct:]]\s* (\d+) \s*[[:punct:]]\s* (\d+)) \s*$}xs';

preg_match($re, $str, $arMatches) or die("Not a date: $str");

echo "Дата без пробелов: '$arMatches[1]'<br>";
echo "День: $arMatches[2]<br>";
echo "Месяц: $arMatches[3]<br>";
echo "Год: $arMatches[4]<br>";