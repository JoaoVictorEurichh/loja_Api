<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Arma;
use App\Models\Categoria;

class ArmaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Buscar categorias
        $pistolas = Categoria::where('nome', 'Pistolas')->first();
        $rifles = Categoria::where('nome', 'Rifles')->first();
        $espingardas = Categoria::where('nome', 'Espingardas')->first();
        $facas = Categoria::where('nome', 'Facas')->first();
        $municoes = Categoria::where('nome', 'Munições')->first();
        $acessorios = Categoria::where('nome', 'Acessórios')->first();

        $armas = [
            // Pistolas
            [
                'categoria_id' => $pistolas->id,
                'nome' => 'Pistola Taurus PT100',
                'descricao' => 'Pistola semiautomática calibre .40 S&W',
                'preco' => 2500.00,
            ],
            [
                'categoria_id' => $pistolas->id,
                'nome' => 'Pistola Glock 17',
                'descricao' => 'Pistola semiautomática calibre 9mm',
                'preco' => 3500.00,
            ],
            // Rifles
            [
                'categoria_id' => $rifles->id,
                'nome' => 'Rifle Winchester Model 70',
                'descricao' => 'Rifle de precisão calibre .308',
                'preco' => 4500.00,
            ],
            // Espingardas
            [
                'categoria_id' => $espingardas->id,
                'nome' => 'Espingarda Mossberg 500',
                'descricao' => 'Espingarda pump action calibre 12',
                'preco' => 2800.00,
            ],
            // Facas
            [
                'categoria_id' => $facas->id,
                'nome' => 'Faca Bowie',
                'descricao' => 'Faca de caça com lâmina de 20cm',
                'preco' => 450.00,
            ],
            // Munições
            [
                'categoria_id' => $municoes->id,
                'nome' => 'Munição 9mm',
                'descricao' => 'Caixa com 50 munições 9mm',
                'preco' => 120.00,
            ],
            // Acessórios
            [
                'categoria_id' => $acessorios->id,
                'nome' => 'Mira Telescópica',
                'descricao' => 'Mira telescópica 4x32 para rifles',
                'preco' => 350.00,
            ],
        ];

        foreach ($armas as $arma) {
            Arma::create($arma);
        }
    }
}
