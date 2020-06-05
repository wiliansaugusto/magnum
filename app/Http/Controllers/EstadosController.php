<?php

namespace App\Http\Controllers;

use App\Cidade;
use App\Estado;
use App\Pais;
use App\Valor;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EstadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $estado = Estado::create($request->all());
        return redirect('dashboard/config');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $estado = Estado::find($id);
        $removerCidades = Cidade::where('id_estado', $id)->get();
        foreach ($removerCidades as $removerCidade) {
            $valor = Valor::where('id_cidade', $removerCidade->id)->get();
            if (sizeof($valor) > 0) {
                return redirect('dashboard/config');

            }
            $removerCidade->delete();
        }
        $removerCidadesSemValor = Cidade::where('id_estado', $id)->get();
        if (sizeof($removerCidadesSemValor) == 0) {
            $estado->delete();

        }
        return redirect('dashboard/config');
    }

    public function pesquisarPais($id)
    {
        $estados =  Estado::where("id_pais",$id)->get();
        return response(json_encode($estados), 200)
            ->header('Content-Type', 'application/json');
    }

     public function pesquisarEstado($id)
    {
        $cidades =  Cidade::where("id_estado",$id)->get();
        return response(json_encode($cidades), 200)
            ->header('Content-Type', 'application/json');
    }

}
