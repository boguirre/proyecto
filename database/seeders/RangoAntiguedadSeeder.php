<?php

namespace Database\Seeders;

use App\Models\RangoAntiguedad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RangoAntiguedadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RangoAntiguedad::create([
            'descripcion'=>'0-1'
        ]);
        RangoAntiguedad::create([
            'descripcion'=>'1-3'
        ]);
        RangoAntiguedad::create([
            'descripcion'=>'3-5'
        ]);
        RangoAntiguedad::create([
            'descripcion'=>'5-8'
        ]);
        RangoAntiguedad::create([
            'descripcion'=>'8+'
        ]);
    }
}
