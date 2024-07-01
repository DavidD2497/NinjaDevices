<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class UsuarioController extends Controller
{
    // Método para mostrar la lista de usuarios
    public function index()
    {
        $usuarios = User::all();
        return view('admin.usuarios', compact('usuarios'));
    }

    // Método para crear un nuevo usuario
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|string|in:guest,admin',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        return redirect()->route('admin.usuarios')->with('success', 'Usuario creado con éxito.');
    }

    public function makeUser($id)
    {
        $usuario = User::findOrFail($id);
        $usuario->role = 'guest'; 
        $usuario->save();

        return redirect()->back();
    }

    public function makeAdmin($id)
    {
        $usuario = User::findOrFail($id);
        $usuario->role = 'admin'; 
        $usuario->save();

        return redirect()->back();
    }

    public function destroy($id)
    {
        $usuario = User::findOrFail($id);
        $usuario->delete();

        return redirect()->route('admin.usuarios')->with('success', 'Usuario eliminado con éxito.');
    }
}
