<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\SizeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// middleware('auth:sanctum')
Route::prefix('v1')->group(function(){
    
    // This is global route for products
    Route::apiResource('products', ProductController::class);
    Route::apiResource('size', SizeController::class);


});


