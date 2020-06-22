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
        
    Route::post('proposta/abertura/','AberturaPropostaController@salvarProposta');
    Route::resource('proposta/', 'PropostaController');
    Route::get('proposta/', 'PropostaController@index');
    Route::get('proposta/{id}/novo', 'PropostaController@create');
    Route::get('palestrante/{id}/edit', 'PalestranteController@show');
    Route::delete('proposta/{id}', 'PropostaController@destroy');
    Route::put('proposta/update/{id}', 'PropostaController@edit');
    Route::get('proposta/{id}', 'PropostaController@show');
    
    Route::resource('contato/', 'ContatoController');

    Route::resource('categoria/', 'CategoriaController');
    Route::post('categoria/', 'CategoriaController@store');
    Route::delete('categoria/{id}', 'CategoriaController@destroy');
    Route::post('categoria/update/{id}', 'CategoriaController@update');

    Route::resource('banco/', 'BancoController');
    Route::post('banco/delete/{id}', 'BancoController@destroy');
    Route::post('contato/delete/{id}', 'ContatoController@destroy');
    Route::post('endereco/delete/{id}', 'EnderecoController@destroy');

    Route::post('assessor/', 'AcessorController@store');
    Route::post('assessor/delete/{id}','AcessorController@destroy');

    Route::post('descricao/', 'DescricaoController@store');
    Route::post('descricao/conteudo', 'DescricaoController@descricaoPalestrante');

    Route::resource('endereco/', 'EnderecoController');
    Route::post('palestrante/update/{id}', 'PalestranteController@edit');
    Route::post('valor/','ValorController@store');
    Route::post('valor/delete/{id}','ValorController@destroy');
    Route::resource('config/', 'ConfigurationController');
    Route::post('register/', 'ConfigurationController@register');
    Route::delete('usuario/{id}', 'ConfigurationController@deleteUsuario');

    Route::delete('tiposerv/{id}','TipoServicoController@destroy');
    Route::post('createTpServ','TipoServicoController@store');

    Route::post('cidade','CidadesController@store');
    Route::delete('cidade/{id}','CidadesController@destroy');
    Route::put('cidade','CidadesController@update');
    Route::get('cidade/buscaPorEstado/{id_estado}','CidadesController@buscaPorEstado');
    Route::get('cidade/busca/{id}','CidadesController@buscaCidade');

    Route::post('estado','EstadosController@store');
    Route::delete('estado/{id}','EstadosController@destroy');
    Route::put('estado','EstadosController@update');
//    Route::post('pais/pesquisar/{id}', 'EstadosController@pesquisarPaisPorId');
    Route::get('estado/buscar/{id}', 'EstadosController@buscarPorPais');

//    Route::post('pesquisar/', 'PalestranteController@search');

    Route::resource('evento/', 'EventoController'); 

    Route::get    ('evento/', 'EventoController@index');
    Route::post   ('evento/','EventoController@salvarEvento');
    Route::get    ('evento/{id}/novo', 'EventoController@create');
    Route::get    ('evento/{id}/edit', 'EventoController@show');
    Route::delete ('evento/{id}', 'EventoController@destroy');
//    Route::put    ('evento/update/{id}', 'EventoController@edit');
    Route::get    ('evento/{id}', 'EventoController@show');

    Route::get    ('cliente/', 'ClienteController@index');
    Route::post   ('cliente/','ClienteController@salvarCliente');
    Route::get    ('cliente/{id}/novo', 'ClienteController@create');
    Route::get    ('cliente/{id}/edit', 'ClienteController@show');
    Route::delete ('cliente/{id}', 'ClienteController@destroy');
//    Route::put    ('evento/update/{id}', 'EventoController@edit');
    Route::get    ('cliente/{id}', 'ClienteController@show');

});
