<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Iyzipay\Options;

class IyzicoServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('iyzico', function ($app) {
            $options = new Options();
            $options->setApiKey(config('iyzico.api_key'));
            $options->setSecretKey(config('iyzico.secret_key'));
            $options->setBaseUrl(config('iyzico.base_url'));
            return $options;
        });
    }

    public function boot()
    {
        //
    }
}
