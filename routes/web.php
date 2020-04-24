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
    Route::resource('contato/', 'ContatoController');
    Route::post('fragmentopalestrante/', 'FragmentosPalestranteController@salvarNome');
    Route::resource('categoria/', 'CategoriaController');
    Route::post('categoria/', 'CategoriaController@store');
    Route::delete('categoria/{id}', 'CategoriaController@destroy');
    Route::post('categoria/update/{id}', 'CategoriaController@update');
    Route::resource('banco/', 'BancoController');
    Route::post('banco/delete/{id}', 'BancoController@destroy');
    Route::post('contato/delete/{id}', 'ContatoController@destroy');
    Route::post('endereco/delete/{id}', 'EnderecoController@destroy');
    Route::resource('assessor/', 'AcessorController');
    Route::post('descricao/', 'DescricaoController@store');
    Route::resource('endereco/', 'EnderecoController');
    Route::post('update/', 'PalestranteController@update');
    Route::post('valor/','ValorController@store');
    Route::post('valor/delete/{id}','ValorController@destroy');
    Route::post('assessor/delete/{id}','AcessorController@destroy');
});
