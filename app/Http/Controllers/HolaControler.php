<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HolaControler extends Controller
{
    public function index(){

        $hola = "Hello World!";
        return view("welcome",compact("hola"));
    }
}
