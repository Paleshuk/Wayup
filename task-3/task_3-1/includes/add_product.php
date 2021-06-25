<?php

// $title = $_POST['title'];
// $description = $_POST['description'];
// $category = $_POST['category'];
// $price = $_POST['price'];

foreach ($_POST as $key => $value) {
    $$key = $value;
}

$content = "Название товара: $title\nОписание товара: $description\nКатегория товара: $category\nЦена: $price рублей\n\n";

$filename = "products.txt";

$fp = fopen($filename, "a+");
fwrite($fp, $content);
fclose($fp);
