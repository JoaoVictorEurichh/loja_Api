<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();
        return response()->json($categorias);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:100|unique:categorias',
            'descricao' => 'nullable|string',
        ]);

        $categoria = Categoria::create($request->all());
        return response()->json($categoria, 201);
    }

    public function show(Categoria $categoria)
    {
        return response()->json($categoria);
    }

    public function update(Request $request, Categoria $categoria)
    {
        $request->validate([
            'nome' => 'required|string|max:100|unique:categorias,nome,' . $categoria->id,
            'descricao' => 'nullable|string',
        ]);

        $categoria->update($request->all());
        return response()->json($categoria);
    }

    public function destroy(Categoria $categoria)
    {
        $categoria->delete();
        return response()->json(null, 204);
    }
}
