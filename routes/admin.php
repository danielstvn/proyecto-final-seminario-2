<?php

use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'auth'], function () {

	//controlador para usuarios

	Route::controller(App\Http\Controllers\UserController::class)->group(function(){
		
		Route::get('/users','index')->middleware('can:admin.users')->name('admin.users');


		Route::put('/users','userEdit')->middleware('can:admin.users')->name('admin.users');

		Route::delete('/users','userDelete')->middleware('can:admin.users')->name('admin.users');

		Route::get('/users/create','userCreate')->middleware('can:admin.users')->name('admin.users');

	});
	
	
	//controlador para perfiles de usuario
	Route::controller(\App\Http\Controllers\ProfileController::class)->group(function(){
		
		Route::get('/profile', 'edit')->name('admin.profile');
	
		Route::put('/profile/update', 'update')->name('admin.profile');

		Route::put('/profile/password', 'password')->name('admin.profile');
	});

	//controlador para productos

	Route::controller(App\Http\Controllers\ProductController::class)->group(function(){
		
		Route::get('/products','index')->middleware('can:admin.users')->name('admin.users');

		Route::put('/products', 'productEdit')->middleware('can:admin.products')->name('admin.products');

		Route::get('/products/create','productCreate')->middleware('can:admin.products')->name('admin.products');

		Route::delete('/products', 'productDelete')->middleware('can:admin.products')->name('admin.products');

		Route::get('/product/pedidos', 'productPedidos')->middleware('can:admin.products')->name('admin.products');


	});
	
});






