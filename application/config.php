<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
// $Id$

return [
    // PATHINFO变量名 用于兼容模式
    'var_pathinfo'           => 's',
// 兼容PATH_INFO获取
    'pathinfo_fetch'         => ['ORIG_PATH_INFO', 'REDIRECT_PATH_INFO', 'REDIRECT_URL'],
// pathinfo分隔符
    'pathinfo_depr'          => '/',
// URL伪静态后缀
    'url_html_suffix'        => 'html',
// URL普通方式参数 用于自动生成
    'url_common_param'       => false,
//url禁止访问的后缀
    'url_deny_suffix'        => 'ico|png|gif|jpg',
// URL参数方式 0 按名称成对解析 1 按顺序解析
    'url_param_type'         => 0,
// 是否开启路由
    'url_route_on'           => true,
// 是否强制使用路由
    'url_route_must'         => false,
// 是否自动转换URL中的控制器名
    'url_controller_convert' => true,
// 是否自动转换URL中的操作名
    'url_action_convert'     => true,
// 默认的访问控制器层
    'url_controller_layer'   => 'controller',
// 表单请求类型伪装变量
    'var_method'             => '_method',
    'log'          => [
        'type' => 'trace', // 支持 socket trace file
    ],
];
