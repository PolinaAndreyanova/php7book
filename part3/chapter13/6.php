<?php
$from = ["{TITLE}", "{BODY}"];

$to   = [
    "Философия", 
    "Представляется логичным, что сомнение представляет онтологический смысл жизни. Отношение к современности поразительно."
];

$template = <<<MARKER
    <!DOCTYPE html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8" />
        <title>{TITLE}</title>
    </head>
    <body>
        {BODY}
    </body>
    </html>
MARKER;

echo str_replace($from, $to, $template);