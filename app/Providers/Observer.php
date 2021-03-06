<?php

namespace App\Providers;

use App\Models\Banking\Transaction;
use App\Models\Setting\Category;
use Illuminate\Support\ServiceProvider as Provider;

class Observer extends Provider
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
        Transaction::observe('App\Observers\Transaction');
        Category::observe('App\Observers\Category');
    }
}
