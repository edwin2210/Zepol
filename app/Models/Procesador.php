<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procesador extends Model
{
    use HasFactory;
    protected $table = 'procesador';
    protected $primaryKey = 'id';
    public $timestamps = false;
    
    protected $fillable = [
        'id_marca',
        'generacion',
        'modelo'
    ];
}
