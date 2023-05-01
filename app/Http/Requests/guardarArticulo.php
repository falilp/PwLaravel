<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class guardarArticulo extends FormRequest
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
            'codPista' => 'required|max:100',
            'tipoPista' => 'required|max:100',
            'precioHora' => 'required|max:100',
            'disponible' => 'required|max:100',
            'mensaje' => 'nullable|max:100',
            'HoraDisponible' => 'required|max:100',
            'created_at' => 'nullable|max:100',
            'updated_at' => 'nullable|max:100'
        ];
    }
}
