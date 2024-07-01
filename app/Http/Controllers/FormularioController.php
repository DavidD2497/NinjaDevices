<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormularioController extends Controller
{
    public function store(Request $request)
    {

        $nombreProducto = $request->input('nombreProducto');
        $modelo = $request->input('modelo');
        $fechaCompra = $request->input('fechaCompra');
        $web = $request->input('web');
        $nombreCliente = $request->input('nombreCliente');
        $dni = $request->input('dni');
        $telefono = $request->input('telefono');
        $email = $request->input('email');
        $direccion = $request->input('direccion');
        $img = $request->file('img');

        $imagePath = null;
            if ($img) {
                    $imageName = time() . '.' . $img->getClientOriginalExtension();
                    $img->move(public_path('assets/facturas'), $imageName);
                    $imagePath = 'assets/facturas/' . $imageName;
            }

        return view('formulario', compact('nombreProducto', 'modelo', 'fechaCompra', 'web', 'nombreCliente', 'dni', 'telefono', 'email', 'direccion', 'imagePath'));
    }
}

