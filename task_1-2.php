<?php

$arr1 = [2020, "Ivan", FALSE];

$arr2 = [
	["id" => 01,
	 "name" => "Anton",
	 "surname" => "Лонг",
	 "age" => 23,
	 "lang" => "ru"
	],
	["id" => 02,
	 "name" => "John",
	 "surname" => "Short",
	 "age" => 19,
	 "lang" => "en"
	],
	["id" => 03,
	 "name" => "Kim",
	 "surname" => "Worm",
	 "age" => 31,
	 "lang" => "es"
	]
];

$arr3 = [
	"key" => "Primary",
	"url" => "https://www.tut.by",
	"ssl" => "Essential",
	"db" => [
		"port" => 8080,
		"host" => "Host",
		"login" => 123123,
		"password" => "qwerty123"
	]
];

$arr3["db"]["port"] = 3309;
