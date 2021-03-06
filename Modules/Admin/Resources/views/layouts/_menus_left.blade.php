<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="nav-close"><i class="fa fa-times-circle"></i>
    </div>
    <div class="sidebar-collapse">
        <ul class="nav" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <span><img alt="image" class="img-circle" src="theme/admin/img/profile_small.jpg" /></span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear">
                               <span class="block m-t-xs"><strong class="font-bold">{{ Auth::user()->name }}</strong></span>
                                <span class="text-muted text-xs block">{{Auth::user()->nickname}}<b class="caret"></b></span>
                                </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a class="J_menuItem" href="form_avatar.html">修改头像</a>
                        </li>
                        <li><a class="J_menuItem" href="profile.html">个人资料</a>
                        </li>
                        <li><a class="J_menuItem" href="contacts.html">联系我们</a>
                        </li>
                        <li><a class="J_menuItem" href="mailbox.html">信箱</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="javascript:void(0);" onclick="event.preventDefault();document.getElementById('logout-form').submit()">安全退出</a>
                        </li>
                    </ul>
                </div>
                <div class="logo-element">H+
                </div>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-home"></i>
                    <span class="nav-label">主页</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a class="J_menuItem" href="/admin/index" data-index="0">主页</a>
                    </li>

                </ul>

            </li>

            @foreach(app('hd-menu')->all() as $moduleName => $groups)

                @foreach($groups as $group)
                    @if(\HDModule::hadPermission($group['permission'],'admin'))
                    <li>
                        <a href="#">
                            <i class="{{$group['icon']}}"></i>
                            <span class="nav-label">{{$group['title']}}</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            @foreach($group['menus'] as $menus)
                                @if(\HDModule::hadPermission($menus['permission'],'admin'))
                                <li>
                                    <a class="J_menuItem" href="{{$menus['url']}}">{{$menus['title']}}</a>
                                </li>
                                @endif
                            @endforeach
                        </ul>
                    </li>
                    @endif
                @endforeach
            @endforeach



        </ul>
    </div>
</nav>