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
 * 粉丝列表指令管理
 * Class FansList
 * @package app\wechat\command\fans
 */
class FansList extends Fans
{
    /**
     * 配置入口
     */
    protected function configure()
    {
        $this->module = ['list'];
        $this->setName('xfans:list')->setDescription('从微信获取所有的粉丝信息记录');
    }

}
