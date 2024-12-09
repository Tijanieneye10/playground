<?php

use App\Container;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $container = new Container();
    $container->singleton('my_class', fn() => new \App\Newsletter(uniqid()));

    var_dump($container->resolve('my_class'));
    var_dump($container->resolve('my_class'));
    var_dump($container->resolve('my_class'));
});

Route::get('data', \App\Http\Controllers\UserFilterController::class);

Route::get('payment', function(){

    $paymentType =  new \App\Interface\Actions\PaystackPayment();
    $makePayment = new \App\Interface\Actions\MakePayment($paymentType);

    echo $makePayment->pay(100);
});
