<?php
function Silly() {  
    return [1, 2, 3];
}

$arArr = Silly();

var_dump($arArr);

list ($a, $b, $c) = Silly();

echo Silly()[2];