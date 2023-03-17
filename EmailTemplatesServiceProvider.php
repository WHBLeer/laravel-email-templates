<?php

namespace Sanlilin;

use Illuminate\Support\ServiceProvider;

class EmailTemplatesServiceProvider extends ServiceProvider
{
    /**
     * Boot the application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {

            $this->publishes([
                __DIR__.'/config/email-template.php' => $this->app->configPath('email-template.php'),
            ], 'email-templates-config');

            $this->publishes([
                __DIR__.'/resources/views' => $this->app->resourcePath('views'),
            ], 'email-templates-views');

            $this->publishes([
                __DIR__.'/resources/lang/en' => $this->app->resourcePath('lang/en'),
            ], 'email-templates-lang');

            $this->publishes([
                __DIR__.'/public/assets/img' => $this->app->basePath('public/assets/img'),
            ], 'email-templates-img');

            $this->publishes([
                __DIR__.'/app/Mail' => $this->app->basePath('app/Mail'),
            ], 'email-templates-app');
        }
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // 
    }
}
