<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\PaymentGatewayInterface;

class PaymentController extends Controller
{
    protected PaymentGatewayInterface $paymentGateway;

    public function __construct(PaymentGatewayInterface $paymentGateway)
    {
        $this->paymentGateway = $paymentGateway;
    }

    public function pay()
    {
        return $this->paymentGateway->pay(1000);
    }
}
