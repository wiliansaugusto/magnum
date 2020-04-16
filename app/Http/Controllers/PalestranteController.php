<?php

namespace App\Http\Controllers;

use App\Categoria;
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
    public function store(PalestranteRequest $request)
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
            $nome = $request->ds_foto->getClientOriginalExtension();
            $extensao = $request->ds_foto->extension();
            $nome += $extensao;
            $upload = $request->ds_foto->storeAs('imagemPalestrante', $nome);
            $palestranteFoto = Palestrante::find($request->id_palestrante);
            $palestranteFoto->ds_foto = $upload;
            $palestranteFoto->save();
            return response(json_encode($palestranteFoto), 200)
                ->header('Content-Type', 'application/json');

        }
    }
}
