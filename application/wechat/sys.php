<?php

// +----------------------------------------------------------------------
// | Tp5swager
// +----------------------------------------------------------------------
// | 开源协议 ( https://mit-license.org )
// +----------------------------------------------------------------------
// | github 代码仓库：https://github.com/gtck520/tpadmin-swagger
// +----------------------------------------------------------------------

use think\Console;
use think\facade\Route;

// 注册接口路由
Route::rule('wechat/api.js', 'wechat/api.js/index');

// 注册系统指令
Console::addDefaultCommands([
    'app\wechat\command\fans\FansAll',
    'app\wechat\command\fans\FansTags',
    'app\wechat\command\fans\FansList',
    'app\wechat\command\fans\FansBlack',
]);
