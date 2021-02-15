<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoPost extends FormRequest
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
        return[
        'nombre_Prod' => 'required|max:45',
        'descripcion' => 'required|max:50',
        'precio' => 'required',
        'stock' => 'required|numeric',
        'categoria_id' => 'required',
       
        ];
    }
}
