<?php

// +----------------------------------------------------------------------
// | Tp5swager
// +----------------------------------------------------------------------
// | 开源协议 ( https://mit-license.org )
// +----------------------------------------------------------------------
// | github 代码仓库：https://github.com/gtck520/tpadmin-swagger
// +----------------------------------------------------------------------

namespace app\index\controller;

use library\Controller;

/**
 * 应用入口
 * Class Index
 * @package app\index\controller
 */
class Index extends Controller
{
    /**
     * 入口跳转链接
     */
    public function index()
    {
        $this->redirect('@admin/login');
    }
}
