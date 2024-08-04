@extends('layouts.main')

@section('content')
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center"><strong>{{ __('Registro') }}</strong></div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <!-- Name -->
                            <div class="mb-3">
                                <label for="name" class="form-label"><strong>{{ __('Nombre') }}</strong></label>
                                <input id="name" class="form-control" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" placeholder="Ingrese su nombre">
                                <x-input-error :messages="$errors->get('name')" class="mt-2 text-danger" />
                            </div>

                            <!-- Email Address -->
                            <div class="mb-3">
                                <label for="email" class="form-label"><strong>{{ __('Email') }}</strong></label>
                                <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" placeholder="Ingrese su correo electrónico">
                                <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
                            </div>

                            <!-- Password -->
                            <div class="mb-3">
                                <label for="password" class="form-label"><strong>{{ __('Contraseña') }}</strong></label>
                                <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" placeholder="Ingrese su contraseña">
                                <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
                            </div>

                            <!-- Confirm Password -->
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label"><strong>{{ __('Confirmar contraseña') }}</strong></label>
                                <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirme su contraseña">
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-danger" />
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrarme') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection




