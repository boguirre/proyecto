<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Genero;
use App\Models\Pregunta;
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

        return view('welcome', compact('preguntas', 'generos', 'areas'));
    }

    public function store(Request $request)
    {
        return view('gracias');
    }
}