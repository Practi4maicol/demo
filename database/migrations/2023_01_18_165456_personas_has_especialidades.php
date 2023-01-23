<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PersonasHasEspecialidades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('personas_has_especialidades',function (Blueprint $table) {

            $table->bigIncrements('id');

            $table->bigInteger('Persona_id')->unsigned();
            $table->bigInteger('Especialidade_id')->unsigned();

            $table->foreign('Persona_id')
                ->references('id')
                ->on('personas')
                ->onDelete("cascade");

            $table->foreign('Especialidade_id')
                ->references('id')
                ->on('especialidades')
                ->onDelete("cascade");


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
