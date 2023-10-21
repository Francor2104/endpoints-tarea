<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(ChampionSeeder::class);
        $this->call(ItemsSeeder::class);
        $this->call(RegionsSeeder::class);
        $this->call(GamemodesSeeder::class);
        $this->call(SummonerSpellsSeeder::class);
    }
}
