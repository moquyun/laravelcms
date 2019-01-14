<?php

return [
    [
        'group' => '文章管理',
        'permissions' => [
            ['title' => '栏目管理', 'name' => 'Article::catetory article', 'guard' => 'admin'],
            ['title' => '文章管理', 'name' => 'Article::content manage', 'guard' => 'admin'],
        ],
    ],
];
