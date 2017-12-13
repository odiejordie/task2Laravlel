<?php

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

Route::get('/', function(){
	return view("isimenu.home");
});
Route::get('profile', function(){
	return view("isimenu.profile");
});
Route::get('delete/{id}', 'Latihan@destroy');
Route::resource('pesan', 'Latihan', ['except' => ['destroy']]);
