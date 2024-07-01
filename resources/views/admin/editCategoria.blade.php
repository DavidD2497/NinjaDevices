@extends('layouts.main')

@section('content')
<main class="container mt-5 mb-3">
    <div class="row align-items-center">
        <div class="col-lg-6 mx-auto my-auto">
            <form action="{{ route('admin.categorias.update', $categoria->idCategoria) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <fieldset class="rounded shadow p-3 mb-4">
                    <legend class="fw-bold">Modificar categoría: {{ $categoria->categoria }}</legend>
                    <div class="mb-3">
                        <label for="nommod" class="form-label">Nuevo nombre:</label>
                        <input id="nommod" name="nommod" type="text" value="{{ $categoria->categoria }}" class="form-control" required>
                    </div>
                    <div class="img-container mb-3">
                        <label for="imgActual" class="form-label">Imagen actual:</label>
                        <img src="{{ asset($categoria->imgCategoria) }}" alt="Imagen actual" class="img-thumbnail" style="width: 200px; height: 200px;">
                    </div>
                    <div class="mb-3">
                        <label for="archmod" class="form-label">Cargar nueva imagen:</label>
                        <input id="archmod" name="archmod" type="file" accept="image/jpg" class="form-control">
                    </div>
                    <input name="id" type="hidden" value="{{ $categoria->idCategoria }}">
                </fieldset>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Modificar</button>
                    <a href="{{ route('admin.categorias') }}" class="btn btn-danger">Volver</a>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection
