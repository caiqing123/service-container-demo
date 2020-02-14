<?php
/**
 * DateTime: 2020-02-14 10:13
 * Class SuperModuleInterface
 * @version 1.0.0
 * @author cql 925648047@qq.com
 */
namespace service\module;

use service\standard\SuperModuleInterface;

class XPower implements SuperModuleInterface
{
    public function activate(array $target)
    {
        var_dump($target);
    }
}