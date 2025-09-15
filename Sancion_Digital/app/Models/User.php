<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'users';

    protected $fillable = [
        'matricula',
        'nombres',
        'apellidos',
        'fecha_nacimiento',
        'genero',
        'email',
        'password',
        'tipo_usaurio'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function alumno(){
        return $this->hasOne(Alumno::class);
    }

    public function vigilatnte(){
        return $this->hasOne(Vigilante::class);
    }
}
