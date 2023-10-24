<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyPHPProjectsController extends ControllerTemplate{
    
    public function myProject(Request $request){
        $var = [];
        return $this->defaultInit(
            $request, 
            "my_progects/my_project", 
            $var
        );
    }

    public function listWebProgects(Request $request){
        $var = [];
        return $this->defaultInit(
            $request, 
            "my_progects/web_progects/web_list_progects", 
            $var
        );
    }

    public function laravelSite(Request $request){
        $var = [];
        return $this->defaultInit(
            $request, 
            "my_progects/web_progects/laravel_site", 
            $var
        );
    }
}
