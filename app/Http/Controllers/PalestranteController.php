<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\PalestranteCategoria;
use App\SubCategoria;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Palestrante;
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
    public function update(Request $request, $id)
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

    public function adicionarCategoria(Request $request){

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

    public function removerCategoria(Request $request){

        $palestranteCategoria = PalestranteCategoria::destroy($request->all());

        return response(null,200)
            ->header('Content-Type', 'application/json');

    }
}
