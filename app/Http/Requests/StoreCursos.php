<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCursos extends FormRequest
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
            'name' => 'required|max:10',
            'descripcion' => 'required|min:10',
            'categoria' => 'required'
        ];
    }

    // Para cambiar el nombre de los atributos en los comentarios

    public function attributes()
    {
        return [
            'name' => 'nombre del curso',
        ];
    }

    // para personalizar los mensajes de acuerdo a cada validación

    public function messages()
    {
        return [
            'descripcion.required' => 'Debe ingresar una descripción para el curso'
        ];
    }
}
