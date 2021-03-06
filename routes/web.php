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
    Route::get('proposta/abertura/','AberturaPropostaController@index');
    Route::resource('proposta/', 'PropostaController');
    Route::get('proposta/', 'PropostaController@index');
    Route::get('proposta/{id}/novo', 'PropostaController@create');
    Route::get('proposta/{id}/edit', 'PropostaController@show');
    Route::delete('proposta/{id}', 'PropostaController@destroy');
    Route::put('proposta/update/{id}', 'PropostaController@edit');
    Route::get('proposta/{id}', 'PropostaController@show');

    //Route::post('proposta/abertura/','AberturaPropostaController@salvarProposta');
    Route::resource('propostaItem/', 'PropostaItemController');
    Route::get('propostaItem/', 'PropostaItemController@index');
    Route::get('propostaItem/{id}/novo', 'PropostaItemController@create');
    Route::get('propostaItem/{id}/edit', 'PropostaItemController@show');
    Route::delete('propostaItem/{id}', 'PropostaItemController@destroy');
    Route::put('propostaItem/update/{id}', 'PropostaItemController@edit');
    Route::get('propostaItem/{id}', 'PropostaItemController@show');

    Route::resource('contato/', 'ContatoController');
    Route::get('contato/{id}/novo', 'ContatoController@store');
    Route::delete('contato/{id}', 'ContatoController@destroy');

    Route::resource('categoria/', 'CategoriaController');
    Route::post('categoria/', 'CategoriaController@store');
    Route::delete('categoria/{id}', 'CategoriaController@destroy');
    Route::post('categoria/update/{id}', 'CategoriaController@update');
    Route::get('categoria/buscar/{id}','CategoriaController@buscaSubCategoria');

    Route::resource('banco/', 'BancoController');
    Route::post('banco/delete/{id}', 'BancoController@destroy');
    Route::post('banco/agencia', 'BancoController@salvarAgencia');
    Route::post('banco/edit/{id}','BancoController@update');
    Route::delete('banco/agencia/{id}', 'BancoController@excluirAgencia');
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
    Route::post('usuario/edit/{id}', 'ConfigurationController@update');

    Route::delete('tipoServico/{id}','TipoServicoController@destroy');
    Route::post('createTpServ','TipoServicoController@store');
    Route::post('tipoServico/edit/{id}', 'TipoServicoController@update');

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
//  Route::put    ('evento/update/{id}', 'EventoController@edit');
    Route::get    ('cliente/{id}', 'ClienteController@show');

    Route::post('createTpAcessor/','TipoAcessorController@store');
    Route::delete('tipoacessor/{id}','TipoAcessorController@destroy');
    Route::post('tipoacessor/edit/{id}', 'TipoAcessorController@update');
    
    Route::post('solicitante/', 'SolicitanteController@store');
    Route::post('solicitante/delete/{id}','SolicitanteController@destroy');


    // Rota para PDF
    Route::get('gerarPdf/{id}','PdfController@gerarPdf');
    Route::post('gerarpdf/','PdfController@gerarPdf');
     Route::get('palestrantepdf/','PdfController@index');

     //rotas para itens do pdf
    Route::delete('formapgto/{id}','CamposPropostaController@destroy');
    Route::post('formapgto/edit/{id}','CamposPropostaController@update');
    Route::post('createformapgto','CamposPropostaController@salvarFormaPgto');
    Route::post('createequipamentos','CamposPropostaController@salvarEquipamentos');



});
