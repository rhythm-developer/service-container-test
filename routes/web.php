<?php

use Illuminate\Support\Facades\Route;
use App\Contracts\PaymentGatewayInterface;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return 'Test';
});

Route::get('/payment', function (PaymentGatewayInterface $payment) {
    return $payment->charge(1000);
});
