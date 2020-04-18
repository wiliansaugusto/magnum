<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\DadosContratuais;
use App\Palestrante;
use App\PalestranteCategoria;
use App\SubCategoria;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PalestranteController extends Controller
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
        return view('dashboard.palestrante.index');

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
        $request->ds_foto = $this->salvarFoto($request);
        $palestrante = Palestrante::find($request->id_palestrante);
        $palestrante->id_tp_nacionalidade = $request->id_tp_nacionalidade;
        $palestrante->ds_ativo = $request->ds_ativo;
        $palestrante->ds_visivel_site = $request->ds_visivel_site;
        $palestrante->rank_palestrante = $request->rank_palestrante;
        $palestrante->save();

        $dadosContratuais = new DadosContratuais();
        $dadosContratuais->nm_razao_social = $request->nm_razao_social;
        $dadosContratuais->nr_cnpj = $request->cnpj;
        $dadosContratuais->nr_cpf = $request->nr_cpf;
        $dadosContratuais->nr_insc_estadual = $request->ins_estadual;
        $dadosContratuais->nr_rg = $request->nr_rg;
        $dadosContratuais->dt_nascimento = $request->dt_nascimento;
        $dadosContratuais->ds_observacao = $request->obsevacao;
        $dadosContratuais->id_palestrante = $request->id_palestrante;

        $dadosContratuais->save();
        $retorno=[$palestrante,$dadosContratuais];
        return response(json_encode($retorno), 200)
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
    public function update(Request $request)
    {
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

    public function adicionarCategoria(Request $request)
    {

        $palestrante = PalestranteCategoria::create($request->all());

        if ($palestrante->id_categoria > 0) {
            $categoria = Categoria::find($palestrante->id_categoria)->nm_categoria;
        } else if ($palestrante->id_subcategoria > 0) {
            $categoria = SubCategoria::find($palestrante->id_subcategoria)->nm_sub_cat;
        }
        $categoriaReturn = array(
            'categoria' => $categoria,
        );
        return response(json_encode($categoriaReturn), 200)
            ->header('Content-Type', 'application/json');

    }

    public function salvarFoto(Request $request)
    {

        if ($request->hasFile('ds_foto') && $request->file('ds_foto')->isValid()) {

            $nome = $request->ds_foto->getClientOriginalName();
            $extensao = $request->ds_foto->getClientOriginalExtension();
            $nomeFinal = "{$nome}.{$extensao}";
            $upload = $request->ds_foto->storeAs('imagemPalestrante', $nome);
            $palestranteFoto = Palestrante::find($request->id_palestrante);
            $palestranteFoto->ds_foto = $upload;
            $palestranteFoto->save();
            return response(json_encode($palestranteFoto), 200)
                ->header('Content-Type', 'application/json');

        }
    }
}
