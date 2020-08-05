<?php

namespace App\Http\Controllers;

use App\NomeBanco;
use Illuminate\Http\Request;
use App\Banco;

use App\Http\Requests\BancoRequest;

class BancoController extends Controller
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
        $banco = Banco::create($request->all());

        $bancoReturn = array(
            'id_banco' => $banco->id,
            'nr_conta' => $banco->nr_conta,
            'nr_agencia' => $banco->nr_agencia,
            'nm_banco' => NomeBanco::find($banco->id_nm_banco)->nm_banco
        );

        return response(json_encode($bancoReturn), 200)
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
        Banco::destroy($id);

        return response(null, 204)
            ->header('Content-Type', 'application/json');
    }

    public function salvarAgencia(Request $request){
        try {
            NomeBanco::create([
                'nm_banco'=> $request->nm_banco,
                'cd_banco'=> $request->cd_banco,
            ]);

            return redirect('dashboard/config');
        }catch (\Exception $ex){
            return redirect('dashboard/erro')->with('erro', $ex);
        }
    }
    public function excluirAgencia($id){
        try {
            NomeBanco::destroy($id);

            return redirect('dashboard/config');
        }catch (\Exception $ex){
            return redirect('dashboard/erro')->with('erro', $ex);
        }
    }
}
