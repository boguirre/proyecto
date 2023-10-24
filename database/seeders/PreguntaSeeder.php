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
            'cod_num_preg' => 1,
            'descripcion' => '¿ Preguta sobre un tema ? '
        ]);

        Pregunta::create([
            'sub_dimension_id' => 2,
            'cod_num_preg' => 2,
            'descripcion' => '¿ Preguta sobre un tema ? '
        ]);

        Pregunta::create([
            'sub_dimension_id' => 3,
            'cod_num_preg' => 3,
            'descripcion' => '¿ Preguta sobre un tema ? '
        ]);

        Pregunta::create([
            'sub_dimension_id' => 4,
            'cod_num_preg' => 4,
            'descripcion' => '¿ Preguta sobre un tema ? '
        ]);

        Pregunta::create([
            'sub_dimension_id' => 5,
            'cod_num_preg' => 5,
            'descripcion' => '¿ Preguta sobre un tema ? '
        ]);

        Pregunta::create([
            'sub_dimension_id' => 6,
            'cod_num_preg' => 6,
            'descripcion' => '¿ Preguta sobre un tema ? '
        ]);


        Pregunta::create([
            'sub_dimension_id' => 7,
            'cod_num_preg' => 7,
            'descripcion' => '¿ Preguta sobre un tema ? '
        ]);


        Pregunta::create([
            'sub_dimension_id' => 8,
            'cod_num_preg' => 8,
            'descripcion' => '¿ Preguta sobre un tema ? '
        ]);


        Pregunta::create([
            'sub_dimension_id' => 9,
            'cod_num_preg' => 9,
            'descripcion' => '¿ Preguta sobre un tema ? '
        ]);

        Pregunta::create([
            'sub_dimension_id' => 10,
            'cod_num_preg' => 10,
            'descripcion' => '¿ Preguta sobre un tema ? '
        ]);


        Pregunta::create([
            'sub_dimension_id' => 11,
            'cod_num_preg' => 11,
            'descripcion' => '¿ Preguta sobre un tema ? '
        ]);



        
    }
}
