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

Route::prefix('dashboard')->group(function () {
    Route::resource('/', 'HomeController');
    Route::post('fragmentopalestrante/', 'FragmentosPalestranteController@salvarNome');
    Route::resource('palestrante/', 'PalestranteController');
    Route::get('palestrante/', 'PalestranteController@index');
    Route::get('palestrante/{id}/novo', 'PalestranteController@create');
    Route::get('palestrante/{id}/edit', 'PalestranteController@show');
    Route::delete('palestrante/{id}', 'PalestranteController@destroy');
    Route::put('palestrante/update/{id}', 'PalestranteController@edit');
    Route::get('palestrante/{id}', 'PalestranteController@show');
    Route::resource('contato/', 'ContatoController');
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
    Route::post('palestrante/update/{id}', 'PalestranteController@edit');
    Route::post('valor/','ValorController@store');
    Route::post('valor/delete/{id}','ValorController@destroy');
    Route::post('assessor/delete/{id}','AcessorController@destroy');
    Route::resource('config/', 'ConfigurationController');
});
