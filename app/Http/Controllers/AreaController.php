<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // $areas = Area::get();

        $query = Area::query();
        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $query->where('descripcion', 'LIKE', "%$searchTerm%");
        }
        $areas = $query->paginate(5);
        $areas->appends(['search' => $request->input('search')]);


        return view('areas.index', compact('areas'));
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
        Area::create($request->all() + [

            // 'user_id' => Auth::user()->id

        ]);
        return redirect()->route('areas.index')->with('guardar', 'ok');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Area $area)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Area $area)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Area $area)
    {
        $request->validate([
            'edit_descripcion' => 'required',
        ], [
            'edit_descripcion.required' => 'Ingrese el nombre de la cobertura.',
        ]);

        $area->update([[
            // $zona_embarque->nombre = $request->edit_nombre,
            $area->descripcion = $request->edit_descripcion,
        ]]);

        return redirect()->route('areas.index')->with('actualizar', 'ok');
   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Area $area)
    {
        $area->estado = 2;
        $area->save();

        return redirect()->route('areas.index')->with('desactivar', 'ok');
    }

    public function activar(Area $area)
    {
        $area->estado = 1;
        $area->save();
        return redirect()->route('areas.index')->with('activar', 'ok');
    }
}
