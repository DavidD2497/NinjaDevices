<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create([
            'categoria' => 'Monitores',
            'imgCategoria' => 'assets/img/monitores.jpeg',
        ]);

        Categoria::create([
            'categoria' => 'Procesadores',
            'imgCategoria' => 'assets/img/procesadores.jpeg',
        ]);

        Categoria::create([
            'categoria' => 'Teclados',
            'imgCategoria' => 'assets/img/teclados.jpeg',
        ]);

        Categoria::create([
            'categoria' => 'Auriculares',
            'imgCategoria' => 'assets/img/auriculares.jpeg',
        ]);

        Categoria::create([
            'categoria' => 'Mouses',
            'imgCategoria' => 'assets/img/mouses.jpeg',
        ]);
    }
}

