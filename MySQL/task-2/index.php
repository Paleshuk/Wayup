<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="includes/add_product.php" method="post" enctype="multipart/form-data">
        <p>Название товара</p>
        <input type="text" name="title">
        <p>Описание товара</p>
        <textarea name="description"></textarea>
        <p>Категория</p>
        <select name="category">
            <option>111</option>
            <option>123</option>
            <option>112</option>
        </select>
        <p>Price</p>
        <input type="number" name="price">
        <br>
        <br>
        <button type="submit">Добавить</button>
    </form>
</body>
</html>