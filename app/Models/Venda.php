<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    use HasFactory;

    protected $fillable = [
        'venda_id',
        'produto',
        'marca',
        'preco',
        'quantidade',
        'total',
        'tipo_venda',
        'codigo_barra',
    ];

    

}
