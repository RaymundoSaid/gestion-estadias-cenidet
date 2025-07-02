<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DatoEstudiante;
use Illuminate\Support\Facades\Auth;

class DatoEstudianteController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'apellido_paterno' => 'required',
            'apellido_materno' => 'required',
            'nombres' => 'required',
            'correo' => 'required|email',
            // ... Puedes añadir más validaciones aquí
        ]);

        DatoEstudiante::create(array_merge(
            $request->all(),
            ['user_id' => Auth::id()]
        ));

        return redirect('/dashboard')->with('success', 'Datos registrados correctamente.');
    }

    public function formulario()
    {
        $user = Auth::user();

        // Si ya llenó sus datos, lo mandamos al dashboard
        if ($user->datoEstudiante) {
            return redirect('/dashboard');
        }

        return view('formulario.form_estudiante');
    }
}
