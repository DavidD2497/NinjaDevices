@extends('layouts.main')

@section('content')
<main class="container mb-5 mt-3">
    <h1 class="text-center">Carrito de Compras</h1>

    @if(session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger text-center">
            {{ session('error') }}
        </div>
    @endif

    @if(!$carrito)
        <p class="text-center">No hay productos en el carrito.</p>
    @else
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Imagen</th>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Total</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($carrito as $id => $detalle)
                        <tr>
                            <td><img src="{{ asset($detalle['imagen']) }}" alt="{{ $detalle['nombre'] }}" width="50"></td>
                            <td>{{ $detalle['nombre'] }}</td>
                            <td>${{ $detalle['precio'] }}</td>
                            <td>
                                <form action="{{ route('carrito.actualizar', $id) }}" method="POST">
                                    @csrf
                                    <input type="number" name="cantidad" value="{{ $detalle['cantidad'] }}" class="form-control w-50 d-inline">
                                    <button type="submit" class="btn btn-primary btn-sm">Actualizar</button>
                                </form>
                            </td>
                            <td>${{ $detalle['precio'] * $detalle['cantidad'] }}</td>
                            <td>
                                <form action="{{ route('carrito.remover', $id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-between align-items-center">
            <h4>Total: ${{ $total }}</h4>
            <form action="{{ route('carrito.finalizar') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-success">Finalizar Compra</button>
            </form>
        </div>
    @endif
</main>
@endsection

