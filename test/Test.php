<?php
/**
 * DateTime: 2020-02-14 10:17
 * Class Test
 * @version 1.0.0
 * @author cql 925648047@qq.com
 */

spl_autoload_register(function($className){
    if (is_file( 'D:\phpstudy_pro\WWW\Test\/'.$className . '.php')) {
        require 'D:\phpstudy_pro\WWW\Test\/'.$className . '.php';
    }
});

// 创建一个容器（后面称作超级工厂）
use service\ioc\Container;
use service\module\Superman;
use service\module\XPower;
use service\module\UltraBomb;

$container = new Container;


// 向该 超级工厂 添加生产脚本  $moduleName 模组 $data参数
$container->bind('superman', function($container, $moduleName,$data) {
    return new Superman($container->make($moduleName),$data);
});


// 向该 超级工厂 添加模组 的生产脚本
$container->bind('xpower', function($container) {
    return new XPower($container);
});

// 同上
$container->bind('ultrabomb', function($container) {
    return new UltraBomb($container);
});

// ******************  华丽丽的分割线  **********************
// 开始启动生产
$superman_1 = $container->make('superman', ['xpower',['demo'=>'32']]);