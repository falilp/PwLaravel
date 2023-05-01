<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Factory as ValidationFactory;

class LoginRequest extends FormRequest{
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
            'password' => 'required'
        ];
    }

    public function getCredentials(){
        $nombre = $this->get('nombre');

        if($this->ComprobarEmail($nombre)){
            return [
                'email' => $nombre,
                'password' => $this->get('password'),
            ];
        }
        return $this->only('nombre', 'password');
    }

    public function ComprobarEmail($value){
        $factory = $this->container->make(ValidationFactory::class);
        
        return !$factory->make(['nombre' => $value], ['nombre' => 'email'])->fails();
    }
}