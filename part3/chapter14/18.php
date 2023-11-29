<?php
$arArr = json_decode($_POST["json"], true);
$arName = trim(implode(" ", $arArr));
$arResult = "Здравствуйте";

if (!empty($arName)) {
    $arResult .= ", $arName";
}
$arResult .= "!";

echo htmlspecialchars($arResult);