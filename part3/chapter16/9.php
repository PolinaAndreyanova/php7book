<?php
$file = "file.txt";

fclose(fopen($file, "a+b"));

$f = fopen($file, "r+b") or die("Не могу открыть файл!");

flock($f, LOCK_SH);

// . . .

fclose($f);