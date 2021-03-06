<?php

class Equation {
    
    private $a;
    private $b;
    private $c;

    public function __construct($a, $b, $c) {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    private function discriminant() {
        return ($this->b)**2 - 4 * ($this->a) * ($this->c);
    }

    private function x1() {
        return (-$this->b + sqrt($this->discriminant())) / (2 * $this->a);
    }

    private function x2() {
        return (-$this->b - sqrt($this->discriminant())) / (2 * $this->a);
    }
    
    public function result() {
        return $arr = array(
            'd' => $this->discriminant(),
            'x1' => $this->x1(),
            'x2' => $this->x2()
        );
    } 
}
