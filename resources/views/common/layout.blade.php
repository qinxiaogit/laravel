<!Doctype html>
<html lang="zh-CN">
<header>
    <meta charset="utf-8">
    <title>laravel表单</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
</header>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            @section('xiaoming')
                <div class="list-group">
                    <a href="#" class="list-group-item active">学生列表</a>
                    <a href="#" class="list-group-item">新增</a>
                </div>
            @show
        </div>
    </div>
</div>
<script href="{{asset('assets/js/bootstrap.js')}}" ></script>
<script href="{{asset('assets/js/jquery-3.1.1.js')}}" ></script>
@section('my-js')
    @show
</body>
</html>