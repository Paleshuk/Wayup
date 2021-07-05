<?php

class Car {
    
    private $model;
    private $color;
    private $horsepower;
    private $production_year;

    public function __construct($model, $color, $horsepower, $production_year) {
        $this->model = $model;
        $this->color = $color;
        $this->horsepower = $horsepower;
        $this->production_year = $production_year;
    }

    public function show() {
        echo "
            <p style='width: 300px; padding: 20px; background: #34d2eb; font-family: Montseratt;'>
                Model: $this->model<br>
                Color: $this->color<br>
                Horsepower: $this->horsepower<br>
                Production year: $this->production_year
            </p>
        ";
    }

    public function save() {
        $content = "Model: $this->model\nColor: $this->color\nHorsepower: $this->horsepower\nProduction year: $this->production_year\n\n";

        $f = fopen("reports/{$this->model}_{$this->production_year}.txt", 'w');
        fwrite($f, $content);
        fclose($f);
    } 
}