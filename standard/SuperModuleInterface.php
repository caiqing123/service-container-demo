<?php
/**
 * DateTime: 2020-02-14 10:11
 * Class SuperModuleInterface
 * @version 1.0.0
 * @author cql 925648047@qq.com
 */
namespace service\standard;

interface SuperModuleInterface
{
    /**
     * 超能力激活方法
     *
     * 任何一个超能力都得有该方法，并拥有一个参数
     *@param array $target 针对目标，可以是一个或多个，自己或他人
     */
    public function activate(array $target);
}