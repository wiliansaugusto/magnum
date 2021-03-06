<?php

namespace App\Http\Controllers;

use App\Estado;
use App\Pais;
use App\Valor;
use Illuminate\Http\Request;
use App\Cidade;

class CidadesController extends Controller
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
        $cidadeExiste = Cidade::where('nm_cidade', $request->nm_cidade)->get();
        if (sizeof($cidadeExiste) == 0) {
            $cidade = Cidade::create($request->all());
            return redirect('dashboard/config');
        }else{

            return redirect('dashboard/config');

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
    public function update(Request $request)
    {
        $cidade = Cidade::find($request->id);
        $cidade->nm_cidade = $request->nm_cidade;
        $cidade->save();

        return redirect('dashboard/config');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $cidade = Cidade::find($id);
        $valor = Valor::where('id_cidade', $id)->get();
        if (sizeof($valor) > 0) {
            return redirect('dashboard/config');

        }else{
            $cidade->delete();
            return redirect('dashboard/config');

        }
    }

    public function buscaPorEstado($id_estado){
        $cidades =  Cidade::where("id_estado",$id_estado)->get();
        return response(json_encode($cidades), 200)
            ->header('Content-Type', 'application/json');
    }

    public function buscaCidade($id){
        $cidade =  Cidade::find($id);
        return response(json_encode($cidade), 200)
            ->header('Content-Type', 'application/json');
    }

}
