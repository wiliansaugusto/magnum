<?php

namespace App\Http\Controllers;

use App\Evento;
use App\Proposta;
use App\Palestrante;
use App\Usuario;

use Illuminate\Http\Request;

class EventoController extends Controller
{
    //
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if ($request->has('search')) {
            $eventos = Evento::where('nm_evento', 'LIKE', '%' . $request['search'] . '%')->paginate(10)->appends('search', $request['search']);
        } else {
            $eventos = Evento::where('id', '>', 0)->orderByDesc('id')->paginate(10);
        }
        return view('dashboard.evento.index')->with('eventos', $eventos);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        dd($data);
        $data = Evento::find($id);
        //dd($data);

        return view('dashboard.evento.form')->with(['data'=>$data, 'action'=>"criar"]);
    }

    public function salvarEvento(Request $request)
    {
        $data = Evento::create($request->all());
        //dd($data);
        
        $data->save();
        

        return redirect("dashboard/evento/{$data->id}/novo");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $evento = $request->all()['id'];
        $evento = Evento::find($request->id);
        $evento->nm_evento = $request->nm_evento;
        $evento->tema_evento = $request->tema_evento;
        $evento->tema_palestra = $request->tema_palestra;
        $evento->dt_evento_inicio = $request->dt_evento_inicio;
        $evento->dt_evento_fim = $request->dt_evento_fim;
        $evento->tm_evento = $request->tm_evento;
        $evento->tm_duracao = $request->tm_duracao;
        $evento->obs_data_evento = $request->obs_data_evento;
        $evento->qtd_participantes_evento = $request->qtd_participantes_evento;
        $evento->perfil_participante_evento = $request->perfil_participante_evento;
        $evento->objetivo_evento = $request->objetivo_evento;
        $evento->vlr_verba_evento = $request->vlr_verba_evento;
        $evento->save();

        return redirect('dashboard/evento');
                
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Evento::find($id);
        return view('dashboard.evento.form')->with(['data'=>$data, 'action'=>"editar"]);
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
        $evento = $request->all()['id'];
        $evento = Evento::find($request->id);
        $evento->nm_evento = $request->nm_evento;
        $evento->tema_evento = $request->tema_evento;
        $evento->tema_palestra = $request->tema_palestra;
        $evento->dt_evento_inicio = $request->dt_evento_inicio;
        $evento->dt_evento_fim = $request->dt_evento_fim;
        $evento->tm_evento = $request->tm_evento;
        $evento->tm_duracao = $request->tm_duracao;
        $evento->obs_data_evento = $request->obs_data_evento;
        $evento->qtd_participantes_evento = $request->qtd_participantes_evento;
        $evento->perfil_participante_evento = $request->perfil_participante_evento;
        $evento->objetivo_evento = $request->objetivo_evento;
        $evento->vlr_verba_evento = $request->vlr_verba_evento;
        $evento->save();
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
    public function updateJquery(Request $request)
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
        $evento = Evento::find($request->id);
        $evento->delete();

        return redirect("/dashboard/evento");
    }
}
