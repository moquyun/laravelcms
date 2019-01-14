@extends('admin::layouts.master')

@section('content')

        <div class="row">
            <div class="col-sm-12">
                <div class="ibox">
                    <div class="ibox-content">
                        <div class="row m-b-sm m-t-sm">
                            <div class="col-md-3">

                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#myModal">角色列表
                                </button>
                                <button type="button" class="btn btn-white" data-toggle="modal" data-target="#addRole">
                                    添加角色
                                </button>
                            </div>
                            <div class="col-md-9"></div>

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
                        </div>

                        <div class="project-list">

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
                                        <button type="button" class="btn btn-white btn-sm" data-toggle="modal" data-target="#editRole">
                                            <i class="fa fa-trash"></i> 删除
                                        </button>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection