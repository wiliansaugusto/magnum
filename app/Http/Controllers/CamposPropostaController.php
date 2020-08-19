<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CamposProposta;

class CamposPropostaController extends Controller
{
    public function salvarFormaPgto(Request $request){

        $formaPgto = CamposProposta::create($request->all());
        return redirect('dashboard/config');

    }
    public function salvarEquipamentos(Request $request){

        $equipamentos = CamposProposta::create($request->all());
        return redirect('dashboard/config');

    }
    public function destroy($id){
        $apagar = CamposProposta::find($id);
        $apagar->delete();
        return redirect('dashboard/config');

    }
    public function update (Request $request, $id){
        $formaPgto = CamposProposta::find($id);
        $formaPgto->ds_campo = $request->ds_campo;
        $formaPgto->save();        
        return redirect('dashboard/config');
        
    }
}
