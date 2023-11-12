<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class InfoController extends ControllerTemplate{

    

    public function index(Request $request){
        $var = [];
        $article = Article::where("article_name", "index")->first();
        if(!empty($article)){
            $var = $article->getArticleContent();
        }
        $var["style_list"] = [
            url("resources/css/index.css")
        ];
        $var["plane"] = [
            1 => ["active" => true],
            2 => ["active" => true],
            3 => ["active" => true],
            4 => ["active" => true],
            5 => ["active" => true],
            6 => ["active" => true],
            7 => ["active" => false],
            8 => ["active" => false],
            9 => ["active" => false],
            10 => ["active" => false],
            11 => ["active" => false],
        ];
        return $this->defaultInit($request, "index", $var);
    }

    public function about(Request $request){
        $var = [];
        $article = Article::where("article_name", "about")->first();
        if(!empty($article)){
            $var = $article->getArticleContent();
        }
        $var["style_list"] = [
            url("resources/css/about.css")
        ];
        return $this->defaultInit($request, "about", $var);
    }

    public function material_support(Request $request){
        $var = [];
        $article = Article::where("article_name", "material_support")->first();
        if(!empty($article)){
            $var = $article->getArticleContent();
        }
        $var["style_list"] = [
            url("resources/css/material_support.css")
        ];
        return $this->defaultInit($request, "material_support", $var);
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
