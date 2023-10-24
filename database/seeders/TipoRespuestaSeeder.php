<?php

namespace Database\Seeders;

use App\Models\TipoRespuesta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoRespuestaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TipoRespuesta::create([
            'descripcion' => 'Muy Malo'
        ]);

        TipoRespuesta::create([
            'descripcion' => 'Malo'
        ]);

        TipoRespuesta::create([
            'descripcion' => 'Regular'
        ]);

        TipoRespuesta::create([
            'descripcion' => 'Bueno'
        ]);
        
        TipoRespuesta::create([
            'descripcion' => 'Muy Bien'
        ]);



        
    }
}
