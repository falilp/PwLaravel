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
            'codPista' => 'required|max:10',
            'tipoPista' => 'required|max:1',
            'precioHora' => 'required|max:2',
            'disponible' => 'required|max:1',
            'mensaje' => 'nullable|max:100',
            'HoraDisponible' => 'required|max:100',
            'created_at' => 'nullable|max:100',
            'updated_at' => 'nullable|max:100'
        ];
    }
}
