<?php

namespace App\Services;

use App\Contracts\PaymentGatewayInterface;

class StripeGateway implements PaymentGatewayInterface
{
    public function charge ($amount)
    {
        return "Charged $$amount using Stripe.";
    }
}
