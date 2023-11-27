<?php
$message = "Работа не может быть продолжена из-за ошибок:<br>";

$Check = function(array $arErrors) use ($message) {
    if (isset($arErrors) && count($arErrors) > 0) {
        echo $message;
        foreach($arErrors as $error) {
            echo "$error<br>";
        }
    }
};

$Check([]);

$arErorrs[] = "Заполните имя пользователя";
$Check($arErorrs);

$message = "Список требований";

$arErorrs = ["PHP", "MySQL", "memcache"];
$Check($arErorrs);
