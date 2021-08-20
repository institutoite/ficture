<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipoequipo extends Model
{
    use HasFactory;

    protected $table='equipo_equipo';

    public function anotaciones()
    {
        return $this->hasMany(Anotacion::class);
    }
}
