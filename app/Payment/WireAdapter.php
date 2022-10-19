<?php

namespace App\Payment;

class WireAdapter implements PaypalInterface
{
    public function __construct(private Wire $wire)
    {
    }

    public function setAmount(int $amount)
    {
        $this->wire->setAmount($amount);
    }

    public function pay(): string
    {
        return $this->wire->pay();
    }

    public function charge(): string
    {
        return $this->wire->fee();
    }
}
