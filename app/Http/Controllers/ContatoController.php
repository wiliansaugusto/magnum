<?php

namespace App\Http\Controllers;

use App\Contato;
use App\DadosContratuais;
use App\TipoContato;
use Illuminate\Http\Request;
use Psr\Log\NullLogger;

class ContatoController extends Controller
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
        $contato = Contato::where('id_palestrante', $request->id_palestrante)
                            ->where('ds_contato', $request->ds_contato)->first() == NULL
            ? (Contato::where('id_acessor', $request->id_acessor)
                ->where('ds_contato', $request->ds_contato)->first()  == NULL
                ? (Contato::where('id_cliente', $request->id_cliente)
                            ->where('ds_contato', $request->ds_contato)->first()  == NULL
                    ? (Contato::where('id_proposta', $request->id_proposta)
                                ->where('ds_contato', $request->ds_contato)->first() == NULL
                        ? new Contato() : Contato::where('id_proposta', $request->id_proposta)
                                                    ->where('ds_contato', $request->ds_contato)->first())
                    : Contato::where('id_cliente', $request->id_cliente)
                                ->where('ds_contato', $request->ds_contato)->first())
                : Contato::where('id_acessor', $request->id_acessor)
                        ->where('ds_contato', $request->ds_contato)->first())
            : Contato::where('id_palestrante', $request->id_palestrante)
                ->where('ds_contato', $request->ds_contato)->first();
//        $contato = Contato::create($request->all());

//        var_dump($contato);
        $contatoReturn = array(
            'id_contato' => $contato->id,
            'nm_tipo_contato' => TipoContato::find($contato->id_tp_contato)->nm_tipo_contato,
            'ds_contato' => $contato->ds_contato
        );
        return response(json_encode($contato), 500)
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
    public function updateJquery(Request $request)
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
        Contato::destroy($id);
        return response(null, 204)->header('Content-Type', 'application/json');
    }
}
