<?php

namespace App\Interface\Actions;

use App\Interface\Payment;

class PaystackPayment implements Payment
{

    public function pay(float|string $amount): float|int
    {
        return $amount * 2;
    }

    public function verify(string $reference): bool
    {
        return true;
    }
}
