@extends('layouts.main')

@section('content')
<main class="container mt-3 mb-3">
    <div class="row">
        <div class="col">
            <h1 class="text-center">Panel ABM</h1>

            @if(isset($producto))
                <h2 class="text-center">
                    <a href="{{ route('admin.categorias') }}" class="text-decoration-none categ">Categorías</a> »
                    <a href="{{ route('admin.productos', $producto->idCategoria) }}" class="text-decoration-none categ">Productos</a> » Producto
                </h2>
                <div class="card col-lg-4 mx-auto mt-3">
                    <img src="{{ asset($producto->imgProducto) }}" class="card-img-top" alt="Imagen del Producto">
                    <div class="card-body">
                        <h3 class="card-title">{{ $producto->nombreProducto }}</h3>
                        <p class="card-text">Precio: ${{ $producto->precioProducto }}</p>
                        <p class="card-text">Descripción: {{ $producto->descripcionProducto }}</p>
                    </div>
                </div>
                <div class="text-center mt-2">
                    <a href="{{ route('admin.productos', $producto->idCategoria) }}" class="btn btnFormulario btn-danger mx-auto">Volver</a>
                </div>
            @endif
        </div>
    </div>
</main>
@endsection
