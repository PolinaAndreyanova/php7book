<?php
include_once("mailx.php");
include_once("mailenc.php");

$text = "Well, now, ain't this a surprise?";
$arTos = ["Полина <polina8277@mail.ru>, Пелагея <pelagea946@gmail.com>"];
$tpl = file_get_contents("1.eml");

foreach ($arTos as $to) {
    $mail = $tpl;
    $mail = strtr($mail, [
        "{TO}" => $to,
        "{TEXT}" => $text,
    ]);
    $mail = Mailenc($mail);
    Mailx($mail);
}