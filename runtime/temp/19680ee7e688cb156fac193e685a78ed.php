<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:67:"C:\wamp64\www\muti\public/../application/home\view\login\index.html";i:1498415032;s:62:"C:\wamp64\www\muti\public/../application/home\view\layout.html";i:1498413043;s:72:"C:\wamp64\www\muti\public/../application/home\view\.\_layout\header.html";i:1498413560;s:69:"C:\wamp64\www\muti\public/../application/home\view\.\_layout\top.html";i:1498413697;s:72:"C:\wamp64\www\muti\public/../application/home\view\.\_layout\footer.html";i:1498409877;}*/ ?>
﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="utf-8">
<title><?php echo \think\Config::get('website.name'); ?></title>
<!--<link rel="Shortcut Icon" href="favicon.ico" />地址栏和标签上显示图标-->
<!--<link rel="Bookmark" href="favicon.ico" />收藏夹显示图标-->
<meta name="keywords" content="<?php echo \think\Config::get('website.keywords'); ?>" />
<meta name="description" content="<?php echo \think\Config::get('website.description'); ?>" />
<link rel="stylesheet" type="text/css" href="__CSS__/base.css" />
<link rel="stylesheet" type="text/css" href="__CSS__/css3.css" />
<link rel="stylesheet" type="text/css" href="__CSS__/index.css" />
<link rel="stylesheet" type="text/css" href="__CSS__/style.css" />
<script type="text/javascript" src="__JS__/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="__JS__/jquery.SuperSlide.2.1.1.js"></script>
  <!--[if IE 6]> 
<script type="text/javascript" src="__JS__/iepng.js"></script>
<script type="text/javascript">
   EvPNG.fix('div, ul, img, li, input,a,span'); 
</script>
<![endif]-->
</head>

<body>
	<div class="container">
    	<!--head-->
<header class="header">
    <div class="head">
        <div class="container2 head_top">
            <div class="fl head_left">欢迎访问木梯商务！</div>
            <div class="fr head_right">
                <a href="login.html">登录</a><a href="register.html">注册</a>
                <a href="issue-tasks.html" class="release">发布任务</a>
                <a href="javascript:void(0);" class="release">我要接单</a>
            </div>
        </div>
    </div>
    <div class="head_bottom container2">
        <div class="logo fl"><a href="index.html"><img src="__IMG__/logo.png" width="146" /></a></div>
        <div class="fl word">
            <ul>
                <li>" 木 " 有 语 言 障 碍</li>
                <li>" 梯 " 升 沟 通 效 率</li>
            </ul>
        </div>
        <div class="fr head_soso">
            <input class="text_soso" type="text" placeholder="">
            <input class="soso_botton" type="submit" value="搜索">
        </div>
    </div>

    <div class="head_nav container2">
        <ul class="nav">
            <li class="-active" style="margin-left:10px;"><a href="index.html">首页</a></li>
            <li>
                <a href="translation.html">翻译</a>
                <div class="nav_two" style="width:950px;">
                    <ul>
                        <li><h2 class="fl" style="line-height:14px;">普通陪同</h2><span style="margin-left: 23px;">|</span></li>
                        <li><a href="javascript:void(0);">展会陪同</a></li>
                        <li><a href="javascript:void(0);">日常陪同</a></li>
                        <li><a href="javascript:void(0);">商务陪同</a></li>
                        <li><a href="javascript:void(0);">会议谈判</a></li>
                        <li><a href="javascript:void(0);">法律陪同</a></li>
                        <li><a href="javascript:void(0);">医疗陪同</a></li>
                        <li><a href="javascript:void(0);">移民陪同</a></li>
                        <li><a href="javascript:void(0);">游学陪同</a></li>
                    </ul>
                    <br />
                    <ul>
                        <li><h2 class="fl" style="line-height:14px;">职业翻译</h2><span style="margin-left: 23px;">|</span></li>
                        <li><a href="javascript:void(0);">同声传译</a></li>
                        <li><a href="javascript:void(0);">交替传译</a></li>
                    </ul>
                    <br />
                    <ul>
                        <li><h2 class="fl" style="line-height:14px;">在线人工翻译</h2><span style="margin-left: 23px;">|</span></li>
                        <li><a href="javascript:void(0);">电话翻译</a></li>
                        <li><a href="javascript:void(0);">视频翻译</a></li>
                    </ul>
                    <br />
                    <ul>
                        <li><h2 class="fl" style="line-height:14px;">笔译</h2><span style="margin-left: 23px;">|</span></li>
                        <li><a href="javascript:void(0);">法律翻译</a></li>
                        <li><a href="javascript:void(0);">技术翻译</a></li>
                        <li><a href="javascript:void(0);">收藏翻译</a></li>
                        <li><a href="javascript:void(0);">说明书翻译</a></li>
                        <li><a href="javascript:void(0);">合同翻译</a></li>
                        <li><a href="javascript:void(0);">产品介绍翻译</a></li>
                        <li><a href="javascript:void(0);">商务资料翻译</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <a href="guidance.html">司导</a>
                <div class="nav_two">
                    <ul>
                        <li><a href="javascript:void(0);">包车</a></li>
                        <li><a href="javascript:void(0);">接机</a></li>
                        <li><a href="javascript:void(0);">送机</a></li>
                        <li><a href="javascript:void(0);">司导</a></li>
                        <li><a href="javascript:void(0);">徒步旅游</a></li>
                    </ul>
                </div>    
            </li>
            <li>
                <a href="work.html">待办事</a>
                <div class="nav_two">
                    <ul>
                        <li><a href="javascript:void(0);">代参展</a></li>
                        <li><a href="javascript:void(0);">代报名</a></li>
                        <li><a href="javascript:void(0);">代订机票</a></li>
                        <li><a href="javascript:void(0);">海外租房</a></li>
                        <li><a href="javascript:void(0);">代订酒店</a></li>
                        <li><a href="javascript:void(0);">代办邀请函</a></li>
                        <li><a href="javascript:void(0);">其他</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="service_area.html">服务区域</a></li>
            <li><a href="expo.html">展会信息</a></li>
            <li><a href="join.html">服务商招募</a></li>
            <li><a href="javascript:void(0);">支付说明</a></li>
            <li><a href="about.html">关于我们</a></li>
        </ul>
    </div>
</header>
<!--head end-->
        
               
        <!--登录-->
        <div class="banner muti_login">
        	<img src="__IMG__/banner1.jpg" width="100%" />
            <div class="login_box">
            	<h3>密码登录>></h3>
                <form>
                    <div class="box_input">
                        <ul>
                            <li>
                                <div class="fl input_icon"><img src="__IMG__/icon_11.png" width="22" style="margin-top:7px;" /></div>
                                <input class="fl" type="text" placeholder="" />
                            </li>
                            <li>
                                <div class="fl input_icon"><img src="__IMG__/icon_12.png" width="19" style="margin-top:6px;" /></div>
                                <input class="fl" type="password" placeholder="" />
                            </li>
                        </ul>
                        
                        <input type="button" value="登录" class="login_button" />
                        <div class="fr login_link mrgT20">
                        	<a href="javascript:void(0);">忘记密码</a><span>|</span><a href="javascript:void(0);">免费注册</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!--登录-->
       
        
        <!--footer-->
<footer class="footer">
    <div class="foot" style="height:258px;background:#7d7d7d;color:#fff;border-top:1px solid #7d7d7d;">
        <div class="container2 footer_list">
            <div class="fl contact foot_list">
                <h3>联系我们</h3>
                <ul>
                    <li><h1 class="fl">国内：</h1><p class="fl">13616535028；15869163888</p></li>
                    <li><h1 class="fl">国外：</h1><p class="fl">+8613616535028；+8615869163888</p></li>
                    <li><h1 class="fl">服务时间：</h1><p class="fl">7*24小时</p></li>
                    <li><h1 class="fl">邮箱：</h1><p class="fl">mtys@muti35.com</p></li>
                    <li><h1 class="fl">地址：</h1><p class="fl">浙江省杭州市西湖区杭州市西湖区文一西路75号1号楼五层506室</p></li>
                </ul>
            </div>

            <div class="fl company_profile foot_list">
                <h3 class="texC">公司简介</h3>
                <div class="main">杭州木梯商务服务有限公司——木梯商务以翻译为基础服务，通过遍布全球的近万名译员及司导，为出境的华人企业、商务人士或游客，提供翻译、司机/导游服务，其中包括：笔译、口译、商务陪同、包车、接送机、司机、司机兼导游等专业服务，最终实现全球的华人网络综合服务平台。</div>
            </div>

            <div class="fr concern foot_list">
                <h3 class="texC">关注我们</h3>
                <ul class="">
                    <li class="fl"><img src="/static/home/images/icon.png" width="36" class="mrgB10" /><img src="/static/home/images/icon_2.png" width="100%" /></li>
                    <li class="fr"><img src="/static/home/images/icon_1.png" width="36" class="mrgB10" /><img src="/static/home/images/icon_3.png" width="100%" /></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="foot_bottom">
        <div class="foot_link texC">
            <a href="javascript:void(0);">帮助中心</a>
            <a href="javascript:void(0);">关于我们</a>
            <a href="javascript:void(0);">联系我们</a>
            <a href="javascript:void(0);">服务条款</a>
            <a href="javascript:void(0);">免责声明</a>
            <a href="javascript:void(0);">加入我们</a>
            <a href="javascript:void(0);">媒体中心</a>
        </div>
        <p class="texC mrgT10">版权所有©杭州木梯商务服务有限公司  Hangzhou MT-multi Biz Co.,Ltd</p>
        <p class="texC mrgT5">浙ICP备16030130号</p>
    </div>
</footer>
<!--footer end-->
    </div>
</body>
<script type="text/javascript" src="__JS__/common.js"></script>
<script>
	//轮播
	jQuery(".banner").slide({
		titCell:".bd ul", 
		mainCell:".hd ul", 
		effect:"fade",  
		autoPlay:true, 
		autoPage:true, 
		trigger:"mouseover",
		easing:"easeInQuad"
	});
	jQuery(".picScroll-left").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:4});
</script>
</html>
