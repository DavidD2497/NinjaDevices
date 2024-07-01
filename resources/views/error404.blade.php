@extends('layouts.main')

@section('content')

<main class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body text-center">
                    <h2 class="card-title">No tienes permisos para acceder a esa dirección</h2>
                    <p class="card-text">Por favor, verifica tus permisos o contacta al administrador.</p>
                    <a href="{{ route('home') }}" class="btn btn-primary">Ir al inicio</a>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection