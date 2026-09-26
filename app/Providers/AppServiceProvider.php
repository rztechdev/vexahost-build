<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Vite;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Cegah Chrome warning: "was preloaded using link preload but not used" akibat Cloudflare Early Hints / Rocket Loader
        Vite::usePreloadTagAttributes(fn () => false);

        if (app()->environment('production') || str_starts_with(config('app.url') ?? '', 'https://')) {
            URL::forceScheme('https');
        }
    }
}
