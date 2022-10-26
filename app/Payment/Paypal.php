<?php

namespace App\Payment;

class Paypal extends Payment implements PaypalInterface
{

    public function charge(): string
    {
        return 'charged 100 tk by Paypal';
    }
}
