<?php

namespace Database\Seeders;

use App\Models\RangoEdad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RangoEdadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RangoEdad::create([
            'descripcion'=>'18-24'
        ]);

        RangoEdad::create([
            'descripcion'=>'25-30'
        ]);
        RangoEdad::create([
            'descripcion'=>'25-30'
        ]);
        RangoEdad::create([
            'descripcion'=>'31-40'
        ]);
        RangoEdad::create([
            'descripcion'=>'41-50'
        ]);
        RangoEdad::create([
            'descripcion'=>'51+'
        ]);
    }
}
