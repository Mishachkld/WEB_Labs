<?php session_start();?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Лаба 3</title>
</head>
<body>
<div>
    <h1>Форма. Сессии и Куки. 1</h1>
    <form action="index.php" method="post">
        <label id="text" for="text">
            Description
            <textarea rows="4" name="text" required></textarea>
        </label>
        <input type="submit" value="save">
    </form>
    <?php
    if (isset($_POST['text'])) {
        $text = $_POST['text'];
        $wordCount = str_word_count($text);
        $charCount = strlen($text);
        echo "<p>" . "Колличество слов:" . $wordCount . "</p>";
        echo "<p>" . "Длина веденного текста:" . $charCount . "</p>";
    }?>
    <br>
    <h1>Форма. Сессии и Куки. Часть 2</h1>
    <form action="session.php" method="post">
        <label for="name">
            Имя
            <input name="name" required>
        </label>
        <label for="last-name">
            Фамилия
            <input name="last-name" required>
        </label>
        <label for="age">
            Возраст
            <input name="age" required>
        </label>
        <input type="submit" value="save">
    </form>



</div>


</body>
</html>