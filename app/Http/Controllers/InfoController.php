<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends ControllerTemplate{

    

    public function index(Request $request){
        $var = [];
        return $this->defaultInit($request, "index", $var);
        // if ($request->isMethod('get')) {
        //     $this->vars = array_merge($this->vars, $this->initVars());
        // }else if ($request->isMethod('post')) {
        //     return redirect($this->getReturnUrl($request));
        // }
        // return view("index", $this->vars);
    }

    public function about(Request $request){
        $var = [];
        return $this->defaultInit($request, "about", $var);
        // if ($request->isMethod('get')) {
        //     $this->vars = $this->initVars();
        // }else if ($request->isMethod('post')) {
        //     return redirect($this->getReturnUrl($request));
        // }
        // return view("about", $this->vars);
    }

    public function set_language(Request &$request){
        $select_language = $request->get("new_language");
        if(!empty($select_language)){
            app()->setLocale($select_language);
            $request->session()->put("selected_language", $select_language);
        }
        return redirect($this->getReturnUrl($request));
    }
}
