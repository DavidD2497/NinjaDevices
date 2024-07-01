@extends('layouts.main')

@section('content')
<main class="container mt-3 mb-3">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <h1 class="text-center">Panel ABM de Productos</h1>
            <h2 class="text-center"><a href="{{ route('admin.categorias') }}" class="text-decoration-none categ">Panel Categorías</a> » {{ $categoria->categoria }}</h2>

            @if($productos->count() > 0)
                <table class="table table-striped table-bordered shadow mt-3">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Modificar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($productos as $producto)
                            <tr>
                                <td><a href="{{ route('admin.productos.vista', $producto->id) }}">{{ $producto->nombreProducto }}</a></td>
                                <td><a href="{{ route('admin.productos.edit', $producto->id) }}" class="btn btn-sm btn-primary">Modificar</a></td>
                                <td>
                                    <form action="{{ route('admin.productos.destroy', $producto->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este producto?');">
                                            Eliminar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p>No hay productos registrados en esta categoría.</p>
            @endif


            <div class="card mt-4 mb-4 shadow">
                <div class="card-header">
                    <h4 class="mb-0 text-center">Agregar nuevo producto</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.productos.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="nombreProducto" class="form-label"><strong>Nombre del producto:</strong></label>
                            <input id="nombreProducto" name="nombreProducto" type="text" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="precioProducto" class="form-label"><strong>Precio del producto:</strong></label>
                            <input id="precioProducto" name="precioProducto" type="number" step="0.01" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="descripcionProducto" class="form-label"><strong>Descripción del producto:</strong></label>
                            <textarea id="descripcionProducto" name="descripcionProducto" class="form-control" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="arch" class="form-label"><strong>Cargar imagen:</strong></label>
                            <input id="arch" name="arch" type="file" accept="image/*" class="form-control">
                        </div>
                        <input type="hidden" name="categoriaProducto" value="{{ $categoria->idCategoria }}">
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Agregar producto</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection




