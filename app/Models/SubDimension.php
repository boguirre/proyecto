<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubDimension extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function dimensiones(){
        return $this->belongsTo(Dimension::class,'dimension_id');
    }

    public function preguntas()
    {
        return $this->hasMany(Pregunta::class);
    }

    public function dimension()
    {
        return $this->belongsTo(Dimension::class);
    }
}
