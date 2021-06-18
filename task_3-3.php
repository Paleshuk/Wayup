<?php

const LOGIN = "admin";
const PASSWORD = "secret123";

$tmp_login = "admin";
$tmp_password = "secret123";

if ($tmp_login === LOGIN && $tmp_password !== "secret123") {
    echo "Check correct your password";
} elseif ($tmp_login !== "admin") {
    echo "User not found";
} elseif ($tmp_login === LOGIN && $tmp_password === "secret123") {
    echo "Auth success";
}

echo "<br>";

$isStatus = true;

$statusResult = $isStatus ? 43224656 : 98645623;

echo $statusResult;

echo "<br>";

switch ($typeCar = "Toyota") {
    case "BMW":
        echo "Selected is a very good car";
        break;
    case "Toyota":
        echo "Toyota is a very reliable car!";
        break;
    case "Lada":
        echo "Don't buy these cars!";
        break;
    default:
        echo "Car not found";
}
