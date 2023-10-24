<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoRespuesta extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function preguntas()
    {
        return $this->hasMany(Pregunta::class);
    }
}
