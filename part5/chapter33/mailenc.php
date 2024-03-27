<?php
function Mailenc($mail)
{
    list ($head, $body) = preg_split("/\r?\n\r?\n/s", $mail, 2);
    
    $encoding = '';
    $re = '/^Content-type:\s*\S+\s*;\s*charset\s*=\s*(\S+)/mi';

    if (preg_match($re, $head, $arP)) {
        $encoding = $arP[1];
    }
    
    $newhead = "";
    foreach (preg_split('/\r?\n/s', $head) as $line) {
        $line = MailencHeader($line, $encoding);
        $newhead .= "$line\r\n";
    }
    
    return "$newhead\r\n$body";
}

function MailencHeader($header, $encoding = 'UTF-8')
{
    return preg_replace_callback(
        '/([\x7F-\xFF][^<>\r\n]*)/s',
        function ($arP) use($encoding) {
            preg_match('/^(.*?)(\s*)$/s', $arP[1], $arSp);
            return "=?$encoding?B?" . base64_encode($arSp[1]) . "?=" . $arSp[2];
        },
        $header
    );
}