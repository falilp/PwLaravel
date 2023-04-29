<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Crypt;
use Laravel\Sanctum\HasApiTokens;

class usuarios extends Model{
    use HasApiTokens;
    use HasFactory;
    //use HasProfilePhoto;
    use Notifiable;
    //use TwoFactorAuthenticatable;

    protected $fillable = ['nombre', 'apellidos', 'email', 'telefono', 'password', 'Permisos'];
    protected $hidden = ['password','Permisos'];

    public function setPasswordAttribute($value){
        $this->attributes['password'] = bcrypt($value);
    }
}
