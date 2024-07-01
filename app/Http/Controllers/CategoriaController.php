<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        // Obtener todas las categorías
        $categorias = Categoria::all();

        // Retornar la vista con las categorías
        return view('componentes', compact('categorias'));
    }

    public function index2()
    {
        // Obtener todas las categorías
        $categorias = Categoria::all();

        // Retornar la vista con las categorías
        return view('admin.categorias', compact('categorias'));
    }

    public function store(Request $request)
    {
    $request->validate([
        'nom' => 'required|string|max:255',
        'arch' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $categoria = new Categoria();
    $categoria->categoria = $request->input('nom');

    if ($request->hasFile('arch')) {
        $file = $request->file('arch');
        $imageName = time() . '.' . $file->getClientOriginalExtension();
        $filePath = 'assets/img/' . $imageName; // Ruta donde deseas almacenar el archivo

        // Mueve el archivo a la ubicación deseada
        $file->move(public_path('assets/img'), $imageName);

        $categoria->imgCategoria = $filePath;
    } else {
        // Si no se sube ninguna imagen, usar la imagen por defecto
        $categoria->imgCategoria = 'assets/img/noimagen.jpg';
    }

    $categoria->save();

    return redirect()->route('admin.categorias')->with('success', 'Categoría creada exitosamente.');
    }

    
    
    public function edit($id)
    {
        $categoria = Categoria::findOrFail($id);
        return view('admin.editCategoria', compact('categoria'));
    }

    public function update(Request $request, Categoria $categoria)
    {
    $request->validate([
        'nommod' => 'required|string|max:255',
        'archmod' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $categoria->categoria = $request->input('nommod');

    if ($request->hasFile('archmod')) {
        $file = $request->file('archmod');
        $imageName = time() . '.' . $file->getClientOriginalExtension();
        $filePath = 'assets/img/' . $imageName;
        $file->move(public_path('assets/img'), $imageName);

        $categoria->imgCategoria = $filePath;
    }

    $categoria->save();

    return redirect()->route('admin.categorias')->with('success', 'Categoría actualizada exitosamente.');
    }


    public function destroy($id)
{
    $categoria = Categoria::findOrFail($id);

    $imagenPath = public_path($categoria->imgCategoria);

    
    if ($categoria->imgCategoria !== 'assets/img/noimagen.jpg' && file_exists($imagenPath)) {
        
        unlink($imagenPath);
    }

    
    $categoria->delete();

    return redirect()->route('admin.categorias')->with('success', 'Categoría eliminada exitosamente.');
}
}





