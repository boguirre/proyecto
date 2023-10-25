<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dimension extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function preguntas()
    {
        return $this->hasMany(Pregunta::class);
    }

    public function sub_dimensions()
    {
        return $this->hasMany(SubDimension::class);
    }

}
