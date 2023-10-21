<?php

namespace App\Http\Controllers;

use App\Models\Champions;
use Illuminate\Http\Request;
use App\Http\Requests\ChampionRequest;

class ChampionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
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
    public function store(ChampionRequest $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'role' => 'required|max:255',
            'difficulty' => 'required|integer|min:1|max:10',
            'release_date' => 'required|date',
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
