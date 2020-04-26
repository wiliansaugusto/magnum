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
            'ds_foto' => 'image',
        'id_tp_nacionalidade' => 'required',
        'ds_sexo' => 'required',
        'ds_ativo' =>'required',
        'ds_visivel_chat' => 'required',
        'ds_titulo_video' => 'required',
        'ds_url_video' => 'required',
        'ds_descricao_video' => 'required'
        ];
    }
            public function messages()
        {
            return [
                'required' => 'O campo :attribute é obrigatório',
            ];
        }
        public function attributes()
{
    return [
        'ds_foto' => 'foto',
        'ds_sexo' => 'sexo',
    ];
}
}
