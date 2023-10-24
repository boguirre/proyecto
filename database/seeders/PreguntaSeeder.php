<?php

namespace Database\Seeders;

use App\Models\Pregunta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PreguntaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pregunta::create([
            'sub_dimension_id' => 1,
            'descripcion' => '¿ Preguta sobre un tema ? '
        ]);

        Pregunta::create([
            'sub_dimension_id' => 2,
            'descripcion' => '¿ Preguta sobre un tema ? '
        ]);

        Pregunta::create([
            'sub_dimension_id' => 3,
            'descripcion' => '¿ Preguta sobre un tema ? '
        ]);

        Pregunta::create([
            'sub_dimension_id' => 4,
            'descripcion' => '¿ Preguta sobre un tema ? '
        ]);

        Pregunta::create([
            'sub_dimension_id' => 5,
            'descripcion' => '¿ Preguta sobre un tema ? '
        ]);

        Pregunta::create([
            'sub_dimension_id' => 6,
            'descripcion' => '¿ Preguta sobre un tema ? '
        ]);


        Pregunta::create([
            'sub_dimension_id' => 7,
            'descripcion' => '¿ Preguta sobre un tema ? '
        ]);


        Pregunta::create([
            'sub_dimension_id' => 8,
            'descripcion' => '¿ Preguta sobre un tema ? '
        ]);


        Pregunta::create([
            'sub_dimension_id' => 9,
            'descripcion' => '¿ Preguta sobre un tema ? '
        ]);

        Pregunta::create([
            'sub_dimension_id' => 10,
            'descripcion' => '¿ Preguta sobre un tema ? '
        ]);


        Pregunta::create([
            'sub_dimension_id' => 11,
            'descripcion' => '¿ Preguta sobre un tema ? '
        ]);



        
    }
}
