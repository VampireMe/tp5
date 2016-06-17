<?php
/**
 * @version 0.0.0.1
 */

namespace app\blog\controller;


use app\common\controller\BaseController;
use app\common\model\Article;
use think\Input;

class Category extends BaseController
{
    public function articles(){
        //得到当前分类的id
        $cid = Input::get('cid', 0);
        $title = \app\common\model\Category::where('cid', $cid)->value('cname');

        //根据分类id, 得到文章集
       $articles = Article::all(function($query) use($cid){
            $query->where('cid', $cid)->order('cid', 'desc');
       });

        $params = [
            'articles' => $articles,
            'title' => $title,
        ];
        return $this->fetch('category', $params);
    }
}