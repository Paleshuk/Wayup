<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function helloPage() 
    {
        return view('hello', [
                    "name" => "Serge",
                    "skills" => ["HTML", "PHP", "CSS", "JS"]
                ]);
    }

    public function testPage()
    {
        return view('test');
    }
}
