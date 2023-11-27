<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <title>Простейший PHP-сценарий</title>
</head>

<body>
    <h1>Здравствуйте!</h1>
    <p>
        <?php

        $dat = date("d.m y");
        $tm = date("h:i:s");

        echo "Текущая дата: $dat года<br>\n";
        echo "Текущее время: $tm<br>\n";

        echo "А вот квадраты и кубы первых 5 натуральных чисел:<br>\n";

        echo "<ul>\n";
        for ($i = 1; $i <= 5; $i++) {
            echo "<li>$i в квадрате = " . ($i * $i);
            echo ", $i в кубе = " . ($i * $i * $i) . "</li>\n";
        }
        ?>
        </ul>
    </p>
</body>

</html>