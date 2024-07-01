@extends('layouts.main')

@section('content')

<main>
    <div class="formulario">
        <div class="row">
            <div class="col-lg-6">
                <div class="text-center m-3">
                    <h1>Formulario de Garantía</h1>
                </div>
                <form class="px-5" id="formGarantia" method="post" action="{{ route('contacto.store') }}" enctype="multipart/form-data">
                @csrf
                    <fieldset class="border border-secondary rounded shadow p-3 mb-4">
                        <legend class="fw-bold">Datos del Producto</legend>
                        <div class="mb-2">
                            <label for="nombreProducto" class="form-label">Nombre del Producto:</label>
                            <input id="nombreProducto" type="text" class="form-control" name="nombreProducto" placeholder="Nombre del Producto">
                        </div>
                        <div class="mb-2">
                            <label for="modelo" class="form-label">Modelo:</label>
                            <input id="modelo" type="text" class="form-control" name="modelo" placeholder="Modelo">
                        </div>
                        <div class="mb-2">
                            <label for="fechaCompra" class="form-label">Fecha de Compra:</label>
                            <input id="fechaCompra" type="date" class="form-control" name="fechaCompra">
                        </div>
                        <p>¿La compra fue por nuestra web?</p>
                        <div class="form-check">
                            <input class="form-check-input" id="si" type="radio" name="web" value="Si">
                            <label class="form-check-label" for="si">Si</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" id="no" type="radio" name="web" value="No">
                            <label class="form-check-label" for="no">No</label>
                        </div>
                        <div class="mb-3">
                            <label for="img" class="form-label">Cargar Factura:</label>
                            <input id="img" accept="image/jpeg" type="file" class="form-control" name="img">
                        </div>
                    </fieldset>

                    <fieldset class="border border-secondary rounded shadow p-3 mb-4">
                        <legend class="fw-bold">Datos del Cliente</legend>
                        <div class="mb-2">
                            <label for="nombreCliente" class="form-label">Nombre Completo:</label>
                            <input id="nombreCliente" type="text" class="form-control" name="nombreCliente" placeholder="Nombre Completo">
                        </div>
                        <div class="mb-2">
                            <label for="dni" class="form-label">Dni:</label>
                            <input id="dni" type="text" class="form-control" name="dni" placeholder="DNI">
                        </div>
                        <div class="mb-2">
                            <label for="telefono" class="form-label">Teléfono:</label>
                            <input id="telefono" type="text" class="form-control" name="telefono" placeholder="Teléfono">
                        </div>
                        <div class="mb-2">
                            <label for="email" class="form-label">Correo Electrónico:</label>
                            <input id="email" type="email" class="form-control" name="email" placeholder="Correo Electrónico">
                        </div>
                        <div class="mb-3">
                            <label for="direccion" class="form-label">Dirección:</label>
                            <input id="direccion" type="text" class="form-control" name="direccion" placeholder="Dirección">
                        </div>
                    </fieldset>
                

                    <button type="submit" id="botonContacto" class="btn btnFormulario btn-primary">Enviar</button>
                </form>
                <script>
                    var botonContacto = document.getElementById("botonContacto");
                    var formGarantia = document.getElementById("formGarantia");
                    botonContacto.onclick = function() {
                        formGarantia.action = "{{ route('contacto.store') }}";
                    }                           
                </script>
            </div>
            <div class="col-lg-6">
                <figure class="d-flex align-items-stretch h-100 image-container">
                    <img src="{{ asset('assets/img/portada3.jpg') }}" alt="periferico3" class="img-fluid">
                </figure>
            </div>
        </div>
        <div>
            <div class="container">
                <div class="text-center mt-5 mb-4">
                    <h2>Ubicacion</h2>
                </div>
                <div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2361.4440439040504!2d-58.67257512131474!3d-34.40878603637768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bca168c51ed607%3A0x592102df6598807b!2sNordelta%20%2F%20Barrio%20Las%20Tipas!5e0!3m2!1ses!2sar!4v1695496570195!5m2!1ses!2sar"
                        height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                        class="w-100 shadow rounded"></iframe>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-12 text-center">
                    <p>Puedes contactarnos en cualquier momento.</p>
                    <p>Teléfono: <span class="fw-bold">11 4456-7890</span></p>
                    <p>Correo Electrónico: <a href="mailto:patasfelices@davinci.edu.ar">ninjadevices@davinci.edu.ar</a>
                    </p>
                    <figure>
                        <img src="{{ asset('assets/img/contacto.png') }}" alt="Teléfono">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection