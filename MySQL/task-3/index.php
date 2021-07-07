<?php

require_once 'includes/db_connect.php';

$products = mysqli_query($db, "SELECT * FROM `products`;"); 

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
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>description</th>
            <th>category_id</th>
            <th>price</th>
            <th>about</th>
        </tr>
        <?php

        while ($product = mysqli_fetch_assoc($products)) {    

        ?>
        <tr>
            <td><?= $product['id'] ?></td>
            <td><?= $product['name'] ?></td>
            <td><?= $product['description'] ?></td>
            <td><?= $product['category_id'] ?></td>
            <td><?= $product['price'] ?> rub</td>
            <td>
                <a href="product.php?id=<?= $product['id'] ?>">view</a>
            </td>
        </tr>
        <?php

        }

        ?>
    </table>
    <style>
        th, td, a {
            padding: 15px;
            background-color: #189ac9;
            color: #fff;
        }
    </style>
</body>
</html>
