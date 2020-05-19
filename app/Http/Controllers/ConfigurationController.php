<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ConfigurationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::select('id', 'nm_usuario', 'created_at')->get();
        $data = array(
            'usuarios' => $usuarios
        );
        return view('dashboard.configuracao.index')->with('data', $data);
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
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function register(Request $request)
    {
        $usuarioLogado = Auth::user()->email;

        if($usuarioLogado == $request->all()['email']){
            $usuario = Usuario::where('email', $request->all()['email'])->first();

            $usuario->nm_usuario = $request->all()['nm_usuario'];
            $usuario->email = $request->all()['email'];
            $usuario->password = Hash::make($request->all()['password']);
            $usuario->id_perfil = 1;
            $usuario->save();

            return redirect('dashboard/config')->with('message', 'Seus dados de acesso foram atualizados');
        }

        $usuario = Usuario::onlyTrashed()
            ->where('email', $request->all()['email'])
            ->get();

        if (sizeof($usuario) > 0) {
            Usuario::withTrashed()
                ->where('email', $request->all()['email'])
                ->restore();

            $usuario = Usuario::where('email', $request->all()['email'])->first();

            $usuario->nm_usuario = $request->all()['nm_usuario'];
            $usuario->email = $request->all()['email'];
            $usuario->password = Hash::make($request->all()['password']);
            $usuario->id_perfil = 1;
            $usuario->save();

        } else {
            Usuario::create([
                'nm_usuario' => $request->all()['nm_usuario'],
                'email' => $request->all()['email'],
                'password' => Hash::make($request->all()['password']),
                'id_perfil' => 1,
            ]);
        }
        return redirect('dashboard/config');
    }

    public function deleteUsuario($id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();

        return redirect('dashboard/config');
    }
}
