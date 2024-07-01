@extends('layouts.main')

@section('content')

<main>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <h1 class="text-center pb-3">Ficha de Garantía</h1>
                <table class="table table-striped table-bordered shadow">
                    <tbody>
                        <tr>
                            <th>Nombre del producto:</th>
                            <td>{{ $nombreProducto }}</td>
                        </tr>
                        <tr>
                            <th>Modelo:</th>
                            <td>{{ $modelo }}</td>
                        </tr>
                        <tr>
                            <th>Fecha de compra:</th>
                            <td>{{ $fechaCompra }}</td>
                        </tr>
                        <tr>
                            <th>Compra en web:</th>
                            <td>{{ $web }}</td>
                        </tr>
                        <tr>
                            <th>Foto de la factura:</th>
                            @if($imagePath)
                                <td><img src="{{ asset($imagePath) }}" alt="Foto factura"></td>
                            @else
                                <td>No se adjuntó una imagen</td>
                            @endif
                        </tr>
                        <tr>
                            <th>Nombre del comprador:</th>
                            <td>{{ $nombreCliente }}</td>
                        </tr>
                        <tr>
                            <th>DNI:</th>
                            <td>{{ $dni }}</td>
                        </tr>
                        <tr>
                            <th>Teléfono Principal:</th>
                            <td>{{ $telefono }}</td>
                        </tr>
                        <tr>
                            <th>Email:</th>
                            <td>{{ $email }}</td>
                        </tr>
                        <tr>
                            <th>Dirección:</th>
                            <td>{{ $direccion }}</td>
                        </tr>
                    </tbody>
                </table>
                <div class="pt-4 text-center">
                    <p>Una vez enviado este formulario, por favor espere un período de hasta 3 días hábiles para que
                        nuestros representantes revisen su solicitud. Un miembro de nuestro equipo de Ninja Devices se
                        pondrá en contacto con usted, ya sea por teléfono o correo electrónico, para confirmar los
                        detalles y finalizar el proceso de revisión de la garantía de su producto. Agradecemos su interés en nuestros
                        servicios y estamos ansiosos por darle la devolución adecuada del producto.</p>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
