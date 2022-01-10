<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SizeController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function(){
    
    Route::apiResource('products', ProductController::class);

    Route::apiResource('size', SizeController::class);
    
    Route::apiResource('delivery', DeliveryController::class);
    
    Route::apiResource('brand',BrandController::class);

});


