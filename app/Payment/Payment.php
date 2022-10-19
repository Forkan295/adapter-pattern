<?php

namespace App\Payment;

class Payment implements PaymentInterface
{
    public int $amount;
    /**
     * @param int $amount
     */
    public function setAmount(int $amount): void
    {
        $this->amount = $amount;
    }

    public function pay(): string
    {
        return 'payment successfull tk:' . $this->amount;
    }


}
