<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\ShopProductController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::get('detail/{id}', [ProductDetailController::class, 'index'])->name('detail.index');
Route::get('shop-products', [ShopProductController::class, 'index'])->name('shop.index');
Route::get('product-results', [ShopProductController::class, 'search'])->name('product.search');


Route::resource('checkout', CheckoutController::class);
Route::middleware(['web', 'auth'])->group(function () {

    Route::resource('product', ProductController::class);
    Route::get('order/{id}', [OrderController::class, 'summary'])->name('order.summary');

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
Auth::routes(['register' => true]);
Auth::routes(['login' => false]);
