<?php
$numbers = [100, 313, 605];
foreach ($numbers as $v) {
    $v++;
}
echo "Элементы массива: ";
foreach ($numbers as $elt) {
    echo "$elt ";
}
// print_r($numbers);