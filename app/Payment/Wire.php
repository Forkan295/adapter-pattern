<?php

namespace App\Payment;

class Wire extends Payment
{

    public function fee(): string
    {
        return '300 tk charged by wire';
    }
}
