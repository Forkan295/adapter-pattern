<?php

namespace App\Service\Decouple;

class Child1
{

    public function printClass(IBaseClass $iBaseClass)
    {
        return $iBaseClass->getName();
    }
}
