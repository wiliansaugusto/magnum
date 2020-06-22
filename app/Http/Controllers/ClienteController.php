<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    //
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $clientes = Cliente::where('nm_cliente', 'LIKE', '%' . $request['search'] . '%')->paginate(10)->appends('search', $request['search']);
        } else {
            $clientes = Cliente::where('id', '>', 0)->orderByDesc('id')->paginate(10);
        }
        return view('dashboard.cliente.index')->with('clientes', $clientes);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $data = Cliente::find($id);
        return view('dashboard.cliente.form')->with(['data'=>$data, 'action'=>"criar"]);
    }

    public function salvarCliente(Request $request)
    {
        $data = Cliente::create($request->all());
        //dd($data);
        //$data->num_proposta =  str_pad($data->id, 7, "0", STR_PAD_LEFT);
        $data->save();
        //dd($data->nm_solicitante, $request, $data->id, $data->num_proposta);

        return redirect("dashboard/cliente/{$data->id}/novo");

    }

        /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $cliente = $request->all()['id'];
        $cliente = Cliente::find($request->id_cliente);
        $cliente->nm_cliente = $request->nm_cliente;
        $cliente->ind_cliente = $request->ind_cliente;
        $cliente->tipo_cliente = $request->tipo_cliente;
        $cliente->cpf = $request->cpf;
        $cliente->cnpj = $request->cnpj;
        $cliente->obs_cliente = $request->obs_cliente;
        $cliente->save();
        
        
        return redirect('dashboard/cliente/'.$id.'/novo');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Cliente::find($id);
        return view('dashboard.cliente.form')->with(['data'=>$data, 'action'=>"editar"]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {

        $cliente = $request->all()['id'];
        $cliente = Cliente::find($request->id_cliente);
        $cliente->nm_cliente = $request->nm_cliente;
        $cliente->ind_cliente = $request->ind_cliente;
        $cliente->tipo_cliente = $request->tipo_cliente;
        $cliente->cpf = $request->cpf;
        $cliente->cnpj = $request->cnpj;
        $cliente->obs_cliente = $request->obs_cliente;
        $cliente->save();
        
        return redirect('dashboard/cliente/'.$id_cliente.'/edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $cliente = Cliente::find($request->id);
        $cliente->delete();

        return redirect("/dashboard/cliente");

    }

    
    
    public function search(Request $request)
    {

        $search = $request->get('search');


        $clientes = Cliente::where('nm_cliente', 'LIKE', '%' . $search . '%')->paginate(5); //busca com operador LIKE SQL

        return view('dashboard.cliente.index', ['clientes' => $clientes, 'search' => $search]);

    }

}
