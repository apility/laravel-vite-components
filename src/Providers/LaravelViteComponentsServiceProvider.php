<?php

namespace Apility\LaravelViteComponents\Providers;

use Apility\LaravelViteComponents\View\Components\ViteHead;
use Apility\LaravelViteComponents\View\Components\ViteBody;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;

class LaravelViteComponentsServiceProvider extends ServiceProvider {
    public function register () {
        View::addNamespace('alvc', __dir__ . '/../resources/views');

        Blade::component(ViteHead::class);
        Blade::component(ViteBody::class);
    }
}
