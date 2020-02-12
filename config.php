<?php
return [
    'document'      => [
        "explain" => [
            'name' => '说明',
            'list' => [
                '登录态'      => ['11'],
                'formId收集' => ['222', '2222'],
            ]
        ],
        "code"    => [
            'name' => '返回码',
            'list' => [
                '0'     => '成功',
                '1'     => '失败'
            ]
        ]
    ],
     // 全局请求header,一般存放token之类的
    'header'        => [

    ],
    // 全局请求参数
    'params'        => [
        '__uid' => 2
    ],
    // 需要生成文档的类
    'controller'    => [
        [
            'name' => 'index',
            'list' => [
                'index\controller\Base',
                'index\controller\Index'
            ]
        ],
        [
            'name' => 'v3',
            'list' => [

            ]
        ]

    ],
    // 过滤、不解析的方法名称
    'filter_method' => [
        '_empty'
    ]
];