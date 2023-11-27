<?php
function Block() {
    while(true) {
        $string = yield;
        echo $string;
    }
}

$block = Block();

$block->send("Hello, world!<br>");
$block->send("Hello, PHP!<br>");