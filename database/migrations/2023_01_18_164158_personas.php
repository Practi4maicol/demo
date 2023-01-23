<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Personas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('personas',function (Blueprint $table){
            $table->engine="InnoDB";
            $table->bigIncrements('id');

            $table->string('cedula');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('edad');
            $table->string('genero');
            $table->string('mail');
            $table->string('celular');
            $table->string('direccion');

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
        //
    }
}
