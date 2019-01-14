@extends('admin::layouts.master')

@section('content')
    <div class="panel panel-success">
        <div class="panel-heading">
            [{{$role->title}}] 权限设置
        </div>

        <div class="panel-body">
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
        </div>
    </div>
@endsection