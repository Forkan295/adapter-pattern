<?php

namespace App\Service\Decouple;

class BaseClass implements IBaseClass
{
    public function getName(): string
    {
        return __CLASS__;
    }
}
