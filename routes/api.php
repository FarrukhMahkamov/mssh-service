<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SizeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegionController;

Route::prefix('v1')->group(function() {
    
    Route::apiResource('products', ProductController::class);

    Route::apiResource('sizes', SizeController::class);
    
    Route::apiResource('deliveries', DeliveryController::class);

    Route::apiResource('brands',BrandController::class);

    Route::apiResource('categories',CategoryController::class);

    Route::apiResource('regions', RegionController::class);

});


