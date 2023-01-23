<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CitasHasRecetas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('citas_has_recetas',function (Blueprint $table) {

            $table->bigIncrements('id');

            $table->bigInteger('Cita_id')->unsigned();
            $table->bigInteger('Receta_id')->unsigned();

            $table->foreign('Cita_id')
                ->references('id')
                ->on('citas')
                ->onDelete("cascade");

            $table->foreign('Receta_id')
                ->references('id')
                ->on('recetas')
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
