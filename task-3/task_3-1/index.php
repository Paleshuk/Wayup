<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="includes/add_product.php" method="POST">
        <p>Название товара</p>
        <input type="text" name="title">
        <p>Описание товара</p>
        <textarea name="description"></textarea>
        <p>Категория товара</p>
        <select name="category">
            <option>Детские игрушки</option>
            <option>Детская одежда</option>
        </select>
        <p>Цена</p>
        <input type="text" name="price">
        <br><br>
        <button type="submit">Добавить</button>
    </form>
</body>
</html>