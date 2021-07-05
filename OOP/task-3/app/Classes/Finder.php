<?php

namespace App\Classes;

class Finder extends Worker {

    public static function find($email) {
        foreach (self::$workers as $v) if ($email === $v['email']) return $v;
    }
    
}