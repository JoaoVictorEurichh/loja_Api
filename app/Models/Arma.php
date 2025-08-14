<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Arma extends Model
{
    protected $table = 'armas';
    
    protected $fillable = [
        'nome',
        'descricao',
        'preco',
        'categoria_id'
    ];

    protected $casts = [
        'preco' => 'decimal:2',
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function pedidos()
    {
        return $this->belongsToMany(Pedido::class, 'arma_pedido')
                    ->withPivot('quantidade')
                    ->withTimestamps();
    }
}
