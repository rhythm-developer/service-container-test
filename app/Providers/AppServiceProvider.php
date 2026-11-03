<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contracts\PaymentGatewayInterface;
use App\Services\StripeGateway;
use App\Services\PaypalGateway;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            PaymentGatewayInterface::class,
            function ($app) {

                return match (request()->query('gateway')) {
                    'stripe' => $app->make(StripeGateway::class),
                    'paypal' => $app->make(PaypalGateway::class),

                    default => throw new InvalidArgumentException(
                        'Invalid payment gateway.'
                    ),
                };
            }
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
