<?php

namespace App\Payment;

class Stripe extends Payment implements StripeInterface
{
    public function __construct($amount)
    {
        parent::__construct($amount);
    }

    public function doCharge(): string
    {
        return '200 tk charged by Stripe';
    }
}
