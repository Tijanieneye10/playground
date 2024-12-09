<?php

namespace App\Interface\Actions;

use App\Interface\Payment;

class FlutterwavePayment implements Payment
{

    public function pay(float|string $amount): float|int
    {
        return $amount * 3;
    }

    public function verify(string $reference): bool
    {
        return true;
    }
}
