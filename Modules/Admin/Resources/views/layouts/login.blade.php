<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF  Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', '管理后台') }}</title>

    <!-- Styles -->
    <link href="{{ asset('theme/admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/admin/css/font-awesome.css?v=4.4.0') }}" rel="stylesheet">

    <link href="{{ asset('theme/admin/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/admin/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/admin/css/login.css') }}" rel="stylesheet">
</head>
<body class="signin">
<div class="signinpanel">
    <div class="row">
        <div class="col-sm-7">
            <div class="signin-info">
                <div class="logopanel m-b">
                    <h1>[ {{ config('app.name', '管理后台') }} ]</h1>
                </div>
                <div class="m-b"></div>
                <h4>欢迎使用 </h4>
                <ul class="m-b">
                    <li><i class="fa fa-arrow-circle-o-right m-r-xs"></i> 优势一</li>
                    <li><i class="fa fa-arrow-circle-o-right m-r-xs"></i> 优势二</li>
                    <li><i class="fa fa-arrow-circle-o-right m-r-xs"></i> 优势三</li>
                    <li><i class="fa fa-arrow-circle-o-right m-r-xs"></i> 优势四</li>
                    <li><i class="fa fa-arrow-circle-o-right m-r-xs"></i> 优势五</li>
                </ul>
                <strong>忘记密码？ <a href="{{ route('admin.password.request') }}">{{ __('Forgot Your Password?') }}&raquo;</a></strong>
            </div>
        </div>
        <div class="col-sm-5">
            @yield('content')

        </div>
    </div>
    <div class="signup-footer">
        <div class="pull-left">
            &copy; 2019 All Rights Reserved. MOQUYUN
        </div>
    </div>
</div>
</body>
</html>
