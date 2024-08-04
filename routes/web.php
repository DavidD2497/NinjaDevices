<?php
use App\Http\Controllers\FormularioController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\OrdenController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Ruta principal
Route::get('/', function () {
    return view('home');
});

// Ruta de dashboard para usuarios normales
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/home', function () {
        return view('home');
    })->name('home');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Otras rutas públicas
Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/quienes', function () {
    return view('quienes');
})->name('quienes');

Route::get('/servicios', function () {
    return view('servicios');
})->name('servicios');

Route::get('/admin/usuarios', function () {
    if (Auth::check() && Auth::user()->isAdmin()) {
        return app(UsuarioController::class)->index();
    } else {
        return redirect('/error404');
    }
})->middleware(['auth'])->name('admin.usuarios');

Route::get('/admin/usuarios/{id}/make-user', [UsuarioController::class, 'makeUser'])->name('usuarios.makeUser');
Route::get('/admin/usuarios/{id}/make-admin', [UsuarioController::class, 'makeAdmin'])->name('usuarios.makeAdmin');
Route::delete('/admin/usuarios/{id}', [UsuarioController::class, 'destroy'])->name('usuarios.destroy');
Route::post('/admin/usuarios', [UsuarioController::class, 'store'])->name('usuarios.store');

Route::get('/admin/categorias', function () {
    if (Auth::check() && Auth::user()->isAdmin()) {
        return app(CategoriaController::class)->index2();
    } else {
        return redirect('/error404');
    }
})->middleware(['auth'])->name('admin.categorias');


Route::post('/admin/categorias', [CategoriaController::class, 'store'])->name('admin.categorias.store');
Route::put('categorias/{categoria}', [CategoriaController::class, 'update'])->name('admin.categorias.update');
Route::get('/admin/categorias/{categoria}/edit', [CategoriaController::class, 'edit'])->name('admin.categorias.edit');
Route::delete('/admin/categorias/{categoria}', [CategoriaController::class, 'destroy'])->name('admin.categorias.destroy');

Route::get('admin/categorias/{categoria}/productos', function ($categoria) {
    if (Auth::check() && Auth::user()->isAdmin()) {
        return app(ProductoController::class)->index2($categoria);
    } else {
        return redirect('/error404');
    }
})->middleware(['auth'])->name('admin.productos');


Route::post('admin/productos', [ProductoController::class, 'store'])
    ->name('admin.productos.store');
Route::get('admin/productos/{producto}/verProducto', [ProductoController::class, 'show'])
    ->name('admin.productos.vista');
Route::get('admin/productos/{producto}/edit', [ProductoController::class, 'edit'])
    ->name('admin.productos.edit');
Route::put('admin/productos/{producto}', [ProductoController::class, 'update'])
    ->name('admin.productos.update');
Route::delete('admin/productos/{producto}', [ProductoController::class, 'destroy'])
    ->name('admin.productos.destroy');


Route::get('/error404', function () {
    return view('error404');
})->name('error404');

Route::get('/componentes', [CategoriaController::class, 'index'])->name('componentes');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::post('/contacto', [FormularioController::class, 'store'])->name('contacto.store');

Route::get('/productos/{categoria}', [ProductoController::class, 'index'])->name('productos.index');


Route::post('/carrito/agregar/{id}', [OrdenController::class, 'agregarAlCarrito'])->name('carrito.agregar');
Route::get('/carrito', [OrdenController::class, 'mostrarCarrito'])->name('carrito.mostrar');
Route::post('/carrito/remover/{id}', [OrdenController::class, 'removerDelCarrito'])->name('carrito.remover');
Route::post('/carrito/actualizar/{id}', [OrdenController::class, 'actualizarCantidad'])->name('carrito.actualizar');
Route::post('/carrito/finalizar', [OrdenController::class, 'finalizarCompra'])->name('carrito.finalizar');



// Incluye el archivo de rutas de autenticación
require __DIR__ . '/auth.php';
