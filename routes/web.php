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

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Web\CartController;
use App\Http\Controllers\Web\WebController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('route:clear');
    Artisan::call('view:clear');

    return "Cache cleared successfully!";
});

Route::get('/home', function () {
    return view('user-account');
})->middleware(['auth', 'verified']);

// WebController
Route::controller(WebController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/shop', 'shopAllNewDrops')->name('shop');
    Route::get("/cart", 'cart')->name('product.cart');
    Route::get("/checkout", 'productCheckout')->name('product.checkout');
    Route::get("/product-details/{slug}", 'productDetails')->name('product.details');
    Route::get("/collections/{slug}", 'showCollections')->name('collections');
    Route::get("/brandCollection/{slug}", 'showBrandCollections')->name('brandCollection');
    Route::post('/order/store', 'orderStore')->name('order.store');
});


// static page route
Route::view('/terms', 'web-views.terms')->name('terms');
Route::view('/shipping', 'web-views.shipping')->name('shipping');
Route::view('/privacy', 'web-views.privacy')->name('privacy');
Route::view('/faqs', 'web-views.faqs')->name('faqs');

// cart add_to_cart, Remove_to_cart, update_to_cart
Route::controller(CartController::class)->prefix('/cart')->as('cart.')->group(function () {
    Route::post('variant_price', 'variant_price')->name('variant_price');
    Route::get('/cart-items', 'getCartItems')->name('items');
    Route::post('/add-product', 'addToCart')->name('add');
    Route::post('/remove', 'removeCartItem')->name('remove');
    Route::post('/nav-cart-items', 'updateCart')->name('update');
    Route::post('/updateQuantity',  'updateQuantity')->name('updateQuantity');
    Route::get("/cart-offcanva", function() {
        return view("layouts.front-end.partials.cart.cart_items")->render();
    });
    Route::get("/cart-details", function() {
        return view("layouts.front-end.partials.cart.cart_details")->render();
    });

    Route::post('/increment', 'cartIncrement')->name('increment');
    Route::post('/decrement', 'cartDecrement')->name('decrement');

});

