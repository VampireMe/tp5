<?php
/**
 * @version 0.0.0.1
 */

namespace app\blog\controller;


use app\common\controller\BaseController;

class Article extends BaseController
{

    public function article($aid){
        $article = \app\common\model\Article::get($aid);
        $article->content = preg_replace('/[\r]/', '<br />', $article->content);
        $params = [
            'article' => $article,
            'category' => $article->category
        ];
        return $this->fetch('article', $params);
    }

}