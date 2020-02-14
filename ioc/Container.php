<?php
/**
 * DateTime: 2020-02-14 10:19
 * Class Container
 * @version 1.0.0
 * @author cql 925648047@qq.com
 */
namespace service\ioc;

use Closure;

class Container
{
    protected $binds;

    protected $instances;

    public function bind($abstract, $concrete)
    {
        if ($concrete instanceof Closure) {
            $this->binds[$abstract] = $concrete;
        } else {
            $this->instances[$abstract] = $concrete;
        }
    }

    public function make($abstract, $parameters = [])
    {
        if (isset($this->instances[$abstract])) {
            return $this->instances[$abstract];
        }

        array_unshift($parameters, $this);


        return call_user_func_array($this->binds[$abstract], $parameters);
    }
}