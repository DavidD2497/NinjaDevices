<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Orden;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrdenController extends Controller
{
    /**
     * Agregar un producto al carrito.
     */
    public function agregarAlCarrito(Request $request, $id)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('message', 'Debes iniciar sesión para añadir productos al carrito.');
        }
        $producto = Producto::find($id);

        if(!$producto) {
            return redirect()->back()->with('error', 'Producto no encontrado');
        }

        $carrito = session()->get('carrito', []);

        if(isset($carrito[$id])) {
            $carrito[$id]['cantidad']++;
        } else {
            $carrito[$id] = [
                "nombre" => $producto->nombreProducto,
                "cantidad" => 1,
                "precio" => $producto->precioProducto,
                "imagen" => $producto->imgProducto
            ];
        }

        session()->put('carrito', $carrito);

        return redirect()->back()->with('success', 'Producto añadido correctamente');
    }

    /**
     * Mostrar el contenido del carrito.
     */
    public function mostrarCarrito()
    {
        $carrito = session()->get('carrito', []);
        $total = array_reduce($carrito, function($carry, $item) {
            return $carry + $item['precio'] * $item['cantidad'];
        }, 0);

        return view('carrito', compact('carrito', 'total'));
    }

    /**
     * Remover un producto del carrito.
     */
    public function removerDelCarrito($id)
    {
        $carrito = session()->get('carrito', []);

        if(isset($carrito[$id])) {
            unset($carrito[$id]);
            session()->put('carrito', $carrito);
        }

        return redirect()->back()->with('success', 'Producto removido del carrito');
    }

    /**
     * Actualizar la cantidad de un producto en el carrito.
     */
    public function actualizarCantidad(Request $request, $id)
    {
        $carrito = session()->get('carrito', []);

        if(isset($carrito[$id])) {
            $carrito[$id]['cantidad'] = $request->cantidad;
            session()->put('carrito', $carrito);
        }

        return redirect()->back()->with('success', 'Cantidad actualizada');
    }

    /**
     * Finalizar la compra y crear una orden.
     */
    public function finalizarCompra(Request $request)
    {
        $carrito = session()->get('carrito', []);

        if(!$carrito) {
            return redirect()->route('carrito.mostrar')->with('error', 'No hay productos en el carrito');
        }

        $total = array_reduce($carrito, function($carry, $item) {
            return $carry + $item['precio'] * $item['cantidad'];
        }, 0);

        $orden = new Orden();
        $orden->user_id = auth()->id();
        $orden->total = $total;
        $orden->estado = 'Pendiente';
        $orden->producto = json_encode($carrito);
        $orden->save();

        session()->forget('carrito');

        return redirect()->route('home')->with('success', 'Compra realizada con éxito');
    }
}


