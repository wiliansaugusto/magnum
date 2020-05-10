<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PalestranteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        return [
            'ds_foto' => 'nullable|image|mimes:jpeg,png,jpg',
            'ds_nacionalidade' => 'required',
            'ds_sexo' => 'required',
            'ds_ativo' => 'required',
            'ds_visivel_site' => 'required',
//        'ds_titulo_video' => 'required',
            'ds_url_video' => 'nullable|url',
//            'ds_descricao_video' => 'required',
//            'nm_razao_social' => 'required',
//            'nm_completo' => 'required',
            'nr_cnpj' => 'nullable|cnpj',
            'nr_cpf' => 'nullable|cpf',
//            'nr_insc_estadual' => 'required',
//            'nr_rg' => 'required',
//            'dt_nascimento' => 'required',
            'rank_palestrante' => 'required',
//            'nr_insc_municipal' => 'required',
            'idiomas' => 'required',
            'categorias' => 'required',
            'nr_cpf_palestrante' => 'nullable|cpf',

//          'nm_completo_palestrante'=> 'required',
//          'dt_nascimento_palestrante'=> 'required',
//          'nr_rg_palestrante'=> 'required',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'O campo :attribute é obrigatório',
            'image' => 'A :attribute está em formato inválido',
            'url' => 'Url não disponível'
        ];
    }

    public function attributes()
    {
        return [
            'ds_foto' => 'Foto do Palestrante',
            'ds_sexo' => 'Sexo',
            'ds_nacionalidade' => 'Nacionalidade',
            'ds_ativo' => 'Disponivel para palestras',
            'ds_visivel_site' => 'Visivel no site',
            'ds_titulo_video' => 'Titulo do Video',
            'ds_url_video' => 'Url do video',
            'ds_descricao_video' => 'Descrição do Video',
            'nm_razao_social' => 'Razão Social',
            'nr_cnpj' => 'CNPJ do Palestrante',
            'nr_cpf' => 'CPF do Palestrante',
            'nr_insc_estadual' => 'Inscrição Estadual',
            'nm_completo' => 'Nome Completo',
            'nr_rg' => 'R.G. do Palestrante ',
            'dt_nascimento' => 'Data de Nascimento',
            'ds_observacao' => 'Observações ',
            'rank_palestrante' => 'Rank do Palestrante',
            'nr_insc_municipal' => 'Inscrição Municipal',
            'nm_completo_palestrante'=>     'Nome Completo do Palestrante',
            'dt_nascimento_palestrante'=>   'Data de Nascimento do Palestrante',
            'nr_rg_palestrante'=>           'RG do Palestrante',
            'nr_cpf_palestrante'=>          'CPF do Palestrante',
        ];
    }
}


