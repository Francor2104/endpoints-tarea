<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreItemsRequest;
use App\Http\Requests\UpdateItemsRequest;
use App\Models\Items;

class ItemsController extends Controller
{
    public function index()
    {
        $items = Items::all();

    return response()->json($items);
    }


    public function create()
    {
        //
    }

    public function store(StoreItemsRequest $request)
    {
        //
    }

    public function show(Items $items)
    {
        //
    }

    public function edit(Items $items)
    {
        //
    }

    public function update(UpdateItemsRequest $request, Items $items)
    {
        //
    }

    public function destroy(Items $items)
    {
        //
    }
}
