<?php

namespace Database\Seeders;

use App\Models\Empresa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Empresa::create([
            'nombre'=>'LISEGA',
            'descripcion'=>'Empresa la cual se dedica al rubro de ----------',
            'ruc'=>'123456789103',
            'domicilio_fiscal'=>'Jirón Orión 230, Lima 15023',
            'giro'=>'HEADHUNTER',
            'cantidad_trabajadores'=>120,
            'fecha_limite'=> '2023-10-05'



        ]);
    }
}
