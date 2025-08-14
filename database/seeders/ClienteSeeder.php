<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cliente;
use Illuminate\Support\Facades\Hash;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clientes = [
            [
                'nome' => 'João Silva Santos',
                'email' => 'joao.silva@email.com',
                'senha' => Hash::make('123456'),
            ],
            [
                'nome' => 'Maria Oliveira Costa',
                'email' => 'maria.oliveira@email.com',
                'senha' => Hash::make('123456'),
            ],
            [
                'nome' => 'Carlos Ferreira Lima',
                'email' => 'carlos.ferreira@email.com',
                'senha' => Hash::make('123456'),
            ],
            [
                'nome' => 'Ana Paula Santos',
                'email' => 'ana.santos@email.com',
                'senha' => Hash::make('123456'),
            ],
            [
                'nome' => 'Roberto Almeida',
                'email' => 'roberto.almeida@email.com',
                'senha' => Hash::make('123456'),
            ],
        ];

        foreach ($clientes as $cliente) {
            Cliente::create($cliente);
        }
    }
}
