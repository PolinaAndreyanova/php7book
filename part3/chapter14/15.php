<?php
$json = '{
    "employee": "Иван Иванов",
    "phones": [
        "916 153 2854",
        "916 643 8420"
    ]
}';

$arArr = json_decode($json, true);

echo "<pre>";
print_r($arArr); 
echo "</pre>";