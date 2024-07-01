@extends('layouts.main')

@section('content')
<main class="container mt-3 mb-3">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <h1 class="text-center">Modificar Producto</h1>

            <div class="card mt-4 mb-4 shadow">
                <div class="card-header">
                    <h4 class="mb-0 text-center">Editar producto: {{ $producto->nombreProducto }}</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.productos.update', $producto->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="nombreProducto" class="form-label"><strong>Nombre del producto:</strong></label>
                            <input id="nombreProducto" name="nombreProducto" type="text" class="form-control" value="{{ $producto->nombreProducto }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="precioProducto" class="form-label"><strong>Precio del producto:</strong></label>
                            <input id="precioProducto" name="precioProducto" type="number" step="0.01" class="form-control" value="{{ $producto->precioProducto }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="descripcionProducto" class="form-label"><strong>Descripción del producto:</strong></label>
                            <textarea id="descripcionProducto" name="descripcionProducto" class="form-control" required>{{ $producto->descripcionProducto }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="imgActual" class="form-label"><strong>Imagen actual:</strong></label>
                            <br>
                            <img src="{{ asset($producto->imgProducto) }}" alt="Imagen actual" class="img-thumbnail" style="max-width: 300px;">
                        </div>
                        <div class="mb-3">
                            <label for="archmod" class="form-label"><strong>Actualizar imagen:</strong></label>
                            <input id="archmod" name="archmod" type="file" accept="image/*" class="form-control">
                        </div>
                        <input type="hidden" name="categoriaProducto" value="{{ $producto->idCategoria }}">
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Guardar cambios</button>
                            <a href="{{ route('admin.productos', $producto->idCategoria) }}" class="btn btn-danger">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

