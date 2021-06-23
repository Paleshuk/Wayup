<?php

$todos = [
    [
     "id" => 1,
     "title" => "Купить столовые приборы",
     "date" => "03.04.2020",
     "status" => "Выполнено"
    ],
    [
     "id" => 2,
     "title" => "Выбросить мусор",
     "date" => "05.04.2020",
     "status" => "Ожидается"
    ],
    [
     "id" => 3,
     "title" => "Помыть машину",
     "date" => "10.04.2020",
     "status" => "Ожидается"
    ]
];

for($i = 0; $i < count($todos); $i++) {
    echo "<p>" . $todos[$i]["id"] . "</p>";
    echo "<h2>" . $todos[$i]["title"] . "</h2>";
    echo "<p>" . $todos[$i]["date"] . "</p>";
    echo "<p>" . $todos[$i]["status"] . "</p>";
}

for($i = 0; $i < count($todos); $i++) {
    echo "<h2>" . $todos[$i]["title"] . "</h2>";
    foreach ($todos[$i] as $key => $value) {
        if($key == "title") {
            continue;
        }
        echo "<p>" . $value . "</p>";
    }
}

$i = 0;

while($i < count($todos)) {
    echo "<p>" . $todos[$i]["id"] . "</p>";
    echo "<h2>" . $todos[$i]["title"] . "</h2>";
    echo "<p>" . $todos[$i]["date"] . "</p>";
    echo "<p>" . $todos[$i]["status"] . "</p>"; 

    $i++;
}

foreach ($todos as $todo) {
    echo "<p>" . $todo["id"] . "</p>" . 
         "<h2>" . $todo["title"] . "</h2>" . 
         "<p>" . $todo["date"] . "</p>" . 
         "<p>" . $todo["status"] . "</p>";
}
