<?php
require __DIR__ . '/vendor/autoload.php';
$types = ['cars', 'helicopter', 'other'];
$spreadSheetId = "134eQmwAHkqQhXO_HqJLZLvfRmxy1vcPaudAtGdbdUnA"; ?>
<?php
function getDataInRange(string $range, string $spreadSheetId, Google_Service_Sheets $service): ?array
{
    try {
        $response = $service->spreadsheets_values->get($spreadSheetId, $range);
        return $response->getValues();
    } catch (\Google\Service\Exception $e) {
        return null;
    }
}
function getService(string $name, string $path) : Google_Service_Sheets
{
    $client = new Google_Client();
    $client->setApplicationName($name);
    $client->setScopes([Google_Service_Sheets::SPREADSHEETS]);
    $client->setAuthConfig($path);
    return new Google_Service_Sheets($client);
}
$path = __DIR__ . '/credentials/web-programming-credentials.json';
$service = getService("WEB programming", $path)?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Лаба 3</title>
</head>
<body>
<div class="form">
    <form action="back/save.php" class="form" method="post">
        <label>Email</label>
        <label id="email" for="email">
            <input type="email" name="email" required>
        </label>
        <label id="category" for="category">
            Category
            <select name="category">
                <?php
                for ($i = 0; $i < sizeof($types); $i++) {
                    echo "<option value=\"{$types[$i]}\">{$types[$i]}</option>";
                }
                ?>
            </select>
        </label>
        <label id="title" for="title">
            Title
            <input type="text" name="title" required>
        </label>
        <label id="description" for="description">
            Description
            <textarea rows="3" name="description"></textarea>
        </label>
        <input type="submit" value="save">
    </form>
</div>
<div class="table">
    <table>
        <thead>
        <?php
        $rangeHeaders = "Лист1!A1:D1";
        $headers = getDataInRange($rangeHeaders, $spreadSheetId, $service);
        if (null != $headers) {
            foreach ($headers as $row) {
                foreach ($row as $item)
                echo "<th>{$item}</th>";
            }
        }
        ?>
        </thead>
        <tbody>
        <?php
        $rangeOfAllContent = "Лист1!A2:D999";
        $rowsArray = getDataInRange($rangeOfAllContent, $spreadSheetId, $service);
        if (null != $rowsArray) {
            foreach ($rowsArray as $row) {
                echo "<tr>";
                foreach ($row as $item) {
                    echo "<td>" . $item . "</td>";
                }
            }
            echo "</tr>";
        } ?>
        </tbody>
    </table>
</div>
</body>
</html>