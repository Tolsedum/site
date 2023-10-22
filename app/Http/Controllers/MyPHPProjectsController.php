<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyPHPProjectsController extends ControllerTemplate{
    
    public function listPhpProgects(Request $request){
        $var = [];
        return $this->defaultInit(
            $request, 
            "my_progects/php_progects/php_list_progects", 
            $var
        );
    }

    public function laravelSite(Request $request){
        $var = [];
        return $this->defaultInit(
            $request, 
            "my_progects/php_progects/laravel_site", 
            $var
        );
    }
}
