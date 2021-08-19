<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCampeonatoRequest extends FormRequest
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
            'campeonato'=>"required|min:5|max:50",
            'fechainicio'=>"required|date",
            'fechafin'=>"required|date",
            'categoria_id'=>"required|numeric",
        ];
    }
}
