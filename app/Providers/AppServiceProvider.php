<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\ContractIdentifierService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(ContractIdentifierService::class, function ($app) {
            return new ContractIdentifierService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
