<?php

namespace App\Http\Controllers;

use App\Models\Dimension;
use Illuminate\Http\Request;

class DimensionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Dimension::query();
        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $query->where('descripcion', 'LIKE', "%$searchTerm%");
        }
        $dimensiones = $query->paginate(5);
        $dimensiones->appends(['search' => $request->input('search')]);


        return view('dimensiones.index', compact('dimensiones'));
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
        Dimension::create($request->all() + [

            // 'user_id' => Auth::user()->id

        ]);
        return redirect()->route('dimensiones.index')->with('guardar', 'ok');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dimension $dimension)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dimension $dimension)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dimension $dimensione)
    {
        $request->validate([
            'edit_descripcion' => 'required',
        ], [
            'edit_descripcion.required' => 'Ingrese el nombre de la cobertura.',
        ]);

        $dimensione->update([[
            // $zona_embarque->nombre = $request->edit_nombre,
            $dimensione->descripcion = $request->edit_descripcion,
        ]]);

        return redirect()->route('dimensiones.index')->with('actualizar', 'ok');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dimension $dimensione)
    {
        $dimensione->estado = 2;
        $dimensione->save();

        return redirect()->route('dimensiones.index')->with('desactivar', 'ok');
    }

    public function activar(Dimension $dimensione)
    {
        $dimensione->estado = 1;
        $dimensione->save();
        return redirect()->route('dimensiones.index')->with('activar', 'ok');
    }

}
