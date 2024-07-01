@extends('layouts.main')

@section('content')
<main class="container mt-3 mb-3">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <h1 class="text-center">Panel ABM de Categorias</h1>

            @if($categorias->count() > 0)
                <table class="table table-striped table-bordered shadow mt-3">
                    <thead>
                        <tr>
                            <th>Categoria</th>
                            <th>Modificar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categorias as $categoria)
                            <tr>
                                <td><a href="{{ route('admin.productos', $categoria->idCategoria) }}">{{ $categoria->categoria }}</a></td>
                                <td><a href="{{ route('admin.categorias.edit', $categoria->idCategoria) }}" class="btn btn-sm btn-primary">Modificar</a></td>
                                <td>
                                    <form action="{{ route('admin.categorias.destroy', $categoria->idCategoria) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar esta categoría?');">
                                            Eliminar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p>No hay categorías registradas.</p>
            @endif

            <!-- Formulario de creación de categoría -->
            <div class="card mt-4 mb-4 shadow">
                <div class="card-header">
                    <h4 class="mb-0 text-center">Crear nueva categoría</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.categorias.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="nom" class="form-label"><strong>Nombre de la categoría:</strong></label>
                            <input id="nom" name="nom" type="text" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="arch" class="form-label"><strong>Cargar imagen:</strong></label>
                            <input id="arch" name="arch" type="file" accept="image/*" class="form-control">
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Agregar categoría</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection



