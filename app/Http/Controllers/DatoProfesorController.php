<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DatoProfesor;
use Illuminate\Support\Facades\Auth;

class DatoProfesorController extends Controller
{
    public function formulario() {
        $user = Auth::user();

        if ($user->datoProfesor) {
            return redirect('/dashboard');
        }

        return view('formulario.form_profesor');
    }

    public function store(Request $request) {
        $data = $request->all();
        $data['user_id'] = Auth::id();
        $data['tipo_instancia'] = $request->has('nombre_institucion') ? 'publica' : 'privada';

        DatoProfesor::create($data);

        return redirect('/dashboard')->with('success', 'Datos del profesor guardados correctamente.');
    }
}
