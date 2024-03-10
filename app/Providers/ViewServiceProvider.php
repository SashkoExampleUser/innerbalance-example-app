<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        View::addNamespace(
            'layouts',
            base_path('resources/views/layouts')
        );

        View::addNamespace(
            'pages',
            base_path('resources/views/pages')
        );
    }

    public function boot(): void
    {
        //
    }
}
