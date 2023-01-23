<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PersonasHasCitas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('personas_has_citas',function (Blueprint $table) {

            $table->bigIncrements('id');

            $table->bigInteger('Persona_id')->unsigned();
            $table->bigInteger('Cita_id')->unsigned();

            $table->foreign('Persona_id')
                ->references('id')
                ->on('personas')
                ->onDelete("cascade");

            $table->foreign('Cita_id')
                ->references('id')
                ->on('citas')
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
