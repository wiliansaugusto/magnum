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

        $categorias = Categoria::all()->sortByDesc('id');
        $mensagem = $request->session()->get('mensagem');

        return view('dashboard.categoria.index', compact('categorias', 'mensagem'));

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
        $params = $request->all();
        foreach ($params as $value) {
            if (empty($value)) {
                $request->session()->flash('mensagem',
                    "Texto digitado invalido!");

                return redirect('dashboard/categoria');
            }
        }
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
        $sub = new Categoria();
        $sub->subCategorias()->find($id);
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
        $params = $request->all();
        foreach ($params as $value) {
            if (empty($value)) {
                $request->session()->flash('mensagem',
                    "Texto digitado invalido!");

                return redirect('dashboard/categoria');
            }
        }

        if (isset($request->nm_categoria)) {
            $subcat = Categoria::find($id);
            $subcat->update($params);
            $request->session()->flash('mensagem',
                "Categoria " . $request->nm_categoria . " Alterada com sucesso ");

            return redirect('dashboard/categoria');
        } else {
            $subcat = SubCategoria::find($id);
            $subcat->update($params);
            $request->session()->flash('mensagem',
                "Categoria " . $request->nm_sub_cat . " Alterada com sucesso ");

            return redirect('dashboard/categoria');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if (isset($request->sub) == 1) {
            SubCategoria::destroy($request->id);
            $request->session()->flash('mensagem',
                "Sub Categoria removida com sucesso ");
            return redirect('dashboard/categoria');
        } else {

            Categoria::destroy($request->id);
            $request->session()->flash('mensagem',
                "Categoria removida com sucesso ");
            return redirect('dashboard/categoria');
        }
    }
    public function verificarVazio($params)
    {

    }
}
