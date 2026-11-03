<?php

use Illuminate\Support\Facades\Route;
use App\Contracts\PaymentGatewayInterface;
use App\Http\Controllers\PaymentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return 'Test';
});

Route::get('/payment', [PaymentController::class, 'pay']);

Route::get('/stripe', function () {

    $payment = app(\App\Services\StripeGateway::class);

    return $payment->pay(1000);

});
