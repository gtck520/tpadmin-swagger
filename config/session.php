<?php

// +----------------------------------------------------------------------
// | Tp5swager
// +----------------------------------------------------------------------
// | 开源协议 ( https://mit-license.org )
// +----------------------------------------------------------------------
// | github 代码仓库：https://github.com/gtck520/tpadmin-swagger
// +----------------------------------------------------------------------

/* 定义会话路径 */
$_path_ = env('runtime_path') . 'sess' . DIRECTORY_SEPARATOR;
file_exists($_path_) || mkdir($_path_, 0755, true);
$_name_ = 's' . substr(md5(__DIR__), -8);

/* 配置会话参数 */
return [
    'prefix' => 'fw',
    'path'   => $_path_,
    'name'   => $_name_,
    // 'var_session_id' => $_name_,
];
