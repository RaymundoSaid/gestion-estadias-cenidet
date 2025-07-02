<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosEstudiantesTable extends Migration
{
    public function up()
    {
        Schema::create('datos_estudiantes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            // Datos personales
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->string('nombres');
            $table->string('sexo');
            $table->integer('edad');
            $table->string('correo');
            $table->boolean('extranjero');
            $table->string('estado')->nullable();
            $table->string('municipio')->nullable();
            $table->string('pais_origen')->nullable();
            $table->string('localidad')->nullable();
            $table->string('curp')->nullable();
            $table->string('documento_id')->nullable();

            // Datos escolares
            $table->enum('tipo_identificador', ['control', 'matricula']);
            $table->string('identificador');
            $table->string('carrera');
            $table->string('especialidad');
            $table->enum('tipo_periodo', ['semestre', 'cuatrimestre']);
            $table->string('periodo');

            // Institución de procedencia
            $table->string('nombre_institucion');
            $table->string('telefono');
            $table->string('nivel');
            $table->string('nombre_director');
            $table->string('nombre_rector');
            $table->string('estado_institucion')->nullable();
            $table->string('ciudad_institucion')->nullable();
            $table->string('pais_institucion')->nullable();
            $table->string('ciudad_extranjera')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('datos_estudiantes');
    }
}
