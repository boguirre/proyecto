<?php

namespace App\Http\Controllers;

use App\Models\RangoEdad;
use Illuminate\Http\Request;

class RangoEdadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = RangoEdad::query();
        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $query->where('descripcion', 'LIKE', "%$searchTerm%");
        }
        $rangoEdades = $query->paginate(5);
        $rangoEdades->appends(['search' => $request->input('search')]);


        return view('rango-edad.index', compact('rangoEdades'));
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

        RangoEdad::create($request->all() + [
            // 'user_id' => Auth::user()->id
        ]);
        return redirect()->route('rango-edad.index')->with('guardar', 'ok');
    }

    /**
     * Display the specified resource.
     */
    public function show(RangoEdad $rango_edad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RangoEdad $rango_edad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RangoEdad $rango_edad)
    {
        $request->validate([
            'edit_descripcion' => 'required',
        ], [
            'edit_descripcion.required' => 'Ingrese el nombre de la cobertura.',
        ]);

        $rango_edad->update([[
            // $zona_embarque->nombre = $request->edit_nombre,
            $rango_edad->descripcion = $request->edit_descripcion,
        ]]);

        return redirect()->route('rango-edad.index')->with('actualizar', 'ok');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RangoEdad $rango_edad)
    {
        $rango_edad->estado = 2;
        $rango_edad->save();

        return redirect()->route('rango-edad.index')->with('desactivar', 'ok');
    }

    public function activar(RangoEdad $rango_edad)
    {
        $rango_edad->estado = 1;
        $rango_edad->save();
        return redirect()->route('rango-edad.index')->with('activar', 'ok');
    }
}
