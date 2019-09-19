<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TiponegocioRequest extends FormRequest
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
          
            'nombre'=>'required|max:100|min:5',
            'icono'=>'nullable|max:500',
            
        ];
    }
    public function messages(){
        return [
            'nombre.required'=>'El campo es obligatorio',
            'nombre.max'=>'El nombre es muy extenso',
            'nombre.min'=>'El nombre es muy corto'


        ];
    }
}
