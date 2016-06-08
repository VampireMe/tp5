<?php
/**
 * @version 0.0.0.1
 */

namespace app\blog\model;

use app\common\model\Article;
class ArticleService
{

    public static function getLatestArticles(){
        return Article::all(['type' => 0]);
    }

    public static function getHotArticles(){
        return Article::all(['type' => 1]);
    }

}