<?php
$file = "counter.dat";
// chmod("./counter.dat", 0777);
fclose(fopen($file, "a+b"));
$f = fopen($file, "r+t");
flock($f, LOCK_EX);
$count = fread($f, 100);
$count = (int)$count + 1;
ftruncate($f, 0);
fseek($f, 0, SEEK_SET);
fwrite($f, $count);
fclose($f);
echo $count;
