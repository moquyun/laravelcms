<?php
//
return [
    [
        'group' => '角色管理',
        'permissions' => [
            ['title' => '角色列表', 'name' => 'Modules\Admin\Http\Controllers\RoleController@index', 'guard' => 'admin'],
            ['title' => '修改列表', 'name' => 'Modules\Admin\Http\Controllers\RoleController@edit', 'guard' => 'admin'],
            ['title' => '删除角色', 'name' => 'Modules\Admin\Http\Controllers\RoleController@destroy', 'guard' => 'admin'],
            ['title' => '添加角色', 'name' => 'Modules\Admin\Http\Controllers\RoleController@create', 'guard' => 'admin'],
            ['title' => '修改角色权限', 'name' => 'Modules\Admin\Http\Controllers\RoleController@permission', 'guard' => 'admin'],
        ],
    ],
];
