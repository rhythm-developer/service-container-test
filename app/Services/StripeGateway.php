<?php

namespace App\Services;

use App\Contracts\PaymentGatewayInterface;

class StripeGateway implements PaymentGatewayInterface
{
    public function pay($amount)
    {
        return "Charged $$amount using Stripe.";
    }
}
