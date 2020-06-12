<?php

namespace App\Http\Controllers;

use App\Cidade;
use App\Endereco;
use App\Estado;
use App\TipoEndereco;
use Illuminate\Http\Request;

class EnderecoController extends Controller
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
        $cidade = Cidade::find($request->id_cidade)->first();

        if($request->id_relacao == "dadosContratuais"){
            $dadosContratuais = DadosContratuais::where('id_palestrante', $request->id_palestrante)->first() == NULL
                ? new DadosContratuais()
                : DadosContratuais::where('id_palestrante', $request->id_palestrante)->first();

            if($dadosContratuais->id_palestrante != $request->id_palestrante){
                $dadosContratuais->id_palestrante = $request->id_palestrante;
                $dadosContratuais = $dadosContratuais->save();
            }

            $endereco = Endereco::create([
                "nm_endereco"           => $request->nm_endereco,
                "ds_complemento"        => $request->ds_complemento,
                "nm_bairro"             => $request->nm_bairro,
                "id_cidade"             => $cidade->id,
                "nr_endereco"           => $request->nr_endereco,
                "id_dado_contratual"    => $dadosContratuais->id,
                "id_tp_endereco"        => $request->id_tp_endereco,
                "nr_cep"                => $request->nr_cep
            ]);
        }else{
            $endereco = Endereco::create([
                "nm_endereco"           => $request->nm_endereco,
                "ds_complemento"        => $request->ds_complemento,
                "nm_bairro"             => $request->nm_bairro,
                "id_cidade"             => $cidade->id,
                "nr_endereco"           => $request->nr_endereco,
                "id_tp_endereco"        => $request->id_tp_endereco,
                "id_palestrante"        => $request->id_palestrante,
                "nr_cep"                => $request->nr_cep
            ]);
        }

        $enderecoReturn = array(
            'id_endereco' => $endereco->id,
            'endereco' => $endereco->nm_endereco . " " . $endereco->nr_endereco . " - " . ($endereco->ds_complemento != NULL ? "- " . $endereco->ds_complemento : '') . ", " . $endereco->nm_bairro . ", " . $endereco->nm_cidade ." - ". $endereco->nm_estado . " - " . $endereco->nr_cep,
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
