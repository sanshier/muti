<?php
namespace app\home\controller;

use app\common\controller\Common;
use think\Controller;
use think\Loader;
use think\Request;
use think\Url;
use think\Session;
use think\Config;
/*
 *   前台首页
 */
class Index extends Common
{
    
    public function index()
    {
        //print_r(config());
        return $this->fetch('');
    }
    public function login()
    {
        return $this->fetch('');
    }
}
