<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatoProfesor extends Model
{
    use HasFactory;

    protected $table = 'datos_profesores';

    protected $fillable = [
        'user_id',
        'tipo_instancia',
        'estado',
        'municipio',
        'telefono',

        // públicos
        'apellido_paterno',
        'apellido_materno',
        'nombre',
        'curp',
        'nombre_institucion',
        'estado_institucion',
        'municipio_institucion',
        'telefono_institucion',
        'nombre_director',
        'puesto_director',

        // privados
        'nombre_empresa',
        'nombre_usuario',
        'puesto_usuario',
        'correo',
    ];
}
