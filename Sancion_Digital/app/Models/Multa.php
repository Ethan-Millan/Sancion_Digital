<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Multa extends Model
{
    use HasFactory;

    protected $table = 'multas';

    protected $fillable = [
        'tipo_multa',
        'horas_servicio'
    ];

    public function sancion(){
        return $this->belongsTo(Sancion::class);
    }
}
