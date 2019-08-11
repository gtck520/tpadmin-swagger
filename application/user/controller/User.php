<?php

// +----------------------------------------------------------------------
// | Tp5swager
// +----------------------------------------------------------------------
// | 开源协议 ( https://mit-license.org )
// +----------------------------------------------------------------------
// | github 代码仓库：https://github.com/gtck520/tpadmin-swagger
// +----------------------------------------------------------------------

namespace app\common\controller;

use app\common\controller;
use Firebase\JWT\JWT;
/**
 * JWT基础控制器
 * Class base
 * @package app\common\controller
 */

class User extends Base
{
    public function _initialize()
    {
        parent::_initialize();
        //$this->checkToken();//验证token
    }

       public function index()
    {
        $data = input('post.');
        $username = htmlspecialchars($data['username']);
        $password = htmlspecialchars($data['password']);
        $user = TestModel::where('username', $username)->find();
        if (!empty($user)) {
            if ($username === $user['username'] && $password === $user['password']) {
                $msg = [
                    'status' => 1001,
                    'msg' => '登录成功',
                    'jwt' => self::createJwt($user['id'])
                ];
                return $msg;
            } else {
                return [
                    'status' => 1002,
                    'msg' => '账号密码错误'
                ];
            }
        } else {
            return [
                'status' => 1002,
                'msg' => '请输入账号密码'
            ];
        }
    }

    public function createJwt($userId)
    {
        $key = md5('nobita'); //jwt的签发密钥，验证token的时候需要用到
        $time = time(); //签发时间
        $expire = $time + 14400; //过期时间
        $token = array(
            "user_id" => $userId,
            "iss" => "https://199508.com",//签发组织
            "aud" => "https://199508.com", //签发作者
            "iat" => $time,
            "nbf" => $time,
            "exp" => $expire
        );
        $jwt = JWT::encode($token, $key);
        return $jwt;
    }
}
