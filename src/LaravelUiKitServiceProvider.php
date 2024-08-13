<?php

namespace LaravelUiKit;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Str;

class LaravelUiKitServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/ui-kit.php', 'ui-kit');
    }

    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'laravel-ui-kit');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-ui-kit');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/ui-kit.php' => config_path('ui-kit.php'),
            ], 'config');

            // Publishing the views.
            $this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/ui-kit'),
            ], 'views');
        }

        $this->bootResources();
        $this->bootBladeComponents();
        $this->bootStrMacros();
    }

    protected function bootBladeComponents()
    {
        $components = config('ui-kit.components', []);

        foreach ($components as $alias => $options) {
            $view = is_array($options) ? $options['view'] : $options;

            Blade::component('ui-kit::' . $view, $alias);
        }
    }

    protected function bootResources()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'ui-kit');
    }

    protected function bootStrMacros()
    {
        Str::macro('prefixClasses', function (string $prefix, string $classes) {
            // clear double+ spaces
            $classes = preg_replace('/\s+/', ' ', $classes);
            // convert to array
            $classes = explode(' ', $classes);
            // add prefix to each class
            $classes = array_map(function ($class) use ($prefix) {
                return $prefix . $class;
            }, $classes);
            // convert to string
            return implode(' ', $classes);
        });

        Str::macro('mergeClasses', function (...$classes) {
            // if any of the classes are an array flatten it with space in between
            $classes = array_map(function ($classes) {
                return is_array($classes) ? implode(' ', $classes) : $classes;
            }, $classes);
            // clear double+ spaces
            $classes = array_map(function ($classes) {
                // if any of the classes are an array flatten it with space in between
                return preg_replace('/\s+/', ' ', $classes);
            }, $classes);
            // convert to array
            $classes = array_map(function ($classes) {
                return explode(' ', $classes);
            }, $classes);
            // flatten array
            $classes = array_merge(...$classes);
            // remove duplicates
            $classes = array_unique($classes);
            // convert to string
            $classes = implode(' ', $classes);
            // remove double+spaces
            $classes = preg_replace('/\s+/', ' ', $classes);

            return $classes;
        });
    }
}
