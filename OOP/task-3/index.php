<pre>
<?php

require_once __DIR__ . '/vendor/autoload.php';

date_default_timezone_set('Europe/Minsk');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

error_reporting(E_ALL);

\App\Classes\Worker::create(
    [
        'name' => 'Ivan',
        'email' => 'ivan@mail.su',
        'age' => 21,
        'profession' => 'QA'
    ]
);

\App\Classes\Worker::create(
    [
        'name' => 'Ivan',
        'email' => 'ivan@mail.su',
        'age' => null,
        'profession' => 'QA'
    ]
);

\App\Classes\Worker::create(
    [
        'name' => '',
        'email' => 'alex@mail.su',
        'age' => 22,
        'profession' => 'QA'
    ]
);

\App\Classes\Worker::create(
    [
        'name' => 'Michael',
        'email' => 'michael@mail.su',
        'age' => 45,
        'profession' => 'QA'
    ]
);

print_r(\App\Classes\Worker::all());

\App\Classes\Worker::save();

print_r(\App\Classes\Finder::find('ivan@mail.su'));
print_r(\App\Classes\Finder::find('michael@mail.su'));

?>
</pre>
