<?php

namespace App\Http\Controllers;

use App\Models\Dimension;
use App\Models\SubDimension;
use Illuminate\Http\Request;

class SubDimensionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = SubDimension::query();
        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $query->where('descripcion', 'LIKE', "%$searchTerm%");
        }
        $subdimensiones = $query->paginate(5);
        $subdimensiones->appends(['search' => $request->input('search')]);

        $dimensiones= Dimension::where('estado',1)->get();

        return view('subdimensiones.index', compact('subdimensiones','dimensiones'));
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
            'dimension_id' => 'required',
        ], [
            'descripcion.required' => 'Ingrese el nombre de la cobertura.',
            'dimension_id.required' => 'Seleccione la dimensión.',

        ]);

        SubDimension::create($request->all() + [

            // 'user_id' => Auth::user()->id

        ]);
        return redirect()->route('subdimensiones.index')->with('guardar', 'ok');
    }

    /**
     * Display the specified resource.
     */
    public function show(SubDimension $subdimensione)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SubDimension $subdimensione)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SubDimension $subdimensione)
    {
        $request->validate([
            'edit_descripcion' => 'required',
            'edit_dimension_id' => 'required',

        ], [
            'edit_descripcion.required' => 'Ingrese el nombre de la cobertura.',
            'edit_dimension_id.required' => 'Seleccione la dimensión.'

        ]);

        $subdimensione->update([[
            // $zona_embarque->nombre = $request->edit_nombre,
            $subdimensione->dimension_id = $request->edit_dimension_id,

            $subdimensione->descripcion = $request->edit_descripcion,
        ]]);

        return redirect()->route('subdimensiones.index')->with('actualizar', 'ok');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubDimension $subdimensione)
    {
        $subdimensione->estado = 2;
        $subdimensione->save();

        return redirect()->route('subdimensiones.index')->with('desactivar', 'ok');
    }
    public function activar(SubDimension $subdimensione)
    {
        $subdimensione->estado = 1;
        $subdimensione->save();
        return redirect()->route('subdimensiones.index')->with('activar', 'ok');
    }
}
