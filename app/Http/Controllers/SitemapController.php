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
            $map[url($url)] = [
                "date_edit" => $params["date_edit"],
            ];
            if(isset($params["dropdown"])){
                $map[url($url)]["dropdown"] = $this->getMap($params["dropdown"]);
            }
        }
        return $map;
    }
}
