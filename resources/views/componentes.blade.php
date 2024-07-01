@extends('layouts.main')

@section('content')
    <main class="container text-center mb-5 mt-3">
        <h1>Categorías</h1>
        <div class="container">
        <div class="row row-cols-1 row-cols-md-2 g-4 justify-content-center">
            @foreach($categorias as $categoria)
                <div class="col-md-6 col-lg-4">
                    <a href="{{ route('productos.index', ['categoria' => $categoria->idCategoria, 'nombre' => $categoria->categoria]) }}" class="nombreCat">
                        <div class="card card-categorias shadow mt-3">
                            <img src="{{$categoria->imgCategoria}}" alt="{{ $categoria->categoria }}" class="card-img-top">
                            <div class="card-body">
                                <h2>{{ $categoria->categoria }}</h2>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        </div>
    </main>
@endsection
