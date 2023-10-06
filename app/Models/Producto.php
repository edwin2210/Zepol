<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{


    
    use HasFactory;
    protected $table = 'prodcuto';
    protected $primaryKey = 'id';
    public $timestamps = false;
    
    protected $fillable = [
        
        'id_tipo',
        'modelo',
        'id_marca',
        'memoria_ram',
        'tipo_almacenamiento',
        'capacidad',
        'id_procesador',
        'diagonal_pantalla',
        'touchtiny',
        'id_tarjeta',
        'id_teclado',
        'resoluccion',
        'so',
        'cantidad',
        'precio'
    ];
}
