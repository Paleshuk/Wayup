<?php

require_once 'Car.php';

$car = new Car('Subaru', 'grey', 250, 2005);

$car->show();
$car->save();