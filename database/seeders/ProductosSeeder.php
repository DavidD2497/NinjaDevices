<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Seeder;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Monitores 

        Producto::create([
            
            'nombreProducto' => 'Gamer X',
            'precioProducto' => 25999,
            'descripcionProducto' => 'Monitor gaming ultra rápido con tiempo de respuesta de 1 ms y frecuencia de actualización de 144 Hz, ideal para una experiencia de juego fluida y envolvente.',
            'imgProducto' => 'assets/img/monitor1.jpg',
            'idCategoria' => 1,
        ]);


        Producto::create([
            
            'nombreProducto' => 'Profesional 4K',
            'precioProducto' => 39999,
            'descripcionProducto' => 'Monitor profesional con resolución 4K, reproducción de colores precisa y amplio ángulo de visión, ideal para diseño gráfico y edición de video.',
            'imgProducto' => 'assets/img/monitor2.jpg',
            'idCategoria' => 1,
        ]);

        Producto::create([
            'nombreProducto' => 'Monitor 144 hz',
            'precioProducto' => 17999,
            'descripcionProducto' => 'Monitor curvo con resolución HD, diseño ergonómico y tecnología de pantalla sin parpadeos para una experiencia visual cómoda y envolvente.',
            'imgProducto' => 'assets/img/monitor3.jpg',
            'idCategoria' => 1,
        ]);

        Producto::create([
            'nombreProducto' => 'Monitor 60 Hz',
            'precioProducto' => 17999,
            'descripcionProducto' => 'Monitor con frecuencia de actualización de 60 Hz, diseño HD, tecnología de pantalla sin parpadeos y experiencia visual cómoda.',
            'imgProducto' => 'assets/img/monitor4.jpg',
            'idCategoria' => 1,
        ]);


        // Mouses 

        Producto::create([
            'nombreProducto' => 'Gamer RGB',
            'precioProducto' => 9999,
            'descripcionProducto' => 'Mouse gaming con iluminación RGB personalizable, sensor óptico de alta precisión y diseño ergonómico para largas sesiones de juego.',
            'imgProducto' => 'assets/img/mouse1.jpg',
            'idCategoria' => 5,
        ]);

        Producto::create([
            'nombreProducto' => 'Profesional Inal',
            'precioProducto' => 6999,
            'descripcionProducto' => 'Mouse inalámbrico con conectividad Bluetooth, diseño ergonómico para uso prolongado y alta precisión en cualquier superficie.',
            'imgProducto' => 'assets/img/mouse2.jpg',
            'idCategoria' => 5,
        ]);

        Producto::create([
            'nombreProducto' => 'Vertical Ergo',
            'precioProducto' => 4499,
            'descripcionProducto' => 'Mouse ergonómico vertical diseñado para reducir la tensión muscular y prevenir lesiones por movimientos repetitivos.',
            'imgProducto' => 'assets/img/mouse3.jpg',
            'idCategoria' => 5,
        ]);

        Producto::create([
            'nombreProducto' => 'Económico USB',
            'precioProducto' => 1999,
            'descripcionProducto' => 'Mouse económico con conexión USB, diseño compacto y funcionalidad básica ideal para uso diario en oficina o hogar.',
            'imgProducto' => 'assets/img/mouse4.jpg',
            'idCategoria' => 5,
        ]);

        // Procesadores 

        Producto::create([
            'nombreProducto' => 'Intel Core i5',
            'precioProducto' => 10999,
            'descripcionProducto' => 'Procesador Intel Core i5 de última generación, ideal para multitarea y juegos, con tecnología avanzada y eficiencia energética.',
            'imgProducto' => 'assets/img/procesador2.jpg',
            'idCategoria' => 2,
        ]);

        Producto::create([
            'nombreProducto' => 'Intel Core i9',
            'precioProducto' => 23999,
            'descripcionProducto' => 'Procesador Intel Core i9 de alto rendimiento, perfecto para gaming y aplicaciones exigentes, con múltiples núcleos y velocidad de procesamiento.',
            'imgProducto' => 'assets/img/procesador4.jpg',
            'idCategoria' => 2,
        ]);

        Producto::create([
            'nombreProducto' => 'AMD Ryzen 5',
            'precioProducto' => 8999,
            'descripcionProducto' => 'Procesador AMD Ryzen 5 con arquitectura Zen 3, excelente rendimiento en juegos y tareas multitarea, ideal para entusiastas de la informática.',
            'imgProducto' => 'assets/img/procesador1.jpg',
            'idCategoria' => 2,
        ]);

        Producto::create([
            'nombreProducto' => 'AMD Ryzen 7',
            'precioProducto' => 14999,
            'descripcionProducto' => 'Procesador AMD Ryzen 7 con tecnología multihilo y alto rendimiento, diseñado para gamers y creadores de contenido que requieren potencia y eficiencia.',
            'imgProducto' => 'assets/img/procesador3.jpg',
            'idCategoria' => 2,
        ]);

        // Auriculares 


        Producto::create([
            'nombreProducto' => 'Gamer X',
            'precioProducto' => 7999,
            'descripcionProducto' => 'Auricular gaming con sonido envolvente 7.1, micrófono retráctil y luces RGB, diseñado para una experiencia inmersiva durante largas sesiones de juego.',
            'imgProducto' => 'assets/img/auricular1.jpg',
            'idCategoria' => 4,
        ]);

        Producto::create([
            'nombreProducto' => 'Bluetooth Prem',
            'precioProducto' => 4499,
            'descripcionProducto' => 'Auricular Bluetooth de alta calidad con cancelación activa de ruido, diseño ergonómico y batería de larga duración, ideal para música y llamadas.',
            'imgProducto' => 'assets/img/auricular2.jpg',
            'idCategoria' => 4,
        ]);

        Producto::create([
            'nombreProducto' => 'Deportivo Res',
            'precioProducto' => 2999,
            'descripcionProducto' => 'Auricular deportivo inalámbrico resistente al agua y al sudor, con ganchos para la oreja ajustables y calidad de sonido excepcional, perfecto para actividades al aire libre.',
            'imgProducto' => 'assets/img/auricular3.jpg',
            'idCategoria' => 4,
        ]);

        Producto::create([
            'nombreProducto' => 'Estéreo Eco',
            'precioProducto' => 1499,
            'descripcionProducto' => 'Auricular estéreo con cable y diseño ligero, cómodo y funcional para uso diario, ideal para escuchar música y realizar llamadas.',
            'imgProducto' => 'assets/img/auricular4.jpg',
            'idCategoria' => 4,
        ]);


        // Teclado 

        Producto::create([
            'nombreProducto' => 'Mecánico RGB',
            'precioProducto' => 11999,
            'descripcionProducto' => 'Teclado mecánico con retroiluminación RGB personalizable, switches mecánicos para respuesta táctil precisa y durabilidad excepcional, ideal para jugadores exigentes.',
            'imgProducto' => 'assets/img/teclado1.jpg',
            'idCategoria' => 3,
        ]);

        Producto::create([
            'nombreProducto' => 'Inalámbrico Comp',
            'precioProducto' => 6999,
            'descripcionProducto' => 'Teclado inalámbrico compacto con diseño delgado y ergonómico, conexión Bluetooth, ideal para uso móvil y escritura cómoda en cualquier lugar.',
            'imgProducto' => 'assets/img/teclado2.webp',
            'idCategoria' => 3,
        ]);

        Producto::create([
            'nombreProducto' => 'Gaming Pro',
            'precioProducto' => 8999,
            'descripcionProducto' => 'Teclado gaming profesional con teclas programables, reposamuñecas ergonómico, iluminación RGB y respuesta táctil rápida para mejorar la experiencia de juego.',
            'imgProducto' => 'assets/img/teclado3.jpg',
            'idCategoria' => 3,
        ]);

        Producto::create([
            'nombreProducto' => 'Ergo Silen',
            'precioProducto' => 4999,
            'descripcionProducto' => 'Teclado ergonómico con teclas de membrana silenciosas, diseño ergonómico para reducir la fatiga y aumentar la productividad durante largas sesiones de trabajo.',
            'imgProducto' => 'assets/img/teclado4.jpeg',
            'idCategoria' => 3,
        ]);
    }
}
