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

Route::get('/', function () {
    return Redirect::to('/login');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

//Route::resource('/dashboard/palestrante/', 'PalestranteController');

Route::prefix('dashboard')->group(function () {
    Route::resource('/', 'HomeController');
    Route::resource('palestrante/', 'PalestranteController');
    Route::resource('categoria/', 'CategoriaController');
});
