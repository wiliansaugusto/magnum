<?php

namespace App\Http\Controllers;

use App\Proposta;
use App\PropostaItem;
use App\Cliente;
use App\Evento;
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

    public function salvarProposta(Request $request)
    {
        $data = Proposta::create($request->all());
        //dd($data);
        $data->num_proposta =  str_pad($data->id, 7, "0", STR_PAD_LEFT);
        $data->save();
        //dd($data->nm_solicitante, $request, $data->id, $data->num_proposta);

        return redirect("dashboard/proposta/{$data->id}/novo");

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
        $proposta = $request->all()['id_proposta'];
        $proposta = Proposta::find($request->id_proposta);
        $proposta->status_proposta = $request->status_proposta;
        $proposta->nm_contratante = $request->nm_contratante;
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

        //$cliente = $request ->all()['id_cliente'] ;

        $evento = $request->all()['id_evento'];
        $evento = Evento::find($request->id_evento);
        $evento->id_usuario = $request->id_usuario;
        $evento->nm_evento = $request->nm_evento;
        $evento->tema_evento = $request->tema_evento;
        $evento->tema_palestra = $request->tema_palestra;
        $evento->dt_evento_inico = $request->dt_evento_inicio;
        $evento->dt_evento_fim = $request->dt_evento_fim;
        $evento->tm_evento = $request->tm_evento;
        $evento->tm_duracao = $request->tm_duracao;
        $evento->obs_data_evento = $request->obs_data_evento;
        $evento->qtd_participantes_evento = $request->qtd_participantes_evento;
        $evento->perfil_participante_evento = $request->perfil_participante_evento;
        $evento->objetivo_evento = $request->objetivo_evento;
        $evento->vlr_verba_evento = $request->vlr_verba_evento;
        $evento->save();

        $cliente = $request->all()['id_cliente'];
        $cliente = Cliente::find($request->id_cliente);
        $cliente->id_usuario = $request->id_usuario;
        $cliente->nm_cliente = $request->nm_cliente;
        $cliente->ind_cliente = $request->ind_cliente;
        $cliente->tipo_cliente = $request->tipo_cliente;
        $cliente->cpf = $request->cpf;
        $cliente->cnpj = $request->cnpj;
        $cliente->obs_cliente = $request->obs_cliente;
        $cliente->save();    

        $solicitante = $request->all()['id'];
        //$solicitante->id = $request->id_solicitante;
        $solicitante->nm_solicitante = $request->nm_solicitante;
        $solicitante->save();

        
        

        
        return redirect('dashboard/proposta/'.$id_proposta.'/edit');
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
        $proposta->nm_contratante = $request->nm_contratante;
        $proposta->obs_proposta = $request->obs_proposta;
        $proposta->id_evento = $request->id_evento;
        $proposta->id_cliente = $request->id_cliente;
        $proposta->id_palestrante = $request->id_palestrante;
        $proposta->id_usuario = $request->id_usuario;
        $proposta->id_tipo_servico = $request->id_tipo_servico;
        $proposta->vlr_total_proposta = $request->vlr_total_proposta;
        $proposta->mensagem_proposta = $request->mensagem_proposta;
        $proposta->save();

        dd($request);
        $evento = $request->all()['id_evento'];
        $evento = Evento::find($request->id_evento);
        $evento->nm_evento = $request->nm_evento;
        $evento->tema_evento = $request->tema_evento;
        $evento->tema_palestra = $request->tema_palestra;
        $evento->dt_evento_inico = $request->dt_evento_inicio;
        $evento->dt_evento_fim = $request->dt_evento_fim;
        $evento->tm_evento = $request->tm_evento;
        $evento->tm_duracao = $request->tm_duracao;
        $evento->obs_data_evento = $request->obs_data_evento;
        $evento->qtd_participantes_evento = $request->qtd_participantes_evento;
        $evento->perfil_participante_evento = $request->perfil_participante_evento;
        $evento->objetivo_evento = $request->objetivo_evento;
        $evento->vlr_verba_evento = $request->vlr_verba_evento;
        $evento->save();

        $cliente = $request->all()['id_cliente'];
        $cliente = Cliente::find($request->id_cliente);
        $cliente->nm_cliente = $request->nm_cliente;
        $cliente->ind_cliente = $request->ind_cliente;
        $cliente->tipo_cliente = $request->tipo_cliente;
        $cliente->cpf = $request->cpf;
        $cliente->cnpj = $request->cnpj;
        $cliente->obs_cliente = $request->obs_cliente;
        $cliente->save();
        

        $solicitante = $request->all()['id'];
        //$solicitante->id = $request->id_solicitante;
        $solicitante->nm_solicitante = $request->nm_solicitante;
        $solicitante->save();

        return redirect('dashboard/prpoposta/'.$id_proposta.'/edit');

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
