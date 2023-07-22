<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        Paginator::useBootstrapFive();

        date_default_timezone_set('Asia/Tashkent');

        View()->composer('components.layouts.frontend.navbar', function($view) {
            $view->with('categories', Category::all());
        });
    }
}
