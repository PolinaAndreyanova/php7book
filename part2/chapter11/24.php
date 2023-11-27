<?php
$a = 100;
function &R() {
    global $a;
    return $a;
}

$b =& R();
$b = 0;

echo $a;