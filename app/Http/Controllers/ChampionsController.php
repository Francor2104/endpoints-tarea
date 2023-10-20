<?php

namespace App\Http\Controllers;

use App\Models\Champions;
use Illuminate\Http\Request;

class ChampionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $champions = Champions::all();

    return response()->json($champions);
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

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'role' => 'required|max:255',
            'difficulty' => 'required|integer|min:1|max:10',
            'release_date' => 'required|date',
        ], [
            'name.required' => 'El nombre es obligatorio.',
            'role.required' => 'El rol es obligatorio.',
            'difficulty.required' => 'La dificultad es obligatoria.',
            'difficulty.integer' => 'La dificultad debe ser un número entero.',
            'difficulty.min' => 'La dificultad mínima es 1.',
            'difficulty.max' => 'La dificultad máxima es 10.',
            'release_date.required' => 'La fecha de lanzamiento es obligatoria.',
            'release_date.date' => 'La fecha de lanzamiento debe ser una fecha válida. El formato es: "año-dia-mes"',
        ]);

        $champion = new Champions($validatedData);
        $champion->save();

        return response()->json([
            'message' => 'Campeón creado satisfactoriamente!',
            'data' => $champion
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Champions $champions)
    {
        $champion = Champions::all();

        if (!$champion) {
            return response()->json([
                'message' => 'Champion not found'
            ], 404);
        }

        return response()->json($champion);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Champions $champions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Champions $champions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Champions $champions)
    {
        //
    }
}
