@extends('layouts.main')

@section('content')

<main>
    <div class="portada3">
        <div class="row container justify-content-end">
            <div class="col-lg-6 text-center">
                <h1>Nuestra Historia</h1>
                <p>En Ninja Devices, nuestra historia comienza en el año 2012, cuando un grupo de tres amigos: Tomás,
                    David y Vicky, compartieron una visión común de crear una empresa que ofreciera soluciones
                    innovadoras para la tecnología y los gamers.</p>
                <p>En 2012, comenzamos a vender a nivel local, y en 2016 expandimos nuestras ventas a nivel
                    internacional. Durante la pandemia de 2020, logramos convertirnos en líderes del mercado debido a la
                    gran demanda de componentes.</p>
                <p>Hoy en día, seguimos siendo líderes del mercado y contamos con una gran cantidad de clientes. Estamos
                    orgullosos de la comunidad que hemos construido y esperamos continuar ofreciendo soluciones
                    tecnológicas de vanguardia por muchas décadas más.</p>
            </div>
        </div>
    </div>
    <div class="container py-4">
        <h2 class="text-center pb-2">Nuestro Equipo</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 shadow h-100 text-center">
                    <figure><img src="{{ asset('assets/img/equipo1.jpg') }}" alt="Miembro del equipo" class="card-img-top"></figure>
                    <div class="card-body">
                        <h2 class="card-title">Tomas Rudilla</h2>
                        <p class="card-text">Tomas es un apasionado de la tecnología y los videojuegos, con más de 15
                            años de experiencia en la industria. Su amor por la innovación y su dedicación para crear
                            soluciones tecnológicas avanzadas son fundamentales para el éxito de Ninja Devices. Tomas
                            se asegura de que cada cliente reciba productos de alta calidad y disfrute de una
                            experiencia de usuario excepcional.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow h-100 text-center">
                    <figure><img src="{{ asset('assets/img/equipo2.jpg') }}" alt="Miembro del equipo" class="card-img-top"></figure>
                    <div class="card-body">
                        <h2 class="card-title">Victoria Ledesma</h2>
                        <p class="card-text">Victoria es una apasionada de la tecnología con un talento innato para
                            entender y optimizar sistemas informáticos. Ha trabajado en el sector tecnológico durante
                            más de 10 años. Su paciencia y atención al detalle son invaluables para asegurar que cada
                            dispositivo funcione de manera óptima y satisfaga las necesidades de nuestros clientes.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow h-100 text-center">
                    <figure><img src="{{ asset('assets/img/equipo3.jpg') }}" alt="Miembro del equipo" class="card-img-top"></figure>
                    <div class="card-body">
                        <h2 class="card-title">David da Silva</h2>
                        <p class="card-text">David es un experto en hardware y software con más de 10 años de
                            experiencia en la industria tecnológica. Su pasión por la tecnología y su habilidad para
                            resolver problemas complejos lo convierten en una pieza clave para el éxito de Ninja
                            Devices. David trabaja incansablemente para asegurarse de que cada producto esté a la
                            vanguardia y cumpla con los más altos estándares de calidad.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center">
                    <h2>Nuestra Misión</h2>
                    <p>Nuestra misión en Ninja Devices es buscar ayudar a sacar lo mejor
                        de uno proveyendo el mejor servicio. Creemos en el poder de la tecnologia como fuente de
                        inteligencia y comunicacion.</p>
                </div>
                <div class="col-md-6 text-center">
                    <h2>Nuestros Valores</h2>
                    <ul class="valores">
                        <li><strong>Innovacion:</strong> Siempre fomentamos nuevas ideas.</li>
                        <li><strong>Integridad:</strong> Creemos que la confianza es un factor clave para lograr el
                            éxito.</li>
                        <li><strong>Sustentabilidad:</strong> Compromiso responsable y sostenible con el medio ambiente.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection