<?php

require_once 'db_connect.php';

$id = $_GET['id'];

$product = mysqli_query($db, "SELECT * FROM `products` WHERE `id` = $id;");

if (mysqli_num_rows($product) === 0) {
    die('Продукт не найден!');
}

$product = mysqli_fetch_assoc($product);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= $product['name'] ?></h1>
    <p><?= $product['description'] ?></p>
    <p><?= $product['price'] ?> rub</p>
    <style>
        h1, p {
            width: 300px;
            padding: 15px;
            background-color: #189ac9;
            color: #fff;
        }
    </style>
</body>
</html>
