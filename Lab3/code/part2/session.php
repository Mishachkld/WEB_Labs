<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Сессия</title>
</head>
<body>
<div>
    <?php
    if (!isset($_POST['name'], $_POST['last-name'], $_POST['age'])) {
        header("Location: /");
        exit();
    }
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['last-name'] = $_POST['last-name'];
    $_SESSION['age'] = $_POST['age'];

    $name = $_SESSION['name'];
    $lastName = $_SESSION['last-name'];
    $age = $_SESSION['age'];

    echo "<p>" . "Имя: " . $name . "</p>";
    echo "<p>" . "Фамилия: " . $lastName . "</p>";
    echo "<p>" . "Возраст: " . $age . "</p>";
    ?>
</div>
</body>
</html>