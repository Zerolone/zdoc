# TP5接口文档管理

ThinkPHP5 API自动生成 layui美化 基于okcoder_doc
去除头尾， 增强menu效果， 2020-2-12 22:29:09

## 使用方法
#### 安装扩展
```
composer require zerolone/zdoc dev-master
```

#### 配置参数
- 5.1版本

    安装好扩展后在 application\config\ 文件夹下会生成 zdoc.php 配置文件
```
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
    // 需要生成文档的类(单版本)
    'controller'    => [
        'index/controller/Demo',
        'index/controller/Demo2',
    ],
    // 过滤、不解析的方法名称
    'filter_method' => [
        '_empty'
    ]
];
```


#### 单版本配置
新建控制器app/index/controller/Demo.php
```
<?php
namespace app\index\controller;

use think\Controller;
/**
 * @title   模块名称
 * @desc    我是模块名称
 * Class Index
 * @package app\index\controller
 */
class Demo extends Controller{
    /**
     * @title 方法1
     * @desc  类的方法1
     * @url   url('index/demo/index',true,'',true)
     *
     * @param int $page  0 999
     * @param int $limit 10
     *
     * @return int $id 0 索引
     * @return int $id 0 索引
     * @return int $id 0 索引
     */
     public function index(){}
}
```
修改zdoc.php 配置文件

```
'controller' => [
    'index/controller/Demo',
    'index/controller/Demo2',
]
```

 多版本配置
新建控制器app/index/controller/v2/Demo.php
```
<?php
namespace app\index\controller\v2;

use think\Controller;
/**
 * @title   模块名称
 * @desc    我是模块名称
 * Class Index
 * @package app\index\controller\v2
 */
class Demo extends Controller{
    /**
     * @title 方法1
     * @desc  类的方法1
     * @url   url('index/v2.demo/index',true,'',true)
     *
     * @param int $page  0 999
     * @param int $limit 10
     *
     * @return int $id 0 索引
     * @return int $id 0 索引
     * @return int $id 0 索引
     */
     public function index(){}
}
```
修改zdoc.php 配置文件

```
    'controller' => [
        [
            'name'=>'v2版本',
            'list'=>[
                'index\controller\v2\Demo', //控制器的命名空间+控制器名称(不需要加\\app)
                'index\controller\v2\Demo', //支持两层控制器URL自动生成
                'index\controller\v2\Demo'
            ]
        ],
        [
            'name'=>'v3版本',
            'list'=>[
                'index\controller\v3\Demo', //控制器的命名空间+控制器名称(不需要加\\app)
                'index\controller\v3\Demo', //支持两层控制器URL自动生成
                'index\controller\v3\Demo'
            ]
        ]
    ]
```
####3、书写规范

- 请参考Demo.php文件


####4、访问方法
- http://你的域名/doc 或者 http://你的域名/index.php/doc 
