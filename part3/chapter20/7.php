<?php
$str = "Hello, this <b>word</b> is bold!";
$re = '|<(\w+) [^>]* > (.*?) </\1>|xs';
preg_match($re, $str, $arMatches) or die("Нет тэгов.");
echo htmlspecialchars("'$arMatches[2]' обрамлено тэгом '$arMatches[1]'");