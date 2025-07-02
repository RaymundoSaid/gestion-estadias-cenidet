<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatoEstudiante extends Model
{
    use HasFactory;

    protected $table = 'datos_estudiantes';

    protected $fillable = [
        'user_id',
        'apellido_paterno',
        'apellido_materno',
        'nombres',
        'sexo',
        'edad',
        'correo',
        'extranjero',
        'estado',
        'municipio',
        'pais_origen',
        'localidad',
        'curp',
        'documento_id',
        'tipo_identificador',
        'identificador',
        'carrera',
        'especialidad',
        'tipo_periodo',
        'periodo',
        'nombre_institucion',
        'telefono',
        'nivel',
        'nombre_director',
        'nombre_rector',
        'estado_institucion',
        'ciudad_institucion',
        'pais_institucion',
        'ciudad_extranjera'
    ];

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

}
