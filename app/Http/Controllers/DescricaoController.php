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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->all()['tipo_descricao'] == "chamada") {
            $descricao = Palestrante::find($request->id_palestrante);
            $descricao->ds_chamada = $request->descricao == "null" ? "" : $request->descricao;
            $descricao->save();
            $descricao = Palestrante::find($request->id_palestrante);
            $retorno = array(
                'descricao' => $descricao->ds_chamada,
                'tipo_descricao' => $request->tipo_descricao
            );
        }elseif ($request->all()['tipo_descricao']== "curriculo"){
            $descricao = Palestrante::find($request->id_palestrante);
            $descricao->ds_curriculo = $request->descricao;
            $descricao->save();
            $descricao = Palestrante::find($request->id_palestrante);
            $retorno = array(
                'descricao'=> $descricao->ds_curriculo,
                'tipo_descricao' => $request->tipo_descricao
            );
        }elseif ($request->all()['tipo_descricao'] == "curriculoTec"){
            $descricao = Palestrante::find($request->id_palestrante);
            $descricao->ds_curriculo_tecnico = $request->descricao;
            $descricao->save();
            $descricao = Palestrante::find($request->id_palestrante);
            $retorno = array(
                'descricao'=> $descricao->ds_curriculo_tecnico,
                'tipo_descricao' => $request->tipo_descricao
            );
        }elseif ($request->all()['tipo_descricao']=="obs"){
            $descricao = Palestrante::find($request->id_palestrante);
            $descricao->ds_observacao = $request->descricao;
            $descricao->save();
            $descricao = Palestrante::find($request->id_palestrante);
            $retorno = array(
                'descricao'=> $descricao->ds_observacao,
                'tipo_descricao' => $request->tipo_descricao
            );
        }
        else{
            return response(null, 400)
                ->header('Content-Type', 'application/json');
        }

        return response(json_encode($retorno), 200)
            ->header('Content-Type', 'application/json');
    }

    public function descricaoPalestrante(Request $request)
    {
        if($request->all()['tipo_descricao'] == "chamada") {
            $descricao = Palestrante::find($request->id_palestrante);
            $retorno = array(
                'descricao' => $descricao->ds_chamada == NULL ? "" : $descricao->ds_chamada,
                'tipo_descricao' => $request->tipo_descricao
            );
        }elseif ($request->all()['tipo_descricao']== "curriculo"){
            $descricao = Palestrante::find($request->id_palestrante);
            $retorno = array(
                'descricao'=> $descricao->ds_curriculo == NULL ? "" : $descricao->ds_curriculo,
                'tipo_descricao' => $request->tipo_descricao
            );
        }elseif ($request->all()['tipo_descricao'] == "curriculoTec"){
            $descricao = Palestrante::find($request->id_palestrante);
            $retorno = array(
                'descricao'=> $descricao->ds_curriculo_tecnico == NULL ? "" : $descricao->ds_curriculo_tecnico,
                'tipo_descricao' => $request->tipo_descricao
            );
        }elseif ($request->all()['tipo_descricao']=="obs"){
            $descricao = Palestrante::find($request->id_palestrante);
            $retorno = array(
                'descricao'=> $descricao->ds_observacao == NULL ? "" : $descricao->ds_observacao,
                'tipo_descricao' => $request->tipo_descricao
            );
        }
        else{
            return response(null, 400)
                ->header('Content-Type', 'application/json');
        }

        return response(json_encode($retorno), 200)
            ->header('Content-Type', 'application/json');
    }
    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



}
