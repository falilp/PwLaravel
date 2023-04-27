<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Pistas', function (Blueprint $table) {
            //$table->id();
            $table->increments('codPista');
            $table->smallInteger('tipoPista',false);
            $table->smallInteger('precioHora',false);
            $table->boolean('disponible');
            $table->char('mensaje',100);
            $table->dateTime('HoraDisponible');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Pistas');
    }
};
