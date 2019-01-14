<?php
//
return [
    [
        'group' => '系统管理',
        'permissions' => [
            ['title' => '网站管理', 'name' => 'Admin::config-site', 'guard' => 'admin'],
            ['title' => '微信配置', 'name' => 'Admin::config-wechat', 'guard' => 'admin'],
            ['title' => '邮件配置', 'name' => 'Admin::config-mail', 'guard' => 'admin'],
            ['title' => '权限管理', 'name' => 'Admin::role-manage', 'guard' => 'admin'],
        ],
    ],
];
