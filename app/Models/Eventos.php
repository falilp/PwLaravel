<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eventos extends Model
{
    use HasFactory;
    protected $table="evento";
    protected $fillable = [
        'codEvento',
        'codPista',
        'FechaEvento',
        'Descripcion',
        'categoria',
        'codUsuario',
        'updated_at',
        'updated_at'
    ];
}