<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\ViewComponents;

class SitemapController extends Controller{
    public function getSitemap(Request $request){
        return response()->view("sitemap", [
            "sitemap" => $this->getMap(ViewComponents::getElements()["ul"])
        ])->header('Content-Type', 'text/xml');
    }

    public function getMap($menu){
        $map = [];
        foreach ($menu as $url => $params) {
            foreach (["date_edit", "changefreq", "priority"] as $_var) {
                if(isset($params[$_var])){
                    $map[url($url)][$_var] = $params[$_var];
                }
            }
            if(isset($params["dropdown"])){
                $map[url($url)]["dropdown"] = $this->getMap($params["dropdown"]);
            }
        }
        return $map;
    }
}
