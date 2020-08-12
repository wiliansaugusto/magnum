<?php

namespace App\Http\Controllers;

use App\Contato;
use App\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;

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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        //
        $usuario = Usuario::find($id);
        
        dd($usuario);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function register(Request $request)
    {
        $usuarioLogado = Auth::user()->email;

        if ($usuarioLogado == $request->all()['email']) {
            $usuario = Usuario::where('email', $request->all()['email'])->first();

            $usuario->nm_usuario = $request->all()['nm_usuario'];
            $usuario->email = $request->all()['email'];
            $usuario->password = Hash::make($request->all()['password']);
            $usuario->id_perfil = 1;
            $usuario->ds_assinatura_img = $this->salvarAssinatura($request);

            $usuario->save();
            $this->salvarContato($request, $usuario);

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
            $usuario->ds_assinatura_img = $this->salvarAssinatura($request);
            $usuario->save();
            $this->salvarContato($request, $usuario);



        } else {
            $usuario =  Usuario::create([
                'nm_usuario' => $request->all()['nm_usuario'],
                'email' => $request->all()['email'],
                'password' => Hash::make($request->all()['password']),
                'id_perfil' => 1,
                'ds_assinatura_img' => $this->salvarAssinatura($request)
            ]);

            $this->salvarContato($request, $usuario);

        }
        return redirect('dashboard/config');
    }

    public function deleteUsuario($id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();

        return redirect('dashboard/config');
    }

    private function salvarAssinatura(Request $request)
    {
        if ($request->hasFile('ds_foto') && $request->file('ds_foto')->isValid()) {

            $extensao = $request->ds_foto->getClientOriginalExtension();
            $nomeFinal = md5($request->nm_usuario) . '.' . $extensao;
            $upload = $request->ds_foto->storeAs('imagemAssinatura', $nomeFinal);

            /*
            $novaImg = imagecreatefrompng('storage/'.$upload);
            $crop_width = imagesx($novaImg);
            $crop_height = imagesy($novaImg);
            $minimo = ($crop_height <= $crop_width) ? $crop_height : $crop_width;
            $imgCortada = imagecrop($novaImg, ['x' =>( $crop_width /2), 'y' => ($crop_height/2),
            'width' => ($minimo/2), 'height' =>($minimo/2)]);
            */

            //Storage::delete([$upload]);
            $image = Image::make($request->ds_foto);
            $image->fit(500)->orientate();
            $image->save('storage/' . $upload);

/*
            $palestranteFoto = Palestrante::find($request->id_palestrante);
            $palestranteFoto->ds_foto = $upload;
            $teste = $palestranteFoto->save();
  */
            return $upload;
        }
    }
    private function salvarContato(Request $request, Usuario $usuario){
        $contato = Contato::create([
            'ds_contato' => $request->ds_contato,
            'id_tp_contato' => $request->id_tp_contato,
            'id_usuario' => $usuario->id

        ]);
    }
}

