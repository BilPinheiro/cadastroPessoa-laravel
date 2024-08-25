<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Pessoa extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nome' => 'required',
            'email' => 'required',
            'cpf' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'nome.required' => "Campo nome é obrigatorio",
            'email.required' => "Campo email é obrigatorio",
            'cpf.required' => "Campo cpf é obrigatorio"
        ];
    }
}
