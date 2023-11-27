<?php
function Simple($from = 0, $to = 100) {
    for($i = $from; $i < $to; $i++) {
        echo "значение = $i<br>";
        yield $i;
    }
}

$generator = Simple();

echo gettype($generator);