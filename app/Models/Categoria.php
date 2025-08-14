<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';
    
    protected $fillable = [
        'nome'
    ];

    public function armas()
    {
        return $this->hasMany(Arma::class);
    }
}
