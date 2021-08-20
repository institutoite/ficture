<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anotacion extends Model
{
    use HasFactory;
    public function tipo(){
        return $this->belongsTo(Tipo::class);
    }
    
    public function jugador(){
        return $this->belongsTo(Jugador::class);
    }

    public function partido()
    {
        return $this->belongsTo(Equipoequipo::class);
    }
}
