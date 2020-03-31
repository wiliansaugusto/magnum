<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Http\Requests\NomeCategoriaRequest;
use App\SubCategoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
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
    public function index(Request $request)
    {

        $categoria = Categoria::query()->orderBy('id', "desc")->get();
        $sub = new SubCategoria();
        $sub->subCategorias()->where('id_categoria', $columns = ['*']);
        $mensagem = $request->session()->get('mensagem');

        return view('dashboard.categoria.create', compact('categoria', 'mensagem','sub'));

    }

    public function salvarNome(NomeCategoriaRequest $request)
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (isset($request->id_categoria)) {

            $sub = new SubCategoria();
            $sub->id_categoria = $request->id_categoria;
            $sub->nm_sub_cat = $request->nm_sub_cat;
            $sub->save();
            $request->session()->flash('mensagem',
                "Sub - Categoria {$sub->nm_sub_cat} criada com sucesso ");
            return redirect('dashboard/categoria');

        } else {
            $nome = $request->nm_categoria;
            $categoria = new Categoria();
            $categoria->nm_categoria = $nome;
            $categoria->save();
            $request->session()->flash('mensagem',
                "Categoria {$categoria->nm_categoria} criada com sucesso ");

            return redirect('dashboard/categoria');
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
        //
    }
}
