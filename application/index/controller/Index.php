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
	public function _initialize()
    {        
        call_user_func(array('parent',__FUNCTION__)); 
    }
    /**
     * swagger api文档生成
     */
    public function api(){
        $path = 'G:/konger/mytp5/application/'; //你想要哪个文件夹下面的注释生成对应的API文档

        $swagger = \OpenApi\scan($path);
         // header('Content-Type: application/json');
         // print_r( $swagger);



        $swagger_json_path = 'G:/konger/mytp5/public/swagger/swagger.json';
        $res = file_put_contents($swagger_json_path, $swagger->toJson());
        if ($res == true) {
           $this->redirect('http://127.0.0.1:8891/swagger-ui/dist/index.html');
        }
    }
    /**
     * 入口跳转链接
     */
    public function index()
    {
        $this->redirect('@admin/login');
    }

}
