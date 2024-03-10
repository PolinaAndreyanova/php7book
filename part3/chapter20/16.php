<?php
$str = '<hTmL><bOdY>Hello world!</bOdY></html>';

$str = preg_replace_callback_array(
    [
        '{(?<btag></?)(?<content>\w+)(?<etag>.*?>)}s' => function($arM) {
            return $arM['btag'] . strtoupper($arM['content']) . $arM['etag'];
        },
        '{(?<=>)([^<>]+?)(?=<)}s' => function($arM) { 
            return "<strong>$arM[1]</strong>"; 
        }
    ],
    $str
);

echo htmlspecialchars($str);