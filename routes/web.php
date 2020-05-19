<?php
<<<<<<< HEAD

=======
>>>>>>> b8da2327ba6e31e5bbb8b2ec5a23c0ab952c5aeb
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
<<<<<<< HEAD

Route::get('/', function () {
    return view('welcome');
=======
Route::get('/', function () {
    return Redirect::to('/login');
>>>>>>> b8da2327ba6e31e5bbb8b2ec5a23c0ab952c5aeb
});

Auth::routes();

<<<<<<< HEAD
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/dashboard/palestrante/', 'PalestranteController');
=======
Route::group( ['middleware' => ['auth', 'active_user'], "prefix" => 'dashboard'], function () {
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

//    Route::resource('assessor/', 'AcessorController');
    Route::post('assessor/', 'AcessorController@store');
    Route::post('assessor/delete/{id}','AcessorController@destroy');

    Route::post('descricao/', 'DescricaoController@store');

    Route::resource('endereco/', 'EnderecoController');
    Route::post('palestrante/update/{id}', 'PalestranteController@edit');
    Route::post('valor/','ValorController@store');
    Route::post('valor/delete/{id}','ValorController@destroy');
    Route::resource('config/', 'ConfigurationController');
    Route::post('register/', 'ConfigurationController@register');
    Route::delete('usuario/{id}', 'ConfigurationController@deleteUsuario');
//    Route::post('pesquisar/', 'PalestranteController@search');

});
>>>>>>> b8da2327ba6e31e5bbb8b2ec5a23c0ab952c5aeb
