<?php
$a = 100;

function Test() { 
    global $a;
    unset($a);
}

Test();

echo $a;