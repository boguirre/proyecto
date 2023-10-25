<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Pregunta;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'admin@gmail.com',
            'password' => 123456789
        ]);

        $this->call([
            AreasSeeder::class,
            EmpresaSeeder::class,
            GeneroSeeder::class,
            RangoEdadSeeder::class,
            RangoAntiguedadSeeder::class,
            TipoRespuestaSeeder::class,
            DimensionSeeder::class,
            SubDimensionSeeder::class,
            PreguntaSeeder::class
        ]);
    }
}
