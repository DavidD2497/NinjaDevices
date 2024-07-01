<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Producto;

class ProductoController extends Controller
{   
    public function index($categoria_id)
    {
        $productos = Producto::where('idCategoria', $categoria_id)->get();
        $categoria = Categoria::find($categoria_id);
        return view('productos', compact('productos', 'categoria'));
    }

    public function index2($categoria_id)
    {
        $productos = Producto::where('idCategoria', $categoria_id)->get();
        $categoria = Categoria::find($categoria_id);
        return view('admin.productos', compact('productos', 'categoria'));
    }

    public function show($producto_id)
    {
    $producto = Producto::findOrFail($producto_id);
    return view('admin.verProducto', compact('producto'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'nombreProducto' => 'required|string|max:255',
            'precioProducto' => 'required|numeric',
            'descripcionProducto' => 'required|string',
            'arch' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'categoriaProducto' => 'required|exists:categorias,idCategoria'
        ]);

        $producto = new Producto();
        $producto->nombreProducto = $request->input('nombreProducto');
        $producto->precioProducto = $request->input('precioProducto');
        $producto->descripcionProducto = $request->input('descripcionProducto');
        $producto->idCategoria = $request->input('categoriaProducto');

        if ($request->hasFile('arch')) {
            $imageName = time() . '.' . $request->file('arch')->getClientOriginalExtension();
            $request->file('arch')->move(public_path('assets/img'), $imageName);
            $producto->imgProducto = 'assets/img/' . $imageName;
        } else {
  
            $producto->imgProducto = 'assets/img/noimagen.jpg';
        }

        $producto->save();

        return redirect()->route('admin.productos', $request->input('categoriaProducto'))
            ->with('success', 'Producto creado exitosamente.');
    }

    public function edit($producto_id)
    {
        $producto = Producto::findOrFail($producto_id);
        return view('admin.editProducto', compact('producto'));
    }

    public function update(Request $request, $producto_id)
    {
        $request->validate([
            'nombreProducto' => 'required|string|max:255',
            'precioProducto' => 'required|numeric',
            'descripcionProducto' => 'required|string',
            'archmod' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'categoriaProducto' => 'required|exists:categorias,idCategoria'
        ]);

        $producto = Producto::findOrFail($producto_id);
        $producto->nombreProducto = $request->input('nombreProducto');
        $producto->precioProducto = $request->input('precioProducto');
        $producto->descripcionProducto = $request->input('descripcionProducto');
        $producto->idCategoria = $request->input('categoriaProducto');

        if ($request->hasFile('archmod')) {
            $imageName = time() . '.' . $request->file('archmod')->getClientOriginalExtension();
            $request->file('archmod')->move(public_path('assets/img'), $imageName);
            $producto->imgProducto = 'assets/img/' . $imageName;
        }

        $producto->save();

        return redirect()->route('admin.productos', $producto->idCategoria)
            ->with('success', 'Producto actualizado exitosamente.');
    }

    public function destroy($producto_id)
    {
        $producto = Producto::findOrFail($producto_id);

        
        if ($producto->imgProducto !== 'assets/img/noimagen.jpg') {
            $imagenPath = public_path($producto->imgProducto);
            if (file_exists($imagenPath)) {
                unlink($imagenPath);
            }
        }

        $producto->delete();

        return redirect()->route('admin.productos', $producto->idCategoria)
            ->with('success', 'Producto eliminado exitosamente.');
    }
}






