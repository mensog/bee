<?php

namespace App\Providers;

use App\Models\Cart;
use App\Models\FavoriteList;
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

        $this->app->singleton('FavoriteList', function () {
            return FavoriteList::current();
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

            $favorites = $this->app->make('FavoriteList');
            view()->share('headerFavoritesCount', $favorites->countTotalQuantity());
        });
    }
}
