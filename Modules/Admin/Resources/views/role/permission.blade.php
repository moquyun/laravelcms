@extends('admin::layouts.master')

@section('content')
    @component('components.tabs',['title'=>$role->title.'权限设置'])
        @slot('nav')
            <li class=""><a href="/admin/role"><i class="fa fa-user"></i>角色列表</a>
            </li>
            <li class="active"><a href="#"><i class="fa fa-group"></i>权限设置</a>
            </li>
            @component('components.modal',['id'=>'addRole','title'=>'添加角色','url'=>'/admin/role'])
                <div class="form-group">
                    <label>角色名称</label>
                    <input type="text" placeholder="请输入中文角色名称" name="title" value="{{old('title')}}" class="form-control">
                </div>
                <div class="form-group">
                    <label>角色标识</label>
                    <input type="text" placeholder="标识必须为英文字母" name="name" value="{{old('name')}}" class="form-control">
                </div>
            @endcomponent
        @endslot

        @slot('body')

                    <form method="post" action="/admin/role/permission/{{$role['id']}}" class="form-horizontal">
                        @csrf
                        <div class="hr-line-dashed"></div>
                        @foreach($modules as $module)
                            @foreach($module['rules'] as $rule)
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">{{$rule['group']}}</label>

                                    <div class="col-sm-10">
                                        @foreach($rule['permissions'] as $permission)
                                            <label class="checkbox-inline i-checks">
                                                <input type="checkbox" name="name[]"
                                                       {{$role->hasPermissionTo($permission['name'])?'checked=""':""}}
                                                       value="{{$permission['name']}}">{{$permission['title']}}</label>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                            <div class="hr-line-dashed"></div>
                        @endforeach

                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-2">
                                <button class="btn btn-primary" type="submit">保存</button>
                            </div>
                        </div>
                    </form>

        @endslot
    @endcomponent
@endsection