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

    protected function getBreadcrumb(Request $request){
        $current_element = static::$elements["ul"];
        $breadcrumb = [
            $current_element["/"]["inner"] => ["href" => "/", "active" => false],
        ];
        $url_line = "";
        foreach (explode("/", $request->getRequestUri()) as $crumb) {
            if(!empty($crumb)){
                $url_line .= "/" . $crumb;
                $breadcrumb[$current_element[$url_line]["inner"]] = [
                    "href" => $url_line,
                    "active" => false,
                ];
                if(isset($current_element[$url_line]["dropdown"])){
                    $current_element = $current_element[$url_line]["dropdown"];
                }
            }
        }
        $breadcrumb[array_key_last($breadcrumb)]["active"] = true;
        
        return $breadcrumb;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response{
        if($request->isMethod('get')){
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
                    // "/my_project" => [
                    //     "active" => false,
                    //     "inner" => __("My projects"),
                    //     "dropdown" => [
                    //         "/my_project/web" => [
                    //             "active" => false,
                    //             "inner" => __("web"),
                    //             "dropdown" => [
                    //                 "/my_project/web/laravel_site" => [
                    //                     "active" => false,
                    //                     "inner" => __("Site on Laravel framework"),
                    //                 ],
                    //             ],
                    //         ],
                    //     ],
                    // ],
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
            static::$elements["breadcrumb"] = $this->getBreadcrumb($request);
        }
        return $next($request);
    }
}
