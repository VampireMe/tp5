<?php
namespace app\blog\controller;

use app\blog\model\ArticleService;
use app\common\controller\BaseController;

class Index extends BaseController
{
    public function index()
    {
        //查询 最新 文章信息
        $latestArticles = ArticleService::getLatestArticles();

        //查询 热门 文章信息
        $hotArticles = ArticleService::getHotArticles();

        $params = [
            'latestArticles' => $latestArticles,
            'hotArticles' => $hotArticles,
        ];
        return $this->fetch('index', $params);
    }
}
