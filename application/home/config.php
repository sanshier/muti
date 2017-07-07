<?php

return [
    //网站名称
    'website'                   =>      [
        'name'                  => '木梯商务',
        'keywords'              =>  '木梯商务，木梯翻译，木梯司导，代办事，展会，译员',
        'description'           =>  '杭州木梯商务服务有限公司——木梯商务以翻译为基础服务，通过遍布全球的近万名译员及司导，为出境的华人企业、商务人士或游客，提供翻译、司机/导游服务，其中包括：笔译、口译、商务陪同、包车、接送机、司机、司机兼导游等专业服务，最终实现全球的华人网络综合服务平台。'
     ],
    // 默认输出类型
    'default_return_type'       => 'html',
    // 默认跳转页面对应的模板文件
    'dispatch_success_tmpl'     => APP_PATH  . 'home/view/' .DS. 'dispatch_jump.tpl',
    'dispatch_error_tmpl'       => APP_PATH  . 'home/view/' .DS. 'dispatch_jump.tpl',

    //异常页面模板文件
    'exception_tmpl'            => APP_PATH . 'home/view' .DS. 'think_exception.tpl',

    'http_exception_template'   =>  [
        // 定义404错误的重定向页面地址
        404                     =>  APP_PATH. 'home/view' .DS. '404.html',
        // 还可以定义其它的HTTP status
        401                     =>  APP_PATH. 'home/view' .DS. '401.html',
    ],
	
    //模板布局
	'template'                  =>  [
	    'layout_on'             =>  true,
	    'layout_name'           =>  'layout',
        // 模板后缀
        // 'view_suffix'        => 'html',
        'taglib_pre_load'       =>    'think\template\taglib\Cx,app\common\taglib\Tool',
        //'taglib_build_in'     =>    'think\template\taglib\Cx,app\common\taglib\Tool',
	],
    //缓存
    'cache'                     => [
        // 驱动方式
        'type'                  => 'File',
        // 缓存保存目录
        'path'                  => RUNTIME_PATH.'system/adminData/',
        // 缓存前缀
        'prefix'                => '',
        // 缓存有效期 0表示永久缓存
        'expire'                => 0,
    ],

    // 'app_debug'              => true,

    'session'                   => [
        'id'                    => '',
        // SESSION_ID的提交变量,解决flash上传跨域
        'var_session_id'        => '',
        // SESSION 前缀
        'prefix'                => '',
        // 驱动方式 支持redis memcache memcached
        'type'                  => '',
        // 是否自动开启 SESSION
        'auto_start'            => true,
    ],

    // 视图输出字符串内容替换
    'view_replace_str'       => [
        '__CSS__'    => STATIC_PATH . 'home/css',
        '__JS__'     => STATIC_PATH . 'home/js',
        '__IMG__'    => STATIC_PATH . 'home/images',
        '__LIB__'    => STATIC_PATH . 'home/lib'
    ],

    //验证码

    'captcha'           => [
        // 验证码字符集合
        'codeSet'       => '2345678abcdefhijkmnpqrstuvwxyzABCDEFGHJKLMNPQRTUVWXY', 
        // 验证码字体大小(px)
        'fontSize'      => 50,
        // 是否画混淆曲线
        'useCurve'      => false,
         // 验证码图片高度
        'imageH'        => 30,
        // 验证码图片宽度
        'imageW'        => 120,
        // 验证码位数
        'length'        => 5,
        // 验证成功后是否重置        
        'reset'         => true
    ],

    //伪静态
    'url_html_suffix'   => false,
    'user_auth_key'     => 'Astonep@tp-admin!@#$',
];