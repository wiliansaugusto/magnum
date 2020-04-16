<?php

namespace App\Http\Controllers;

use App\Palestrante;
use Illuminate\Http\Request;

class DescricaoController extends Controller
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
    //
}
public function chamada(Request $request)
{
    $retorno = Palestrante::find($request->id_palestrante);
    $retorno->ds_chamada = $request->ds_chamada;
    $retorno->save();
    return response(json_encode($retorno), 200)
        ->header('Content-Type', 'application/json');
}
public function curriculo(Request $request)
{
    $retorno = Palestrante::find($request->id_palestrante);
    $retorno->ds_curriculo = $request->ds_curriculo;
    $retorno->save();
    return response(json_encode($retorno), 200)
        ->header('Content-Type', 'application/json');
}
public function curriculoTec(Request $request)
{
    $retorno = Palestrante::find($request->id_palestrante);
    $retorno->ds_curriculo_tecnico = $request->ds_curriculo_tecnico;
    $retorno->save();
    return response(json_encode($retorno), 200)
        ->header('Content-Type', 'application/json');
}
public function equip(Request $request)
{
    $retorno = Palestrante::find($request->id_palestrante);
    $retorno->ds_equipe_necessario = $request->ds_equip_necessario;
    $retorno->save();
    return response(json_encode($retorno), 200)
        ->header('Content-Type', 'application/json');
}
public function formaPgto(Request $request)
{
    $retorno = Palestrante::find($request->id_palestrante);
    $retorno->ds_forma_pagamento = $request->ds_forma_pagamento;
    $retorno->save();
    return response(json_encode($retorno), 200)
        ->header('Content-Type', 'application/json');
}
public function investimento(Request $request)
{
    $retorno = Palestrante::find($request->id_palestrante);
    $retorno->ds_investimento = $request->ds_investimento;
    $retorno->save();
    return response(json_encode($retorno), 200)
        ->header('Content-Type', 'application/json');
}
public function observacao(Request $request)
{
    $retorno = Palestrante::find($request->id_palestrante);
    $retorno->ds_observacao = $request->ds_observacao;
    $retorno->save();
    return response(json_encode($retorno), 200)
        ->header('Content-Type', 'application/json');
}

}
