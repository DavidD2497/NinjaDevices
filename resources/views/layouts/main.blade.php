@include('include.head')
@include('include.nav')

<body class="d-flex flex-column min-vh-100">
    <div class="flex-grow-1">
        <div>
            @yield('content')
        </div>
    </div>
</body>

@include('include.footer')
