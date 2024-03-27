<?php
$text = "Cookies need love like everything does.";

$arTos = ["polina8277@mail.ru", "pelagea946@gmail.com"];

$tpl = file_get_contents("1.eml");

foreach ($arTos as $to) {
    $mail = $tpl;
    $mail = strtr($mail, [
        "{TO}" => $to,
        "{TEXT}" => $text,
    ]);

    list ($head, $body) = preg_split("/\r?\n\r?\n/s", $mail, 2);

    mail("", "", $body, $head);
}
