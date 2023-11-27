<?php
function &Reference() {
    $value = 3;
    while ($value > 0) {
        yield $value;
    }
}

foreach (Reference() as &$number) {
    echo (--$number) . " ";
}