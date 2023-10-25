<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function sub_dimension()
    {
        return $this->belongsTo(SubDimension::class);
    }

    public function dimension()
    {
        return $this->belongsTo(Dimension::class);
    }

    public function tipo_r_01()
    {
        return $this->belongsTo(TipoRespuesta::class);
    }

    public function tipo_r_02()
    {
        return $this->belongsTo(TipoRespuesta::class);
    }

    public function tipo_r_03()
    {
        return $this->belongsTo(TipoRespuesta::class);
    }

    public function tipo_r_04()
    {
        return $this->belongsTo(TipoRespuesta::class);
    }

    public function tipo_r_05()
    {
        return $this->belongsTo(TipoRespuesta::class);
    }
}
