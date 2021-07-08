<?php

require_once 'db_connect.php';

$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$category = $_POST['category_id'];
$price = $_POST['price'];

$query = mysqli_query($db, "UPDATE `products` 
                            SET `name` = '$name', 
                            `description` = '$description', 
                            `category_id` = $category, 
                            `price` = $price 
                            WHERE `products` . `id` = $id;");

echo "<a href='../index.php'>Вернуться на главную</a>\n";

die($query ? "Продукт обновлен" : "Ошибка обновления");