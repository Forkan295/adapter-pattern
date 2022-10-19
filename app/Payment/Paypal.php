<?php

namespace App\Payment;

class Paypal extends Payment implements PaypalInterface
{
    public function __construct($amount)
    {
        parent::__construct($amount);
    }

    public function charge(): string
    {
        return 'charged 100 tk by Paypal';
    }
}
