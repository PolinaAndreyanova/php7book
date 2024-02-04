<?php
header("Content-type: text/plain");

$arSpec = [
    0 => ["pipe", "r"],
    1 => ["pipe", "w"],
    2 => ["file", "/tmp/error-output.txt", "a"]
];

$proc = proc_open("cat", $arSpec, $arPipes);

for ($i = 0; $i < 100; $i++) {
    fwrite($arPipes[0], "Hello World #$i!\n");
}
fclose($arPipes[0]);

while (!feof($arPipes[1])) {
    echo fgets($arPipes[1], 1024);
} 
fclose($arPipes[1]);

proc_close($proc);