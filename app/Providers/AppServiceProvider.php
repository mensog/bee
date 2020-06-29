<?php

namespace App\Providers;

use App\Cart;
use App\Observers\CartObserver;
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
        $this->app->singleton('Cart', function () {
            return Cart::current();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function ($view) {
            $cart = $this->app->make('Cart');
            view()->share('headerCartCount', $cart->countTotalQuantity());
        });
    }
}
