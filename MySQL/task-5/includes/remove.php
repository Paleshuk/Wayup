<?php

require_once 'db_connect.php';

$id = $_POST['id'];

$query = mysqli_query($db, "DELETE FROM `products` WHERE `products` . `id` = $id;");

?>

<a href='../index.php'>Вернуться на главную</a>

<?php

die($query ? "Продукт удалён" : "Ошибка удаления продукта");

?>
