<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SizeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
<<<<<<< HEAD
use App\Http\Controllers\RegionController;

=======
use App\Http\Controllers\StateController;
>>>>>>> a0e010071e720b867db3a3e4a22a80960bfd2a85
Route::prefix('v1')->group(function() {
    
    Route::apiResource('products', ProductController::class);

    Route::apiResource('sizes', SizeController::class);
    
    Route::apiResource('deliveries', DeliveryController::class);

    Route::apiResource('brands',BrandController::class);

    Route::apiResource('categories',CategoryController::class);

<<<<<<< HEAD
    Route::apiResource('regions', RegionController::class);
=======
    Route::apiResource('states',StateController::class);
>>>>>>> a0e010071e720b867db3a3e4a22a80960bfd2a85

});


