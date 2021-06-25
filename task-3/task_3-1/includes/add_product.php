<?php

$title = $_POST['title'];
$description = $_POST['description'];
$category = $_POST['category'];
$price = $_POST['price'];

$content = "Название товара: $title\nОписание товара: $description\nКатегория товара: $category\nЦена: $price рублей";

$filename = "products.txt";

$fp = fopen($filename, w);
fwrite($fp, $content);
fclose($fp);

