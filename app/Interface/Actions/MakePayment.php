<?php

namespace App\Interface\Actions;

use App\Interface\Payment;

class MakePayment
{
    public function __construct(public Payment $payment) {}

    public function pay($amount): float|int
    {
        return $this->payment->pay($amount);
    }
}
