<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    public function equipos()
    {
        return $this->belongsToMany(Equipo::class, 'equipo_equipo','equipo2_id');
    }

    public function oponentes()
    {
        return $this->belongsToMany(Equipo::class, 'equipo_equipo','equipo_id','equipo2_id')
                    ->withPivot('cancha_id', 'arbitro_id','fecha','hora')->withTimestamps();

    }
}
