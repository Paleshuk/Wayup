<?php

$ftype = $_FILES["image"]["type"];

if ($ftype !== "image/png" && $ftype !== "image/jpeg") {
    echo "Файл не поддерживается!";
    die();
}

$path = "../uploads/" . time() . "_" . $_FILES["image"]["name"];

if (move_uploaded_file($_FILES["image"]["tmp_name"], $path)) {
    echo "Файл загружен";
} else {
    echo "Ошибка при загрузке файла";
}
