<?php
function Simple($from = 0, $to = 100) {
    for($i = $from; $i < $to; $i++) {
        echo "значение = $i<br>";
        yield $i;
    }
}

foreach(Simple() as $val) {
    echo "квадрат = " . ($val * $val) . "<br>";
    if ($val >= 5) {
        break;
    }
}