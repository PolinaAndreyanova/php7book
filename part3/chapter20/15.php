<?php
$str = '<hTmL><bOdY style="background: white;">Hello world!</bOdY></html>';

$str = preg_replace_callback(
    '{(?<btag></?)(?<content>\w+)(?<etag>.*?>)}s',
    function ($arM) { 
        return $arM['btag'] . strtoupper($arM['content']) . $arM['etag']; 
    },
    $str
);

echo htmlspecialchars($str);