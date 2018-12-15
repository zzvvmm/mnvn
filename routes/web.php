<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PageController@getIndex')->name('trang-chu');

Route::get('addToCart/{id}', 'PageController@getAddToCart')->name('them-gio-hang');

Route::post('addToCart/{id}', 'PageController@postAddToCart')->name('them-gio-hang');

Route::get('deleteCart/{id}', 'PageController@getDeleteItemCart')->name('xoa-gio-hang');

Route::get('deleteOneCart/{id}', 'PageController@getDeleteOneItemCart')->name('xoa-mot-san-pham');

Route::get('danh-muc/{slug}', 'PageController@getCategory')->name('danh-muc');

Route::get('loai-san-pham/{slug}', 'PageController@getProductType')->name('loai-san-pham');

Route::get('chi-tiet-san-pham/{slug}', 'PageController@getProductDetails')->name('chi-tiet-san-pham');

Route::get('dat-hang', 'PageController@getCheckout')->name('dat-hang');

Route::get('dat-hang-step2', function() {
    return view('page.dat_hang_buoc_2');
})->name('step2');

Route::post('dat-hang', 'PageController@postCheckout')->name('dat-hang');

Route::get('tim-kiem', 'PageController@getSearch')->name('tim-kiem');

Route::get('gioi-thieu', 'PageController@getAbout')->name('gioi-thieu');

Route::get('huong-dan-mua-hang', 'PageController@getManual')->name('huong-dan');

Route::get('chinh-sach-va-quy-dinh-chung', 'PageController@getBasicRole')->name('chinh-sach-chung');

Route::get('chinh-sach-bao-mat', 'PageController@getSecurity')->name('chinh-sach-bao-mat');
	
Route::get('chinh-sach-doi-tra-hang', 'PageController@getExchange')->name('chinh-sach-doi-tra-hang');

Route::get('chinh-sach-bao-hanh', 'PageController@getGuarantee')->name('chinh-sach-bao-hanh');

Route::get('thong-tin-thanh-toan', 'PageController@getInformationPayment')->name('thong-tin-thanh-toan');

Route::get('van-chuyen-va-giao-nhan', 'PageController@getShip')->name('van-chuyen-va-giao-nhan');

Route::get('manager/login', 'Manager\LoginController@getLogin')->name('manager.getLogin');

Route::post('manager/login', 'Manager\LoginController@postLogin')->name('manager.postLogin');

Route::group(['prefix' => 'manager', 'namespace' => 'Manager', 'middleware' => 'manager']

    , function () {

        Route::get('/home', 'PageController@index')->name('backend.home');

        Route::post('logout', 'LoginController@getLogout')->name('manager.getLogout');

        Route::resource('products', 'ProductController');

        Route::resource('bills', 'BillController');

        Route::resource('images', 'ImageController');

        Route::group(['prefix' => 'ajax'], function()
        {
            Route::post('product_type/{idcategory}', 'AjaxController@getProductType')->name('getajax');
        });
});
