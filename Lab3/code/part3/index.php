<?php
$types = ['cars', 'helicopter', 'other'];
$headers = ['Category', 'Email', 'Title', 'Description'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Лаба 3</title>
</head>
<body>
<div class="form">
    <form action="save.php" class="form" method="post">
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
        foreach ($headers as $item) {
            echo "<th>{$item}</th>";
        }
        ?>
        </thead>
        <tbody>
        <?php
        function readFileInLine($path): void
        {
            $lines = file($path);
            foreach ($lines as $line) {
                    $str = str_replace("\n", "", $line);
                    echo "<td>{$str}</td>";
            }
        }

        foreach ($types as $itemOfType) {
            $pathDirectory = "categories/{$itemOfType}";
            if (is_dir($pathDirectory)) {
                $directoryArray = scandir($pathDirectory, SCANDIR_SORT_DESCENDING);
                foreach ($directoryArray as $nameOfFile) {
                    $path = "categories/{$itemOfType}/{$nameOfFile}";
                    if (is_file($path)) {
                        echo "<tr>";
                        readFileInLine($path);
                        echo "</tr>";
                    }
                }
            }
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>