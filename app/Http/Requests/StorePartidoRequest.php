<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePartidoRequest extends FormRequest
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
            'equipo_id'     => 'required',
            'equipo2_id'    => 'required',
            'arbitro_id'    => 'required',
            'campeonato_id' => 'required',
            'cancha_id'     => 'required',
            'fecha'         => 'required',
            'hora'          => 'required',
            'gol1'          => 'required',
            'gol2'          => 'required',
        
        ];
    }
}
