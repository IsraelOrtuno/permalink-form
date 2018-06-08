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

        \View::composer('permalink::permalink', PermalinkFormComposer::class);

        if ($this->app->runningInConsole()) {
            $this->commands(ResourcesCommand::class);

            $this->publishesContent();
        }
    }

    /**
     * Registering resources to publish.
     */
    protected function publishesContent()
    {
        $this->publishes($scripts = [
            __DIR__ . '/../resources/stubs/' => resource_path('assets/js')
        ], 'permalink-scripts');

        $this->publishes($views = [
            __DIR__ . '/../resources/views' => resource_path('views/vendor/permalink')
        ], 'permalink-views');

        $this->publishes($views + $scripts, 'permalink-all');
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
    }
}