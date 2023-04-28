<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlquilerTable extends Migration{
    /**
     * Run the migrations.
     */
    public function up(): void{
        Schema::create('alquiler', function (Blueprint $table){
            //$table->id();
            $table->increments('codPista');
            $table->integer('codUsuario')->unsigned();
            $table->dateTime('fecha_alquiler');
            $table->smallInteger('precio',false);
            $table->float('descuento');
            $table->foreign('codPista')->references('codPista')->on('pista');
            $table->foreign('codUsuario')->references('codUsuario')->on('usuarios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void{
        Schema::dropIfExists('alquiler');
    }
};
