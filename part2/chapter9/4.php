<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <title>Модель сценария для обработки формы</title>
</head>

<body>
    <?php
    $wasError = 0;

    if (isset($_REQUEST["doSubmit"])) {
        do {
            if ($_REQUEST["reloads"] != 1+1+7) { 
                $wasError = 1; 
                break; 
            }

            if ($_REQUEST["loader"] != "source") { 
                $wasError = 1; 
                break; 
            }

            echo "Вы внимательный человек, поздравляем!<br>";
            exit();
        } while (0);
    }
    if ($wasError) {
        echo "Вы ответили неверно, попробуйте еще раз.";
    }
    ?>
    <form action="<?=$_SERVER["REQUEST_URI"]?>" method="POST">
        Число перезагрузок: <input type="text" name="reloads" /><br>
        Загрузочная программа: <input type="text" name="loader" /><br>  
        <input type="submit" name="doSubmit" value="Ответить на вопросы" />
    </form>
</body>

</html>