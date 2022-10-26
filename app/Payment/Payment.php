<?php

namespace App\Payment;

class Payment implements PaymentInterface
{
    public int $amount;

    public function setAmount(int $amount): static
    {
        $this->amount = $amount;
        return $this;
    }

    public function pay(): string
    {
        return 'payment successfull tk:' . $this->amount;
    }


}
