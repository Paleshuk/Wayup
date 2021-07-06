<?php

namespace App\Classes;

class Worker {
    protected static $workers;
    public static function create($worker) {   
        foreach ($worker as $value) {
            if (empty($value)) {
                return false;
            }
        }
        $worker['register_time'] = date('d-m-Y H:i');
        self::$workers[] = $worker;
    }
    public static function all() {
        return [
            'workers_count' => count(self::$workers),
            'all_workers' => self::$workers,
        ];
    }
    public static function save() {    
        $c = null;
        foreach(self::$workers as $v) {
            $c .= "Name: {$v['name']} ";
            $c .= "Email: {$v['email']} ";
            $c .= "Age: {$v['age']} ";
            $c .= "Profession: {$v['profession']}\n";
        }

        $f = fopen('results/workers.txt', 'w+');
        fwrite($f, $c);
        fclose($f);
    }
}
