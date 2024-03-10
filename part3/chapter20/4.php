<?php
$text = "Привет от somebody@mail.ru, а также от other@mail.ru!";
$html = preg_replace(
    '/(\S+)@([a-z0-9.]+)/is',
    '<a href="mailto:$0">$0</a>',
    $text
);
echo $html;