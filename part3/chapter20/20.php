<?php
$text = 'Ссылка: (http://thematrix.com), www.ru?"a"=b, http://lozhki.net.';
echo HrefActivate($text);

function HrefActivate($text) {
    return preg_replace_callback(
        '{
        (?:
            (\w+://)
            |
            www\.
        )
        [\w-]+(\.[\w-]+)*
        (?: : \d+)?
        [^<>"\'()\[\]\s]*
        (?:
            (?<! [[:punct:]])
            | (?<= [-/&+*])
        )
        }xis',
        function ($arP) {
            $name = htmlspecialchars($arP[0]);  
            $href = !empty($arP[1]) ? $name : "http://$name";
            return "<a href=\"$href\">$name</a>";
        },
        $text
    );
}