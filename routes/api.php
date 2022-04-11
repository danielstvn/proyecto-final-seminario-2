<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(\App\Http\Controllers\ApiProductController::class)->group(function(){

    Route::get('/v1/product','index')->middleware('auth.basic.once');

    Route::post('/v1/product','store')->middleware('auth.basic.once');
    //
    Route::put('/v1/product/{id}','update')->middleware('auth.basic.once');

    Route::delete('/v1/product/{id}','destroy')->middleware('auth.basic.once');
});