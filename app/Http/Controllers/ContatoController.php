<?php

namespace App\Http\Controllers;

use App\Contato;
use App\DadosContratuais;
use App\TipoContato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        if($request->rel === "contato-edicao"){
            $contato = Contato::find($request->id);
            $contato->ds_contato = $request->ds_contato;
            $contato->id_tp_contato = $request->id_tp_contato;
            $contato->save();
        }else{
            $contato = Contato::create($request->all());
        }

        $contatoReturn = array(
            'id_contato' => $contato->id,
            'nm_tipo_contato' => TipoContato::find($contato->id_tp_contato)->nm_tipo_contato,
            'id_tipo_contato' => TipoContato::find($contato->id_tp_contato)->id,
            'ds_contato' => $contato->ds_contato
        );
        //TODO refatorar core.js para se adequar ao novo padrao do formulário de contato
        return response(json_encode($contatoReturn), 200)
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
