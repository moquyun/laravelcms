@extends('admin::layouts.master')

@section('content')
   @component('components.tabs',['title'=>'角色管理'])
    @slot('nav')
        <li class="active"><a data-toggle="tab" href="tabs_panels.html#tab-4"><i class="fa fa-user"></i>角色列表</a>
        </li>
        <li class=""><a data-toggle="modal" data-target="#addRole"><i class="fa fa-user-plus"></i>添加角色</a>
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
        <table class="table table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th style="width: 30%;">角色名称</th>
                <th style="width: 30%;">角色标识</th>
                <th >创建时间</th>
                <th class="project-actions"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($roles as $role)
                <tr>
                    <td class="project-status">
                                            <span class="label label-primary">{{$role['id']}}
                                        </span>
                    </td>
                    <td style="width: 30%;">
                        {{$role['title']}}
                    </td>
                    <td style="width: 30%;">
                        {{$role['name']}}
                    </td>
                    <td >
                        {{$role['created_at']}}
                    </td>
                    <td class="project-actions">
                        <button type="button" class="btn btn-white btn-sm" data-toggle="modal" data-target="#editRole{{$role['id']}}">
                            <i class="fa fa-pencil"></i>
                            编辑
                        </button>
                        <button type="button" onclick="delRole({{$role['id']}},this)" class="btn btn-white btn-sm" data-toggle="modal" data-target="#editRole">
                            <i class="fa fa-trash"></i> 删除
                        </button>
                        <form action="/admin/role/{{$role['id']}}" hidden method="post">
                            @csrf @method('DELETE')
                        </form>
                        <a href="/admin/role/permission/{{$role['id']}}" class="btn btn-white btn-sm" >
                            <i class="fa fa-group"></i> 权限
                            </button>
                            @component('components.modal',['id'=>"editRole{$role['id']}",'method'=>'PUT','title'=>"编辑{$role['title']}",'url'=>"/admin/role/{$role['id']}"])
                                <div class="form-group">
                                    <label>角色名称</label>
                                    <input type="text" placeholder="请输入中文角色名称" name="title" value="{{$role['title']}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>角色标识</label>
                                    <input type="text" placeholder="标识必须为英文字母" name="name" value="{{$role['name']}}" class="form-control">
                                </div>
                        @endcomponent
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    @endslot
    @endcomponent
@endsection

@section('scripts')
<script>
    function delRole(id,bt) {
        //询问框
        parent.layer.confirm('确定删除角色吗?', function(index){
            $(bt).next('form').trigger('submit');
            parent.layer.close(index);
        });
    }
</script>
@endsection