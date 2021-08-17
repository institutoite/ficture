<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    public function jugador(){
        return $this->hasOne(Jugador::class);
    }
    public function arbitro(){
        return $this->hasOne(Arbitro::class);
    }
    public function presidente(){
        return $this->hasOne(Presidente::class);
    }
}
