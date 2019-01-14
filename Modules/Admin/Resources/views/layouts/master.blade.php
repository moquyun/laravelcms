<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="shortcut icon" href="favicon.ico">
    <link href="{{ asset('theme/admin/css/bootstrap.min.css?v=3.3.6') }}" rel="stylesheet">
    <link href="{{ asset('theme/admin/css/font-awesome.css?v=4.4.0') }}" rel="stylesheet">
    <link href="{{ asset('theme/admin/css/plugins/iCheck/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/admin/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/admin/css/style.css?v=4.1.0') }}" rel="stylesheet">
    <link href="{{ asset('theme/admin/css/plugins/toastr/toastr.min.css') }}" rel="stylesheet">

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInUp">
        @include('layouts._error')
        @yield('content')
    </div>
<!-- 全局js -->
<script src="{{ asset('theme/admin/js/jquery.min.js?v=2.1.4') }}"></script>
<script src="{{ asset('theme/admin/js/bootstrap.min.js?v=3.3.6') }}"></script>


<!-- 自定义js -->
<script src="{{ asset('theme/admin/js/content.js') }}"></script>
<script src="{{ asset('theme/admin/js/plugins/iCheck/icheck.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>
<!-- toastr -->
<script src="{{ asset('theme/admin/js/plugins/toastr/toastr.min.js') }}"></script>

@include('layouts._message')
</body>

</html>
