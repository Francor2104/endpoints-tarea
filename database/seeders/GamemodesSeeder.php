<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GamemodesSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('gamemodes')->insert([
            ['name' => 'Summoner\'s Rift', 'map' => 'Summoner\'s Rift', 'max-players' => 10, 'rotative' => false],
            ['name' => 'ARAM', 'map' => 'Howling Abyss', 'max-players' => 10, 'rotative' => false],
            ['name' => 'Twisted Treeline', 'map' => 'Twisted Treeline', 'max-players' => 6, 'rotative' => true],
            ['name' => 'Ultimate Spellbook', 'map' => 'Summoner\'s Rift', 'max-players' => 10, 'rotative' => true],
            ['name' => 'Nexus Blitz', 'map' => 'Nexus Blitz', 'max-players' => 10, 'rotative' => true],
            ['name' => 'Teamfight Tactics', 'map' => 'Convergence', 'max-players' => 8, 'rotative' => false],
        ]);
    }
}
