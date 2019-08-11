<?php

// +----------------------------------------------------------------------
// | Tp5swager
// +----------------------------------------------------------------------
// | 开源协议 ( https://mit-license.org )
// +----------------------------------------------------------------------
// | github 代码仓库：https://github.com/gtck520/tpadmin-swagger
// +----------------------------------------------------------------------

return [
    // 设置日志文件名
    'single'      => 'single',
    // 最多保留50个文件
    'max_files'   => 50,
    // 日志每10兆分割文件
    'file_size'   => 10485760,
    // 设置记录目录的类型
    // 'level'       => ['error'],
    // 日志类型分别写入文件
    'apart_level' => ['error', 'sql'],
];