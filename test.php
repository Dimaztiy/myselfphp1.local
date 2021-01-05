<?php
// установка соединения с БД
$dbh = new PDO('mysql:host=localhost;dbname=test', 'root', 'root');

//Пишем запрос
$sql = 'SELECT * FROM persons WHERE id=:id';
// Подготавливаем написанный запрос
$sth = $dbh->prepare($sql);

// Выполнить запрос. Для безопасной передачи внешних данных используем Подготовленные Запросы(id=:id) -
//ниже в параметрах execute указываем на подстаноку вместо id - параметр $_GET['id']
$sth->execute([':id' => $_GET['id']]);

// Получаем данные в виде массива
$data = $sth->fetchAll();

var_dump($data);