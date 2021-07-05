<?php

require_once __DIR__ . '/vendor/autoload.php';

date_default_timezone_set('Europe/Minsk');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

error_reporting(E_ALL);

\App\Classes\Finder::create(
    [
        'name' => 'Ivan',
        'email' => 'ivan@mail.su',
        'age' => 21,
        'profession' => 'QA'
    ]
);

\App\Classes\Finder::create(
    [
        'name' => 'Ivan',
        'email' => 'ivan@mail.su',
        'age' => 21,
        'profession' => 'QA'
    ]
);

\App\Classes\Finder::create(
    [
        'name' => 'Alex',
        'email' => 'alex@mail.su',
        'age' => 22,
        'profession' => 'QA'
    ]
);

\App\Classes\Finder::create(
    [
        'name' => 'Ivan',
        'age' => 21,
        'profession' => 'QA'
    ]
);

\App\Classes\Finder::create(
    [
        'name' => 'Ivan',
        'email' => 'ivan@mail.su',
        'age1' => 21,
        'profession' => 'QA'
    ]
);

\App\Classes\Finder::create(
    [
       
    ]
);

echo '<pre>';
print_r(\App\Classes\Finder::all());
echo '</pre>';

\App\Classes\Finder::save();


echo '<pre>';
print_r(\App\Classes\Finder::find('ivan@mail.su'));
echo '</pre>';