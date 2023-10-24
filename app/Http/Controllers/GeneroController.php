<?php

namespace App\Http\Controllers;

use App\Models\Genero;
use Illuminate\Http\Request;

class GeneroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // $generos = Genero::get();


        $query = Genero::query();
        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $query->where('descripcion', 'LIKE', "%$searchTerm%");
        }
        $generos = $query->paginate(5);
        $generos->appends(['search' => $request->input('search')]);

        return view('generos.index', compact('generos'));
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
        Genero::create($request->all() + [

            // 'user_id' => Auth::user()->id

        ]);
        return redirect()->route('generos.index')->with('guardar', 'ok');
    }

    /**
     * Display the specified resource.
     */
    public function show(Genero $genero)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Genero $genero)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Genero $genero)
    {
        $request->validate([
            'edit_descripcion' => 'required',
        ], [
            'edit_descripcion.required' => 'Ingrese el nombre de la cobertura.',
        ]);

        $genero->update([[
            // $zona_embarque->nombre = $request->edit_nombre,
            $genero->descripcion = $request->edit_descripcion,
        ]]);

        return redirect()->route('generos.index')->with('actualizar', 'ok');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Genero $genero)
    {
        $genero->estado = 2;
        $genero->save();

        return redirect()->route('generos.index')->with('desactivar', 'ok');
    }

    public function activar(Genero $genero)
    {
        $genero->estado = 1;
        $genero->save();
        return redirect()->route('generos.index')->with('activar', 'ok');
    }
}
