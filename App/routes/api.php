<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\DeliveryMethodsController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentTypeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserAddressController;
use App\Http\Controllers\UserPaymentCardsController;
use Illuminate\Support\Facades\Route ;

Route::get('/api', function () {
    return response()->json(['message' => 'Welcome to the API']);
});

Route::post( 'login', [AuthController::class, 'login']);
Route::post( 'logout', [AuthController::class, 'logout']);
Route::post( 'register', [AuthController::class, 'register']);


Route::middleware('auth:sanctum')->group(function () {
    Route::get( 'user', [AuthController::class, 'user']);
    Route::apiResources([
        'categories'=> CategoryController::class,
        'products' => ProductController::class,
        'categories.products' => CategoryProductController::class,
        'favorites' => FavoriteController::class,
        'orders' => OrderController::class,
        'delivery-methods' => DeliveryMethodsController::class,
        'payment-types' => PaymentTypeController::class,
        'user-addresses' => UserAddressController::class,
        'user-payment-cards' => UserPaymentCardsController::class,
    ]);
});
