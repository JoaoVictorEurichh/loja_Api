<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categorias = [
            'Pistolas',
            'Rifles',
            'Espingardas',
            'Facas',
            'Munições',
            'Acessórios',
            'Armas de Coleção',
            'Equipamentos de Segurança'
        ];

        foreach ($categorias as $nome) {
            Categoria::create(['nome' => $nome]);
        }
    }
}
