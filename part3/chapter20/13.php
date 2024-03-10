<?php
$st = '<b>жирный текст</b>';
$re = '|<(\w+).*?>(.*?)</\1>|s';

preg_match($re, $st, $arP, PREG_OFFSET_CAPTURE);

echo "<pre>";
print_r($arP);
echo "</pre>";