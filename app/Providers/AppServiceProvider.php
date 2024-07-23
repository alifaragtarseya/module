<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //set pagination bootstrap
        Paginator::useBootstrap();

        if (Schema::hasTable('services') && Schema::hasTable('categories')) {
            // $serviceCats = \App\Models\ServiceCategory::get();
            // view()->share('serviceCats', $serviceCats);

            $categories = \App\Models\Category::get();
            view()->share('globalCategories', $categories);
        }

        app()->setLocale(config('app.locale'));
    }
}
