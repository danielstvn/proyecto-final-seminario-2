<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
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
        'numpedido'
        
    ];
}
