<?php
/**
 * @version 0.0.0.1
 */

namespace app\common\controller;


use app\common\model\Article;
use app\common\model\Category;
use think\Controller;

class BaseController extends Controller
{

    public function fetch($template = '', $vars = [], $replace = [], $config = [])
    {
        //最新的五篇文章
        $latest5 = Article::all(function ($query){
            $query->limit(5)->order('aid', 'desc');
        });
        $params = array_merge($vars, ['categories' => Category::all()], ['latest5' => $latest5]);
        return parent::fetch($template, $params, $replace, $config);
    }

}