<?php

const LOGIN = "admin";
const PASSWORD = "secret123";

$tmp_login = "admin";
$tmp_password = "secret123";

if ($tmp_login !== LOGIN) {
    echo "User not found";
} else {
    if ($tmp_password !== PASSWORD) {
        echo "Incorrect password";
    } else {
        echo "Auth success";
    }
}

$isStatus = true;

$statusResult = $isStatus ? 43224656 : 98645623;

echo $statusResult;

$typeCar = "Toyota";

switch ($typeCar) {
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
