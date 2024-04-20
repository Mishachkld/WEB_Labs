<?php
require '../index.php';
function redirectHome(): void
{
    header("Location: /");
    exit();
}

if (false === isset($_POST['email'], $_POST['category'], $_POST['title'], $_POST['description'])) {
    redirectHome();
}
$service = getService("Web", __DIR__ . '/../credentials/web-programming-credentials.json');
$category = $_POST['category'];
$email = $_POST['email'];
$title = $_POST['title'];
$description = $_POST['description'];

$range = "Лист1";
$dataRow =[
    [
        $category,
        $email,
        $title,
        $description
    ]
];

$spreadSheetId = getSheetId();
$body = new Google_Service_Sheets_ValueRange();
$body->setValues($dataRow);
$insert = [
    'insertDataOption' => "INSERT_ROWS"
];
$params = [
    'valueInputOption' => 'RAW'
];
$service->spreadsheets_values->append(
    $spreadSheetId,
    $range,
    $body,
    $params);

redirectHome();