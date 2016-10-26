<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/weui.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/weui.css">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
</head>
<body ontouchstart>
<div class="content">
    <div class="weui-cells__title">Laravel5</div>
@yield('content')
</div>
</body>
<script type="text/javascript" src="{{asset('assets/js/jquery-3.1.1.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/vue.js')}}"></script>
@yield('my-js')
</html>