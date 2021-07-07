<?php

require_once 'db_connect.php';

$title = $_POST['title'];
$description = $_POST['description'];
$category = $_POST['category'];
$price = $_POST['price'];

$query = "INSERT INTO `products` (`id`, `name`, `description`, `category_id`, `price`)
VALUES (NULL, '$title', '$description', $category, $price);";

if (!mysqli_query($db, $query)) {
    die('Продукт не добавлен!');
} 

echo 'Продукт добавлен!';
