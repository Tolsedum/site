<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Middleware\UserLanguage;
use App\Http\Middleware\ViewComponents;
use Illuminate\Http\Request;

class InfoController extends Controller{

    protected $vars = [];

    public function __construct(Request $request){
        
        $this->middleware(['default']);
        
    }

    protected function initVars(){
        return [
            "list_languges" => UserLanguage::getLanguages(),
            "style_list" => [
                "resources/css/main.css"
            ],
            "navbar" => ViewComponents::getElements()
        ];
    }

    protected function getReturnUrl(Request $request){
        $return_url = $request->get("return_url");
        if(empty($return_url)){
            $return_url = $request->server()["HTTP_REFERER"];
        }
        $return_url = str_replace("//", "", $return_url);
        $pos = strpos($return_url, "/");
        if(is_numeric($pos)){
            $return_url = substr($return_url, $pos);
        }else{
            $return_url = "/";
        }
        return $return_url;
    }

    public function index(Request $request){
        if ($request->isMethod('get')) {
            $this->vars = array_merge($this->vars, $this->initVars());
        }else if ($request->isMethod('post')) {
            return redirect($this->getReturnUrl($request));
        }
        return view("index", $this->vars);
    }

    public function about(Request $request){
        if ($request->isMethod('get')) {
            $this->vars = $this->initVars();
        }else if ($request->isMethod('post')) {
            return redirect($this->getReturnUrl($request));
        }
        return view("about", $this->vars);
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
