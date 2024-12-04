<?php

use App\Container;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $ref = new ReflectionClass(\App\Mailchimp::class);

    dd($ref->getConstructor()->getParameters()[0]->getType()->getName());

    $container = new Container();
//    $container->singleton('my_class', fn() => new \App\Newsletter(uniqid()));

    var_dump($container->resolve(\App\Newsletter::class));
//    var_dump($container->resolve('my_class'));
//    var_dump($container->resolve('my_class'));
});
