<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Palestrante;
use App\TipoContato;
use App\Evento;
use App\Cliente;
use App\TipoDeServico;
use App\Proposta;

class AberturaPropostaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.proposta.abertura.form');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        $data = Proposta::find($id);
        return view('dashboard.proposta.form')->with(['data'=>$data, 'action'=>"criar"]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

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

    public function salvarProposta(Request $request)
    {
        $data = Proposta::create($request->all());
        //dd($data);
        $data->num_proposta =  str_pad($data->id, 7, "0", STR_PAD_LEFT);
        $data->save();
        //dd($data->nm_solicitante, $request, $data->id, $data->num_proposta);

        return redirect("dashboard/proposta/{$data->id}/novo");

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
}
