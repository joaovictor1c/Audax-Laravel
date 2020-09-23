<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use Illuminate\Http\Request;

    Route::post('login',[UserController::class, 'login']);
    Route::post('register', [UserController::class, 'register']);
    Route::get('products', [ProductController::class, 'index']);
    Route::get('/products/{product}', [ProductController::class,'show']);

    Route::group(['middleware' => 'auth:api', 'cors'], function(){
        Route::get('/users',[UserController::class, 'index']);
        Route::get('users/{user}',[UserController::class,'show']);
        // Route::get('users/{user}/orders',[UserController::class,'listOrders']);
        Route::resource('/orders', OrderController::class)->except(['destroy','update']);
        Route::resource('/products', ProductController::class)->except(['index','show']);
    });
