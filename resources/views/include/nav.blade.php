<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <figure><img src="{{ asset('assets/img/logo.png') }}" alt="logo" width="100"></figure>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') || Request::is('home') ? 'active' : '' }}" href="{{ route('home') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('quienes') ? 'active' : '' }}" href="{{ route('quienes') }}">Quiénes Somos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('servicios') ? 'active' : '' }}" href="{{ route('servicios') }}">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('componentes') ? 'active' : '' }}" href="{{ route('componentes') }}">Componentes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('contacto') ? 'active' : '' }}" href="{{ route('contacto') }}">Contacto</a>
                </li>
            </ul>

            @guest
                <a href="{{ route('login') }}" class="btn btn-light btnLogin ms-2">Login</a>
                <a href="{{ route('register') }}" class="btn btn-light btnLogin ms-2">Registrarme</a>
            @else
                <div class="dropdown ms-2">
                    <button class="btn btn-light btnLogin dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="{{ route('carrito.mostrar') }}">Ver carrito 🛒</a></li>
                        @if (Auth::user()->isAdmin())
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{ route('admin.usuarios') }}">Panel Usuarios</a></li>
                            <li><a class="dropdown-item" href="{{ route('admin.categorias') }}">Panel Categorias</a></li>
                        @endif
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            @endguest

        </div>
    </div>
</nav>








