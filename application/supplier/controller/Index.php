<?php
namespace app\supplier\controller;
use \think\View;

class Index extends \think\Controller
{
    public function index()
    {
        return $this->fetch();
    }
}
