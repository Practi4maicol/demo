<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CitasHasExamenes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('citas_has_examenes',function (Blueprint $table) {

            $table->bigIncrements('id');

            $table->bigInteger('Cita_id')->unsigned();
            $table->bigInteger('Examene_id')->unsigned();

            $table->foreign('Cita_id')
                ->references('id')
                ->on('citas')
                ->onDelete("cascade");

            $table->foreign('Examene_id')
                ->references('id')
                ->on('examenes')
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
