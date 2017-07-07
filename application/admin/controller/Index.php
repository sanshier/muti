<?php
namespace app\admin\controller;

use app\common\controller\Common;
use think\Controller;
use think\Loader;
use think\Request;
use think\Url;
use think\Session;
use think\Config;
/*
 *   管理后台首页
 */
class Index extends Base
{
    public function index()
    {
        $data['ip'] = Loader::model('LogRecord')->UniqueIpCount();

		$this->assign('data', $data);

        return view();
    }
}
