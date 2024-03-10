<?php
$text = "Адреса: user-first@mail.ru, second.user@mail.ru.";

$html = preg_replace(
    '{
        [\w\-.]+
        @
        [\w-]+(\.[\w-]+)*
    }xs',
    '<a href="mailto:$0">$0</a>',
    $text
);

echo $html;