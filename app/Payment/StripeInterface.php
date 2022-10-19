<?php

namespace App\Payment;

interface StripeInterface
{
    public function doCharge();
}
