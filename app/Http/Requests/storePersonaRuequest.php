<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storePersonaRuequest extends FormRequest
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
            'nombre'    => 'required|max:25|min:3|alpha',
            'apellidop' => 'required|max:20|min:3|alpha',
            'apellidom' => 'required|max:20|min:3|alpha',
            'ci'        => 'required|max:99999999|min:6|numeric',
            'expedido'  => 'required',
            'telefono'  => 'required|max:99999999|min:8|numeric',
           
        ];
    }
}
