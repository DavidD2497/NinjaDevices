@extends('layouts.main')

@section('content')

<main class="container mt-3 mb-3">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <h1 class="text-center">Panel ABM de Usuarios</h1>

            @if($usuarios->count() > 0)
                <table class="table table-striped table-bordered shadow mt-3">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Rol</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($usuarios as $usuario)
                            <tr>
                                <td>{{ $usuario->name }}</td>
                                <td>{{ $usuario->email }}</td>
                                <td>{{ $usuario->role }}</td>
                                <td class="text-center">
                                    @if($usuario->role == 'admin')
                                        <a href="{{ route('usuarios.makeUser', $usuario->id) }}" class="btn btn-sm btn-danger">Hacer Usuario</a>
                                    @else
                                        <a href="{{ route('usuarios.makeAdmin', $usuario->id) }}" class="btn btn-sm btn-success">Hacer Admin</a>
                                    @endif
                                    ||
                                    <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-link p-0 m-0" onclick="return confirm('¿Estás seguro de que deseas eliminar este usuario?');">
                                            <img src="{{ asset('assets/img/borrar.png') }}" alt="Eliminar" style="width: 20px; height: 20px;">
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p>No hay usuarios registrados.</p>
            @endif

            <!-- Formulario de creación de usuario -->
            <div class="card mt-4 mb-4 shadow">
                <div class="card-header">
                    <h4 class="mb-0 text-center">Crear nuevo usuario</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('usuarios.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label"><strong>Nombre</strong></label>
                            <input id="name" class="form-control" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" placeholder="Ingrese su nombre">
                            <x-input-error :messages="$errors->get('name')" class="mt-2 text-danger" />
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label"><strong>Email</strong></label>
                            <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" placeholder="Ingrese su correo electrónico">
                            <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label"><strong>Contraseña</strong></label>
                            <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" placeholder="Ingrese su contraseña">
                            <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
                        </div>

                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label"><strong>Confirmar contraseña</strong></label>
                            <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirme su contraseña">
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-danger" />
                        </div>

                        <div class="mb-3">
                            <label for="role" class="form-label"><strong>Rol</strong></label>
                            <select id="role" class="form-control" name="role" required>
                                <option value="" disabled selected>Seleccione un rol</option>
                                <option value="guest">Usuario</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Crear usuario</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection

