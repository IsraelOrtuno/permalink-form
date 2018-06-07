<?php

namespace Devio\Permalink\Form;

use Illuminate\Support\ServiceProvider;

class PermalinkFormServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'permalink');

        if ($this->app->runningInConsole()) {
            $this->commands(ResourcesCommand::class);
        }
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
    }
}