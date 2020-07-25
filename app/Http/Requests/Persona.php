<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

    
class Persona extends FormRequest
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
            'cedula' => 'required|max:10|min:7|unique:persona',
            'nombres'=> 'required',
            'apellidos' => 'required',
            'correo' => 'required|email',
            'categoria' => 'required',
            'fecha_nac' => 'required',
            'estado_civil' => 'required',
            'nacionalidad' => 'required',
            'edad' => 'required',
            'sexo' => 'required',
            'correo' => 'required',
            'telefono' => 'required',
            'celular' => 'required',
            'estado' => 'required',
            'municipio' => 'required',
            'parroquia' => 'required',
            'ciudad' => 'required',
            'urbanizacion' => 'required',
            'tzona' => 'required',
            'nzona' => 'required',
            'tcalle' => 'required',
            'ncalle' => 'required',
            'tvivienda' => 'required',
            'nvivienda' => 'required'
        ];
    }
}
