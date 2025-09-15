<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sancion extends Model
{
    use HasFactory;

    protected $table = 'sanciones';

    protected $fillable = [
        'alumno_id',
        'vigilante_id',
        'fecha_multa',
        'descripcion',
        'pagada',
        'avisado',
        'multa_id'
    ];

    public function multas(){
        return $this->hasMany(Multa::class);
    }
}
