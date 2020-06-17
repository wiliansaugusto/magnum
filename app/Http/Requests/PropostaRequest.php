<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropostaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'num_proposta' => 'required',
            'status_proposta' => 'required|min:1|max:1',
            'obs_proposta'=> 'nullable|max:255',
            'id_evento' => 'nullable',
            'id_cliente' => 'nullable',
            'id_palestrante' => 'nullable',
            'id_tipo_servico' => 'nullable',
            'vlr_total_proposta' => 'nullable',
            'mensagem_proposta' => 'nullable'
        ];
    }
}
