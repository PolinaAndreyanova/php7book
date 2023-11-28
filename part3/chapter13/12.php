<?php
$st = <<<HTML
    <b>Жирный текст</b>
    <code>Моноширинный текст</code>
    <a href="http://www.dklab.ru">Ссылка</a>
    a<x && y>d
HTML;

echo "Исходный текст: $st";
echo "<hr>После удаления тэгов: " . strip_tags($st, "<code><b>");