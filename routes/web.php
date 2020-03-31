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

use App\Http\Controllers\CategoriaController;

Route::get('/', function () {
    return Redirect::to('/login');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

//Route::resource('/dashboard/palestrante/', 'PalestranteController');

Route::prefix('dashboard')->group(function () {
    Route::resource('/', 'HomeController');
    Route::resource('palestrante/', 'PalestranteController');
<<<<<<< HEAD
    Route::post('fragmentopalestrante/', 'FragmentosPalestranteController@salvarNome');
});
=======
    Route::resource('categoria/', 'CategoriaController');
    Route::post('categoria/', 'CategoriaController@store');


});


>>>>>>> 9ac69976d21448123c995119d962d1c3e8a1ddff
