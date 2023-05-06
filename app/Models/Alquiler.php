<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alquiler extends Model
{
    use HasFactory;
    protected $table="alquiler";
    protected $primaryKey = 'codPista';
    protected $fillable = [
        'codUsuario',
        'fecha_alquiler',
        'precio',
        'descuento',
        'created_at',
        'updated_at'
    ];
}
