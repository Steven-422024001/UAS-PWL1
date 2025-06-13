<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Passport\Passport;
use Carbon\CarbonInterval;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Passport::tokensExpireIn(CarbonInterval::Days(15));
        Passport::refreshTokensExpireIn(CarbonInterval::Days(30));
        Passport::personalAccessTokensExpireIn(CarbonInterval::months(6));
    }
}
