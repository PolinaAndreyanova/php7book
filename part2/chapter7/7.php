<!DOCTYPE html>
<html lang="ru">
<head></head>
<body>
    <form action="warn.php">
        <input type="submit" name="doGO" value="Click!" />
    </form>
</body>
</html>
<?php
if ($_REQUEST["doGO"]) {
    echo "Вы нажали кнопку!";
}