<?php

use App\Http\Controllers\ChampionsController;
use App\Http\Controllers\GamemodesController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\RegionsController;
use App\Http\Controllers\SummonerSpellsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/champions', [ChampionsController::class, 'store']);
Route::get('/items', [ItemsController::class, 'index']);
Route::post('/regions', [RegionsController::class, 'store']);


Route::post('/gamemodes', [GamemodesController::class, 'store']);
Route::get('/summoners', [SummonerSpellsController::class, 'index']);

