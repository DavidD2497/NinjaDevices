@extends('layouts.main')

@section('content')

<main>
    <div class="portada">
        <div class="row container">
            <div class="col-lg-6">
                <h1>¡Bienvenido a Ninja Devices!</h1>
                <p class="lead">Nuestro objetivo es ayudar a sacar lo mejor de uno ofreciendo el mejor servicio.</p>
                <a href="{{ route('componentes') }}" class="btn btnContacto btn-dark btn-lg">Componentes</a>
            </div>
        </div>
    </div>

    <div class="portada2 py-5">
        <div class="container">
            <div class="row mensaje text-center rounded p-4">
                <div class="col-md-4">
                    <div>
                        <h2>Horarios Flexibles</h2>
                        <p>Adaptamos nuestros horarios para satisfacer tus necesidades.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div>
                        <h2>Integridad</h2>
                        <p>Creemos que la confianza es un factor clave para lograr el éxito.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div>
                        <h2>Innovación</h2>
                        <p>Siempre fomentamos nuevas ideas, adaptadas a la necesidades de la gente.</p>
                    </div>
                </div>
            </div>
            <div class="row text-center mt-4">
                <h2>¡Clientes felices!</h2>
                <div class="col-md-4">
                    <div class="card mb-2 shadow mt-2 h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-center pt-3">
                                <figure><img class="tm-people rounded-circle" src="{{ asset('assets/img/persona1.jpeg') }}" alt="persona">
                                </figure>
                            </div>
                            <p class="card-text pt-2">"Excelente servicio. Mi computadora es muy rápida. Gracias por
                                todo, lo recomiendo siempre."</p>
                        </div>
                        <div class="card-footer">
                            <p class="text-muted">- Juan Pérez</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow mt-2 h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-center pt-3">
                                <figure><img class="tm-people rounded-circle" src="{{ asset('assets/img/persona2.jpeg') }}" alt="persona">
                                </figure>
                            </div>
                            <p class="card-text pt-2">"Me compré unos auriculares y la calidad fue mucho mejor de lo esperada, los recomiendo."
                            </p>
                        </div>
                        <div class="card-footer">
                            <p class="text-muted">- María González</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow mt-2 h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-center pt-3">
                                <figure><img class="tm-people rounded-circle" src="{{ asset('assets/img/persona3.jpeg') }}" alt="persona">
                                </figure>
                            </div>
                            <p class="card-text pt-2">"Increible la atención del equipó, muy atentos en todo momento. ¡Gracias,
                                NinJa Devices!"</p>
                        </div>
                        <div class="card-footer">
                            <p class="text-muted">- Ana Rodríguez</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

@endsection