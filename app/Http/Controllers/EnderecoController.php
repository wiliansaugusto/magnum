<?php

namespace App\Http\Controllers;

use App\Endereco;
use App\TipoEndereco;
use Illuminate\Http\Request;

class EnderecoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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

        $endereco = Endereco::create($request->all());

        $enderecoReturn = array(
            'id_endereco' => $endereco->id,
            'endereco' => $endereco->nm_endereco . " " . $endereco->nr_endereco . ", " . $endereco->nm_bairro . ", " . $endereco->nm_cidade ." - ". $endereco->nm_estado . " - " . $endereco->nr_cep,
            'tipo_endereco' => TipoEndereco::find($endereco->id_tp_endereco)->nm_tipo_endereco
        );

        return response(json_encode($enderecoReturn), 200)
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
        Endereco::destroy($id);
        return response(null, 204)->header('Content-Type', 'application/json');
    }
}
