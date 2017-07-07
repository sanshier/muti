<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:68:"C:\wamp64\www\muti\public/../application/admin\view\admin\index.html";i:1499398636;s:63:"C:\wamp64\www\muti\public/../application/admin\view\layout.html";i:1499363270;s:73:"C:\wamp64\www\muti\public/../application/admin\view\.\_layout\header.html";i:1499362738;s:70:"C:\wamp64\www\muti\public/../application/admin\view\.\_layout\top.html";i:1499362894;s:74:"C:\wamp64\www\muti\public/../application/admin\view\.\_layout\sidebar.html";i:1499362522;s:73:"C:\wamp64\www\muti\public/../application/admin\view\.\_layout\footer.html";i:1499357637;}*/ ?>
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
	<link rel="stylesheet" type="text/css" href="__LIB__/bootstrap3/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="__CSS__/bootstrap-table.css" />
	<link rel="stylesheet" type="text/css" href="__CSS__/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="__CSS__/simple-line-icons.css" />   
    <link rel="stylesheet" type="text/css" href="__CSS__/animate.css" />
    <link rel="stylesheet" type="text/css" href="__CSS__/style.css" />
    <script type="text/javascript" src="__LIB__/jquery-3.1.0.min.js"></script>
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
                <a class="dropdown-item" href="/admin.php/login/out"><i class="fa fa-lock"></i> Logout</a>
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
                        <a class="nav-link" href="/admin.php/ep_user.html"><i class="icon-arrow-right"></i> 企业会员</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-menu"></i> 译员管理</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="/admin.php/supplier.html"><i class="icon-arrow-right"></i> 译员列表</a>
                    </li>
                </ul>
            </li>                   
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-menu"></i> 任务管理</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="/admin.php/job.html"><i class="icon-arrow-right"></i> 任务列表</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin.php/job_catalog.html"><i class="icon-arrow-right"></i> 任务分类</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-menu"></i> 订单管理</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="/admin.php/order.html"><i class="icon-arrow-right"></i> 订单列表</a>
                    </li>
                </ul>
            </li>     
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-menu"></i> 内容管理</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="/admin.php/article_cat.html"><i class="icon-arrow-right"></i> 文章分类</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin.php/article.html"><i class="icon-arrow-right"></i> 文章列表</a>
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
                        <a class="nav-link" href="/admin.php/admin.html"><i class="icon-arrow-right"></i> 账户管理</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin.php/power.html"><i class="icon-arrow-right"></i> 权限管理</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin.php/role.html"><i class="icon-arrow-right"></i> 角色管理</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-menu"></i>统计分析</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="/admin.php/analyse_member.html"><i class="icon-arrow-right"></i> 会员统计</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin.php/analyse_supplier.html"><i class="icon-arrow-right"></i> 译员统计</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin.php/analyse_order.html"><i class="icon-arrow-right"></i> 订单统计</a>
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
    <li class="breadcrumb-item">系统管理</li>
    <li class="breadcrumb-item active">账户管理</li>
</ol>
<!-- Data Tables -->
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <!-- 表单标题概要 -->
                <div class="card-header">
                    <i class="fa fa-align-justify"></i>
                    <?php echo lang('Account List'); ?>
                </div>
                <!-- 表单内容 -->
                <div class="card-block">
                    <!-- 用户控件（操作） -->
                    <div id="toolbar" class="toolbar" data-module="/admin/User">
                        <div class="btn-group">
                            <button type="button" data-name="add" class="btn btn-primary" data-event-type="view" data-event-value="" data-target="modal">
                                <i class="fa fa-plus" aria-hidden="true" style="margin-right: 2px"> </i>添加
                            </button>
                            <button type="button" data-name="delete" class="btn btn-default" data-event-type="default" data-event-value="" data-target="modal"><i class="fa fa-trash" aria-hidden="true" style="margin-right: 2px"> </i>删除</button>
                        </div>                        
                    </div>
                    <!-- 表格数据 -->
                    <table id="table" data-toggle="gridview" class="table table-condensed" data-url="<?php echo url('admin/admin/getList'); ?>" data-toolbar="#toolbar" data-show-columns="true" data-page-size="10" data-page-list="[10, 25, 50, All]" data-unique-id="id" data-pagination="true" data-side-pagination="client" data-search="true" data-click-to-select="false">
                        <thead>
                            <tr>
                                <th data-width="10" data-align="center" data-checkbox="true"></th>
                                <th data-width="50" data-field="account" ><?php echo lang('Account'); ?></th>
                                <th data-width="50" data-field="name" data-align="center"><?php echo lang('Name'); ?></th>
                                <th data-width="30" data-field="sexy" data-align="center"><?php echo lang('Sexy'); ?></th>
                                <th data-width="50" data-field="position" data-align="center"><?php echo lang('Position'); ?></th>
                                <th data-width="30" data-field="work_no" data-align="center"><?php echo lang('Work no'); ?></th>
                                <th data-width="30" data-field="status" ><?php echo lang('Status'); ?></th>
                                <th data-width="80" data-field="createtime" data-align="center"><?php echo lang('Create Time'); ?></th>
                                <th data-width="80" data-field="operate"   data-align="center" data-formatter="operateFormatter" data-events="operateEvents"><?php echo lang('Operate'); ?></th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function operateFormatter(value, row, index) {
        return [
            '<a class="btn btn-xs edit" href="javascript:void(0)" title="<?php echo \think\Lang::get('Edit'); ?>">',
            '<i class="fa fa-edit"></i>',
            '</a>  ',
            '<a class="btn btn-xs delete" href="javascript:void(0)" title="<?php echo \think\Lang::get('Delete'); ?>">',
            '<i class="fa fa-trash"></i>',
            '</a>'
        ].join('');
    }

    var operateEvents = {
        'click .edit': function (e, value, row, index) {
            var param = {
                url: "<?php echo url('admin/admin/edit');; ?>",
                data: {id: row.id}
            }
            $("#table").gridView('loadModal', param.url,param.data)
        },
        'click .delete': function (e, value, row, index) {
            $("#table").gridView('deleteModal', 'delete', row)
            
        }
    };

</script>
        </main>

    </div>
    <footer class="app-footer">
    Copyright &copy; 2017.木梯商务 All rights reserved.
</footer>
	<!-- Bootstrap and necessary plugins -->
    <script type="text/javascript" src="__LIB__/bootstrap3/js/bootstrap.min.js"></script>  
	<script type="text/javascript" src="__JS__/plugins/metisMenu/jquery.metisMenu.js"></script>
	<script type="text/javascript" src="__JS__/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script type="text/javascript" src="__JS__/bootstrap-table.js"></script>
	<script type="text/javascript" src="__JS__/main.js"></script>
	<script type="text/javascript" src="__JS__/gridview.js"></script>
    <script type="text/javascript" src="__JS__/jquery.validate.min.js"></script>
	<script type="text/javascript" src="__JS__/<?php echo \think\Lang::detect();?>.js"></script>
    
    <!-- GenesisUI main scripts -->
    <script type="text/javascript" src="__JS__/app.js"></script>
    <script type="text/javascript" src="__JS__/plugins/pace/pace.min.js"></script>
</body>
</html>