<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AtorRequest extends FormRequest
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
            'nome' => 'required|min:5',
            'nacionalidade' => 'required',
            'dt_nascimento' => 'date',
            'inicio_atividades' => 'date',
        ];
    }
}
