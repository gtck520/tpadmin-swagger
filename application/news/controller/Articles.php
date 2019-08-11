<?php

// +----------------------------------------------------------------------
// | Tp5swager
// +----------------------------------------------------------------------
// | 开源协议 ( https://mit-license.org )
// +----------------------------------------------------------------------
// | github 代码仓库：https://github.com/gtck520/tpadmin-swagger
// +----------------------------------------------------------------------

namespace app\news\controller;

use app\news\model\Article;
use think\Controller;

/**
 * 文章管理
 * Class news
 * @package app\news\controller
 */

class Articles extends Controller
{
    /**
     * @OA\Post(
     *     path="/news/articles",
     *     tags={"articles"},
     *     summary="文章页面",
     *     description="This can only be done by the logged in user.",
     *     operationId="createUser",
     *     @OA\Response(
     *         response="default",
     *         description="successful operation"
     *     ),
     *     @OA\RequestBody(
     *         description="Create user object",
     *         required=true
     *     )
     * )
     */
    public function index(){
        $article =  Article::get(1);
        print($article);
        echo '测试测试';
    }

}
