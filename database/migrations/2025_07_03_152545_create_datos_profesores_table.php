<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('datos_profesores', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->enum('tipo_instancia', ['publica', 'privada']);

            // Comunes
            $table->string('estado')->nullable();
            $table->string('municipio')->nullable();
            $table->string('telefono')->nullable();

            // Públicos
            $table->string('apellido_paterno')->nullable();
            $table->string('apellido_materno')->nullable();
            $table->string('nombre')->nullable();
            $table->string('curp')->nullable();
            $table->string('nombre_institucion')->nullable();
            $table->string('estado_institucion')->nullable();
            $table->string('municipio_institucion')->nullable();
            $table->string('telefono_institucion')->nullable();
            $table->string('nombre_director')->nullable();
            $table->string('puesto_director')->nullable();

            // Privados
            $table->string('nombre_empresa')->nullable();
            $table->string('nombre_usuario')->nullable();
            $table->string('puesto_usuario')->nullable();
            $table->string('correo')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('datos_profesores');
    }
};
