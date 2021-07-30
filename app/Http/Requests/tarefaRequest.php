<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class tarefaRequest extends FormRequest
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
    public function messages()
    {
        return [
            'nome.required'=>'o campo nome é obrigratório',
            'nome.unique'=>'essa tarefa ja existe',
            'descricao.required'=>'o campo descrição é obrigatório',
            'descricao.max'=>'o limite de caracteres é de 255',
            'descricao.min'=>'o minimo de caracteres é de 10'
        ];
    }

    public function rules()
    {
        return [
            'nome'=>'required|unique:tarefa|max:100',
            'descricao'=>'required|max:255|min:10',
        ];
    }
}
