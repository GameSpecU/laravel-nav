<?php

namespace Gamespecu\LaravelNav;

use Gamespecu\LaravelNav\View\Components\Bootstrap\Menu;
use Illuminate\Routing\Route;
use Illuminate\Support\ServiceProvider;

class NavServiceProviders extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(Nav::class);
        $this->registerRouteMacro();
    }

    public function boot(): void
    {
        
    }

    protected function registerRouteMacro(): void
    {
        if (!Route::hasMacro('nav')) {
            Route::macro('nav', function (string $title, string $icon = null) {
                \Gamespecu\LaravelNav\Facades\Nav::add($title, $this->action['as'], $icon);
            });
        }
    }


}
