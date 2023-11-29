<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <title>Передача JSON-данных</title>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="./17.js"></script>
</head>

<body>
    <p id="js-hello">Здравствуйте!</p>
    <form action="./18.php" method="GET">
        <p>Имя: <input type="text" name="name" value="" /></p>
        <p>Фамилия: <input type="text" name="family" value="" /></p>
        <p><input type="submit" value="Представиться"><p>
    </form>
</body>

</html>