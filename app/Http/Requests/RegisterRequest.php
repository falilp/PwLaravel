<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool{
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array{
        return [
            'nombre' => 'required',
            'apellidos' => 'required',
            'email' => 'required|unique:usuarios,email',
            'telefono' => 'required',
            'contraseña' => 'required|min:8',
            'confirmar_contraseña' => 'required|same:contraseña',
        ];
    }
}
