<?php
require 'WorkWithDB.php';

function redirectHome(): void
{
    header("Location: /");
    exit();
}

if (false === isset($_POST['email'], $_POST['category'], $_POST['description'], $_POST['type'])) {
//    redirectHome();
}

$mysql = WorkWithDataBase::getConnectToDataBase();

$email = $_POST['email'];
$category = $_POST['category'];
$description = $_POST['description'];
$type = $_POST['type'];
switch ($type){
    case "add":
        WorkWithDataBase::addElementInDataBase($mysql, $email, $category, $description);
        break;
    case "delete":
        WorkWithDataBase::deleteElementInDataBase($mysql, $email, $description);
        break;
    case "update":
        break;
}


redirectHome();