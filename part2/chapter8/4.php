<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8" />
    <title>Усовершенствованный скрипт блокировки сервера</title>
</head>
<body>
<?php if (!isset($_REQUEST["doGo"])) {?>
    <form action="<?=$_SERVER["SCRIPT_NAME"]?>">
        Логин: <input type="text" name="login" value="" /><br>
        Пароль: <input type="password" name="password" value="" /><br>
        <input type="submit" name="doGo" value="Нажмите кнопку!" />
    </form>
<?php } else {
        if ($_REQUEST["login"] == "root" && $_REQUEST["password"] == "Z10N0101") {
            echo "Доступ открыт для пользователя {$_REQUEST["login"]}";
            system("rundll32.exe user32.dll, LockWorkStation");
        } else {
            echo "Доступ закрыт!";
        }
    }?>
</body>
</html>