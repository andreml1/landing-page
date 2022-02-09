<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'nome' => 'required|min:3',
            'email' => 'required|email|unique:users,email',
            'telefone' => 'required|numeric',
            'curriculo' => 'required|mimes:jpg,png,docx,pdf|max:1024',
        ];
    }

    public function messages()
{
    return [
        'required' => 'O campo :attribute é obrigatório!',
        'nome.min' => 'O campo nome precisa ter pelo menos 3 caracteres!',
        'telefone.numeric' => 'Por favor, insira somente numeros!',
        'email.email' => 'Deve ser um endereço de e-mail válido!',
        'curriculo.mimes' => 'São validas as seguintes extensões: jpg, png, pdf e docx',
        'curriculo.max' => 'O arquivo não pode passar de 1 MB',
    ];  
}
}
