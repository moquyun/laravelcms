<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">

    <title>H+ 后台主题UI框架 - 主页</title>

    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->

    <link rel="shortcut icon" href="favicon.ico">
    <link href="{{ asset('theme/admin/css/bootstrap.min.css?v=3.3.6') }}" rel="stylesheet">
    <link href="{{ asset('theme/admin/css/font-awesome.css?v=4.4.0') }}" rel="stylesheet">

    <link href="{{ asset('theme/admin/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/admin/css/style.css?v=4.1.0') }}" rel="stylesheet">
</head>

<body class="fixed-sidebar full-height-layout gray-bg" style="overflow:hidden">
<div id="wrapper">
    <!--左侧导航开始-->
    @include('admin::layouts._menus_left')
    <!--左侧导航结束-->
    <!--右侧部分开始-->
    <div id="page-wrapper" class="gray-bg dashbard-1">
        @include('admin::layouts._navbar_top')
        <div class="row content-tabs">
            <button class="roll-nav roll-left J_tabLeft"><i class="fa fa-backward"></i>
            </button>
            <nav class="page-tabs J_menuTabs">
                <div class="page-tabs-content">
                    <a href="javascript:;" class="active J_menuTab" data-id="/admin/index">首页</a>
                </div>
            </nav>
            <button class="roll-nav roll-right J_tabRight"><i class="fa fa-forward"></i>
            </button>
            <div class="btn-group roll-nav roll-right">
                <button class="dropdown J_tabClose" data-toggle="dropdown">关闭操作<span class="caret"></span>

                </button>
                <ul role="menu" class="dropdown-menu dropdown-menu-right">
                    <li class="J_tabShowActive"><a>定位当前选项卡</a>
                    </li>
                    <li class="divider"></li>
                    <li class="J_tabCloseAll"><a>关闭全部选项卡</a>
                    </li>
                    <li class="J_tabCloseOther"><a>关闭其他选项卡</a>
                    </li>
                </ul>
            </div>
            <a href="javascript:void(0);" class="roll-nav roll-right J_tabExit" onclick="event.preventDefault();document.getElementById('logout-form').submit()"><i class="fa fa fa-sign-out"></i> 退出</a>
        </div>

        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
            @csrf
        </form>

        <div class="row J_mainContent" id="content-main">
            <iframe class="J_iframe" name="iframe0" width="100%" height="100%" src="/admin/index" frameborder="0" data-id="/admin/index" seamless></iframe>
        </div>
        @include('admin::layouts._footer')
    </div>
    <!--右侧部分结束-->
    <!--右侧边栏开始-->
    @include('admin::layouts._sidebar_right')
    <!--右侧边栏结束-->
    <!--mini聊天窗口开始-->
    @include('admin::layouts._mini_chat')
    <!--mini聊天窗口结束-->
</div>

<!-- 全局js -->
<script src="{{ asset('theme/admin/js/jquery.min.js?v=2.1.4') }}"></script>
<script src="{{ asset('theme/admin/js/bootstrap.min.js?v=3.3.6') }}"></script>
<script src="{{ asset('theme/admin/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
<script src="{{ asset('theme/admin/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('theme/admin/js/plugins/layer/layer.min.js') }}"></script>

<!-- 自定义js -->
<script src="{{ asset('theme/admin/js/hplus.js?v=4.1.0') }}"></script>
<script type="text/javascript" src="{{ asset('theme/admin/js/contabs.js') }}"></script>

<!-- 第三方插件 -->
<script src="{{ asset('theme/admin/js/plugins/pace/pace.min.js') }}"></script>

</body>

</html>
