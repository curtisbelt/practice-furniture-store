<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('products', 'Api\ProductController');
Route::apiResource('fabrics', 'Api\FabricController');
Route::apiResource('products/{product}/fabrics', 'Api\FabricController');
Route::apiResource('legs', 'Api\LegController');
Route::apiResource('products/{product}/legs', 'Api\LegController');
