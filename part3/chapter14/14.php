<?php
$arArr = [
    "employee" => "Иван Иванов",
    "phones" => [
        "916 153 2854",
        "916 643 8420",
    ]
];

echo json_encode($arArr, JSON_UNESCAPED_UNICODE);