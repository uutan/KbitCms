<?php

return [
    // ----------------------- 权限配置 ----------------------- //

    'authItem' => [
        'column/index' => '栏目管理',
        'column/ajax-edit' => '栏目编辑',
        'column/ajax-update' => '栏目状态修改',
        'column/delete' => '栏目删除',

        'content/index' => '内容管理',
        'content/ajax-edit' => '内容编辑',
        'content/ajax-update' => '内容状态修改',
        'content/delete' => '内容删除',


        'template/index' => '模板管理',
        'template/ajax-edit' => '模板编辑',
        'template/ajax-update' => '模板状态修改',
        'template/delete' => '模板删除',

    ],

    // ----------------------- 快捷入口 ----------------------- //

    'cover' => [

    ],

    // ----------------------- 菜单配置 ----------------------- //
    'menuConfig' => [
         'location' => 'addons', // default:系统顶部菜单;addons:应用中心菜单
         'icon' => 'fa fa-puzzle-piece',
    ],

    'menu' => [
        [
            'title' => '栏目管理',
            'route' => 'column/index',
            'icon' => 'fa fa-columns',
            'params' => []
        ],
        [
            'title' => '内容管理',
            'route' => 'content/index',
            'icon' => 'fa fa-cube',
            'params' => []
        ],
        [
            'title' => '模板管理',
            'route' => 'template/index',
            'icon' => 'fa fa-cube',
            'params' => []
        ],
    ],
];