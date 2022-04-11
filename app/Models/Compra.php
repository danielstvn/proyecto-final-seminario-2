<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;

    protected $fillable = [
        'idCliente',
        'idProducto',
        'nombre',
        'tipo',
        'material',
        'color',
        'detalle',
        'img',
        'valor',
        'numcompra'
        
    ];
}
