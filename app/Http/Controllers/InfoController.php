<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Http\Request;

class InfoController extends Controller{

    public function index(){
        return view("index", [
            "description" => "",
            "style_list" => [
                "resources/css/main.css"
            ],
        ]);
    }

    public function about(){
        return view("about", [
            "style_list" => [
                "resources/css/main.css"
            ],
        ]);
    }
}
