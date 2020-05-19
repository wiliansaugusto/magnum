<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\SubCategoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{

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

        //usada para remover a acentuação grafica
        $comAcentos = array('à', 'á', 'â', 'ã', 'ä', 'å', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ù', 'ü', 'ú', 'ÿ', 'À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'O', 'Ù', 'Ü', 'Ú');
        $semAcentos = array('a', 'a', 'a', 'a', 'a', 'a', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'y', 'A', 'A', 'A', 'A', 'A', 'A', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'N', 'O', 'O', 'O', 'O', 'O', '0', 'U', 'U', 'U');
        $retorno = (Subcategoria::where('nm_sub_cat',
         strtoupper(str_replace($comAcentos, $semAcentos, $request->nm_sub_cat)))->first());
        $retornoCat = (Categoria::where('nm_categoria',
        strtoupper(str_replace($comAcentos, $semAcentos, $request->nm_categoria)))->first());

        if (($retorno != null)||($retornoCat != null)) {
        $request->session()->flash('mensagem',
            "Categoria {$request->nm_categoria} já está cadastrada ! ");
        return redirect('dashboard/categoria');

    }
        //verifica se ha valor digitado nulo
        $params = $request->all();
        foreach ($params as $value) {

            if (empty($value)) {
                $request->session()->flash('mensagem',
                    "Texto digitado invalido!");

                return redirect('dashboard/categoria');
            }
        }
        if (isset($request->id_categoria)) {

            //verfica se valor digitado não está duplicado e remove a acentuação grafica

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
            $subCats = SubCategoria::all()->where('id_categoria','=' ,$request->id);

            foreach ($subCats as  $value) {
                $value->delete();

            }
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
