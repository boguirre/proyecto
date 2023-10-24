<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Genero;
use App\Models\Pregunta;
use App\Models\SubDimension;
use App\Models\TipoRespuesta;
use Illuminate\Http\Request;

class PreguntaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Pregunta::query();
        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $query->where('descripcion', 'LIKE', "%$searchTerm%");
        }

        $preguntas = $query->paginate(5);
        $preguntas->appends(['search' => $request->input('search')]);

        $sub_dimensiones = SubDimension::all();
        $tipo_respuestas = TipoRespuesta::all();

        return view('preguntas.index', compact('preguntas', 'sub_dimensiones', 'tipo_respuestas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'descripcion' => 'required',
        ], [
            'descripcion.required' => 'Ingrese el nombre de la pregunta.',
        ]);

        $pregunta = Pregunta::create($request->all());

        $pregunta->cod_num_preg = $pregunta->id;
        $pregunta->save();


        return redirect()->route('pregunta.index')->with('guardar', 'ok');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pregunta $pregunta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pregunta $pregunta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pregunta $preguntum)
    {
        $request->validate([
            'edit_descripcion' => 'required',
            'edit_cod_num_preg' => 'required|unique:preguntas,cod_num_preg,' . $preguntum->id,
        ], [
            'edit_descripcion.required' => 'Ingrese el nombre de la pregunta.',
        ]);

        $preguntum->update([

            "descripcion" => $request->edit_descripcion,
            "cod_num_preg" => $request->edit_cod_num_preg,
            "sub_dimension_id" => $request->edit_sub_dimension_id,
            "tipo_r_01_id" => $request->edit_tipo_r_01_id,
            "tipo_r_02_id" => $request->edit_tipo_r_02_id,
            "tipo_r_03_id" => $request->edit_tipo_r_03_id,
            "tipo_r_04_id" => $request->edit_tipo_r_04_id,
            "tipo_r_05_id" => $request->edit_tipo_r_05_id,
            "val_r_01" => $request->edit_val_r_01,
            "val_r_02" => $request->edit_val_r_02,
            "val_r_03" => $request->edit_val_r_03,
            "val_r_04" => $request->edit_val_r_04,
            "val_r_05" => $request->edit_val_r_05,
            
        ]);

        return redirect()->route('pregunta.index')->with('actualizar', 'ok');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pregunta $preguntum)
    {
        $preguntum->estado = 2;
        $preguntum->save();
        return redirect()->route('pregunta.index')->with('desactivar', 'ok');;
    }

    public function activar(Pregunta $preguntum)
    {
        $preguntum->estado = 1;
        $preguntum->save();
        return redirect()->route('pregunta.index')->with('activar', 'ok');;
    }
}
