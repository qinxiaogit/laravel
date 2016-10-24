<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('title')</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/weui.min.css">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
</head>
<body>
<div class="container">
	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">我的文档</a>
			</div>
		</div>
	</nav>
	<div class="weui_cells_title">带说明的列表项</div>
	<div class="weui_cells">
		<div class="weui_cell">
			<div class="weui_cell_bd weui_cell_primary">
				<p>标题文字</p>
			</div>
			<div class="weui_cell_ft">
				说明文字
			</div>
		</div>
	</div>
@yield('content')
</div>
</body>
<script type="text/javascript" src="assets/js/jquery-3.1.1.js"></script>
@yield('my-js')
</html>