<?php

namespace App\Http\Controllers;

use App\Models\TipoRespuesta;
use Illuminate\Http\Request;

class TipoRespuestaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = TipoRespuesta::query();
        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $query->where('descripcion', 'LIKE', "%$searchTerm%");
        }
        $tipoRespuestas = $query->paginate(5);
        $tipoRespuestas->appends(['search' => $request->input('search')]);


        return view('tipo-respuestas.index', compact('tipoRespuestas'));
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
            'descripcion.required' => 'Ingrese el nombre de la cobertura.',
        ]);
        TipoRespuesta::create($request->all() + [

            // 'user_id' => Auth::user()->id

        ]);
        return redirect()->route('tipo-respuestas.index')->with('guardar', 'ok');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(TipoRespuesta $tipo_respuesta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TipoRespuesta $tipo_respuesta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TipoRespuesta $tipo_respuesta)
    {
        $request->validate([
            'edit_descripcion' => 'required',
        ], [
            'edit_descripcion.required' => 'Ingrese el nombre de la cobertura.',
        ]);

        $tipo_respuesta->update([[
            // $zona_embarque->nombre = $request->edit_nombre,
            $tipo_respuesta->descripcion = $request->edit_descripcion,
        ]]);

        return redirect()->route('tipo-respuestas.index')->with('actualizar', 'ok');
   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TipoRespuesta $tipo_respuesta)
    {
        $tipo_respuesta->estado = 2;
        $tipo_respuesta->save();

        return redirect()->route('tipo-respuestas.index')->with('desactivar', 'ok');
    }

    public function activar(TipoRespuesta $tipo_respuesta)
    {
        $tipo_respuesta->estado = 1;
        $tipo_respuesta->save();
        return redirect()->route('tipo-respuestas.index')->with('activar', 'ok');
    }
}
