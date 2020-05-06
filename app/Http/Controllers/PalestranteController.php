<?php

namespace App\Http\Controllers;

use App\Idiomas;
use App\Categoria;
use App\Palestrante;
use App\SubCategoria;
use App\DadosContratuais;
use App\IdiomasPalestrante;
use Illuminate\Http\Request;
use App\PalestranteCategoria;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManager;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\PalestranteRequest;

class PalestranteController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('search')){
            $palestrantes = Palestrante::where('nm_palestrante', 'LIKE', '%'.$request['search'].'%')->paginate(10)->appends('search',  $request['search']);
        }else{
            $palestrantes = Palestrante::where('id','>',0)->orderByDesc('id')->paginate(10);
        }
        return view('dashboard.palestrante.index')->with('palestrantes', $palestrantes);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $data = Palestrante::find($id);
        return view('dashboard.palestrante.form')->with('data', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(PalestranteRequest $request)
    {

        $id_palestrante = $request->all()['id_palestrante'];
        $request->ds_foto = $this->salvarFoto($request);
        $palestrante = Palestrante::find($request->id_palestrante);
        $palestrante->ds_nacionalidade = $request->ds_nacionalidade;
        $palestrante->ds_ativo = $request->ds_ativo;
        $palestrante->ds_visivel_site = $request->ds_visivel_site;
        $palestrante->rank_palestrante = $request->rank_palestrante;
        $palestrante->ds_titulo_video = $request->ds_titulo_video;
        $palestrante->ds_url_video = $request->ds_url_video;
        $palestrante->ds_descricao_video = $request->ds_descricao_video;
        $palestrante->ds_sexo = $request->ds_sexo;
        $palestrante->save();

        $dadosContratuais = new DadosContratuais();
        $dadosContratuais->nm_razao_social = $request->nm_razao_social;
        $dadosContratuais->nr_cnpj = $request->nr_cnpj;
        $dadosContratuais->nr_cpf = $request->nr_cpf;
        $dadosContratuais->nr_insc_estadual = $request->nr_insc_estadual;
        $dadosContratuais->nm_completo = $request->nm_completo;
        $dadosContratuais->nr_insc_municipal = $request->nr_insc_municipal;
        $dadosContratuais->nr_rg = $request->nr_rg;
        $dadosContratuais->dt_nascimento = $request->dt_nascimento;
        $dadosContratuais->ds_observacao = $request->ds_observacao;
        $dadosContratuais->id_palestrante = $request->id_palestrante;

        $dadosContratuais->save();

        $idiomas = $request->all()['idiomas'];
        $categorias = $request->all()['categorias'];

        foreach ($idiomas as $idioma) {
            $salvaIdioma = new IdiomasPalestrante();
            $salvaIdioma->id_idiomas = $idioma;
            $salvaIdioma->id_palestrante = $id_palestrante;
            $salvaIdioma->save();
        }

        foreach ($categorias as $categoria) {
            $salvaCategoria = new PalestranteCategoria();
            $tipoCat = explode("-", $categoria)[0];
            $catId = explode("-", $categoria)[1];
            if ($tipoCat == "cat") {
                $salvaCategoria->id_categoria = $catId;
            } else {
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
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Palestrante::find($id);
        return view('dashboard.palestrante.edit')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(PalestranteRequest $request, $id)
    {

        $id_palestrante = $request->all()['id_palestrante'];
        $request->ds_foto = $this->atualizarFoto($request);
        $palestrante = Palestrante::find($id);
        $palestrante->nm_palestrante = $request->nm_palestrante;
        $palestrante->ds_nacionalidade = $request->ds_nacionalidade;
        $palestrante->ds_ativo = $request->ds_ativo;
        $palestrante->ds_visivel_site = $request->ds_visivel_site;
        $palestrante->rank_palestrante = $request->rank_palestrante;
        $palestrante->ds_titulo_video = $request->ds_titulo_video;
        $palestrante->ds_url_video = $request->ds_url_video;
        $palestrante->ds_descricao_video = $request->ds_descricao_video;
        $palestrante->ds_sexo = $request->ds_sexo;
        $palestrante->save();

        $dadosContratuais = new DadosContratuais();
        $dadosContratuais->nm_razao_social = $request->nm_razao_social;
        $dadosContratuais->nr_cnpj = $request->nr_cnpj;
        $dadosContratuais->nr_cpf = $request->nr_cpf;
        $dadosContratuais->nr_insc_estadual = $request->nr_insc_estadual;
        $dadosContratuais->nm_completo = $request->nm_completo;
        $dadosContratuais->nr_insc_municipal = $request->nr_insc_municipal;
        $dadosContratuais->nr_rg = $request->nr_rg;
        $dadosContratuais->dt_nascimento = $request->dt_nascimento;
        $dadosContratuais->ds_observacao = $request->ds_observacao;
        $dadosContratuais->id_palestrante = $request->id_palestrante;

        $dadosContratuais->save();

        $idiomasSalvos = IdiomasPalestrante::where('id_palestrante', $id_palestrante);
        $idiomasSalvos->delete();
        $categoriasSalvas = PalestranteCategoria::where('id_palestrante', $id_palestrante);
        $categoriasSalvas->delete();

        if(array_key_exists('idiomas', $request->all())){
            $idiomas = $request->all()['idiomas'];

            foreach ($idiomas as $idioma) {
                $idiomaPalestrante = IdiomasPalestrante::where('id_palestrante', $id_palestrante)
                    ->where('id_idiomas', $idioma)->first();

                if (empty($idiomaPalestrante)) {
                    $salvaIdioma = new IdiomasPalestrante();
                    $salvaIdioma->id_idiomas = $idioma;
                    $salvaIdioma->id_palestrante = $id_palestrante;
                    $salvaIdioma->save();
                }
            }
        }
        if (array_key_exists('categorias', $request->all())) {
            $categorias = $request->all()['categorias'];

            foreach ($categorias as $categoria) {

                $tipoCat = explode("-", $categoria)[0];
                $catId = explode("-", $categoria)[1];

                if ($tipoCat == "cat") {
                    $categoriaPalestrante = PalestranteCategoria::where('id_palestrante', $id_palestrante)
                        ->where('id_categoria', $catId)->first();
                    if (empty($categoriaPalestrante)) {
                        $salvaCategoria = new PalestranteCategoria();
                        $salvaCategoria->id_categoria = $catId;
                        $salvaCategoria->id_palestrante = $id_palestrante;
                        $salvaCategoria->save();
                    }
                } else {
                    $subcategoriaPalestrante = PalestranteCategoria::where('id_palestrante', $id_palestrante)
                        ->where('id_subcategoria', $catId)->first();

                    if (empty($subcategoriaPalestrante)) {
                        $salvaCategoria = new PalestranteCategoria();
                        $salvaCategoria->id_subcategoria = $catId;
                        $salvaCategoria->id_palestrante = $id_palestrante;
                        $salvaCategoria->save();
                    }
                }
            }
        }
        return redirect('dashboard/palestrante');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $palestrante = Palestrante::find($request->id);
        $palestrante->delete();

        return redirect("/dashboard/palestrante");

    }

    public function adicionarCategoria(Request $request)
    {

        $palestranteCategoria = PalestranteCategoria::create($request->all());

        if ($palestranteCategoria->id_categoria > 0) {
            $categoria = Categoria::find($palestranteCategoria->id_categoria)->nm_categoria;
        } else if ($palestranteCategoria->id_subcategoria > 0) {
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

    private function salvarFoto(PalestranteRequest $request)
    {

        if ($request->hasFile('ds_foto') && $request->file('ds_foto')->isValid()) {

            $extensao = $request->ds_foto->getClientOriginalExtension();
            $nomeFinal = md5($request->nm_palestrante) . '.' . $extensao;
            $upload = $request->ds_foto->storeAs('imagemPalestrante', $nomeFinal);
            /*
            $novaImg = imagecreatefrompng('storage/'.$upload);
            $crop_width = imagesx($novaImg);
            $crop_height = imagesy($novaImg);
            $minimo = ($crop_height <= $crop_width) ? $crop_height : $crop_width;
            $imgCortada = imagecrop($novaImg, ['x' =>( $crop_width /2), 'y' => ($crop_height/2),
            'width' => ($minimo/2), 'height' =>($minimo/2)]);
            */
            //Storage::delete([$upload]);
            $image = Image::make($request->ds_foto);
            $image->fit(500)->orientate();
            $image->save('storage/'.$upload);



            //salva no banco
            $palestranteFoto = Palestrante::find($request->id_palestrante);
            $palestranteFoto->ds_foto = $upload;
            $teste = $palestranteFoto->save();

        }
    }

    private function atualizarFoto(PalestranteRequest $request)
    {

        if ($request->hasFile('ds_foto') && $request->file('ds_foto')->isValid()) {

            $extensao = $request->ds_foto->getClientOriginalExtension();
            $nomeFinal = md5($request->nm_palestrante) . '.' . $extensao;
            //$upload = $request->ds_foto->storeAs('imagemPalestrante', $nomeFinal);
            //$palestranteFoto = Palestrante::find($request->id_palestrante);
            //$palestranteFoto->ds_foto = $upload;
            //$palestranteFoto->save();
//            $novaImg = public_path('/storage/imagemPalestrante/' . $nomeFinal);
//            $img = Image::make($novaImg)->resize(300, 300)->save($novaImg);


            $diretorio = dir(public_path("storage/imagemPalestrante"));
            $salvar=0;
            while($arquivo = $diretorio->read()){
                echo ($arquivo."<br>".$nomeFinal."<hr>");
                if($arquivo == $nomeFinal){
                        $this->salvar = 0;
                echo("achou<br>");

                }else{
                    $this->salvar = 1;
                    echo("não achou<br>");
                break;
                }
            }
            $diretorio -> close();

            if($salvar = 1){

                $image = Image::make($request->ds_foto);
                $image->fit(500)->orientate();
                $upload=$image->save('storage/imagemPalestrante/'.$nomeFinal);

                $palestranteFoto = Palestrante::find($request->id_palestrante);
                $palestranteFoto->ds_foto = "imagemPalestrante/".$nomeFinal;
                $palestranteFoto->save();
            }
        }
    }

    public function search(Request $request){

        $search = $request->get('search');


        $palestrantes = Palestrante::where('nm_palestrante', 'LIKE', '%'.$search.'%')->paginate(5); //busca com operador LIKE SQL

        //return view('dashboard.palestrante.index')->with(compact('palestrantes','search'));
        return view('dashboard.palestrante.index', ['palestrantes' => $palestrantes, 'search'=>$search]);

    }
}
