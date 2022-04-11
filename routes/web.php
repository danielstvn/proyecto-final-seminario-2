<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {

    Route::controller(App\Http\Controllers\HomeController::class)->group(function(){
		
        Route::get('/home/ventanas','getVentanas')->middleware('can:client.home')->name('client.home');

        Route::post('/home/addcarrito','addCarrito')->middleware('can:client.home')->name('client.home');

        Route::get('/home/carrito','getCarrito')->middleware('can:client.home')->name('client.home');

        Route::get('/home/carrito/compra','setCompra')->middleware('can:client.home')->name('client.home');

        Route::get('/home/puertas','getPuertas')->middleware('can:client.home')->name('client.home');

        Route::get('/home/vidrios','getVidrios')->middleware('can:client.home')->name('client.home');

        Route::get('/home/cliente/compras','getCompra')->middleware('can:client.home')->name('client.home');

        Route::delete('/home/carrito/delete','deleteProductCarrito')->middleware('can:client.home')->name('client.home');

        Route::get('/home/create/desing','createDesing')->middleware('can:client.home')->name('client.home');

        Route::get('/home/show/desings','showDesings')->middleware('can:client.home')->name('client.home');

          
    
    });

    
});









