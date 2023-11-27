<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <title>Пример функции и ее использования</title>
</head>

<body>
    <?php
    function SelectItems($arItems, $selected = 0) { 
        $text = "";
        foreach ($arItems as $k => $v) { 
            if ($k === $selected) {
                $ch = " selected";
            } else {
                $ch = "";
            }
            $text .= "<option$ch value='$k'>$v</option>\n";   
        }  
        return $text;
    }

    $arNames = [
        "Weaving" => "Hugo",
        "Goddard" => "Paul", 
        "Taylor" => "Robert",
    ];

    if (isset($_REQUEST['surname'])) {
        $name = $arNames[$_REQUEST['surname']];
        echo "Вы выбрали: {$_REQUEST['surname']}, {$name} ";
    }
    ?>

    <form action="<?=$_SERVER['SCRIPT_NAME']?>" method="POST">
        Выберите имя: 
        <select name="surname">
            <?=SelectItems($arNames, $_REQUEST['surname'])?>
        </select><br />
        <input type="submit" value="Узнать фамилию">
    </form>
</body>

</html>