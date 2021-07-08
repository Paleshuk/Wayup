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
    <form action="remove.php" method="post">
        <input type="hidden" name="id" value="<?= $product['id'] ?>">
        <h1>Удаление товара</h1>
        <p>Вы действительно хотите удалить этот продукт - <?= $product['name'] ?></p>
        <button type="submit">Подтверждаю</button>
    </form>
    <br>
    <a href='../index.php'>Вернуться на главную</a>
</body>
</html>