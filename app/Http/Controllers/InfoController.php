<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Subscribers;
use App\Models\Message;
use App\Enum\ObjectState;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InfoController extends ControllerTemplate{

    public function index(Request $request){
        $var = [
            "meta_property" => [
                "title" => __("Index"),
                "site_name" => "Tolsedum",
                "url" => url("/"),
                "description" => __("A description of the project currently being worked on, with a description of the tasks completed."),
                "image" => url("web/index/250/side_view_gardener_holding_little_tree.webp")
            ]
        ];
        // dd(__("Index"));
        $article = Article::where("article_name", "index")->first();
        if(!empty($article)){
            $var = array_merge($var, $article->getArticleContent());
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
            7 => ["active" => true],
            8 => ["active" => false],
            9 => ["active" => false],
            10 => ["active" => false],
            11 => ["active" => false],
        ];
        return $this->defaultInit($request, "index", $var);
    }

    public function about(Request $request){
        $var = [
            "meta_property" => [
                "title" => __("Resume"),
                "site_name" => "Tolsedum",
                "url" => url("/about"),
                "description" => __("My name is Alexey and I am glad to welcome you on my resource. On this page you will find a description of my experience and plans for self-development."),
                "image" => url("web/about/250/fon.webp")
            ]
        ];
        $article = Article::where("article_name", "about")->first();
        if(!empty($article)){
            $var = array_merge($var, $article->getArticleContent());
        }
        $var["style_list"] = [
            url("resources/css/about.css")
        ];
        return $this->defaultInit($request, "about", $var);
    }

    public function material_support(Request $request){
        $var = [
            "meta_property" => [
                "title" => __("Assistance"),
                "site_name" => "Tolsedum",
                "url" => url("/material_support"),
                "description" => __("You can support me in various forms - share my content on social networks, leave comments and reviews, tell your friends and colleagues about my site. In addition, if you want to support me financially, you can make a donation to my project. These funds will allow me to improve the content, develop new different projects and keep the site running. Together we can achieve great results!"),
                "image" => url("web/about/250/fon.webp")
            ]
        ];
        $article = Article::where("article_name", "material_support")->first();
        if(!empty($article)){
            $var = array_merge($var, $article->getArticleContent());
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

    public function save_message_assistance(Request $request){
        $return_url = $request->get("return_url");
        $email = $request->get("email");
        $message = $request->get("message");
        $is_subscribe = !empty($request->get("mailing")) ? true : false;
        $is_send = true;
        if(!empty($email) && !empty($message)){
            $subscriber = Subscribers::where("email", $email)->first();
            if(empty($subscriber)){
                $params = [
                    "email" => $email,
                    "is_subscribe" => $is_subscribe,
                    "state" => ObjectState::ENABLED,
                    "date_create" => date("Y-m-d H:i:s"),
                ];
                DB::table("subscribers")->insert($params);
                $subscriber = Subscribers::where("email", $email)->first();
            }
            $subscriber->is_subscribe = $is_subscribe;
            $subscriber->save();
            $hash = md5($message);
            $messageObj = Message::where("hash" , $hash)->first();
            if(empty($messageObj)){
                $params = [
                    "subscribers_id" => $subscriber->subscribers_id,
                    "date_create" => date("Y-m-d H:i:s"),
                    "message" => $message,
                    "hash" => $hash,
                    "state" => ObjectState::ENABLED,
                ];
                DB::table("messages")->insert($params);
            }
        }else{
            $is_send = false;
        }
        return redirect($this->getReturnUrl($request, ["is_send" => $is_send]));
    }
}
