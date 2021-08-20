<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnotacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anotacions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion', 100)->nullable();

            /** %%%%%%%%% partido %%%%%%%%%%%%%%%%% */
            $table->unsignedInteger('partido_id');
            $table->foreign('partido_id')->references('id')->on('equipo_equipo');

            /** %%%%%%%%% JUEGADOR %%%%%%%%%%%%%%%%% */
            $table->unsignedInteger('jugador_id');
            $table->foreign('jugador_id')->references('id')->on('jugadors');

            /** %%%%%%%%% JUEGADOR %%%%%%%%%%%%%%%%% */
            $table->unsignedInteger('tipo_id');
            $table->foreign('tipo_id')->references('id')->on('tipos');
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
        Schema::dropIfExists('anotacions');
    }
}
