<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programa_Educativo extends Model
{
    use HasFactory;

    protected $table = 'programa__educativos';

    protected $fillable = [
        'nombre_carrera',
        'clave_carrera'
    ];

    public function alumno(){
        return $this->belongsTo(Alumno::class);
    }
}
