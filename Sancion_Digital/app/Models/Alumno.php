<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    protected $table = 'alumnos';

    protected $fillable = [
        'grado',
        'grupo',
        'id_programa_educativo'
    ];

    public function user(){
        return $this->belongsTo(User::class); 
    }
    public function programa_educativo(){
        return $this->hasOne(Programa_Educativo::class);
    }
}
