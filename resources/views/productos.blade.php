@extends('layouts.main')

@section('content')
    <main class="container text-center mb-5 mt-3">
        <h1><a href="{{ route('componentes') }}" class='text-decoration-none categ'>Categorías</a> »{{ $categoria->categoria }}</h1>
        <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-3 justify-content-center">
            @foreach ($productos as $producto)
                <div class="col-md-4 col-lg-3">
                    <div class="card card-productos shadow mt-3">
                        <img src="{{ asset($producto->imgProducto) }}" alt="{{ $producto->nombreProducto }}" class="card-img-top">
                        <div class="card-body">
                            <h2>{{ $producto->nombreProducto }}</h2>
                            <p class="precio">$ {{ $producto->precioProducto }}</p>
                            <p class="descripcion">{{ $producto->descripcionProducto }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        </div>
    </main>
@endsection



