<?php

namespace App\Http\Controllers;

use App\CamposProposta;
use App\Contato;
use App\Idiomas;
use App\IdiomasPalestrante;
use App\Palestrante;
use App\TiposDeServico;
use App\Valor;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Throwable;

class PdfController extends Controller
{

public function index(){
    $palestantes = Palestrante::all();
    return view('dashboard.pdf.index')->with('palestrantes',$palestantes);
}
    public function gerarPdf(Request $request)
    {
        $equipamentos = ($request->equipamentos == null ||''?
            (CamposProposta::where('tp_campo','equipamentos')->orderBy('id', 'Desc')->first()->ds_campo ??
                "<span style='background-color:darkblue;color:red; font-size:50px'>Campo não Cadastrado no sistema</span>") : $request->equipamentos);

        $formaPgto = ($request->formapgt == null ||'' ?
            (CamposProposta::where('tp_campo','formapgto')->orderBy('id', 'Desc')->first()->ds_campo ??
                "<span style='background-color:darkblue;color:red; font-size:50px'>Campo não Cadastrado no sistema</span>"):$request->formapgt);
        $path = public_path("storage/pdf/");
        $palestrante = Palestrante::find($request->palestrante);
        $idiomas = IdiomasPalestrante::where('id_palestrante', $request->palestrante)->get();
        $valores = Valor::where('id_palestrante', $request->palestrante)->get();
        $idomaArray = [];
        $tiposServicoArray = [];
        try {
            $contato= Contato::where('id_usuario',Auth::user()->id,'ds_contato')->first();
        }catch(Throwable $e){
            $contato = null;

        }


        $usuarioArray = [
            'nmUsuario' => Auth::user()->nm_usuario,
            'email' => Auth::user()->email,
            'telefone' => ($contato->ds_contato ?? 'Telefone não cadastrado')
        ];
        $imagemAssinatura = Auth::user()->ds_assinatura_img;
        setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');

        $data = Carbon::now('America/Sao_Paulo');
        $data = $data->formatLocalized('%d de %B de %Y');

        foreach ($idiomas as $idioma) {

            $ds_idioma = Idiomas::find($idioma->id_idiomas)->ds_idioma;
            array_push($idomaArray, $ds_idioma);
        }
        foreach ($valores as $valor){
            $tipos = TiposDeServico::find($valor->id_tp_servico);
                array_push($tiposServicoArray, $tipos);
            }
        $tiposServicoArray = array_unique($tiposServicoArray);

           //dd($usuarioArray, $palestrante);
        $nomeArquivo = $palestrante->nm_palestrante . '.pdf';
        $pdf = PDF::loadView('dashboard.pdf.geradorpdf', with([
            'palestrante' => $palestrante, 'idiomas' => $idomaArray,
            'tiposServico' => $tiposServicoArray, 'usuario' => $usuarioArray,
            'formapgto' =>$formaPgto, 'equipamentos' => $equipamentos,'investimento'=>$request->investimento,
               'impostos'=>$request->investimentoPadrao, 'data' =>$data,'imagemAssinatura' => $imagemAssinatura,
        ]))->setPaper('a4', 'retration');
        $path=$path.$nomeArquivo;
        //$pdf->save($path);
        return $pdf->stream($nomeArquivo);

    }


}
