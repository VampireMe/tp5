<?php
/**
 * @version 0.0.0.1
 */

namespace app\blog\model;

use app\common\model\Category;

class CategoryService
{

    public static function getCategories(){
        return $categories = Category::all();
    }

}