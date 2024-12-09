<?php

namespace App\Interface;

interface Payment
{
    public function pay(string|float $amount): float|int;

    public function verify(string $reference): bool;
}
