<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Spatie\Permission\Models\Role;

class AuthController extends Controller
{
    public function loginForm() {
        return view('auth.login');
    }

    public function registerForm() {
        return view('auth.register');
    }

    public function register(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:8',
            'rol' => 'required|in:estudiante,profesor',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        $user->assignRole($request->rol);
        Auth::login($user);

        if ($request->rol === 'estudiante') {
            return redirect()->route('form.estudiante');
        }

        if ($request->rol === 'profesor') {
            return redirect()->route('form.profesor');
        }


        return redirect('/dashboard');
    }

    public function login(Request $request) {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect('/dashboard');
        }

        return back()->withErrors(['email' => 'Credenciales inválidas']);
    }

    public function dashboard() {
        $rol = Auth::user()->getRoleNames()->first();
        return view("dashboard.{$rol}");
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
    }

    
}
