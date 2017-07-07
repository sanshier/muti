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
 *   翻译频道
 */
class Disclaimer extends Common
{    
    public function index()
    {
        return $this->fetch('');
    }
}
