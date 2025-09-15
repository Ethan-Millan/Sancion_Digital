<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vigilante extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'cargo'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function avisos(){
        return $this->hasOne(Avisos::class);
    }
}
