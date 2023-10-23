<?php

namespace Database\Seeders;

use App\Models\SubDimension;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubDimensionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SubDimension::create([
            'dimension_id'=> 1,
            'descripcion'=>'COMUNICACION'
        ]);
        SubDimension::create([
            'dimension_id'=> 1,

            'descripcion'=>'GESTION'
        ]);
        SubDimension::create([
            'dimension_id'=> 1,

            'descripcion'=>'INTEGRIDAD'
        ]);
        SubDimension::create([
            'dimension_id'=> 2,

            'descripcion'=>'SOPORTE'
        ]);
        SubDimension::create([
            'dimension_id'=> 2,
            'descripcion'=>'AMBIENTE DE TRABAJO'
        ]);
        SubDimension::create([
            'dimension_id'=> 3,
            'descripcion'=>'EQUIDAD'
        ]);

        SubDimension::create([
            'dimension_id'=> 4,
            'descripcion'=>'TRABAJO INDIVIDUAL'
        ]);

        SubDimension::create([
            'dimension_id'=> 4,
            'descripcion'=>'TRABAJO EN EQUIPO'
        ]);

        SubDimension::create([
            'dimension_id'=> 4,
            'descripcion'=>'IMAGEN COORPORATIVA'
        ]);
        SubDimension::create([
            'dimension_id'=> 5,
            'descripcion'=>'COOPERACION'
        ]);
        SubDimension::create([
            'dimension_id'=> 6,
            'descripcion'=>'PREGUNTAS CORPORATIVAS'
        ]);
    }
}
