<?php

namespace Database\Seeders;

use App\Models\Dimension;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DimensionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dimension::create([
            'descripcion'=>'CONFIANZA'
        ]);
        Dimension::create([
            'descripcion'=>'RESPETO'
        ]);
        Dimension::create([
            'descripcion'=>'EQUIDAD'
        ]);
        Dimension::create([
            'descripcion'=>'ORGULLO'
        ]);
        Dimension::create([
            'descripcion'=>'COOPERACION'
        ]);
        Dimension::create([
            'descripcion'=>'PREGUNTAS CORPORATIVAS'
        ]);
        
    }
}
