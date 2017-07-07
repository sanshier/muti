<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"C:\wamp64\www\muti\public/../application/admin\view\login\index.html";i:1498937382;}*/ ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="CoreUI Bootstrap 4 Admin Template">
    <meta name="author" content="Lukasz Holeczek">
    <meta name="keyword" content="CoreUI Bootstrap 4 Admin Template">
    <!-- <link rel="shortcut icon" href="assets/ico/favicon.png"> -->
    <title><?php echo \think\Config::get('website.name'); ?></title>
    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="__CSS__/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="__CSS__/simple-line-icons.css" />
    <!-- Main styles for this application -->
    <link rel="stylesheet" type="text/css" href="__CSS__/animate.css" />
    <link rel="stylesheet" type="text/css" href="__CSS__/style.css" />
    <link rel="stylesheet" type="text/css" href="__LIB__/bootstrap3/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="__CSS__/bootstrap-table.css" />
    <!-- js lib -->
    <script type="text/javascript" src="__LIB__/jquery.min.js"></script>
    <script type="text/javascript" src="__LIB__/bootstrap3/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="__JS__/jquery.validate.min.js"></script>

</head>

<body class="app flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-group mb-0">
                    <div class="card p-2">
                        <div class="card-block">
                            <h1><?php echo lang('Login_label'); ?></h1>
                            <p class="text-muted"><?php echo lang('Login_label_des'); ?></p>
                            <form id="login-form-hooks"  method="post" class="m-t" onsubmit="return false;">
                                <div class="msgerr" style="color: #e15f63;text-align: left;"></div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="icon-user"></i>
                                        </span>
                                        <input id="account" name="account" type="text" class="form-control" placeholder="<?php echo lang('Login_username'); ?>" maxlength="20" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="icon-lock"></i>
                                        </span>
                                        <input id="password" name="password"" type="password" class="form-control" placeholder="<?php echo lang('Login_password'); ?>" rangelength="[6,16]">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="icon-briefcase"></i>
                                        </span>
                                        <input id="captcha" name="captcha" type="text" class="form-control col-md-6" placeholder="<?php echo lang('Captcha'); ?>" maxlength="6">
                                        <img id="captchaimg" src="<?php echo captcha_src(); ?>" alt="<?php echo lang('Click On The Image Change One'); ?>" width="140" height="34" class="verify refcaptcha">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button id="sub-login" type="submit" class="btn btn-primary btn-block"><?php echo lang('Login_btn_val'); ?></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card card-inverse card-primary py-3 hidden-md-down" style="width:44%">
                        <div class="card-block text-center">
                            <div>
                                <h2><img src="__IMG__/logo1.png"></h2>
                                <p>&nbsp;</p>
                                <p>" 木 "有语言障碍</p>
                                <p>" 梯 "升沟通效率</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap and necessary plugins -->
    

    <!--自定义JS-->
    <script type="text/javascript">
    $(function () {
        //这个控件，验证通过执行提交
       $("#login-form-hooks").validate({
            submitHandler: function () {
                doLogin();
            }
       })

        $('.refcaptcha').on('click', function(){
            $('#captchaimg').get(0).src=($('#captchaimg').get(0).src+'?=r'+Math.random(1, 10000));
        });
    })

    function doLogin() {
    	$(function(){
    		$.post('<?php echo url("/admin/login/doLogin"); ?>', $('#login-form-hooks').serialize(), function(o){
    			if(o.code == 1) {
    				window.location.href = o.url;
    			} else {
    				$(".msgerr").html(o.msg);
    			}
                $('.refcaptcha').click();
    		}, 'json');
    	})
        return false;
    }


    </script>
</body>
</html>