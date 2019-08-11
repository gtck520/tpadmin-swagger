<?php

// +----------------------------------------------------------------------
// | Tp5swager
// +----------------------------------------------------------------------
// | 开源协议 ( https://mit-license.org )
// +----------------------------------------------------------------------
// | github 代码仓库：https://github.com/gtck520/tpadmin-swagger
// +----------------------------------------------------------------------

namespace app\news\model;

use think\Model;

class Article extends Model
{
    // 设置当前模型对应的完整数据表名称
    protected $table = 'news_articles';
    protected $pk = 'id';

    // 模型初始化
    protected static function init()
    {
        //TODO:初始化内容
    }

    //获取器
    // public function getStatusAttr($value)
    // {
    //     $status = [-1=>'删除',0=>'禁用',1=>'正常',2=>'待审核'];
    //     return $status[$value];
    // }
}