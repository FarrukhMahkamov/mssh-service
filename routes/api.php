<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SizeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController; 
use App\Http\Controllers\RegionController;


use App\Http\Controllers\StateController;

Route::prefix('v1')->group(function() {

    // Default Routes
    
    Route::apiResource('products', ProductController::class);

    Route::apiResource('sizes', SizeController::class);
    
    Route::apiResource('deliveries', DeliveryController::class);

    Route::apiResource('brands',BrandController::class);

    Route::apiResource('categories',CategoryController::class);

    Route::apiResource('regions', RegionController::class);

    Route::apiResource('states',StateController::class);

    // Routes for Login and CreatUser

    Route::post('/adduser', [AuthController::class, 'addUser']);

    Route::post('/loginUser', [AuthController::class, 'loginUser']);

});


