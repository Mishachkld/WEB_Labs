<?php
// Сделать хранение объявлений в базе данных. Добавлять в базу и читать с базы.
$hostName = 'db';
$username = 'root';
$password = 'password';
$dbName = 'web';
$mysql = new mysqli($hostName, $username, $password, $dbName);

if (mysqli_connect_errno()) {
    echo "Connect to server MySql unavailable. Code error: " . mysqli_connect_error();
    exit("501");
}
$addDataQuery = 'INSERT INTO ad (email, title, description, category) VALUES("mishach@amogus.com", "smthing", "desc", "helicopter")';
$selectAllFromAD = 'SELECT * FROM ad ORDER BY created DESC ';

$mysql->query($addDataQuery);

if ($result = $mysql->query($selectAllFromAD)) {
    while ($row = $result->fetch_assoc()) {
        echo $row['email'] . " : " . $row['title'];
    }
    $result->close();
}
$mysql->close();
