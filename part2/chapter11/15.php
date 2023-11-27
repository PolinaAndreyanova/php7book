<?php
function SelfCount() {
    static $count = 0;
    $count++;
    echo $count;
}

for ($i = 0; $i < 5; $i++) {
    SelfCount();
}