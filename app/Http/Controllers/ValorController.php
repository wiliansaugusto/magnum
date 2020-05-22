<?php

namespace App\Http\Controllers;

use App\Cidade;
use App\TiposDeServico;
use App\Valor;
use Illuminate\Http\Request;

class ValorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $valor = Valor::create($request->all());

       $retorno = array(
           'id_valor' => $valor->id,
           'nr_valor' => $valor->nr_valor,
           'ds_observacao' => $valor->ds_observacao,
           'nm_tipo_servico' => TiposDeServico::find($valor->id_tp_servico)->nm_tipo_servico,
           'nm_cidade' => Cidade::find($valor->id_cidade)->nm_cidade
       );
        return response(json_encode($retorno), 200)
            ->header('Content-Type', 'application/json');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $retorno = Valor::destroy($id);
        return response($retorno, 204)
            ->header('Content-Type', 'application/json');
    }
}
