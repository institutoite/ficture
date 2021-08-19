<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipoEquipoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipo_equipo', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('equipo_id');
            $table->foreign('equipo_id')->references('id')->on('equipos');

            $table->unsignedInteger('equipo2_id');
            $table->foreign('equipo2_id')->references('id')->on('equipos');


            /*%%%%%%%%%%%%%%%%% COLUMNAS PIVOTE %%%%%%%%%%%%%%%%%%%%% */
            $table->unsignedInteger('arbitro_id');
            $table->foreign('arbitro_id')->references('id')->on('arbitros');

            $table->unsignedInteger('cancha_id');
            $table->foreign('cancha_id')->references('id')->on('canchas');

            $table->date('fecha');
            $table->time('hora');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipo_equipo');
    }
}
