<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
    /**
     * Run the migrations.
     */
    public function up(): void{
        Schema::create('evento', function (Blueprint $table){
            //$table->id();
            $table->increments('codEvento');
            $table->unsignedBigInteger('codPista');
            $table->dateTime('FechaEvento');
            $table->string('Descripcion',150);
            $table->char('categoria',30);
            $table->smallInteger('codUsuario',false);
            $table->timestamps();
            $table->foreign('codPista')->references('codPista')->on('pista');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void{
        Schema::dropIfExists('evento');
    }
};
