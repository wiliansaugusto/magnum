<?php

namespace App\Http\Controllers;


use App\Contato;
use App\TipoContato;
use Illuminate\Http\Request;
use App\Solicitante;

use App\Http\Requests\BancoRequest;

class AcessorController extends Controller
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
        dd($request);
        if(sizeof($request->all()['id_contato']) > 0) {
            $solicitante = Solicitante::create($request->all());
            //$nm_tp_acessor = TipoAcessor::find( $request->id_tp_acessor);
            foreach ($request->all()['id_contato'] as $id_contato) {
                $contato = Contato::find($id_contato);
                $contato->id_solicitante = $solicitante->id;
                $contato->save();
            }

            $dataContato = Contato::where('id_solicitante', $solicitante->id)->get();

            $contatos = array();

            foreach ($dataContato as $item){
                $tipocontato = TipoContato::where('id', $item->id_tp_contato)->first();

                $array = array(
                    "id_contato" => $item->id,
                    "nm_tipo_contato" => $tipocontato->nm_tipo_contato,
                    "ds_contato" => $item->ds_contato
                );
                $contatos[] = $array;
            }

            $data = array(
                "id" => $solicitante->id,
                //"id_palestrante" => $solicitante->id_palestrante,
                "nm_solicitante" => $solicitante->nm_solicitante,
                "contatos" => $contatos
                //'nm_tp_acessor' => $nm_tp_acessor->nm_tp_acessor
        );

            return response(json_encode($data), 200)
                ->header('Content-Type', 'application/json');
        }else{
            return response(null, 400)
                ->header('Content-Type', 'application/json');
        }
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
        $removeSolicitante = Solicitante::find($id);
        $removerContatos = Contato::where('id_solicitante',$id)->get();
        foreach ($removerContatos as $removerContato)
        {
        $removerContato->delete();
        }
        $removeSolicitante->delete();
        }
}
