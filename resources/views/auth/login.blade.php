@extends('layouts.main')

@section('content')
<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center"><strong>{{ __('Iniciar Sesión') }}</strong></div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <!-- Email Address -->
                            <div class="mb-3">
                                <label for="email" class="form-label"><strong>{{ __('Email') }}</strong></label>
                                <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
                                <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
                            </div>

                            <!-- Password -->
                            <div class="mb-3">
                                <label for="password" class="form-label"><strong>{{ __('Contraseña') }}</strong></label>
                                <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password">
                                <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
                            </div>               

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Ingresar') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
