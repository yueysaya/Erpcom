<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistroEmpreRequest extends FormRequest
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
            'rif'=>'min:10|max:10|unique:maestra|required',
            'nombre'=>'min:3|max:120|unique:maestra|required',
            'correo'=>'min:4|max:120|unique:maestra|required',
            
        ];
    }
}
