<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void{
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            //$table->increments('codUsuario');
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('email')->unique();
            //$table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            //$table->foreignId('current_team_id')->nullable();
            //$table->string('profile_photo_path', 2048)->nullable();
            $table->Integer('telefono',false);
            $table->string('password');
            $table->boolean('Permisos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void{
        Schema::dropIfExists('users');
    }
};
