<?php

$db = mysqli_connect('localhost', 'root', 'root', 'shop-wayup');

mysqli_query($db, "SET NAMES utf8");
mysqli_query($db, "SET CHARACTER_SET_RESULTS='utf8_general_ci'");

if (!$db) {
    die('Error connect to database');
}
