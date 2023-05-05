<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgendamentoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nome'=>'required',
            'telefone'=>'required',
            'origem'=>'required',
            'data_contato'=>'required|date',
        ];
    }

    public function messages(){
        return[
            'nome.required'=>'Digite o nome do cliente!',
            'telefone.required'=>'Digite o telefone do cliente!',
            'origem.required'=>'Digite a origem do telefone do cliente!',
            'data_contato.required'=>'Digite a data do contato com o cliente!',
        ];
    }
}
