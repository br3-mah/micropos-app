<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\ShopProductController;
use App\Http\Controllers\UserController;
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
Route::post('single-purchase', [CheckoutController::class, 'singlePurchase'])->name('store.buy');


Route::middleware(['web', 'auth'])->group(function () {
    // My Dashboard
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::post('/activate-seller', [UserController::class, 'activateSeller'])->name('activate-seller');
    
    // My Products
    Route::resource('product', ProductController::class);
    Route::post('store-feature-product', [ProductController::class, 'storeFeature'])->name('store.feature');

    // My Sales
    Route::resource('sales', SalesController::class);
    Route::resource('purchases', PurchaseController::class);

    // My Orders
    Route::resource('orders', OrderController::class);
    Route::get('order/{id}', [OrderController::class, 'summary'])->name('order.summary');
    Route::get('customer-orders', [OrderController::class, 'customers'])->name('orders.customer.index');

    // My Deliveries
    Route::resource('deliveries', DeliveryController::class);
    Route::get('customer-deliveries', [DeliveryController::class, 'customerDeliveries'])->name('deliveries.customer.index');
    
    
});


// Authentication
Auth::routes(['register' => true]);
Auth::routes(['login' => false]);


