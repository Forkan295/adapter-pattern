<?php

namespace App\Service\CallStatic;

use ReflectionClass;
use Symfony\Component\Routing\Exception\MethodNotAllowedException;

class CallStatic
{
    public static function __callStatic($name, $arrg)
    {
        $cs     = new CallStaticFacade();
        $class  = new ReflectionClass($cs);
        $method = $class->getMethods();
        $dd     = static::checkMethodExist($name, $method);
        if ($dd) {
            $cs->$name();
        } else {
            throw new \ErrorException('Method no found');
        }
    }

    private static function checkMethodExist($name, $method): bool
    {
        foreach ($method as $m) {
            if ($m->name == $name) {
                return true;
            }
        }
        return false;
    }

}
