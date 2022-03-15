<?php

namespace Gamespecu\LaravelNav\Facades;

use Illuminate\Support\Facades\Facade;

class Nav extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Gamespecu\LaravelNav\Nav::class;
    }
}
