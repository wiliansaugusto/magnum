<?php

namespace App\Http\Controllers;

use App\Proposta;
use App\PropostaItem;
use Illuminate\Http\Request;
use App\Http\Requests\PropostaRequest;

class PropostaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       if ($request->has('search')) {
            $propostas = Proposta::where('nm_solicitante', 'LIKE', '%' . $request['search'] . '%')->paginate(10)->appends('search', $request['search']);
        } else {
            $propostas = Proposta::where('id', '>', 0)->orderByDesc('id')->paginate(10);
        }
        return view('dashboard.proposta.index')->with('propostas', $propostas);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $data = Proposta::find($id);
        //dd($data);

        return view('dashboard.proposta.form')->with(['data'=>$data, 'action'=>"criar"]);
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
        $proposta = $request->all()['id_proposta'];
        $proposta = Proposta::find($request->id_proposta);
        $proposta->status_proposta = $request->status_proposta;
        $proposta->nm_solicitante = $request->nm_solicitante;
        $proposta->obs_proposta = $request->obs_proposta;
        $proposta->id_evento = $request->id_evento;
        $proposta->id_cliente = $request->id_cliente;
        $proposta->id_palestrante = $request->id_palestrante;
        $proposta->id_usuario = $request->id_usuario;
        $proposta->id_tipo_servico = $request->id_tipo_servico;
        $proposta->vlr_total_proposta = $request->vlr_total_proposta;
        $proposta->mensagem_proposta = $request->mensagem_proposta;
        $proposta->nm_solicitante = $request->nm_solicitante;
        $proposta->save();

        
        return redirect('dashboard/proposta/abertura'.$id_proposta.'/novo');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Proposta::find($id);
        return view('dashboard.proposta.form')->with(['data'=>$data, 'action'=>"editar"]);
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
        $proposta = $request->all()['id_proposta'];
        $proposta = Proposta::find($request->id_proposta);
        $proposta->status_proposta = $request->status_proposta;
        $proposta->nm_solicitante = $request->nm_solicitante;
        $proposta->obs_proposta = $request->obs_proposta;
        $proposta->id_evento = $request->id_evento;
        $proposta->id_cliente = $request->id_cliente;
        $proposta->id_palestrante = $request->id_palestrante;
        $proposta->id_usuario = $request->id_usuario;
        $proposta->id_tipo_servico = $request->id_tipo_servico;
        $proposta->vlr_total_proposta = $request->vlr_total_proposta;
        $proposta->mensagem_proposta = $request->mensagem_proposta;
        $proposta->save();

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
        $proposta = Proposta::find($request->id);
        $proposta->delete();

        return redirect("/dashboard/proposta");
    }

    public function search(Request $request)
    {

        $search = $request->get('search');

        $propostas = Proposta::where('nm_solicitante', 'LIKE', '%' . $search . '%')->paginate(5); //busca com operador LIKE SQL

        return view('dashboard.proposta.index', ['propostas' => $propostas, 'search' => $search]);

    }
}
