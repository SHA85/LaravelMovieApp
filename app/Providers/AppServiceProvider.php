<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Custom email validation rule with domain validation
        Validator::extend('valid_email', function ($attribute, $value, $parameters, $validator) {
            list($username, $domain) = explode('@', $value);

            return checkdnsrr($domain, 'MX') || checkdnsrr($domain, 'A');
        });
    }
}
