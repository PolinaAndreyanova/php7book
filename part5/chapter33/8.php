<?php
include_once("mailx.php");
include_once("mailenc.php");
include_once("template.php");

$text = "Well, now, ain't this a surprise?";
$arTos = ["П <pelagea946@gmail.com>"];
$a = 1;

foreach ($arTos as $to) {
    $mail = Template("9.eml", [
        "to" => $to,
        "text" => $text,
    ]);
    $mail = Mailenc($mail);
    Mailx($mail);
}