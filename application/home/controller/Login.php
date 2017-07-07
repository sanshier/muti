<?php
namespace app\home\controller;

/*
 *   前台首页
 */
class Login extends \think\Controller
{
    public function index()
    {
        return $this->fetch();
    }
}
