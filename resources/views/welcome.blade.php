@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Laravel 6</div>
                <div class="panel-body">
                    Your Application's Landing Page.
                </div>
                <p>{{time()}}</p>
                <p>{{var_dump($arry)}}</p>
                {{--模板注释--}}
                @if($name=="xiao")
                    I'm = xiao
                @elseif($name=="xxxx")
                    ming

                @else
                    who ?
                 @endif
                @if(in_array($name,$arry))
                    true
                    @else
                false
                    @endif

                @for($i=0;$i<10;$i++)
                    {{$i}}
                @endfor
            </div>
        </div>
    </div>
</div>
@endsection
