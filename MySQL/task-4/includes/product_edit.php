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
    <form action="save.php" method="post">
        <input type="hidden" name="id" value="<?= $product['id'] ?>">
        <p>Название товара</p>
        <input type="text" name="name" value="<?= $product['name'] ?>">
        <p>Описание товара</p>
        <textarea name="description"><?= $product['description'] ?></textarea>
        <p>Категория</p>
        <select name="category_id">
            <option value='10'>Товары для дома</option>
            <option value='11'>Молочная продукция</option>
            <option value='12'>Мясная продукция</option>
        </select>
        <p>Price</p>
        <input type="number" name="price" value="<?= $product['price'] ?>">
        <br>
        <br>
        <button type="submit">Редактировать</button>
    </form>
</body>
</html>