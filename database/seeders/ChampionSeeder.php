<?php

namespace Database\Seeders;

use App\Models\Champions;
use Illuminate\Database\Seeder;

class ChampionSeeder extends Seeder
{
    public function run(): void
    {
        Champions::create([
            'name' => 'Ashe',
            'role' => 'Marksman',
            'difficulty' => 4,
            'release_date' => '2009-02-21',
        ]);

        Champions::create([
            'name' => 'Garen',
            'role' => 'Fighter',
            'difficulty' => 1,
            'release_date' => '2010-04-27',
        ]);

        Champions::create([
            'name' => "Kha'Zix",
            'role' => 'Assassin',
            'difficulty' => 6,
            'release_date' => '2012-09-27',
        ]);
        Champions::create([
            'name' => "Seraphine",
            'role' => "Mage",
            "difficulty" => 5,
            "release_date" => "2020-10-13"
        ]);

         Champions::create([
             "name" => "Viego",
             "role" => "Assassin",
             "difficulty" => 5,
             "release_date" => "2022-01-21"
         ]);
    }
}
