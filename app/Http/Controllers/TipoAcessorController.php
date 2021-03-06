<?php

namespace App\Http\Controllers;

use App\Acessor;
use App\TipoAcessor;
use Illuminate\Http\Request;

class TipoAcessorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $acessor = TipoAcessor::create($request->all());
        return redirect('dashboard/config');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $acessor = TipoAcessor::find($id);
        $acessor->nm_tp_acessor = $request->nm_tp_acessor;
        $acessor->save();

        return redirect('dashboard/config');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipo = TipoAcessor::find($id);
        $removerAcessores = Acessor::where('id_tp_acessor',$id)->get();
        foreach ($removerAcessores as $removerAcessor)
        {
            $removerAcessor->delete();
        }

        $tipo->delete();
        return redirect('dashboard/config');
    }

}
