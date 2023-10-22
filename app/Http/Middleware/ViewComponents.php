<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ViewComponents
{
    protected static $elements = [];

    public static function getElements(){
        return static::$elements;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response{
        
        static::$elements = [
            "ul" => [
                "/" => [
                    "active" => false,
                    "inner" => __("Home"),
                ],
                "/about" => [
                    "active" => false,
                    "inner" => __("Resume"),
                ],
                "/my_project" => [
                    "active" => false,
                    "inner" => __("My projects"),
                    "dropdown" => [
                        "/my_project/php" => [
                            "active" => false,
                            "inner" => __("php"),
                        ],
                    ],
                ],
            ],
        ];
        $request_url = $request->server()["REQUEST_URI"];
        $set_active = false;
        foreach (static::$elements["ul"] as $url => &$data) {
            if($url == $request_url){
                $data["active"] = $set_active = true;
            }
            if(isset($data["dropdown"])){
                foreach ($data["dropdown"] as $drop_url => &$drop_data) {
                    if($drop_url == $request_url){
                        $data["active"] = true;
                        $drop_data["active"] = true;
                        break;
                    }
                }
            }
            if($set_active) break;
        }
        return $next($request);
    }
}
