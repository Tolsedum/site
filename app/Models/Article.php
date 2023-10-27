<?php

namespace App\Models;

use App\Enum\ArticleState;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Article extends Model
{
    use HasFactory;

    public static function importData(
        string $file_name = ""
    ){
        if(empty($file_name)){
            $file_name = '../private/articles/struct_articles.json';
        }
        $import_data = json_decode(file_get_contents($file_name), true);
        $table_name = "articles";
        foreach ($import_data as $params) {
            $articl = DB::table($table_name)
                ->where("article_name", $params["article_name"])->first();
            
            if(empty($articl)){
                DB::table($table_name)->insert([
                    "article_name" => $params["article_name"],
                    "path" => $params["path"],
                    "file_name" => $params["file_name"],
                    "state" => ArticleState::ACCESS_CLOSED,
                    "date_create" => date("Y-m-d H:i:s")
                ]);
            }
        }
    }

    public function getArticleContent(){
        $var = [];
        if($this->state != ArticleState::AVAILABLE){
            $file_name = "../" . $this->path 
                . "/" . $this->file_name 
                . "." . app()->getLocale()
                . ".json";
            
            $var = json_decode(file_get_contents($file_name), true);
            $var["date_create"] = $this->date_create;
        }
        return $var;
    }
}
