<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidatorDish extends FormRequest
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
           'descripion'=>'nullable|max:500',
           'foto'=>'nullable|file|mimes:jpeg,png,jpg,JPG|dimensions:min_width=200,min_height=200,max_width=4000,max_height=4000|max:2048',
           'precio'=>'nullable'
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
