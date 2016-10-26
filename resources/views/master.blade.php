<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('title')</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/weui.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/weui.css">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
</head>
<body ontouchstart>
<div class="content">
	<div class="weui-cells__title">Laravel5</div>
	<div class="weui-cells weui-cells_form">
		<div class="weui-cell">
			<div class="weui-cell__bd"><label class="weui-label">帐号</label></div>
			<div class="weui-cell__bd weui-cell_primary">
				<input class="weui-input" type="tel" placeholder="邮箱或手机号"/>
			</div>
		</div>
		<div class="weui-cell">
			<div class="weui-cell__bd"><label class="weui-label">密码</label></div>
			<div class="weui-cell__bd weui-cell_primary">
				<input class="weui-input" type="password" placeholder="不少于6位"/>
			</div>
		</div>
		<div class="weui-cell weui-cell_vcode">
			<div class="weui-cell__hd"><label class="weui-label">手机验证码</label></div>
			<div class="weui-cell__bd weui-cell_primary">
				<input class="weui-input" type="number" placeholder="请输入验证码">
			</div>
			<div class="weui-cell__ft" name="phoneVcode">
				<img src="/service/vcode/getcode" class="weui-vcode-img">
			</div>
		</div>
		<div class="weui-cell weui-cell_vcode">
			<div class="weui-cell__hd"><label class="weui-label">验证码</label></div>
			<div class="weui-cell__bd">
				<input class="weui-input" type="number" placeholder="请输入验证码"/>
			</div>
			<div class="weui-cell__ft">
				<!--img class="weui-vcode-img" src="./images/vcode.jpg" /-->
			</div>
		</div>
	</div>
@yield('content')
</div>
</body>
<script type="text/javascript" src="assets/js/jquery-3.1.1.js"></script>
<script type="text/javascript" >
	var phoneVcode = $('[name="phoneVcode"]').click(function(){

		$(this).find('img').attr('src','/service/vcode/getcode?'+Math.random());
	});
</script
@yield('my-js')
</html>