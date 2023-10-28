<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encuestado extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function genero()
    {
        return $this->belongsTo(Genero::class);
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }
}
