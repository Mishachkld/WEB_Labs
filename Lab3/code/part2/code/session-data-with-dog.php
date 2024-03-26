<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Собака</title>
</head>
<body>
<div>
    <?php
    if (!isset($_POST['name'], $_POST['dog'], $_POST['age'])) {
        header("Location: /");
        exit();
    }

    $_SESSION['data'] = [
        $_POST['name'],
        $_POST['age'],
        $_POST['dog']
    ];
    echo "<ui>";
    $dataWithDog = $_SESSION['data'];
    foreach ($dataWithDog as $item) {

            echo "<li>" . $item ;

    }
    echo "<ui>";

    ?>
</div>

</body>
</html>