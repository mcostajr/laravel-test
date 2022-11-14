<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreParticipanteRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nome' => ['required', 'min:3', 'max:100'],
            'sobrenome'  => ['required', 'min:3', 'max:100'],
            'data_nascimento'  => ['required', 'date', 'before:tomorrow'],
            'email'  => ['required', 'unique:participantes', 'max:100', 'email']
        ];
    }
}
