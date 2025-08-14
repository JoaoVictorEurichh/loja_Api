<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoriaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aqui é onde você pode registrar rotas web para sua aplicação. Estas
| rotas são carregadas pelo RouteServiceProvider e todas elas irão
| ser atribuídas ao middleware "web". Faça algo ótimo!
|
*/

// Rota principal
Route::get('/', [HomeController::class, 'index']);

// Rota de teste "Hello World"
Route::get('/hello', [HomeController::class, 'hello']);

// Rotas para Categorias
Route::apiResource('categorias', CategoriaController::class);

// Rota de teste para verificar se o sistema está funcionando
Route::get('/teste', function () {
    return response()->json([
        'status' => 'sucesso',
        'mensagem' => 'Sistema de Loja de Armas funcionando corretamente!',
        'data_hora' => now()->format('d/m/Y H:i:s'),
        'versao_laravel' => app()->version(),
        'ambiente' => config('app.env'),
    ]);
});
