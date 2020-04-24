<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\DadosContratuais;
use App\IdiomasPalestrante;
use App\Palestrante;
use App\PalestranteCategoria;
use App\SubCategoria;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Requests\PalestranteRequest;

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
    public function store(PalestranteRequest $request)
    {
        $validated = $request->validated();
                
        $id_palestrante = $request->all()['id_palestrante'];
        $request->ds_foto = $this->salvarFoto($request);
        $palestrante = Palestrante::find($request->id_palestrante);
        $palestrante->id_tp_nacionalidade = $request->id_tp_nacionalidade;
        $palestrante->ds_ativo = $request->ds_ativo;
        $palestrante->ds_visivel_site = $request->ds_visivel_site;
        $palestrante->rank_palestrante = $request->rank_palestrante;
        $palestrante->ds_titulo_video = $request->ds_titulo_video;
        $palestrante->ds_url_video = $request->ds_url_video;
        $palestrante->ds_descricao_video = $request->ds_descricao_video;
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

        $idiomas = $request->all()['idiomas'];
        $categorias = $request->all()['categorias'];

        foreach ($idiomas as $idioma){
            $salvaIdioma = new IdiomasPalestrante();
            $salvaIdioma->id_idiomas = $idioma;
            $salvaIdioma->id_palestrante = $id_palestrante;
            $salvaIdioma->save();
        }

        foreach ($categorias as $categoria){
            $salvaCategoria = new PalestranteCategoria();
            $tipoCat = explode("-", $categoria)[0];
            $catId = explode("-", $categoria)[1];
            if($tipoCat == "cat"){
                $salvaCategoria->id_categoria = $catId;
            }else{
                $salvaCategoria->id_subcategoria = $catId;
            }
            $salvaCategoria->id_palestrante = $id_palestrante;
            $salvaCategoria->save();
        }

        return redirect('dashboard/palestrante');
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

        $palestranteCategoria = PalestranteCategoria::create($request->all());

        if($palestranteCategoria->id_categoria > 0){
            $categoria = Categoria::find($palestranteCategoria->id_categoria)->nm_categoria;
        }else if ($palestranteCategoria->id_subcategoria > 0){
            $categoria = SubCategoria::find($palestranteCategoria->id_subcategoria)->nm_sub_cat;
        }
        $categoriaReturn = array(
            'id' => $palestranteCategoria->id,
            'categoria' => $categoria
        );
        return response(json_encode($categoriaReturn), 200)
            ->header('Content-Type', 'application/json');

    }

    public function removerCategoria(Request $request)
    {

        PalestranteCategoria::destroy($request->all());

        return response(null, 200)
            ->header('Content-Type', 'application/json');

    }

    private function salvarFoto(Request $request)
    {

        if ($request->hasFile('ds_foto') && $request->file('ds_foto')->isValid()) {

            $extensao = $request->ds_foto->getClientOriginalExtension();
            $nomeFinal = md5($request->nm_palestrante) . '.' . $extensao;
            $upload = $request->ds_foto->storeAs('imagemPalestrante', $nomeFinal);
            $palestranteFoto = Palestrante::find($request->id_palestrante);
            $palestranteFoto->ds_foto = $upload;
            $palestranteFoto->save();
        }
    }
}
