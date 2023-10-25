<?php

namespace App\Http\Controllers;

use App\Models\RangoAntiguedad;
use App\Models\RangoEdad;
use Illuminate\Http\Request;

class RangoAntiguedadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = RangoAntiguedad::query();
        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $query->where('descripcion', 'LIKE', "%$searchTerm%");
        }
        $rangoAntiguedades = $query->paginate(5);
        $rangoAntiguedades->appends(['search' => $request->input('search')]);


        return view('rango-antiguedad.index', compact('rangoAntiguedades'));
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

        RangoAntiguedad::create($request->all() + [

            // 'user_id' => Auth::user()->id

        ]);
        return redirect()->route('rango-antiguedad.index')->with('guardar', 'ok');
    }

    /**
     * Display the specified resource.
     */
    public function show(RangoAntiguedad $rango_antiguedad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RangoAntiguedad $rango_antiguedad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RangoAntiguedad $rango_antiguedad)
    {
        $request->validate([
            'edit_descripcion' => 'required',
        ], [
            'edit_descripcion.required' => 'Ingrese el nombre de la cobertura.',
        ]);

        $rango_antiguedad->update([[
            // $zona_embarque->nombre = $request->edit_nombre,
            $rango_antiguedad->descripcion = $request->edit_descripcion,
        ]]);

        return redirect()->route('rango-antiguedad.index')->with('actualizar', 'ok');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RangoAntiguedad $rango_antiguedad)
    {
        $rango_antiguedad->estado = 2;
        $rango_antiguedad->save();

        return redirect()->route('rango-antiguedad.index')->with('desactivar', 'ok');
    }

    public function activar(RangoAntiguedad $rango_antiguedad)
    {
        $rango_antiguedad->estado = 1;
        $rango_antiguedad->save();
        return redirect()->route('rango-antiguedad.index')->with('activar', 'ok');
    }
}
