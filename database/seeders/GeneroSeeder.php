<?php

namespace Database\Seeders;

use App\Models\Genero;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genero::create([
            'descripcion'=>'FEMENINO'
        ]);
        Genero::create([
            'descripcion'=>'MASCULINO'
        ]);
        Genero::create([
            'descripcion'=>'OTRO'
        ]);
        Genero::create([
            'descripcion'=>'PREFIERO NO DECIR'
        ]);
    }
}
