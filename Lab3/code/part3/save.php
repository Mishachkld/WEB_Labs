<?php

function redirectHome(): void
{
    header("Location: /"); // WEB_Labs/Lab3/code/part3/html/page.html
    exit();
}


if (false === isset($_POST['email'], $_POST['category'], $_POST['title'], $_POST['description'])) {
    header("Location: /"); // WEB_Labs/Lab3/code/part3/html/page.html
    exit();
}

$email = $_POST['email'];
$category = $_POST['category'];
$title = $_POST['title'];
$description = $_POST['description'];
$fileDescription = $category . "\n"
    . $email . "\n"
    . $title . "\n"
    . $description;

$filePath = "categories/{$category}/{$title}.txt";
$dirPath = "categories/{$category}";
if (!is_dir($dirPath)){
    mkdir($dirPath, 0777);
}
if (false === file_put_contents($filePath, $fileDescription)) {
    throw new Exception("Write file errrorrrr....");
}

redirectHome();