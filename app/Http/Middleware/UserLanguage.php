<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserLanguage
{
    static protected $languages = ["ru", "en"];
    static protected $default_local = "ru";


    public static function getLanguages(){
        return static::$languages;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request &$request, Closure $next): Response{
        if ($request->isMethod('get')) {
            $this->getMethode($request);
        }
        return $next($request);
    }

    private function getMethode(Request &$request){
        $language_var = $request->session()->get("selected_language");
        if(empty($language_var)){
            $accept_language = explode(";", $request->header("accept-language"));
            foreach ($accept_language as &$lang) {
                $lang = substr($lang, strpos($lang, ",") + 1);
                if(in_array($lang, static::$languages)){
                    $language_var = $lang;
                    break;
                }
            }
            if(empty($language_var)){
                $language_var = static::$default_local;
            }
            $request->session()->put("selected_language", $language_var);
        }
        app()->setLocale($language_var);
    }
}
