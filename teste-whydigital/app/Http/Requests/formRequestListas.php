<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class formRequestListas extends FormRequest
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
            'nome.required'=>'o campo nome é obrigatório',
            'nome.unique'=>'ja existe uma lista com esse nome',
            'dataentrega.required'=>'o campo data é obrigatório'
        ];
    }

    public function rules()
    {
        return [
            'nome'=>'required|unique:lista|max:255',
            'dataentrega'=>'required'
        ];
    }
}
