<?php

namespace App\Http\Controllers;

use App\Exports\EncuestaExport;
use App\Models\Area;
use App\Models\Empresa;
use App\Models\Encuestado;
use App\Models\Genero;
use App\Models\Pregunta;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class EncuestaController extends Controller
{
    public function index()
    {
        $preguntas = Pregunta::where('estado', 1)
            ->orderBy('cod_num_preg', 'asc')
            ->get();
        $generos = Genero::all();
        $areas = Area::all();

        $encuestas = Encuestado::all()->count();
        $empresa = Empresa::all()->first();

        $cantidad_encuestados = $empresa->cantidad_trabajadores;


        $añoActual = Carbon::now('America/Lima')->format('d-m-Y');

        $fechaLimite = Carbon::createFromFormat('Y-m-d', $empresa->fecha_limite);
        $fechaLimiteFormateada = $fechaLimite->format('d-m-Y');

        // if ($añoActual < $fechaLimiteFormateada) {

        //     //return view('welcome', compact('preguntas', 'generos', 'areas'));
        //     return view('error');
        //     //return "ok";
        // } else if($encuestas >= $cantidad_encuestados) {

        //     return view('mensaje');
        //     //return "No";
        // }
        // else{
        //     return view('welcome', compact('preguntas', 'generos', 'areas')); 
        // }

        switch (true) {
            case $añoActual > $fechaLimiteFormateada:
                return view('error');
                break;

            case $encuestas >= $cantidad_encuestados:
                return view('mensaje');
                break;

            case $añoActual == $fechaLimiteFormateada:
                return view('welcome', compact('preguntas', 'generos', 'areas'));
                break;

            default:
                return view('welcome', compact('preguntas', 'generos', 'areas'));
                break;
        }

        //return $añoActual;
        //return view('welcome', compact('preguntas', 'generos', 'areas'));

        //return $fechaLimiteFormateada;
    }

    public function store(Request $request)
    {

        $request->validate([
            'fec_nac_encuestado' => 'required|date',
            'fec_ing_encuestado' => 'required|date',
        ]);

        $fechaNac = $request->fec_nac_encuestado;
        $fechaIng = $request->fec_ing_encuestado;

        $rango_edad_id = "";
        $rango_antiguedad_id = "";

        // Calcular la edad del personal
        $fechaNacimiento = Carbon::parse($fechaNac);
        $edad = $fechaNacimiento->age;

        $fechaIngreso = Carbon::parse($fechaIng);
        $hoy = Carbon::now();
        $antiguedad = $fechaIngreso->diffInYears($hoy);

        if ($edad < 18) {
            return redirect()->route('encuesta.index')->with('error', 'ok');
        }

        switch (true) {
            case $edad >= 18 && $edad <= 24:
                $rango_edad_id = '1';
                break;

            case $edad >= 25 && $edad <= 30:
                $rango_edad_id = '2';
                break;

            case $edad >= 31 && $edad <= 40:
                $rango_edad_id = '4';
                break;

            case $edad >= 41 && $edad <= 50:
                $rango_edad_id = '5';
                break;

            case $edad >= 51:
                $rango_edad_id = '6';
                break;

            default:
                # code...
                break;
        }

        switch (true) {
            case $antiguedad >= 0 && $antiguedad <= 1:
                $rango_antiguedad_id = '1';
                break;

            case $antiguedad >= 1 && $antiguedad <= 3:
                $rango_antiguedad_id = '2';
                break;

            case $antiguedad >= 3 && $antiguedad <= 5:
                $rango_antiguedad_id = '3';
                break;

            case $antiguedad >= 5 && $antiguedad <= 8:
                $rango_antiguedad_id = '4';
                break;

            case $antiguedad >= 8:
                $rango_antiguedad_id = '5';
                break;

            default:
                # code...
                break;
        }


        $encuestado = Encuestado::create($request->all() + [
            'rango_edad_id' => $rango_edad_id,
            'rango_antiguedad_id' => $rango_antiguedad_id
        ]);


        //return $encuestado;

        return view('gracias');
        //return $request->all();
        // return response()->json([
        //     'edad' => $edad,
        //     'antiguedad' => $antiguedad,
        //     'rango_edad_id' => $rango_edad_id,
        //     'rango_antiguedad_id' => $rango_antiguedad_id,
        //     'data' => $request->all()
        // ]);
    }

    public function export()
    {
        return new EncuestaExport();
    }
}
