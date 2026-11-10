<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|in:voluntario,organizacion',
            'nombre_organizacion' => 'nullable|required_if:role,organizacion|string|max:255',
            'telefono' => 'nullable|string|max:20',
        ], [
            'nombre_organizacion.required_if' => 'El nombre de la organización es obligatorio si te registras como tal.'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'nombre_organizacion' => $request->role === 'organizacion' ? $request->nombre_organizacion : null,
            'descripcion_organizacion' => $request->role === 'organizacion' ? $request->descripcion_organizacion : null,
            'telefono' => $request->telefono,
        ]);

        Auth::login($user);

        return redirect()->route('dashboard');
    }
}