<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:68:"C:\wamp64\www\muti\public/../application/admin\view\order\index.html";i:1499358296;s:63:"C:\wamp64\www\muti\public/../application/admin\view\layout.html";i:1499274457;s:73:"C:\wamp64\www\muti\public/../application/admin\view\.\_layout\header.html";i:1499274982;s:70:"C:\wamp64\www\muti\public/../application/admin\view\.\_layout\top.html";i:1499357979;s:74:"C:\wamp64\www\muti\public/../application/admin\view\.\_layout\sidebar.html";i:1499357571;s:73:"C:\wamp64\www\muti\public/../application/admin\view\.\_layout\footer.html";i:1499357637;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php echo \think\Config::get('website.name'); ?></title>
	<meta name="KeyWords" content="<?php echo \think\Config::get('website.keywords'); ?>">
	<meta name="Description" content="<?php echo \think\Config::get('website.description'); ?>">
	<link rel="stylesheet" type="text/css" href="__CSS__/style.css" />
	<!--<link rel="stylesheet" type="text/css" href="__LIB__/bootstrap3/css/bootstrap.min.css" />    -->
	<link rel="stylesheet" type="text/css" href="__CSS__/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="__CSS__/simple-line-icons.css" />
</head> 

<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
    <header class="app-header navbar">
    <button class="navbar-toggler mobile-sidebar-toggler hidden-lg-up" type="button">☰</button>
    <a class="navbar-brand" href="#"></a>
    <ul class="nav navbar-nav hidden-md-down">
        <li class="nav-item">
            <a class="nav-link navbar-toggler sidebar-toggler" href="#">☰</a>
        </li>
    </ul>
    <ul class="nav navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <img src="__IMG__/avatars/6.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                <span class="hidden-md-down">admin</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#"><i class="fa fa-lock"></i> Logout</a>
            </div>
        </li>
        <li class="nav-item hidden-md-down">
            <a class="nav-link navbar-toggler aside-menu-toggler" href="#">☰</a>
        </li>

    </ul>
</header>
    <div class="app-body">
        <div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="index.html"><i class="icon-speedometer"></i> 管理控制台 <span class="badge badge-info"></span></a>
            </li>

            <li class="nav-title">
                业务管理
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-menu"></i> 会员管理</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="/admin.php/user.html"><i class="icon-arrow-right"></i> 个人会员</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ep_user.html"><i class="icon-arrow-right"></i> 企业会员</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-menu"></i> 译员管理</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="supplier.html"><i class="icon-arrow-right"></i> 译员列表</a>
                    </li>
                </ul>
            </li>                   
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-menu"></i> 任务管理</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="job.html"><i class="icon-arrow-right"></i> 任务列表</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="job_catalog.html"><i class="icon-arrow-right"></i> 任务分类</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-menu"></i> 订单管理</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="order.html"><i class="icon-arrow-right"></i> 订单列表</a>
                    </li>
                </ul>
            </li>     
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-menu"></i> 内容管理</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="article_cat.html"><i class="icon-arrow-right"></i> 文章分类</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="article.html"><i class="icon-arrow-right"></i> 文章列表</a>
                    </li>
                </ul>
            </li>
            <li class="divider"></li>
            <li class="nav-title">
                系统管理
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-menu"></i>系统管理</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="admin.html"><i class="icon-arrow-right"></i> 账户管理</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="power.html"><i class="icon-arrow-right"></i> 权限管理</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="role.html"><i class="icon-arrow-right"></i> 角色管理</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-menu"></i>统计分析</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="analyse_member.html"><i class="icon-arrow-right"></i> 会员统计</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="analyse_supplier.html"><i class="icon-arrow-right"></i> 译员统计</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="analyse_order.html"><i class="icon-arrow-right"></i> 订单统计</a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</div>
        <!-- Main content -->
        <main class="main">
            <!-- Breadcrumb -->
<ol class="breadcrumb">
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item">订单管理</li>
    <li class="breadcrumb-item active">订单列表</li>
</ol>
<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            
        </div>
        <!--/.row-->

        <div class="card">
            
            
        </div>
        <!--/.card-->

        <div class="row">
            
        </div>
        <!--/.row-->

        <div class="row">
            
            <!--/.col-->
        </div>
        <!--/.row-->
    </div>


</div>
<!-- /.conainer-fluid -->
        </main>

    </div>
    <footer class="app-footer">
    Copyright &copy; 2017.木梯商务 All rights reserved.
</footer>
	<!-- Bootstrap and necessary plugins -->
    <script type="text/javascript" src="__LIB__/jquery.min.js"></script>
    <script type="text/javascript" src="__LIB__/tether.min.js"></script>
    <script type="text/javascript" src="__LIB__/bootstrap3/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="__LIB__/pace.min.js"></script>
    
    <!-- Plugins and scripts required by all views -->
    <script type="text/javascript" src="__LIB__/Chart.min.js"></script>

    <!-- GenesisUI main scripts -->
    <script type="text/javascript" src="__JS__/app.js"></script>
    <!-- Plugins and scripts required by this views -->
    <!-- Custom scripts required by this view -->
    <script type="text/javascript" src="__JS__/views/main.js"></script>
</body>
</html>