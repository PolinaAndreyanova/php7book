<?php
function Generator() {
    yield 1;
    yield from [2, 3];
}

foreach(Generator() as $i) {
    echo "$i ";
}