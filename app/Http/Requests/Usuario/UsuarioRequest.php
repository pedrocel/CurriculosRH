<?php

namespace App\Http\Requests\Usuario;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UsuarioRequest extends FormRequest
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
    public function rules(Request $request)
    {
        return [
            'nome' => 'required',
            'email' => ['required', Rule::unique('usuarios', 'email')->ignore($request->id_user) ],
            'cpf' =>  ['required', 'numeric', 'digits:11',Rule::unique('usuarios', 'cpf')->ignore($request->id_user) ],
        ];
    }
}
