<?php

namespace App\Http\Controllers;

use App\Http\Middleware\UserLanguage;
use App\Http\Middleware\ViewComponents;
use Illuminate\Http\Request;

class ControllerTemplate extends Controller{
    protected $vars = [];

    public function __construct(Request $request){
        $this->middleware(['default']);
    }
    

    protected function initVars(Request $request){
        $menu_elements = ViewComponents::getElements();
        // dd($menu_elements["breadcrumb"]);
        // $breadcrumb = $this->getBreadcrumb($request);
        return [
            "list_languges" => UserLanguage::getLanguages(),
            "style_list" => [
                url("resources/css/main.css"),
                url("resources/css/bootstrap_source/bootstrap.min.css")
            ],
            "script_pre_list" => [
                ["src" => "https://unpkg.com/axios/dist/axios.min.js"],
            ],
            "script_post_list" => [
                ["src" => url("resources/js/bootstrap_source/bootstrap.bundle.min.js")],
                ["src" => url("resources/js/app.js"), "type" => "module"],
            ],
            "navbar" => $menu_elements["ul"],
            "breadcrumb" => $menu_elements["breadcrumb"]
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

    protected function defaultInit(
        Request $request, 
        string $template_name,
        array $var
    ){
        if ($request->isMethod('get')) {
            $this->vars = array_merge($var, $this->initVars($request));
        }else if ($request->isMethod('post')) {
            return redirect($this->getReturnUrl($request));
        }
        return view($template_name, $this->vars);
    }
}