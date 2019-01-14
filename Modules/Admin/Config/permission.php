<?php
//
return [
    [
        'group' => '文章管理',
        'permissions' => [
            ['title' => '网站管理', 'name' => 'Admin::config-site', 'guard' => 'admin'],
            ['title' => '微信配置', 'name' => 'Admin::config-wechat', 'guard' => 'admin'],
        ],
    ],
];
