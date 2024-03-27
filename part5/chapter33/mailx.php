<?php
function Mailx($mail)
{
    list ($head, $body) = preg_split("/\r?\n\r?\n/s", $mail, 2);
    $to = "";
    if (preg_match('/^To:\s*([^\r\n]*)[\r\n]*/m', $head, $arP)) {
        $to = @$arP[1];
        $head = str_replace($arP[0], "", $head);
    }

    $subject = "";  
    if (preg_match('/^Subject:\s*([^\r\n]*)[\r\n]*/m', $head, $arP)) {
        $subject = @$arP[1];
        $head = str_replace($arP[0], "", $head);
    }
    
    mail($to, $subject, $body, trim($head));
}