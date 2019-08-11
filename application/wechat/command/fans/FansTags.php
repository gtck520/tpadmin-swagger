<?php

// +----------------------------------------------------------------------
// | Tp5swager
// +----------------------------------------------------------------------
// | 开源协议 ( https://mit-license.org )
// +----------------------------------------------------------------------
// | github 代码仓库：https://github.com/gtck520/tpadmin-swagger
// +----------------------------------------------------------------------

namespace app\wechat\command\fans;

use app\wechat\command\Fans;

/**
 * 粉丝标签指令
 * Class FansTags
 * @package app\wechat\command\fans
 */
class FansTags extends Fans
{
    /**
     * 配置入口
     */
    protected function configure()
    {
        $this->module = ['tags'];
        $this->setName('xfans:tags')->setDescription('从微信获取所有的粉丝标签记录');
    }
}
