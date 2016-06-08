<?php
/**
 * @version 0.0.0.1
 */

namespace app\common\controller;


use app\common\model\Category;
use think\Controller;

class BaseController extends Controller
{

    public function fetch($template = '', $vars = [], $replace = [], $config = [])
    {
        $params = array_merge($vars, ['categories' => Category::all()]);
        return parent::fetch($template, $params, $replace, $config);
    }

}