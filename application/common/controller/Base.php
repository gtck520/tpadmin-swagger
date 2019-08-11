<?php

// +----------------------------------------------------------------------
// | Tp5swager
// +----------------------------------------------------------------------
// | 开源协议 ( https://mit-license.org )
// +----------------------------------------------------------------------
// | github 代码仓库：https://github.com/gtck520/tpadmin-swagger
// +----------------------------------------------------------------------

namespace app\common\controller;

use think\Request;
use Firebase\JWT\JWT;

use think\Controller;

/**
 * JWT基础控制器
 * Class base
 * @package app\common\controller
 */

class Base extends Controller
{
    public function _initialize()
    {
        parent::_initialize();
        //$this->checkToken();
    }

    public function checkToken()
    {
        $header = Request::instance()->header();
        if ($header['authorization'] == 'null'){
            echo json_encode([
                'status' => 1002,
                'msg' => 'Token不存在,拒绝访问'
            ]);
            exit;
        }else{
            $checkJwtToken = $this->verifyJwt($header['authorization']);
            if ($checkJwtToken['status'] == 1001) {
                return true;
            }
        }
    }

    //校验jwt权限API
    protected function verifyJwt($jwt)
    {
        $key = md5('nobita');
        // JWT::$leeway = 3;
        try {
            $jwtAuth = json_encode(JWT::decode($jwt, $key, array('HS256')));
            $authInfo = json_decode($jwtAuth, true);
            $msg = [];
            if (!empty($authInfo['user_id'])) {
                $msg = [
                    'status' => 1001,
                    'msg' => 'Token验证通过'
                ];
            } else {
                $msg = [
                    'status' => 1002,
                    'msg' => 'Token验证不通过,用户不存在'
                ];
            }
            return $msg;
        } catch (\Firebase\JWT\SignatureInvalidException $e) {
            echo json_encode([
                'status' => 1002,
                'msg' => 'Token无效'
            ]);
            exit;
        } catch (\Firebase\JWT\ExpiredException $e) {
            echo json_encode([
                'status' => 1003,
                'msg' => 'Token过期'
            ]);
            exit;
        } catch (Exception $e) {
            return $e;
        }
    }
}
