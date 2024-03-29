<!DOCTYPE html>
<html lang="en" class="bg-dark">
<head>
    <meta charset="utf-8"/>
	<title><?php p($title); ?></title>
	<meta name="description" content="<?php p($keywords);?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="stylesheet" href="<?php echo p($url); ?>/_assets/css/font.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo p($url); ?>/_assets/css/app.v1.css" type="text/css"/>
    <!--[if lt IE 9]>
    <script src="<?php echo p($url); ?>/_assets/js/ie/html5shiv.js"></script>
    <script src="<?php echo p($url); ?>/_assets/js/ie/respond.min.js"></script>
    <script src="<?php echo p($url); ?>/_assets/js/ie/excanvas.js"></script> <![endif]--></head>
<body class="">
<section id="content" class="m-t-lg wrapper-md animated fadeInUp">
    <div class="container aside-xxl"><a class="navbar-brand block" href="<?php p($url); ?>">简站(Simple-Site)</a>
        <section class="panel panel-default bg-white m-t-lg">
            <header class="panel-heading text-center"><strong>登陆</strong></header>
            <form action="#" id="login" class="panel-body wrapper-lg">
				<div class="input-group m-b">
					<span class="input-group-addon">手机号码</span>
					<input type="text" name="username" placeholder="请输入您的手机号" required="required" class="form-control">
				</div>
				<div class="input-group m-b">
					<span class="input-group-addon">登录密码</span>
					<input type="password" name="password" placeholder="请输入您的登录密码" required="required" class="form-control">
				</div>
                <div class="checkbox">
					<label> <input type="checkbox"> 保持登陆状态 </label>
				</div>
                <a href="#" class="pull-right m-t-xs">
                    <small>找回密码?</small>
                </a>
                <button type="submit" class="btn btn-primary">登陆</button>
                <div class="line line-dashed"></div>
                <p class="text-muted text-center">
                    <small>还没有账号?</small>
                </p>
                <a href="<?php echo $registerUrl; ?>" class="btn btn-default btn-block">一分钟创建一个账号</a>
			</form>
        </section>
    </div>
</section>
<!-- footer -->
<footer id="footer">
    <div class="text-center padder">
        <p>
            <small><?php p($copyright); ?></small>
        </p>
    </div>
</footer>
<!-- / footer --> <!-- Bootstrap --> <!-- App -->
<script src="<?php echo p($url); ?>/_assets/js/app.v1.js"></script>
<script src="<?php echo p($url); ?>/_assets/js/app.plugin.js"></script>
<script>
	var loginButton = $("button[type=submit]");
	$("form#login").submit(function(e){
		e.preventDefault();
		loginButton.text('登陆中...');
		$.post('/login',$("form#login").serialize(),function(result){
			loginButton.text('登陆');
			if(result.status == 1001){
				window.location.href = result.result.data;
			}else{
				alert(result.result.msg);
			}
		},'JSON');
	})
</script>
</body>
</html>