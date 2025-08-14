<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    
    protected $fillable = [
        'nome',
        'email',
        'senha'
    ];

    protected $hidden = [
        'senha'
    ];

    public function pedidos()
    {
        return $this->hasMany(Pedido::class);
    }
}
