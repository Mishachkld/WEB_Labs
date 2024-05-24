<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<div class="form-wrap">
    <form method="post" action="save.php">
        <div>
            <label for="email">Почта</label>
            <label>
                <input type="email" name="email" required>
            </label>
        </div>

        <div>
            <label for="description">Описание</label>
            <label>
                <input type="text" name="description" required>
            </label>
        </div>
        <label id="category" for="category">
            Category
            <select name="category">
                <option value="Helicopter">Helicopter</option>
                <option value="Other">Other</option>
                <option value="Cat">Cat</option>
            </select>
        </label>
        <div>
            <label for="type">Тип</label>
            <label for="type"><input type="radio" name="type" value="add"/>Add</label>
            <label for="type"><input type="radio" name="type" value="delete" />Delete</label>
            <label for="type"><input type="radio" name="type" value="update" />Update</label>
        </div>
        <button type="submit">Добавить</button>
    </form>
</div>
<div class="display-data">
    <table>
        <tbody>
        <?php  require 'WorkWithDB.php';
        $mySql = WorkWithDataBase::getConnectToDataBase();
        WorkWithDataBase::showAllElementsFormDataBase($mySql);
        ?>
        </tbody>
    </table>
</div>
</body>
</html>