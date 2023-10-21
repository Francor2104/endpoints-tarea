<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegionRequest;
use App\Http\Requests\StoreRegionsRequest;
use App\Http\Requests\UpdateRegionsRequest;
use App\Models\Items;
use App\Models\Regions;

class RegionsController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(RegionRequest $request)
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

        $champion = new Regions($validatedData);
        $champion->save();

        return response()->json([
            'message' => 'Region creada, ahora esperemos que surjan campeones!',
            'data' => $champion
        ], 201);
    }

    public function show(Regions $regions)
    {
        //
    }


    public function edit(Regions $regions)
    {
        //
    }


    public function update(UpdateRegionsRequest $request, Regions $regions)
    {
        //
    }


    public function destroy(Regions $regions)
    {
        //
    }
}
