<?php
require 'WorkWithDB.php';
// Сделать хранение объявлений в базе данных. Добавлять в базу и читать с базы.
$addDataQuery = 'INSERT INTO ad (email, title, description, category) VALUES("mishach@amogus.com", "smthing", "desc", "helicopter")';
$selectAllFromAD = 'SELECT * FROM ad ORDER BY created DESC';
$mysql = WorkWithDataBase::getConnectToDataBase();
WorkWithDataBase::addElementInDataBase($mysql, "fdfsdf@gmail.com", "fdsfsdfdsfs", "какое-то описангие");
WorkWithDataBase::showAllElementsFormDataBase($mysql);
$mysql->close();
