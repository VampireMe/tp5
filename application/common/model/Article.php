<?php
/**
 * @version 0.0.0.1
 */

namespace app\common\model;


class Article extends BaseModel
{

    public function category(){
        return $this->hasOne('Category', 'cid');
    }

}