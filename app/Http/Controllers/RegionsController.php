<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegionsRequest;
use App\Http\Requests\UpdateRegionsRequest;
use App\Models\Items;
use App\Models\Regions;

class RegionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreRegionsRequest $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255',
        ], [
            'name.required' => 'Las regiones necesitan un nombre.',
            'name.max' => 'El nombre no puede tener más de 255 caracteres.',
            'description.required' => 'Las regiones necesitan una descripción.',
            'description.max' => 'La descripción no puede tener más de 255 caracteres.',
        ]);

        $champion = new Items($validatedData);
        $champion->save();

        return response()->json([
            'message' => 'Campeón creado satisfactoriamente!',
            'data' => $champion
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Regions $regions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Regions $regions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRegionsRequest $request, Regions $regions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Regions $regions)
    {
        //
    }
}
