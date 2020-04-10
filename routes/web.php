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
    Route::resource('assessor/', 'AcessorController');
    Route::post('chamada/', 'DescricaoController@chamada');
    Route::post('curriculo/', 'DescricaoController@curriculo');
    Route::post('curriculoTec/', 'DescricaoController@curriculoTec');
    Route::post('equip/', 'DescricaoController@equip');
    Route::post('formapgto/', 'DescricaoController@formaPgto');
    Route::post('investimento/', 'DescricaoController@investimento');
    Route::post('descobs/', 'DescricaoController@observacao');
    Route::resource('endereco/', 'EnderecoController');
});
