<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSummonerSpellsRequest;
use App\Http\Requests\UpdateSummonerSpellsRequest;
use App\Models\SummonerSpells;

class SummonerSpellsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Summoners = SummonerSpells::all();

        return response()->json($Summoners);
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
    public function store(StoreSummonerSpellsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SummonerSpells $summonerSpells)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SummonerSpells $summonerSpells)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSummonerSpellsRequest $request, SummonerSpells $summonerSpells)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SummonerSpells $summonerSpells)
    {
        //
    }
}
