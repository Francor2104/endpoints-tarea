<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGamemodesRequest;
use App\Http\Requests\UpdateGamemodesRequest;
use App\Models\Gamemodes;

class GamemodesController extends Controller
{

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
    public function store(StoreGamemodesRequest $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'map' => 'required|max:255',
            'max-players' => 'required|max:16',
            'rotative' => 'required',
        ], [
            'name.required' => 'All maps need a name',
            'map.required' => 'We need somewhere to fight',
            'max-players.required' => 'we need some fighters',
            'max-players.max' => 'That\'s too many fighters!',
            'rotative.required' => 'We need to know if we like playing it or not so that you can remove it regardless',
        ]);

        $Gamemode = new Gamemodes($validatedData);
        $Gamemode->save();

        return response()->json([
            'message' => 'That\'s a new Game Mode created, enjoy!',
            'data' => $Gamemode
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Gamemodes $gamemodes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gamemodes $gamemodes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGamemodesRequest $request, Gamemodes $gamemodes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gamemodes $gamemodes)
    {
        //
    }
}
