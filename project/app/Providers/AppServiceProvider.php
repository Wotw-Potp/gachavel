<?php

namespace App\Providers;

use App\Services\{AppBaseService, IAppBaseService, IStripeService, StripeService};
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        /** Service */
        /* Base */
        $this->app->bind(IAppBaseService::class, AppBaseService::class);
        /* Stripe */
        $this->app->bind(IStripeService::class, StripeService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
