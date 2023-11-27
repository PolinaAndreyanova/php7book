<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8" />
    <title>Вывод параметров командной строки</title>
</head>
<body>
<?php
echo "Данные из командной строки: {$_SERVER["QUERY_STRING"]}"
?>
</body>
</html>