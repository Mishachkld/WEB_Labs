<?php

class WorkWithDataBase
{
    public static function getConnectToDataBase($hostName = 'db', $username = 'root', $password = 'password', $dbName = 'web'): mysqli
    {
        $mysqlConnect = new mysqli($hostName, $username, $password, $dbName);
        if (mysqli_connect_errno()) {
            echo "Connect to server MySql unavailable. Code error: " . mysqli_connect_error();
            exit();
        }
        return $mysqlConnect;
    }

    public static function addElementInDataBase($mySql, $email = "mishach@amogus.com", $title = "smthing", $description = "desc", $category = "helicopter"): void
    {
        $addDataQuery = "INSERT INTO ad (email, title, description, category) VALUES('$email',' $title', '$description', '$category')";
        $mySql->query($addDataQuery);
    }

    public static function showAllElementsFormDataBase($mySql): void
    {
        $allDataFromDB = self::getAllDataFromDB($mySql);
        if (null != $allDataFromDB) {
            while ($row = $allDataFromDB->fetch_assoc()) {
                echo "</tr>";
                foreach ($row as $value) {
                    if ($value != $row['id'] && $value != $row['created'])
                        echo "<td>" . $value . "</td>";
                }
                echo "</tr>";
            }
            $allDataFromDB->close();
        } else {
            echo 'null' ;
        }
    }

    public static function getAllDataFromDB($mySql): mixed
    {
        $selectAllFromAD = 'SELECT * FROM ad ORDER BY created DESC';
        if ($result = $mySql->query($selectAllFromAD)) {
            return $result;
        }
        return null;
    }

    public static function deleteElementInDataBase($mySql, $email, $description): void
    {
        $deleteDataQuery = "DELETE FROM ad WHERE email='$email' AND description='$description'";
        $mySql->query($deleteDataQuery);
    }

    public static function updateElementInDataBase($mySql, $email = "mishach@amogus.com", $title = "smthing", $description = "desc", $category = "helicopter"): void
    {
        $email = str_replace('@', 'DOG', $email);
        $updateQuery = "UPDATE ad SET title={$title}, description={$description}, category={$category} WHERE title={$title} AND description={$description}";
        $mySql->query($updateQuery);
    }


}