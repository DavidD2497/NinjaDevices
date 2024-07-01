@extends('layouts.main')

@section('content')

<main>
    <h1 class="text-center mt-3">Nuestros servicios</h1>
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner h-100">
            <div class="carousel-item active servicio1">
                <div class="col-lg-6 text-center">
                    <h2>Servicio de Consultoría y Asesoramiento</h2>
                    <p>Ofrecemos un servicio de consultoría y asesoramiento personalizado para ayudarte a encontrar las
                        mejores soluciones tecnológicas para tus necesidades. Nuestro equipo de expertos está aquí para
                        brindarte el apoyo y el conocimiento necesarios para optimizar tus sistemas y mejorar tu
                        experiencia de usuario.</p>
                </div>
            </div>
            <div class="carousel-item servicio2">
                <div class="col-lg-6 text-center">
                    <h2>Servicio de Venta de Hardware</h2>
                    <p>En Ninja PC Devices, nos especializamos en la venta y distribución de hardware de alta calidad.
                        Desde componentes para gaming hasta equipos profesionales, te ofrecemos una amplia gama de
                        productos para satisfacer todas tus necesidades tecnológicas. Nuestro objetivo es proporcionarte
                        los mejores productos del mercado.</p>
                </div>
            </div>
            <div class="carousel-item servicio3">
                <div class="col-lg-6 text-center">
                    <h2>Servicio de Mantenimiento y Soporte</h2>
                    <p>Sabemos lo importante que es mantener tus dispositivos en perfecto estado. Ofrecemos un servicio
                        de mantenimiento y soporte técnico para asegurar que tu hardware y software funcionen. Nuestro equipo de técnicos está disponible para resolver cualquier problema y garantizar
                        que tus sistemas operen sin interrupciones.</p>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Atras</span>
        </button>
    </div>
    <h2 class="text-center p-4">Preguntas frecuentes</h2>
    <div class="accordion container pb-4" id="accordionExample">
        <div class="accordion-item">
            <h3 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    ¿Cómo puedo comprar productos en Ninja PC Devices?
                </button>
            </h3>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>Comprar productos en Ninja PC Devices es fácil y seguro. Simplemente visita nuestro sitio web,
                        navega por nuestra amplia selección de productos y añade los artículos deseados a tu carrito de
                        compras. Luego, sigue el proceso de pago seguro para completar tu compra. Si necesitas ayuda,
                        nuestro equipo de atención al cliente está disponible para asistirte.</p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h3 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    ¿Cuál es la experiencia del personal técnico en Ninja PC Devices?
                </button>
            </h3>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>En Ninja PC Devices, contamos con un equipo altamente capacitado y experimentado en el sector
                        tecnológico. Nuestros técnicos tienen años de experiencia en la reparación, mantenimiento y
                        optimización de hardware y software. Todos los miembros de nuestro equipo están comprometidos en
                        proporcionar soluciones de calidad y en mantenerse actualizados con las últimas tendencias
                        tecnológicas.</p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h3 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    ¿Cómo garantizan la calidad de los productos en Ninja PC Devices?
                </button>
            </h3>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>La calidad es nuestra principal prioridad en Ninja PC Devices. Trabajamos con los mejores
                        fabricantes y proveedores del mercado para asegurarnos de que cada producto cumpla con los más
                        altos estándares de calidad. Además, realizamos rigurosas pruebas y controles de calidad en
                        todos nuestros productos antes de ponerlos a la venta para garantizar que cumplan con nuestras
                        expectativas y las de nuestros clientes.</p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h3 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    ¿Ofrecen servicios de instalación y configuración en Ninja PC Devices?
                </button>
            </h3>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>Sí, en Ninja PC Devices ofrecemos servicios de instalación y configuración para asegurarnos de
                        que tus nuevos dispositivos funcionen perfectamente desde el primer momento. Nuestro equipo de
                        expertos puede ayudarte a configurar tu sistema, instalar software y optimizar el rendimiento de
                        tus dispositivos. Contáctanos para más información sobre nuestros servicios de instalación y
                        configuración.</p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h3 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    ¿Cuál es el proceso de selección de productos en Ninja PC Devices?
                </button>
            </h3>
            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>En Ninja PC Devices, seguimos un proceso riguroso de selección de productos para asegurarnos de
                        que solo ofrecemos lo mejor a nuestros clientes. Evaluamos la calidad, el rendimiento y la
                        fiabilidad de cada producto, y trabajamos directamente con los fabricantes para obtener las
                        últimas innovaciones tecnológicas. Nuestro objetivo es proporcionarte productos que superen tus
                        expectativas y te ofrezcan la mejor experiencia posible.</p>
                </div>
            </div>
        </div>
    </div>

</main>

@endsection