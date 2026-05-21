<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'nome',
        'marca',
        'categoria',
        'preco',
        'estoque',
        'descricao',
        'imagem',
    ];
}