<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avisos extends Model
{
    use HasFactory;

    protected $table = 'avisos';

    protected $fillable =[
        'titulo',
        'fecha_publicacion',
        'categoria_importancia',
        'descripcion',
        'vigilante_id'
    ];

    public function vigilante(){
        return $this->belongsTo(Vigilante::class);
    }
}
