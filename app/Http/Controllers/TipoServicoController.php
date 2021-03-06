<?php

namespace App\Http\Controllers;

use App\TiposDeServico;
use App\Valor;
use Illuminate\Http\Request;


class TipoServicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
        $tipo = TiposDeServico::create($request->all());
        return redirect('dashboard/config');
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
        $tipo = TiposDeServico::find($id);
        $tipo->nm_tipo_servico = $request->nm_tipo_servico;
        $tipo->save();
        return redirect('dashboard/config');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipo = TiposDeServico::find($id);
        $removerValores = Valor::where('id_tp_servico',$id)->get();
        foreach ($removerValores as $removerValor)
        {
            $removerValor->delete();
        }

        $tipo->delete();
        return redirect('dashboard/config');
    }

}
