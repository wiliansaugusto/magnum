<?php

namespace App\Http\Controllers;


use App\PropostaItem;
use App\Proposta;
use App\Palestrante;
use App\Cliente;
use App\Evento;
use Illuminate\Http\Request;
use App\Http\Requests\PropostaRequest;

class PropostaItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       if ($request->has('search')) {
            $propostaItens = PropostaItem::where('nm_solicitante', 'LIKE', '%' . $request['search'] . '%')->paginate(10)->appends('search', $request['search']);
        } else {
            $propostaItens = PropostaItem::where('id', '>', 0)->orderByDesc('id')->paginate(10);
        }
        return view('dashboard.propostaItem.index')->with('propostaItens', $propostaItens);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $data = PropostaItem::find($id);
        
        //dd($data);

        return view('dashboard.propostaItem.form')->with(['data'=>$data, 'action'=>"criar"]);
    }

    public function salvarPropostaItem(Request $request)
    {
        $data = PropostaItem::create($request->all());
        //dd($data);
        //data->num_proposta =  str_pad($data->id, 7, "0", STR_PAD_LEFT);
        //$data->save();
        //dd($data->nm_solicitante, $request, $data->id, $data->num_proposta);

        return redirect("dashboard/propostaItem/{$data->id}/novo");

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //dd($request);
        $propostaItem = $request->all()['id_proposta'];
        $propostaItem = PropostaItem::find($request->id_proposta);
        $propostaItem->id_proposta = $request->id_proposta;
        $propostaItem->nm_tipo_servico = $request->nm_tipo_servico;
        $propostaItem->vlr_servico_item = $request->vlr_servico_item;
        $propostaItem->id_palestrante = $request->id_palestrante;
        $propostaItem->id_solicitante = $request->id_solicitante;
        $propostaItem->save();      

        $solicitante = $request->all()['id_solicitante'];
        //$solicitante->id = $request->id_solicitante;
        $solicitante->nm_solicitante = $request->nm_solicitante;
        $solicitante->save();     
        
        
        return redirect('dashboard/propostaItem/'.$id_proposta.'/edit');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = PropostaItem::find($id);
        return view('dashboard.propostaItem.form')->with(['data'=>$data, 'action'=>"editar"]);
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
       //dd($request);
       $propostaItem = $request->all()['id_proposta'];
       $propostaItem = PropostaItem::find($request->id_proposta);
       $propostaItem->id_proposta = $request->id_proposta;
       $propostaItem->num_item_proposta = $request->num_item_proposta;
       $propostaItem->nm_tipo_servico = $request->nm_tipo_servico;
       $propostaItem->vlr_servico_item = $request->vlr_servico_item;
       $propostaItem->id_palestrante = $request->id_palestrante;
       $propostaItem->id_solicitante = $request->id_solicitante;
       $propostaItem->save();
        
        $solicitante = $request->all()['id'];
        //$solicitante->id = $request->id_solicitante;
        $solicitante->nm_solicitante = $request->nm_solicitante;
        $solicitante->save();

        return redirect('dashboard/prpopostaItem/'.$id_proposta.'/edit');

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
    public function destroy(Request $request)
    {
        //
        $proposta = PropostaItem::find($request->id);
        $proposta->delete();

        return redirect("/dashboard/propostaItem");
    }

    public function search(Request $request)
    {

        $search = $request->get('search');

        $propostaItens = PropostaItem::where('nm_solicitante', 'LIKE', '%' . $search . '%')->paginate(5); //busca com operador LIKE SQL

        return view('dashboard.propostaItem.index', ['propostas' => $propostaItens, 'search' => $search]);

    }
}
