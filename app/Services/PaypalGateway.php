<?php

namespace App\Services;

use App\Contracts\PaymentGatewayInterface;

class PaypalGateway implements PaymentGatewayInterface
{
    public function charge ($amount)
    {
        return "Charged $$amount using Paypal.";
    }
}
