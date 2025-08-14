<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'pedidos';
    
    protected $fillable = [
        'cliente_id',
        'data_pedido'
    ];

    protected $casts = [
        'data_pedido' => 'datetime',
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function armas()
    {
        return $this->belongsToMany(Arma::class, 'arma_pedido')
                    ->withPivot('quantidade')
                    ->withTimestamps();
    }
}
