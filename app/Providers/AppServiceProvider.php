<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\ProductType;
use App\Cart;
use Session;
use Illuminate\Support\Facades\Schema;
use App\Product;
use App\Category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        
        view()->composer('header',function($view) {
            $loai_sanpham = ProductType::all();

            $view->with('loai_sp', $loai_sanpham);
        });

        view()->composer(['header', 'page.dat_hang_buoc_1'], function($view) {
            if (Session('cart')) {
                $oldCart = Session::get('cart');
                $cart = new Cart($oldCart);
                $view->with(['cart'=>Session::get('cart'), 'product_cart'=>$cart->items, 'totalPrice'=>$cart->totalPrice, 'totalQty'=>$cart->totalQty]);

            }
        });

        view()->composer('footer',function($view) {
            $category = Category::all();

            $view->with('category', $category);
        });

        view()->composer('footer',function($view) {
            $type = ProductType::all();

            $view->with('type', $type);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
