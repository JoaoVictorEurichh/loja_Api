<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Arma;
use App\Models\Cliente;
use App\Models\Pedido;

class HomeController extends Controller
{
    public function index()
    {
        // Dados de teste em memória para demonstrar a configuração inicial
        $dadosTeste = [
            'mensagem' => 'Bem-vindo à Loja de Armas - Sistema de Controle de Estoque',
            'estatisticas' => [
                'total_categorias' => Categoria::count(),
                'total_armas' => Arma::count(),
                'total_clientes' => Cliente::count(),
                'total_pedidos' => Pedido::count(),
            ],
            'armas_recentes' => Arma::with('categoria')->latest()->take(5)->get(),
            'categorias' => Categoria::all(),
        ];

        return response()->json($dadosTeste);
    }

    public function hello()
    {
        return response()->json([
            'mensagem' => 'Olá Mundo! Sistema de Loja de Armas funcionando corretamente.',
            'data' => now()->format('d/m/Y H:i:s'),
            'versao' => '1.0.0'
        ]);
    }
}
