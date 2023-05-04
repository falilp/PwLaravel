<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pista extends Model
{
    use HasFactory;
    protected $table = 'pista';
    protected $primaryKey = 'codPista'; // definimos 'codPista' como la clave primaria
    protected $fillable = [
        'tipoPista',
        'precioHora',
        'disponible',
        'mensaje',
        'HoraDisponible',
        'created_at',
        'updated_at'
    ];
}

