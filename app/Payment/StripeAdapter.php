<?php

namespace App\Payment;

class StripeAdapter  implements PaypalInterface
{
    public function __construct(private Stripe $stripe)
    {
    }

    public function pay(): string
    {
        return $this->stripe->pay();
    }

    public function charge(): string
    {
        return $this->stripe->doCharge();
    }
}
